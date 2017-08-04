<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the payment table.
		*/
		class Payment extends Crud
		{
protected static $tablename='Payment';
/* this array contains the field that can be null*/
static $nullArray=array('comment' ,'date_paid' ,'currency' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('payer'=>'varchar','purpose'=>'int','amount'=>'double','comment'=>'text','date_paid'=>'timestamp','payment_gateway'=>'text','currency'=>'varchar');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('id'=>'','payer'=>'','purpose'=>'','amount'=>'','comment'=>'','date_paid'=>'','payment_gateway'=>'','currency'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('date_paid'=>'CURRENT_TIMESTAMP','currency'=>'naira');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array();
function __construct($array=array())
{
	parent::__construct($array);
}
function getPayerFormField($value=''){
	return "<div class='form-group'>
	<label for='payer' >Payer</label>
		<input type='text' name='payer' id='payer' value='$value' class='form-control' required />
</div> ";

}
function getPurposeFormField($value=''){
	return "<div class='form-group'>
	<label for='purpose' >Purpose</label><input type='number' name='purpose' id='purpose' value='$value' class='form-control' required />
</div> ";

}
function getAmountFormField($value=''){
	return "<div class='form-group'>
	<label for='amount' >Amount</label>
		<input type='text' name='amount' id='amount' value='$value' class='form-control' required />
</div> ";

}
function getCommentFormField($value=''){
	return "<div class='form-group'>
	<label for='comment' >Comment</label>
<textarea id='comment' name='comment' class='form-control' >$value</textarea>
</div> ";

}
function getDate_paidFormField($value=''){
	return " ";

}
function getPayment_gatewayFormField($value=''){
	return "<div class='form-group'>
	<label for='payment_gateway' >Payment Gateway</label>
<textarea id='payment_gateway' name='payment_gateway' class='form-control' required>$value</textarea>
</div> ";

}
function getCurrencyFormField($value=''){
	return "<div class='form-group'>
	<label for='currency' >Currency</label>
		<input type='text' name='currency' id='currency' value='$value' class='form-control'  />
</div> ";

}


		}
		?>