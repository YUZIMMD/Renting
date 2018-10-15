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
</style>
</head>
<body>
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h5">用户信息管理</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
<table border="0" cellspacing="1" class="table table-bordered">
  <tr bgcolor="#CCCCCC" >
    <td align="center" colspan="2">请选择查询条件：
      <select name="f2" class="form-contorl inline" id="f2">
        <option value="姓名"<?php if($result['no']=="编号"){?> selected <?php }?>>编号</option>
      </select>
      </td>
    <td colspan="4">
      <input name="key" type="text" id="key" size="50" class="form-control input-sm inline w-md"/>
      <input name="select" type="submit" class="btn btn-info btn-sm" value="查询" id="select"/></td>
      <td colspan="4"><a href="add_house.php"></a></td>
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
     mysql_connect("localhost","root","root");
     mysql_query("SET NAMES 'utf8'"); 
     include("Connections/conn.php");
     mysql_select_db('rent',$conn);
     $sql=mysql_query("select * from house where no='".$_POST['key']."' and status =0");
     $info1=mysql_fetch_array($sql); 
	 if($info1){
  ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
        <td><?php echo $info1['no'];?></td>
        <td colspan="3"><a href="../house1.php?id=<?php echo $info1['id'];?>"><?php echo $info1['name'];?></a></td>
        <td><?php echo $info1['price'];?></td>
        <td><?php echo $info1['type'];?></td>
        <td colspan="2"><a href="auditing.php?pass_id=<?php echo $info1['id'];?>$pass_no=<?php echo $info1['no']?>" class="text-info">审核通过</a></td>
        <td colspan="2"><a href="auditing.php?turn_id=<?php echo $info1['id'];?>&turn_no=<?php echo $info1['no'];?>" class="text-danger">驳回修改</a></td>
    </tr>
     <?php
	 }else{?>
	     <tr align="center"><td colspan="10">查询无结果</td></tr>
	 <?php
		 }
      };
     ?>
     <tr style="height:20px">
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="#CCCCCC">
        <th width="56" class="text-center">编号</th>
        <th width="140" colspan="3" class="text-center">名称</th>
        <th width="71" class="text-center">价格</th>
        <th width="69" class="text-center">类型</th>
        <th width="58" colspan="2" class="text-center">修改</th>
        <th width="48" colspan="2" class="text-center">删除</th>
    </tr>
      <?php
	  mysql_connect("localhost","root","root");
	  mysql_query("SET NAMES 'utf8'"); 
	  include("Connections/conn.php");
	  mysql_select_db('rent',$conn);
	  $sql=mysql_query(" select * from house where status=0");
	  $info=mysql_fetch_array($sql);
 	 do{
   ?>
     <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
       <td><?php echo $info['no'];?></td>
        <td colspan="3"><a href="../house1.php?id=<?php echo $info['id'];?>"><?php echo $info['name'];?></a></td>
        <td><?php echo $info['price'];?></td>
        <td><?php echo $info['type'];?></td>
        <td colspan="2"><a href="auditing.php?pass_id=<?php echo $info['id'];?>&pass_no=<?php echo $info['no']?>" class="text-info">审核通过</a></td>
        <td colspan="2"><a href="auditing.php?turn_id=<?php echo $info['id'];?>&turn_no=<?php echo $info['no'];?>" class="text-info">驳回修改</a></td>
    </tr>
     <?php
      }while($info=mysql_fetch_array($sql));
     ?>
  </table>
    </div>
  </div>
</div>
</body>
</html>
