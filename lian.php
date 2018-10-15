<?php 
error_reporting( E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="css_extent/app.min.css" />
 <link rel="stylesheet" href="js/parsley/parsley.css">
<title>无标题文档</title>
<!---------------------总体的css样式----------------------------->
	<link rel="stylesheet" href="Css/reset.css">
    <!-----------------头部的css样式----------------------->
	<link rel="stylesheet" href="Css/header.css">
</head>
<body>
<center>
<div class="head-top">
  <div class="head-wrap">
    <p class="head-top-left">
        <span>欢迎来到home租房，寻找家的温暖</span><span class="vertical-line"></span>
       <a href="shoujiyoufenqi.html" target="_blank"><i></i></a></p>
    <ul class="head-top-right">
            <li class="login list-item"><a href="" rel="nofollow" class="grade-one" style="display:inline"><?php
			if($_SESSION['user']!=null||$_SESSION['muser']){
				echo $_SESSION['user'];
				echo $_SESSION['muser'];
				 }
			else
			 {
			 echo '<a href="login.php">【请登录】</a>';
			 }?></a></li>
      <li class="login list-item"><a href="zhuce.php"  rel="nofollow" class="grade-one" style="padding-right: 5px"> 【免费注册】</a></li>
      <input type="hidden" name="_csrf" id="_csrf" value="b3c33d40-5de3-4ab7-a0dd-abef38a8626a" />
            <li class="vertical-line"></li>
      <li class="user-box list-item top-hover-box">
        <a href="" class="top-hover-link grade-one">您是房东</a>
          <ul class="top-hover">
            <li class=""><a href="mlogin.php" rel="nofollow">房东登录</a></li>
            <li class=""><a href="mzhuce.html" rel="nofollow">房东注册</a></li>
            <li class=""><a href="landlord/hourseoner.php" rel="nofollow">房东主页</a></li>
          </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="user-box list-item top-hover-box">
        <a href="" class="top-hover-link grade-one">我的</a>
          <ul class="top-hover">
            <li class=""><a href="mine/hourseoner.php" rel="nofollow">我的主页</a></li>
            <li class=""><a href="mine/index.php?a=房产预约登记" rel="nofollow">我的订单</a></li>
          </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="vertical-line"></li>
      <li class="help-box list-item top-hover-box"><a href="managerlogin.php" rel="nofollow" class="top-hover-link grade-one">管理员登录<var class="down-arrow icon-iconfont-arrow3"></var></a>
      </li>
    </ul>
  </div>
</div>
<div class="header-search dib-wrap">
	<a class="ulogo left" href="/"></a>
	<div class="search-box left dib">
<form id="form2" name="form2" method="post" action="">
 <input type="text" placeholder="搜索您需要的商品" class="dib" id="info" name="info" required />
		<button class="dib" id="search" name="search">
			<!-- <i class="icon-search" id="keyWordSearchId"></i> -->
      搜索
		</button>
        </form>
  </div>
        </div>
        
        <?php
if(isset($_POST['search'])==true||$_POST['keyword']){

       require_once 'sqlTools.class.php';//封装类，可执行dql、dml语句
	   if($_POST['keyword']){
		   $info = $_POST['keyword'];
	   }else{
				    $info=$_POST['info'];
				   }
       $sql="select name,no,address from house where name like '%$info%' or no like '%$info%' or address like '%$info%'";

       $sqlTools=new  SqlTools();

       $res=$sqlTools->execute_dql($sql);
}

?>
  <?php if(!$row=mysql_fetch_assoc($res)){?>
			  
			  <tr><td>没有搜索到你想要的结果，可以尝试其他条件搜索哦</td></tr>
 <?php }?>
<?php  
			
			  while ($row=mysql_fetch_assoc($res)){
				   mysql_connect("localhost","root","root");
	 			mysql_query("SET NAMES 'utf8'"); 
			 include("Connections/conn.php");
			 mysql_select_db("rent",$conn);
			  $sql2=mysql_query("select * from house where no = '".$row['no']."'");
			  $res2=mysql_fetch_array($sql2);

              $row['name']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['name']);

              $row['no']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['no']);

              $row['address']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['address']);
			  ?>
             
			  <table width="1232" height="56" border="0" cellspacing="1" align="center">
          <tr bgcolor="#FFFFFF" onmouseover="this.bgColor="#FFFF99"" onmouseout="this.bgColor="#FFFFFF"">
            <td width="613" align="center" bgcolor="#FFFFFF"><a href="house.php?id=<?php echo $res2['id'];?>" target="_blank""><?php

              echo $row['name'];

      

			?></a></td>
            <td width="614" align="center" bgcolor="#FFFFFF"><?php echo $row['no'];?></td>
            <td width="1228" align="center" bgcolor="#FFFFFF"><?php echo $row['address'];?></td>
            
          </tr>
			 <?php }?>
</table>
</a>
</center>
</body>
 <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
 <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="zhuce.js"></script>
<script src="js/layer/layer.js"></script>
</html>