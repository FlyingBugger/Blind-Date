<?php /* Smarty version Smarty-3.1.14, created on 2018-01-03 12:50:10
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\frm_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282245a2f5ccbcab776-57355223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eaf7117feb4d24d704cb09f3873c9cf3959a111' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\frm_main.tpl',
      1 => 1514954679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282245a2f5ccbcab776-57355223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5ccbdd6a47_25181870',
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'cppath' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5ccbdd6a47_25181870')) {function content_5a2f5ccbdd6a47_25181870($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<meta name="author" content="XinElove" />
<meta name="generator" content="XinElove" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>首页-</title>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cppath']->value;?>
css/admin.css" media="screen" />
</head>
<body>
<div class="main-wrap">
<div class="path">
  <p>当前位置：管理首页<span></span></p>
</div>
<div class="main-cont">
  <h3 class="title" style='display:block;'>网站基本数据</h3>
  <div class="box" style="display:block;width:700px;">
    <ul class="group-item">
	  <li>会员总数：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countusers']);?>
</span></li>
	  <li>男 会 员：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countmaleusers']);?>
</span></li>
	  <li>女 会 员：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countfemaleusers']);?>
</span></li>
	</ul>
	<ul class="group-item">
	  <li>在线会员：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countonlineusers']);?>
</span></li>
	  <li>信件总数：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countmessages']);?>
</span></li>
	  <li>日记总数：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countdiarys']);?>
</span></li>
	</ul>
	<ul class="group-item">
	  <li>心情播报：<span><?php echo number_format($_smarty_tpl->tpl_vars['config']->value['countweibos']);?>
</span></li>
	</ul>
  </div>
</div>
<div style="clear:both;"></div>
</div>
</body>
</html>

<?php }} ?>