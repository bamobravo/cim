<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the unit table.
		*/
		class Unit extends Crud
		{
protected static $tablename='Unit';
/* this array contains the field that can be null*/
static $nullArray=array();
/*this array contains the fields that are unique*/
static $uniqueArray=array('unit_name' ); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('unit_name'=>'varchar','brief_description'=>'varchar','full_description'=>'text','joining_instruction'=>'text');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','unit_name'=>'','brief_description'=>'','full_description'=>'','joining_instruction'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('delete'=>'adm/delete/unit','update'=>'adm/edit/unit','activities'=>'adm/v/unit_activity');
function __construct($array=array())
{
	parent::__construct($array);
}
function getUnit_nameFormField($value=''){
	return "<div class='form-group'>
	<label for='unit_name' >Unit Name</label>
		<input type='text' name='unit_name' id='unit_name' value='$value' class='form-control' required />
</div> ";

}
function getBrief_descriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='brief_description' >Brief Description</label>
		<input type='text' name='brief_description' id='brief_description' value='$value' class='form-control' required />
</div> ";

}
function getFull_descriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='full_description' >Full Description</label>
<textarea id='full_description' name='full_description' class='form-control' required>$value</textarea>
</div> ";

}
function getJoining_instructionFormField($value=''){
	return "<div class='form-group'>
	<label for='joining_instruction' >Joining Instruction</label>
<textarea id='joining_instruction' name='joining_instruction' class='form-control' required>$value</textarea>
</div> ";

}


		}
		?>