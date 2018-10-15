<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

$_SESSION['yhm']=$_POST['yhm'];
$_SESSION['mm']=$_POST['mm'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Css/reset.css">
		<link rel="stylesheet" href="Css/footer.css">
		<link rel="stylesheet" href="Css/login.css">
		<style type="text/css">
		body,td,th {
	font-family: arial, \5FAE\8F6F\96C5\9ED1, "Hiragino Sans GB", Verdana;
}
        </style>
		<title>用户登录</title>
	</head>
	<body>
		<div class="usm-wrap u-login main">
			<h1 class="header-icon">
			<a class="ulogo" href="#"></a>
			</h1>
			<form action="#" method="post" name="form" id="loginForm" autocomplete="off">
				<input id="_csrf" data-check='yes' type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}" />
				<input name="j_token" data-check='yes' type="hidden" id="j_token" value="1459331426664" />
				<input type="hidden" id="errorcount" value="" data-value=""/>
				<input type="hidden" id="login_failure_name" value="" />
				<div class="content" id="ejs_container">
					<div class="pic left">
						<a href="#">
							<img alt="欢迎登录home" title="欢迎来到home" src="Picture/22.png" width="450px" height="270px">
						</a>
					</div>
					<div class="form left">
						<h3>用户登录</h3>
						<div class="form-list dib-wrap ">
							<label for="" class="dib listdib"><i class="icon-uniE614 icon-login"></i></label>
							<input id="yhm" name="yhm" data-exp="void-me" type="text" placeholder="管理员姓名和账号" class="dib"/>
						</div>
						<div class="form-list dib-wrap ">
							<label for="" class="dib listdib"><i class="icon-uniE610 icon-login"></i></label>
							<input id="mm" name="mm" type="password"  placeholder="密码" class="dib"/>
							<input type="hidden" id="j_password" name="password" value="" />
					        <input type="hidden" id="j_token" name="curTime" value="1459331426664" />
					        <input type="hidden" id="targetUrl" name="targetUrl" value="http%3A%2F%2Fwww.ufenqi.com" />
					        <input type="hidden" id="source" name="source" value="PC" />
						</div>
						 <p style="color: red"></p>
						<div class="dib-wrap">
							<button id="submit"  name="submit" class="login-btn  btn dib">
							登&nbsp;&nbsp;&nbsp;&nbsp;录
							</button>
						</div>
						<div class="dib-wrap lh-37">
							<span class="font-bd"><a class="dib"> 温馨提示：<span class="font-blue">请注意后台数据安全</span></a></span>
						</div>
					</div>
				</div>
			</form>
			<div class="clearfix"></div>
			
		</div>
		<footer class="ft-wrap">
		<div class="ft-main-box">
		
<ul class="ft-main">
	<li class="left">
		<strong class="block">联系电话</strong>
		<a href="#" rel="nofollow" target="_blank">400-081-0707</a>
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
            <p>地址：电子科技大学成都学院 百叶路一号  计算机系  Copyright by J1701046工作室</p>
		</div>
	</div>
		</div>
	</footer>

 
	</body>
</html>
<?php
  mysql_connect("localhost","root","root");
  mysql_query("SET NAMES 'utf8'"); 
include("Connections/conn.php");//获取myconn中的内容连接数据库
mysql_select_db("rent",$conn);//找到数据库s
if(isset($_POST['submit']))
{
	$a=$_POST['yhm'];
	$b=$_POST['mm'];
    $sql="select * from manager where name='".$a."' and pwd='".$b."'";//找到表
	$result=mysql_query($sql);//查询表，将所有的结果放入result中
	$n=mysql_num_rows($result);//使用这个函数是不关心里面具体的值
	if($n==0)
	{
		echo "<script>";
		echo "alert ('登录失败！请检查账号与密码，重新登录');";
		echo "location.href='managerlogin.php'";
		echo "</script>";
		
		}
		else
		{
			$_SESSION['admin_user']=$a;
            $_SESSION['admin_pwd']=$b;
		echo "<script>";
		echo "alert ('登录成功！后台信息很重要，处理时需慎重！！！');";
		echo "location.href='admin/admin_index.php'";
		echo "</script>";
			}
	
	}
	if(isset($_POST['zhuce']))
	{
		echo "<script>";
		echo "alert ('欢迎注册');";
		echo "location.href='zhuce.php'";
		echo "</script>";
		}

?>