<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:53:39
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\block_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175665a2fdf6303d4a3-31970761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2524877365b555499ba29c2a3f586778e21f8d67' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\block_menu.tpl',
      1 => 1416899298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175665a2fdf6303d4a3-31970761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wapfile' => 0,
    'wapskin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdf63142448_91911643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdf63142448_91911643')) {function content_5a2fdf63142448_91911643($_smarty_tpl) {?><div class="square-layout">
  <ul>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121789.png" />我的资料</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_match');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121884.png" />缘分速配</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_message');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121746.png" />收件箱</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121867.png" />发件箱</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_visitme');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121945.png" />谁看过我</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_visit');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121946.png" />我看过谁</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_fans');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121949.png" />我的粉丝</span></li>
	<li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_listen');"><span><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/1121950.png" />我的关注</span></li>
  </ul>
  <div class="clear"></div>
</div><?php }} ?>