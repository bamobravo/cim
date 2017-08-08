<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the blog table.
		*/
		class Blog extends Crud
		{
protected static $tablename='Blog';
/* this array contains the field that can be null*/
static $nullArray=array('date_posted' ,'status' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('title'=>'varchar','summary'=>'varchar','content'=>'text','date_posted'=>'datetime','author'=>'varchar','status'=>'tinyint');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','title'=>'','summary'=>'','content'=>'','date_posted'=>'','author'=>'','status'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('date_posted'=>'CURRENT_TIMESTAMP','status'=>'1');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/blog','update'=>'vc/blog/edit');
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
function getSummaryFormField($value=''){
	return "<div class='form-group'>
	<label for='summary' >Summary</label>
		<input type='text' name='summary' id='summary' value='$value' class='form-control' required />
</div> ";

}
function getContentFormField($value=''){
	return "<div class='form-group'>
	<label for='content' >Content</label>
<textarea id='content' name='content' class='form-control' required>$value</textarea>
</div> ";

}
function getDate_postedFormField($value=''){
	return " ";

}
function getAuthorFormField($value=''){
	return "<div class='form-group'>
	<label for='author' >Author</label>
		<input type='text' name='author' id='author' value='$value' class='form-control' required />
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