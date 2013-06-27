<?php	
session_start();
include("top.php");
?>
<table width="792" height="199" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"  bgcolor="#F3F2EE">	<br>      
      <table border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="gouwu1.php">
        <tr>
          <td width="588" height="49" background="images/gwc.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
              <?php
			  session_register("total");
			  if($_GET[qk]=="yes"){
			     $_SESSION[producelist]="";
				 $_SESSION[quatity]=""; 
			  }
			   $arraygwc=explode("@",$_SESSION[producelist]);
			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++){
			       $s+=intval($arraygwc[$i]);
			   }
			  if($s==0 ){
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
                   echo"</tr>";
				}
			  else
			   { 
			?>
              <tr>
                <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
                <td width="52" bgcolor="#FFFFFF"><div align="center">数量</div></td>
                <td width="64" bgcolor="#FFFFFF"><div align="center">市场价</div></td>
                <td width="64" bgcolor="#FFFFFF"><div align="center">会员价</div></td>
                <td width="51" bgcolor="#FFFFFF"><div align="center">折扣</div></td>
                <td width="66" bgcolor="#FFFFFF"><div align="center">小计</div></td>
                <td width="71" bgcolor="#FFFFFF"><div align="center">操作</div></td>
              </tr>
              <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquatity[$i]=$value;  
						}
					  }
					  
					}
				  
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				
				for($i=0;$i<count($array)-1;$i++){ 
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!=""){
				   $sql=mysql_query("select * from tb_shangpin where id='".$id."'",$conn);
				   $info=mysql_fetch_array($sql);
				   $total1=$num*$info[huiyuanjia];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[mingcheng];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center">
                    <input type="text" name="<?php echo $info[id];?>" size="2" class="inputcss" value=<?php echo $num;?>>
                </div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shichangjia];?>元</div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia];?>元</div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo (ceil(($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia]*$num."元";?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removegwc.php?id=<?php echo $info[id]?>">移除</a></div></td>
              </tr>
              <?php
			      }
				 }
			 ?>
              <tr>
                <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                    <table width="500" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="125" height="31"><div align="center">
                            <input name="submit" type="submit" class="buttoncss" value="更改商品数量">
                        </div></td>
                        <td width="125"><div align="center"><a href="gouwu2.php">去收银台</a></div></td>
                        <td width="125"><div align="center"><a href="gouwu1.php?qk=yes">清空购物车</a></div></td>
                        <td width="125"><div align="left">合计：<?php echo $total;?> 元 </div></td>
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
    </table></td>
  </tr>
</table>
