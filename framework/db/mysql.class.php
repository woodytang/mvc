<?php 

class mysql{

//先写个报错的方法，下面很多方法都要用到
public function error($error) {

	die("OMG，出错了，原因是：".$error);
	
}
private $config;

//数据库连接
public function connect($config) {

	extract($config);
	
		if (!($link=mysqli_connect($dbhost,$dbuser,$dbpsw,$dbname))) {
			$this->error(mysql_error());
		}
		mysqli_query($link, "set names ".$dbcharset);

		return $link;
	}

//SQL执行
public function query($link,$sql1) {

	if(!($query=mysqli_query($link, $sql1))){
//		$this->error($sql."<br />".mysql_error());
	}else{
//		var_dump(mysqli_query($link, 'SELECT count(*) from news'));

		return $query;
	
	}
	
	
}

//将数据库资源全部转为数组
//$result是一行，是一个一维数组
//$list是包含多行的二维数组
public function findall($query) {
while ($result=mysqli_fetch_array($query, MYSQL_ASSOC)) {
	$list[]=$result;
}
	return isset($list)?$list:"";
}



//只返回一行，一个一维数组
public function findOne($query) {
	$result=mysqli_fetch_array($query, MYSQL_ASSOC);
	return $result;
}

//找特定数据
//$row 是第几行
//$field 是哪个字段

public function findSpecific($query,$row=0,$field=0){

	$query->data_seek($row);
	
	    /* fetch row */
	    $row = $query->fetch_row();
	    
	    $row=$row[$field];
	    
			return $row;
}


//把数组插入表中 新增一行

public function insert($table,$arr) {

    foreach ($arr as $key => $value) {
		$value = mysql_real_escape_string($value);
		$keyArr[]="`".$key."`";
		$valueArr[]="`".$value."`";
		}    
   $keys = implode(",", $keyArr);
   $values = implode(",", $valueArr);
   $sql = "insert into ".$table."(".$keys.") values(".$values.")";
   $this->query($sql);
   return mysql_insert_id();//返回这次操作的id ，以便调用
    	
    }
	


//更新数组到 特定行
public function update($table,$arr,$where) {
	foreach ($arr as $key => $value) {
		$value = mysql_real_escape_string($value);
		$keyAndvalueArr[]="`".$key."`='".$value."'";
			}
	$keyAndvalues = implode(",",$keyAndvalueArr);
	$sql = "update ".$table." set ".$keyAndvalues." where ".$where;
	$this->query($sql);
}

//删除行，每次删一行
public function del($table,$where) {
	$sql = "delete from ".$table." where ".$where;
	$this->query($sql);
}	
	
	
	
	
}


/*
$db = new mysql;

//var_dump($db);

$arr=array(
'dbhost'=>'localhost',
'dbuser'=>'root',
'dbpsw'=>'root',
'dbname'=>'mymvc',
'dbcharset'=>'utf8',
);

$conn=$db->connect($arr);

//var_dump($conn);
//exit();
$sql = "SELECT * FROM admin";
$query=$db->query($conn,$sql);

var_dump($query);
echo "<br />";
echo "<br />";
$result=mysqli_fetch_array($query);
print_r($result);



extract($arr);
echo($dbpsw);
$con = mysqli_connect($dbhost,$dbuser,$dbpsw,$dbname);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


$sql = "SELECT * FROM admin";
$query=mysqli_query($con,$sql);
var_dump($query);
echo "<br />";
echo "<br />";
$result=mysqli_fetch_array($query);
print_r($result);

*/







 ?>