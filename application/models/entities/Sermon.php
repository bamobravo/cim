<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the sermon table.
		*/
		class Sermon extends Crud
		{
protected static $tablename='Sermon';
/* this array contains the field that can be null*/
static $nullArray=array('image_location' ,'status' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('title'=>'varchar','main_text'=>'text','brief_description'=>'varchar','image_location'=>'varchar','date_given'=>'datetime','expiry_date'=>'date','status'=>'tinyint');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('id'=>'','title'=>'','main_text'=>'','brief_description'=>'','image_location'=>'','date_given'=>'','expiry_date'=>'','status'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('status'=>'1');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/sermon','update'=>'vc/sermon/edit');
function __construct($array=array())
{
	parent::__construct($array);
}
function getTitleFormField($value=''){
	return "<div class='form-group'>
	<label for='title' >Title</label>
		<input type='text' name='title' id='title' value='$value' class='form-control' required />
</div> ";

}
function getMain_textFormField($value=''){
	return "<div class='form-group'>
	<label for='main_text' >Main Text</label>
<textarea id='main_text' name='main_text' class='form-control' required>$value</textarea>
</div> ";

}
function getBrief_descriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='brief_description' >Brief Description</label>
		<input type='text' name='brief_description' id='brief_description' value='$value' class='form-control' required />
</div> ";

}
function getImage_locationFormField($value=''){
	return "<div class='form-group'>
	<label for='image_location' >Image Location</label>
		<input type='text' name='image_location' id='image_location' value='$value' class='form-control'  />
</div> ";

}
function getDate_givenFormField($value=''){
	return " ";

}
function getExpiry_dateFormField($value=''){
	return "<div class='form-group'>
	<label for='expiry_date' >Expiry Date</label>
	<input type='date' name='expiry_date' id='expiry_date' value='$value' class='form-control' required />
</div> ";

}
function getStatusFormField($value=''){
	return "<div class='form-group'>
	<label class='form-checkbox'>Status</label> 
	<select class='form-control' id='status' name='status' >
		<option value='1'>Yes</option>
		<option value='0' selected='selected'>No</option>
	</select>
	</div> ";

}


		}
		?>