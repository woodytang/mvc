<?php 
class authModel {
private $auth = "";

public function __construct() {
	if(isset($_SESSION['auth'])&&(!empty($_SESSION['auth']))){
	$this->auth = $_SESSION['auth'];
	}
}

public function getauth() {
//	print_r($this->auth);exit();
	 return $this->auth;
}


public function loginsubmit() {
	if (empty($_POST['username'])||empty($_POST['password'])) {
		return false;
	}
	
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	
	//验证用户
	
	//注意：下面的这个条件语句不是判断是否相等，而是判断是否为空；
	if ($this->auth = $this->checkuser($username,$password)) {
		$_SESSION['auth'] = $this->auth;
		//var_dump($_SESSION['auth']);
		//exit();
		return true;
	}else {
		return false;
	}
}

//用户验证操作
private function checkuser($username,$password) {
	$adminobj = M('admin');
	$auth = $adminobj->findOne_by_username($username);
	if ((!empty($auth))&&$auth['password']==$password) {
	  //var_dump($auth);
		return $auth;
	}else {
		return false;
	}
}

public function logout() {

unset($_SESSION['auth']);


$this->auth='';

}

	
}


 ?>