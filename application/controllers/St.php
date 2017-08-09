<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class St extends CI_Controller {

	public function __construct($value='')
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->database();
		$this->load->library('session');
	}
	public function index()
	{
		header("Location:st/v/index");exit;
	}

	public function v($page='index')
	{
		if (!file_exists('application/views/static/'.$page.'.php')) {
			show_404();
		}
		$data = array();
		$method = $page.'Data';
		if (method_exists($this, $method)) {
			$data=$this->$method();
		}
		$this->load->view('static/'.$page,$data);
	}

	private function indexData()
	{
		$church = $this->loadModel('church');
		if ($church==false) {
			$this->showError();exit;
		}
		$sermon = $this->loadModel('sermon','',' limit 3',' order by date_posted desc');
		$return['sermon']=$sermon;
		$return['church']=$church[0];
		$blog=$this->loadModel('blog','',' limit 3',' order by date_posted desc');
		$return['blog']=$blog;
		$event =$blog=$this->loadModel('event','',' limit 3',' order by start_date desc');
		$return['events']=$event;
		return $return;
	}
	private function showError()
	{
		echo "error occured";
	}
	private function loadModel($model,$where='',$limit='',$order='')
	{
		$query = "select * from $model $where $order $limit";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
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
					$this->session->set_userdata('uid',$user[0]['ID']);
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
		$data['title']='Login';
		$this->load->view('login',$data);
	}
	private function validateUser($username,$password)
	{
		$query = "select * from user where username=? and password=?";
		$result = $this->db->query($query,array($username,md5($password)));
		return $result->result_array();
	}
	public function logout()
	{
		$this->session->sess_destroy();
		header("Location:".base_url('st/signin'));
	}

}
