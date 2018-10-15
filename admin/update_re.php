<?php session_start();
?>
<!DOCTYPE html><head>
<meta charset="utf-8">
<title>后台-租赁记录</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
</head>

<style>
 td{
	 height:40px;}
</style>
<body>
<?php 
 mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
  include("Connections/conn.php");
	$query=mysql_query("select * from tb_rent where id='".$_GET['update']."'");
	
	$result=mysql_fetch_array($query);
?>
<div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">修改租赁记录</span></div>
        <div class="panel-body">
<form name="form1" method="post">
      <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="173" align="center">编号：</td>
          <td width="427" height="39">
          <!-------------------------编号默认为不可修改--------------------->
            <input name="no" type="text" id="no" value="<?php echo $result['no'];?>" class="form-control w-xxl inline">
       </td>
        </tr>
        <tr>
          <td align="center">名称：</td>
          <td><input name="name" type="text" id="name" value="<?php echo $result['name'];?>" class="form-control w-xxl inline"></td>
        </tr>  
        <tr>
          <td align="center">类型：</td>
          <td><select name="type" class="form-control w-xxl inline" id="type">
            <option value="住宅" <?php if($result['type']=="住宅"){?> selected <?php }?>>住宅</option>
              <option value="商铺" <?php if($result['type']=="商铺"){?>  selected <?php }?>>商铺</option>
              <option value="写字楼" <?php if($result['type']=="写字楼"){?>  selected <?php }?>>写字楼</option>
              <option value="其他" <?php if($result['type']=="其他"){?>  selected <?php }?>>其他</option>
          </select></td>
        </tr>
        <tr>
          <td align="center">价格：</td>
          <td><input name="price" type="text" id="price" value="<?php echo $result['price'];?>" class="form-control w-xxl inline"></td>
        </tr>
        <tr>
          <td align="center">房东：</td>
          <td><input name="muser" type="text" id="muser" value="<?php echo $result['muser'];?>" size="20" class="form-control w-xxl inline">
                        </td>
        </tr>
        <tr>
          <td align="center">房东手机号：</td>
          <td><input name="mtel" type="text" id="mtel" value="<?php echo $result['mtel'];?>" size="30" class="form-control w-xxl inline"></td>
        </tr>
        <tr>
          <td align="center">用户：</td>
          <td><input name="user" type="text" id="user" value="<?php echo $result['user'];?>" size="20" class="form-control w-xxl inline">
                        </td>
        </tr>
        <tr>
          <td align="center">用户手机号：</td>
          <td><input name="tel" type="text" id="tel" value="<?php echo $result['tel'];?>" size="30" class="form-control w-xxl inline"></td>
        </tr>
        <tr>
          <td align="center">时间：</td>
          <td><input name="date" type="text" id="date" value="<?php echo $result['date'];?>" size="30" class="form-control w-xxl inline"></td>
        </tr>
        <tr>
          <td align="center">用户留言：</td>
          <td><textarea name="word" cols="50" rows="5" class="form-control w-xxl inline" id="word"><?php echo $result['word'];?></textarea></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td><input name="Submit" type="submit" class="btn btn-info" value="保存" onClick="return check(form1)">
&nbsp;
        <input name="Submit2" type="button" class="btn btn-default" value="返回" onClick="history.back()"></td>
        </tr>
      </table>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
<?php 
include("Connections/conn.php");
if(isset($_POST['Submit'])==true){
$no=$_POST['no'];	//编号
$name=$_POST['name'];//名称
$type=$_POST['type'];//类型
$price=$_POST['price'];//价格
$muser=$_POST['muser'];//房东
$mtel=$_POST['mtel'];//房东手机号
$user=$_POST['user'];//用户
$tel=$_POST['tel'];//用户手机号
$date=$_POST['date'];//日期
$word=$_POST['word'];//用户留言
$query=mysql_query("delete from tb_rent where no='".$_POST['no']."'");
$query=mysql_query("insert into tb_rent(no,name,type,price,muser,mtel,user,tel,date,word)values('".$_POST['no']."','".$_POST['name']."','".$_POST['type']."','".$_POST['price']."','".$_POST['muser']."','".$_POST['mtel']."','".$_POST['user']."','".$_POST['tel']."','".$_POST['date']."','".$_POST['word']."')");
		if($query==true){
			echo "<script> alert('修改成功');window.location.href='admin_index.php?a=房产租赁记录管理';</script>";
		}
	    else{
		     echo "<script>alert('修改失败!!');history.back()</script>";
	          }
}
?>
       
