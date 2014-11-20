<?php 


class adminController {

 public $auth="";
 
 public function __construct() {
 	//判断是否已经登录
// 	$_SESSION['AAA'] = '41234';
// 	echo "<pre/>";
// 	print_r($_SESSION);
 	//exit();
 	$authobj =M('auth');
 	$this->auth = $authobj->getauth();
 //	var_dump($authobj->getauth());
 		if (empty($this->auth)&&(START::$method!='login')) {
	 		$this->showmessage('请登录后再操作',
	 		'index.php?controller=admin&method=login'
	 		); 
 		 }
 		 	
 	
 }
 

	public function login() {
	  
	
		if ($_POST) {
		
			$this->checklogin();
					}else {
			$arr = array("name"=>"tang","age"=>"18","location"=>"shanghai");
			VIEW::assign($arr);
			VIEW::display('admin/login.tpl');
		}
		
	}

	
	private function checklogin() {
	
		$authobj = M('auth');
		//var_dump($authobj);
		if($authobj->loginsubmit()){
		
		 $this->showmessage('登录成功!','index.php?controller=admin&method=dashboard');
		}else {
		 $this->showmessage('登录失败!','index.php?controller=admin&method=login');
		
		}
	}
	
	private function showmessage($msg,$url) {
		
		echo "<script>alert('$msg');window.location.href='$url'</script>";
		exit;
	}
	
	
	public function logout() {
		$authobj = M('auth');		
		$authobj->logout();
		$this->showmessage('退出成功!','index.php?controller=admin&method=login');
	}
	
	
	public function dashboard() {
	
			$newsobj=M('news');
			$newsnum = $newsobj->count();
			
			$layoutobj=M('layout');
			$leftitemlist=$layoutobj->leftside();
			
			
			VIEW::assign(
			array(
			'newsnum'=>$newsnum
			)		
			);
			VIEW::assignarr('left',$leftitemlist);
		
			VIEW::display('admin/dashboard.tpl');
		
		
	}
	
	public function addnews() {
	
						
			$layoutobj=M('layout');
			$leftitemlist=$layoutobj->leftside();
			VIEW::assignarr('left',$leftitemlist);				
			
			if (empty($_POST)) {
			
				if (isset($_GET['id'])) {
					$data=M('news')->getnewsinfo($_GET['id']);
				}	else {
					$data=array();
				}
				VIEW::assign(array('data'=>$data));	
				VIEW::display('admin/addnews.tpl');
			}else {
				print_r($_POST);
			}
			
			
			
		
					
		
	}
/*	
	public function newslist() {
	
						
			$layoutobj=M('layout');
			$leftitemlist=$layoutobj->leftside();
			
			$newsobj=M('news');
			$newslist=$newsobj->getnewslist()
							
			
			VIEW::assignarr('left',$leftitemlist);
		
			VIEW::display('admin/newslist.tpl');
		
		
	}
	*/
	
	
}

	



 ?>