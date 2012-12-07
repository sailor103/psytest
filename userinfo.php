<?php 
	$_POST["no"]=!empty($_POST["no"]) ? $_POST["no"] : null;
	$_POST["nd"]=!empty($_POST["nd"]) ? $_POST["nd"] : null;
	if($_POST["no"]&&$_POST["nd"])
	{
		//尝试连接数据库
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('Could not connect:'.mysql_error());
		}
		else 
		{
			mysql_select_db("psytest",$con);
			mysql_query("SET NAMES 'utf8'"); 
			mysql_query("SET CHARACTER_SET_CLIENT=utf8"); 
			mysql_query("SET CHARACTER_SET_RESULTS=utf8"); 
			$stuno=$_POST["no"];
			$tryno=$_POST["nd"];
			//写入数据库
			$sql_addtester="INSERT INTO psy2(stuno,sel) VALUES('$stuno',$tryno)";
			if(!mysql_query($sql_addtester,$con))
			{
				echo mysql_error();
			}
			mysql_close($con);
		}
	}
?>