<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
</head>

<body>
<center>
<form id="form1" name="form1" method="post" action="">
  <table width="624" border="0" cellspacing="1">
    <tr align="center" bgcolor="#CCCCCC">
      <td width="192">主页区</td>
      <td width="212">房子编号</td>
      <td width="212">替换新房源在主页</td>
    </tr>
    <tr align="center">
      <td><table width="177" border="0" cellspacing="1">
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源1</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源2</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源3</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源4</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源5</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最热房源6</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">特价优惠1</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">特价优惠2</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">特价优惠3</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">特价优惠4</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最新上新1</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最新上新2</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最新上新3</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">最新上新4</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">风格分类1</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">风格分类2</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">风格分类3</td>
        </tr>
        <tr>
          <td height="30" align="center" bgcolor="#FFFFFF">风格分类4</td>
        </tr>
      </table></td>
      <td colspan="2" align="center" valign="top"><table width="426" border="0" cellspacing="1">
       <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_index");
  $info=mysql_fetch_array($sql);
   do{
	    $sql_house=mysql_query("select * from house where no = '".$info['no']."'");
        $info_house=mysql_fetch_array($sql_house);
?>
        <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FF9966'" onMouseOut="this.bgColor='#FFFFFF'">
          <td width="210" height="30"><a href="../house.php?id=<?php echo $info['id']?>"><?php echo $info['no'];?></a>
        <?php
		 if($info_house['rent']){?>
             <span style="color:red; margin-left:10px;">该房屋已经出租</span>
			 <?php
			 }
		 ?>
          </td>
          <td width="211"><a href="tihuan.php?update=<?php echo $info['id'];?>">替换</a></td>
        </tr>
        <?php
}while($info=mysql_fetch_array($sql));
?>
      </table>      
    </tr>
  </table>
</form>
</center>
</body>
</html>