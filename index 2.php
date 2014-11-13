
<?php 


function C($name, $method){
	require_once('Controller/'.$name.'Controller.class.php');
	
	eval('$obj = new '.$name.'Controller;$obj->'.$method.'();');
	
}

C('index', 'index');

 ?>