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
    <form id="form1" name="form1" method="post" action="">
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
      <td colspan="4"><a href="add_house.php">添加房源</a></td>
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
     mysql_connect("localhost","root","root");
     mysql_query("SET NAMES 'utf8'"); 
     include("Connections/conn.php");
     mysql_select_db('rent',$conn);
     $sql=mysql_query("select * from house where no='".$_POST['key']."' and status =2");
     $info1=mysql_fetch_array($sql); 
	 if($info1){
  ?>
    <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
        <td><?php echo $info1['no'];?></td>
        <td><?php echo $info1['name'];?></td>
        <td><?php echo $info1['price'];?></td>
        <td><?php echo $info1['type'];?></td>
        <td><?php echo $info1['mno'];?></td>
        <td><?php echo $info1['img'];?></td>
        <td><a href="update_house.php?update=<?php echo $info1['id'];?>&exid=3" class="text-info">修改</a></td>
        <td><a href="delete_house.php?delete=<?php echo $info1['id'];?>&no=<?php echo $info1['no'];?>" class="text-danger">删除</a></td>
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
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>所有在线房源信息</label></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="#CCCCCC">
        <th width="56">编号</th>
        <th width="140">名称</th>
        <th width="71">价格</th>
        <th width="69">类型</th>
        <th width="74">房东号</th>
        <th width="81">图片</th>
        <th width="58">修改</th>
        <th width="48">删除</th>
    </tr>
      <?php
	  mysql_connect("localhost","root","root");
	  mysql_query("SET NAMES 'utf8'"); 
	  include("Connections/conn.php");
	  mysql_select_db('rent',$conn);
	  $sql=mysql_query(" select * from house where status=2");
	  $info=mysql_fetch_array($sql);
 	 do{
   ?>
    <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#9999CC'"onMouseOut="this.bgColor='#FFFFFF'">
       <td><?php echo $info['no'];?></td>
        <td><?php echo $info['name'];?></td>
        <td><?php echo $info['price'];?></td>
        <td><?php echo $info['type'];?></td>
        <td><?php echo $info['mno'];?></td>
        <td><?php echo $info['img'];?></td>
        <td><a href="update_house.php?update=<?php echo $info['id'];?>&exid=3" class="text-info">修改</a></td>
        <td><a href="delete_house.php?delete=<?php echo $info['id'];?>&no=<?php echo $info['no'];?>" class="text-danger">删除</a></td>
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
