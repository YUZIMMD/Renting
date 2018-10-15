<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台-初始化界面</title>
</head>
<body>
  <div class="container">
    <div class="row m-l-md m-t-md" style="height:30px" >
      <span><img src="../Images/sun.png"/>您好！<span class="text-info text-md"><?php echo $_SESSION['admin_user']?></span>欢迎来到后台管理中心</span><a href="" class="m-l-sm text-sm text-info">账号设置</a>
    </div>
    <div class="row">
    <div id="main" style="height:500px;border:1px solid #ccc;padding:10px;"></div>
  </div>
  <div class="row" style="position:relative;top:-130px">
  <div class="col-xs-6 text-center"><br/><br/>
    <span>访问来源：网上目前的访问来源，主要依靠五个来源：<br/>视频广告，搜索引擎，联盟广告，邮件营销，直接访问</span>
  </div>
  <div class="col-xs-6">
  <div id="do_main" style="height:300px;padding:10px;"></div>
  </div>
  </div>
  </div>
</body>
 <!--Step:2 Import echarts.js-->
    <!--Step:2 引入echarts.js-->
    <script src="js/echarts.js"></script>
    
    <script type="text/javascript">
    // Step:3 conifg ECharts's path, link to echarts.js from current page.
    // Step:3 为模块加载器配置echarts的路径，从当前页面链接到echarts.js，定义所需图表路径
    require.config({
        paths: {
            echarts: './js'
        }
    });
    
    // Step:4 require echarts and use it in the callback.
    // Step:4 动态加载echarts然后在回调函数中开始使用，注意保持按需加载结构定义图表路径
    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line',
            'echarts/chart/map',
      'echarts/chart/pie'
        ],
        function (ec) {
            //--- 折柱 ---
            var myChart = ec.init(document.getElementById('main'));
            myChart.setOption({
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['房源上传量','租房成功量']
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        splitArea : {show : true}
                    }
                ],
                series : [
                    {
                        name:'房源上传量',
                        type:'bar',
                        data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
                    },
                    {
                        name:'租房成功量',
                        type:'bar',
                        data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
                    }
                ]
            });
             var myChart2 = ec.init(document.getElementById('do_main'));
           myChart2.setOption({
                series : [
                    {
                        name: '访问来源',
                        type: 'pie',
                        radius: '55%',
                        data:[
                            {value:235, name:'视频广告'},
                            {value:274, name:'联盟广告'},
                            {value:310, name:'邮件营销'},
                            {value:335, name:'直接访问'},
                            {value:400, name:'搜索引擎'}
                        ]
                    }
                ]
            })
            
        }
    
    );
    </script>
</html>
