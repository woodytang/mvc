<?php 


/*

define('SITE_ROOT', '');     
$smarty->template_dir = SITE_ROOT . "/tpl";    s
//设置所有模板文件存放的目录  
    $smarty->compile_dir = SITE_ROOT . "data/templates_c/";   
//设置所有编译过的模板文件存放的目录  
//    $smarty->config_dir = SITE_ROOT . "/configs/";        
//设置模板中特殊配置文件存放的目录  
//    $smarty->cache_dir = SITE_ROOT . "/cache/";           
//设置存放Smarty缓存文件的目录  
 //   $smarty->caching=1;                               
//设置开启Smarty缓存模板功能  
  //  $smarty->cache_lifetime=60*60*24;                  
//设置模板缓存有效时间段的长度为1天  
    $smarty->left_delimiter = '{';                    
//设置模板语言中的左结束符  
    $smarty->right_delimiter = '}';                    
//设置模板语言中的右结束符  

s
*/


class indexController {

	public function index() {
	
		require_once('framework/view/smarty/Smarty.class.php');
		
		$smarty = new Smarty;
		
		$smarty->template_dir = "tpl"; 

		$smarty->assign('name','tang');
		$smarty->assign('age','18');
		$smarty->assign('location','shanghai');
		$smarty->display('index.tpl');

	}
	
}




 ?>