<?php session_start();
error_reporting( E_ALL & ~E_NOTICE );

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>推荐</title>
<link rel="stylesheet" href="Css/header.css">
<link rel="stylesheet" href="Css/footer.css">
<link rel="stylesheet" href="Css/reset.css">
<script src="Scripts/jquery-1.11.1.min.js"></script>
<script src="Scripts/jquery.lazyload.min.js"></script>
<style>
	section *{box-sizing:border-box;-moz-box-sizing:border-box; /* Firefox */}
body,td,th {
	font-family: arial, \5FAE\8F6F\96C5\9ED1, "Hiragino Sans GB", Verdana;
}
img{
	width:250px;
	height:250px;}
	.line img{
		
		width:383px;
		height:7px;}
</style>
</head>
<body>
<div class="head-top">
  <div class="head-wrap">
    <p class="head-top-left">
        <span>欢迎来到home租房，寻找家的温暖</span>
       <a href="index.php"></a></p>
    <ul class="head-top-right">
            <li class="list-item"><a href="" rel="nofollow" class="grade-one" style="display:inline"><?php
			if($_SESSION['user']!=null||$_SESSION['muser']){
				echo $_SESSION['user'];
				echo $_SESSION['muser'];
				 }
			else
			 {
			 echo '<a href="login.php">【请登录】</a>';
			 }?></a></li>
      <li class="list-item"><a href="zhuce.php"  rel="nofollow" class="grade-one" style="padding-right: 5px"> 【免费注册】</a></li>
      <input type="hidden" name="_csrf" id="_csrf" value="b3c33d40-5de3-4ab7-a0dd-abef38a8626a" />
            <li class="vertical-line"></li>
      <li class="list-item top-hover-box">
        <a href="" class="top-hover-link grade-one">您是房东</a>
          <ul class="top-hover">
            <li class=""><a href="mlogin.php" rel="nofollow">房东登录</a></li>
            <li class=""><a href="mzhuce.html" rel="nofollow">房东注册</a></li>
            <li class=""><a href="landlord/index.php" rel="nofollow">房东主页</a></li>
          </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="list-item top-hover-box">
        <a href="" class="top-hover-link grade-one">我的</a>
          <ul class="top-hover">
            <li class=""><a href="mine/index.php" rel="nofollow">我的主页</a></li>
            <li class=""><a href="mine/index.php?a=房产预约登记" rel="nofollow">我的订单</a></li>
          </ul>
      </li>
      <li class="vertical-line"></li>
      <li class="list-item top-hover-box"><a href="managerlogin.php" rel="nofollow" class="top-hover-link grade-one">管理员登录</a>
      </li>
    </ul>
  </div>
</div>


<div class="header-search dib-wrap">
	<a class="ulogo left" href="/"></a>
	<div class="search-box left dib">
		<input type="text" placeholder="搜索您需要的商品" class="dib" id="searchTxtId" name="q" value="">
		<button class="dib" id="keyWordSearchId">
			搜索
		</button>
	</div>
</div>


