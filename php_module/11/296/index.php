<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>类的继承</title>
</head>
<?php
class father
{
  private $m;
  public function __construct($x)
   {
     $this->m=$x;
   }
  
  public function print_line_father()
   {
     echo "这是父类的成员函数!  print_line_father()";
   
   }

}

class child extends father
{
   private $n;
   public function __construct($x)
    {
     $this->n=$x;
    }
   public function print_line_child()
   {
     echo "这是子类的成员函数!  print_line_child()";
   
   }
}

$obj=new child("mrsoft");
$obj->print_line_child();
echo "<br>";
$obj->print_line_father();

?>
<body>
</body>
</html>
