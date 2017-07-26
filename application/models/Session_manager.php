<?php
/**
*
*/
class Session_manager extends CI_Model
{
	private $defaultRole = array('applicant','student','lecturer','staff');
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('crud');
	}
	/**
	 * This functio save the current user into the session
	 * @param  Crud    $user        [The user object needed to be saved in the session]
	 * @param  boolean $saveAllInfo [specify to save the user category data that the user belongs to]
	 * @return void               void
	 */
	public function saveCurrentUser(Crud $user,$saveAllInfo=false){

		$this->load->model("entities/role");
	//the user must be the user object returned from the user model class
		$roleid=$user->role;
		$roleObject = $this->role->view($roleid);
		if (!$roleObject) {
			echo 'user role not valid';
			exit;
		}
		$rolename = $roleObject->role_name;
		$this->session->set_userData('usertype',$rolename);
		$userArray = $user->toArray();
		$additional = array();
		if ($saveAllInfo && in_array($rolename, $this->defaultRole)) {
			$this->loadClass($rolename);
			$additional = $this->$rolename->getWhere(array('user_ID'=>$user->ID),$count,0,null,false);
			if (!$additional) {
				$this->session->set_userdata($userArray);
				return;
			}
			$additional = $additional[0]->toArray();
			// $additional = $additional->toArray();
			$userid = $additional['ID'];
			unset($additional['ID']);
			$additional['user_ID']=$userid;
		}

		$result = array_merge($userArray,$additional);
		$this->session->set_userdata($result);
	}

	public function getCurrentUserDefaultRole(){
		$rolename = $this->getCurrentUserProp('usertype');
		if ($rolename==false) {
			redirect(base_url().'auth/logout');
		}
		return in_array($rolename, $this->defaultRole)?$rolename:'admin';
	}
	public function getCurrentUser(&$more){
		$userType = $this->session->userdata('usertype');
		$user = $this->loadObjectFromSession('User');
		$len = func_num_args();
		if ($len == 1) {
			$more = $this->loadObjectFromSession(ucfirst($userType));
		}
		return $user;
	}
	private function loadObjectFromSession($classname){
		$this->load->model(lcfirst($classname));
		$field = array_keys($classname::$fieldLabel);
		for ($i=0; $i < count($field); $i++) {
			$temp =$this->session->userdata($field[$i]);
			if (!$temp) {
				continue;
			}
			$array[]= $temp;
		}
		return new $classname($array);//return the object for some process
	}
	public function logout(){
		//just clear the session
		$this->session->sess_destroy();
	}
	/**
	 * get the user property saved in the session
	 * @param  [string] $propname [the property to get from the session]
	 * @return [mixed]           [the value saved in the session with the key or empty string if the item is not present in the database]
	 */
	public function getCurrentUserProp($propname){
		return $this->session->userdata($propname);
   	}
   	/**
   	 * checks if the session is active or not
   	 * @return boolean [true if the session is active or false otherwise]
   	 */
   	public function isSessionActive(){
   		$userid = $this->session->userdata('ID');
   		if (!empty($userid)) {
   			return true;
   		}
   		else{
   			return false;
   		}
   	}

   	public function getFlashMessage($name){
   		return $this->session->flashdata($name);
   	}

   	public function setFlashMessage($name,$value){
   		$this->session->set_flashData($name,$value);
   	}

   	public function isApplicantSessionActive(){
   		$userid = $this->getCurrentUserProp('ID');
   		$application = $this->getCurrentUserProp('admission_Application_ID');
   		if (!(empty($userid) || empty($application))) {
   			return true;
   		}
   		else{
   			return false;
   		}
   	}

//this function is used to set content on the session. This is delegating to the default session function on codeigniter
   	public function setContent($name,$value){
   		$this->session->set_userdata($name,$value);
   	}
   	function setArrayContent($array){
   		$this->session->set_userdata($array);
   	}
   	private function loadClass($classname){
   		if (!class_exists(ucfirst($classname))) {
   			$this->load->model("entities/$classname");
   		}
   	}

   	// this set of function check the type of user that is currently logged in
   	function isCurrentUserType($userType){
   		$userid = $this->getCurrentUserProp('ID');
   		 if (!$userid) {
              redirect(base_url('auth/logout'));exit;
          }
   		$this->loadClass('user');
   		$user = new User();
   		$user->ID= $userid;
   		if (method_exists($user, "get".ucfirst($userType))) {
   			$result =  $user->$userType;
   			if (!empty($result)) {
   				return $result[0];
   			}
   			return false;
   		}
         else if($userType=='admin'){
            if ($user->load()) {
               return $user;
            }
            return false;
         }
   		else{
   			return false;
   		}

   	}

   	function getCurrentUserType(){

   	}

   	//function to get the current session
   	function getCurrentSession($force=false){
   		$id = $this->getCurrentUserProp('ed_cur_ses');
   		if (!empty($id) && !$force) {
   			return $id;
   		}
   		$this->load->database();
   		$query = "select ID from academic_session where status='1' limit 1";
   		$result = $this->db->query($query);
   		$result = $result->result_array();
   		$result = $result[0]['ID'];
   		$this->setContent('ed_cur_ses',$result);
   		return $result;
   	}

   	//function to get user type object, that is get lecturer, student etc,admin etc
   	function getCurrentSessionSemester(){
   		$id = $this->getCurrentUserProp('ed_cur_ses_sem');
   		if (!empty($id)) {
   			return $id;
   		}
   		$currentSession = $this->getCurrentSession();
   		$query="select session_semester.ID from session_semester where academic_session_ID=?";
   		$result = $this->db->query($query,array($currentSession));
   		$result = $result->result_array();
   		$result = $result[0]['ID'];
   		$this->setContent('ed_cur_ses_sem',$result);
   		return $result;
   	}

   function getAllData(){
      return $this->session->all_userdata();
   }
}

 ?>
