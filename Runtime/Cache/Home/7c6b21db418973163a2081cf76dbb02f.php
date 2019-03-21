<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--<link  href="/Tpl/Home/Public/home/css/font-awesome.min.css" type="text/css" rel="stylesheet" />-->
	<link  href="/Tpl/Home/Public/home/css/monui.css" type="text/css" rel="stylesheet" />
	<!--<link  href="/Tpl/Home/Public/home/css/common.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/jquery.datatables.min.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/common_1.css" type="text/css" rel="stylesheet" />-->
	<link  href="/Tpl/Home/Public/home/css/header.css" type="text/css" rel="stylesheet" />
	<!--<link  href="/Tpl/Home/Public/home/css/commonlist.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/cities.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/iconfont.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/iconfont_1.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/iconfont_2.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/iconfont_3.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/easydialog.css" type="text/css" rel="stylesheet" />-->
	<!--<link  href="/Tpl/Home/Public/home/css/common_2.css" type="text/css" rel="stylesheet" />-->
        
  <!--<link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/css/H-ui.min.css" />-->
   <script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script> 
   <!--插件CSS-->
   <!--<link rel="stylesheet" href="/Public/static/layui/css/layui.css" media="all">-->
   
   <!-- Basic styles -->
<link href="http://yladc.com/static/css/bootstrap.css" rel="stylesheet">
<link  href="http://yladc.com/static/css/font-awesome.min.css" rel="stylesheet">
<!-- Expand styles -->
<link href="http://yladc.com/static/css/bootstrap_ext.css" rel="stylesheet">
<link href="http://yladc.com/static/css/ecsp_size.css" rel="stylesheet">
<link href="http://yladc.com/static/css/bs_plugins.css" rel="stylesheet">
<link href="http://yladc.com/static/theme/css/default_theme.css" rel="stylesheet">
<link href="http://yladc.com/static/css/control-library.css" rel="stylesheet">
<!-- Message styles  * Add liyingkang * -->
<link href="http://yladc.com/static/components/css/components.css" rel="stylesheet">
<link href="http://yladc.com/static/css/animate.min.css" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    <link href="http://yladc.com/static/data-service/css/data-service.css" rel="stylesheet">

   
</head>
<body>
    <script src="http://yladc.com/static/js/html5shiv.js"></script>
<script src="http://yladc.com/static/js/excanvas.js"></script>
<script src="http://yladc.com/static/js/jquery.min.js"></script>
<script src="http://yladc.com/static/js/jquery.formatDate.js"></script>
<script src="http://yladc.com/static/lib/vue/vue.min.js"></script>
<script src="http://yladc.com/static/lib/vue/vue.filter.js"></script>
<script src="http://yladc.com/static/lib/vue/vue-i18n-plugin.js"></script>
<script src="http://yladc.com/static/js/playx.js"></script>
<script src="http://yladc.com/static/js/sha1.js"></script>
<script src="http://yladc.com/static/lib/layer/layer.js"></script>
<script src="http://yladc.com/static/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="http://yladc.com/static/js/respond.min.js"></script>
<![endif]-->
<!--<script src="http://yladc.com/static/js/ecsp_skin.js"></script>-->
<script src="http://yladc.com/static/js/placeholder.js"></script>
<script src="http://yladc.com/static/lib/handlebars/handlebars.js"></script>
<script src="http://yladc.com/static/lib/handlebars/handlebars.registerHelper.js"></script>




<script>
    var ctx = 'http://yladc.com/static';
    var ctx_w = 'http://yladc.com';
    var rest_url = 'http://10.176.4.154:9001';
    var upload_url = 'http://yladc.com';
    var userimg = '';
    var loginName = '';
    var userId = '';
        {var rongKey = '25wehl3u2juww';}
                var userkey = '';
        var userType = '';
    var appId = 'app001';
        

    $(document).ready(function () {
//        $("#keywords").bind('keyup', function (event) {
//            event = document.all ? window.event : event;
//            if ((event.keyCode || event.which) == 13) {
//                slor();
//            }
//        });

        $(window).returntop({
            showHeight: 50, //设置滚动多少高度时显示
            speed: 300  //返回顶部的速度以毫秒为单位
        });
        $('input, textarea').not(':password').placeholder();
        $("[limit]").limit();
        jQuery.fn.isChildAndSelfOf = function (b) {
            return (this.closest(b).length > 0);
        };
        $(document).click(function (event) {
            if (!$(event.target).isChildAndSelfOf(".text-dropdown")) {
                $(".dropdown-area").hide();
            }
        });
//        if ($(window).scrollTop() > 50) {
//            $('#yq-header').children('.navbar').addClass("navbar");
//        }
//        $(window).scroll(function () {
//            if ($(window).scrollTop() > 50) {
//                $('#yq-header').children('.navbar').addClass("navbar-white");
//            } else if ($(window).scrollTop() < 50) {
//                $('#yq-header').children('.navbar').removeClass("navbar-white");
//            }
//        });
        /* drop menu */
//        $(".search-round .dropdown-menu li a").click(function () {
//            var a = $(this).text();
//            $(this).parents('.dropdown').find('.droptype').text(a);
//        });

        //如果当前加载页面存在两个或两个以上的关键字搜素区域，则删除第一个关键字搜素区域（删除头部搜索区域），仅保留一个
        //获取自定义搜索样式  add by zhangwei
        var customSearch = $(".customSearch-class");
        if (customSearch != undefined && customSearch.length >= 2) {
            customSearch.eq(0).remove();
        }

        //尾部高度
        var footerHeight = 0,
                footerTop = 0,
                $footer = $("#yly-footer");
        positionFooter();
        //定义positionFooter function
        function positionFooter() {
            //取到div#footer高度
            footerHeight = $footer.height();
            //div#footer离屏幕顶部的距离
            footerTop = ($(window).scrollTop() + $(window).height() - footerHeight) + "px";
            //alert(footerTop);

            //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
            if (($(document.body).height() + footerHeight) < $(window).height()) {
                $footer.css({
                    width: '100%',
                    bottom: 0,
                    position: "absolute"
                });
            } else {
                $footer.css({
                    position: "static"
                });
            }
        }

        $(window).scroll(positionFooter).resize(positionFooter);
    });

