<?php 
header("Content-type: text/html; charset=utf-8");
//phpinfo();
require_once('config.php');
require_once('framework/start.php');
//echo "1213";exit();
START::run($config);
 ?>