<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:10:21
         compiled from "D:\weixin\desktop\jy\tpl\wap\block_eif.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204305aaf1c0d2431f5-59857614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09872e340ba032fa9b9e1578755fa953bc4b3103' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\block_eif.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204305aaf1c0d2431f5-59857614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlpath' => 0,
    'ucpath' => 0,
    'eif_i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1c0d32f870_66691830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1c0d32f870_66691830')) {function content_5aaf1c0d32f870_66691830($_smarty_tpl) {?><script type="text/javascript" language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/mood-eif.js" ></script>
<style type="text/css">

</style>
<div id="emface_preview_pannel" class="eif-preview-pannel"></div>
<div id="emface_pannel" class="eif-pannel">
  <div class="emface-border">
	<div class="emface-bg"><a href="###" onclick="emface_close();"><img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/em_close.gif" border="0"/></a></div>
	<div class="clear"></div>
	<div class="eif-content">
	  <?php $_smarty_tpl->tpl_vars['eif_i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['eif_i']->step = 1;$_smarty_tpl->tpl_vars['eif_i']->total = (int)ceil(($_smarty_tpl->tpl_vars['eif_i']->step > 0 ? 104+1 - (0) : 0-(104)+1)/abs($_smarty_tpl->tpl_vars['eif_i']->step));
if ($_smarty_tpl->tpl_vars['eif_i']->total > 0){
for ($_smarty_tpl->tpl_vars['eif_i']->value = 0, $_smarty_tpl->tpl_vars['eif_i']->iteration = 1;$_smarty_tpl->tpl_vars['eif_i']->iteration <= $_smarty_tpl->tpl_vars['eif_i']->total;$_smarty_tpl->tpl_vars['eif_i']->value += $_smarty_tpl->tpl_vars['eif_i']->step, $_smarty_tpl->tpl_vars['eif_i']->iteration++){
$_smarty_tpl->tpl_vars['eif_i']->first = $_smarty_tpl->tpl_vars['eif_i']->iteration == 1;$_smarty_tpl->tpl_vars['eif_i']->last = $_smarty_tpl->tpl_vars['eif_i']->iteration == $_smarty_tpl->tpl_vars['eif_i']->total;?>
	  <a href="javascript:;" onclick="insertFace('<?php echo $_smarty_tpl->tpl_vars['eif_i']->value;?>
');" class="face-body" >
          <img class="cursor" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/face/<?php echo $_smarty_tpl->tpl_vars['eif_i']->value;?>
.gif" f="selectem" data-id="<?php echo $_smarty_tpl->tpl_vars['eif_i']->value;?>
">
	  </a>
	  <?php }} ?>
      <div class="clear"></div>
	</div>
  </div>
</div><?php }} ?>