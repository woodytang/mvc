<?php 




class mysql {

//先写个报错的方法，下面很多方法都要用到
public function error($error) {

	die("OMG，出错了，原因是：".$error);
	
}


public function connect($config) {
	extract($config);
		if (!mysqli_connect("$dbhost","$dbuser","$dbpsw")) {
			
		}
		
	}





}











 ?>