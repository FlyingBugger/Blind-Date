<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:56:31
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\user_idsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70265a2fe00fee5c66-90137547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5adae80b55999d98e069bbcddcda47356e2b644' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\user_idsearch.tpl',
      1 => 1492156516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70265a2fe00fee5c66-90137547',
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
  'unifunc' => 'content_5a2fe01017a143_90381563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fe01017a143_90381563')) {function content_5a2fe01017a143_90381563($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("user", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="hr-shadow"></div>
<div class="tab-layout">
  <ul>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user');" style="width:33.3%">搜索结果</li>
    <li class="tab-selected" style="width:33.3%">ID搜索</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&a=advsearch');" style="width:33.3%">条件搜索</li>
  </ul>
  <div class="clear"></div>
</div>

<form id="form_search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user">
<div class="search-id">
  <div class="search-ks">
    <input type="text" onblur="if (value ==''){value='请输入会员ID'}" onfocus="if (value =='请输入会员ID'){value =''}" value="请输入会员ID" name="s_uid" id="s_uid" />
    <span class="ks-btn" id="btn_search"></span>
  </div>
</div>
</form>
<script type="text/javascript">
$(function(){
	$("#btn_search").click(function(){
		$("#form_search").submit();
	});
});
</script>
</body>
</html><?php }} ?>