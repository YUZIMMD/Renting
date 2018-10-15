<?php 
error_reporting( E_ALL & ~E_NOTICE );
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>主页</title>
	<meta charset="utf-8">
    <!---------------------总体的css样式------------------->
	<link rel="stylesheet" href="Css/reset.css">
    <!-----------------头部的css样式----------------------->
	<link rel="stylesheet" href="Css/header.css">
	<link rel="stylesheet" href="Css/header_banner.css">
    <!---------------------footercss----------------------->
	<link rel="stylesheet" href="Css/footer.css">
    <!------------------------主页上的css样式-------------->
	<link rel="stylesheet" href="Css/index.css">
    <!-----------------------右边意见反馈css--------------->
    <link rel="stylesheet" href="Css/right_sidebar.css">
    <style type="text/css">
    body,td,th {
	font-family: arial, \5FAE\8F6F\96C5\9ED1, "Hiragino Sans GB", Verdana;
}
    </style>
</head>

<body style="overflow:-Scroll;overflow-x:hidden" id="top">
	<!-- header -->
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
      <li class="login list-item"><a href="zhuce.html"  rel="nofollow" class="grade-one" style="padding-right: 5px"> 【免费注册】</a></li>
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
      <li class="help-box list-item top-hover-box"><a href="managerlogin.php" rel="nofollow" class="top-hover-link grade-one">管理员登录<var class="down-arrow icon-iconfont-arrow3"></var></a>
      </li>
    </ul>
  </div>
</div>
<div class="header-search dib-wrap">
	<a class="ulogo left" href="/"></a>
    <form role="form" id="searchForm" action="lian.php" method="post">
	<div class="search-box left dib">
		<input type="text" placeholder="搜索您需要的商品" class="dib" id="keyword" name="keyword" value="" required>
		<button class="dib" id="search" name="search">
			<!-- <i class="icon-search" id="keyWordSearchId"></i> -->
      搜索
		</button>
	</div>
    </form>
  <ul class="right header-qq-num">
    <li class="r-item tel-num"><i></i>888-888-888</li>
  </ul>
</div>

 <!-------------------右边意见反馈--------------------------------->

	<div class="r-sidebar"  id="float_bar" style="display:none;">
    <ul class="rbar-footer">
        <li class="rbar-item">
            <a class=" rbar-a rbar-feedback" href="about.php" target="_blank">
                <i class="rbar-icon"></i>
            </a>
            <span class="rbar-text">
               意见反馈
               <var class="rbar-arr"></var>
           </span>
        </li>
        <li class="rbar-item ">
            <a class="rbar-a rbar-gotop" href="#top" id="to_top">
                <i class="rbar-icon"></i>
            </a>
            <span class="rbar-text">
                返回顶部
                <var class="rbar-arr"></var>
            </span>
        </li>
    </ul>
</div>

 <!----------------------------头部和浏览------------------------>

	<div class="header-main">
		<div class="nav">
	<div class="main-content u-nav">
		<div class="nav-list">
		   <p class="font-size3 font-white">全部分类</p>
		   <ul class="navlist-ul" id="top_nav"><li>
    <div class="navlist-li-cover" data-navid="1">
        <img src="Images/1.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="##" class="navlist-li-a" target="_blank">地区<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <!----------------------1------------------------------>
    <div class="navlist-active" style="top: 0px;">
        <div class="navlist-active-left">
            <div class="nav-hidden-title">
                <a href="#" class="navlist-li-a" target="_blank">地区</a>
            </div>
            <dl>
                <dt><a class="category_s">地铁附近</a></dt>
            </dl>
            <dl>
                <dd>
                    <a href="screen.php?address=武侯区" target="_blank">武侯区</a>
                    <a href="screen.php?address=锦江区" target="_blank">锦江区</a>
                    <a href="screen.php?address=青羊区" target="_blank">青羊区</a>
                    <a href="screen.php?address=金牛区" target="_blank">金牛区</a>
                    <a href="screen.php?address=成华区" target="_blank">成华区</a>
                    <a href="screen.php?address=高新区" target="_blank">高新区</a>
                    <a href="screen.php?address=高新西区" target="_blank">高新西区</a>
                    <a href="screen.php?address=双流县" target="_blank">双流县</a>
                    <a href="screen.php?address=郫县" target="_blank">郫县</a>
                    <a href="screen.php?address=新都区" target="_blank">新都区</a>
                    <a href="screen.php?address=都江堰" target="_blank">都江堰</a>
                    <a href="screen.php?address=温江" target="_blank">温江</a>
                    <a href="screen.php?address=崇州" target="_blank">崇州</a>
                    <a href="screen.php?address=大邑" target="_blank">大邑</a>
                    <a href="screen.php?address=彭州" target="_blank">彭州</a>
                    <a href="screen.php?address=青白江" target="_blank">青白江</a>
                    <a href="screen.php?address=锦江区" target="_blank">锦江区</a>
                    <a href="screen.php?address=金堂县" target="_blank">金堂县</a>
                    <a href="screen.php?address=新津县" target="_blank">新津县</a>
                    <a href="screen.php?address=浦江" target="_blank">浦江</a>
                </dd>
            </dl>
        </div>
    </div>
