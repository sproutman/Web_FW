<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>模拟的进度条</title>
<style type="text/css">
<!--
div{ font-size: 9pt}
#load{font-size: 9pt; cursor: default; position: absolute; display:block;width:402;height:20;top:expression((document.body.clientHeight-50)/2);left:expression((screen.width-400)/2); display: block; z-index:100;background:#EDECE9}
.px1{border: 1px solid ;background-color: #FFFFFF;}
body {
	background-color: #000000;
}
.style1 {color: #FFFF00}
-->
</style>
<script language=JavaScript>
var load_line_i=1;
var load_line_step=500;
function load_num(txt)
{load_line_i+=400/load_line_step;
load_txt.innerText=txt+" "+Math.floor(load_line_i/4.00)+"%";
document.all("line").width=load_line_i;}
function finish(){
window.location.href="http://www.mingrisoft.com";
}
</script>
</head>
<body onload=finish()>
<div id=load style="background-color:#000000"><span class="style1">请稍候...</span>
<div class=px1><img  id=line style="background:red" width=14 height=14></div>
<div class="style1" id=load_txt>loading</div>
</div>
<?php 
for($i=0;$i<500;$i++){
?>
<script>load_num("Loading");</script>
<?php
}
?>
</body>
</html>
