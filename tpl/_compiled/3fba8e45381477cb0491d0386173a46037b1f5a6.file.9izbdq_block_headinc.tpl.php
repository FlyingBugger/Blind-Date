<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:33
         compiled from "D:\weixin\desktop\jy\tpl\templets\default\9izbdq_block_headinc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94995aaf1a39d07695-70769412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fba8e45381477cb0491d0386173a46037b1f5a6' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\templets\\default\\9izbdq_block_headinc.tpl',
      1 => 1514954682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94995aaf1a39d07695-70769412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'page_title' => 0,
    'page_description' => 0,
    'page_keyword' => 0,
    'skinpath' => 0,
    'urlpath' => 0,
    'tplpath' => 0,
    'tplpre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a39d3bfa0_96317177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a39d3bfa0_96317177')) {function content_5aaf1a39d3bfa0_96317177($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page_keyword']->value;?>
" />
<meta name="author" content="OEdev" />
<meta name="generator" content="OElove" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
css/jdlogin.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
css/style.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/varpop/css/oe_varpop.css" rel="stylesheet" />
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginaction'] = new Smarty_variable(XHook::doAction('index_head'), null, 0);?>
</head><?php }} ?>