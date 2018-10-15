<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>房东信息管理</title>
<style>
  select{
	width: 70px;
    height: 30px;
    border: 1px solid #ccc;
	}
	td,th{
		text-align:center}
</style>
</head>
<body>
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h5">房东信息管理</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="FlotChartDemoCtrl">
    <div class="row">
<form id="form1" name="form1" method="post" action="">
<table cellspacing="1" class="table table-bordered">
  <tr bgcolor="#CCCCCC" >
    <td align="center" colspan="2" class="text-right">请选择查询条件：
      <select name="f2" class="form-contorl inline" id="f2">
        <option value="姓名"<?php if($result['name']=="姓名"){?> selected <?php }?>>姓名</option>
      </select>
      </td>
    <td colspan="4" class="text-left">
      <input name="key" type="text" id="key" size="50" class="form-control input-sm inline w-md"/>
      <input name="select" type="submit" class="btn btn-info btn-sm" value="查询" id="select"/></td>
      <td colspan="4"><a href="../mzhuce.html">添加新用户</a></td>
  </tr>
    
    <?php 
  if(isset($_POST['select'])==true){
     mysql_connect("localhost","root","root");
     mysql_query("SET NAMES 'utf8'"); 
     include("Connections/conn.php");
     mysql_select_db('rent',$conn);
     $sql=mysql_query(" select * from tb_mzhuce where name='".$_POST['key']."'");
     $info1=mysql_fetch_array($sql); 
	 if($info1){
  ?>
   <tr align="center" bgcolor="#FFFFFF">
      <td width="81"><?php echo $info1['name'];?></td>
      <td width="105"><?php echo $info1['birthday'];?></td>
      <td width="65"><?php echo $info1['paperType'];?></td>
      <td width="107"><?php echo $info1['paperNO'];?></td>
      <td width="89"><?php echo $info1['tel'];?></td>
      <td width="100"><?php echo $info1['email'];?></td>
      <td width="37"><?php echo $info1['remark'];?></td>
      <td width="56"><?php echo $info1['address'];?></td>
      <td width="83"><a href="update_user.php?update=<?php echo $info1['id'];?>" class="text-info"> 修改</a></td>
      <td width="69"><a href="delete_user.php?delete=<?php echo $info1['name'];?>" class="text-danger"> 删除</a></td>
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
      <td align="center" bgcolor="#FFFFFF" style="border-radius:10px" colspan="2"><label>所有房东信息</label></td>
    </tr>
      <tr style="height:10px;"></tr>
    <tr align="center" bgcolor="#CCCCCC" >
      <th width="67">姓名</td>
      <th width="91">出生日期</td>
      <th width="100">证件类型</td>
      <th width="77">证件号码</td>
      <th width="90">电话</td>
      <th width="89">邮箱</td>
      <th width="49">备注</td>
      <th width="69">地址</td>
      <th width="79">修改</td>
      <th width="81">删除</td>
    </tr>
    <?php
	 mysql_connect("localhost","root","root");
	 mysql_query("SET NAMES 'utf8'");  
	 include("Connections/conn.php");
	 mysql_select_db("rent",$conn);
	  $sql=mysql_query("select * from tb_mzhuce");
	  $info=mysql_fetch_array($sql);
	   do{
?>
    <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FAF7F7'"onMouseOut="this.bgColor='#FFFFFF'">
      <td width="81"><?php echo $info['name'];?></td>
      <td width="91"><?php echo $info['birthday'];?></td>
      <td width="100"><?php echo $info['paperType'];?></td>
      <td width="77"><?php echo $info['paperNO'];?></td>
      <td width="90"><?php echo $info['tel'];?></td>
      <td width="89"><?php echo $info['email'];?></td>
      <td width="49"><?php echo $info['remark'];?></td>
      <td width="69"><?php echo $info['address']?></td>
      <td width="79"><a href="update_user2.php?update=<?php echo $info['id'];?>" class="text-info"> 修改</a></td>
      <td width="81"><a href="delete_user2.php?delete=<?php echo $info['name'];?>" class="text-danger">删除</a></td>
    </tr>
         <?php
      }while($info=mysql_fetch_array($sql));
     ?>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</div>
</div>
</body>
</html>