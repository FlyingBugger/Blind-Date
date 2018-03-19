<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:09:31
         compiled from "D:\weixin\desktop\jy\tpl\wap\cp_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241155aaf1bdb67a491-83211822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6dd7570abb9dd844185bd84ca0d26d46c36e42' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\cp_info.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241155aaf1bdb67a491-83211822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1bdb6f7773_57407526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1bdb6f7773_57407526')) {function content_5aaf1bdb6f7773_57407526($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("cp", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cp-bartitle">修改资料</div>

<div class="cp-layout-body-gray">

  <div class="cp-index-bar">
    <ul>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=base');"><span><i class="iconfont">&#xe680;</i></span>基本资料<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=area');"><span><i class="iconfont">&#xe636;</i></span>设置地区<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=life');"><span><i class="iconfont">&#xe606;</i></span>生活资料<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=looks')" style="border-bottom:none;"><span><i class="iconfont">&#xe6c7;</i></span>外貌资料<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>

  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=monolog');"><span><i class="iconfont">&#xe62c;</i></span>内心独白<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=work');"><span><i class="iconfont">&#xe668;</i></span>学习工作<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=guihua');" style="border-bottom:none;"><span><i class="iconfont">&#xe638;</i></span>爱情规划<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>

  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=interest');"><span><i class="iconfont">&#xe629;</i></span>兴趣爱好<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info&a=contact');" style="border-bottom:none;"><span><i class="iconfont">&#xe646;</i></span>联系方式<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer_cp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>