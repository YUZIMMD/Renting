
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
</head>

<body>
<center>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="600" border="0" cellspacing="1">
  <?php 
 mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
  include("Connections/conn.php");
	$query=mysql_query("select * from tb_index where id='".$_GET['update']."'");
	$result=mysql_fetch_array($query);
?>
    <tr>
      <td height="50" align="center" bgcolor="#FF9966">原来房子编号:
        <input name="no" type="text" id="no" value="<?php echo $result['no'];?>" readonly/></td>
    </tr>
    <tr>
      <td height="50" align="center" bgcolor="#FF9966">替换房子编号：
        <label for="newno"></label>
        <input type="text" name="newno" id="newno" /></td>
    </tr>
    <tr>
      <td height="50" align="center" bgcolor="#FF9966"><input type="submit" name="tihuan" id="tihuan" value="替换" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</center>
</body>
</html>
<?php 
include("Connections/conn.php");
if(isset($_POST['tihuan'])==true){
	$query1=mysql_query("select * from house where no='".$_POST['newno']."'");
	$result1=mysql_fetch_array($query1);
	$ino=$result1['id'];
	if($result1['rent']){
		 echo "<script>alert('该房屋已出租!!');</script>";
		}else{
			$query2=mysql_query("update tb_index set ino='".$ino."',no='".$_POST['newno']."'where id='".$_GET['update']."'");
	
	if($query2==true){
			echo "<script> alert('替换成功');window.location.href='admin_index.php?a=首页管理';</script>";
		}
	    else{
		     echo "<script>alert('替换失败!!');history.back()</script>";
	          }
			}
	}
	?>