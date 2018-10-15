<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>
<?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
include("../Connections/conn.php");
	if($_GET['delete']==true){					//判断提交的变量值是否为真
		//根据$_GET获取的变量值为依据，执行删除语句
		$query=mysql_query("delete from tb_word where id='".$_GET['delete']."'");
		if($query){
			echo "<script> alert('房源信息删除成功');window.location.href='index.php?a=房产管理';</script>";
		}
	}
?>