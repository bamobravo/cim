<?php 

/**
* The controller that validate forms that should be inserted into a table based on the request url.
each method wil have the structure validate[modelname]Data
*/
class Form_validator extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Session_manager');
	}

	//function to make sure maliciour applicant does not edit the information of another applicant
	function checkApplicant($data){
		//check that applicant usertype is currently login
		if (!$this->Session_manager->isCurrentUserType('applicant')) {
			return true;//validate if current user is not an applicant
		}
		if (isset($data['applicant_ID']) && $data['applicant_ID']!=0) {
			return $data['applicant_ID']==$this->Session_manager->getCurrentUserProp('user_ID');
		}
		if (isset($data['user_ID'])) {
			return $data['user_ID']==$this->Session_manager->getCurrentUserProp('ID');
		}
		return true;
	}
	//this will validate the data the is to be inserted into the user table giving the path.  the method definition itself will use the request url information to perform validation when necessary.
	function validateUserData($data,$type,&$message=''){
		//return true for new, check that the password is not present here.
		return true;
	}
	// the message is the error that is returned.
	//worked like charm
	//$type will contain either insert or update (string).
	function validateO_levelData($data,$type,&$message=''){
		//check that the sitting is not more than two sitting for the examination.
		$message ='am just testing the message thingy';
		return true;
	}
	// function validateApplication_number_genData($data,$type,&$message){
	// 	if ($type=='insert') {
	// 		if (!isset($data['format'])) {
	// 			$message ="p";
	// 			return false;
	// 		}
	// 		return $this->validateApplicationFormat($data['format'],$message);
	// 	}
	// 	return true;
	// }
	private function validateApplicationFormat($format,&$message){
		$regx ="/^[a-zA-Z]{0,10}(inc\([1-9]{1,2}\)|rand\([1-9]{1,2}\))[a-zA-Z]{0,10}$/";
		$result = preg_match($regx, $format);
		if( $result===1){
			return true;
		}
		else{
			$message = 'wrong rule format specified';
			return false;
		}
	}
	// function validateAdmission_applicationData($data,$type,&$message){
	// 	if ($type='update') {
	// 		if ($this->getRefererUrlSegment(2)=='appNum') {
	// 			if (!isset($data['application_number_rule'])) {
	// 				$message ="rule format cannot be empty";
	// 				return false;
	// 			}
	// 			return $this->validateApplicationFormat($data['application_number_rule'],$message);
	// 		}
	// 		return true;
	// 	}
	// 	return true;
	// }

	function getRefererUrlSegment($n){
		$url = $_SERVER['HTTP_REFERER'];
		$base = base_url();
		$path = substr($url, strpos($url, $base)+strlen($base));
		$segment = explode('/', $path);
		return isset($segment[$n])?$segment[$n]:false;
	}
	//function validate the value to be entered by the split setting
	function validateSplit_settingData($data,$type,&$message){
		$paymentPattern = $data['payment_pattern_ID'];
		$amount =$data['amount'] ;
		loadClass($this->load,'payment_pattern');
		$pattern = new Payment_pattern();
		$pattern->ID = $paymentPattern;
		if (!$pattern->load()) {
			$message = 'invalid split setting';
			return false;
		}
		$result = $pattern->validateAmount($amount);
		if (!$result) {
			$message = "cannot add this split setting. either the payment pattern can no longer be added to or the amount added is too much. ";
		}
		return $result;
	}
}
 ?>