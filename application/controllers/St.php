<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St extends CI_Controller {

	public function __construct($value='')
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
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
	public function login()
	{
		print_r($_POST);exit;
		if (isset($_POST['btn'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if ($password && $username) {
				if ($this->validateUser($username,$password)) {
					$resp['status']=true;
					$resp['message']='authentication successful';
					echo json_encode($resp);
				}
				else{
					$resp['status']=false;
					$resp['message']="invalid username of password";
					echo json_encode($resp);
				}
			}
			else{
				$resp = array('status'=>false,'message'=>'empty value for username and password');
				echo json_encode($resp);exit;
			}
		}
	}
	private function validateUser($username,$password)
	{
		$query = "select * from user where username=? and password=?";
		$result = $this->db->query($query,array($username,md5($password)));
		return $result->result_row();
	}
}
