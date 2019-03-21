<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link  href="/Tpl/Home/Public/home/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/monui.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/common.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/jquery.datatables.min.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/common_1.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/header.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/commonlist.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/cities.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_1.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_2.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/iconfont_3.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/easydialog.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/common_2.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=WkC72RXn71XyvV2emFZxg6p79XgjpuUU"></script>
   <script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script> 
</head>
<body>
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

<style>
.modal-dialog{
	z-index: 1051;
}
</style>
<div class="banner" style="height: 140px;background: url('/Tpl/Home/Public/home/images/pick_banner.jpg') center"></div>
  <div class="main"> 
   <div class="g-main"> 
    <div class="container" style="margin-right: 0px;"> 
        <div id="allmap" style="width:1190px;height:675px;"></div>
    </div> 
   </div> 
  </div> 
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
       // 百度地图API功能
      var sContent =
      "<h4 style='margin:0 0 5px 0;padding:0.2em 0'>天安门</h4>" + 
      "<img style='float:right;margin:4px' id='imgDemo' src='__STATIC__home/picture/tianAnMen.jpg' width='139' height='104' title='天安门'/>" + 
      "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>天安门坐落在中国北京市中心,故宫的南侧,与天安门广场隔长安街相望,是清朝皇城的大门...</p>" + 
      "</div>";
      var map = new BMap.Map("allmap");
      var point = new BMap.Point(116.404, 39.915);
      var marker = new BMap.Marker(point);
      var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
      map.centerAndZoom(point, 15);
      map.addOverlay(marker);
      marker.addEventListener("click", function(){          
         this.openInfoWindow(infoWindow);
         //图片加载完毕重绘infowindow
         document.getElementById('imgDemo').onload = function (){
           infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
         }
      });
  </script>
</body>
</html>