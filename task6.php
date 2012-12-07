<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>心理实验二</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<script type="text/javascript">
//禁止前进后退
window.history.forward();
//all the page is ready
	$(document).ready(function(){
		endtime=new Date().getTime()+300000;
		var temtime=Math.floor(Math.random()*10+1);
		if(temtime%2==0)
		{
			SetCookie("task4",1);
			SetCookie("task3",0);
			lxfEndtime("task4.php");
		}
		else
		{
			SetCookie("task3",1);
			SetCookie("task4",0);
			lxfEndtime("task3.php");
		}
	});
</script>
</head>
<body>	
	<div id="title_task">
		<h1>自选任务：中文类比推理测验</h1>
		<?php readfile("editor/question/t6sm.txt");?>
	</div>
	<div id="imagebox" class="box">
		<?php readfile("editor/question/t6.txt");?>
	</div>
	<!--js计时器-->
	<div id="timer">
		<hr>
		<div id="timer_mins" class="timer_numbers"><p>00</p></div>
		<div id="timer_seconds" class="timer_numbers"><p>00</p></div>
	</div>
</body>
</html>