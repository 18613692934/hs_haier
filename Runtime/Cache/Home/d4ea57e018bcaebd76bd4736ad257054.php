<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head> 
  <title></title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="renderer" content="webkit" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <!--插件CSS-->
    <link href="/Public/static/layui/css/layui.css" type="text/css" rel="stylesheet" /> 
     <link href="/Public/static/h-ui/css/H-ui.min.css" type="text/css" rel="stylesheet" /> 
  <!--<link href="/Tpl/Home/Public/home/css/H-ui.min.css" type="text/css" rel="stylesheet" />--> 
  
  <!--<link href="/Tpl/Home/Public/home/css/font-awesome.min.css" type="text/css" rel="stylesheet" />--> 
  <!--<link href="/Tpl/Home/Public/home/css/monui.css" type="text/css" rel="stylesheet" />--> 
  <!--<link href="/Tpl/Home/Public/home/css/common.css" type="text/css" rel="stylesheet" />--> 
  <!--<link href="/Tpl/Home/Public/home/css/jquery.datatables.min.css" type="text/css" rel="stylesheet" />--> 
  <!--<link href="/Tpl/Home/Public/home/css/common_1.css" type="text/css" rel="stylesheet" />--> 
  <link href="/Tpl/Home/Public/home/css/header.css" type="text/css" rel="stylesheet" /> 
  <link href="/Tpl/Home/Public/home/css/index.css" type="text/css" rel="stylesheet" /> 
  <!--<link href="/Tpl/Home/Public/home/css/carousel.css" type="text/css" rel="stylesheet" />--> 
  <!--<link href="/Tpl/Home/Public/home/css/iconfont.css" type="text/css" rel="stylesheet" />--> 
  <link href="/Tpl/Home/Public/home/css/swiper.min.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.min.js"></script> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/form.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/common.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/dialog.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.pagination.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.dcjqaccordion.2.7.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.datatables.min.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/dmp-datatable.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.validate.min.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/messages_cn.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.form.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/highcharts.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/template.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/template.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/logindialog.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/md5.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/detectbrowser.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/index.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/carousel.js"></script>--> 
  <!--<script type="text/javascript" src="/Tpl/Home/Public/home/js/tags-ball.js"></script>--> 
  <script type="text/javascript" src="/Tpl/Home/Public/home/js/swiper.min.js"></script> 
   <script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script> 
   <!--可视化专题css-->
       <!-- Basic styles -->
