<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:10:47
         compiled from "D:\weixin\desktop\jy\tpl\wap\index_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234295aaf1c272edd81-67687466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a41111e89ee95f1ff3d103fb6853afe8effb1c2b' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\index_payment.tpl',
      1 => 1514954696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234295aaf1c272edd81-67687466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1c27374499_33638554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1c27374499_33638554')) {function content_5aaf1c27374499_33638554($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="layout-body">
  <div class="about-layout">
    <h1>付款方式</h1>
    <div class="about-content">
	  <?php if (empty($_smarty_tpl->tpl_vars['content']->value)){?>
	  <p style="padding:10px;text-align:center;">未编辑</p>
	  <?php }else{ ?>
	  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	  <?php }?>
	</div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>