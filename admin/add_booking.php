<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>后台-添加预约记录</title>
 <link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
</head>
<style>
.parsley-required,.parsley-errors-list{
	display:inline;}
.parsley-pattern{
	display:inline;}
	td{
		height:50px;}
</style>
<body>
 <div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">修改预约信息</span></div>
        <div class="panel-body">
<form id="form1" name="form1" method="post" action="">
  <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <td width="173" align="center">编号：</td>
      <td width="427" height="39"><input name="no" type="text" id="no" class="form-control w-xxl inline" placeholder="请输入房东编号" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"/>
   </td>
    </tr>
    <tr>
      <td align="center">名称：</td>
      <td><input name="name" type="text" id="name" class="form-control w-xxl inline" placeholder="请输入房屋名称" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"/></td>
    </tr>
    <tr>
      <td align="center">类型：</td>
      <td><select name="type" id="type" class="form-control w-xxl inline">
        <option value="住宅">住宅</option>
        <option value="商铺">商铺</option>
        <option value="写字楼">写字楼</option>
        <option value="其他">其他</option>
      </select></td>
    </tr>
    <tr>
      <td align="center">价格：</td>
      <td><input name="price" type="text" id="price" class="form-control w-xxl inline" placeholder="请输入房屋价格" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！" data-parsley-pattern="/^[0-9]$/"
                    data-parsley-pattern-message="请输入正确的格式"/></td>
    </tr>
    <tr>
      <td align="center">房东：</td>
      <td><input name="muser" type="text" id="muser" size="20" class="form-control w-xxl inline" placeholder="请输入房东姓名" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！" /></td>
    </tr>
    <tr>
      <td align="center">房东手机号：</td>
      <td><input name="mtel" type="text" id="mtel" size="30" class="form-control w-xxl inline" placeholder="请输入房东手机号" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"  data-parsley-pattern="/^(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[57])[0-9]{8}$|^0\d{2,3}\-\d{6,8}$/"
                    data-parsley-pattern-message="请输入正确的手机号码"/></td>
    </tr>
    <tr>
      <td align="center">用户：</td>
      <td><input name="user" type="text" id="user" size="20" class="form-control w-xxl inline" placeholder="请输入用户姓名" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！" /></td>
    </tr>
    <tr>
      <td align="center">用户手机号：</td>
      <td><input name="tel" type="text" id="tel" size="30" class="form-control w-xxl inline" placeholder="请输入用户手机号" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"  data-parsley-pattern="/^(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[57])[0-9]{8}$|^0\d{2,3}\-\d{6,8}$/"
                    data-parsley-pattern-message="请输入正确的手机号码" /></td>
    </tr>
    <tr>
      <td align="center">时间：</td>
      <td><input name="date" type="text" id="date" size="30" class="form-control w-xxl inline" placeholder="格式：1995-06-01" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！" data-parsley-pattern="/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/"
                    data-parsley-pattern-message="请输入正确的格式" /></td>
    </tr>
    <tr>
      <td align="center">用户留言：</td>
      <td><textarea name="word" cols="50" rows="5" id="word" class="form-control w-xxl inline" placeholder="请填写留言" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"></textarea></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td><input name="submit" type="submit" class="btn btn-info" value="保存" />
        &nbsp;
        <input name="Submit2" type="button" class="btn btn-default" value="返回" onclick="history.back()" /></td>
    </tr>
  </table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
 <script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
 <script type="text/javascript" src="../js/parsley/parsley.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="../js/layer/layer.js"></script>
<script>
  $('#form1').parsley();
</script>
</html>
<?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
if(isset($_POST['submit'])==true){
$query=mysql_query("insert into tb_booking(no,name,type,price,muser,mtel,user,tel,date,word)values('".$_POST['no']."','".$_POST['name']."','".$_POST['type']."','".$_POST['price']."','".$_POST['muser']."','".$_POST['mtel']."','".$_POST['user']."','".$_POST['tel']."','".$_POST['date']."','".$_POST['word']."')");
		if($query==true){
			echo "<script> alert('添加预约记录成功');window.location.href='admin_index.php?a=房产预约登记管理';</script>";
		}
	    else{
		     echo "<script>alert('添加失败!!');history.back()</script>";
	          }		  
}
							
?>