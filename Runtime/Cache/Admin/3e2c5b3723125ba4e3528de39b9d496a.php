<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/js/html5shiv.js"></script>
<script type="text/javascript" src="/Public/js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/js/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/css/TP_page.css" />
<title><?php echo ($webname['info_value']); ?>后台</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <span class="logo navbar-logo f-l mr-10 hidden-xs" href="#"><?php echo ($webname['info_value']); ?>后台</span>  <span class="logo navbar-slogan f-l mr-10 hidden-xs"><?php echo C('VERSION');?></span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li><?php echo ($only['rname']); ?></li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($only['login_name']); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
                                                    <li><a href="javascript:;" onclick="show('个人展示','<?php echo U('Index/adminShow',array('id'=>$only['admin_id']));?>','600','600')">个人信息</a></li>
                                                    <li><a href="javascript:;" target=_top onclick="quit()">切换账户</a></li>
                                                    <li><a href="javascript:;" target=_top onclick="quit()" >退出</a></li>
						</ul>
					</li>
					
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
<!--		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
                                    <li><a data-href="picture-list.html" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
				</ul>
			</dd>
		</dl>-->
<!--                <dl id="menu-pests">
                    <dt><i class="Hui-iconfont">&#xe691;</i> 病虫害管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                            <li><a data-href="<?php echo U('Pests/pestList');?>" data-title="虫害管理" href="javascript:void(0)">虫害管理</a></li>
                            <li><a data-href="<?php echo U('Pests/showList');?>" data-title="列表展示" href="javascript:void(0)">列表展示</a></li>
                            <li><a data-href="<?php echo U('Pests/manualCheck');?>" data-title="人工校验" href="javascript:void(0)">人工校验</a></li>
                            <li><a data-href="<?php echo U('Pests/typeList');?>" data-title="类型管理" href="javascript:void(0)">类型管理</a></li>
                          
                        </ul>
                        
                    </dd>
		</dl>-->
<!--		<dl id="menu-pests">
                    <dt><i class="Hui-iconfont">&#xe634;</i> 环境数据<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                            <li><a data-href="<?php echo U('Env/envList');?>" data-title="环境数据列表" href="javascript:void(0)">环境数据列表</a></li>
                            
                        </ul>   
                    </dd>
		</dl>-->
<!--<dl id="menu-system">
                    <dt><i class="Hui-iconfont">&#xe62e;</i> 菜单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                            <li><a data-href="<?php echo U('System/webSetup');?>" data-title="前台菜单管理" href="javascript:void(0)">前台菜单管理</a></li>
                            <li><a data-href="<?php echo U('System/systemData');?>" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>
                            <li><a data-href="<?php echo U('System/regionList');?>" data-title="区域设置" href="javascript:void(0)">区域设置</a></li>
                            <li><a data-href="<?php echo U('System/navList');?>" data-title="后台菜单管理" href="javascript:void(0)">后台菜单管理</a></li>
                            <li><a data-href="<?php echo U('System/dataSyn');?>" data-title="数据同步" href="javascript:void(0)">数据同步</a></li>

                        </ul>
                    </dd>
		</dl>-->
		<dl id="menu-comments">
                    <dt><i class="Hui-iconfont">&#xe63c;</i> 设备管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                                <li><a data-href="<?php echo U('Device/deviceList');?>" data-title="设备列表" href="javascript:;">设备列表</a></li>
                                <!--<li><a data-href="<?php echo U('Device/deviceAbn');?>" data-title="设备状态" href="javascript:;">设备状态</a></li>-->
                                <li><a data-href="<?php echo U('Device/commandList');?>" data-title="命令管理" href="javascript:;">命令管理</a></li>
                                <li><a data-href="<?php echo U('Device/moduleList');?>" data-title="模块管理" href="javascript:;">模块管理</a></li>
                                <!--<li><a data-href="<?php echo U('Device/alarmList');?>" data-title="报警信息" href="javascript:;">报警信息</a></li>-->

                        </ul>
                    </dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('User/userList');?>" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<li><a data-href="<?php echo U('User/delList');?>" data-title="删除的会员" href="javascript:;">删除的会员</a></li>
				</ul>
			</dd>
		</dl>
                <dl id="menu-rule">
			<dt><i class="Hui-iconfont">&#xe60e;</i> 权限控制<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
                            <ul>
                                <!--<li><a data-href="<?php echo U('Admin/ChangePassword');?>" data-title="修改密码" href="javascript:void(0)">修改密码</a></li>-->
                                <li><a data-href="<?php echo U('Auth/groupList');?>" data-title="用户组管理" href="javascript:void(0)">用户组管理</a></li>
                                <li><a data-href="<?php echo U('Auth/ruleList');?>" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
                                <!--<li><a data-href="<?php echo U('Admin/adminList');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>-->
                                <!--<li><a data-href="<?php echo U('Admin/delList');?>" data-title="删除的管理员" href="javascript:void(0)">删除的管理员</a></li>-->

                            </ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!--<li><a data-href="<?php echo U('Admin/ChangePassword');?>" data-title="修改密码" href="javascript:void(0)">修改密码</a></li>-->
                                        <!--<li><a data-href="<?php echo U('Admin/roleList');?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>-->
					<!--<li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>-->
					<li><a data-href="<?php echo U('Admin/adminList');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
                                        <!--<li><a data-href="<?php echo U('Admin/delList');?>" data-title="删除的管理员" href="javascript:void(0)">删除的管理员</a></li>-->

				</ul>
			</dd>
		</dl>
       <dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 个人管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Person/ChangePassword');?>" data-title="修改密码" href="javascript:void(0)">修改密码</a></li>
                                        <!--<li><a data-href="<?php echo U('Admin/roleList');?>" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>-->
					<!--<li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>-->
