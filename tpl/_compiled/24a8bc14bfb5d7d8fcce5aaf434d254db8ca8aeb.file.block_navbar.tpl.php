<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:22:32
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\block_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177725a2fd818473477-27263131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24a8bc14bfb5d7d8fcce5aaf434d254db8ca8aeb' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\block_navbar.tpl',
      1 => 1512002430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177725a2fd818473477-27263131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_id' => 0,
    'config' => 0,
    'wapfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fd8184eead0_21806112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fd8184eead0_21806112')) {function content_5a2fd8184eead0_21806112($_smarty_tpl) {?><div class="oe_top">
<?php if ($_smarty_tpl->tpl_vars['menu_id']->value!='index'){?>
  <span class="goback"  onclick="goBack();">
    <i class="iconfont">&#xe643;</i>
  </span>
<?php }?>
  <p><?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
</p>
  <span class="search" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&a=advsearch');" >
    <i class="iconfont">&#xe690;</i>
  </span>
</div>
<div style="height:50px;"></div><?php }} ?>