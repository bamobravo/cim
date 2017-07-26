<?php 
	/**
	* The controller for all other ahax axtion
	*/
	class Misc extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('array');
			$this->load->model('Session_manager');
			//check that the session is currently active here
			$this->checkActiveSession();
		}

		private function checkActiveSession()
		{
			//set a dummy session value here
			$this->Session_manager->setContent('cApplicant',39);
			if($this->Session_manager->getCurrentUserProp('cApplicant') || $this->Session_manager->getCurrentUserProp('uid')){
				return true;
			}
			show_site_error($this->load,'error','Session Validation Error','invalid session');exit;
		}
		public function addTrades($center)	
		{

			if (isset($_POST['go-btn'])) {
				unset($_POST['go-btn']);
				$trade = array_values($_POST);
				loadClass($this->load,'Center_trade');
				$result =$this->Center_trade->saveBulk($center,$trade);
				if ($result) {
					$response['status']=true;
					$response['message']='trades added successfully';
					echo json_encode($response);
				}
				else{
					$response['status']=false;
					$response['message']='error occured while saving information';
					echo json_encode($response);
				}
			}
		}
public function delTrade($center)
{
	if (isset($_POST['go-btn-del'])) {
		unset($_POST['go-btn-del']);
		$trade = array_values($_POST);
		loadClass($this->load,'Center_trade');
		$result =$this->Center_trade->removeTrade($center,$trade);
		if ($result) {
			$response['status']=true;
			$response['message']='trades removed successfully';
			echo json_encode($response);
		}
		else{
			$response['status']=false;
			$response['message']='error occured while removing information';
			echo json_encode($response);
		}
	}
}
		public function state($nationality)
		{
			if ($nationality=='Nigerian') {
				$array = loadStates();
				echo $this->returnJSONFromNonAssocArray($array);
			}
			else{
				$array = array();
				echo $this->returnJSONFromNonAssocArray($array);
			}
		}
		public function lga($state)
		{
			$array = @loadLga($state);
			echo $this->returnJSONFromNonAssocArray($array);
		}
		private function returnJSONFromNonAssocArray($array){
				//process if into id and value then
				$result =array();
				for ($i=0; $i < count($array); $i++) {
					$current =$array[$i];
					$result[]=array('id'=>$current,'value'=>$current);
				}
				return json_encode($result);
			}

		public function trade($college)
		{
			loadClass($this->load,'College_trade');
			$response =$this->College_trade->loadTradeByCollege($college);
			if ($response==false) {
				$response=array();
			}
			echo json_encode($response);
		}

		public function trade1($trade){
			$this->Session_manager->setContent('f1',$trade);
			$this->loadCenter();
		}
		public function trade2($trade)
		{
			$this->Session_manager->setContent('f2',$trade);
			$this->loadCenter();
		}
		private function loadCenter(){
			loadClass($this->load,'Center_trade');
			$result = $this->Center_trade->loadCenter();
			echo $this->json_encode($result);;
		}

		//function for completely saving student registration record and showing the 
		public function completeRegistration($value='')
		{
			loadClass($this->load,'Applicant');
			$app = $this->Session_manager->getCurrentUserProp('cApplicant');
			$applicant = new Applicant();
			$applicant->ID = $app;
			$applicant->load();
			if($applicant->load() && $applicant->submitRegistration()){
				//redirect to printout page
				header("Location:".base_url('vc/registration/printout'));
			}
			else{
				show_site_error('error','Processing Error','Error saving applicant information finally');
			}
		}
}
 ?>