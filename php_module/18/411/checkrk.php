<?php
include"conn/conn.php";
$spname=$_POST[spname];
$spxh=$_POST[spxh];
$price=$_POST[price];
$money=$_POST[money];
$gys=$_POST[gys];
$czy=$_POST[czy];
$depot=$_POST[depot];
$rdate=$_POST[rdate];
$spgg=$_POST[spgg];
$num=$_POST[num];
if($_POST[Submit]!=""){
$sql="insert into tb_rkinfo(spname,spxh,price,money,gys,czy,depot,rdate,spgg,num) values('$spname','$spxh',$price,$money,'$gys','$czy','$depot','$rdate','$spgg','$num')";
$info=mysql_query($sql);
if($info){
?>
<script language="javascript">
alert("��ϲ������ⵥ����ӳɹ���");
</script>
<?php
}else{
?>
<script language="javascript">
alert("�Բ�����ⵥ�����ʧ�ܣ�");
</script>
<?php
}
}
?>