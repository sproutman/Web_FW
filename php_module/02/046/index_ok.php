<?php session_start();
/*$furls=getenv("SERVER_NAME");
$sss=getenv("remote_addr");
echo $sss;
if($sss==$furls){

if($action=="�ύ"){echo  "sdfsdfdsf";
//$furl=getenv("REMOTE_HOST");
//echo $furl;
}
}else{echo "ʧ��!!";}

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
	
	echo "�ϴ��ɹ�!!";
	echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=�ļ��ϴ�\">"; }
	else echo "�ļ��ϴ�ʧ��!!";
          echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=�ļ��ϴ�\">";
}






?>