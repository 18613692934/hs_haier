<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<HTML>
 <HEAD>
  <TITLE> ZTREE DEMO </TITLE>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="/Public/static/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
  <script type="text/javascript" src="/Public/js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="/Public/static/zTree/v3/js/jquery.ztree.core-3.5.js"></script>
  <script language="JavaScript">
  
  var zTreeObj;
  // zTree 的参数配置，深入使用请参考 API 文档（setting 配置详解）
  var setting = {};
  // zTree 的数据属性，深入使用请参考 API 文档（zTreeNode 节点数据详解）
  var zNodes ;
  
  $(function(){
	  $.ajax({
		  type:"post",
		  url:"Tree",
		  data:{"name":1},
		  success:function(data){
			  zNodes = data;
			  alert(1234);
			  zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
		  },
		  error:function(){
			  alert(11);
		  }
	  });
	 
  });
  
   
   
   $(document).ready(function(){
      zTreeObj = $.fn.zTree.init($("#treeDemo"), setting, zNodes);
   });
  </script>
 </HEAD>
<BODY>
<div>
   <ul id="treeDemo" class="ztree"></ul>
</div>
</BODY>
</HTML>