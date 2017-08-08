<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the unit_activity table.
		*/
		class Unit_activity extends Crud
		{
protected static $tablename='Unit_activity';
/* this array contains the field that can be null*/
static $nullArray=array();
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('activity'=>'varchar','week_day'=>'varchar');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','activity'=>'','week_day'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/unit_activity','update'=>'vc/unit_activity/edit');
function __construct($array=array())
{
	parent::__construct($array);
}
function getActivityFormField($value=''){
	return "<div class='form-group'>
	<label for='activity' >Activity</label>
		<input type='text' name='activity' id='activity' value='$value' class='form-control' required />
</div> ";

}
function getWeek_dayFormField($value=''){
	return "<div class='form-group'>
	<label for='week_day' >Week Day</label>
		<input type='text' name='week_day' id='week_day' value='$value' class='form-control' required />
</div> ";

}


		}
		?>