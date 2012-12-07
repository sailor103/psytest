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
delCookie("stuno");
//alert(getCookie("stuno"));
//表单验证
	function  isNO(){
		//学号长度必须是11位
		var stuid=$.trim($("#login_no").val());
		if(stuid.length!=11)
		{
			alert("输入长度有误，请重新输入。");
			return false;
		}
		//并且必须是数字
		else
		{
			if(isNaN(stuid))
			{
				alert("必须是数字，请重新输入。");
				return false;
			}
			else
			{
				return true;
			}
		}
	}
//all the page is ready
	$(document).ready(function(){
		$('#sear_btn').click(function(){
			if(isNO())
			{
				SetCookie("stuno",$.trim($("#login_no").val()));
				//alert(getCookie("stuno"));
				window.location.href='./about.php';
			}
		});
	});
</script>
</head>
<body>
<div id="title">
	<h1>欢迎您的到来</h1>
</div>
<div id="login" class="box">
	<form method="post" id="searchform">
		<p>请输入您的手机号:</p>
		<input type="text" id="login_no" value="" name="no" />
		<div class="clear"></div>
		<input type="button" id="sear_btn" value="登录"/>
	</form>
</div>
</body>
</html>