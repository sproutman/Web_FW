<link rel="stylesheet" type="text/css" href="font.css">
<table width="180" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" bgcolor="#555555"><div align="center" style="color: #FFFFFF">用户登录</div></td>
        </tr>
        <tr>
          <td height="100" bgcolor="#555555"><table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td bgcolor="#FFFFFF"><table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><table width="180" border="0" cellpadding="0" cellspacing="0">
					  <script language="javascript">
					     function chkuserinput(form)
						 {
						   if(form.username.value=="")
                            {
							  alert("请输入用户名!");
							  form.username.select();
							  return(false);
							}		
							if(form.userpwd.value=="")
                            {
							  alert("请输入用户密码!");
							  form.userpwd.select();
							  return(false);
							}	
							if(form.yz.value=="")
                            {
							  alert("请输入验证码!");
							  form.yz.select();
							  return(false);
							}	
						   return(true);				 
						 }
					  
					  </script>
					  <script language="javascript">
					   function openfindpwd()
					   {
					    window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
					   
					   }
					  </script>
					     <form name="form2" method="post"  onSubmit="return chkuserinput(this)">
                          <tr>
                            <td height="10" colspan="3">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="50" height="20"><div align="right">用户：</div></td>
                            <td height="20" colspan="2"><div align="left">
                                <input type="text" name="username" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                            </div></td>
                          </tr>
                          <tr>
                            <td height="20"><div align="right">密码：</div></td>
                            <td colspan="2"><div align="left">
                                <input type="password" name="userpwd" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                            </div></td>
                          </tr>
                          <tr>
                            <td height="20"><div align="right">验证：</div></td>
                            <td width="66" height="20"><div align="left">
                                <input type="text" name="yz" size="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                            </div></td>
                            <td width="64"><div align="left">
						&nbsp;<?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
							   }
							?>
						    </div></td>
                          </tr>
                          <tr>
                            <td height="20" colspan="3">
                              <div align="center">
                                <input type="hidden" value="<?php echo $num;?>" name="num">
                                <input type="submit" class="buttoncss" value="提交">
  &nbsp;</div></td></tr>
                          <tr>
                            <td height="10" colspan="3">&nbsp;</td>
                          </tr>

					    </form>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
</table>
      