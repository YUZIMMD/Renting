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
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">住宅热卖区8</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">写字楼办公区热卖8</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">商铺门面热卖区8</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">其他8</td>
        </tr>
      </table></td>
      <td colspan="2" align="center" valign="top"><table width="426" border="0" cellspacing="1">
       <?php
							  mysql_connect("localhost","root","root");
							  mysql_query("SET NAMES 'utf8'"); 
 include("Connections/conn.php");
 mysql_select_db("rent",$conn);
  $sql=mysql_query("select * from tb_hot");
  $info=mysql_fetch_array($sql);
   do{
?>
        <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FF9966'" onMouseOut="this.bgColor='#FFFFFF'">
          <td width="210" height="20"><?php echo $info['no'];?></td>
          <td width="211" height="20"><a href="tihuan_hot.php?update=<?php echo $info['id'];?>">替换</a></td>
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