<?php
$usernc=$_POST[usernc];
$email=$_POST[email];
$sex=$_POST[sex];
$regtime=date("Y-m-j H:i:s");
 class reg
  {
    private $classudernc;
	private $classemail;
	private $classsex;
	private $classregtime;
	
	public function __construct($x,$y,$m,$n)
	 {
	  $this->classudernc=$x; 
	  $this->classemail=$y;
	  $this->classsex=$m;
	  $this->classregtime=$n;
	 }
  
    public function savereg()
	 {
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_chat where usernc='".$this->classudernc."'",$conn);
      $info=mysql_fetch_array($sql);
       if($info==true)
        {
           echo "<script>alert('���ǳ��Ѿ����ڣ���ѡ�������ǳ�!');history.back();</script>";
           exit;
        }

       if(mysql_query("insert into tb_chat(usernc,email,regtime,sex) values ('$this->classudernc','$this->classemail','$this->classregtime','$this->classsex')",$conn))
        {
          echo "<script>alert('��ϲ����ע��ɹ�!');history.back();</script>";
        }
	 }
  }
 
  $saveuserreg=new reg($usernc,$email,$sex,$regtime);
  $saveuserreg->savereg();
 
?>