<?php 




class indexController {

	public function index() {

 		$arr = array("name"=>"tang","age"=>"18","location"=>"shanghai");
    VIEW::assign($arr);
    VIEW::display('index.tpl');
	}
	
}




 ?>