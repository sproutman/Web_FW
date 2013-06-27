<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="refresh" content="5" />
<title>聊天室</title>
<link rel="stylesheet" type="text/css" href="sytle.css">
</head>
<script language="javascript">
function chkinput(form)
{
  if(form.content.value=="")
   {
      alert("禁止发表空话!");
      form.contnet.select();
	  return(false);
   }
 return(true);
}

</script>
<body>
<table width="468" height="326" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="468" height="326" border="0" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="50">&nbsp;</td>
      </tr>
      <tr>
        <td height="20">&nbsp;</td>
      </tr>
      <tr>
        <td height="145"><div align="center">
          <textarea name="jl" cols="60" rows="8"row="12">
		 <?php
		  date_default_timezone_set("Asia/Hong_Kong");
		  $time=date("Y-m-j H:i:s");
		  if($_POST[content]!=""){
            $name=$_POST[content]."(发表时间&nbsp;".$time.")"."\r\n";
			}
          if(!is_dir("./word"))
		   {
		    mkdir("./word");
		   }
          $fp=@fopen("word/word.txt","r+");
          $str=@fread($fp,filesize("word/word.txt"));
          $name.=$str;
          echo $name;
          $fp1=@fopen("word/word.txt","w+");
          fwrite($fp1,$name);
         ?>
		  </textarea>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><textarea name="content" cols="60" rows="3"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25"><div align="center"><input type="submit" name="submit" value="发送">&nbsp;&nbsp;<input type="reset" value="重写"></div></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
