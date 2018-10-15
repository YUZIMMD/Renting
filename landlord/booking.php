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
  <h1 class="m-n font-thin h5">预约记录</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
    <form id="form1" name="form1" method="post" action="">
<table border="0" cellspacing="1" class="table table-bordered">
  <tr bgcolor="#CCCCCC" >
    <td align="center" colspan="2">请选择查询条件：
      <select name="f2" class="form-contorl inline" id="f2">
        <option value="姓名"<?php if($result['no']=="编号"){?> selected <?php }?>>编号</option>
      </select>
      </td>
    <td colspan="5">
      <input name="key" type="text" id="key" size="50" class="form-control input-sm inline w-md"/>
      <input name="select" type="submit" class="btn btn-info btn-sm" value="查询" id="select"/></td>
      <td colspan="3"></td>
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
        mysql_connect("localhost","root","root");
        include("../Connections/conn.php");
	    mysql_select_db('rent',$conn);
	    mysql_query("SET NAMES 'utf8'"); 
        $sql=mysql_query(" select * from tb_booking where no='".$_POST['key']."'and muser='".$_SESSION['muser']."'");
	    $info1=mysql_fetch_array($sql);
	 if($info1){
		$sql_house=mysql_query(" select * from house where no='".$info1['no']."'");
	    $info_house=mysql_fetch_array($sql_house);
  ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#9999CC'"onMouseOut="this.bgColor='#FFFFFF'">
          <td height="37"><?php echo $info1['no'];?></td>
          <td><a href="../house.php?id=<?php echo $info_house['id']?>"><?php echo $info1['name'];?></a></td>
          <td><?php echo $info1['type'];?></td>
          <td><?php echo $info1['price'];?></td>
          <td><?php echo $info1['user'];?></td>
          <td><?php echo $info1['date'];?></td>
          <td><?php echo $info1['word'];?></td>
         <td><a href="delete_booking.php?delete=<?php echo $info1['id'];?>" class="text-danger">取消</a></td>
          <td><a href="rent_succuss.php?rent=<?php echo $info1['id'];?>" class="text-success">已出租</a></td>
    </tr>
     <?php
	 }else{?>
	     <tr align="center"><td colspan="10">查询无结果</td></tr>
	 <?php
		 }
      };
     ?>
     <tr style="height:20px"></tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>所有预约记录</label></td>
      <td colspan="7" class="text-center"><a class="text-danger" data-toggle="modal" data-target="#myModal">注意事项</a></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <td width="66" height="22">编号</td>
          <td width="184">名称</td>
          <td width="67">类型</td>
          <td width="66">价格</td>
          <td width="41">用户</td>
          <td width="73">时间</td>
          <td width="70">备注</td>
          <td width="54">删除预约</td>
          <td width="64">处理预约</td>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
  $sql=mysql_query(" select * from tb_booking where muser='".$_SESSION['muser']."'");
  $info=mysql_fetch_array($sql);
 	  do{
		 $sql_house1=mysql_query(" select * from house where no='".$info['no']."'");
	     $info_house1=mysql_fetch_array($sql_house1);
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
          <td height="37"><?php echo $info['no'];?></td>
          <td><a href="../house.php?id=<?php echo $info_house1['id']?>"><?php echo $info['name'];?></a></td>
          <td><?php echo $info['type'];?></td>
          <td><?php echo $info['price'];?></td>
          <td><?php echo $info['user'];?></td>
          <td><?php echo $info['date'];?></td>
          <td><?php echo $info['word'];?></td>
          <td><a href="delete_booking.php?delete=<?php echo $info['id'];?>" class="text-danger">取消</a></td>
          <td><a href="rent_succuss.php?rent=<?php echo $info['id'];?>" class="text-success">已出租</a></td>
    </tr>
     <?php
       }while($info=mysql_fetch_array($sql));
     ?>
  </table>
</form>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">关于处理预约的注意事项</h4>
      </div>
      <div class="modal-body">
        <table class="table">
          <tr><td>1.请及时处理预约<td></tr>
          <tr><td>2.当与租房者达成租房协议，请立即点击已出租按钮，避免其他用户，再进行预约租房<td></tr>
          <tr><td>3.当已出租时，还有其他用户提交预约，可以协商沟通，说明情况删除预约<td></tr>
          <tr><td>4.其他情况，<a href="../about.php" class="text-info">请联系管理员</a></td></tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">好的，我知道了</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/layer/layer.js"></script>
</html>
