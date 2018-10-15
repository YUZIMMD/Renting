<?php 
header("Content-type: text/html; charset=utf-8");
error_reporting( E_ALL & ~E_NOTICE );
session_start();      
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>关于我们</title>
 <!---------------------总体的css样式----------------------------->
	<link rel="stylesheet" href="Css/reset.css">
    <!-----------------头部的css样式----------------------->
	<link rel="stylesheet" href="Css/header.css">  
    <link rel="stylesheet" href="Css/footer.css">
    <style type="text/css">
    body,td,th {
	font-family: arial, \5FAE\8F6F\96C5\9ED1, "Hiragino Sans GB", Verdana;
}
    </style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<div class="head-top">
  <div class="head-wrap">
    <p class="head-top-left"> <span>欢迎来到home租房，寻找家的温暖</span><span class="vertical-line"></span> <a href="shoujiyoufenqi.html" target="_blank"><i></i></a></p>
    <ul class="head-top-right">
      <li class="login list-item"><a href="" rel="nofollow" class="grade-one" style="display:inline">
        <?php
			if($_SESSION['user']!=null){
				echo $_SESSION['user'];
				 }
			else
			 {
			 echo '<a href="login.php">【请登录】</a>';
			 }?>
      </a></li>
      <li class="login list-item"><a href="zhuce.php"  rel="nofollow" class="grade-one" style="padding-right: 5px"> 【免费注册】</a></li>
      <input type="hidden" name="_csrf" id="_csrf" value="b3c33d40-5de3-4ab7-a0dd-abef38a8626a" />
      <li class="vertical-line"></li>
      <li class="user-box list-item top-hover-box"> <a href="" class="top-hover-link grade-one">您是房东</a>
        <ul class="top-hover">
          <li class=""><a href="mlogin.php" rel="nofollow">房东登录</a></li>
          <li class=""><a href="mzhuce.html" rel="nofollow">房东注册</a></li>
          <li class=""><a href="landlord/index.php" rel="nofollow">房东主页</a></li>
        </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="user-box list-item top-hover-box"> <a href="" class="top-hover-link grade-one">我的</a>
        <ul class="top-hover">
          <li class=""><a href="mine/index.php" rel="nofollow">我的主页</a></li>
          <li class=""><a href="mine/index.php?a=房产预约登记" rel="nofollow">我的订单</a></li>
        </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="vertical-line"></li>
      <li class="help-box list-item top-hover-box"><a href="managerlogin.php" rel="nofollow" class="grade-one">管理员登录<var class="down-arrow icon-iconfont-arrow3"></var></a> </li>
    </ul>
  </div>
  <div class="xuzhi">
  <p>&nbsp;</p>
  <p>亲爱的你须知  </p>
  <p>&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="1186" border="0" cellspacing="10" align="center">
  <center>
    <tr bgcolor="#FFFFFF">
      <td width="73" bgcolor="#EEEEEE">&nbsp;</td>
      <td width="585"><img src="Picture/safe.png" alt="" width="500" height="300"></td>
      <td width="482" align="center"><p>在线租房系统，使房东与想租房的你，直接进行交易，没有中介，没有额外费用，如有疑问，请与我们联系</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
          <label for="leaveword"></label>
          <textarea name="leaveword" cols="50" rows="8" id="leaveword"></textarea>
      </p>
        <p>&nbsp;</p>
        <p>
          <input type="submit" name="connect" id="connect" value="提交">
        </p></td>
          <?php
  
	
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
if(isset($_POST['connect'])==true){
	if($_SESSION['user']!=null||$_SESSION['muser']!=null){  
	 $date=date('Y-m-d',time());
	$word=$_POST['leaveword'];
	if($_SESSION['user']){
		$user=$_SESSION['user'];
		}else if($_SESSION['muser']){
			$user=$_SESSION['muser'];
			}
	$query=mysql_query("insert into tb_leaveword(word,user,date)values('".$_POST['leaveword']."','".$user."','".date('Y-m-d',time())."')");
	if($query==true){
			echo "<script> alert('留言成功，感谢您的意见或建议，我们会尽快给您答复，您可在我的中查询回复留言，');window.location.href='about.php';</script>";
		}
	    else{
		     echo "<script>alert('留言失败，请检查你是否登录!!');history.back()</script>";
	          }
	}else{
	echo "<script>alert('登录后才能留言，亲爱的，登录后再来吧！');window.location.href='login.php';</script>";
}		  		  
	}
  ?>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="73" bgcolor="#EEEEEE">&nbsp;</td>
      <td width="585" align="center">
       
          <p>经常租房的人们可能会发现，</p>
          <p>寻找合租容易碰到一个现象，不论是网络上发的帖子、报纸上刊登的信息，</p>
          <p>还是个别中介公司所提供的租赁房源，</p>
          <p>承租人最终成交签署合同时都已经很难与原房屋业主打交道了，越来越多的&ldquo;二房东&rdquo;替代了&ldquo;原房主&rdquo;的位置。</p>
    
   </td>
      <td width="482"><img src="Picture/safe4.png" width="500" height="300"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="73" bgcolor="#EEEEEE">&nbsp;</td>
      <td width="585"><img src="Picture/safe2.png" width="500" height="300"></td>
      <td width="482" align="center">亲爱的，如果您没有租房经验，请谨慎小心，如您发现，实际租房价格比在线的价格高，请深思，并向我们反馈</td>
    </tr>>
    <tr bgcolor="#FFFFFF">
      <td width="73" bgcolor="#EEEEEE">&nbsp;</td>
      <td width="585" align="center">
        房屋租赁合同是指住房出租人和承租人在租赁住房时签订的、用来明确双方权利和义务的协议。
     
   
          <p>主要具有以下法律特征</p>
         <p>1．房屋租赁合同是移转房屋使用权的合同</p>
         <p>2．房屋租赁合同是诺成、双务、有偿合同。</p>         
         <p>3．房屋租赁合同具有临时性。</p>
          <p>详情请参考：http://baike.baidu.com/link?url=C66QyEfs74ZhDxBdU4qQnWd6-Dd0C-iVFlaNIDB-EdLlTk5MNr2yzPAT0Z8AEQbE2UxxrrlrZEB-9pTs2hNoCq        </p>
        <p>&nbsp;</p></td>
      <td width="482"><img src="Picture/safe3.png" width="500" height="300"></td>
    </tr>
    </center>
  </table>
  <footer class="ft-wrap">
	  <div class="ft-main-box">
		