<section>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
				<style>
		*{margin: 0;padding:0;}
		ul li{
			list-style: none;
		}
		html{
			font-family: "微软雅黑";
		}
		a{
			text-decoration: none;
			color:#333;
		}		
        .top-qq{padding: 0 6px!important;}
		.com_main{
		     background-color: #38d6f4;
		     padding-bottom: 1%;
		     padding-top:1%;		    
		}		
		.main_div{
			width:24%;
			float:left;
			background-color: #fff;
			margin-right: 1%;
			margin-bottom: 1%;	
			overflow: hidden;	
			position: relative;	
		}				
		.price{
			font-size: 24px;
		}		
		.com_list{
			width:1000px;
			margin: 0 auto;			
			background-color:rgba(252,252,252,0.2);
			padding-left: 10px;
			padding-top:10px;
		}		
	    .title_img{		   	
	   		display: block;		   
	    }		   
		.cover_a{
		  	padding: 10px;	 
		  	display: block;
		}
	  	.cover_a img{
		    width: 220px;
		  	height:220px;
		  	overflow: hidden;
		  	display: block;
		  	margin: 0 auto;
	  	}
		dl{
		    padding: 2%;		    
		}		
		dt{
			line-height: 22px;
			height:22px;
			overflow:hidden;
			text-overflow:ellipsis;            
            white-space:nowrap;
            text-align: center; 
            font-size: 14px;  

            font-weight:bold;
		}
		dd{
			line-height: 22px;
			height:22px;
			font-size: 0.9rem;
			overflow:hidden;
			text-overflow:ellipsis;            
            white-space:nowrap;
			padding:0 10px;
            font-size:12px;
            text-align: center;
            color:#ef004f;
		}
		dd span{
			font-size:1.2rem;
			font-weight: bold;
		}
     	.ft-mobile strong{font-size:20px!important;}
		.click_a{
			background-color: #fc6103;
			color: #fff;
			font-size: 1rem;
			text-align: center;
			line-height: 35px;
			height: 35px;
            display:block;
            width:55%;
            margin:0 auto;
            border-radius: 5px;
            margin-top:5px;
		}								
		.clearfix{
			overflow: hidden;
			clear: both;
		}		
		.descript_p{
			text-align: center;
			height:12px;
			line-height:12px;         
			margin-top: 6px;        
			overflow:hidden;
			text-overflow:ellipsis;            
            white-space:nowrap;
            font-size: 14px;  
            font-weight:bold;
		}
		.title_div1{
			width:1010px;
			margin:0 auto;
			margin-bottom:25px;
		}	     		
		.template_top{
			width:100%;
			background: #38d6f4;
		}
		.template_top_img{
			display: block;
			width:100%;
			height:360px;
		}
		.sider_bar {
			z-index: 20; 
			position: fixed; 
			display: none; 
			top: 489px;			
		}
		.title_cover{
			width:1000px;
			text-align: center;
			overflow: hidden;
			margin:0 auto;
			margin-bottom:16px;
		}
		.line{
			margin-top:6px;
			width:381px;			
			float: left;
		}
		.title_word{
			width:200px;
			text-align: center;
			float: left;
			font-size:20px;
			/*font-weight:bold;*/
			font-family: "微软雅黑";
			border-radius: 18px;
			background: #fff;
			color:#38d6f4;
			margin:0 19px;
            height: 30px;
            line-height: 30px;
		}
		.line1{
			width:148px;
			height:50px;
			border:1px solid #eee;
			float: left;
		}
		.ad_img{
			background:#fdf1db;
			width:100%;
			height:150px;
			text-align: center;
		}
		.ad_img img{
			width:1010px;
			margin:0 auto;
			height:150px;
		}
		.color{
			color:#fff!important;
		}		
		.bottom_img{
			display: block;
			width: 100%;
			height:34px;
			/*position: absolute;*/
			z-index: -100;
		}
		.bottom_img img{
			display: block;
		}		
		.up{
			-webkit-animation: gelatine 0.5s 1;
		    animation: gelatine 0.5s 1;
		    opacity: 0.9;
		}
		@-webkit-keyframes gelatine {
			  25% {
	        -webkit-transform: translateY(8px);
		    }
		    50%, 100% {
		        -webkit-transform: translateY(0);
		    }
		    75% {
		        -webkit-transform: translateY(-8px);
		    }
		}
		.down{
			-webkit-animation: bounceDown 0.5s 1;
		    animation: bounceDown 0.5s 1;
		}
	
		@-webkit-keyframes bounceDown {
		    25% {
		        -webkit-transform: translateY(-4px);
		    }
		    50%, 100% {
		        -webkit-transform: translateY(0);
		    }
		    75% {
		        -webkit-transform: translateY(4px);
		    }
		}
		.main_cover{
			z-index: 100;
			position: absolute;
			top:0;
			left:0;
right:0;
		}
		</style>
		
	</head>
	<body>	
      <?php
    mysql_connect("localhost","root","root");
    mysql_query("SET NAMES 'uf8'"); 
    include("Connections/conn.php");
    mysql_select_db("rent",$conn);
     $sql=mysql_query("select * from tb_recommend");
     $res=mysql_fetch_array($sql);
    
  ?>   	
	    <div class="template_top">
	    	<img src="Picture/temai-top.png" class="template_top_img">
	    </div>	       
		<div class="com_main">
			<p class="title_cover">
				<span class="line"><img src="Picture/line-left.jpg"></span>
				<span class="title_word">最新上新，等你来选</span>
				<span class="line"><img src="Picture/line-right.jpg"></span>
			</p>	
            
            
            	
			<div class="com_list clearfix">		
            		
			<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>
 "> <?php echo $info1['name'];?>
</dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                	<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+1");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name']?>"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                												
						<div class="main_div">
			<div class="main_cover">
						     <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+2");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
</dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>									
								
																
						<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+3");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
 "/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>
 "> <?php echo $info1['name'];?>
</dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                                
                                
                                								
									<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+4");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
 "/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                                
                                	<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+5");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title=" <?php echo $info1['name'];?>
 "/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?> </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                                								
								
                                	<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+6");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title=" <?php echo $info1['name'];?>
 "/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                                				
															
						<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+7");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                                
     								
					
		<div class="com_main">
			<p class="title_cover">
				<span class="line"><img src="Picture/line-left.jpg"></span>
				<span class="title_word">性价比很重要</span>
				<span class="line"><img src="Picture/line-right.jpg"></span>
			</p>		
			<div class="com_list clearfix">				
							        				<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+8");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                
                				
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+9");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+10");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                						
							<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+11");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+12");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
                            <div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+13");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "><?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>			
																
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+14");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+15");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                
         
                        
                        
		<div class="com_main">
			<p class="title_cover">
				<span class="line"><img src="Picture/line-left.jpg"></span>
				<span class="title_word">交通便利，更适合上班的你</span>
				<span class="line"><img src="Picture/line-right.jpg"></span>
			</p>
			<div class="com_list clearfix">								  				     
							        				
                                                    <div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+16");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                
                				
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+17");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+18");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                						
							<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+19");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+20");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
                            <div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+21");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>			
																
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+22");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+23");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">

							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                                                    
                                                    
		<div class="com_main">
			<p class="title_cover">
				<span class="line"><img src="Picture/line-left.jpg"></span>
				<span class="title_word">其他</span>
				<span class="line"><img src="Picture/line-right.jpg"></span>
			</p>
			<div class="com_list clearfix">								  				     
							        				
           <div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+24");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
                        
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span>778</span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                
                				
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+25");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+26");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                						
							<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+27");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+28");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                			
                            <div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+29");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>			
																
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+30");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino']; 
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
                
                							
								<div class="main_div">
			<div class="main_cover">
						 <?php       
						            $sql2=mysql_query("select * from tb_recommend where id='".$res['id']."'+31");
									$info2=mysql_fetch_array($sql2);
									$house_id = $info2['ino'];
									$sql1=mysql_query("select * from house where id='".$house_id."'");
                                    $info1=mysql_fetch_array($sql1);
									?>
						<a href="house.php?id=<?php echo $house_id;?>">
							<img class="lazy" src="Picture/<?php echo $info1['img'];?>" alt="" title="<?php echo $info1['name'];?>
"/>
						</a>
							<dl>
								<dt title="<?php echo $info1['name'];?>

 "> <?php echo $info1['name'];?>
 </dt>							
								<dd>月供：￥<span><?php echo $info1['price'];?></span>起</dd>
							</dl>
						</a>					
					</div>	
					<div style="height:345.5px;"></div>
					<div class="bottom_img">
						<img src="Picture/bottom-p.jpg">
					</div>
				</div>	
              
	</body>
	<script>
$(function(){
	$(".main_div").each(function(){
		var main_cover=$(this).find(".main_cover");
		var bottom_img=$(this).find(".bottom_img img");
		$(this).mouseover(function(){
			main_cover.addClass("up");
			bottom_img.addClass("down")
		})
		$(this).mouseout(function(){
			main_cover.removeClass("up");
			bottom_img.removeClass("down")
		})
	})
})
$("img.lazy").lazyload({ 
    event : "scroll"
});
	</script>
</html>



</section>
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
            <p>地址：电子科技大学成都学院 百叶路一号 计算机系 软件技术 三班 Copyright 501集团</p>
		</div>
	</div>
		</div>
	</footer>
<script type="text/javascript">
	var docByid = function(o){
		return document.getElementById(o);
	}
	if(docByid('logout')){
		docByid('logout').onclick = function(){
			docByid('form-logout').submit();
		}
	}
</script>
        </div>
    </footer>

</body>
</html>
