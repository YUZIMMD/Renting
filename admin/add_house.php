<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
 <link rel="stylesheet" href="../js/parsley/parsley.css">
<title>无标题文档</title>
<style>
.parsley-required,.parsley-errors-list{
	display:inline;}
.parsley-pattern{
	display:inline;}
</style>
</head>

<body>
<div class="container m-t-md">
  <div class="row">
    <div class="col-sm-8 col-xs-offset-2">
      <div class="panel panel-info m-r-md">
        <div class="panel-heading"><span style="color: #666">请完善房屋信息</span></div>
        <div class="panel-body">
          <form role="form" id="upload_form" action="chuan_ok.php" method="post" enctype='multipart/form-data'>
            <div class="form-group">
              <label>编码:</label>
              <input type="text" name="no" class="form-control w-xxl inline m-l-lg" placeholder="请填写您的房屋编码" required data-parsley-required-message="必填！"><span class="text-danger">*</span><span>编码格式例no.1请尽量填写六位数的编码</span>
            </div>
             <div class="form-group">
              <label>小区名称:</label>
               <input type="text" name="name" class="form-control w-xxl inline" placeholder="请填写房屋所在小区名称" required data-parsley-required-message="必填！"><span class="text-danger">*</span><span>请填写真实信息</span>
            </div>
            <div class="form-group">
              <label>价格:</label>
              <input type="type" name="price" class="form-control w-xxl inline m-l-lg" maxlength="10" placeholder="请填写房屋租金" required data-parsley-required-message="必填！"  data-parsley-pattern="^[0-9]*$"
                    data-parsley-pattern-message="请输入数字"><span class="text-danger">*</span><span class="text-sm text-defalut">单位为元</span>
            </div>
            <div class="form-group">
              <label>结构:</label>
              <input type="text" name="struct" class="form-control w-xxl inline m-l-lg" placeholder="请填写房屋结构" required data-parsley-required-message="必填！"><span class="text-danger">*</span><span>例：一室一厅</span>
            </div>
            <div class="form-group">
              <label>面积：</label>
              <input type="text" name="area" maxlength="6" class="form-control w-xxl inline m-l-md" placeholder="请填写房屋面积" required data-parsley-required-message="必填！" data-parsley-pattern="^[0-9]*$"
                    data-parsley-pattern-message="请输入数字"><span class="text-danger">*</span><span class="text-sm text-defalut">单位：m^2</span>
            </div>
            <div class="form-group">
              <label>租房类型:</label>
              <select name="type" class="form-control inline w-xxl m-l-xs" id="type">
              <option value="住宅" selected="">住宅</option>
              <option value="商铺">商铺</option>
              <option value="别墅">别墅</option>
              <option value="写字楼">写字楼</option>
              </select>
            </div>
            <div class="form-group">
              <label>出租时间:</label>
              <select name="rentType" class="form-control inline w-xxl m-l-xs" id="rentType">
              <option value="长租" selected="">长租</option>
              <option value="短租">短租</option>
              </select>
            </div>
            <div class="form-group">
              <label>图片上传</label>
              <input type="file" name="myFile" class="w-xxl inline m-l-sm" style="margin-left:38px" required data-parsley-required-message="必填！">
            </div>
             <div class="form-group">
              <label>房屋细节图：</label>
              <input type="file" name="house_details1" class="w-xxl inline m-l-sm" style=" margin-left:100px margin-top:10px" required data-parsley-required-message="必填！">
              <input type="file" name="house_details2" class="w-xxl inline" style=" margin-left:100px; margin-top:10px" required data-parsley-required-message="必填！">
              <input type="file" name="house_details3" class="w-xxl inline m-l-sm" style=" margin-left:100px;margin-top:10px" required data-parsley-required-message="必填！">
              <input type="file" name="house_details4" class="w-xxl inline m-l-sm" style=" margin-left:100px; margin-top:10px" required data-parsley-required-message="必填！">
              <div class="m-l-xxl m-t-sm">
              <input type="file" name="house_details5" class="w-lg inline m-l-xxl" required data-parsley-required-message="必填！">
              <span class="text-danger">*</span><span class="text-sm text-defalut">房屋细节图在房屋详情页面显示，请确认上传文件</span>
              </div>
            </div>
            <div class="form-group">
              <label>详细地址:</label>
              <input type="text" name="address" class="form-control w-xxl inline m-l-xs" placeholder="请填写详细地址" required data-parsley-required-message="必填！"><span class="text-danger">*</span>
            <span class="text-sm text-defalut">请填写真实信息</span>
            </div>
           <div class="form-group">
              <label>详细介绍:</label>
              <textarea type="text" name="introduce" class="form-control inline m-l-xs" style="width:600px" placeholder="请详细介绍一下房屋吧" required rows="5" data-parsley-required-message="必填！"></textarea>
              <br/><span class="text-danger m-l-xxl m-t-sm">*</span>
            <span class="text-sm text-defalut">您可以从房子本身，交通便利，房子附近超市等等方面来描述</span>
            </div>
             <div class="m-l-xxl">
                <input name="Submit"  type="submit" class="btn btn-sm w-sm btn-primary m-l-lg" id="Submit" style="text-align:center"   value="上传" />
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</body>
 <script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
 <script type="text/javascript" src="../js/parsley/parsley.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="../js/layer/layer.js"></script>
<script>
$('#upload_form').parsley();

</script>
</html>
