<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:08:34
         compiled from "D:\weixin\desktop\jy\tpl\wap\block_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85575aaf1ba2aa39f8-80751919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d619b9c0e16a798ddcebafe8259d133010288c' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\block_menu.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85575aaf1ba2aa39f8-80751919',
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
  'unifunc' => 'content_5aaf1ba2b0df70_58766890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1ba2b0df70_58766890')) {function content_5aaf1ba2b0df70_58766890($_smarty_tpl) {?><div class="square-layout">
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