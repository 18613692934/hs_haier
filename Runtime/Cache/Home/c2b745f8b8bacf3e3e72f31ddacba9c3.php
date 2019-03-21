<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo ($arr['webname']['info_value']); ?></title>
        <include file="Public/_meta"/>
         <link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/css/index-iframe.css">
           <link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/picture/index-nav-icon/font/flaticon.css"> 
               <link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/picture/leaves/font/flaticon.css"> 
    </head>
    <body>
        <div id=loading style="position:absolute;width:100%;z-index:9999">
        <?php echo W('Header/loading');?>
        </div>
           <?php echo W('Header/header');?>
           <aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
          
                <dl id="menu-product">
                    <dt></i> <a data-href="home.html" data-title="个人中心" href="javascript:void(0)">个人中心</a></dt>

		</dl>
		<dl id="menu-article">
			<dt> 设备管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="device.html" data-title="设备列表" href="javascript:void(0)">设备列表</a></li>
				</ul>
			</dd>
		</dl>
            <dl id="menu-article">
			<dt><a data-href="pwdEdit.html" data-title="修改密码" href="javascript:void(0)">修改密码</a></dt>

		</dl>
            <dl id="menu-article">
			<dt> 用户档案<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="userPro.html" data-title="用户档案" href="javascript:void(0)">用户档案</a></li>
				</ul>
			</dd>
		</dl>
            <dl id="menu-article">
			<dt> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="pestPicture.html" data-title="虫害图片管理" href="javascript:void(0)">虫害图片管理</a></li>
                                        <li><a data-href="pictureList.html" data-title="虫害图片管理" href="javascript:void(0)">虫害图片管理</a></li>
				</ul>
			</dd>
		</dl>
            <dl id="menu-article">
			<dt>落叶管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="leaf.html" data-title="落叶管理" href="javascript:void(0)">落叶管理</a></li>
				</ul>
			</dd>
		</dl>
            
	</div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
    <section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden">
		<div class="Hui-tabNav-wp">
                    <ul id="min_title_list" class="acrossTab cl">
                            <li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
                    </ul>
		</div>
	</div>
        <div id="iframe_box" class="Hui-article">
            <div class="show_iframe">
                <div style="display:none" class="loading"></div>
                <iframe scrolling="yes" frameborder="0" src="home.html"></iframe>
            </div>
        </div>
    </section>
</body>
<include file="Public/_footer"/> 
<script>
    window.onload = setTimeout( function(){
        $("#loading").hide();
    },1);
</script>
</html>