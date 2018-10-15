<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻无缝向上无缝滚动</title>
<style>
body {
	font-size: 12px;
	line-height: 24px;
	text-algin: center;        /* 页面内容居中 */
}
* {
	margin: 0px;
	padding: 0px;            /*  去掉所有标签的marign和padding的值  */
}
ul {
	list-style: none;           /*  去掉ul标签默认的点样式  */
}
a img {
	border: none;        /*  超链接下，图片的边框  */
}
a {
	color: #333;
	text-decoration: none;     /* 超链接样式 */
}
a:hover {
	color: #ff0000;
}
#mooc {
	width: 399px;
	border: 5px solid #ababab;
	-moz-border-radius: 15px;      /* Gecko browsers */
	-webkit-border-radius: 15px;   /* Webkit browsers */
	border-radius: 15px;
	box-shadow: 2px 2px 10px #ababab;
	margin: 50px auto 0;
	text-align: left;               /* 让新闻内容靠左 */
}
/*  头部样式 */	
#moocTitle {
	height: 62px;
	overflow: hidden;  /* 这个一定要加上，内容超出的部分要隐藏，免得撑高头部 */
	font-size: 26px;
	line-height: 62px;
	padding-left: 30px;
	background-image: -moz-linear-gradient(top, #676A74, #3A3F51); /* Firefox */
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #676A74), color-stop(1, #3A3F51)); /* Saf4+, Chrome */
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#8fa1ff', endColorstr='#f05e6f', GradientType='0'); /* IE*/
	border: 1px solid ##f05e6f;
	-moz-border-radius: 8px 8px 0 0;      /* Gecko browsers */
	-webkit-border-radius: 8px 8px 0 0;   /* Webkit browsers */
	border-radius: 8px 8px 0 0;
	color: #fff;
	position: relative;
}
#moocTitle a {
	position: absolute;
	right: 10px;
	bottom: 10px;
	display: inline;
	color: #fff;
	font-size: 12px;
	line-height: 24px;
}
/*  底部样式 */
#moocBot {
	width: 399px;
	height: 10px;
	overflow: hidden;     /* 这个一定要加上，内容超出的部分要隐藏，免得撑高底部结构 */
}
/*  中间样式 */
#moocBox {
	height: 144px;
	width: 335px;
	margin-left: 25px;
	margin-top: 10px;
	overflow: hidden;    /*  这个一定要加，超出的内容部分要隐藏，免得撑高中间部分 */
}
#mooc ul li {
	height: 24px;
}
#mooc ul li a {
	width: 180px;
	float: left;
	display: block;
	overflow: hidden;
	text-indent: 15px;
	height: 24px;
}
#mooc ul li span {
	float: right;
	color: #999;
}
</style>
</head>

<body>
<div  id="mooc"> 
<div  id="moocTitle">最新动态<a href="#" target="_self">更多>></a> </div>
<div  id="moocBox">
    <ul>
        <li><a href="#">1.学会html5 绝对的屌丝逆袭（案例）</a><span>2013-09-18</span></li>
        <li><a href="#">2.tab页面切换效果（案例）</a><span>2013-10-09</span></li>
        <li><a href="#">3.圆角水晶按钮制作（案例）</a><span>2013-10-21</span></li>
        <li><a href="#">4.HTML+CSS基础课程(系列)</a><span>2013-11-01</span></li>
        <li><a href="#">5.分页页码制作（案例）</a><span>2013-11-06</span></li>
        <li><a href="#">6.导航条菜单的制作（案例）</a><span>2013-11-08</span></li>
        <li><a href="#">7.信息列表制作(案例)</a><span>2013-11-15</span></li>
        <li><a href="#">8.下拉菜单制作(案例)</a><span>2013-11-22</span></li>
        <li><a href="#">9.如何实现&ldquo;新手引导&rdquo;效果</a><span>2013-12-06</span></li>
    </ul>
</div>
<div  id ="moocBot"> </div>
</div>
<script type="text/javascript">
 var area = document.getElementById('moocBox');
 var iliHeight = 24;//单行滚动的高度
 var speed = 50;//滚动的速度
 var time;
 var delay= 2000;
 area.scrollTop=0;
 area.innerHTML+=area.innerHTML;//克隆一份一样的内容
 function startScroll(){
	 time=setInterval("scrollUp()",speed);
	 area.scrollTop++;
	 }
 function scrollUp(){
	 if(area.scrollTop % iliHeight==0){
		 clearInterval(time);
		 setTimeout(startScroll,delay);
		 }else{
			 area.scrollTop++;
			 if(area.scrollTop >= area.scrollHeight/2){
				 area.scrollTop =0;
				 }
			 }
	 }
	 setTimeout(startScroll,delay)
 </script>
</body>
</html>
