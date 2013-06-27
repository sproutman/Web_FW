<?php
class con
 {
    private $hostname;
	private $username;
	private $userpwd;
	private $databasename;
    public $conn; 
	 public function __construct($x,$y,$m,$n)
	 {
	    $this->hostname=$x;
	    $this->username=$y;
	    $this->userpwd=$m;
		$this->databasename=$n;
	 } 

     public function getcon()
	  {
	     $this->conn=mysql_connect($this->hostname,$this->username,$this->userpwd);  
	     mysql_select_db($this->databasename,$this->conn);
	  
	  }

}

?>