<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>对象的克隆</title>
</head>
<?php

class testclone
{
  private $m;
  public function __construct($x)
  {
    $this->m=$x;
  }
  public function print_content()
  {
   echo $this->m."<br>";
  }
}

$obj1=new testclone("mrsoft");
echo "原对象调用成员函数的输出结果：";
$obj1->print_content();
$obj2=clone $obj1;
echo "克隆后产生的对象调用成员函数的输出结果：";
$obj2->print_content();


?>

<body>
</body>
</html>
