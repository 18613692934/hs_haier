<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <script>
        if(window != top){
            top.location.href = location.href;
        }
    </script>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link href="/Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/Public/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/static/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/js/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo C('ADMIN_TITLE');?></title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"><?php echo C('ADMIN_TITLE');?></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" id="form-login">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls ">
          <input id="login_name" name="login_name" type="text" onBlur="loginName()" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls ">
          <input id="password" name="password" type="password" onBlur="pwd()" placeholder="密码" class="input-text size-L">
        </div>
      </div>
<!--      <div class="row cl">
        <div class="formControls  col-xs-offset-3">
          <input class="input-text size-L" type="text" name="verify" id="" placeholder="验证码" onBlur="ver()" style="width:150px;">
          <img id="verify" src="<?php echo U('Admin/Login/verify');?>"> <a id="kanbuq" href="javascript::" onclick="refresh()">看不清，换一张</a> </div>
      </div>-->
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 济宁北斗平台 </div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/static/jquery/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="/Public/static/layui/layui.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/Public/js/my-utils.js"></script> 
<!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/static/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/static/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/static/jquery.validation/1.14.0/messages_zh.js"></script> 


<script type="text/javascript">
//    //验证码刷新
//    function refresh(){
//        var time = new Date().getTime();
//        src = "<?php echo U('Login/verify',array(time=>dataTime));?>";
//        src = src.replace("dataTime",time);
//        document.getElementById('verify').src = src;
//    }
//    window.onresize = refresh();

    $(function(){
//        refresh();
	$("#form-login").validate({
                rules:{
			login_name:{
				required:true,
				minlength:4,
				maxlength:16,
			},
			password:{
				required:true,
			},
			verify:{
				required:true,
			},     
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){                   
                    $(form).ajaxSubmit({
                            type: 'post',
                            url: "<?php echo U('Login/login');?>" ,
                            success: function(data){    
                                if(data.code===0){
                                    layui.use('layer', function(){ //独立版的layer无需执行这一句
                                        var layer = layui.layer; //独立版的layer无需执行这一句
                                        layer.msg(data.msg,{icon:1,time:1000});
                                        refresh();
                                    });
        
                                   
                                }
                               if(data.code===1){
                                    layui.use('layer', function(){ //独立版的layer无需执行这一句
                                        var layer = layui.layer; //独立版的layer无需执行这一句
                                        layer.msg(data.msg,{icon:1,time:1000});
                                         setTimeout(function(){
                                        window.location.href="<?php echo U('Index/index');?>";
                                    },500);
                                    });
        
                                   
                                }
                                

                                
                                   
                            },
                            error: function(XmlHttpRequest, textStatus, errorThrown){
                                    layer.msg('程序出错，联系管理员!',{icon:1,time:2000});                                                           
                            }
			});         
                        
                        
		},
	});
});
    
</script>
    
</body>
</html>