<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$b=$_GET['a'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home-管理中心</title>
<link rel="stylesheet" type="text/css" href="../css_extent/animate.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/app.min.css" />
<link rel="stylesheet" type="text/css" href="../css_extent/simple-line-icons.css"/>
</head>
<style>
  body {
	font-size: 12px;
	line-height: 24px;
}
.row {
    margin-right: 0px; 
    margin-left: 0px; 
}
</style>
<body>
<div class="app app-header-fixed">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
      <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">
          <i class="fa fa-btc"></i>
          <img src="img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">home租房</span>
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
    <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
    <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
            <i class="icon-logout text"></i>
            <i class="icon-login text-active"></i>
          </a>
        </div>
        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          <li class="dropdown pos-stc">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <span>Mega</span> 
              <span class="caret"></span>
            </a>
            <div class="dropdown-menu wrapper w-full bg-white">
              <div class="row">
                <div class="col-sm-4">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span class="badge badge-sm bg-success">10</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock screen</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign in</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span class="label label-sm bg-primary">12</span></div>
                  <div class="row">
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons <span class="badge badge-sm bg-warning">1000+</span></a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-xs-6">
                      <ul class="list-unstyled l-h-2x">
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                        </li>
                        <li>
                          <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 b-l b-light">
                  <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                  <div class="text-center">
                    <div class="inline">
                      <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }" class="easyPieChart" style="width: 100px; height: 100px; line-height: 100px;">
                      <canvas width="100" height="100"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
              <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
              <li>
                <a href="">
                  <span class="badge bg-info pull-right">5</span>
                  <span translate="header.navbar.new.TASK">Task</span>
                </a>
              </li>
              <li><a href="" translate="header.navbar.new.USER">User</a></li>
              <li class="divider"></li>
              <li>
                <a href="">
                  <span class="badge bg-danger pull-right">4</span>
                  <span translate="header.navbar.new.EMAIL">Email</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- / link and dropdown -->

        <!-- search form -->
        <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo" data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
          <div class="form-group">
            <div class="input-group">
              <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder" placeholder="Search projects...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <!-- / search form -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
              <i class="icon-bell fa-fw"></i>
              <span class="visible-xs-inline">Notifications</span>
              <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
            </a>
            <!-- dropdown -->
            <div class="dropdown-menu w-xl animated fadeInUp">
              <div class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>您有<span>2</span> 个重要事项待处理</strong>
                </div>
                <div class="list-group">
                  <a href="" class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                     某某某上传了新房源<br>
                      <small class="text-muted">年月日</small>
                    </span>
                  </a>
                  <a href="" class="list-group-item">
                    <span class="clear block m-b-none">
                      某某某上传了新房源<br>
                      <small class="text-muted">年月日时分秒</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">查看全部</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" aria-expanded="false">
              <span class="hidden-sm hidden-md"><?php echo $_SESSION['admin_user']?></span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>工作效率</p>
                </div>
                <div class="progress progress-xs m-b-none dker">
                  <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                </div>
              </li>
              <li>
                <a href="">
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>完成度</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">100%</span>
                 专注
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin">.....</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


    <!-- aside -->
 <form id="form1" name="form1" method="post" action="">
 <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- nav -->
          <nav ui-nav="" class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Navigation</span>
              </li>
              <li>
                <a href="" class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">首页</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span>首页</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=管理员信息管理">
                      <span>账号管理</span>
                    </a>
                  </li>
                   <li>
                    <a href="admin_index.php?a=消息动态">
                      <span>消息动态</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="admin_index.php?a=待处理事项">
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold">待处理事项</span>
                </a>
              </li>
              <li class="line dk"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Components</span>
              </li>
              <li>
                <a href="" class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <b class="badge bg-info pull-right">3</b>
                  <i class="glyphicon glyphicon-th"></i>
                  <span>用户管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span>用户管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=用户资料管理">
                      <span>普通用户管理</span>
                    </a>
                  </li> 
                  <li>
                    <a href="admin_index.php?a=房东资料管理">
                      <span>房东用户管理</span>
                    </a>
                  </li>     
                </ul>
              </li>
              <li>
                <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-briefcase icon"></i>
                  <span>房源管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span>房源管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=在线房源管理">
                      <span>在线房源管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=已出租房源管理">
                      <b class="badge bg-info pull-right">3</b>
                      <span>已出租房源管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=待审核房源管理">
                      <span>待审核房源管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=驳回房源管理">
                      <b class="badge bg-success pull-right">13</b>
                      <span>驳回房源管理</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="admin_index.php?a=房产预约登记管理">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>预约记录管理</span>
                </a>
              </li>
              <li>
               <li>
                <a href="admin_index.php?a=房产租赁记录管理">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>租赁记录管理</span>
                </a>
              </li>
              <li>
              <li>
                <a href="admin_index.php?a=留言信息管理">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>留言记录管理</span>
                </a>
              </li>
              <li>
                <a href="admin_index.php?a=房屋评论管理">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>房屋评论管理</span>
                </a>
              </li>
              <li>
                <a href="" class="auto">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-file icon"></i>
                  <span>页面管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span>页面管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=首页管理">
                      <span>首页管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=热门页管理">
                      <span>热门页管理</span>
                    </a>
                  </li>
                  <li>
                    <a href="admin_index.php?a=推荐页管理">
                      <span>推荐页管理</span>
                    </a>
                  </li>
                </ul>
              </li>
               <li>
                <a href="admin_index.php?a=退出">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>退出</span>
                </a>
              </li>
              <li class="line dk hidden-folded"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                <span>Your Stuff</span>
              </li>  
              <li>
                <a href="page_profile.html">
                  <i class="icon-user icon text-success-lter"></i>
                  <b class="badge bg-success pull-right">30%</b>
                  <span>Profile</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="icon-question icon"></i>
                  <span>Documents</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">60%</span>
              <span class="hidden-folded">Milestone</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-info" style="width: 60%;">
              </div>
            </div>
            <div class="text-center-folded">
              <span class="pull-right pull-none-folded">35%</span>
              <span class="hidden-folded">Release</span>
            </div>
            <div class="progress progress-xxs m-t-sm dk">
              <div class="progress-bar progress-bar-primary" style="width: 35%;">
              </div>
            </div>
          </div>
          <!-- / aside footer -->
        </div>
      </div>
  </aside>
  <!-- / aside -->
