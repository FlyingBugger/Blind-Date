<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:53:38
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\index_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171135a2fdf62d64e49-51595609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c0b3d8b5c4c9e2b7659067b027a88a2b13effb3' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\index_payment.tpl',
      1 => 1416899376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171135a2fdf62d64e49-51595609',
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
  'unifunc' => 'content_5a2fdf62f20f32_65217243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdf62f20f32_65217243')) {function content_5a2fdf62f20f32_65217243($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable('', null, 0);?>
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