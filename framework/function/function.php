<?php 
//大C类，实例化控制器

	function C($name, $method){
	global $rootpath;
	require_once($rootpath.'/Controller/'.$name.'Controller.class.php');
	//eval('$obj = new '.$name.'Controller;$obj->'.$method.'();');
	
	eval('$obj = new '.$name.'Controller; $obj->'.$method.'();');
	//$obj = new indexController; $obj->index();
}

//大M类，实例化模型
	function M($name){
	global $rootpath;
	require_once($rootpath.'/Model/'.$name.'Model.class.php');
	
	eval('$obj = new '.$name.'Model;');
	return $obj;
}

//大M类，实例化视图	
	function V($name){
	global $rootpath;
		require_once($rootpath.'/View/'.$name.'View.class.php');
		
		eval('$obj = new '.$name.'View;');
		return $obj;
	}

//下面那个函数的回调函数；学习一下array_walk的用法；	
	function output($value,$key,$obj)  {
		
		
		//echo $key."=".$value."<br />";	
	    $obj->$key=$value;
	    
	    
	 		 	
	 	}
	
	
//第三方类，实例化第三方插件
	function ORG($path,$name,$params=array()) {
	global $rootpath;
	
		 
		require_once($rootpath.'/ORG/'.$path.$name.'.class.php');
		//echo 'ORG/'.$path.$name.'.class.php';
		$obj = new $name();
				
		array_walk($params, "output",$obj);
		
		return $obj;
		
			}
	


//加反斜线用于转义
function daddslashes($str) {
	return (!get_magic_quotes_gpc())?addslashes($str):$str;
}





 ?>