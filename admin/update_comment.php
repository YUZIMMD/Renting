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
        <div class="panel-heading"><span style="color: #666">修改房屋评论信息</span></div>
        <div class="panel-body">
<form id="form1" name="form1" method="post" action="">
 <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_word where id='".$_GET['update']."'");
  $info=mysql_fetch_array($sql);
  ?>
   <div class="form-group">
       <label>编号</label>
       <input type="text" name="no" class="form-control w-xxl inline m-l-xxl" placeholder="请输入房屋编号" required data-parsley-required-message="必填！" value="<?php echo $info['no']?>"><span class="text-danger">*</span>
   </div>
   <div class="form-group">
       <label>用户姓名</label>
       <input type="text" name="user" class="form-control w-xxl inline m-l-md" placeholder="请输入用户名" required data-parsley-required-message="必填！" value="<?php echo $info['user']?>"><span class="text-danger">*</span>
   </div>
   <div class="form-group">
       <label>用户评论</label>
       <input type="text" name="question" class="form-control w-xxl inline m-l-md" placeholder="请输入用户评论" required data-parsley-required-message="必填！" value="<?php echo $info['question']?>"><span class="text-danger">*</span>
   </div>
   <div class="form-group">
       <label>房东名称</label>
       <input type="text" name="muser" class="form-control w-xxl inline m-l-md" placeholder="请输入房东名称" required data-parsley-required-message="必填！" value="<?php echo $info['muser']?>"><span class="text-danger">*</span>
   </div>
   <div class="form-group">
       <label>房东回复</label>
       <input type="text" name="reply" class="form-control w-xxl inline m-l-md" placeholder="请输入房东回复" required data-parsley-required-message="必填！" value="<?php echo $info['reply']?>"><span class="text-danger">*</span>
   </div>
   <div class="form-group">
       <label>评论时间</label>
       <input type="text" name="date" class="form-control w-xxl inline m-l-md" placeholder="请输入评论时间" required data-parsley-required-message="必填！" data-parsley-pattern="/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/"
                    data-parsley-pattern-message="请输入正确的格式" value="<?php echo $info['date']?>"><span class="text-danger">*</span>
   </div>
   <div class="m-l-xxl">
     <input type="submit" name="submit" class="btn btn-info w-xs btn-xs m-l-lg" value="修改"/>
     <input class="btn btn-default w-xs btn-xs m-l-md" value="返回" onClick="history.back();"/>
   </div>
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
$('#upload_form').parsley();

</script>
</html>
<?php
	
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
       include("Connections/conn.php");
        if(isset($_POST['submit'])==true){
$query=mysql_query("update tb_word set no = '".$_POST['no']."',user='".$_POST['user']."',question='".$_POST['question']."',muser='".$_POST['muser']."',reply='".$_POST['reply']."',date='".$_POST['date']."'where id='".$_GET['update']."'");
		if($query==true){
			echo "<script> alert('修改评论成功');window.location.href='admin_index.php?a=房屋评论管理';</script>";
		}
	    else{
		     echo "<script>alert('修改评论失败!!');history.back()</script>";
	          }		  
}						 
?>