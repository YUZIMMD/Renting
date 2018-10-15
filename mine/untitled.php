<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户信息管理</title>
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
  <h1 class="m-n font-thin h5">历史留言和评论</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
    <form id="form1" name="form1" method="post" action="">
<table border="0" cellspacing="1" class="table table-bordered">
     <tr style="height:20px"></tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>房子评论</label></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <th>历史发表留言</th>
          <th>房子编号</th>
          <th>回复人</th>
          <th>时间</th>
          <th>回复内容</th>
          <th>删除</th>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
  $sql=mysql_query(" select * from tb_word where user='".$_SESSION['user']."'");
  $info=mysql_fetch_array($sql);
 	 do{
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
      <td><?php echo $info['question'];?></td>
      <td><?php echo $info['no']?></td>
      <td><?php echo $info['muser'];?></td>
      <td><?php echo $info['date'];?></td>
      <td><?php echo $info['reply'];?></td>
      <td><a href="delete_reply.php?delete=<?php echo $info['id'];?>" class="text-danger"> 删除</a></td>
    </tr>
     <?php
      }while($info=mysql_fetch_array($sql));
     ?>
      <tr style="height:20px"></tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>给管理员的留言</label></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <th colspan="2">历史发表留言</th>
          <th colspan="2">回复内容</th>
           <th>时间</th>
          <th>删除</th>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
  $sql=mysql_query(" select * from tb_leaveword where user='".$_SESSION['user']."'");
  $info=mysql_fetch_array($sql);
 	 do{
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
      <td colspan="2"><?php echo $info['word'];?></td>
      <td colspan="2"><?php echo $info['reply'];?></td>
      <td><?php echo $info['date'];?></td>
      <td><a href="delete_reply1.php?delete=<?php echo $info['id'];?>" class="text-danger"> 删除</a></td>
    </tr>
     <?php
      }while($info=mysql_fetch_array($sql));
     ?>
  </table>
</form>
    </div>
  </div>
</div>
</body>
</html>
