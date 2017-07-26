<?php 
	/**
	* This is the class that contain the method that will be called whenever any data is inserted for a particular table.
	* the url path should be linked to this page so that the correct operation is performed ultimately. T
	*/
	class Callback extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Session_manager');
			$this->load->helper('string');
		}
		public function onCollegeInserted($data,$type,$db,&$message)
		{
			if ($type=='insert') {
				//check if asCollege is set then insert record for the college as 
				if (isset($data['asCollege'])) {
					if (empty($data['center_code']) || empty($data['capacity'])) {
						$message='add center_code and capacity to add a college as center';
						return false;
					}
					$arr = array('center_name'=>$data['college_name'],'address'=>$data['address'],'state'=>$data['state'],'center_code'=>$data['center_code'],'capacity'=>$data['capacity'],'creator'=>$data['creator']);
					loadClass($this->load,'Center');
					$temp = new Center($arr);
					if ($temp->insert()==false) {
						$message="error adding as center";
						return false;
					}
					return true;
				}
			}
			return true;
		}
		function onCertificateInserted($data,$type,$db,&$message){
			if ($type=='insert') {
				$num = 9;
				$min=5;
				//get the data for the result and save
				$firstSubjects =  $this->buildSubjectInsertQuery('first',$data,$num,$min);
				if ($firstSubjects==false) {
					$message = "error processing request. check that the number of result provided";
					return false;
				}
				$first = $this->db->query($firstSubjects);
				if (!$first) {
					$message="error occured while processing request. please contact the adminstrator.";
					return false;
				}
					//check that the second setting is is filled
				if (isset($data['second-filled']) && $data['second-filled']==1) {
					$secondQuery = $this->buildSubjectInsertQuery('second',$data,$num,$min);
					$second = $this->db->query($secondQuery);
					if (!$second) {
						return false;
					}
				}
			}
			else if ($type=='update') {
				$secondid = false;
				if (isset($data['second-filled'])) {
					$examType = $data['certification_name2'];
					$examMonth = $data['month_obtained2'];
					$examYear = $data['year_obtained2'];
					$examNumber = $data['exam_number2'];
					$empty = containEmpty(array($examType,$examMonth,$examYear,$examNumber));
					if ($empty) {
						$message ="ensure all asterisk(important) field are filled";
						return false;
					}
					
				}
				//update first sitting record check if there is second sitting value check if it is insert or update 
				echo "performing update here";
				print_r($data);exit;
			}
			
			return true;
		}
		
		private function updateResult($result,$sitting)
		{
			loadClass($this->load,'Qualification_result');
			$applicant = $this->Session_manager->getCurrentUserProp('cAppliciant');
			if (($resultid =$this->Qualification_result->resultExist($applicant,$result,$sitting))) {
				$param = array('ID'=>$resultid,'certificateID'=>$result['certificate'],'subject'=>$result['subject'],'grade'=>$result['grade']);
				$this->qualification_result->setArray($param);
				return $this->Qualification_result->update();
			}
			else{
				//insert the record into the database with all necessary information
				$param = array('certificateID'=>$result['certificate'],'subject'=>$result['subject'],'grade'=>$result['grade']);
				$this->Qualification_result->setArray($param);
				return $this->Qualification_result->insert();
			}
		}

		private function buildSubjectInsertQuery($startString,$data,$max,$min)
		{
			$count=0;
			$first = true;
			$insertQuery='insert into qualification_result(qualificationID,subject,grade) values ';
			$qualificationID = $data['LAST_INSERT_ID'];
			for ($i=0; $i <$max ; $i++) { 
				$subjectKey =  $startString.($i+1).'subject';
				$gradeKey = $startString.($i+1).'grade';
				$subject = $data[$subjectKey];
				$grade= $data[$gradeKey];
				if (empty($subject) || empty($grade)) {
					continue;
				}
				$insertQuery.=$first?"($qualificationID,$subject,'$grade')":",($qualificationID,$subject,'$grade')";
				$first = false;
				$count++;
			}
			if ($count < $min) {
				return false;
			}
			return $insertQuery;
		}

		function onApplicantInserted($data,$type,$db,&$message){
			if ($type=='insert') {
				if ($data['LAST_INSERT_ID']==false) {
					return false;
				}
				$this->Session_manager->setContent('cApplicant',$data['LAST_INSERT_ID']);
				//get the payment information and load it in the session
				loadClass($this->load,'examination');
				$this->examination->ID= $data['examination'];
				$fee = $this->examination->loadFeeInfo();
				if ($fee) {
					$this->Session_manager->setContent('exam',$examination->ID);
					return true;
				}
				return false;
			}
			if ($type=='update') {
				//check that exam_number and application number are not part of the data
				if (isset($_POST['exam_number'],$_POST['application_number'],$_POST['password']) ){
					$message ="invalid data posted";
					return false;
				}
			}
			return true;
		}
	}
	?>