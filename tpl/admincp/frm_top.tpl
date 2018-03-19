<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>top-Powered by XinElove</title>
<link rel="stylesheet" type="text/css" href="<!--{$cppath}-->css/top.css" />
<script type="text/javascript" src="<!--{$urlpath}-->tpl/static/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<!--{$cppath}-->js/top.js"></script>
<!--[if lte IE 6]>
<script type='text/javascript' src='<!--{$cppath}-->js/DD_belatedPNG-min.js'></script>
<script language="javascript">DD_belatedPNG.fix('.logo');</script>
<![endif]-->
</head>
<body>
<div id="top">
  <div class="logo"></div>
  <div id="navs">
	<ul>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=setting">系统设置</a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=content">内容管理</a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=user">用户管理</a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=seo">运营管理</a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=skin">界面模板</a></li>
	  <li><a href="<!--{$cpfile}-->?c=frame&a=left&mod=app">应用&插件</a></li>
	</ul>  
  </div>
  <div id="right">
    <div class="text">
       欢迎回来：<!--{$logincp.adminname}-->&nbsp;&nbsp;<font color="#ffffff">|</font>&nbsp;&nbsp;
	   <a href="index.php" target="_blank">网站首页</a>&nbsp;&nbsp;<font color="#ffffff">|</font>&nbsp;&nbsp;
	   <a href="<!--{$cpfile}-->?c=login&a=logout" target="_top">退出登录</a>&nbsp;&nbsp;
    </div>
    <dl class="ck">
      <dt><a href="javascript:;" f="but_update_cache">清除缓存</a></dt>
      <dd id="clear_box" style="display:none;"><img src="<!--{$cppath}-->images/loading.gif" /><b>清除中..</b></dd>
    </dl>
  </div>
  <div style="clear:both;"></div>
</div>

<script type="text/javascript">
$(function(){

	//更新缓存
	$(document).on("click", "[f='but_update_cache']", function(){
		if ($("#clear_box").css("display") == "none") {
			$("#clear_box").find("b").html("清除中..");
			$("#clear_box").slideDown(100);
			$.ajax({
				type: "POST",
				url: "<!--{$cpfile}-->?c=setting",
				cache: false,
				data: {a:"dealcache"},
				dataType: "json",
				success: function(data) {
					$json = eval(data);
					$response = $json.response;
					$result = $json.result;
					if ($response == '1') {
						$("#clear_box").find("b").html("清除成功");
						setTimeout(function(){
							$("#clear_box").slideUp(100);
						}, 500);
					}
				},
				error: function() {
				}
			});
		}
	});


});
</script>
</body>
</html>