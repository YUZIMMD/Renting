<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-用户留言信息</title>
<style>
select{
	width: 70px;
    height: 30px;
    border: 1px solid #ccc;
	}
</style>
</head>
<body>
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h5">用户留言信息</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
    <form id="form1" name="form1" method="post" action="">
<table border="0" cellspacing="1" class="table table-bordered">
     <tr style="height:20px"></tr>
     <tr style="height:10px;"></tr>
     <tr align="center" bgcolor="#CCCCCC">
          <th width="98" class="text-center">留言者</th>
          <th width="274" class="text-center">内容</th>
          <th width="275" class="text-center">回复内容</th>
          <th width="75" class="text-center">回复</th>
          <th width="75" class="text-center">操作</th>
    </tr>
      <?php
	  mysql_connect("localhost","root","root");
	  mysql_query("SET NAMES 'utf8'"); 
	  include("Connections/conn.php");
	  mysql_select_db('rent',$conn);
	  $sql=mysql_query("select * from tb_leaveword");
	  $info=mysql_fetch_array($sql);
 	 do{
   ?>
    <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
         <td align="center"><?php echo $info['user'];?></td>
          <td><?php echo $info['word'];?></td>
          <td><?php  
		  if($info['reply']==null){
			 echo "您还没有回复，请回复留言";
			  
			  }
			  else
			  echo $info['reply'];
		  
		  
		  ?></td>
          <td align="center"><a href="reply.php?reply=<?php echo $info['id'];?>" class="text-info"> <?php  
		  if($info['reply']==null){
			 echo "回复";
			  
			  }
			  else
			  echo "修改回复";
		  
		  
		  ?></a></td>
          <td align="center"><a href="delete_mword.php?delete=<?php echo $info['id'];?>" class="text-danger">删除</a></td>
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