</li>

<!-------------------------2--------------------------->
<li>
    <div class="navlist-li-cover" data-navid="2">
        <img src="Images/2.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="#" class="navlist-li-a" target="_blank">面积<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <div class="navlist-active" style="top: -50px;">
        <div class="navlist-active-left">
            <dl>
                <dt><a class="category_s">面积</a></dt>
                <dd>
                    <a href="screen.php?area=50" target="_blank">50平米以下</a>
                    <a href="screen.php?area=100" target="_blank">50-100平方米</a>
                    <a href="screen.php?area=150" target="_blank">100-150平方米</a>
                    <a href="screen.php?area=200" target="_blank">150-200平方米</a>
                    <a href="screen.php?area=up" target="_blank">200平方米以上</a> 
                </dd>
            </dl>
        </div>
    </div>
</li>

<!----------------------------3------------------------>

<li>
    <div class="navlist-li-cover" data-navid="3">
        <img src="Images/3.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="" class="navlist-li-a" target="_blank">价格<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <div class="navlist-active" style="top: -100px;">
        <div class="navlist-active-left">
            <dl>
                <dt><a class="category_s">价格区间</a></dt>
                <dd>
                    <a href="screen.php?price=1000" target="_blank">1000以下</a>
                    <a href="screen.php?price=2000" target="_blank">1000-2000</a>
                    <a href="screen.php?price=4000" target="_blank">2000-4000</a>
                    <a href="screen.php?price=6000" target="_blank">4000-6000</a>
                    <a href="screen.php?price=up" target="_blank">6000以上</a>
                </dd>
            </dl>
        </div>
    </div>
</li>
<!----------------------------4------------------------>
<li>
    <div class="navlist-li-cover" data-navid="5">
        <img src="Images/4.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="" class="navlist-li-a" target="_blank">户型<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <div class="navlist-active" style="top: -150px;">
        <div class="navlist-active-left">
            <dl>
                <dt><a class="category_s">户型</a></dt>
                <dd>
                    <a href="screen.php?struct=单间" target="_blank">单间</a>
                    <a href="screen.php?struct=一室一厅" target="_blank">一室一厅</a>
                    <a href="screen.php?struct=两室一厅" target="_blank">两室一厅</a>
                    <a href="screen.php?struct=两室两厅" target="_blank">两室两厅</a>
                    <a href="screen.php?struct=三室两厅" target="_blank">三室两厅</a>
                </dd>
            </dl>
        </div>
    </div>
</li>


<!-------------------------5--------------------------->


<li>
    <div class="navlist-li-cover" data-navid="6">
        <img src="Images/6.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="#" class="navlist-li-a" target="_blank">长租/短租<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <div class="navlist-active" style="top: -200px;">
        <div class="navlist-active-left">
            <dl>
                <dt><a class="category_s">长租/短租</a></dt>
                <dd>
                    <a href="screen.php?rentType=长租" target="_blank">长租</a>
                    <a href="screen.php?rentType=短租" target="_blank">短租</a>
                    <span>(长租：一年以上，短租：一年以内)</span>
                </dd>
            </dl>
        </div>
    </div>
</li>
<!----------------------------6------------------------>

