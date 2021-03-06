<?php 

/**
* The main controller for the admin section of the website
*/
class Adm extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		if ($this->session->userdata('logged')==false || $this->session->userdata('uid')==false) {
			header("Location:".base_url('st/signin'));
		}
		$this->load->model('Form_builder');
		$this->load->model('Table_generator');
	}
	public function v($page,$id='')
	{
		if (!$this->modelExists($page)) {
			show_404();exit;
		}
		$data['title']=ucfirst($page).' Information';
		$data['model']=$page;
		$exception=array();
		$method = $page.'Data';
		if(method_exists($this, $method)){
			$data = array_merge($data,$this->$method());
		}
		$data['id']=$id;
		$this->load->view('insert',$data);
	}
	private function query($query,$data=array()){
		$this->load->database();
		$result = $this->db->query($query,$data);
		return $result->result_array();
	}
	private function modelExists($model)
	{
		$query = "show tables";
		$result = $this->query($query);
		foreach ($result as $value) {
			if ($value['Tables_in_cim']==$model) {
				return true;
			}
		}
		return false;
	}
	public function index()
	{
		$data = $this->getDashboardInfo();
		$this->load->view('dashboard',$data);
	}
	private function getDashboardInfo()
	{
		$result = array();
		$result['title']='Church Information';
		return $result;
	}
	public function edit($model,$id=false)
	{
		if ($id===false) {
			if ($model=='church') {
				$id=$this->getChurch();
				if ($id===false) {
					$this->showChurchInfo();return;
				}
			}
			else{
				show_404();exit;
			}
		}
		$data['title']=$model.' Information';
		$data['model']=$model;
		$data['id']=$id;
		$this->load->view('update',$data);
	}
private function showChurchInfo($value='')
{
	$data['model']='church';
	$data['title']='Church Information';
	$this->load->view('church',$data);
}
public function enable($model,$id)
{
	$query="update $model set status =1 where id=?";
	$result = $this->db->query($query,array($id));
	$mes['status']=$result;
	$mes['message']=$result?"$model enabled successfully":"error while enabling $model";
	echo json_encode($mes);
}
public function disable($model,$id)
{
	$query="update $model set status =0 where id=?";
	$result = $this->db->query($query,array($id));
	$mes['status']=$result;
	$mes['message']=$result?"$model disabled successfully":"error while disabling $model";
	echo json_encode($mes);
}
private function getChurch()
{
	$query ="select id from church order by id";
	$result = $this->query($query);
	if ($result ==false) {
		return false;
	}
	return $result[0]['id'];
}
public function delete($model,$id)
{
	$query = "delete from $model where ID=?";
	$result = $this->db->query($query,array($id));
	$return=array();
	if ($result) {
		$return['status']=true;
		$return['message']="$model deleted successfully";
	}
	else{
		$return['status']=false;
		$return['message']='error occured while performing operation';
	}
	echo json_encode($return);exit;
}
}
 ?>