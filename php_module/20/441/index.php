<?php
 include("top.php");
?>
<table width="792" height="279" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="279" valign="top" bgcolor="#F3F2EE"><div align="center">
      <br>
      <table width="550" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="49" background="images/sp.jpg">&nbsp;</td>
        </tr>
      </table>
      <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
	     $sql=mysql_query("select * from tb_shangpin order by addtime desc limit 0,10",$conn); 
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
		   echo "本站暂无最新产品!";
		  } 
		 else
		 { 
		    do
			 { 
	   ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info[tupian]==""){
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <img border="0" src="<?php echo $info[tupian];?>" width="80" height="80">
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">商品名称：</div></td>
          <td colspan="5"><div align="left"><?php echo $info[mingcheng];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品品牌：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info[pinpai];?></div></td>
          <td width="62"><div align="center" style="color: #000000">商品型号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info[shuliang]-$info[cishu];?></div></td>
          <td width="63"><div align="center" style="color: #000000">商品等级：</div></td>
          <td width="73"><div align="left"><?php echo $info[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info[huiyuanjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (ceil(($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" align="right"><a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/in_gwc.gif" width="104" height="20" border="0"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
        </tr>
        <tr>
          <td height="7" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    	}
		   while($info=mysql_fetch_array($sql));
		 
		 }
		?>
      </table>
      <br>
    </div></td>
  </tr>
</table>
