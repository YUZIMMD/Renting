<?php 
$img  =trim($_POST['data']);//去掉两端空格
$obj  = json_decode($img,TRUE);//对JSON 格式的字符串进行解码  得到一组数组
$name = $obj['name'];
$sex = $obj['sex'];
$pwd = $obj['pwd'];
$vocation = $obj['vocation'];
$birthday = $obj['birthday'];
$paperType = $obj['paperType'];
$paperNO = $obj['paperNO'];
$tel = $obj['tel'];
$email = $obj['email'];
$remark = $obj['remark'];
$address = $obj['address'];
mysql_connect("localhost","root","root");
include("Connections/conn.php");
 mysql_select_db("rent",$conn);
 mysql_query("SET NAMES 'utf8'"); 
    $sql="select * from tb_admin where muser='".$name."'";//找到表
	$result=mysql_query($sql);//查询表，将所有的结果放入result中
	$n=mysql_num_rows($result);//使用这个函数是不关心里面具体的值
	if($n==0){
		$query=mysql_query("insert into tb_mzhuce(name,sex,vocation,birthday,paperType,paperNO,tel,email,remark,pwd,address)values('".$name."','".$sex."','".$vocation."','".$birthday."','".$paperType."','".$paperNO."','".$tel."','".$email."','".$remark."','".$pwd."','".$address."')");
$query2=mysql_query("insert into tb_admin(muser,mpwd)values('".$name."','".$pwd."')");
		if($query==true){
			$arr = array ('code'=>0);
		}
	    else{
		     $arr = array ('code'=>1);
	          }
		}else{
			$arr = array ('code'=>2);
			}
echo ($arr)? json_encode($arr):'0';//对变量进行JSON编码;
?>