</form>

  <!-- content -->
  <div id="content" class="app-content" role="main">
  <?php
      switch($b)
    {
      case "管理员信息管理":include("aindex.php");
      break;
      case "用户资料管理":include("user.php");
      break;
      case "在线房源管理":include("house.php");
      break;
      case "房产预约登记管理":include("booking.php");
      break;
      case "房产租赁记录管理":include("re.php");
      break;
      case "留言信息管理":include("word.php");
      break;
      case "首页管理":include("in.php");
      break;
      case "热门页管理":include("ho.php");
      break;
      case "推荐页管理":include("advice.php");
      break;
      case "退出":include("exit.php");
      break;
      case "待处理事项":include("treatment_Pending.php");
      break;
	  case "消息动态":include("news.php");
      break;
	  case "房东资料管理":include("Landlord.php");
	  break;
	  case "已出租房源管理":include("Rented_out.php");
	  break;
	  case "待审核房源管理":include("Pending_audit.php");
	  break;
	  case "驳回房源管理":include("Reject.php");
	  break;
	  case "房屋评论管理":include("house_comment.php");
	  break;
      default:include("admin_wel.php");
    }
  ?>
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
  </footer>
  <!-- / footer -->
</div>
</body>
<script src="../js/app.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/echarts.js"></script>
<script type="text/javascript" src="../js/jquery.easypiechart.fill.js"></script>
<script type="text/javascript" src="../libs/jquery/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js"></script>
<script type="text/javascript">
$('.dropdown').click(function(){
  var $this = $(this);
  $this.addClass('open');
  });
   // $('#myModal').modal({backdrop: 'static', keyboard: false});
</script>

</html>