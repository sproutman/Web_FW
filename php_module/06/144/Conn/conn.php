<?php
class con{                   //创建一个类
    private $hostname;       //限定字符
	private $username;
	private $userpwd;
	private $databasename;
    public $conn;            //限定字符
	public function __construct($x,$y,$m,$n){   //构造函数
	    $this->hostname=$x;
	    $this->username=$y;
	    $this->userpwd=$m;
		$this->databasename=$n; } 
    public function getcon(){                    //定义函数
	     $this->conn=mysql_connect($this->hostname,$this->username,$this->userpwd);  
	     mysql_select_db($this->databasename,$this->conn);
             return $this->conn;	  
	  }
}
?>