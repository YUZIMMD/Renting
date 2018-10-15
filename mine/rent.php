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
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
        mysql_connect("localhost","root","root");
        include("../Connections/conn.php");
	    mysql_select_db('rent',$conn);
	    mysql_query("SET NAMES 'utf8'"); 
        $sql=mysql_query(" select * from tb_rent where no='".$_POST['key']."'");
	    $info1=mysql_fetch_array($sql);
	 if($info1){
		 $sql2=mysql_query(" select * from house where no='".$info1['no']."'");
         $info2=mysql_fetch_array($sql2);
  ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#9999CC'"onMouseOut="this.bgColor='#FFFFFF'">
          <td><?php echo $info1['no'];?></td>
          <td><a href="../house.php?id=<?php echo $info2['id']?>" target="_blank"><?php echo $info1['name'];?></a></td>
          <td><?php echo $info1['type'];?></td>
          <td><?php echo $info1['price'];?></td>
          <td><?php echo $info1['user'];?></td>
          <td><?php echo $info1['date'];?></td>
          <td><?php echo $info1['word'];?></td>
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
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <th width="88" height="22">编号</th>
          <th width="203">名称</th>
          <th width="71">类型</th>
          <th width="64">价格</th>
          <th width="66">用户</th>
          <th width="106">时间</th>
          <th width="160">交易明细</th>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
   $sql=mysql_query(" select * from tb_rent where user='".$_SESSION['user']."'");
   $info=mysql_fetch_array($sql);
 	 do{
		 $sql3=mysql_query(" select * from house where no='".$info['no']."'");
         $info3=mysql_fetch_array($sql3);
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
          <td><?php echo $info['no'];?></td>
          <td><a href="../house.php?id=<?php echo $info3['id']?>" target="_blank"><?php echo $info['name'];?></a></td>
          <td><?php echo $info['type'];?></td>
          <td><?php echo $info['price'];?></td>
          <td><?php echo $info['user'];?></td>
          <td><?php echo $info['date'];?></td>
          <td><?php echo $info['word'];?></td>
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
