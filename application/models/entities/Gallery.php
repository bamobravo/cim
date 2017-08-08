<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the gallery table.
		*/
		class Gallery extends Crud
		{
protected static $tablename='Gallery';
/* this array contains the field that can be null*/
static $nullArray=array('uploaded_date' ,'status' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('image_path'=>'varchar','uploaded_date'=>'timestamp','status'=>'tinyint','is_video'=>'tinyint');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','image_path'=>'','uploaded_date'=>'','status'=>'','is_video'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('uploaded_date'=>'CURRENT_TIMESTAMP','status'=>'1');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('delete'=>'adm/delete/gallery','update'=>'adm/edit/gallery');
function __construct($array=array())
{
	parent::__construct($array);
}
function getImage_pathFormField($value=''){
	return "<div class='form-group'>
	<label for='image_path' >upload image</label>
		<input type='file' name='image_path' id='image_path' value='$value' class='form-control' required />
</div> ";

}
function getIs_videoFormField($value=''){
	return "<div class='form-group'>
	<label for='image_path' >Image Path</label>
		<input type='text' name='image_path' id='image_path' value='$value' class='form-control' required />
</div> ";

}
function getUploaded_dateFormField($value=''){
	return " ";

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