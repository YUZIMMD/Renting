<?php
error_reporting( E_ALL & ~E_NOTICE );
header("Content-type: text/html; charset=utf-8"); 
$allowExt=array('jpeg','jpg','png','gif');//允许上传的类型
//$_FILES文件上传变量;
$fileName = $_FILES['myFile']['name'];//上传文件的名称
$type = $_FILES['myFile']['type'];//上传文件的类型
$tmp_name=$_FILES['myFile']['tmp_name'];//临时文件
$size = $_FILES['myFile']['size'];//文件的大小
$error = $_FILES['myFile']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error==UPLOAD_ERR_OK){
	
	$ext=pathinfo($fileName,PATHINFO_EXTENSION);
	if(!in_array($ext,$allowExt)){
		exit('非法文件类型');
	}
	$path='../Picture';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path)){
		mkdir($path,0777,true);
		chmod($path,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName=md5(uniqid(microtime(true),true)).'.'.$ext;
	move_uploaded_file($tmp_name, $path.'/'.$uniName);
}else{
	//匹配错误信息
	switch($error){
		case 1:
			echo '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '文件部分被上传';
			break;
		case 6:
			echo '没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}
//第一个细节图
$fileName1 = $_FILES['house_details1']['name'];//上传文件的名称
$type1 = $_FILES['house_details1']['type'];//上传文件的类型
$tmp_name1=$_FILES['house_details1']['tmp_name'];//临时文件
$size1 = $_FILES['house_details1']['size'];//文件的大小
$error1 = $_FILES['house_details1']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error1==UPLOAD_ERR_OK){
	
	$ext1=pathinfo($fileName1,PATHINFO_EXTENSION);
	if(!in_array($ext1,$allowExt)){
		exit('非法文件类型');
	}
	$path1='../Picture/house_details';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path1)){
		mkdir($path1,0777,true);
		chmod($path1,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName1=md5(uniqid(microtime(true),true)).'.'.$ext1;
	move_uploaded_file($tmp_name1, $path1.'/'.$uniName1);
}else{
	//匹配错误信息
	switch($error1){
		case 1:
			echo '细节图1上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '细节图1超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '细节图1文件部分被上传';
			break;
		case 6:
			echo '细节图1没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}
//第二个细节图
$fileName2 = $_FILES['house_details2']['name'];//上传文件的名称
$type2 = $_FILES['house_details2']['type'];//上传文件的类型
$tmp_name2=$_FILES['house_details2']['tmp_name'];//临时文件
$size2 = $_FILES['house_details2']['size'];//文件的大小
$error2 = $_FILES['house_details2']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error2==UPLOAD_ERR_OK){
	
	$ext2=pathinfo($fileName2,PATHINFO_EXTENSION);
	if(!in_array($ext2,$allowExt)){
		exit('非法文件类型');
	}
	$path2='../Picture/house_details';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path2)){
		mkdir($path2,0777,true);
		chmod($path2,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName2=md5(uniqid(microtime(true),true)).'.'.$ext2;
	move_uploaded_file($tmp_name2, $path2.'/'.$uniName2);
}else{
	//匹配错误信息
	switch($error2){
		case 1:
			echo '细节图2上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '细节图2超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '细节图2文件部分被上传';
			break;
		case 6:
			echo '细节图2没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}
//第三个细节图
$fileName3 = $_FILES['house_details3']['name'];//上传文件的名称
$type3 = $_FILES['house_details3']['type'];//上传文件的类型
$tmp_name3=$_FILES['house_details3']['tmp_name'];//临时文件
$size3 = $_FILES['house_details3']['size'];//文件的大小
$error3 = $_FILES['house_details3']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error3==UPLOAD_ERR_OK){
	
	$ext3=pathinfo($fileName3,PATHINFO_EXTENSION);
	if(!in_array($ext3,$allowExt)){
		exit('非法文件类型');
	}
	$path3='../Picture/house_details';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path3)){
		mkdir($path3,0777,true);
		chmod($path3,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName3=md5(uniqid(microtime(true),true)).'.'.$ext3;
	move_uploaded_file($tmp_name3, $path3.'/'.$uniName3);
}else{
	//匹配错误信息
	switch($error3){
		case 1:
			echo '细节图3上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '细节图3超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '细节图3文件部分被上传';
			break;
		case 6:
			echo '细节图3没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}
//第四个细节图
$fileName4 = $_FILES['house_details4']['name'];//上传文件的名称
$type4 = $_FILES['house_details4']['type'];//上传文件的类型
$tmp_name4 =$_FILES['house_details4']['tmp_name'];//临时文件
$size4 = $_FILES['house_details4']['size'];//文件的大小
$error4 = $_FILES['house_details4']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error4==UPLOAD_ERR_OK){
	
	$ext4=pathinfo($fileName4,PATHINFO_EXTENSION);
	if(!in_array($ext4,$allowExt)){
		exit('非法文件类型');
	}
	$path4='../Picture/house_details';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path4)){
		mkdir($path4,0777,true);
		chmod($path4,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName4=md5(uniqid(microtime(true),true)).'.'.$ext4;
	move_uploaded_file($tmp_name4, $path4.'/'.$uniName4);
}else{
	//匹配错误信息
	switch($error4){
		case 1:
			echo '细节图4上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '细节图4超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '细节图4文件部分被上传';
			break;
		case 6:
			echo '细节图4没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}
//第五个细节图
$fileName5 = $_FILES['house_details5']['name'];//上传文件的名称
$type5 = $_FILES['house_details5']['type'];//上传文件的类型
$tmp_name5=$_FILES['house_details5']['tmp_name'];//临时文件
$size5 = $_FILES['house_details5']['size'];//文件的大小
$error5 = $_FILES['house_details5']['error'];
//将服务器上的临时文件移动到指定目录下
//2.判断下错误号，只有为0或者是UPLOAD_ERR_OK，没有错误发生，上传成功
if($error5==UPLOAD_ERR_OK){
	
	$ext5=pathinfo($fileName5,PATHINFO_EXTENSION);
	if(!in_array($ext5,$allowExt)){
		exit('非法文件类型');
	}
	$path5='../Picture/house_details';//上传的图片保存在img这个文件中，img这个文件将与当前php文件位于同一级目录
	//如果img文件夹与当前php文件不在一个目录中，这里会有变化，使用相对路径
	if(!file_exists($path5)){
		mkdir($path5,0777,true);
		chmod($path5,0777);
	}
	//确保文件名唯一，防止重名产生覆盖
	$uniName5=md5(uniqid(microtime(true),true)).'.'.$ext5;
	move_uploaded_file($tmp_name5, $path5.'/'.$uniName5);
}else{
	//匹配错误信息
	switch($error5){
		case 1:
			echo '细节图5上传文件超过了PHP配置文件中upload_max_filesize选项的值';
			break;
		case 2:
			echo '细节图5超过了表单MAX_FILE_SIZE限制的大小';
			break;
		case 3:
			echo '细节图5文件部分被上传';
			break;
		case 6:
			echo '细节图5没有找到临时目录';
			break;
		case 7:
		case 8:
			echo '系统错误';
			break;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>

</html>
<?php
session_start();
  mysql_connect("localhost","root","root");
  include("../Connections/conn.php");
  mysql_select_db('rent',$conn);
  mysql_query("SET NAMES 'utf8'"); 
  $result=mysql_query("select * from tb_mzhuce where name='".$_SESSION["muser"]."'"); 
  $res = mysql_fetch_array($result);
  $mno=$res['id'];
  $time =  date('Y-m-d',time()); 
if(isset($_POST['Submit'])==true){
	$sql1="select * from house where no='".$_POST['no']."'";//找到表
	$result1 = mysql_query($sql1);//查询表，将所有的结果放入result中
	$result2 = mysql_fetch_array($result1);
	 //当没有修改图片时
  if($error==4){
	  $img = $result2['img'];
	  }else{
	  $img = $uniName;	  
	}
  if($error1==4){
      $details1 = $result2['details1'];
	  }else{
	  $details1 = $uniName1; 
		 }
  if($error2==4){
	  $details2 =$result2['details2'];  
	  }else{
	  $details2 = $uniName2;	  
	}
  if($error3==4){
	  $details3 =$result2['details3'];   
	  }else{
	  $details3 = $uniName3;	  
	}
  if($error4==4){
	  $details4 =$result2['details4']; 
	  }else{
	  $details4 = $uniName4;	  
	}
  if($error5==4){
	  $details5 =$result2['details5'];
	  }else{
	  $details5 = $uniName5;	  
	}
		$query=mysql_query("update house set no='".$_POST['no']."',name='".$_POST['name']."',price='".$_POST['price']."',type='".$_POST['type']."',img='".$img."',address='".$_POST['address']."',area='".$_POST['area']."',struct='".$_POST['struct']."',rentType='".$_POST['rentType']."',introduce='".$_POST['introduce']."',details1 = '".$details1."',details2 = '".$details2."',details3 = '".$details3."',details4 = '".$details4."',details5 = '".$details5."',status=0 ,uploadTime = '".$time."'where id='".$_GET['id']."'");
//向审批意见表中添加一条数据
$tableName = 'house';
$result1 = '待审核';
$advice = '待审核';
$query1=mysql_query("update tb_matters set result = '".$result1."', advice = '".$advice."' where formName = '".$tableName."'and no = '".$_POST['no']."'");
		if($query==true){
			echo "<script> alert('修改房源成功，等待管理员审核');window.location.href='index.php?a=房产管理';</script>";
		}
	    else{
		     echo "<script>alert('修改房源失败，请核对相关信息是否准确!!');history.back()</script>";
	          }	
}
?>