
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
<title>无标题文档</title>
</head>
<style>
.b-none{
	
	border:none;}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: #fff;
    opacity: 1;
}
.parsley-required,.parsley-errors-list{
	display:inline;}
.parsley-pattern{
	display:inline;}
</style>
<body>
<?php 
 mysql_connect("localhost","root","root");
 mysql_query("SET NAMES 'utf8'"); 
  include("../Connections/conn.php");
   mysql_select_db("rent",$conn);
	$query=mysql_query("select * from tb_booking where id='".$_GET['update']."'");
	$result=mysql_fetch_array($query);
?>
<div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">修改预约信息</span></div>
        <div class="panel-body">
          <form id="form1" name="form1" method="post" action="">
            <div class="form-group b-b">
              <label>房屋编号：</label>
              <input type="text" name="no" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['no'];?>" readonly>
            </div>
             <div class="form-group b-b">
              <label>房屋名称：</label>
              <input type="text" name="name" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['name'];?>" readonly />
            </div>
            <div class="form-group b-b">
              <label class="m-l-lg">类型：</label>
              <input type="text" name="type" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['type'];?>" readonly/>
            </div>
            <div class="form-group b-b">
              <label class="m-l-lg">价格:</label>
              <input type="text" name="price" class="form-control w-xxl inline m-l-xl b-none" value="<?php echo $result['price'];?>" readonly/>
            </div>
            <div class="form-group b-b">
              <label>房东姓名：</label>
              <input type="text" name="muser" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['muser'];?>" readonly/>
            </div>
             <div class="form-group">
              <label>用户姓名：</label>
              <input type="text" name="user" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['user'];?>" readonly/>
            </div>
             <div class="form-group b-b">
              <label class="m-l-lg">时间：</label>
              <input type="text" name="date" class="form-control w-xxl inline m-l-lg b-none" value="<?php echo $result['date'];?>" readonly/>
            </div>
             <div class="form-group">
              <label>房东电话号码：</label>
              <input type="text" name="mtel" class="form-control w-xxl inline" value="<?php echo $result['mtel'];?>"  placeholder="请填写电话号码" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"
                    data-parsley-pattern="/^(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[57])[0-9]{8}$|^0\d{2,3}\-\d{6,8}$/"
                    data-parsley-pattern-message="请输入正确的手机号码">
            </div>
            <div class="form-group">
              <label>用户预留电话号码：</label>
              <input type="text" name="tel" class="form-control w-xxl inline" value="<?php echo $result['tel'];?>" placeholder="请填写电话号码" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"
                    data-parsley-pattern="/^(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[57])[0-9]{8}$|^0\d{2,3}\-\d{6,8}$/"
                    data-parsley-pattern-message="请输入正确的手机号码">
            </div>
            <div class="form-group">
              <label>备注：</label>
              <input type="text" name="word" class="form-control w-xxl inline m-l-xxl" value="<?php echo $result['word'];?>" required
                    data-parsley-required-message="必填！"/>*</span>
            </div>
              <div class="m-l-xxl">
               <button type="Submit" class="btn btn-sm w-sm btn-primary m-l-lg" id="Submit" name="Submit">确定</button>
            </div>
          </form>
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
include("../Connections/conn.php");
if(isset($_POST['Submit'])==true){
$no=$_POST['no'];//编号	1
$name=$_POST['name'];//名字2
$price=$_POST['price'];//价格3
$type=$_POST['type'];//类型4
$user=$_SESSION['user'];
$date=$_POST['date'];
$word=$_POST['word'];
$query=mysql_query("update tb_booking set tel='".$_POST['tel']."',word='".$_POST['word']."',mtel='".$_POST['mtel']."' where id='".$_GET['update']."'");
		if($query==true){
			echo "<script> alert('修改成功');window.location.href='admin_index.php?a=房产预约登记管理';</script>";
		}
	    else{
		     echo "<script>alert('修改失败!!');history.back()</script>";
	          }
}
?>
  