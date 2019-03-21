<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
    <p class="f-20 text-success">  <?php echo ($only['login_name']); ?> <em>欢迎使用</em></p>
	
        <div class="cl" >
            <div class="page-container" >
                <div style="width: 45%;" class="panel panel-success ml-15 mr-15 f-l min-height-200   ">
                    <div class="panel-header">我的信息</div>
                    
                
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr >
                                    生活赋予我们一种巨大的和无限高贵的礼品，这就是青春：充满着力量，充满着期待志愿，充满着求知和斗争的志向，充满着希望信心和青春。 
                            <p style="float: right">—— 奥斯特洛夫斯基</p>  
                            <p> &nbsp;</p>
                                </tr>  
                                <tr>
                                    <th>当前用户</th>
                                    <td><?php echo ($only['login_name']); ?></td>
                                </tr>
                                <tr>
                                    <th>上次登录IP</th>
                                    <td><?php echo ($only['login_ip']); ?></td>
                                </tr>
                                <tr>
                                    <th>上次登录时间</th>
                                    <td><?php echo (date('Y-m-d H:i:s',$only['login_time'])); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="width: 45%;" class="panel panel-success ml-15 mr-15 f-l">
                    <div class="panel-header">最新文档</div>
                    <div class="panel-body">面板内容</div>
                </div>
            </div>
        </div>
        <div class="cl" >
            <div class="page-container" >
                <div style="width: 45%;" class="panel panel-success ml-15 mr-15 f-l  ">
                    <div class="panel-header">系统信息</div>
                    <div class="panel-body">
                        <table class="table  ">
                            <tbody>
                                <foreach name="info" item="v" key="k">
                                    <tr>
                                        <th width="30%"><?php echo ($k); ?></th>
                                        <td><span id="lbServerName"><?php echo ($v); ?></span></td>
                                    </tr>
                                </foreach>	
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div style="width: 45%;" class="panel panel-success ml-15 mr-15 f-l  ">
                    <div class="panel-header">开发团队</div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>产品设计及研发团队</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>界面及用户体验团队</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>官方网址</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>BUG反馈</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>联系我们</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>
                    本后台系统由<a href="#" target="_blank" title="济宁北斗平台">济宁北斗平台</a>提供技术支持
                </p>
	</div>
</footer>

</body>
<script type="text/javascript" src="/Public/js/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script> 
<script>
    $(function(){
       
            var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
        if(index){
            setTimeout(function () {
//                window.parent.location.reload(); //刷新父页面
                parent.layer.close(index);   // 关闭layer  
            },500); 
        }
            
    });
   
</script>
</html>