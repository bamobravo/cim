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
			$resp['status']=false;
			$resp['redirect']='st/signin';
			echo json_encode($resp);
		}
	}

	public function v($page)
	{
		if (!file_exists('application/views/'.$page.'.php')) {
			show_404();
		}
		$data = method_exists($this, $page.'Data');
		$this->load->view($page,$data);
	}
	public function index()
	{
		$data = $this->getDashboardInfo();
		$this->load->view('dashboard',$data);
	}
	private function getDashboardInfo()
	{
		$result = array();
		return $result;
	}
}
 ?>