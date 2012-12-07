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
$(document).ready(function(){
		$('#tj_btn').click(function(){
			//alert(getCookie("stuno"));
			//alert(getCookie("tryid"));
			var stuno=getCookie("stuno");
			var tryid=getCookie("tryid");
			$.post(
				'userinfo.php',
				{
				no:stuno,
				nd:tryid
				},
				function(){
					alert("提交数据成功");
					window.location.href='./endwords.php';
				}
			);
		});
	});
</script>
</head>
<body>
<div id="title">
	<h1>结束</h1>
</div>
<div id="login" class="box">
	<form>
	<p style="text-align:center">感谢您的参与，测验已经完成。请您提交结果，谢谢。</p>
	<input type="button" id="tj_btn" value="提交"/>
	</form>
</div>
</body>
</html>