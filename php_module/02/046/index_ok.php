<?php session_start();
/*$furls=getenv("SERVER_NAME");
$sss=getenv("remote_addr");
echo $sss;
if($sss==$furls){

if($action=="提交"){echo  "sdfsdfdsf";
//$furl=getenv("REMOTE_HOST");
//echo $furl;
}
}else{echo "失败!!";}

*/
if($Submit==true){
echo $_POST[hiddenField];
echo $_POST[textfield];
echo $_POST[textarea];
echo $_POST[checkbox];
echo $_POST[RadioGroup1];
echo $_POST[select];
echo $_POST[files];


$path = './upfiles/'. $_FILES['files']['name'];
if (move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
	
	echo "上传成功!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=文件上传\">"; }
	else echo "文件上传失败!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=文件上传\">";
}






?>