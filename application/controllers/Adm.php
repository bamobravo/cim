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
	}
//this is going to be used for the api and the api alone
	public function v($page=false)
	{
		if (!isset($_POST['btn'])) {
			show_404();
		}
		if (empty($page) || !file_exists('application/views/'.$page.'.php')) {
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
		$result['title']='Church Information';
		return $result;
	}
}
 ?>