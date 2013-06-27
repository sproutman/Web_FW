<?php
$name=$_POST[name];
$age=$_POST[age];
$address=$_POST[address];
$bm=$_POST[bm];
$sno=$_POST[sno];
$type=$_POST[type];
$id=$_POST[id];
class changeinfo
 {
   private $classname;
   private $classage;
   private $classaddress;
   private $classbm;
   private $classsno;
   private $classtype;
   private $classid;
   public function __construct($x,$y,$z,$m,$n,$q,$f)
    {
	  $this->classname=$x;
	  $this->classage=$y;
	  $this->classaddress=$z;
	  $this->classbm=$m;
	  $this->classsno=$n;
	  $this->classtype=$q;
	  $this->classid=$f;
	} 
   public function change()
    {
	  include_once("conn.php");
	  if(mysql_query("update tb_worker set name='".$this->classname."',age='".$this->classage."',address='".$this->classaddress."',bm='".$this->classbm."',sno='".$this->classsno."',type='".$this->classtype."' where id='".$this->classid."'",$conn))
	   {
	     echo "<script>alert('员工信息修改成功!');history.back();</script>";
	   }
	}
 
 }

  $changeobj=new changeinfo($name,$age,$address,$bm,$sno,$type,$id);
  $changeobj->change();




?>