<?php
header("Content-type: text/html; charset=utf-8");
error_reporting( E_ALL & ~E_NOTICE& ~E_DEPRECATED & ~E_WARNING );//消除警告，优化界面
session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="css_extent/bootstrap.css">
		<link rel="stylesheet" href="Css/reset.css">
		<link rel="stylesheet" href="Css/footer.css">
        <link rel="stylesheet" href="Css/header.css">
        <link rel="stylesheet" href="Css/header_banner.css">
    <title>house</title>
    <style>
      .right_box input, .right_box textarea{
		  border:none}
	  .y{
		  font-size:14px;
		  font-weight:bold;}
	  .left_box{
		  position:relative;
		  left:-40px;}
	  .text-danger{
		  color:#E60012}
	  .thumbnails img{
		  width:110px;
		  height:76px;
		  }
		 
    </style>
</head>
   
<body>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
        
    <form name="form1" method="post" action="">
    <?php
				  mysql_connect("localhost","root","root");
				  include("Connections/conn.php");
				  mysql_select_db('rent',$conn);
				  $sql1=mysql_query(" select * from tb_index where id='".$_GET['id']."'");
				  $in1=mysql_fetch_array($sql1);
				  $ino=$in1['ino'];//得到主页表中该房子的id号用ino来表示
				  $sql=mysql_query(" select * from house where id=$ino");
				  $info=mysql_fetch_array($sql);
				  $no=$info['no'];
				  $mno=$info['mno'];//从房子表中得到房东号
				  $sq=mysql_query(" select * from tb_mzhuce where id=$mno");
				  $result=mysql_fetch_array($sq);
				  $muser=$result['name'];//3房东姓名，从房东表中得到房东姓名和电话号码
				  $s=mysql_query("select * from tb_reader where name='".$_SESSION["user"]."'");   //查询当前用户数据表中的信息，获取用户名和电话号码
					$in=mysql_fetch_array($s);   //从结果集中获取信息
					$name=$in['name'];//1用户名
					$tel=$in['tel'];//2用户电话
					  do{
	  ?>
       <div class="container">
          <div class="row">
          <div class="col-xs-6 left_box">
                <div class="gallery">
	<div class="main-image">
		<img src="Picture/house_details/<?php echo $info['details1']?>" alt="Placeholder" class="custom">
	</div>
	
	<ul class="thumbnails">
		<li><a href="Picture/house_details/<?php echo $info['details1']?>"><img src="Picture/house_details/<?php echo $info['details1']?>" alt=""></a></li>
		<li><a href="Picture/house_details/<?php echo $info['details2']?>"><img src="Picture/house_details/<?php echo $info['details2']?>" alt=""></a></li>
		<li><a href="Picture/house_details/<?php echo $info['details3']?>"><img src="Picture/house_details/<?php echo $info['details3']?>" alt=""></a></li>
		<li><a href="Picture/house_details/<?php echo $info['details4']?>"><img src="Picture/house_details/<?php echo $info['details4']?>" alt=""></a></li>
		<li><a href="Picture/house_details/<?php echo $info['details5']?>"><img src="Picture/house_details/<?php echo $info['details5']?>" alt=""></a></li>
	</ul>
</div>
          </div>
          <div class="col-xs-6 right_box">
       <table height="455" border="0" cellspacing="10" class="table" style="width:654px">
             <tr>
              <td bgcolor="#FFFFFF" style="font-size:16px; font-weight:bold;"><span class="y">
                <input name="name" type="text" id="name" value="<?php echo $info['name'];?>" maxlength="2" height="50px" style="font-size:20px; font-weight:bold;" readonly>
              </span></td>
            </tr>
              <tr>
              <td bgcolor="#FFFFFF" class="y"><span class="y">编号：
                <input name="no" type="text" id="no" value="<?php echo $info['no'];?>" style="font-weight:bold;" readonly>
                </td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="y"><span class="y">租金：    
                  <input name="price" type="text" id="price"value="<?php echo $info['price'];?>" style="font-family: ArialMT;
font-size: 22px;
color: #E60012;
line-height: 36px;" readonly>
              </span></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="y"<span class="y">地址：    
                  <input name="address" type="text" id="address"value="<?php echo $info['address'];?>" style="font-weight:bold; width:200px;" readonly>
              </span></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="y">类型：
                <label for="type">
                  <input name="type" type="text" id="type"value="<?php echo $info['type'];?>" style="font-weight:bold;" readonly>
                </label></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="y">请填写您的联系电话：
              <input name="tel" type="text" id="tel" value="<?php echo $tel;?>" style="font-weight:bold; border:1px solid #999; height:20px" required></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="y">备注：
              <input name="word" type="text" id="word"value="" style="font-weight:bold; border:1px solid #999; width:400px; height:30px"></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#FFFFFF">
              <div class="dib-wrap">
							<button id="submit"  name="submit" class="login-btn  btn dib">
							预&nbsp;&nbsp;&nbsp;&nbsp;约
							</button>
				</div>
              </td>
            </tr>
          </table>
	
	    
          </div>
          </div>
          <div class="row" style="margin-top:20px;position:relative;left:-30px;">
              <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">详情</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">询问房东</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">房东信息</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" style="background-color:#fff; margin-top:30px" id="home">
    <div class="row" style="margin-left:20px;">
      <table class="table" style="width:95%;">
      <caption class="h4" style="border-bottom:2px solid #00CBE5">详细参数</caption>
         <tr>
          <td><span class="h5">home编号：</span><?php echo $info['no'];?></td>
         </tr>
         <tr><td><span class="h5">小区名称:</span><?php echo $info['name'];?></td></tr>
         <tr><td><span class="h5">户型：</span><?php echo $info['struct'];?></td></tr>
         <tr><td><span class="h5">面积：</span><?php echo $info['area'];?></td></tr>
         <tr><td><span class="h5">地址：</span><?php echo $info['address'];?></td></tr>
         <tr><td><span class="h5">出租类型：</span><?php echo $info['rentType'];?></td></tr>
         <tr><td><span class="h5">房屋类型：</span><?php echo $info['type'];?></td></tr>
      </table>
      <table class="table" style="width:95%">
        <caption class="h4" style="border-bottom:2px solid #00CBE5">简介</caption>
        <tr>
        <td>
        <?php echo $info['introduce']?>
         </td>
         </tr>
      </table>
      <table class="table" style="width:95%">
         <caption class="h4" style="border-bottom:2px solid #00CBE5">细节图展示</caption>
         <tr><td><img src="Picture/house_details/<?php echo $info['details1']?>" alt=""></td></tr>
         <tr><td><img src="Picture/house_details/<?php echo $info['details2']?>" alt=""></td></tr>
         <tr><td><img src="Picture/house_details/<?php echo $info['details3']?>" alt=""></td></tr>
         <tr><td><img src="Picture/house_details/<?php echo $info['details4']?>" alt=""></td></tr>
         <tr><td><img src="Picture/house_details/<?php echo $info['details5']?>" alt=""></td></tr>
      </table>
    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile" style="background-color:#fff; margin-top:30px">
     <div class="row" style="margin-left:20px;">
     <table class="table" style="width:95%;">
     <tr><td style="height:60px;line-height:60px;position:relative;"><img src="Picture/house_details/581411f516a7aa9e416c711543c89d20.png"/ style="width:50px;height:50px;position:absolute;top:10px"><textarea name="question" placeholder="向房东询问一些具体情况，可以有助我们找到更适合自己的房子哦" style="    width: 730px;
    height: 100px;
    margin-left: 70px;">向房东询问一些具体情况，可以有助我们找到更适合自已的房子</textarea><input type="submit" name="wen" id="wen" value="提交" class="btn btn-info" style="margin-left:10px;position:absolute;top:66px;"></td></tr>
   <?php 
       if(isset($_POST['wen'])==true){
		   $question=$_POST['question']; //1问题
		   $user=$_SESSION['user'];     //2当前用户姓名
		   $muser=$result['name'];     //3当前房子房东姓名
		   $date=date('Y-m-d',time());//4留言时间
		   $no=$_POST['no'];        //5当前房子编号
		   $query=mysql_query("insert into tb_word(no,user,muser,question,date)values('".$_POST['no']."','".$_SESSION['user']."','".$result['name']."','".$_POST['question']."','".date('Y-m-d',time())."')");
		   if($query==true){
			echo "<script> alert('留言成功');window.location.href='#';</script>";
		}
	    else{
		     echo "<script>alert('留言失败!!');history.back()</script>";
	          }

		   }
		?>
        <?php 
           include("Connections/conn.php");
			  mysql_select_db('rent',$conn);
			  $sql2=mysql_query(" select * from tb_word where no='$no'");
			  $wen=mysql_fetch_array($sql2);
	  do{
		  ?>
            <?php if($wen['question']){?>
			<tr>
          <td>
           <img src="Images/title2.png" style="widows:50px;height:50px;"/>
           <span style="margin-left:30px;"><?php  echo $wen['question'];?></span>
          </td>
        </tr>
			<?php }?>
        <?php if($wen['reply']){?>
        <tr>
          <td>
           <img src="Images/title.png" style="widows:50px;height:50px; margin-left:30px"/>
           <span style="margin-left:30px;"><?php echo $wen['reply'];?></span>
          </td>
        </tr>
        <?php }?>
        
         <?php
      }while( $wen=mysql_fetch_array($sql2));
     ?>
     </table>
     </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <div class="row" style="margin-left:20px;">
        <table class="table" style="width:95%;">
        <caption class="h4" style="border-bottom:2px solid #00CBE5">房东个人情况</caption>
          <tr><td>房东姓名：<?php echo $muser?></td></tr>
          <tr><td>房东性别：<?php echo  $result['sex']?></td></tr>
          <tr><td>房东联系方式：<?php echo $result['tel']?></td></tr>
          <tr><td>房东邮箱：<?php echo $result['email']?></td></tr>
          <tr><td>房东地址：<?php echo $result['address']?></td></tr>
        </table>
     </div>
      </div>
  </div>

</div>
    <?php
      }while($info=mysql_fetch_array($sql));
     ?>
          </div>
       </div> 
    </form>
    <p>&nbsp;</p>
        
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
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/jquery.simpleGal.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function () {
	$('.thumbnails').simpleGal({
		mainImage: '.custom'
	});
});
</script>
 