<!--					<li><a data-href="<?php echo U('Admin/adminList');?>" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
                                        <li><a data-href="<?php echo U('Admin/delList');?>" data-title="删除的管理员" href="javascript:void(0)">删除的管理员</a></li>-->

				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
                    <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                            <li><a data-href="<?php echo U('System/webSetup');?>" data-title="网站设置" href="javascript:void(0)">系统设置</a></li>
                            <!--<li><a data-href="<?php echo U('System/systemData');?>" data-title="数据字典" href="javascript:void(0)">数据字典</a></li>-->
                            <li><a data-href="<?php echo U('System/regionList');?>" data-title="区域设置" href="javascript:void(0)">区域设置</a></li>
                            <!--<li><a data-href="<?php echo U('System/navList');?>" data-title="后台菜单管理" href="javascript:void(0)">后台菜单管理</a></li>-->
                            <!--<li><a data-href="<?php echo U('System/dataSyn');?>" data-title="数据同步" href="javascript:void(0)">数据同步</a></li>-->

                        </ul>
                    </dd>
		</dl>
                <dl id="menu-expand">
                    <dt><i class="Hui-iconfont">&#xe620;</i> 扩展管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                                <!--<li><a data-href="<?php echo U('Expand/slideList');?>" data-title="幻灯片管理" href="javascript:void(0)">幻灯片管理</a></li>-->
                                <li><a data-href="<?php echo U('Expand/typeList');?>" data-title="病虫害管理" href="javascript:void(0)">病虫害管理</a></li>
                                <li><a data-href="<?php echo U('Expand/cityList');?>" data-title="省市区县管理" href="javascript:void(0)">省市区县管理</a></li>
                                <!--<li><a data-href="<?php echo U('Unit/unitList');?>" data-title="单位管理" href="javascript:void(0)">单位管理</a></li>-->
                        </ul>
                    </dd>
		</dl>
<!--                <dl id="menu-expand">
                    <dt><i class="Hui-iconfont">&#xe620;</i> 回收站<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                    <dd>
                        <ul>
                                <li><a data-href="<?php echo U('Expand/slideList');?>" data-title="幻灯片管理" href="javascript:void(0)">幻灯片管理</a></li>
                                <li><a data-href="<?php echo U('Expand/linksList');?>" data-title="友情链接" href="javascript:void(0)">友情链接</a></li>
                                
                        </ul>
                    </dd>
		</dl>-->
            
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
		</div>
	</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
	</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/static/jquery/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="/Public/static/layui/layui.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/Public/js/my-utils.js"></script> 
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/static/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script tyep="text/javascript">
    function show(title,url,w,h){
        layer_show(title,url,w,h);
    }
    function quit(){
        window.location.href = "<?php echo U('Index/quit');?>";
    }
</script>
</body>
</html>