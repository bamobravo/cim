<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St extends CI_Controller {

	public function __construct($value='')
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
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
		if (isset($_POST['btn'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if ($password && $username) {
				$user=$this->validateUser($username,$password);
				if ($user) {
					$resp['status']=true;
					$resp['message']=base_url('adm');
					$this->session->set_userdata('uid',$user[0]['id']);
					$this->session->set_userdata('logged',true);
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
	public function signin()
	{
		$this->load->view('login');
	}
	private function validateUser($username,$password)
	{
		$query = "select * from user where username=? and password=?";
		$result = $this->db->query($query,array($username,md5($password)));
		return $result->result_array();
	}
}