<link href="http://yladc.com/static/css/bootstrap.css" rel="stylesheet">
<link  href="http://yladc.com/static/css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
    <link href="http://yladc.com/static/theme/css/default_theme.css" rel="stylesheet">
    <!--<link href="http://yladc.com/static/index/css/index.css" rel="stylesheet">-->
    <!--<link href="http://yladc.com/static/css/font-awesome.min.css" rel="stylesheet">-->
    
    <link href="http://yladc.com/static/css/bootstrap_ext.css" rel="stylesheet">

   
 </head> 
 <body> 
  <!--<script src="/Tpl/Home/Public/home/js/dialog.js"></script>--> 
  <style>
    .modal {
     z-index: 10001;
    }

    .swiper-container {
      width: 100%;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper .swiper-slide{
        height: 400px;  
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: 200px;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-border{
        border: 1px solid #4FADE5;
    }
    .swiper-img{
        width:100%;height:100%;
    }

</style> 

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
        <a id="bounceRe" class="m-btn" style="width:auto" href="<?php echo U('User/Index/index');?>">您好，<?php echo ($head_user['uname']); ?></a> 
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
 

  <div class="header-bg"></div> 
  <div class="m-banner"> 

   <div class="carousel" id="caro"> 
        <!-- Swiper -->
        <div class="swiper">
          <div class="swiper-wrapper">
            
            
            <div class="swiper-slide"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
            
          </div>
        </div>
   </div> 
  
  </div> 

  <div class="m-category"> 

    <div class="m-cate-tab"> 

     <ul class="tab-body"> 
      <li class="active"> 
       <div class="subj-list" style="padding:15px;border: 1px solid #ccc;background-color: #f9f9f9;"> 
            <!-- Swiper -->
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png"  class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                  <div class="swiper-slide swiper-border"><img src="/Tpl/Home/Public/home/images/md_ban1.png" class="swiper-img"/></div>
                </div>
<!--                   <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>-->
                <div class="swiper-pagination"></div>
              </div>
             <!-- Swiper JS -->
       </div> </li> 
     </ul> 
    </div> 
   
  </div>
  <!--专题数据-->
<!--  <div class="content-block white-bg">
        <div class="font-30 text-center"><i class="margin-r-10"><img src="http://yladc.com/static/index/img/icon-data.png"></i>专题数据</div>
        <div class="m-index-list"> 
            <div class="g-main"> 
                <div class="m-list-right"> 
                    <div class="list-right-title">
                        <span>资讯</span>
                        <a href="http://jindata.sd.gov.cn/odweb/news/newsList.htm">更多&gt;</a>
                    </div> 
                    <div class="notice-list"> 
                        <ul> 
                            <li> <a href="http://jindata.sd.gov.cn:80/odweb/news/newsDetail.htm?news_id=21" title="X市公共数据开放清单（第一批）">公共数据开放清单（第一批） </a> </li> 
                        </ul> 
                    </div>
                </div> 
       
                <div class="dataList-container"> 
                    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                        <ul class="layui-tab-title list-name">
                            <li class="layui-this data ">专家建议</li>
                            <li class="data" >政策服务</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-tab-item layui-show">
                                <div class="m-tab tab-panel hot-catalog"> 
                                    <div class="list-container"> 
                                        <ul> 
                                            <li> 
                                                <div class="l-title"> 
                                                    <a href="http://jindata.sd.gov.cn/odweb/catalog/catalogDetail.htm?cata_id=23fb5d37ed38446082d44cb015394cf8" target="_blank">X市审批注册幼儿园基本情况一览表</a> 
                                                    <div class="type">
                                                     教育
                                                    </div> 
                                                </div> 
                                                <div class="l-content"> 
                                                    <div class="detail">
                                                     审批注册幼儿园基本情况一览表 
                                                    </div> 
                                                    <div class="others"> 
                                                        <div class="detail-type">
                                                            来源部门：
                                                            <span>X市教育局</span>
                                                        </div> 
                                                        <div class="detail-type">
                                                         所属行业：
                                                         <span>教育</span>
                                                        </div> 
                                                        <div class="detail-type">
                                                         发布时间：
                                                         <span>2018-03-22 10:59:12</span>
                                                        </div> 
                                                    </div> 
                                                </div> 
                                            </li> 
                                        </ul> 
                                    </div> 
                                </div>

                            </div>
                            <div class="layui-tab-item">
                                <div class="m-tab tab-panel hot-catalog"> 
                                    <div class="list-container"> 
                                        <ul> 
                                            <li> 
                                                <div class="l-title"> 
                                                    <a href="http://jindata.sd.gov.cn/odweb/catalog/catalogDetail.htm?cata_id=49f20cbe05be41d4a25051d1798cddbe" target="_blank">优秀艺术作品名录信息</a> 
                                                    <div class="type">
                                                     文化
                                                    </div> 
                                                </div> 
                                                <div class="l-content"> 
                                                    <div class="detail">
                                                     X市文广新局---优秀艺术作品名录信息 
                                                    </div> 
                                                    <div class="others"> 
                                                        <div class="detail-type">
                                                            来源部门：
                                                            <span>X市文化广电新闻出版局</span>
                                                        </div> 
                                                        <div class="detail-type">
                                                            所属行业：
                                                            <span>文化、体育和娱乐业</span>
                                                        </div> 
                                                        <div class="detail-type">
                                                            发布时间：
                                                            <span>2018-08-28 17:05:12</span>
                                                        </div> 
                                                    </div> 
                                                </div> 
                                             </li> 
                                        </ul> 
                                   </div> 
                                </div>            
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>-->
  <!--可视化专题-->
  <div class="content-block white-bg">
        <div class="font-30 text-center"><i class="margin-r-10"><img src="/Tpl/Home/Public/home/images/icon-zt.png"></i>可视化专题</div>
        <div class="container">
            <div class="special-topic">
                <ul class="row">
                    <li class="col-md-8">
                        <a href="<?php echo U('Environment/environment');?>" target="_blank">
                            <div class="topic-card">
                                <div class="topic-title color1">
                                    环境监控
                                </div>
                                <div class="topic-body">
                                    <img src="/Tpl/Home/Public/home/images/zt1.gif">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="col-md-8">
                        <a href="<?php echo U('Charts/charts');?>" target="_blank">
                            <div class="topic-card">
                                <div class="topic-title color2">
                                    年度台帐
                                </div>
                                <div class="topic-body">
                                    <img src="/Tpl/Home/Public/home/images/zt2.gif">
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="col-md-8">
                        <a href="<?php echo U('Pick/pick');?>" target="_blank">
                            <div class="topic-card">
                                <div class="topic-title color3">
                                    采摘基地
                                </div>
                                <div class="topic-body">
                                    <img src="/Tpl/Home/Public/home/images/zt3.gif">
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
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
<script type="text/javascript" src="/Public/static/layui/layui.js"></script> 
<script>
    var swiper = new Swiper('.swiper',{
        effect: 'fade',
        spaceBetween: 30,
//        autoplay: {
//            delay: 2500,
//            disableOnInteraction: false,
//        },
        
    });
</script>
 <script>
    layui.use('element', function(){
        var $ = layui.jquery
        ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
    });
      
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      slidesPerColumn: 2,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

 </body>
</html>