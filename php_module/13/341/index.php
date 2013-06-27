<link rel="stylesheet" type="text/css" href="font.css">
<script language="javascript">
function bgsd()
{
 if (bgsud.src=="")
  {
    bgsud.src="bg.mid";
  }
 else
  {
    bgsud.src="";
  }


}
</script>
<style type="text/css">
<!--
.STYLE1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>

<bgsound src="" loop="-1" id="bgsud"></bgsound>
可控的背景音乐<br><br>
<input type="checkbox" name="bgsoundbutton"onClick="javascript:bgsd()" >
背景音乐开关</div>
