<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the guest table.
		*/
		class Guest extends Crud
		{
protected static $tablename='Guest';
/* this array contains the field that can be null*/
static $nullArray=array('about_guest' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('eventID'=>'int','guest_name'=>'varchar','guest_location'=>'text','guest_title'=>'varchar','about_guest'=>'text');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','eventID'=>'','guest_name'=>'','guest_location'=>'','guest_title'=>'','about_guest'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/guest','update'=>'vc/guest/edit');
function __construct($array=array())
{
	parent::__construct($array);
}
	 function getEventIDFormField($value=''){
	$fk=null;//change the value of this variable to array('table'=>'event','display'=>'event_name'); if you want to preload the value from the database where the display key is the name of the field to use for display in the table.
	
	if (is_null($fk)) {
		return $result="<input type='hidden' value='$value' name='eventID' id='eventID' class='form-control' />
			";
	}
	if (is_array($fk)) {
		$result ="<div class='form-group'>
		<label for='eventID'>EventID</label>";
		$option = $this->loadOption($fk,$value);
		//load the value from the given table given the name of the table to load and the display field
		$result.="<select name='eventID' id='eventID' class='form-control'>
			$option
		</select>";	
	}
	$result.="</div>";
	return  $result;

}
function getGuest_nameFormField($value=''){
	return "<div class='form-group'>
	<label for='guest_name' >Guest Name</label>
		<input type='text' name='guest_name' id='guest_name' value='$value' class='form-control' required />
</div> ";

}
function getGuest_locationFormField($value=''){
	return "<div class='form-group'>
	<label for='guest_location' >Guest Location</label>
<textarea id='guest_location' name='guest_location' class='form-control' required>$value</textarea>
</div> ";

}
function getGuest_titleFormField($value=''){
	return "<div class='form-group'>
	<label for='guest_title' >Guest Title</label>
		<input type='text' name='guest_title' id='guest_title' value='$value' class='form-control' required />
</div> ";

}
function getAbout_guestFormField($value=''){
	return "<div class='form-group'>
	<label for='about_guest' >About Guest</label>
<textarea id='about_guest' name='about_guest' class='form-control' >$value</textarea>
</div> ";

}


		}
		?>