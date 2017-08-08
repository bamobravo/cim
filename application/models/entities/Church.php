<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the church table.
		*/
		class Church extends Crud
		{
protected static $tablename='Church';
/* this array contains the field that can be null*/
static $nullArray=array('slogan' ,'church_verse' ,'verse_location' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('church_name'=>'varchar','slogan'=>'varchar','brief_description'=>'text','full_description'=>'text','location'=>'varchar','pastor'=>'varchar','about_pastor'=>'text','church_verse'=>'varchar','verse_location'=>'varchar');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('ID'=>'','church_name'=>'','slogan'=>'','brief_description'=>'','full_description'=>'','location'=>'','pastor'=>'','about_pastor'=>'','church_verse'=>'','verse_location'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array();
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/church','update'=>'vc/church/edit');
function __construct($array=array())
{
	parent::__construct($array);
}
function getChurch_nameFormField($value=''){
	return "<div class='form-group'>
	<label for='church_name' >Church Name</label>
		<input type='text' name='church_name' id='church_name' value='$value' class='form-control' required />
</div> ";

}
function getSloganFormField($value=''){
	return "<div class='form-group'>
	<label for='slogan' >Slogan</label>
		<input type='text' name='slogan' id='slogan' value='$value' class='form-control'  />
</div> ";

}
function getBrief_descriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='brief_description' >Brief Description</label>
<textarea id='brief_description' name='brief_description' class='form-control' required>$value</textarea>
</div> ";

}
function getFull_descriptionFormField($value=''){
	return "<div class='form-group'>
	<label for='full_description' >Full Description</label>
<textarea id='full_description' name='full_description' class='form-control' required>$value</textarea>
</div> ";

}
function getAbout_pastorFormField($value=''){
	return "<div class='form-group'>
	<label for='about_pastor' >About Pastor</label>
<textarea id='about_pastor' name='about_pastor' class='form-control' required>$value</textarea>
</div> ";

}
function getLocationFormField($value=''){
	return "<div class='form-group'>
	<label for='location' >Location</label>
		<input type='text' name='location' id='location' value='$value' class='form-control' required />
</div> ";

}
function getPastorFormField($value=''){
	return "<div class='form-group'>
	<label for='pastor' >Pastor</label>
		<input type='text' name='pastor' id='pastor' value='$value' class='form-control' required />
</div> ";

}
function getChurch_verseFormField($value=''){
	return "<div class='form-group'>
	<label for='church_verse' >Church Verse</label>
		<input type='text' name='church_verse' id='church_verse' value='$value' class='form-control'  />
</div> ";

}
function getVerse_locationFormField($value=''){
	return "<div class='form-group'>
	<label for='verse_location' >Verse Location</label>
		<input type='text' name='verse_location' id='verse_location' value='$value' class='form-control'  />
</div> ";

}


		}
		?>