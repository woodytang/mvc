<?php 
//DB类是mysql类的工厂类，用于标准化实例化

class DB {

public static $db;
private static $link;


//这个function 会首先实例化 mysql类，然后把对象生成到静态属性里
//由于是mysql类，所以可以直接调用mysql的方法
//写法：DB::init(mysql,$config)
	public static function init($dbtype,$config) {
	self::$db = new $dbtype;
	
	self::$link=self::$db->connect($config);
	
	/*echo $dbtype.'<br />';
	var_dump(self::$db);
	echo '<br />';
	var_dump($config);
	echo '<br />';
	var_dump($xx);*/
		}
//用法：DB::query($sql)	
//在调用静态方法query之前，DB已经对mysql类实例化，并且储存在静态变量$db里
	public static function query($sql) {

		return self::$db->query(self::$link,$sql);
	}
	
	public static function findAll($sql){
		
			$query = self::$db->query(self::$link,$sql);
			return self::$db->findAll($query);
		}
	
		public static function findOne($sql){

			$query = self::$db->query(self::$link,$sql);
			return self::$db->findOne($query);
		}
	
		public static function findSpecific($sql, $row = 0, $field = 0){
		
			$query = self::$db->query(self::$link,$sql);
			return self::$db->findSpecific($query, $row, $field);
		}
	
		public static function insert($table,$arr){
			return self::$db->insert($table,$arr);
		}
	
		public static function update($table, $arr, $where){
			return self::$db->update($table, $arr, $where);
		}
	
		public static function del($table,$where){
			return self::$db->del($table,$where);
		}
	
}
















 ?>