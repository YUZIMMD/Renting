<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
</head>
<body>
</body>
</html>
<?php
session_start();
unset($_SESSION['admin_user']);
echo "<script>alert ('注销成功，现在返回主页！');window.location.href='http://localhost/zufang/index.php';</script>";
?>
