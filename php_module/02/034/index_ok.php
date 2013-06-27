<?php session_start(); include("conn/conn.php");
       $data=date("Y-m-d h:i:s");
       $ip=getenv("REMOTE_ADDR");
  if($Submit=="提交"){
     if($ljid==""){ echo "<script>alert('您没有选择投票的内容!');         window.location.href='index.php?lmbs=投票专区&lmlb=$tpzt1';</script>";
     }else{
       $query="select * from tb_poll1_ip where tpzt='$tpzt1' and ip='$ip'";
       $result=mysql_query($query);
       $row=mysql_num_rows($result);
       if($row>0){
          echo "<script>alert('您不可以重复投票!'); window.location.href='index.php?lmbs=投票专区&lmlb=$tpzt1';</script>";
       }else{
          $querys="update tb_poll1 set tpcs=tpcs+1 where id='$ljid'";
          $result=mysql_query($querys);
          $query=mysql_query("select * from tb_poll1 where id='$ljid'");
          $myrow=mysql_fetch_array($query);
          $tpzt1=$myrow[tpzt];
          $tpnr1=$myrow[tpnr];
          $querys="insert into tb_poll1_ip(tpzt,tpnr,ip,data,ljid )values('$tpzt1','$tpnr1','$ip','$data','$ljid')";
          $result=mysql_query($querys);
            echo "<script>alert('投票提交成功!'); window.location.href='index.php?lmbs=投票专区&lmlb=$tpzt1';</script>";
            }
       }
   }
   //处理多选投票  
 if($Submit2=="提交"){ 
    $result=mysql_query("select * from tb_poll2_ip where tpzt='$recid' and ip='$ip'");
    $row=mysql_num_rows($result);
	if($row>0){ echo "<script>alert('您不可以重复投票!'); window.location.href='index.php?lmbs=投票专区&lmlb=$recid';</script>";
     }else{
       $k=0;
       while(list($name,$value)=each($_POST)){ $k+=$name;  
	        if(is_numeric($name)==true){ 
               mysql_query("update tb_poll2 set tpcs=tpcs+1 where id='".$name."'");   } 
	   } 
	   if($k==0){echo "<script>alert('您不能投票');history.back();</script>"; exit;}
        mysql_query("insert into tb_poll2_ip(tpzt,ip)values('$recid','$ip')");
          echo "<script>alert('投票提交成功!'); window.location.href='index.php?lmbs=投票专区&lmlb=$recid';</script>";
         }
      }
?>