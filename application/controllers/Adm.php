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
	}

	public function v($page='login')
	{
		if (!file_exists('application/views/'.$page.'.php')) {
			show_404();
		}
		$data = method_exists($this, $page.'Data');
		$this->load->view($page,$data);
	}
}
 ?>