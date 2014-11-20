<?php 

include_once('include.list.php');
foreach ($paths as $path) {
	include_once($path);
}

class START {

	public static $controller;
	public static $method;
	private static $config;
	
	
	public static function run($config) {
		self::$config = $config;
		self::init_db();
		self::init_view();
		self::init_controller();
		self::init_method();
		C(self::$controller,self::$method);
		

	}
	
public static function runadmin($config) {
		self::$config = $config;
		self::init_db();
		self::init_view();
		self::init_controller_admin();
		self::init_method_admin();
		C(self::$controller,self::$method);
		

	}


	private static function init_db() {
		DB::init('mysql',self::$config['dbconfig']);
		
			}
	
	private static function init_view() {
		VIEW::init('Smarty',self::$config['viewconfig']);
		
	}
	
	private static function init_controller() {
		self::$controller = isset($_GET['controller'])?
				daddslashes($_GET['controller']):'index';
	}
	
	private static function init_method() {
		self::$method = isset($_GET['method'])?
				daddslashes($_GET['method']):'index';
	}
	
	private static function init_controller_admin() {
		self::$controller = isset($_GET['controller'])?
				daddslashes($_GET['controller']):'admin';
	}
	
	private static function init_method_admin() {
		self::$method = isset($_GET['method'])?
				daddslashes($_GET['method']):'login';
	}
	

	
	
}







 ?>