<li>
    <div class="navlist-li-cover" data-navid="7">
        <img src="Images/2.png" class="navlist-li-icon ">
        <span class="nalist-li-span">
            <a href="" class="navlist-li-a" target="_blank">类型<span>/</span></a>
        </span>
        <span class="arrow-r"></span>
        <span class="arrow-l"></span>
    </div>
    <div class="navlist-active" style="top: -250px;">
        <div class="navlist-active-left">
            <dl>
                <dt><a class="category_s">租房类型</a></dt>
                <dd>
                    <a href="screen.php?type=住宅" target="_blank">住宅</a>
                    <a href="screen.php?type=写字楼" target="_blank">写字楼</a>
                    <a href="screen.php?type=商铺" target="_blank">商铺</a>
                    <a href="screen.php?type=别墅" target="_blank">别墅</a>
                </dd>
        </div>
    </div>
</li>

</ul>
		</div>
        <!----------------------------导航------------------------>
		<div class="nav-title font-size2">
		   <ul>
		   	   <li><a href="index.php">首页</a></li>
		   	   <li><a href="hot.php" target="_blank">本周最热</a></li>
		   	   <li><a href="recommend.php" target="_blank">本周推荐</a></li>
		   	   <li><a href="about.php" target="_blank">关于我们</a></li>
		   </ul>	
		</div>
	</div>
</div>
<!----------------------------滚动图片首页------------------------>
		<div class="ufenqi-banner">
	<div class="u-banner">
	   <ul class="bxslider banner-list" style="z-index:1;">
	   	   	   <li style="background:#00deff;" class="active">
	   	   		<a href="" target="_blank" class="main-content" title=""><img src="Picture/35.jpg"></a>
	   	   </li>
	   	   	   <li style="background:#0b0437;">
	   	   		<a href="" target="_blank" class="main-content" title=""><img src="Picture/rool1.png"></a>
	   	   </li>
	   	   	   <li style="background:#8000bf;">
	   	   		<a href="" target="_blank" class="main-content" title=""><img src="Picture/rool2.png"></a>
	   	   </li>
	   	   	   <li style="background:#ee5243;">
	   	   		<a href="" target="_blank" class="main-content" title=""><img src="Picture/10.png"></a>
	   	   </li>
	   	   	   <li style="background:#34bfff;">
	   	   		<a href="" target="_blank" class="main-content" title=""><img src="Picture/9.png"></a>
	   	   </li>
      </ul>
		   <ol class="slider">
				<li></li>
		   </ol>
	</div>