</body>
</html>
<?php 
include("Connections/conn.php");
if(isset($_POST['submit'])==true){
	if($_SESSION['muser']!=null){
		echo "<script>alert('房东用户不能租房哦，请注册或登录普通用户来租房吧');window.location.href='login.php';</script>";
		}else{
			if($_SESSION['user']!=null){         //用户需在登录后才能预约租房	
		 mysql_connect("localhost","root","root");
  include("Connections/conn.php");
	$muser=$result['name'];//3房东姓名
	$date=date('Y-m-d',time());	//4获取当前交易时间
	$name=$_POST['name'];//5名称
	$no=$_POST['no'];//6编号
	$price=$_POST['price'];//7价格
	$type=$_POST['type'];//8类型
	$word=$_POST['word'];//9留言
	$mtel=$_POST['mtel'];//10电话号码
	$query=mysql_query("insert into tb_booking(no,name,type,price,muser,mtel,user,tel,word,date)values('".$_POST['no']."','".$_POST['name']."','".$_POST['type']."','".$_POST['price']."','".$result['name']."','".$result['tel']."','".$in['name']."','".$_POST['tel']."','".$_POST['word']."','".date('Y-m-d',time())."')");
			if($query==true){
				echo "<script> alert('预约成功');window.location.href='index.php';</script>";
			}
			else{
				 echo "<script>alert('预约失败!!');history.back()</script>";
				  }
		}else{
	echo "<script>alert('登录后才能预约租房，亲爱的，登录后再来吧！');window.location.href='login.php';</script>";
}
		
			}
	
}
?>
       

