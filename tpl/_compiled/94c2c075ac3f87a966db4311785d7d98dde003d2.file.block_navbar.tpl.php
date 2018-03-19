<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:48
         compiled from "D:\weixin\desktop\jy\tpl\wap\block_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279105aaf1a4882f343-90654952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c2c075ac3f87a966db4311785d7d98dde003d2' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\block_navbar.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279105aaf1a4882f343-90654952',
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
  'unifunc' => 'content_5aaf1a4883d2a1_45096920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a4883d2a1_45096920')) {function content_5aaf1a4883d2a1_45096920($_smarty_tpl) {?><div class="oe_top">
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