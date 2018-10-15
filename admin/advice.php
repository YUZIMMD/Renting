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
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">最新上新区8</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">性价比区8</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利1</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利2</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利3</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利4</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利5</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利6</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利7</td>
        </tr>
        <tr>
          <td height="20" align="center" bgcolor="#FFFFFF">交通便利8</td>
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
  $sql=mysql_query("select * from tb_recommend");
  $info=mysql_fetch_array($sql);
   do{
?>
        <tr align="center" bgcolor="#FFFFFF" onMouseOver="this.bgColor='#FF9966'" onMouseOut="this.bgColor='#FFFFFF'">
          <td width="210" height="20"><?php echo $info['no'];?></td>
          <td width="211" height="20"><a href="tihuan_recommend.php?update=<?php echo $info['id'];?>">替换</a></td>
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