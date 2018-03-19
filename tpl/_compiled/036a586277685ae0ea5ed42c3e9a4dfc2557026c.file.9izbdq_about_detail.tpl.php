<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:51:38
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_about_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325325a2f63704fdf38-77256565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036a586277685ae0ea5ed42c3e9a4dfc2557026c' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_about_detail.tpl',
      1 => 1513056160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325325a2f63704fdf38-77256565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f6370a87336_77602572',
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'aboutcat' => 0,
    'volist' => 0,
    'aboutlist' => 0,
    'val' => 0,
    'id' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f6370a87336_77602572')) {function content_5a2f6370a87336_77602572($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('about', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="about">
  <div class="left">
    <?php $_smarty_tpl->tpl_vars['aboutcat'] = new Smarty_variable(vo_list("mod={aboutcat}"), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aboutcat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
    <h2 class="ablefth2" id="mycss_<?php echo $_smarty_tpl->tpl_vars['volist']->value['catid'];?>
"><a href="javascript:void(0);" onclick="changemenu(<?php echo $_smarty_tpl->tpl_vars['volist']->value['catid'];?>
);"><?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>
</a></h2>
    <div class="aba" id='mylist_<?php echo $_smarty_tpl->tpl_vars['volist']->value['catid'];?>
' style="display:block;"> 
    <?php $_smarty_tpl->tpl_vars['aboutlist'] = new Smarty_variable(vo_list("mod={about} where={v.catid='".((string)$_smarty_tpl->tpl_vars['volist']->value['catid'])."'}"), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aboutlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['val']->value['abid']){?>abnow<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
    <?php } ?>
    </div>
    <?php } ?>
  </div>
  <div class="right">
    <h1><?php echo $_smarty_tpl->tpl_vars['about']->value['title'];?>
</h1>
    <div class="abcontent"><?php echo $_smarty_tpl->tpl_vars['about']->value['content'];?>
 </div>
  </div>
  <div style="clear:both;"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<script language="javascript">
function changemenu(id){
	if ($('#mycss_'+id).attr('class') == 'ablefth1') {
		$('#mycss_'+id).removeClass('ablefth1');
		$('#mycss_'+id).addClass('ablefth2');
		$('#mylist_'+id).show();
	}
	else {
		$('#mycss_'+id).removeClass('ablefth2');
		$('#mycss_'+id).addClass('ablefth1');
		$('#mylist_'+id).hide();
	}
}
</script><?php }} ?>