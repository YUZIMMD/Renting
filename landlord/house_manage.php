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
    <td colspan="4">
      <input name="key" type="text" id="key" size="50" class="form-control input-sm inline w-md"/>
      <input name="select" type="submit" class="btn btn-info btn-sm" value="查询" id="select"/></td>
      <td colspan="4"></td>
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
     mysql_connect("localhost","root","root");
	 mysql_query("SET NAMES 'utf8'"); 
     include("../Connections/conn.php");
	 $sq=mysql_query(" select * from tb_mzhuce where name='".$_SESSION['muser']."'");
	 $in=mysql_fetch_array($sq);
	 $mno=$in['id'];
	 mysql_select_db('rent',$conn);
     $sql=mysql_query(" select * from house where no='".$_POST['key']."'and mno=$mno");
	 $info1=mysql_fetch_array($sql);
	 if($info1){
  ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#9999CC'"onMouseOut="this.bgColor='#FFFFFF'">
         <td><?php echo $info1['no'];?></td>
          <td><a href="../house1.php?id=<?php echo $info1['id']?>" target="_blank"><?php echo $info1['name'];?></a></td>
          <td><?php echo $info1['price'];?></td>
          <td><?php echo $info1['area'];?></td>
          <td><?php echo $info1['struct'];?></td>
          <td><?php echo $info1['type'];?></td>
          <td><a href="update_house_manage.php?update=<?php echo $info1['id'];?>" class="text-info">修改</a></td>
          <td><a href="delete_house_delete.php?delete=<?php echo $info1['id'];?>&no=<?php echo $info1['no'];?>" class="text-danger">删除</a></td>
    </tr>
     <?php
	 }else{?>
	     <tr align="center"><td colspan="10">亲爱的，您没有此编号的房源，请确认后再进行查询哦</td></tr>
	 <?php
		 }
      };
     ?>
     <tr style="height:20px"></tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>在线房产列表</label></td>
       <td colspan="3"><a data-toggle="modal" data-target="#myModal"><span class="text-danger">审核未通过房源列表</span></a></td>
    </tr>
    <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="">
          <td width="56" height="16" align="center">编号</td>
          <td width="171" align="center">名称</td>
          <td width="66" align="center">价格</td>
          <td width="93" align="center">面积</td>
          <td width="81" align="center">结构</td>
          <td width="123" align="center">类型</td>
          <td width="80" align="center">修改</td>
          <td width="78" align="center">删除</td>
    </tr>
      <?php
  mysql_connect("localhost","root","root");
  mysql_query("SET NAMES 'utf8'"); 
  include("../Connections/conn.php");
   mysql_select_db('rent',$conn);
   $sq=mysql_query(" select * from tb_mzhuce where name='".$_SESSION['muser']."'");
   $in=mysql_fetch_array($sq);
   $mno=$in['id'];
   $sql=mysql_query(" select * from house where mno=$mno");
   $info=mysql_fetch_array($sql);
 	 do{
   ?>
   <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
          <td><?php echo $info['no'];?></td>
          <td><a href="../house1.php?id=<?php echo $info['id']?>" target="_blank"><?php echo $info['name'];?></a></td>
          <td><?php echo $info['price'];?></td>
          <td><?php echo $info['area'];?></td>
          <td><?php echo $info['struct'];?></td>
          <td><?php echo $info['type'];?></td>
          <td><a href="update_house_manage.php?update=<?php echo $info['id'];?>" class="text-info">修改</a></td>
         <td><a href="delete_house_delete.php?delete=<?php echo $info['id'];?>&no=<?php echo $info['no'];?>" class="text-danger">删除</a></td>
    </tr>
     <?php
      }while($info=mysql_fetch_array($sql));
     ?>
  </table>
</form>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg" style="margin-left:-20%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">审核未通过列表</h4>
      </div>
      <div class="modal-body">
       <table class="table">
          <tr align="center" bgcolor="">
          <td width="56" height="16" align="center">编号</td>
          <td width="171" align="center">名称</td>
          <td width="66" align="center">价格</td>
          <td>审核结果</td>
          <td>未通过原因</td>
          <td>修改建议</td>
          <td width="80" align="center">修改</td>
          <td width="78" align="center">删除</td>
    </tr>
    <?php  
	  $sql2=mysql_query(" select * from house where mno=$mno and status = 2");
	  $info2=mysql_fetch_array($sql2);
	  if($info2){
		do{
			 $sql3=mysql_query(" select * from tb_matters where no = '".$info2['no']."'");
			  $info3=mysql_fetch_array($sql3);
				  
	?>
    <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
          <td><?php echo $info2['no'];?></td>
          <td><a href="../house1.php?id=<?php echo $info2['id']?>"><?php echo $info2['name'];?></a></td>
          <td><?php echo $info2['price'];?></td>
          <td><a href="">驳回</a></td>
          <td><?php echo $info3['result']?></td>
          <td><?php echo $info3['advice']?></td>
          <td><a href="update_house_manage.php?update=<?php echo $info2['id'];?>" class="text-info">修改</a></td>
          <td><a href="delete_house_delete.php?delete=<?php echo $info2['id'];?>&no=<?php echo $info2['no'];?>" class="text-danger">删除</a></td>
    </tr>
     <?php
      }while($info2=mysql_fetch_array($sql2));
	  }
     ?>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
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
