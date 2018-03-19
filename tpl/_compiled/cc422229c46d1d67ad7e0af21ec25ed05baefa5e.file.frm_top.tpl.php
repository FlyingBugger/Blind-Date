<?php /* Smarty version Smarty-3.1.14, created on 2018-01-03 12:50:08
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\frm_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79355a2f5cc9efeec2-77052792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc422229c46d1d67ad7e0af21ec25ed05baefa5e' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\frm_top.tpl',
      1 => 1514954679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79355a2f5cc9efeec2-77052792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5cca222262_40478064',
  'variables' => 
  array (
    'page_charset' => 0,
    'cppath' => 0,
    'urlpath' => 0,
    'cpfile' => 0,
    'logincp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5cca222262_40478064')) {function content_5a2f5cca222262_40478064($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>top-Powered by XinElove</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
css/top.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
js/top.js"></script>
<!--[if lte IE 6]>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
js/DD_belatedPNG-min.js'></script>
<script language="javascript">DD_belatedPNG.fix('.logo');</script>
<![endif]-->
</head>
<body>
<div id="top">
  <div class="logo"></div>
  <div id="navs">
	<ul>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=setting">系统设置</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=content">内容管理</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=user">用户管理</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=seo">运营管理</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=skin">界面模板</a></li>
	  <li><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left&mod=app">应用&插件</a></li>
	</ul>  
  </div>
  <div id="right">
    <div class="text">
       欢迎回来：<?php echo $_smarty_tpl->tpl_vars['logincp']->value['adminname'];?>
&nbsp;&nbsp;<font color="#ffffff">|</font>&nbsp;&nbsp;
	   <a href="index.php" target="_blank">网站首页</a>&nbsp;&nbsp;<font color="#ffffff">|</font>&nbsp;&nbsp;
	   <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=login&a=logout" target="_top">退出登录</a>&nbsp;&nbsp;
    </div>
    <dl class="ck">
      <dt><a href="javascript:;" f="but_update_cache">清除缓存</a></dt>
      <dd id="clear_box" style="display:none;"><img src="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
images/loading.gif" /><b>清除中..</b></dd>
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
				url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting",
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
</html><?php }} ?>