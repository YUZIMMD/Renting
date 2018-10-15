<?php session_start();
?>
<!DOCTYPE html><head>
<meta charset="utf-8">
<title>后台-用户信息管理</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
</head>

<style>
.parsley-required,.parsley-errors-list{
	display:inline;}
.parsley-pattern{
	display:inline;}
</style>
<body>
<?php 
 mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
  include("Connections/conn.php");
  mysql_select_db('rent',$conn);
	$query=mysql_query("select * from tb_mzhuce where id='".$_GET['update']."'");
	$result=mysql_fetch_array($query);
?>
<div class="container">
  <div class="row m-t-lg">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="panel panel-info">
        <div class="panel-heading"><span style="color: #666">房东信息管理</span></div>
        <div class="panel-body">
        <form name="form1" method="post" id="upload_form" action="" enctype='multipart/form-data'>
        <div class="form-group">
              <label>用户名</label>
              <input type="text" name="name" class="form-control w-xxl inline m-l-md" readonly value="<?php echo $result['name'];?>"><span class="text-danger">*</span>
            </div>
             <div class="form-group">
              <label>密码</label>
              <input type="password" name="pwd" class="form-control w-xxl inline m-l-lg" readonly value="<?php echo $result['pwd'];?>"><span class="text-danger">*</span><span class="text-sm text-defalut">密码为数字，字母，汉字等</span>
            </div>
             <div class="form-group">
              <label>性别</label>
              <div class="m-l-lg inline">
                 <input name="sex" type="radio" value="男" <?php if($result['sex']=="男"){?> checked <?php }?>>男&nbsp;&nbsp;&nbsp;&nbsp;
                 <input name="sex" type="radio" value="女" <?php if($result['sex']=="女"){?> checked <?php }?>>女
              </div>
            </div>
            <div class="form-group">
              <label>职业</label>
              <input type="text" name="vocation" class="form-control w-xxl inline m-l-lg" placeholder="请填写您的职业" required data-trigger="change" data-parsley-required-message="必填！" required="required" value="<?php echo $result['vocation'];?>"><span class="text-danger">*</span>
            </div>
            <div class="form-group">
              <label>生日</label>
              <input type="birthday" name="birthday" class="form-control w-xxl inline m-l-lg" placeholder="请填写您的生日" required data-trigger="change" data-parsley-required-message="必填！" required="required" data-parsley-pattern="/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/"
                    data-parsley-pattern-message="请输入正确的格式" value="<?php echo $result['birthday'];?>"/><span class="text-danger">*</span><span class="text-sm text-defalut">例如：1995-06-01</span>
            </div>
            <div class="form-group">
              <label>证件类型</label>
              <select name="paperType" class="form-control inline w-xxl m-l-xs" id="paperType">
              <option value="身份证" <?php if($result['paperType']=="身份证"){?> selected <?php }?>>身份证</option>
              <option value="学生证" <?php if($result['paperType']=="学生证"){?> selected <?php }?>>学生证</option>
              <option value="军官证" <?php if($result['paperType']=="军官证"){?> selected <?php }?>>军官证</option>
              <option value="工作证" <?php if($result['paperType']=="工作证"){?> selected <?php }?>>工作证</option>
              </select>
            </div>
            <div class="form-group">
              <label>证件号码</label>
              <input type="text" name="paperNO" class="form-control w-xxl inline m-l-xs" placeholder="请填写您的证件号码"  data-trigger="change" data-parsley-required-message="必填！" required value="<?php echo $result['paperNO'];?>"><span class="text-danger">*</span><span class="text-sm text-defalut">请填写真实信息</span>
            </div>
            <div class="form-group">
              <label>电话号码</label>
              <input type="text" name="tel" class="form-control w-xxl inline m-l-xs" placeholder="请填写电话号码" data-trigger="change"
                    required="required"
                    data-parsley-required-message="必填！"
                    data-parsley-pattern="/^(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[57])[0-9]{8}$|^0\d{2,3}\-\d{6,8}$/"
                    data-parsley-pattern-message="请输入正确的手机号码" value="<?php echo $result['tel'];?>"><span class="text-danger">*</span>
            <span class="text-sm text-defalut">请填写真实信息</span>
            </div>
            <div class="form-group">
              <label>邮箱</label>
              <input type="text" name="email" class="form-control w-xxl inline m-l-lg" placeholder="请填写邮箱" required     data-parsley-trigger="change" data-parsley-required-message="必填！"
                    data-parsley-pattern="\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}"
                    data-parsley-pattern-message="请输入正确的邮箱地址" value="<?php echo $result['email'];?>"><span class="text-danger">*</span>
            <span class="text-sm text-defalut">请填写真实信息</span>
            </div>
            <div class="form-group">
              <label>地址</label>
              <input type="text" name="address" class="form-control w-xxl inline m-l-lg" placeholder="请填写您的地址" required data-trigger="change" data-parsley-required-message="必填！" required="required" value="<?php echo $result['address'];?>"/><span class="text-danger">*</span>
            </div>
            <div class="form-group">
              <label>备注</label>
              <input type="text" name="remark" class="form-control w-xxl inline m-l-lg" placeholder="" required data-trigger="change" data-parsley-required-message="必填！" required="required" value="<?php echo $result['remark'];?>"><span class="text-danger">*</span>
            </div>
             <div class="m-l-xxl">
               <input name="submit" type="submit" value="保存" class="btn btn-info m-l-sm">
&nbsp;
               <input name="Submit2" type="button" value="返回" onClick="history.back()" class="btn btn-default">
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
include("Connections/conn.php");
if(isset($_POST['submit'])==true){
 mysql_query("SET NAMES 'utf8'"); 
$query=mysql_query("update tb_mzhuce set sex='".$_POST['sex']."',vocation='".$_POST['vocation']."',birthday='".$_POST['birthday']."',paperType='".$_POST['paperType']."',paperNO='".$_POST['paperNO']."',tel='".$_POST['tel']."',email='".$_POST['email']."',remark='".$_POST['remark']."',address='".$_POST['address']."'where id='".$_GET['update']."'");
		if($query==true){
			echo "<script> alert('修改成功');window.location.href='admin_index.php?a=房东资料管理';</script>";
		}
	    else{
		     echo "<script>alert('修改失败!!');history.back()</script>";
	          }
}
?>
       
