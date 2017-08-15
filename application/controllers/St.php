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

	public function v($page='index',$param=false)
	{
		if (!file_exists('application/views/static/'.$page.'.php')) {
			show_404();
		}
		$data = array();
		$method = $page.'Data';
		if (method_exists($this, $method)) {
			if ($param) {
				$data=$this->$method($param);
			} else {
				$data=$this->$method();
			}
			
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
	private function news_detailsData($id)
	{
		$query ="select * from news where id=?";
		$result = $this->db->query($query,array($id));
		$result = $result->result_array();
		$return = array();
		if ($result ==false) {
			$return['news']=false;
		} else {
			$return['news']=$result[0];
			return $return;
		}
		
	}
	private function blogData($id)
	{
		$query ="select * from blog where id=?";
		$result = $this->db->query($query,array($id));
		$result = $result->result_array();
		$return = array();
		if ($result ==false) {
			$return['blog']=false;
		} else {
			$return['blog']=$result[0];
			return $return;
		}
		
	}
	private function donationsData()
	{
		$query = "select purpose from payment_purpose";
		$result = $this->db->query($query);
		$result = $result->result_array();
		$return['purpose']=$result;
		return $return;
	}
	private function eventsData()
	{
		$query = "select * from event order by start_date desc";
		$result = $this->db->query($query);
		$result = $result->result_array();
		$return['events']=$result;
		return $return;
	}
	private function sermonsData()
	{
		$query = "select * from sermon order by date_posted desc";
		$result = $this->db->query($query);
		$result = $result->result_array();
		$return['sermons']=$result;
		return $return;
	}
	private function sermonData($id)
	{
		$query="select * from sermon where id=?";
		$result = $this->db->query($query,array($id));
		$result = $result->result_array();
		$return['sermon']=$result[0];
		return $return;
	}
	public function initP()
	{
		if (isset($_POST['sub'])) {
			$name = $_POST['name'];
			$email =$_POST['email'];
			$phone = $_POST['phone'];
			$purpose=$_POST['purpose'];
			$amount = $_POST['amount'];
			if (empty($amount) || empty($purpose)) {
				echo "kindly specify amount amount and purpose of donation";exit;
			}
			$data = $_POST;
			$data['link']='';//link to the payment gateway, the specification of other parameters will be done here too.
			$this->load->view('payment_gateway',$data);
		} else {
			show_404();
		}
		
	}
	private function newsData()
	{
		$len = 30;
		$start=isset($_GET['p'])?$_GET['p']:'';
		# select new and blog for the display
		$query = "select * from blog order by id desc limit $start $len";
		$result = $this->db->query($query);
		$result = $result->result_array();
		$return['blogs']=$result;
		$query = "select * from news order by id desc";
		$result = $this->db->query($query);
		$return['news']=$result->result_array();
		return $return;
	}
	private function showError()
	{
		echo "error occured";exit;
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
