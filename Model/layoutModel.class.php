<?php 
class layoutModel{
	

public function leftside() {
	
	$methods=array('newslist'=>'新闻列表', 'addnews'=>'添加新闻');
				
	foreach ($methods as $key => $value) {
	
	$leftitemlist[]='<li> <a href="index.php?controller=admin&method='.$key.'"><i class="icon icon-'.$key.'"></i> <span>'.$value.'</span></a> </li>';
		
	};
			
	return $leftitemlist;
}

}




 ?>