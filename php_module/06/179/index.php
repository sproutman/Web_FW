<?php session_start();include("conn/conn.php"); ?><title>查询结果的分栏显示</title>
<table width="450" border="1" align="center" cellpadding="0" cellspacing="0">
<?php  for($i=1; $i<=4; $i++) {  //如果变量<=4,按照行进行循环,输出行
            echo "<tr>";    ?>  
        <?php  if($i==1){
                  $query="select * from tb_picture where id order by id desc";  //从数据表mr_lttb中获取表情图			
				  $lttb=mysql_query($query); }
				  $j=1;					     //设置变量$j=1
				  while ($lttb_row=mysql_fetch_array($lttb)){   //进行while循环输出
						 if ($j<=6)  {   //每行的表情图个数<=8,输出如下内容
						    if ($c==0){ $c="checked"; }
		?>
  <td height="26" align="center" valign="middle">
<input name="xq" type="radio" value="<?php echo $lttb_row[id];?>"<?php echo $c;?>>          
<img src="<?php echo "image_1.php?recid=$lttb_row[id]";?>" width="16" height="16"></td>
      <?php  }
		      $c=1;								  
			  ++$j;           //当表情图的个数增加时
			  if($j==7){  break;  }   //当表情图的个数等于9时,跳转到下一行重新进行循环
		                    }
	        echo "</tr>";
		}
?>
</table>