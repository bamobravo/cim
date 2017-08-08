<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the payment_purpose table.
		*/
		class Payment_purpose extends Crud
		{
protected static $tablename='Payment_purpose';
/* this array contains the field that can be null*/
static $nullArray=array('description' );
/*this array contains the fields that are unique*/
static $uniqueArray=array('purpose' ); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('purpose'=>'varchar','description'=>'text');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','purpose'=>'','description'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'adm/delete/payment_purpose','update'=>'adm/edit/payment_purpose');
function __construct($array=array())
{
	parent::__construct($array);
}
function getPurposeFormField($value=''){
	return "<div class='form-group'>
	<label for='purpose' >Purpose</label>
		<input type='text' name='purpose' id='purpose' value='$value' class='form-control' required />
</div> ";

}
function getDescriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='description' >Description</label>
<textarea id='description' name='description' class='form-control' >$value</textarea>
</div> ";

}


		}
		?>