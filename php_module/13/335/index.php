<table width="566" height="170" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0000FF"><table width="566" height="170" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td bgcolor="#FFFFFF"><div id="demo" style="OVERFLOW: hidden; WIDTH: 566px; HEIGHT: 176px" >
          <table cellspacing="0" cellpadding="0" align="center" border="0">
            <tbody>
              <tr>
                <td id="demo1">&nbsp;<img  height="175" src="images/1.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/2.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/3.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/4.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/5.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/6.jpg" width="143" border="0" />&nbsp;
				<img height="175" src="images/7.jpg" width="143" border="0" />&nbsp;
				</td>
                <td id="demo2"></td>
              </tr>
            </tbody>
          </table>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<SCRIPT language="javascript">
var speed=20 
demo2.innerHTML=demo1.innerHTML

function Marquee(){
if(demo1.offsetWidth-demo.scrollLeft<=0)
	demo.scrollLeft=0
else
	demo.scrollLeft++
}

var MyMar=setInterval(Marquee,speed)

demo.onmouseover=function(){clearInterval(MyMar)}
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
</SCRIPT>