<?php /* Smarty version Smarty-3.1.14, created on 2017-12-16 10:31:07
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\block_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118075a2fd81837e2d0-10592380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119c8713568448b358b1ae7e12f40dca9a5a0c1c' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\block_header.tpl',
      1 => 1513391429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118075a2fd81837e2d0-10592380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fd818442ee1_43543447',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fd818442ee1_43543447')) {function content_5a2fd818442ee1_43543447($_smarty_tpl) {?><!DOCTYPE html>
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