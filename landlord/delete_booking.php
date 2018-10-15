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
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
if($_GET['delete']){
	 $state='订单已被取消';
	 //根据id从tb_booking 中获取信息
	   $sql_booking=mysql_query(" select * from tb_booking where id='".$_GET['delete']."'");
       $info_booking=mysql_fetch_array($sql_booking);
      $query1=mysql_query("insert into tb_rent(no,name,price,type,date,word,muser,mtel,user,tel,state)values('".$info_booking['no']."','".$info_booking['name']."','".$info_booking['price']."','".$info_booking['type']."','".$info_booking['date']."','".$info_booking['word']."','".$info_booking['muser']."','".$info_booking['mtel']."','".$info_booking['user']."','".$info_booking['tel']."','".$state."')");
   $query2=mysql_query("delete from tb_booking where id='".$_GET['delete']."'");
		if($query1==true&&$query2==true){
			echo "<script> alert('取消成功');window.location.href='index.php?a=房产预约登记';</script>";
		}
	    else{
		     echo "<script>alert('取消失败!!');history.back()</script>";
	          }
}
?>