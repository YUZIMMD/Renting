<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
<style>

	.gg{
		margin: 60px auto;
		}
	.btnA{ width:100px;
		   height:40px;
		   border:none; 
		   font-size:14px; 
		   color:#fff;
		   background:url(file:///D|/WWW/images/btn.png)
			}
	 .btnA:hover{
		   opacity:0.8;
		   }
     input{
		 border:none!important;}
</style>
</head>

<body>
<?php
    mysql_connect("localhost","root","root");
     mysql_query("SET NAMES 'utf8'"); 
	include("../Connections/conn.php");
	mysql_select_db("rent",$conn);
	 $result=mysql_query(" select * from tb_reader where name='".$_SESSION['user']."'");
    $row=mysql_fetch_array($result);
?>
 <div class="panel panel-default m-t-md">
  <div class="panel-heading"><span>个人资料</span><a class="pull-right" data-toggle="modal" data-target="#myModal"><i class="icon-note"></i>修改个人资料</a></div>
  <div class="panel-body">
    <table class="table">
    <tr>
    <td>用户名:<?php echo $row['name'];?></td>
    <td>编号:<?php echo $row['id'];?></td>
    </tr>
     <tr>
    <td>电话: <?php echo $row['tel'];?></td>
    <td>出生日期: <?php echo $row['birthday'];?></td>
    </tr>
     <tr>
    <td>邮箱:<?php echo $row['email'];?></td>
    <td>证件号码:<?php echo $row['paperNO'];?></td>
    </tr>
     <tr>
    <td>性别: <?php echo $row['sex'];?></td>
    <td>证件类型: <?php echo $row['paperType'];?></td>
    </tr>
    <tr>
    <td>职业: <?php echo $row['vocation'];?></td>
    <td>备注:<?php echo $row['remark']?></td>
    </tr>
    </table>
  </div>
</div>
<!-- Modal -->
<div class="modal fade m-t-xxl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改个人资料</h4>
      </div>
      <div class="modal-body">
      <form id="form1" role="form">
        <table class="table">
    <tr>
    <td>用户名:<input type="text" name="name" value="<?php echo $row['name'];?>"/></td>
    <td>编号:<input type="text" name="id" value="<?php echo $row['id'];?>"/></td>
    </tr>
     <tr>
    <td>电话:<input type="text" name="tel" value="<?php echo $row['tel'];?>"/> </td>
    <td>出生日期:<input type="text" name="birthday" value="<?php echo $row['birthday'];?>"/> </td>
    </tr>
     <tr>
    <td>邮箱:<input type="text" name="email" value="<?php echo $row['email'];?>"/></td>
    <td>证件号码:<input type="text" name="paperNO" value="<?php echo $row['paperNO'];?>"/></td>
    </tr>
     <tr>
    <td>性别: <input type="text" name="sex" value="<?php echo $row['sex'];?>"/></td>
    <td>证件类型: <input type="text" name="paperType" value="<?php echo $row['paperType'];?>"/></td>
    </tr>
    <tr>
    <td>职业: <input type="text" name="vocation" class="vocation" value="<?php echo $row['vocation'];?>"/></td>
    <td>备注:<input type="text" name="remark" value="<?php echo $row['remark']?>"/></td>
    </tr>
    </table>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary save">保存修改</button>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script src="../js/layer/layer.js"></script>
</html>
<script>
   // JavaScript Document
$(document).on('click','.save',function(){
	var data = $('#form1').serializeArray();
     console.log(data);
	  var data1 = arrayToObj(data);
     console.log(data1);
     var data2 = JSON.stringify(data1);
     console.log(data2);
$.post('update_grnews.php',{"data":data2},function(data,status){
    if(status=='success'){
       if(data=='修改成功'){
		   layer.msg('操作成功！', {icon: 1});
		   history.go(0);
		   }
   }
});
});
function arrayToObj(data) {
    var obj = {};
    for (var i = 0; i < data.length; i++) {
        obj[data[i].name] = data[i].value;
    }
    return obj;
}
</script>