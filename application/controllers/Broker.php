<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Broker extends CI_Controller{

//field definition section
  private $needId= array();

  private $needMethod=array();
  private $errorMessage; // the error message currently produced from this cal if it is set, it can be used to produce relevant error to the user.
//
  function __construct(){
		parent::__construct();
		$this->load->model("Form_builder");
		$this->load->model("Table_generator");
		$this->load->helper('url');
    $this->load->helper('string');
    $this->load->helper('array');
    $this->load->model('Session_manager');
    $this->load->model('Query_table_builder');
    // $this->load->model('entities/application_log');
	}

//// bootsrapping functions 
  public function view($model,$page='index',$other=''){
    if ( !(file_exists("application/views/$model/") && file_exists("application/views/$model/$page".'.php')))
    {
      show_404();
    }
    //check the view permission here, dont set a strict rule for the dashboard
    // loadClass($this->load,'role');
    // if (!in_array($this->$session_manager->getCurrentUserProp('usertype'), array('student','applicant','lecturer','staff')) && !$this->role->canView($model,$page)) {
    //   # who the access denied page.
    //   show_access_denied($this->load);
    // }
    $defaultArgNum =3;
    $tempTitle = removeUnderscore($model);
    $title = $page=='index'?$tempTitle:ucfirst($page)." $tempTitle";
    //$schoolName = empty($this->session->userdata('schoolName'))?//till the school name getter is added
    $data['pageTitle'] = "school Name | $title";
    $data['id'] = $other;
    if (func_num_args() > $defaultArgNum) {
      $args = func_get_args();
      $this->loadExtraArgs($data,$args,$defaultArgNum);
    }
    $exceptions = array('login','apply');//pages that does not need active session
    // if (!in_array($page, $exceptions)) {
    //   if (!$this->Session_manager->isSessionActive()) {
    //     redirect(base_url());exit;
    //   }
    // }
     // $this->application_log->log($model,"trying to view $page");
    if (method_exists($this, $model)) {
      $this->$model($page,$data);
    }
    $methodName = $model.ucfirst($page);
    if (method_exists($this, $model.ucfirst($page))) {
      $this->$methodName($data);
    }
    $data['message']=$this->session->flashdata('message');
    // $this->application_log->log($model,"loads $page");
    sendPageCookie($model,$page);
    return $this->load->view("$model/$page", $data);
  }
  private function registration($page,&$data){
    // set the settings for all the registration modules here
    $exception = array('reg_start','personal','login'); 
    $pageTableMap = array('choice'=>'applicant_choice','guardian'=>'applicant_guardian','qualification'=>'certificate');//contains the name of page and the corresponding name of the table.
    if ($this->Session_manager->getCurrentUserProp('cApplicant')==false) {
      if (in_array($page, $exception)) {
        return;//this page with this category does not need validation
      }
      echo "this is going to display a standard error page when this is done";exit;
    }
    loadClass($this->load,'Applicant');
    $applicant = new Applicant();
    $applicant->ID =$this->Session_manager->getCurrentUserProp('cApplicant');
    if (!$applicant->load()) {
      exit('show the correct error page when this is one');
    }
    $this->load->model('Registration');
    $this->Registration->setApplicant($applicant);
    if (! array_key_exists($page, $pageTableMap)) {
      return;
    }
    $param['applicantID']=$this->Session_manager->getCurrentUserProp('cApplicant');
    $data['exists'] = @Crud::existWhere($this->db,$pageTableMap[$page],$param);
    // $this->Registration->Applicanthas($pageTableMap[$page]);
  }
  private function registrationPayment(&$data){
    $paymentInfo = $this->Registration->loadPaymentInfo();
    if ($paymentInfo ==false) {
      //show the correct information here
      echo "something happened here take a look at it";exit;
    }
    $data = array_merge($data,$paymentInfo);
  }
  private function registrationQualification(&$data)
  {
    $this->Registration->loadQualificationData($data);
  }
 
  private function registrationPreview(&$data)
  {
    //get all the information needed to get the preview information
    $data['previewInfo']=$this->Registration->getPreviewInfo();
  }
  private function registrationPrintout(&$data)
  {
    $data['regInfo']=$this->Registration->getPrintout();
  }
    // the method for generate table view, insertion, modification and deletion
  public function gen($model,$page='index',$other=''){
      if(!file_exists("application/models/entities/$model".'.php')){
        echo "first";
        show_404();exit;
      }
      if (! file_exists("application/views/$page".'.php'))
      {
        echo "second";
        show_404();exit;
      }

      $tempTitle = removeUnderscore($model);
      $title = $page=='index'?$tempTitle:ucfirst($page)." $tempTitle";
      $data['pageTitle'] = "school Name | $title";
      $data['displayName']= $tempTitle;
      $data['id'] = $other;
      $data['model']=$model;
      $data['message']=$this->session->flashdata('message');
      return $this->load->view("$page", $data);
    }

    private function adminCenter_trade(&$data)
    {
      loadClass($this->load,'Center_trade');
      loadClass($this->load,'Center');
      $this->Center->ID = $data['id'];
      $this->Center->load();
      $data['center']=$this->Center->center_name;
      $notPresent = $this->Center_trade->getTrades($data['id']);
      $selTrade = $this->Center_trade->getNotSelected($data['id']);
      $data['present']=convertToArray($selTrade);
      $data['absent']=convertToArray($notPresent);
    }

    private function registrationReceipt(&$data)
    {
      $data['paymentData']= $this->Registration->getReceiptInfo();
    }
    private function admin($page,&$data)
    {
      $this->load->model('AdminModel');
    }
    private function adminCollege_dashboard(&$data)
    {
      if (!isset($data['id'])) {
        show_404();exit;
      }
      loadClass($this->load,'College');
      $this->College->ID=$data['id'];
      if (!$this->College->load()) {
        show_404();exit;
      }
      $collegeTrades = $this->College->getTrades();
      $data['trades']=$collegeTrades;
      $data['college']=$this->College;
      //load the action section here
      $data['exam_info'] =$this->AdminModel->getCurrentInternalExamination();
      loadClass($this->load,'College_applicant');
      $data['currentlyRegistered']=$this->College_applicant->getByExamForDisplay($data['exam_info']['id'],$data['id']);
    }
    private function registrationDashboard(&$data)
    {
      $dashboardInfo = $this->Registration->getDashboardInfo();
      if ($dashboardInfo['paymentInfo']==false) {
        header("Location:".base_url('auth/logout'));
      }
      $data['dashboard']= $dashboardInfo;
    }
  }
?>
