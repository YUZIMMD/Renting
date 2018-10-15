<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户信息管理</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/layer/layer.js"></script>
<style>
select{
	width: 70px;
    height: 30px;
    border: 1px solid #ccc;
	}
	td{
		font-size:12px}
	th{
		text-align:center;}	
</style>
</head>
<body>
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h5">房屋评论/给管理员的留言</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
    <form id="form1" name="form1" method="post" action="">
<table border="0" cellspacing="1" class="table table-bordered">
     <tr style="height:20px"></tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>房屋评论</label></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <td width="130" height="23">时间</td>
          <td width="75">留言买家</td>
          <td width="300">留言内容</td>
          <td width="254">回复</td>
          <td width="112">房子编号</td>
          <td width="89" class="reply">回复</td>
          <td width="91">删除</td>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  mysql_query("SET NAMES 'utf8'"); 
  include("../Connections/conn.php");
   mysql_select_db('rent',$conn);
  $result=mysql_query("select * from tb_word where muser='".$_SESSION['muser']."'");
   $info=mysql_fetch_array($result);
 	 do{
		 $sql_house=mysql_query(" select * from house where no='".$info['no']."'");
	     $info_house=mysql_fetch_array($sql_house);
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
      <td><?php echo $info['date'];?></td>
      <td><?php echo $info['user'];?></td>
      <td><?php echo $info['question'];?></td>
      <td><?php echo $info['reply'];?></td>
      <td><a href="../house.php?id=<?php echo $info_house['id']?>"><?php echo $info['no'];?></a></td>
      <?php if($info['reply']==null){?>
		  <td><a href="reply1.php?reply=<?php echo $info['id'];?>"> 回复</a></td> 
		 <?php }else{?>
         <td><a> 已回复</a></td> 
          <?php }?>
      <td><a href="delete_reply.php?delete=<?php echo $info['id'];?>" class="text-danger">删除</a></td>
    </tr>
     <?php
      }while($info=mysql_fetch_array($result));
     ?>
  </table>
</form>
    </div>
  </div>
</div>
</body>
</html>
