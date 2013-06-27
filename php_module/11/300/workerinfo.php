<?php
include_once("top.php");
?>
<table width="610" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#366696"><table width="610" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="70" height="25" bgcolor="#FFFFFF"><div align="center">员工姓名</div></td>
        <td width="99" bgcolor="#FFFFFF"><div align="center">所属部门</div></td>
        <td width="55" bgcolor="#FFFFFF"><div align="center">年龄</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">工作类别</div></td>
        <td width="109" bgcolor="#FFFFFF"><div align="center">身份证号</div></td>
        <td width="118" bgcolor="#FFFFFF"><div align="center">家庭住址</div></td>
        <td width="51" bgcolor="#FFFFFF"><div align="center">操作</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_worker",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	      echo "暂无员工信息!";
	   }
	   else
	    {
	     do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[age];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[type];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[address];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changeworkerinfo.php?id=<?php echo $info[id];?>" class="a1">修改</a></div></td>
      </tr>
	  <?php
	       }
		   while($info=mysql_fetch_array($sql));
	    }
	  ?>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
