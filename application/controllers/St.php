<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St extends CI_Controller {

	public function __construct($value='')
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		// echo "got here";exit;
		// $this->load->view('static/index');
		header("Location:v/index");exit;
	}

	public function v($page='index')
	{
		if (!file_exists('application/views/static/'.$page.'.php')) {
			show_404();
		}
		$this->load->view('static/'.$page);
	}

}
