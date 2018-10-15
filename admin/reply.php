<?php  
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
</head>

<body>
  <div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">修改预约信息</span></div>
        <div class="panel-body">
<form id="form1" name="form1" method="post" action="">
 <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_leaveword where id='".$_GET['reply']."'");
  $info=mysql_fetch_array($sql);
  ?>
  <p>
    <label for="reply"></label>
    </p>
  <p>
    <label for="user">留言者：</label>
    <input type="text" name="user" id="user" class="form-control w-xxl inline m-l-md" value="<?php echo $info['user'];?>" />
  </p>
  <p>
    <label for="word">留言信息</label>
    <textarea name="word" id="word" cols="60" rows="5" class="form-control w-xxl inline m-l-md"><?php echo $info['word'];?></textarea>
  </p>
  <p>
  
  <label for="reply">回复留言</label>
    <textarea name="reply" id="reply" cols="60" rows="8" class="form-control w-xxl inline m-l-md"></textarea>
</p>
  <p class="m-l-lg">
    <input type="submit" name="submit" id="submit" value="回复" class="btn btn-info btn-xs w-xs m-l-xxl"/>
    <input type="submit2" name="submit2" id="submit2" value="返回" class="btn btn-danger btn-xs w-xs m-l-md" onClick="history.back();"/>
  </p>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
	
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
       include("Connections/conn.php");
        if(isset($_POST['submit'])==true){
			$id=$_POST['reply'];//获取id号
			$date=date('Y-m-d',time());//获取当前日期
			$word=$_POST['word'];//获取留言内容
			$reply=$_POST['reply'];//获取回复内容
			$user=$_POST['user'];
			$query=mysql_query("delete from tb_leaveword where id='".$_GET['reply']."'");
$query=mysql_query("insert into tb_leaveword(id,user,word,reply,date)values('".$_POST['reply']."','".$_POST['user']."','".$_POST['word']."','".$_POST['reply']."','".date('Y-m-d',time())."')");
		if($query==true){
			echo "<script> alert('回复留言成功');window.location.href='admin_index.php?a=留言信息管理';</script>";
		}
	    else{
		     echo "<script>alert('回复留言失败!!');history.back()</script>";
	          }		  
}						 
?>