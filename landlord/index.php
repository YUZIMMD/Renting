<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$b=$_GET['a'];
if($_SESSION['muser']!=null){
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/simple-line-icons.css"/>
<style>
   .left_bar{
	   background-color:#fff;
	   padding:0px;
	   }
   .nav_bar{
	   width:100%;
	   height:50px;
	   line-height:50px;
	   }
	.nav_bar:hover{
		background-color:#DFE7E8}
	.name{
		width:100%;
		height:40px;
		line-height:40px}
	.right_conten{
		background-color:#fff;
		min-height:582px;
		}
	.top_style{
		width:100%;
		height:70px;
		line-height:70px;
		}
	a:hover{
		color:}
</style>
</head>
<body>
 <div class="box-shadow bg-white-only top_style">
         <ul class="nav navbar-nav m-l-xxl">
         <a href="../index.php">
          <img src="../Images/未标题-1.gif" style="width:150px;height:30px" class="m-l-md"/>
        </a>
        </ul>
        <ul class="nav navbar-nav navbar-right m-r-md">
          <li class="dropdown">
            <a href="#"><img src="../Images/sun.png"/>
             欢迎来到home租房，亲爱的<?php echo $_SESSION['muser'];?>
            </a>
          </li>
        </ul>
      </div>
  <div class="container" role="main">
    <div class="row m-t-xxl m-b-xxl">
     <!-- 左侧导航 -->
      <div class="col-xs-3 b-a left_bar">
        <div class="text-center"><img src="../Picture/person.png" style="width:150px;height:140px"/></div>
        <div class="name text-center">你好 <?php echo $_SESSION['muser'];?></div>
        <div class="text-center nav_bar b-t">
           <a href="index.php?a=个人资料">我的个人资料</a>
        </div>
        <div class="text-center nav_bar b-t">
          <a href="index.php?a=房产上传">房产上传</a>
        </div>
        <div class="text-center nav_bar b-t">
           <a href="index.php?a=房产管理">房产管理</a>
        </div>
        <div class="text-center nav_bar b-t">
           <a href="index.php?a=房产预约登记">房产预约登记</a>
        </div>
        <div class="text-center nav_bar b-t">
          <a href="index.php?a=房产租赁记录">房产租赁记录</a>
        </div>
        <div class="text-center nav_bar b-t">
          <a href="index.php?a=留言">留言</a>
        </div>
         <div class="text-center nav_bar b-t">
          <a href="exit.php">退出</a>
        </div>
        <div class="text-center nav_bar b-t">
          <a href="../index.php">回到首页</a>
        </div>
      </div>
       <!--右侧内容 -->
      <div class="col-xs-8 right_conten m-l-md">
             <?php 
		  switch($b)
		{
			case "个人资料":include("grnews.php");
			break;
			case "房产上传":include("chuan1.php");
			break;
			case "房产管理":include("house_manage.php");
			break;
			case "留言":include("reply.php");
			break;
			case "房产租赁记录":include("rent.php");
			break;
			case "房产预约登记":include("booking.php");
			break;
		    case "退出":include("exit.php");
			break;
			default:include("grnews.php");
		}
	  ?>
      </div>
    </div>
  </div>
  <footer id="footer" class="app-footer" role="footer">

  </footer>
</body>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/echarts.js"></script>
<script type="text/javascript" src="../js/jquery.easypiechart.fill.js"></script>
</html>
<?php
}else{
	echo "<script>alert('登录后才能进入个人中心，亲爱的，登录后再来吧！');window.location.href='http://localhost/zufang/mlogin.php';</script>";
}
?>