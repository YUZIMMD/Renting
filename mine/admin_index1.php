<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>home-管理中心</title>
<link rel="stylesheet" type="text/css" href="../Css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../Css/app.min.css" />
<link rel="stylesheet" type="text/css" href="../Css/simple-line-icons.css"/>
</head>
<body>
<div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-dark">
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
                  <strong>You have <span>2</span> notifications</strong>
                </div>
                <div class="list-group">
                  <a href="" class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="" class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </div>
            </div>
            <!-- / dropdown -->
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" aria-expanded="false">
              <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeInRight w">
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                <div>
                  <p>300mb of 500mb used</p>
                </div>
                <div class="progress progress-xs m-b-none dker">
                  <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                </div>
              </li>
              <li>
                <a href="">
                  <span class="badge bg-danger pull-right">30%</span>
                  <span>Settings</span>
                </a>
              </li>
              <li>
                <a ui-sref="app.page.profile">Profile</a>
              </li>
              <li>
                <a ui-sref="app.docs">
                  <span class="label bg-info pull-right">new</span>
                  Help
                </a>
              </li>
              <li class="divider"></li>
              <li>
                <a ui-sref="access.signin">Logout</a>
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
                <a href="#dashboard-menu" class="auto nav-header" data-toggle="collapse">      
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
                <ul id="dashboard-menu" class="nav nav-list collapse ">  
                  <li><a href="/WirelessOrder/home.do?flag=home">报表</a></li>  
                  <li><a href="/WirelessOrder/home.do?flag=grzx">个人中心</a></li>  
               </ul>  
              </li>
              <li>
                <a>
                  <b class="badge bg-info pull-right">9</b>
                  <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
                  <span class="font-bold">Email</span>
                </a>
              </li>
              <li class="line dk"></li>

              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span>Components</span>

              </li>
              <li>
                <a href="" class="auto">      
                  <b class="badge bg-info pull-right">3</b>
                  <i class="glyphicon glyphicon-th"></i>
                  <span>Layout</span>
                </a>
              </li>
              <li>
                <a href="" class="auto">
                  <i class="glyphicon glyphicon-briefcase icon"></i>
                  <span>UI Kits</span>
                </a>
              </li>
              <li>
                <a href="" class="auto">
                  <b class="label bg-primary pull-right">2</b>
                  <i class="glyphicon glyphicon-list"></i>
                  <span>Table</span>
                </a>
              </li>
              <li>
                <a href="" class="auto">
                  <i class="glyphicon glyphicon-edit"></i>
                  <span>Form</span>
                </a>
              </li>
              <li>
                <a href="ui_chart.html">
                  <i class="glyphicon glyphicon-signal"></i>
                  <span>Chart</span>
                </a>
              </li>
              <li>
                <a href="" class="auto">
                  <i class="glyphicon glyphicon-file icon"></i>
                  <span>Pages</span>
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


  <!-- content -->
  <div id="content" class="app-content" role="main">
  </div>
  <!-- /content -->
  
  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">

  </footer>
  <!-- / footer -->
</div>
</body>
<script src="../js/app.js"></script>
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/echarts.js"></script>
<script type="text/javascript" src="../js/jquery.easypiechart.fill.js"></script>
</html>