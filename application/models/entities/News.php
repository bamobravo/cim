<?php
		require_once('application/models/Crud.php');
		/**
		* This class  is automatically generated based on the structure of the table. And it represent the model of the news table.
		*/
		class News extends Crud
		{
protected static $tablename='News';
/* this array contains the field that can be null*/
static $nullArray=array('date' );
/*this array contains the fields that are unique*/
static $uniqueArray=array(); 
/*this is an associative array containing the fieldname and the type of the field*/
static $typeArray = array('title'=>'varchar','headline'=>'varchar','news_content'=>'text','date'=>'timestamp','author'=>'varchar');  
/*this is a dictionary that map a field name with the label name that will be shown in a form*/
static $labelArray=array('id'=>'','title'=>'','headline'=>'','news_content'=>'','date'=>'','author'=>''); 
/*associative array of fields that have default value*/
static $defaultArray = array('date'=>'CURRENT_TIMESTAMP');
//populate this array with fields that are meant to be displayed as document in the format array('fieldname'=>array('filetype','maxsize',foldertosave','preservefilename'))
//the folder to save must represent a path from the basepath. it should be a relative path,preserve filename will be either true or false. when true,the file will be uploaded with it default filename else the system will pick the current user id in the session as the name of the file.
static $documentField = array();//array containing an associative array of field that should be regareded as document field. it will contain the setting for max size and data type.
		
static $tableAction=array('enable'=>'getEnabled','delete'=>'ac/delete/news','update'=>'vc/news/edit');
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
function getHeadlineFormField($value=''){
	return "<div class='form-group'>
	<label for='headline' >Headline</label>
		<input type='text' name='headline' id='headline' value='$value' class='form-control' required />
</div> ";

}
function getNews_contentFormField($value=''){
	return "<div class='form-group'>
	<label for='news_content' >News Content</label>
<textarea id='news_content' name='news_content' class='form-control' required>$value</textarea>
</div> ";

}
function getDateFormField($value=''){
	return " ";

}
function getAuthorFormField($value=''){
	return "<div class='form-group'>
	<label for='author' >Author</label>
		<input type='text' name='author' id='author' value='$value' class='form-control' required />
</div> ";

}


		}
		?>