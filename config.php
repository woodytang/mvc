<?php 

$rootpath = __DIR__;

$config = array(

	'viewconfig' => array(
	'left_delimiter'=>'{',
	'right_delimiter'=>'}',
	'template_dir'=>$rootpath.'/tpl',
	'compile_dir'=>$rootpath.'/data/template_C'
	),
	
	'dbconfig' => array(
	'dbhost'=>'localhost',
	'dbuser'=>'root',
	'dbpsw'=>'root',
	'dbname'=>'mymvc',
	'dbcharset'=>'utf8',
	),



);

 


 ?>