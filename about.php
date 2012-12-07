<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>
<title>心理实验二</title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<script type="text/javascript">
//禁止前进后退
window.history.forward();
//倒计时
//vars in time
var endtime = new Date().getTime();
var timeID;
//time function
	function lxfEndtime(){

		var nowtime = new Date().getTime();
		var youtime = endtime-nowtime;
		var seconds = youtime/1000;
		var minutes = Math.floor(seconds/60);
		var hours = Math.floor(minutes/60);
		var days = Math.floor(hours/24);
		var CDay= days ;
		var CHour= hours % 24;
		var CMinute= minutes % 60;
		var CSecond= Math.floor(seconds%60);
		var disMin;
		var disSec;
		if(endtime<=nowtime)
		{
			clearTimeout(timeID);
			//$('body').load("try.php");
			//window.location.href='./try.html';
			$('#go_btn').removeAttr("disabled"); 
			$('#go_btn').val("开始测试"); 
		}
		else
		{
			//display ontime
			disMin=CMinute.toString(10);
			disSec=CSecond.toString(10);
			if(disMin.length==1)
			{
				disMin="0"+disMin;
			}
			if(disSec.length==1)
			{
				disSec="0"+disSec;
			}
			$("#timer_mins p").html(disMin);
			$("#timer_seconds p").html(disSec);
			timeID=setTimeout("lxfEndtime()",1000);
		}
	}
//all the page is ready
	$(document).ready(function(){
		endtime = new Date().getTime()+30000;
		lxfEndtime();
		//进行测试响应
		$('#go_btn').click(function(){	
			var temtime=Math.floor(Math.random()*10+1);
			if(temtime%2==0)
			{
				SetCookie("task2",1);
				SetCookie("task1",0);
				window.location.href='./task2.php';
			}
			else
			{
				SetCookie("task1",1);
				SetCookie("task2",0);
				window.location.href='./task1.php';
			}
		});
	});
</script>
</head>
<body>
<div id="title">
	<h1>说明语</h1>
</div>
<div id="about" class="box">
	<?php readfile("editor/question/about.txt");?>
	<input type="button" disabled="disabled" id="go_btn" value="30S后才可点击"/>
</div>
<!--js计时器-->
<div id="timer">
	<hr>
	<div id="timer_mins" class="timer_numbers"><p>00</p></div>
	<div id="timer_seconds" class="timer_numbers"><p>00</p></div>
</div>
</body>
</html>