</div>	</div>
	<!-- end header -->
	<!-- content -->
	<div class="main-content" id="index_container">
		<ul class="aside-banner">
			<li class="js">
				<a href="#" target="_blank" class="aside-bannera">
					<i></i>
					<h2 class="left">
						<p class="font-size5 font3 ">快速找房</p>
						<p class="font-size2">最快速度找到你喜欢的房型</p>
					</h2>
					<span class="line"></span>
				</a>
			</li>
			<li class="xs">
				<a href="#" target="_blank" class="aside-bannera">
					<i></i>
					<h2 class="left">
						<p class="font-size5 font3 ">价格透明</p>
						<p class="font-size2">全网价格公开</p>
					</h2>
					<span class="line"></span>
				</a>
			</li>
			<li class="quality">
				<a href="" target="_blank" class="aside-bannera">
					<i></i>
					<h2 class="left">
						<p class="font-size5 font3 ">安全保障</p>
						<p class="font-size2">所有房源正规</p>
					</h2>
					<span class="line"></span>
				</a>
			</li>
			
			<li class="back">
				<a href="" target="_blank" class="aside-bannera">
					<i></i>
					<h2 class="left">
						<p class="font-size5 font3 ">轻松租房</p>
						<p class="font-size2">不再通过三方协议，轻松租房</p>
					</h2>
					<span class="line"></span>
				</a>
			</li>
			<li class="linebuy">
				<a href="" target="_blank" class="aside-bannera">
					<i></i>
					<h2 class="left ">
						<p class="font-size5 font3 ">更多选择</p>
						<p class="font-size2">万千房源，等你来挑选</p>
					</h2>
				</a>
			</li>
		</ul>
		
            <!----------------------------第一部分------------------------>
		
										<section class="u-star">
			<div class="ustar-box">
			  <div class="ustar-p">
			    	<p class="left">
			    		<em class="dib font-size2 font-white ulabel-c7">最热房源</em>
		    	  </p>
			    	
			    </div>
                 <?php
  mysql_connect("localhost","root","root");
	 mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_index");
  $res=mysql_fetch_array($sql);
    
  ?>
			    <div class="ustar-list">
			    	<div class="slider-container star">
		     	  	   <div class="list1 left">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
		     	  	   		<a href="house.php?id=<?php echo $house_id ?>" class="dib" target="_blank">
		     	  	   			<img class="slider-img1" src="Picture/<?php echo $info1['img'];?>" alt="" title="精装三室一厅，性价比超高！快来围观吧"/>
		     	  	   		</a>
	     	  	   	  </div>
		     	  	   <div class="list2 left">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+1");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
						    <a target="_blank" href="house.php?id=<?php echo $house_id ?>" class="block ustar-wa">
								<img src="Picture/<?php echo $info1['img'];?>" alt="" title="简洁大气公寓，上班的你一定会喜欢的"/>
						    </a>
									     	  	   	   
		     	  	   	   <p class="dib-wrap">
                            <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+2");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
		     	  	   	   	<a target="_blank" href="house.php?id=<?php echo $house_id;?>" class="dib ustar-wh">
		     	  	   	   			<img src="Picture/<?php  echo $info1['img'];?>" alt="" title="地中海风格，独特，浪漫，诗意般的生活"/>
		     	  	   	    </a>
                             <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+3");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
		     	  	   	   	<a target="_blank" href="house.php?id=<?php echo $house_id;?>" class="dib ustar-wh" style="margin-left:20px;">
		     	  	   	   	   		<img src="Picture/<?php echo $info1['img']; ?>" alt=""  title="一室一厅，带阁楼，给你不一样的感受，更加适合刚毕业的你哟"/> 
		     	  	   	   	</a>
	     	  	   	     </p>
		     	  	   </div>
		     	  	   <div class="list1 left">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+4");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
						    <a target="_blank" href="house.php?id=<?php echo $house_id;?>" class="block ustar-wh" style="margin-top:0px;">
						  	<img class="margin0" src="Picture/<?php echo $info1['img'];?>" alt="" title="暖色调为主的精装小公寓，寻找家的感觉"/>
						   </a>
                            <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+5");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
						   <a target="_blank" href="house.php?id=<?php echo $house_id;?>" class="block ustar-wh">
		     	  	   	  	<img src="Picture/<?php echo $info1['img'];?>" alt="" title="温馨主题的公寓，内有榻榻米，在某个阳光明媚的午后，享受这美好的时光吧"/>
		     	  	   	   </a>
	     	  	      </div>
	     	  	  </div>
	     	  </div>
			</div>
		</section>
				
                <!----------------------------第二部分------------------------>
                				
			<section class="unew">
			<div class="unew-box">
				<div class="unew-h1">
					<p class="left">
						<em class="dib font-size2 font-white ulabel-c8">特价优惠专区</em>
		     	  </p>
			     				     	<p class="right">
			     		<a href="#" class="inline-block iconi prev disable" data-category="2"><i class="icon-iconfont-arrowleft"></i></a>
			     	  	<a href="#" class="inline-block iconi next"  data-category="2"><i class="icon-iconfont-arrow2"></i></a>
			     	</p>
			  </div>
				<div class="list-content unew-list">
					<ul class="slider-container">
							<li class="unew-li">
                             <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+6");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">                                
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?> 精装
				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>
		     	       	<li class="unew-li">
                         <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+7");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img']?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?> 

                                 	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>
                        <li class="unew-li">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+8");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img']?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?> 
				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>
                        <li class="unew-li">
                         <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+9");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img']?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?>
				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>				   	   					   				                                	     	
                </ul>
				</div>
			</div>
		</section>
				
						<!----------------------------第三部分------------------------>				
                                        
                                        
           <section class="unew">
			<div class="unew-box">
				<div class="unew-h1">
					<p class="left">
						<em class="dib font-size2 font-white ulabel-c1">最新上新</em>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>住宅</span></a>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>商铺</span></a>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>写字楼</span></a>
				     	  	 				     	 				     	<a target="_blank" class="forMore" href="/list?c1=155">查看更多&gt;&gt;</a>
				  </p>
				</div>
				<div class="list-content unew-list">
					<ul class="slider-container">
			     		<li class="unew-li">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+10");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   	<?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>				   	   					 
		     	  		<li class="unew-li">
                          <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+11");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	      <?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>				   			     	  				     	  						
		     	  		<li class="unew-li">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+12");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   	<?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>				   	
                        
                        <li class="unew-li">
                        <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+13");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div>  
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>				   			     	  							
	     	  	  </ul>
		     	</div>
			</div>
		</section>
        
                       <!----------------------------第四部分------------------------>
        
					<section class="unew">
			<div class="unew-box">
				<div class="unew-h1">
					<p class="left">
						<em class="dib font-size2 font-white ulabel-c2">风格分类</em>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>简洁</span></a>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>奢华</span></a>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>小清醒</span></a>
				     	  	 						<a target="_blank" class="dib font-size0 lits" href="#"><span>温暖</span></a>
				     	  	 				     	 				     	<a target="_blank" class="forMore" href="/list?c1=229">查看更多&gt;&gt;</a>
				  </p>
				</div>
				<div class="list-content unew-list">
					<ul class="slider-container">
                    
			     				     	  							
                                                                    
                                                                   <li class="unew-li">
                                  <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+14");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   	<?php echo $info1['name'];?>
				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>		
		     	  				     	  							
                                                                    
                                                                   
                                                                    <li class="unew-li">
                                    <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+15");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   		<?php echo $info1['name'];?>
				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8">	<?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3">	<?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3">	<?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span>	<?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>		
		     	  				     	  							
                                                                    
                                                                    
                                                                    
                                                                   <li class="unew-li">
                                     <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+16");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div>  
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   	<?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>     
                        
                         <li class="unew-li">
                                   <?php 
								        mysql_query("SET NAMES 'utf8'"); 
										$sql2=mysql_query("select * from tb_index where id='".$res['id']."'+17");
										$info2=mysql_fetch_array($sql2);
										$house_id = $info2['ino'];
										$sql1=mysql_query("select * from house where id='".$house_id."'");
										$info1=mysql_fetch_array($sql1);
									?>
								<a target="_blank" class="unewli-box" href="house.php?id=<?php echo $house_id;?>" title="">
									<div class="unewli-img"><img src="Picture/<?php echo $info1['img'];?>" /></div> 
				     	       	   	<h2 class="font-ublack font-title">
				     	       	   	<?php echo $info1['name'];?>

				     	       	   	</h2>
				     	       	   	<p class="price-box">
				     	       	   					     	       	   	  	<span class="font-size2 font-ufblack">月租</span>
				     	       	   	  	<span class="font-red font-size3">￥</span>
				     	       	   	  	<span class="font-red font-size8"><?php echo $info1['price'];?></span>
				     	       	   	  	<span class="font-size0 font3"><?php echo $info1['struct'];?></span>
				     	       	   	  	<span class="font-size2 font3"><?php echo $info1['area'];?></span>
										</span>													     	       	   	</p>
				     	       	   	<p class="font3 font-size2 font-title" style="padding-top:0px;">
				     	       	   	  	<span>地址：</span>
				     	       	   	  	<span><?php echo $info1['address'];?></span>
  				     	       	   	</p>
				     	       </a>
		     	   		</li>		
		     	  				     	  							
                                                                             
	     	  	  </ul>
		     	</div>
			</div>
		</section>
				
         <!----------------------------脚部------------------------>       
                
	</div>
	<!-- end content -->
	<!-- footer -->
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
		<p><strong>888-888-888</strong>
			</br>周一至周日9：00-22：00</p>
	</li>
</ul>			<div class="ft-copyright">
		
		<div class="footer-info" >
            <p>地址：电子科技大学成都学院 百叶路一号  计算机系  Copyright by J1701046工作室</p>
	  </div>
	</div>
		</div>
	</footer>
    <!-------------------图片滚动js--------------------->
	<script src="Scripts/jquery-1.11.1.min.js"></script>
	<script src="Scripts/jquery.hoverdir.js"></script>
	<script src="Scripts/app.js"></script>
</body>
</html>

