<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:17:32
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\weibocomment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73405a2f666caef869-46607495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f0cdb326c412d7ec10e7190d5fdf286633485bd' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\weibocomment.tpl',
      1 => 1352864208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73405a2f666caef869-46607495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'scontent' => 0,
    'susername' => 0,
    'sflag' => 0,
    'urlitem' => 0,
    'comment' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'comeurl' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f666d015547_91918163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f666d015547_91918163')) {function content_5a2f666d015547_91918163($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>微播评论</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>微播管理<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment">微播评论</a></p></div>
  <div class="main-cont">
    <h3 class="title">微播评论</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment" />
	  <div class="item">
		<label>评论内容&nbsp;</label><input type="text" id="scontent" name="scontent" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['scontent']->value;?>
" />&nbsp;&nbsp;&nbsp;
		<label>评论人&nbsp;</label><input type="text" id="susername" name="susername" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['susername']->value;?>
" />&nbsp;&nbsp;&nbsp;
		<label>状态&nbsp;</label><select name="sflag" id="sflag">
		<option value=''></option>
		<option value='1'<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='1'){?> selected<?php }?>>正常</option>
		<option value='2'<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='2'){?> selected<?php }?>>锁定</option>
		</select>&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜索" />
	  </div>
	  </form>
	</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" method="post" name="myform" id="myform" style="margin:0">
	<input type='hidden' name='a' id='a' value='' />
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">ID</div></th>
		<th width="10%"><div class="th-gap">评论人</div></th>
		<th width="16%"><div class="th-gap">评论时间</div></th>
		<th width="6%"><div class="th-gap">状态</div></th>
		<th><div class="th-gap">评论内容</div></th>
		<th width='12%'><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
" onClick="checkItem(this, 'chkAll')"><?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
</td>
		<td><a href='javascript:void(0);' onclick="tbox_user_view('<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmuserid'];?>
');"><?php echo $_smarty_tpl->tpl_vars['volist']->value['cmusername'];?>
</a></td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['cmtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['cmflag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['cmcontent'];?>
</td>
		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" class="icon-set">编辑</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['cmid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){return true;} return false;}" class="icon-del">删除</a>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="6" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="5">
		<input class="button" name="btn_pass" type="button" value="批量审核" onClick="$('#a').val('pass');$('#myform').submit();" class="button" />&nbsp;
		<input class="button" name="btn_lock" type="button" value="批量锁定" onClick="$('#a').val('lock');$('#myform').submit();" class="button" />&nbsp;
		<input class="button" name="btn_del" type="button" value="批量删除" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#a').val('del');$('#myform').submit();return true;}return false;}" class="button" />
		&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='right'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>微播评论<span>&gt;&gt;</span>编辑微播评论</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑微播评论</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=weibocomment&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>评论会员 <span class="f_red"></span> </td>
		<td class='hback' width='85%'><?php echo $_smarty_tpl->tpl_vars['comment']->value['cmusername'];?>
 </td>
	  </tr>
	  <tr>
		<td class='hback_1'>评论时间 <span class="f_red"></span> </td>
		<td class='hback'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['cmtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状态 <span class="f_red"></span> </td>
		<td class='hback'>
		<input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['comment']->value['cmflag']=='1'){?> checked<?php }?> />正常，
		<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['comment']->value['cmflag']=='0'){?> checked<?php }?> />锁定
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>评论 <span class="f_red">*</span> </td>
		<td class='hback'><textarea name="content" id="content" style="width:50%;height:100px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['comment']->value['cmcontent'];?>
</textarea>  <br /><span id='dcontent' class='f_red'></span></td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html>
<script type="text/javascript">
function checkform() {
	var t = "";
	var v = "";

	t = "content";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("评论内容不能为空", t);
		$('#'+t).focus();
		return false;
	}

	return true;
}
</script>
<?php }} ?>