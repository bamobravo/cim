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
//this is going to be used for the api and the api alone
	public function v($page)
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
}
 ?>