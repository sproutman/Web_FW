<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在状态栏中显示数字时钟</title>
<script language="JavaScript">
var timerID = null;
var timerRunning = false;

function stopclock (){
        if(timerRunning)
                clearTimeout(timerID);
        timerRunning = false;
}

function showtime () {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds()
        var timeValue = "北京时间：" + ((hours >24) ? hours -24 :hours)
        timeValue += ((minutes < 10) ? ":0" : ":") + minutes
        timeValue += ((seconds < 10) ? ":0" : ":") + seconds
        window.status = timeValue;
        timerID = setTimeout("showtime()",1000);
        timerRunning = true;
}

function startclock () {
        stopclock();
        showtime();
}
</script>
</head>
<body onLoad="startclock()"> 
<div align="center"><img src="image_01.JPG" width="461" height="277">
</div>
</body>
</html>
