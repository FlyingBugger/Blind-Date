<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:54:42
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\loveparamter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272765a2f6112524016-89534043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e1fa96d2f2fdb6999b2bc5d0d7ffdab1978a4c' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\loveparamter.tpl',
      1 => 1354852864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272765a2f6112524016-89534043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'loveparamter' => 0,
    'volist' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'page' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f61128cc573_83602995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f61128cc573_83602995')) {function content_5a2f61128cc573_83602995($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>交友参数</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter">交友参数</a> </p></div>
  <div class="main-cont">
    <h3 class="title">交友参数</h3>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%"><div class="th-gap">ID</div></th>
		<th width="10%"><div class="th-gap">参数名</div></th>
		<th><div class="th-gap">参数值</div></th>
		<th width="10%"><div class="th-gap">类型</div></th>
		<th width="10%"><div class="th-gap">描述</div></th>
		<th width="10%"><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loveparamter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['ptid'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['ptname'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['ptvalue'];?>
</td>		
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['pttype'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['volist']->value['ptdec'];?>
</td>
		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['ptid'];?>
" class="icon-set">设置</a>&nbsp;&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['issystem']=='0'){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['ptid'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a>
		<?php }?>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="6" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	</table>
	<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
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
?c=loveparamter&a=add">添加交友参数</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter" class="btn-general"><span>返回列表</span></a>添加交友参数</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter" onsubmit='return checkadd();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>参数名 <span class="f_red">*</span> </td>
		<td class='hback' width='85%'><input type="text" name="ptname" id="ptname" class="input-150" /> <span id='dptname' class='f_red'></span> (参数名只能字母、下横线、中横线、数字组成)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数描述 <span class="f_red"></span> </td>
		<td class='hback'><input type="input" name="ptdec" id="ptdec" class="input-txt" /><span id='dptdec' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数值 <span class="f_red">*</span> </td>
		<td class='hback'>
		<textarea name="ptvalue" id="ptvalue" style="width:70%;height:150px;overflow:auto;"></textarea>
		<span id='dptvalue' class='f_red'></span>
		<br />
		(参数集合格式 参数值#参数描述，多个用 | 隔开，参数值必须从1开始！)
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数类型 <span class="f_red"></span> </td>
		<td class='hback'>
		<select name="pttype" id="pttype">
		<option value="select">select 下拉选</option>
		<option value="radio">radio 单选</option>
		<option value="checkbox">checkbox 多选</option>
		</select>
		<span id='dpttype' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序 <span class="f_red"></span> </td>
		<td class='hback'><input type="input" name="orders" id="orders" class="input-s" /><span id='dorders' class='f_red'></span>
		</td>
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
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span>编辑交友参数</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑交友参数</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=loveparamter&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"  onsubmit='return checkedit();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class='hback_1' width='15%'>参数名 <span class="f_red"></span> </td>
		<td class='hback' width='85%'><?php echo $_smarty_tpl->tpl_vars['loveparamter']->value['ptname'];?>
 (不能修改)</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数描述 <span class="f_red"></span> </td>
		<td class='hback'><input type="input" name="ptdec" id="ptdec" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['loveparamter']->value['ptdec'];?>
" /><span id='dptdec' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数值 <span class="f_red">*</span> </td>
		<td class='hback'>
		<textarea name="ptvalue" id="ptvalue" style="width:70%;height:150px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['loveparamter']->value['ptvalue'];?>
</textarea>
		<span id='dptvalue' class='f_red'></span>
		<br />
		(参数集合格式 参数值#参数描述，多个用 | 隔开，参数值必须从1开始！)
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>参数类型 <span class="f_red"></span> </td>
		<td class='hback'>
		<select name="pttype" id="pttype">
		<option value=""></option>
		<option value="select"<?php if ($_smarty_tpl->tpl_vars['loveparamter']->value['pttype']=='select'){?> selected<?php }?>>select 下拉选</option>
		<option value="radio"<?php if ($_smarty_tpl->tpl_vars['loveparamter']->value['pttype']=='radio'){?> selected<?php }?>>radio 单选</option>
		<option value="checkbox"<?php if ($_smarty_tpl->tpl_vars['loveparamter']->value['pttype']=='checkbox'){?> selected<?php }?>>checkbox 多选</option>
		</select>
		<span id='dpttype' class='f_red'></span>
		</td>
	  </tr>
	  <tr>
		<td class='hback_1'>排序 <span class="f_red"></span> </td>
		<td class='hback'><input type="input" name="orders" id="orders" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['loveparamter']->value['orders'];?>
" /><span id='dorders' class='f_red'></span>
		</td>
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
function checkadd() {
	var t = "";
	var v = "";

	t = "ptname";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("参数名不能为空", t);
		return false;
	}

	t = "ptvalue";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("参数值不能为空", t);
		return false;
	}
	return true;
}

function checkedit() {
	var t = "";
	var v = "";

	t = "ptvalue";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("参数值不能为空", t);
		return false;
	}
	return true;
}
</script>
<?php }} ?>