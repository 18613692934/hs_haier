<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link  href="/Public/static/h-ui/css/h-ui.min.css" type="text/css" rel="stylesheet" />
	<link  href="/Tpl/Home/Public/home/css/header.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/Public/static/h-ui.user/css/H-ui.user.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.user/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.user/css/style.css" />
</head>
<body>
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

    
<div class="Hui-main">
    <aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">资讯管理</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="product-brand.html" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>
					<li><a data-href="product-category.html" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a data-href="product-list.html" data-title="产品管理" href="javascript:void(0)">产品管理</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="http://h-ui.duoshuo.com/admin/" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a data-href="feedback-list.html" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="member-list.html" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<li><a data-href="member-del.html" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
					<li><a data-href="member-level.html" data-title="等级管理" href="javascript:;">等级管理</a></li>
					<li><a data-href="member-scoreoperation.html" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a data-href="member-record-browse.html" data-title="浏览记录" href="javascript:void(0)">浏览记录</a></li>
					<li><a data-href="member-record-download.html" data-title="下载记录" href="javascript:void(0)">下载记录</a></li>
					<li><a data-href="member-record-share.html" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="admin-role.html" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
					<li><a data-href="admin-list.html" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="charts-1.html" data-title="折线图" href="javascript:void(0)">折线图</a></li>
					<li><a data-href="charts-2.html" data-title="时间轴折线图" href="javascript:void(0)">时间轴折线图</a></li>
					<li><a data-href="charts-3.html" data-title="区域图" href="javascript:void(0)">区域图</a></li>
					<li><a data-href="charts-4.html" data-title="柱状图" href="javascript:void(0)">柱状图</a></li>
					<li><a data-href="charts-5.html" data-title="饼状图" href="javascript:void(0)">饼状图</a></li>
					<li><a data-href="charts-6.html" data-title="3D柱状图" href="javascript:void(0)">3D柱状图</a></li>
					<li><a data-href="charts-7.html" data-title="3D饼状图" href="javascript:void(0)">3D饼状图</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="system-base.html" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
					<li><a data-href="system-category.html" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
					<li><a data-href="system-data.html" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
					<li><a data-href="system-shielding.html" data-title="屏蔽词" href="javascript:void(0)">屏蔽词</a></li>
					<li><a data-href="system-log.html" data-title="系统日志" href="javascript:void(0)">系统日志</a></li>
			</ul>
		</dd>
	</dl>
</div>
</aside>
</div>



<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/static/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/static/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui.user/js/H-ui.user.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>



</body>
<script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script>
</html>