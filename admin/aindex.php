<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理中心-账号管理</title>
<style>
   body {
	font-size: 12px;
	line-height: 24px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<div class="container">
<div class="row">
      <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" style="height: 42px;">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">已注册全部管理员</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">添加管理员</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" id="update_pwd">修改密码</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
       <div class="col-sm-8">
        <table class="table table-striped table-bordered table-hover">
        <caption class="text-center">已注册所有管理员</caption>
        <tr>
            <th class="text-center">账号名称</th>
            <th class="text-center">操作</th>
        </tr>
         <tr>
                <?php
                                      mysql_connect("localhost","root","root");
                                      mysql_query("SET NAMES 'utf8'"); 
         include("Connections/conn.php");
         mysql_select_db("rent",$conn);
          $sql=mysql_query("select * from manager");
          $info=mysql_fetch_array($sql);
           do{
        ?>
              <td align="center" bgcolor="#FFFFFF"><?php  echo $info['name'];?></td>
              <td align="center" bgcolor="#FFFFFF"><a href="delete_aindex.php?delete=<?php echo $info['id'];?>" class="text-danger">删除</a></td>
            </tr>
             <?php
        }while($info=mysql_fetch_array($sql));
        ?>
        </table>
</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
       <div class="col-sm-8 m-t-md">
        <table width="327" border="0" cellspacing="10" class="table">
        <tr>
          <td align="center">管理员：
            <input type="text" name="name2" id="name2" class="form-control inline w-md" /></td>
        </tr>
        <tr>
          <td align="center">密码：
            <input type="text" name="pwd2" id="pwd2" class="form-control inline w-md m-l-sm" /></td>
        </tr>
        <tr>
          <td align="center"><input type="submit" name="submit2" id="submit2" value="确定"  class="btn btn-info"/></td>
        </tr>
      </table>
       </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <div class="col-sm-8 m-t-md">
       <table width="377" border="0" cellspacing="10" class="table">
        <tr>
          <td width="355" align="center">管理员：
            <label for="name"></label>
            <input type="text" name="name" id="name" class="form-control inline w-md" /></td>
        </tr>
        <tr>
          <td align="center"><p>原密码：
            <input type="text" name="pwd" id="pwd" class="form-control inline w-md" />
          </p></td>
        </tr>
        <tr>
          <td align="center">新密码：
            <input type="text" name="npwd" id="npwd" class="form-control inline w-md" /></td>
        </tr>
        <tr>
          <td align="center"><input type="submit" name="submit" id="submit" value="确定" class="btn btn-info" /></td>
        </tr>
      </table>
      </div>
    </div>
  </div>
   
</div>
</div>
</form>
</body>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
</html>
<?php
mysql_connect("localhost","root","root");
mysql_query("SET NAMES 'utf8'"); 
include("Connections/conn.php");
if(isset($_POST['submit2'])==true){
$query=mysql_query("insert into manager(name,pwd)values('".$_POST['name2']."','".$_POST['pwd2']."')");
		if($query==true){
			echo "<script> alert('添加管理员成功');window.location.href='admin_index.php';</script>";
		}
	    else{
		     echo "<script>alert('添加失败!!');history.back()</script>";
	          }		  
}
							 
if(isset($_POST['submit'])==true){
	 $sql_name=mysql_query(" select * from manager where name='".$_POST['name']."'");
	 $info_name=mysql_fetch_array($sql_name);
	 if(!$info_name){
		 echo "<script> alert('该用户名不存在，请确认');</script>";
		 }else{
			 $sql_pwd=mysql_query(" select * from manager where name='".$_POST['name']."'");
	          $info_pwd=mysql_fetch_array($sql_pwd);
			  if($info_pwd['pwd']==$_POST['pwd']){
				   $query=mysql_query("update manager set pwd='".$_POST['npwd']."' where name='".$_POST['name']."'");
			if($query==true){
				echo "<script> alert('密码修改成功');</script>";
			}
			else{
				 echo "<script>alert('密码修改失败!!');</script>";
				  }	
				  }else{
					  echo "<script>alert('原密码错误!!');</script>";
					  }
			
			 }	  
}
?>
