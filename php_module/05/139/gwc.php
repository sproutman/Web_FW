<?php session_start(); include("conn/conn.php");
 if($_SESSION[user]==""){
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
	exit; }  
?>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
<title>通过session实现购物车功能</title>
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
		   $s+=intval($arraygwc[$i]);//获取变量的整数值
        }
	   if($s==0){
		 echo "<tr>";
         echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>您的购物车为空!</td>";
         echo"</tr>";
		}else{ 
			?>
                <tr>
                  <td width="120" align="center" bgcolor="#FFFFFF"><span class="style1">商品编号</span></td>
                  <td width="120" height="25" bgcolor="#FFFFFF" class="style1"><div align="center">商品名称</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">数量</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">市场价</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">小计</div></td>
                  <td width="60" bgcolor="#FFFFFF" class="style1"><div align="center">操作</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				 while(list($name,$value)=each($_POST)){
				 //list把数组中的值赋给一些变量 ,each返回数组中当前的键／值对并将数组指针向前移动一步 				
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
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[price];?>元</div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><?php echo $info[price]*$num."元";?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center" class="style2"><a href="delete.php?id=<?php echo $info[id]?>">移除</a></div></td>
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
                              <input type="submit" value="更改商品数量" class="buttoncss">
                          </div></td>
                          <td width="125">&nbsp;</td>
                          <td width="125"><div align="center"><a href="gwc.php?qk=yes">清空购物车</a></div></td>
                          <td width="125"><div align="left">总计：<?php echo $total;?></div></td>
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
