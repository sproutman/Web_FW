<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���๹�캯���ĵ���</title>
</head>
<?php
 class father 
  {
    private $m;
	public function __construct($x)
	{
	  $this->m=$x;
	}  
    public function father_function()
	{
	  echo "�����Ա��������������".$this->m;
	}
    
  }
  
  class child extends father
   {

     public function __construct($x)
	  {
	   parent::__construct($x); 
	  }
	}
  
$obj=new child("mingrisoft");
$obj->father_function();
?>
<body>
</body>
</html>
