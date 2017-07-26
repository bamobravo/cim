<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the event table.
		*/
		class Event extends Crud
		{
protected static $tablename='Event';
/* this array contains the field that can be null*/
static $nullArray=array('end_date' ,'description' ,'host' ,'comment' ,'unit' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('name'=>'varchar','start_date'=>'datetime','end_date'=>'datetime','description'=>'text','host'=>'varchar','comment'=>'text','unit'=>'int');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('id'=>'','name'=>'','start_date'=>'','end_date'=>'','description'=>'','host'=>'','comment'=>'','unit'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/event','update'=>'vc/event/edit');
function __construct($array=array())
{
	parent::__construct($array);
}
function getNameFormField($value=''){
	return "<div class='form-group'>
	<label for='name' >Name</label>
		<input type='text' name='name' id='name' value='$value' class='form-control' required />
</div> ";

}
function getStart_dateFormField($value=''){
	return " ";

}
function getEnd_dateFormField($value=''){
	return " ";

}
function getDescriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='description' >Description</label>
<textarea id='description' name='description' class='form-control' >$value</textarea>
</div> ";

}
function getHostFormField($value=''){
	return "<div class='form-group'>
	<label for='host' >Host</label>
		<input type='text' name='host' id='host' value='$value' class='form-control'  />
</div> ";

}
function getCommentFormField($value=''){
	return "<div class='form-group'>
	<label for='comment' >Comment</label>
<textarea id='comment' name='comment' class='form-control' >$value</textarea>
</div> ";

}
function getUnitFormField($value=''){
	return "<div class='form-group'>
	<label for='unit' >Unit</label><input type='number' name='unit' id='unit' value='$value' class='form-control'  />
</div> ";

}


		}
		?>