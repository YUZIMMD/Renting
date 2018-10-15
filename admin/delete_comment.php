<!DOCTYPE html>
<html>
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
 include("Connections/conn.php");
	if($_GET['delete']==true){					//判断提交的变量值是否为真
		//根据$_GET获取的变量值为依据，执行删除语句
		$query=mysql_query("delete from tb_word where id='".$_GET['delete']."'");
		if($query){
			echo "<script> alert('房屋评论删除成功');window.location.href='admin_index.php?a=房屋评论管理';</script>";
		}
	}
?>