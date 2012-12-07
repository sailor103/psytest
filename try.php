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
//清除用户数据
delCookie("tryid");
//alert(getCookie("tryid"));
	function isTry(){
		if($("input:[name=nd]:radio:checked").length == 0)
		{
			alert("请您选择难度");
			return false;
		}
		else
		{
			//alert($("input:[name=nd]:radio:checked").val());
			return true;
		}
	}

	$(document).ready(function(){
		//ajax提交
		var tryno;
		$("#try_btn").click(function(){
			if(isTry())
			{
				if($("input:[name=nd]:radio:checked").val()=="nd1")
				{
					tryno=1;
				}
				else
				{
					tryno=2;
				}
			    SetCookie("tryid",tryno);
			    //alert(getCookie("tryid"));

			   //条件ajax
			   if(tryno==1)
			   {
			   		//$('body').load("task5.php");
			   		window.location.href='./task5.php';
			   }
			   else
			   {
			   		//$('body').load("task6.php");
			   		window.location.href='./task6.php';
			   }
			}
		});
	});

</script>
</head>
<body>
	<div id="title">
		<h1>选择难度</h1>
	</div>
	<div id="try" class="box">
		<form method="post" id="searchform">
			<li><?php readfile("editor/question/nd1.txt");?>&nbsp;&nbsp;&nbsp;<input type="radio" value="nd1" name="nd" /></li>
			<li><?php readfile("editor/question/nd2.txt");?>&nbsp;&nbsp;&nbsp;<input type="radio" value="nd2" name="nd" /></li>
			<div class="clear"></div>
			<input type="button" id="try_btn" value="确定"/>
		</form>
	</div>
</body>
</html>