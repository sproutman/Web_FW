<html>
<head>
<title>文件浏览</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: none;}
a:active {text-decoration: none;}
.style1 {font-size: 12px}
-->
</style></head>
<body><h3 align="center">文件浏览</h3>
  <div align="center">
    <table width="500" height="30" border="1" align="center">
      <tr align="center" valign="middle" bgcolor="#A5F5BF" >
        <th width="100" height="25" align="center" valign="middle"><span class="style1">项目名</span></th>
        <th width="60" align="center" valign="middle"><span class="style1">大小</span></th>
        <th width="150" align="center" valign="middle"><span class="style1">创建日期</span></th>
        <th width="180" align="center" valign="middle"><span class="style1">最后修改时间</span></th>
      </tr>
<?php 
    if(!isset($_GET[mulu])||empty($_GET[mulu]))$dqml=getcwd();//获得脚本目录
        else $dqml=$_GET[mulu];
    chdir($dqml);//改变当前目录
        echo "当前目录:".getcwd()."<br>";
    $ml = opendir($dqml);  //打开目录
    while ($hqml = readdir($ml)){ //循环读取目录中的目录及文件
    echo "<tr><td align='center' valign='middle'bgcolor='#A5F5BF'>";
        if(is_dir($hqml)){  //判断是目录
           if($hqml=="."){
	          $mulu=getcwd();//显示当前目录
       echo "<a href=$php_self?mulu=$mulu><span class='style1'>锁定</span></a>"; }
           elseif($hqml==".."){
              $mulu=getcwd()."\\.."; //上级目录
	          echo "<a href=$php_self?mulu=$mulu><span class='style1'>上级目录</span></a>";
           }else{
	          $mulu=getcwd()."\\$hqml";  //子目录
	          echo "<a href=$php_self?mulu=$mulu>$hqml</a>"; } 
		   }else{ 
           $ext=substr($hqml,strrpos($hqml,"."));
	if(strtoupper($ext)==".PHP"||strtoupper($ext)==".TXT"){
	    $mulu=getcwd();
	    echo "<a href=./example25.php?mulu=$mulu&filename=$hqml&type=$ext>$hqml</a>"; 
		}else{
        echo "$hqml"; }  }
    if(is_dir($hqml)) $file_size="目录";
        else $file_size=round(filesize($hqml)/1024)."k";
           echo "<td align='center' valign='middle' bgcolor='#A5F5BF'>$file_size</td>";
        $create_time=date("y-m-d h:i:sA",filectime($hqml));
           echo "<td align='center' valign='middle' bgcolor='#A5F5BF'>$create_time</td>";
        $update_time=date("y-m-d h:i:sA",filemtime($hqml));
           echo "<td align='center' valign='middle' bgcolor='#A5F5BF'>$update_time</td>"; }  
    closedir($ml); ?>
    </table>
  </div>
</body>
</html>