//    function slor() {
//        $("#headerForm").submit();
//    }
</script>







<script src="http://yladc.com/static/lib/validation/jquery.validate.js"></script>
<script src="http://yladc.com/static/lib/validation/localization/messages_zh.js"></script>
<script src="http://yladc.com/static/lib/validation/additional-methods.js"></script>
<script src="http://yladc.com/static/lib/validation/ecsp.validate.js"></script>



 <div class="m-hd"> 
   <div class="g-main"> 
    <div class="m-hd-top"> 
     <div class="u-logo"> 
         海尔COSMOPlat种植管理人工智能平台
     </div> 
     <div class="m-login"> 
      <input type="hidden" id="login_salt" value="" /> 
      <!----> 
      
       <?php if($head_user){ ?>
        <a id="bounceRe" class="m-btn" style="width:120px;">您好，<?php echo ($head_user['uname']); ?></a> 
      <?php }else{ ?>
         <a id="bounceRe" class="m-btn" href="<?php echo U('Login/login');?>">登录</a> 
      <?php } ?>
      <!----> 
     </div> 
    </div> 
    <div class="m-nav-list"> 
     <ul> 
      <li id="pIndex"   class="<?php if($Think.CONTROLLER_NAME == 'Index'){ ?>active <?php } ?>"><a href="/"><i class="nav-icon icon-index"></i>首页</a></li> 
      <li id="pCatalog" class="<?php if($Think.CONTROLLER_NAME == 'Environment'){ ?>active <?php } ?>"><a href="<?php echo U('Environment/environment');?>"><i class="nav-icon icon-catalog"></i>环境数据</a></li> 
      <li id="pCatalog" class="<?php if($Think.CONTROLLER_NAME == 'Produce'){ ?>active <?php } ?>"><a href="<?php echo U('produce/produce');?>"><i class="nav-icon icon-api"></i>生产管理</a></li> 
      <li id="pApp" class="<?php if($Think.CONTROLLER_NAME == 'Sales'){ ?>active <?php } ?>"><a href="<?php echo U('sales/sales');?>"><i class="nav-icon icon-app"></i>销售记录</a></li> 
      <!--<li id="pMap" class="<?php if($Think.CONTROLLER_NAME == 'Purchase'){ ?>active <?php } ?>"><a href="<?php echo U('purchase/purchase');?>"><i class="nav-icon icon-map"></i>对外采购</a></li>--> 
      <li id="pDynamic" class="<?php if($Think.CONTROLLER_NAME == 'Charts'){ ?>active <?php } ?>"><a href="<?php echo U('charts/charts');?>"><i class="nav-icon icon-dynamic"></i>年度台帐</a></li> 
      <li id="pInteract"  class="<?php if($Think.CONTROLLER_NAME == 'Expert'){ ?>active <?php } ?>"><a href="<?php echo U('expert/expert');?>"><i class="nav-icon icon-interact"></i>专家建议</a></li> 
      <li id="pInteract"  class="<?php if($Think.CONTROLLER_NAME == 'Policy'){ ?>active <?php } ?>"><a href="<?php echo U('policy/policy');?>"><i class="nav-icon icon-developer"></i>政策服务</a></li> 
      <li id="pMap" class="<?php if($Think.CONTROLLER_NAME == 'Pick'){ ?>active <?php } ?>"><a href="<?php echo U('pick/pick');?>"><i class="nav-icon icon-developer"></i>采摘导购</a></li> 
     </ul> 
    </div> 
    <div id="refushhtml" style=""></div> 
   </div> 
  </div>


<div class="banner" style="height: 140px;background: url('/Tpl/Home/Public/home/images/env_banner.jpg') center"></div>
  <div id="bd-content" class="bd-content">
    <div class="container">
        

        <div class="row">
            <div class="col-md-24">
            
            




