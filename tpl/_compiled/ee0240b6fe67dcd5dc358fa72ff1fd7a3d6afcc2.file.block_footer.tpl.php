<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:45:12
         compiled from "D:\freehost\ftp122778453\web\tpl\user\block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197775a2fdd6845e294-18148742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee0240b6fe67dcd5dc358fa72ff1fd7a3d6afcc2' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\user\\block_footer.tpl',
      1 => 1512114984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197775a2fdd6845e294-18148742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'uctplpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdd68483d92_32009638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdd68483d92_32009638')) {function content_5a2fdd68483d92_32009638($_smarty_tpl) {?><div class="user_footer" style="padding-bottom:30px;">
  <?php echo $_smarty_tpl->tpl_vars['config']->value['sitefooter'];?>

</div>
<!--//user_footer End-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_popwin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
jQuery(".drop").slide({ type:"menu", titCell:".cin", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});
</script><?php }} ?>