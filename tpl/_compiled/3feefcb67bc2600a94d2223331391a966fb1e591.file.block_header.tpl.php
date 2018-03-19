<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:48
         compiled from "D:\weixin\desktop\jy\tpl\wap\block_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112335aaf1a48795b15-87564304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3feefcb67bc2600a94d2223331391a966fb1e591' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\block_header.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112335aaf1a48795b15-87564304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
    'page_keyword' => 0,
    'copyright_author' => 0,
    'wapfile' => 0,
    'urlpath' => 0,
    'wapskin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a48810cd1_74437928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a48810cd1_74437928')) {function content_5aaf1a48810cd1_74437928($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_keyword']->value;?>
" />
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['copyright_author']->value;?>
" />
<meta name="generator" content="OElove" />
<script type="text/javascript">
var WAP_APPFILE = "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
";
var _ROOT_PATH = "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
";
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript">
var WIN_WIDTH = $(window).width();
if ($.browser.mozilla) {
	WIN_WIDTH = window.screen.width; //兼容Mozilla
}
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/ajaxfileupload.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/jquery.SuperSlide.2.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/iscroll.v4.2.5.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/toast_OELOVE26FL319L.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/public_OELOVE26FL319L.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
style/append_OELOVE26FL319L.css" />
</head>
<body>
<div id="loading"></div>  
<script type="text/javascript">
$(function(){
	setTimeout(function(){
		$("#loading").hide();
		$("#loading").remove();
	}, 100);
});
</script> <?php }} ?>