<div class="bd-content">

    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="diseased-wrap">
                    <div class="row">
                        <div class="col-md-16">
                            <div class="widget widget-default">
                                <div class="widget-body">
                                    <div class="head-info">
                                        <span>农业环境监控</span>
                                    </div>
                                    <div class="echart-height1" id="map-echarts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="widget widget-default">
                                <div class="widget-body">
                                    <div class="head-info">
                                        <span>气象数据</span>
                                    </div>
                                    <input type ="hidden" id="dataList" name="dataList" value="[{value:2.44201722E8,name:'土温'},  {value:8.73179092E8,name:'土湿'}, {value:8.81298517E8,name:'气温'}, {value:8.80083495E8,name:'湿度'}, {value:3.98516414E8,name:'光照'}, {value:3.1429909E7,name:'风向'}, {value:3.1429909E7,name:'风速'}, ]">
                                    <div class="echart-height1" id="pie-echarts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #myPlayer01,#myPlayer02,#myPlayer03,#myPlayer04{
                            
                            width:100%;
                            height:200px;
                        }
            
                    </style>
               <script src="/Public/static/EZUIKit-1.4/ezuikit.js"></script>
                    <div class="row">
                        <div class="col-md-24">
                            <div class="widget widget-default">
                                <div class="widget-body">
                                    <div class="head-info">
                                        <span>视频监控</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div  class="widget widget-default">
                                                <div class="head-info">
                                                    <span>李张庄01</span>
                                                    
                                                </div>
                                                    <video id="myPlayer01" poster="[这里可以填入封面图片URL]" controls playsInline webkit-playsinline>
                                                        <source src="rtmp://rtmp.open.ys7.com/openlive/1c608a928a6944bbac8dc6277a0224d6.hd" type="" />
                                                    </video>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div  class="widget widget-default">
                                                <div class="head-info">
                                                    <span>李张庄02</span>
                                                </div>
                                                <video id="myPlayer02" poster="[这里可以填入封面图片URL]" controls playsInline webkit-playsinline>
                                                        <source src="#" type="" />
                                                    </video>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div  class="widget widget-default">
                                                <div class="head-info">
                                                    <span>李张庄03</span>
                                                </div>
                                                <video id="myPlayer03" poster="[这里可以填入封面图片URL]" controls playsInline webkit-playsinline>
                                                        <source src="rtmp://rtmp.open.ys7.com/openlive/e10e69f6ddbb4c809381d71a0448bffe.hd" type="" />
                                                    </video>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div  class="widget widget-default">
                                                <div class="head-info">
                                                    <span>李张庄04</span>
                                                </div>
                                                <video id="myPlayer04" poster="[这里可以填入封面图片URL]" controls playsInline webkit-playsinline>
                                                        <source src="rtmp://rtmp.open.ys7.com/openlive/c1fd9c55e17d4e07a18a2a7f67108433.hd" type="" />
                                                    </video>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>


<!--插件JS-->
<script src="/Public/static/layui/layui.js"></script>

<div id="yly-footer" class="m-ft"> 
   <div class="g-main"> 
  
   </div> 
   <p>海尔COSMOPlat种植管理人工智能平台 鲁ICP备050110101号</p> 
  </div>  




<!--<div class="footer">
    <div class="clearfix copyright-wrap">
        <div class="pull-left mycopyright">
            <p>CopyRight @2017-2019 慧胜种植管理平台 </p>
            <p> 鲁ICP备050110101号</p>
            <p>All rights reserved</p>
            <p><span class="margin-b-8">友情链接  <a href="#" target="_blank" >海尔COSMOPlat平台</a> </span></p>
        </div>
        <div class="pull-left scan-code clearfix">
            <img src="http://yladc.com/static/theme/img/code_new.png">
            <div class="margin-b-8">扫描下载</div>
            <div class="margin-b-8">杨凌农业云大数据App</div>
            <div><i><img src="http://yladc.com/static/theme/img/and-icon.png"></i>Andriod</div>
        </div>
    </div>
</div>-->
  <script type="text/javascript">
    var environmentChart = "/bigdata/environment/showEnvironmentChart";
</script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=WkC72RXn71XyvV2emFZxg6p79XgjpuUU"></script>

<script src="http://yladc.com/static/lib/echarts/echarts.js"></script>
<script src="http://yladc.com/static/lib/echarts/china.js"></script>
<script type="text/javascript" src="/Tpl/Home/Public/home/js/environment_list.js"></script>
<script>
var player01 = new EZUIPlayer('myPlayer01');
var player02 = new EZUIPlayer('myPlayer02');
var player03 = new EZUIPlayer('myPlayer03');
var player04 = new EZUIPlayer('myPlayer04');
player03.on('error', function(){
    console.log('error');
});
</script>


<script type="text/javascript" src="http://yladc.com/static/lib/pym/pym.js"></script>
<script>
    var pymChild = new pym.Child({id: "example-follow-links",polling:1500});
</script>
</body>
</html>