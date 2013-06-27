<?php
$id=$_GET[id];
$tablename="tb_zc";
class delzc
  {
     
	 private $classid;
	 private $classtablename;
	 public function __construct($x,$y)
	  {
	   $this->classid=$x;
	   $this->classtablename=$y;
	  }
  
     public function del()
	  {
	    include_once("conn.php");
	    if(mysql_query("delete from tb_zc where id='".$this->classid."'",$conn))
		 {
		   echo "<script>window.location.href='index.php';</script>";
		
		 }
	    else
		 {
		   echo "<script>alert('资产信息删除失败!');history.back();</script>";
		 }
	  
	  }
  }

 $delobj=new delzc($id,$tablename);
 $delobj->del();
?>