<ul class="ft-main">
	<li class="left">
		<strong class="block">联系电话</strong>
		<a href="#" rel="nofollow" target="_blank">888-888-8888</a>
	<li class="left">
		<strong class="block">交易说明</strong>
		<a href="#" rel="nofollow" target="_blank">安全保障</a>
		<a href="#" rel="nofollow" target="_blank">保险</a>

	</li>
	<li class="left">
		<strong class="block">买房注意事项</strong>
		<a href="#" rel="nofollow" target="_blank">链接</a>
	</li>
	<li class="left">
		<strong class="block">关于home</strong>
		<a href="#" rel="nofollow" target="_blank">关于我们</a>
		<a href="#" rel="nofollow" target="_blank">联系我们</a>
		<a href="#" rel="nofollow" target="_blank">加入我们</a>
	</li>
	<li class="left ft-phoneapp">
		<strong class="block">隐私声明</strong>
		<a href="#" target="_blank" class="app-h5">http://www.17sucai.com/</a>
		<a href="#" target="_blank" class="ft-btn app app-ios"><i class="icon-iconfont-ios inline-block"></i>保护隐私</a>
	</li>
	<li class="left ft-mobile">
		<p><strong>400-081-0707</strong>
			</br>周一至周日9：00-22：00</p>
	</li>
</ul>			<div class="ft-copyright">
		
		<div class="footer-info" >
            <p>地址：电子科技大学成都学院 百叶路一号</p>
            <p>计算机系 软件技术 三班</p>
			<p>Copyright 501集团</p>
		</div>
	</div>
	</div>
  </footer>
</form>
</body>
</html>

