<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:55:48
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\hometown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90805a2f615425d472-52550419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37890402b38ca21e908404af1ff807211d5101c3' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\hometown.tpl',
      1 => 1378872214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90805a2f615425d472-52550419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'area' => 0,
    'volist' => 0,
    'page' => 0,
    'total' => 0,
    'area_root' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f6154467894_13252503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f6154467894_13252503')) {function content_5a2f6154467894_13252503($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>户籍地区设置</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown">户籍地区设置</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown&a=add" class="btn-general"><span>添加户籍</span></a>户籍地区设置</h3>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">ID编号</div></th>
		<th width="40%"><div class="th-gap">地区名称</div></th>
		<th width="15%"><div class="th-gap">扩展名</div></th>
		<th width="10%"><div class="th-gap">排序</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['areaid'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['tree_node'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['spreadname'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['orders'];?>
</td>
		<td align="center">
		
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['depth']==0){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown&a=add&rootid=<?php echo $_smarty_tpl->tpl_vars['volist']->value['areaid'];?>
" class="icon-add">添加子地区</a>
		<?php }?>
		&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['areaid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="icon-set">设置</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown&a=del&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['areaid'];?>
" onClick="{if(confirm('确定要删除吗？连同子地区一起删除。')){return true;} return false;}" class="icon-del">删除</a>
		
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="5" align="center">暂无信息</td>
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
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
&c=hometown&a=add">添加户籍地区</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown" class="btn-general"><span>返回列表</span></a>添加户籍地区</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">地区名称：<span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="text" name="areaname" id="areaname" class="input-txt" /> <span class='f_red' id="dareaname"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>扩展名称：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="spreadname" id="spreadname" class="input-100"  /> <span class='f_red' id="dspreadname"></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>所属节点：<span class='f_red'></span></td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['area_root']->value;?>
 <span class='f_red' id="drootid"></span> （不选择默认为根节点，最多支持二级地区）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-100"  /> <span class='f_red' id="dorders"></span> (同级排序，数字越小，越靠前)</td>
	  </tr>
	  <tr>
		<td class='hback_none'></td>
		<td class='hback_none'><input type="submit" name="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span>编辑户籍地区</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown" class="btn-general"><span>返回列表</span></a>编辑户籍地区</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=hometown" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='3' cellspacing='3' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">地区名称：<span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="text" name="areaname" id="areaname" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['area']->value['areaname'];?>
" /> <span class='f_red' id="dareaname"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>扩展名称：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="spreadname" id="spreadname" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['area']->value['spreadname'];?>
"  /> <span class='f_red' id="dspreadname"></span> </td>
	  </tr>
	  <tr>
		<td class='hback_1'>所属节点：<span class='f_red'></span></td>
		<td class='hback'><?php echo $_smarty_tpl->tpl_vars['area_root']->value;?>
 <span class='f_red' id="drootid"></span> （不选择默认为根节点，最多支持二级地区）</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序：<span class='f_red'></span></td>
		<td class='hback'><input type="text" name="orders" id="orders" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['area']->value['orders'];?>
"  /> <span class='f_red' id="dorders"></span>(数字越小，越靠前)</td>
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

	t = "areaname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("地区名称不能为空", t);
		return false;
	}
	return true;
}
</script>
<?php }} ?>