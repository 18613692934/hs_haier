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
                <style>
            #myPlayer{
                margin-top:50px;
                width:100%;
                height:500px;
            }
            
        </style>
               <script src="/Public/static/EZUIKit-1.4/ezuikit.js"></script>
        
            

        <video id="myPlayer" poster="[这里可以填入封面图片URL]" controls playsInline webkit-playsinline autoplay>
            <source src="<?php echo ($rtmp); ?>" type="" />
        </video>

        <script>
            var player = new EZUIPlayer('myPlayer');
        </script>
               

            </div>
        </div>
    </div>
</div> 


<!--插件JS-->
<script src="/Public/static/layui/layui.js"></script>
<script>
  
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