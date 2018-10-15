<?php 
error_reporting( E_ALL & ~E_NOTICE & ~E_WARNING);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
<!---------------------总体的css样式----------------------------->
	<link rel="stylesheet" href="Css/reset.css">
    <!-----------------头部的css样式----------------------->
	<link rel="stylesheet" href="Css/header.css">
	<style type="text/css">
	body,td,th {
	font-family: arial, \5FAE\8F6F\96C5\9ED1, "Hiragino Sans GB", Verdana;
}
    </style>
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
            <li class=""><a href="landlord/index.php" rel="nofollow">房东主页</a></li>
          </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="user-box list-item top-hover-box">
        <a href="" class="top-hover-link grade-one">我的</a>
          <ul class="top-hover">
            <li class=""><a href="mine/index.php" rel="nofollow">我的主页</a></li>
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
 <input type="text" placeholder="搜索您需要的商品" class="dib" id="info" name="info" value="">
		<button class="dib" id="search" name="search">
			<!-- <i class="icon-search" id="keyWordSearchId"></i> -->
      搜索
		</button>
      </form>
  </div>
  </div>
        
        <?php
if(isset($_POST['search'])==true){

       require_once 'sqlTools.class.php';//封装类，可执行dql、dml语句

       $info=$_POST['info'];

       $sql="select name,no,address from house where name like '%$info%' or no like '%$info%' or address like '%$info%'";

       $sqlTools=new  SqlTools();

       $res=$sqlTools->execute_dql($sql);
}

?>
<?php  
			
			 while ($row=mysql_fetch_assoc($res)){

              $row['name']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['name']);

              $row['no']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['no']);

              $row['address']=preg_replace("/($info)/i","<b style=\"color:red\">\\1</b>",$row['address']);
			  ?>
             
  <table width="1232" height="56" border="0" cellspacing="4" align="center">
          <tr bgcolor="#FFFFFF" onmouseover="this.bgColor="#FFFF99"" onmouseout="this.bgColor="#FFFFFF"">
 
            <td width="613" align="center" bgcolor="#FFFFFF"><a href="house.php?no=<?php echo $row['no'];?>" target="_blank""><?php

              echo $row['name'];

      

			?></a></td>
            <td width="614" align="center" bgcolor="#FFFFFF"><?php echo $row['no'];?></td>
            <td width="1228" align="center" bgcolor="#FFFFFF"><?php echo $row['address'];?></td>
            
          </tr>
          <?php }?>
</table>
</a>
<?php
  
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
  include("Connections/conn.php");
  mysql_select_db('rent',$conn);
  $sql1=mysql_query(" select * from house");
  $info1=mysql_fetch_array($sql1);
   do{
   ?>
<table width="1231" border="0" cellspacing="4">
 <tbody id="table2">
  <tr align="center" bgcolor="#FFFFFF">
    <td width="83" height="52"><?php echo $info1['no'];?></td>
    <td width="302"><a href="house.php?no=<?php echo $row['no'];?>" target="_blank""><?php echo $info1['name'];?></a></td>
    <td width="149"><?php echo $info1['price'];?></td>
    <td width="132"><?php echo $info1['type'];?></td>
    <td width="364"><?php echo $info1['address'];?></td>
  </tr>
  </tbody>
</table>
 <?php
      }while($info1=mysql_fetch_array($sql1));
     ?>
      <div style="height:30px;margin:20px 0 0 0;">
        <span id="spanFirst">第一页</span>
        <span id="spanPre">上一页</span>
        <span id="spanNext">下一页</span>
        <span id="spanLast">最后一页</span>
        第
        <span id="spanPageNum"></span>
        页/共
        <span id="spanTotalPage"></span>
        页
    </div>

<script type="text/javascript">
var theTable = document.getElementById("table2");
var totalPage = document.getElementById("spanTotalPage");
var pageNum = document.getElementById("spanPageNum");

var spanPre = document.getElementById("spanPre");
var spanNext = document.getElementById("spanNext");
var spanFirst = document.getElementById("spanFirst");
var spanLast = document.getElementById("spanLast");

var numberRowsInTable = theTable.rows.length;
var pageSize = 10;
var page = 1;

//下一页
function next() {

    hideTable();
    
    currentRow = pageSize * page;
    maxRow = currentRow + pageSize;
    if ( maxRow > numberRowsInTable )
    maxRow = numberRowsInTable;
    for ( var i = currentRow; i< maxRow; i++ ) {
        theTable.rows[i].style.display = '';
    }
        page++;
    if ( maxRow == numberRowsInTable ){
        nextText();
        lastText();
    }
    showPage();
    preLink();
    firstLink();
}

//上一页
function pre() {

    hideTable();
    
    page--;

    currentRow = pageSize * page;
    maxRow = currentRow - pageSize;
    if ( currentRow > numberRowsInTable )
    currentRow = numberRowsInTable;
    for ( var i = maxRow; i< currentRow; i++ ) {
        theTable.rows[i].style.display = '';
    }


    if ( maxRow == 0 ) {
        preText();
        firstText();
    }
    
    showPage();
    nextLink();
    lastLink();
}

//第一页
function first() {
    hideTable();
    page = 1;
    for ( var i = 0; i<pageSize; i++ ) {
        theTable.rows[i].style.display = '';
    }
    showPage();

    preText();
    nextLink();
    lastLink();
}

//最后一页
function last() {
    hideTable();
    page = pageCount();
    currentRow = pageSize * (page - 1);
    for ( var i = currentRow; i<numberRowsInTable; i++ ) {
        theTable.rows[i].style.display = '';
    }
    showPage();
    
    preLink();
    nextText();
    firstLink();
}

function hideTable() {
    for ( var i = 0; i<numberRowsInTable; i++ ) {
    theTable.rows[i].style.display = 'none';
    }
}

function showPage() {
    pageNum.innerHTML = page;
}

//总共页数
function pageCount() {
    var count = 0;
    if ( numberRowsInTable%pageSize != 0 ) count = 1; 
    return parseInt(numberRowsInTable/pageSize) + count;
}

//显示链接
function preLink() { spanPre.innerHTML = "<a href='javascript:pre();'>上一页</a>"; }
function preText() { spanPre.innerHTML = "上一页"; }

function nextLink() { spanNext.innerHTML = "<a href='javascript:next();'>下一页</a>"; }
function nextText() { spanNext.innerHTML = "下一页"; }

function firstLink() { spanFirst.innerHTML = "<a href='javascript:first();'>第一页</a>"; }
function firstText() { spanFirst.innerHTML = "第一页"; }

function lastLink() { spanLast.innerHTML = "<a href='javascript:last();'>最后一页</a>"; }
function lastText() { spanLast.innerHTML = "最后一页"; }

//隐藏表格
function hide() {
    for ( var i = pageSize; i<numberRowsInTable; i++ ) {
        theTable.rows[i].style.display = 'none';
    }

    totalPage.innerHTML = pageCount();
    pageNum.innerHTML = '1';
    
    nextLink();
    lastLink();
}

hide();
</script>

</div>
</center>
</body>
</html>