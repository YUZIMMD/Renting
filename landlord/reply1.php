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
<style>
   .b-none{
	   border:none;}
</style>
<body>
 <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("../Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_word where id='".$_GET['reply']."'");
  $info=mysql_fetch_array($sql);
  ?>
<div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">回复留言</span></div>
        <div class="panel-body">
        <form id="form1" name="form1" method="post" action="">
        <div class="form-group">
              <label>留言者：</label>
              <input type="text" name="user" class="form-control w-xxl inline m-l-xxl b-none" value="<?php echo $info['user'];?>" readonly style="background-color:#fff;">
            </div>
             <div class="form-group ">
              <label>留言信息：</label>
              <textarea type="text" name="question" class="form-control w-xxl inline m-l-lg" readonly><?php echo $info['question'];?></textarea>
            </div>
             <div class="form-group ">
              <label>回复留言：</label>
              <textarea type="text" name="reply" class="form-control w-xxl inline m-l-lg m-t-md" style="height:100px;"></textarea>
            </div>
            <div class="m-t-md">
             <input type="submit" name="submit" id="submit" value="回复" class="btn btn-info w-xs"  style="margin-left:200px"/>
              </form>
            </div>
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
</html>
<?php
	
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
       include("../Connections/conn.php");
        if(isset($_POST['submit'])==true){
			$id=$_POST['reply'];//获取id号
			$question=$_POST['question'];//获取留言问题
			$reply=$_POST['reply'];//获取回复内容
			$user=$_POST['user'];//用户名
$query=mysql_query("update tb_word set user='".$_POST['user']."',question='".$_POST['question']."',reply='".$_POST['reply']."'where id='".$_GET['reply']."'");
		if($query==true){
			echo "<script> alert('回复留言成功');window.location.href='index.php?a=留言';</script>";
		}
	    else{
		     echo "<script>alert('回复留言失败!!');history.back()</script>";
	          }		  
}						 
?>