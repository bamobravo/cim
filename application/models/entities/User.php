<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the user table.
		*/
		class User extends Crud
		{
protected static $tablename='User';
/* this array contains the field that can be null*/
static $nullArray=array('last_login' ,'date_created' );
/*this array contains the fields that are unique*/
static $uniqueArray=array('username' ); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('username'=>'varchar','password'=>'varchar','last_login'=>'datetime','date_created'=>'timestamp');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','username'=>'','password'=>'','last_login'=>'','date_created'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('last_login'=>'CURRENT_TIMESTAMP','date_created'=>'CURRENT_TIMESTAMP');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user ID in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('delete'=>'adm/delete/user','update'=>'vc/edit/user');
function __construct($array=array())
{
	parent::__construct($array);
}
function getUsernameFormField($value=''){
	return "<div class='form-group'>
	<label for='username' >Username</label>
		<input type='text' name='username' id='username' value='$value' class='form-control' required />
</div> ";

}
function getPasswordFormField($value=''){
	return "<div class='form-group'>
	<label for='password' >Password</label>
	<input type='password' name='password' id='password' value='$value' class='form-control' required />
</div> ";

}
function getLast_loginFormField($value=''){
	return " ";

}
function getDate_createdFormField($value=''){
	return " ";

}


		}
		?>