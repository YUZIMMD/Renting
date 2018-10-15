<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$img  =trim($_POST['data']);
$obj  = json_decode($img,TRUE);
include("../Connections/conn.php");
mysql_select_db("rent",$conn);
mysql_query("SET NAMES 'utf8'"); 
$sql="update tb_mzhuce set name='".$obj['name']."',tel='".$obj['tel']."' , email='".$obj['email']."' , sex='".$obj['sex']."', vocation='".$obj['vocation']."' , paperNO='".$obj['paperNO']."' ,paperType='".$obj['paperType']."' , remark='".$obj['remark']."' , birthday='".$obj['birthday']."' where name= '".$_SESSION['muser']."'";
	$result=mysql_query($sql);
	if($result){
		$return_data=1;
		
		}
		else{
			$return_data=0;
			}
echo ($return_data)? '修改成功':'修改失败';
?>