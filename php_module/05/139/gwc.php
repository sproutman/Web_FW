<?php session_start(); include("conn/conn.php");
 if($_SESSION[user]==""){
    echo "<script>alert('���ȵ�¼������!');history.back();</script>";
	exit; }  
?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
<title>ͨ��sessionʵ�ֹ��ﳵ����</title>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
    <form name="form1" method="post" action="gwc.php">
    <tr>
      <td height="32" background="images/143ss..gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION[user];?></td>
    </tr>
    <tr>
      <td  bgcolor="#555555"><table width="480" border="0" align="center" cellpadding="0" cellspacing="1" background="images/143s..gif">
    <?php
	   session_register("total");
	  if($_GET[qk]=="yes"){
		  $_SESSION[producelist]="";
		  $_SESSION[quatity]=""; }
	   $arraygwc=explode("@",$_SESSION[producelist]);
	   $s=0;
	   for($i=0;$i<count($arraygwc);$i++){
		   $s+=intval($arraygwc[$i]);//��ȡ����������ֵ
        }
	   if($s==0){
		 echo "<tr>";
         echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>���Ĺ��ﳵΪ��!</td>";
         echo"</tr>";
		}else{ 
			?>
                <tr>
                  <td width="120" align="center" bgcolor="#FFFFFF"><span class="style1">��Ʒ���</span></td>
                  <td width="120" height="25" bgcolor="#FFFFFF" class="style1"><div align="center">��Ʒ����</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">����</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">�г���</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">С��</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">����</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				 while(list($name,$value)=each($_POST)){
				 //list�������е�ֵ����һЩ���� ,each���������е�ǰ�ļ���ֵ�Բ�������ָ����ǰ�ƶ�һ�� 				
					 for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquatity[$i]=$value; }
					  }
					}
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				for($i=0;$i<count($array)-1;$i++){ 
				   $lmbs=$array[$i];
				   $num=$arrayquatity[$i];
		   		   if($lmbs!=""){
				     $sql=mysql_query("select * from tb_shop where id='".$lmbs."'",$id);
				     $info=mysql_fetch_array($sql);
				     $total1=$num*$info[price];
				     $total+=$total1;
				     $_SESSION["total"]=$total;
			?>
               <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[number];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[name];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2">
                      <input type="text" name="<?php echo $info[id];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[price];?>Ԫ</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[price]*$num."Ԫ";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><a href="delete.php?id=<?php echo $info[id]?>">�Ƴ�</a></div></td>
                </tr>
                <?php
			      
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="7" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr class="style1">
                          <td width="125"><div align="center">
                              <input type="submit" value="������Ʒ����" class="buttoncss">
                          </div></td>
                          <td width="125">&nbsp;</td>
                          <td width="125"><div align="center"><a href="gwc.php?qk=yes">��չ��ﳵ</a></div></td>
                          <td width="125"><div align="left">�ܼƣ�<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
</table>
