<?php
class Mysql{
    private $host;
    private $root;
    private $passwords;
    private $database;

    #析构函数，具有构造函数的类，在创建对象时会调用构造函数，完成一些初始化的操作。
    function __construct($host,$root,$passwords,$database){
        $this->host = $host;        # $this-> 在类本身内部使用本类的属性或者方法
        $this->root = $root;
        $this->passwords = $passwords;
        $this->database = $database;
        $this->connect();
    }

	#连接数据库
    function connect(){
       $this->conn=mysqli_connect($this->host,$this->root,$this->passwords);	#连接数据库服务器
        mysqli_query($this->conn,"set names utf8");							#设置字符集
        mysqli_select_db($this->conn,$this->database);						#选择数据库
    }
	
	#创建查询结果集
    function query($sql){
        return mysqli_query($this->conn,$sql);
    }
	
	#返回结果集中的记录总数
    function rows($result){
        return mysqli_num_rows($result);
    }
	
      #自定义查询方法selectbyId
    function selectbyUser($table,$username){
        return $this->query("SELECT * FROM $table where username='$username'");
    }
	
    //自定义插入数据方法
    function insert($table,$username,$password){
        $this->query("INSERT INTO $table (username,password) VALUES ('$username','$password')");
    }

    #mysql_fetch_assoc() 函数从结果集中取得一行作为关联数组。
    function assoc($result){
        return mysqli_fetch_assoc($result);
    }

	#数据库关闭
    function dbClose(){
        mysqli_close($this->conn);
    }
	
	
}
$db = new Mysql("localhost","root","123456","test");
?>
