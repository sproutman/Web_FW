<html>
<head>
<title>�ļ����</title>
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
<body><h3 align="center">�ļ����</h3>
  <div align="center">
    <table width="500" height="30" border="1" align="center">
      <tr align="center" valign="middle" bgcolor="#A5F5BF" >
        <th width="100" height="25" align="center" valign="middle"><span class="style1">��Ŀ��</span></th>
        <th width="60" align="center" valign="middle"><span class="style1">��С</span></th>
        <th width="150" align="center" valign="middle"><span class="style1">��������</span></th>
        <th width="180" align="center" valign="middle"><span class="style1">����޸�ʱ��</span></th>
      </tr>
<?php 
    if(!isset($_GET[mulu])||empty($_GET[mulu]))$dqml=getcwd();//��ýű�Ŀ¼
        else $dqml=$_GET[mulu];
    chdir($dqml);//�ı䵱ǰĿ¼
        echo "��ǰĿ¼:".getcwd()."<br>";
    $ml = opendir($dqml);  //��Ŀ¼
    while ($hqml = readdir($ml)){ //ѭ����ȡĿ¼�е�Ŀ¼���ļ�
    echo "<tr><td align='center' valign='middle'bgcolor='#A5F5BF'>";
        if(is_dir($hqml)){  //�ж���Ŀ¼
           if($hqml=="."){
	          $mulu=getcwd();//��ʾ��ǰĿ¼
       echo "<a href=$php_self?mulu=$mulu><span class='style1'>����</span></a>"; }
           elseif($hqml==".."){
              $mulu=getcwd()."\\.."; //�ϼ�Ŀ¼
	          echo "<a href=$php_self?mulu=$mulu><span class='style1'>�ϼ�Ŀ¼</span></a>";
           }else{
	          $mulu=getcwd()."\\$hqml";  //��Ŀ¼
	          echo "<a href=$php_self?mulu=$mulu>$hqml</a>"; } 
		   }else{ 
           $ext=substr($hqml,strrpos($hqml,"."));
	if(strtoupper($ext)==".PHP"||strtoupper($ext)==".TXT"){
	    $mulu=getcwd();
	    echo "<a href=./example25.php?mulu=$mulu&filename=$hqml&type=$ext>$hqml</a>"; 
		}else{
        echo "$hqml"; }  }
    if(is_dir($hqml)) $file_size="Ŀ¼";
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
