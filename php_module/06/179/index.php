<?php session_start();include("conn/conn.php"); ?><title>��ѯ����ķ�����ʾ</title>
<table width="450" border="1" align="center" cellpadding="0" cellspacing="0">
<?php  for($i=1; $i<=4; $i++) {  //�������<=4,�����н���ѭ��,�����
            echo "<tr>";    ?>  
        <?php  if($i==1){
                  $query="select * from tb_picture where id order by id desc";  //�����ݱ�mr_lttb�л�ȡ����ͼ			
				  $lttb=mysql_query($query); }
				  $j=1;					     //���ñ���$j=1
				  while ($lttb_row=mysql_fetch_array($lttb)){   //����whileѭ�����
						 if ($j<=6)  {   //ÿ�еı���ͼ����<=8,�����������
						    if ($c==0){ $c="checked"; }
		?>
  <td height="26" align="center" valign="middle">
<input name="xq" type="radio" value="<?php echo $lttb_row[id];?>"<?php echo $c;?>>          
<img src="<?php echo "image_1.php?recid=$lttb_row[id]";?>" width="16" height="16"></td>
      <?php  }
		      $c=1;								  
			  ++$j;           //������ͼ�ĸ�������ʱ
			  if($j==7){  break;  }   //������ͼ�ĸ�������9ʱ,��ת����һ�����½���ѭ��
		                    }
	        echo "</tr>";
		}
?>
</table>