<?php
class con{                   //����һ����
    private $hostname;       //�޶��ַ�
	private $username;
	private $userpwd;
	private $databasename;
    public $conn;            //�޶��ַ�
	public function __construct($x,$y,$m,$n){   //���캯��
	    $this->hostname=$x;
	    $this->username=$y;
	    $this->userpwd=$m;
		$this->databasename=$n; } 
    public function getcon(){                    //���庯��
	     $this->conn=mysql_connect($this->hostname,$this->username,$this->userpwd);  
	     mysql_select_db($this->databasename,$this->conn);
             return $this->conn;	  
	  }
}
?>