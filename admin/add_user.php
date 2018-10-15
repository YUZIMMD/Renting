<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
<title>无标题文档</title>
</head>

<body>
<center>
 <p>
   <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from admin");
  $info=mysql_fetch_array($sql);
?>
 </p>
 <p>&nbsp;</p>
 <p>&nbsp; </p>
 <form id="form1" name="form1" method="post" action="">
  <center>
  <table width="1114" border="0">
  <tr>
      <td height="79">
        <table  class="ziti" width="1019" border="0" cellpadding="1" cellspacing="1" bordercolor="0000000">
  <tr>
    <td colspan="2" align="center" bgcolor="#001527">欢迎注册栗子旅游</td>
  </tr>
  <tr>
    <td width="207" height="26" align="center">姓名：</td>
    <td width="805" align="left"><input name="name" type="text" id="name" size="25" /></td>
  </tr>
   <tr>
     <td width="207" align="center">性别：</td>
     <td height="17" align="left"><input name="sex" type="radio" class="noborder" id="radiobutton" value="男" checked>
       <label for="radiobutton">男 </label>
       <label>
         <input name="sex" type="radio" class="noborder" value="女">
         女</label></td>
   </tr>
   <tr>
     <td align="center">登录密码：</td>
     <td height="17" align="left"><input name="pwd" type="text" id="pwd" /></td>
   </tr>
      <tr>
        <td align="center"> 职业：</td>
        <td align="left"><input name="vocation" type="text" id="vocation"></td>
      </tr>
      <tr>
        <td align="center">出生日期：</td>
        <td align="left"><input name="birthday" type="text" id="birthday"></td>
      </tr>
      <tr>
        <td align="center">有效证件：</td>
        <td align="left"><select name="paperType" class="wenbenkuang" id="paperType">
          <option value="身份证" selected>身份证</option>
          <option value="学生证">学生证</option>
          <option value="军官证">军官证</option>
          <option value="工作证">工作证</option>
          </select></td>
      </tr>
      <tr>
        <td align="center">证件号码：</td>
        <td align="left"><input name="paperNO" type="text" id="paperNO"> 
          * </td>
      </tr>
      <tr bgcolor="#001527">
        <td height="12" align="center" bgcolor="#FFFFFF">电话：</td>
        <td align="left" bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" size="20" />
          *请填入有效联系方式</td>
      </tr>
      <tr>
        <td align="center">E-mail：</td>
        <td align="left"><input name="email" type="text" id="email" size="50">
          <input name="operator" type="hidden" id="operator" value="<?php echo $_SESSION['user'];?>"></td>
      </tr>
  <tr bgcolor="#001527">
    <td align="center" bgcolor="#FFFFFF">备注：</td>
    <td align="left" bgcolor="#FFFFFF"><textarea name="remark" cols="30" id="remark"></textarea></td>
  </tr>
  <tr bgcolor="#001527">
    <td height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交" /></td>
  </tr>
</table>
        <p>&nbsp;</p>
        <p><div></div></p>
      <table width="1131" height="81" border="0">
          <tr>
            <td align="center"><span class="fl">&copy; Copyright by 在线租房系统 2015-10-25 </span></td>
          </tr>
  </table>
 </center>
</form>
</center>
</body>
</html>
<?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
if(isset($_POST['Submit'])==true and $_POST['name']==true){
	
$query=mysql_query("insert into tb_reader(name,sex,vocation,birthday,paperType,paperNO,tel,email,remark,pwd)values('".$_POST['name']."','".$_POST['sex']."','".$_POST['vocation']."','".$_POST['birthday']."','".$_POST['paperType']."','".$_POST['paperNO']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['remark']."','".$_POST['pwd']."')");
$query=mysql_query("insert into admin(user,pwd)values('".$_POST['name']."','".$_POST['pwd']."')");
		if($query==true){
			echo "<script> alert('注册成功');window.location.href='admin_index.php';</script>";
		}
	    else{
		     echo "<script>alert('添加失败!!');history.back()</script>";
	          }		  
}
?>