<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
<link rel="stylesheet" href="../js/parsley/parsley.css">
<title>审核</title>
</head>

<body>
 <?php
	if($_GET['turn_id']==true){	
		?>
<div class="container">
  <div class="row">
  <div class="col-sm-8 col-sm-offset-2">
  <div class="panel panel-info m-t-lg">
  <div class="panel-heading">
    <h3 class="panel-title">修改房源</h3>
  </div>
  <div class="panel-body">
        <form id="form1" name="form1" method="post" action="">
        <div class="form-group">
            <label>驳回原因：</label>
            <textarea class="form-control" name="result"></textarea>
        </div>
        <div class="form-group">
            <label>驳回修改建议</label>
            <textarea class="form-control" name="advice"></textarea>
        </div>
        <div class="m-l-xxl m-t-lg">
                <input name="Submit" type="submit" class="btn btn-info m-l-md btn-xs w-xs" value="驳回">
&nbsp;
        <input name="Submit2" type="button" class="btn btn-default btn-xs w-xs" value="返回" onClick="history.back()">
            </div>
    
</form>
        <?php
	}?>
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
  include("Connections/conn.php");
if(isset($_POST['Submit'])==true){
	$query=mysql_query("update house set status=2 where id = '".$_GET['turn_id']."'");
	$query1=mysql_query("update tb_matters set result='".$_POST['result']."',advice='".$_POST['advice']."' where no = '".$_GET['turn_no']."'");
	if($query==true){
			echo "<script> alert('驳回成功');window.location.href='admin_index.php?a=待处理事项';</script>";
		}
	    else{
		     echo "<script>alert('修改失败!!');history.back()</script>";
	          }
	}
	if($_GET['pass_id']){
		$query=mysql_query("update house set status=1 where id = '".$_GET['pass_id']."'");
		$query1=mysql_query("update tb_matters set result='已通过',advice='已通过' where no = '".$_GET['pass_no']."'");
		if($query==true){
			echo "<script> alert('已通过');window.location.href='admin_index.php?a=待处理事项';</script>";
		}
	    else{
		     echo "<script>alert('失败，请重新操作!!');history.back()</script>";
	          }
		}
?>
