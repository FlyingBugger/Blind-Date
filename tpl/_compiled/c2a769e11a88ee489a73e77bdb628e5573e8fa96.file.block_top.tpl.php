<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:45:11
         compiled from "D:\freehost\ftp122778453\web\tpl\user\block_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229815a2fdd676fcf70-27555510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a769e11a88ee489a73e77bdb628e5573e8fa96' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\user\\block_top.tpl',
      1 => 1390724900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229815a2fdd676fcf70-27555510',
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
  'unifunc' => 'content_5a2fdd6774ae52_58144856',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdd6774ae52_58144856')) {function content_5a2fdd6774ae52_58144856($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['config']->value['usercpskin']=='1'){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value).((string)$_smarty_tpl->tpl_vars['config']->value['templet'])."/block_top_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_top_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>