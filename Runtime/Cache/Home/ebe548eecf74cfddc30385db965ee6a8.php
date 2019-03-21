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
   <link rel="stylesheet" href="/Public/static/layui/css/layui.css" media="all">
   
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



<div class="sy_line"></div>
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
  <div id="bd-content" class="bd-content" style="margin-top:40px;">
    <div class="container">
        

        <div class="row">
            <div class="col-md-24">
            
   
<ul class="nav nav-tabs">
    <li class="<?php if($Think.ACTION_NAME == 'env_list'){ ?>active <?php } ?>"  >
        <a href="<?php echo U('Environment/env_list');?>">环境数据</a>
    </li>
    <li class="<?php if($Think.ACTION_NAME == 'video'){ ?>active <?php } ?>">
        <a href="<?php echo U('Environment/video');?>">视频监控</a>
    </li>
</ul>
                <input type="hidden" name="device_code" id="device_code" value="<?php echo ($device_code); ?>"/>
                <table id="demo" lay-filter="test"></table> 

            </div>
        </div>
    </div>
</div> 


<!--插件JS-->
<script src="/Public/static/layui/layui.js"></script>
<script>
   var device_code =  document.getElementById("device_code").value;
   
layui.use('table', function(){
  var table = layui.table;
  
  //第一个实例
  table.render({
    elem: '#demo'
    ,toolbar: '#toolbarDemo'
    ,url: "<?php echo U('Environment/dataTable');?>" //数据接口
    ,where:{device_code:device_code}
    ,title:'环境数据表'
    ,page: true //开启分页
    ,limits:[10,50,100,200,400,800,1600,3200]
    ,cols: [[ //表头
      {field: 'env_id', title: 'ID', sort: true, fixed: 'left'}
      ,{field: 'temp', title: '温度℃'}
      ,{field: 'humidity', title: '湿度%',  sort: true}
      ,{field: 'beam', title: '光照强度lux'} 
      ,{field: 'wind_direction', title: '风向'}
      ,{field: 'wind_speed', title: '风速m/s', sort: true}
      ,{field: 'unix_createdate', title: '时间', sort: true}
    ]]
  });
  
});
</script>
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

</body>
</html>