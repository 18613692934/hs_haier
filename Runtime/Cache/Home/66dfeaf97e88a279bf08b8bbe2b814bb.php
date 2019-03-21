<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title>登录</title>
<link rel="stylesheet" type="text/css" href="/Tpl/Home/Public/home/css/login.min.css" />
</head>
<body>
	<div class="header">
	</div>
	<div class="body">
		<div class="login_box">
			<div class="login_panel">
				<div>
                                    <div style="color:#006dcc; font-size:22px;height:0.76rem;line-height:0.76rem;float:right;margin-right: 10px;">
                                        海尔COSMOPlat种植管理人工智能平台
                                    </div>
				</div>
				<div class="login_frame" style="margin-top: 0.5rem;">
					<h2>登录</h2>
					<div class="login_err"><p><i>提示:</i><span></span></p></div>
					<form class="login_form" method="post" >
						<input type="hidden" name="iframe" value="0">
						<div class="input_box username"><label>用户名:</label><input name="username" type="text" placeholder="用户名"></div>
						<div class="input_box password"><label>密码:</label><input name="password" type="password" placeholder="密码"></div>	
<!--						<div class="verifycode">
							<input type="text" name="verify" placeholder="校验码" style="height:14px;">
							<img class="verifyimg" src="<?php echo U('Home/Login/verify',['t'=>time()]);?>" title="看不清,换一张试试！" style="height:35px;">
						</div>-->
						<div class="login_btn">
							<a title="点击登录" href="javascript:void(0);" class="login_button submit" allow="true">登录</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer" id="footer">
		<div class="footer_box">
			 <p>海尔COSMOPlat种植管理人工智能平台 鲁ICP备050110101号</p> 
		</div>
	</div>
    <script type="text/javascript" src="/Tpl/Home/Public/home/js/jquery.min.js"></script> 
    <script type="text/javascript" src="/Tpl/Home/Public/home/js/layer/layer.js"></script> 
    <script type="text/javascript" src="/Tpl/Home/Public/home/js/fontSize.js"></script> 
	<script type="text/javascript">
//		$('.verifyimg').click(function(){$(this).attr('src','{:U("Home/Login/verify",["t"=>time()])}')});
	</script>
	<script>
	    $('.submit').click(function(){
	        var username = $("input[name='username']").val();
	        var password = $("input[name='password']").val();
//	        var verify = $("input[name='verify']").val();
	        if(username==''){
	            layer.msg('请输入用户名');
	            return false;
	        }
	        if(password==''){
	            layer.msg('请输入密码');
	            return false;
	        }
	        $.ajax({
	            type: "post",
	            url: "<?php echo U('login');?>",
	            dataType: "json",
	            data: {uname:username,password:password},
	            beforeSend: function() {},
	            success: function(json) {
	                layer.msg(json.msg);
	                if(json.status==1){
	                    setTimeout(function(){
	                        location.href = json.url;
	                    },1500);
	                }
	            },
	        });
	    })
	</script>
</body>
</html>