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
//all the page is ready
	$(document).ready(function(){
		$('#go_btn').click(function(){	
			window.location.href="./try.php";
		});
	});
</script>
</head>
<body>
<div id="title">
	<h1>小提示</h1>
</div>
<div id="about" class="box">
	<p>下面正式开始进行实验了哦！</p>
	<input type="button" id="go_btn" value="开始！"/>
</div>
</body>
</html>