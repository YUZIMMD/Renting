<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <td width="173" align="center">编号：</td>
      <td width="427" height="39"><input name="no" type="text" id="no" />
        *
   </td>
    </tr>
    <tr>
      <td align="center">名称：</td>
      <td><input name="name" type="text" id="name" /></td>
    </tr>
    <tr>
      <td align="center">类型：</td>
      <td><select name="type" class="wenbenkuang" id="type">
        <option value="住宅">住宅</option>
        <option value="商铺">商铺</option>
        <option value="写字楼">写字楼</option>
        <option value="其他">其他</option>
      </select></td>
    </tr>
    <tr>
      <td align="center">价格：</td>
      <td><input name="price" type="text" id="price" /></td>
    </tr>
    <tr>
      <td align="center">房东：</td>
      <td><input name="muser" type="text" id="muser" size="20" /></td>
    </tr>
    <tr>
      <td align="center">房东手机号：</td>
      <td><input name="mtel" type="text" id="mtel" size="30" /></td>
    </tr>
    <tr>
      <td align="center">用户：</td>
      <td><input name="user" type="text" id="user" size="20" /></td>
    </tr>
    <tr>
      <td align="center">用户手机号：</td>
      <td><input name="tel" type="text" id="tel" size="30" /></td>
    </tr>
    <tr>
      <td align="center">时间：</td>
      <td><input name="date" type="text" id="date" size="30" /></td>
    </tr>
    <tr>
      <td align="center">用户留言：</td>
      <td><textarea name="word" cols="50" rows="5" class="wenbenkuang" id="word"></textarea></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td><input name="Submit" type="submit" class="btn_grey" value="保存" onclick="return check(form1)" />
        &nbsp;
        <input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back()" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
if(isset($_POST['Submit'])==true){
$query=mysql_query("insert into tb_rent(no,name,type,price,muser,mtel,user,tel,date,word)values('".$_POST['no']."','".$_POST['name']."','".$_POST['type']."','".$_POST['price']."','".$_POST['muser']."','".$_POST['mtel']."','".$_POST['user']."','".$_POST['tel']."','".$_POST['date']."','".$_POST['word']."')");
		if($query==true){
			echo "<script> alert('添加租赁信息成功');window.location.href='admin_index.php?a=房产租赁记录管理';</script>";
		}
	    else{
		     echo "<script>alert('添加失败!!');history.back()</script>";
	          }		  
}
							
?>