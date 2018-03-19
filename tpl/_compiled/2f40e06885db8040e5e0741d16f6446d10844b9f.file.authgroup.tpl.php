<?php /* Smarty version Smarty-3.1.14, created on 2018-01-03 12:53:57
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\authgroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266765a4c61e58efb44-61846268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f40e06885db8040e5e0741d16f6446d10844b9f' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\authgroup.tpl',
      1 => 1514954679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266765a4c61e58efb44-61846268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'authgroup' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'total' => 0,
    'group_root' => 0,
    'auth_checkbox' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a4c61e5ea2d30_38700668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4c61e5ea2d30_38700668')) {function content_5a4c61e5ea2d30_38700668($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>管理组设置</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>管理组设置</p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup&a=add" class="btn-general"><span>添加组别</span></a>管理组设置</h3>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">ID编号</div></th>
		<th width="35%"><div class="th-gap">管理组</div></th>
		<th width="8%"><div class="th-gap">排序</div></th>
		<th width="8%"><div class="th-gap">状态</div></th>
		<th width="18%"><div class="th-gap">录入时间</div></th>
		<th width="15%"><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authgroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['tree_node'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['orders'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['timeline'],"%Y/%m/%d %H:%M:%S");?>
</td>
		<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="icon-set">设置</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
" onClick="{if(confirm('确定要删除?')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="6" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	</table>
	<?php if ($_smarty_tpl->tpl_vars['total']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='left'>总记录：<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="add"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>添加管理组</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup" class="btn-general"><span>返回列表</span></a>添加管理组</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">组 名 称：<span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="text" name="groupname" id="groupname" class="input-txt" /> <span class='f_red' id="dgroupname"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>所属节点：<span class='f_red'></span></td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['group_root']->value;?>
 <span class='f_red' id="drootid"></span> （不选择默认为根节点）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-100"  /> <span class='f_red' id="dorders"></span> (数字越小，越靠前)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状态设置：<span class='f_red'></span></td>
		<td class='hback'><input type="radio" name="flag" value="1" checked />正常，<input type="radio" name="flag" value="0" />锁定</td>
	  </tr>
	  <tr>
		<td class='hback_1'>描述说明： </td>
		<td class='hback'><textarea name="intro" id='intro' style='width:60%;height:65px;overflow:auto;color:#444444;'></textarea></td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	  <tr>
		<td class='hback_1' colspan="2" align="center"><b>操作权限</b> <input type='checkbox' id='selectAll' name='selectAll' value='1' onclick="auths_selectAll('selectAll', 'auths');" />全选/取消全选</td>
	  <tr>
		<td class='hback_none' colspan="2"><?php echo $_smarty_tpl->tpl_vars['auth_checkbox']->value;?>
</td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>编辑管理组</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup" class="btn-general"><span>返回列表</span></a>编辑管理组</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=authgroup" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">组 名 称：<span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="text" name="groupname" id="groupname" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['authgroup']->value['groupname'];?>
" /> <span class='f_red' id="dgroupname"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>所属节点：<span class='f_red'></span></td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['group_root']->value;?>
 <span class='f_red' id="drootid"></span> （不选择默认为根节点）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['authgroup']->value['orders'];?>
"  /> <span class='f_red' id="dorders"></span> (数字越小，同级越靠前)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>状态设置：<span class='f_red'></span></td>
		<td class='hback'><input type="radio" name="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['authgroup']->value['flag']==1){?> checked<?php }?> />正常，<input type="radio" name="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['authgroup']->value['flag']==0){?> checked<?php }?> />锁定</td>
	  </tr>
	  <tr>
		<td class='hback_1'>描述说明： </td>
		<td class='hback'><textarea name="intro" id='intro' style='width:60%;height:65px;overflow:auto;color:#444444;'><?php echo $_smarty_tpl->tpl_vars['authgroup']->value['intro'];?>
</textarea></td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	  <tr>
		<td class='hback_1' colspan="2" align="center"><b>操作权限</b> <input type='checkbox' id='selectAll' name='selectAll' value='1' onclick="auths_selectAll('selectAll', 'auths');" />全选/取消全选</td>
	  <tr>
		<td class='hback_none' colspan="2"><?php echo $_smarty_tpl->tpl_vars['auth_checkbox']->value;?>
</td>
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

	t = "groupname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("管理组名称不能为空", t);
		return false;
	}
	return true;
}
</script>
<?php }} ?>