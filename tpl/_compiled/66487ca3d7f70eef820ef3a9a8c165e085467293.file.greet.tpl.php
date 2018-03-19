<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:54:52
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\greet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137815a2f611c5fedd2-43230015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66487ca3d7f70eef820ef3a9a8c165e085467293' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\greet.tpl',
      1 => 1336732540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137815a2f611c5fedd2-43230015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'stype' => 0,
    'sgreet' => 0,
    'greet' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'urlitem' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'comeurl' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f611caeb605_75637984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f611caeb605_75637984')) {function content_5a2f611caeb605_75637984($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>问候语设置</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet">问候语</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet&a=add" class="btn-general"><span>添加问候语</span></a>问候语</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet" />
	  <div class="item">
	    <label>问候对象：</label>
		<select name="stype" id="stype">
		<option value=''></option>
		<option value='male'<?php if ($_smarty_tpl->tpl_vars['stype']->value=='male'){?> selected<?php }?>>男会员</option>
		<option value='female'<?php if ($_smarty_tpl->tpl_vars['stype']->value=='female'){?> selected<?php }?>>女会员</option>
		</select>
		&nbsp;&nbsp;
		<label>问候语：</label><input type="text" id="sgreet" name="sgreet" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['sgreet']->value;?>
" />&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜 索" />
	  </div>
	  </form>
	</div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">ID</div></th>
		<th width="8%"><div class="th-gap">状态</div></th>
		<th width="8%"><div class="th-gap">男会员</div></th>
		<th width="8%"><div class="th-gap">女会员</div></th>
		<th><div class="th-gap">问候语</div></th>
		<th width="8%"><div class="th-gap">使用</div></th>
		<th width="15%"><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['greet']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['male']==0){?>
			<input type="hidden" id="attr_male<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="maleopen" />
			<img id="male<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('male','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_male<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="maleclose" />
			<img id="male<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('male','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['female']==0){?>
			<input type="hidden" id="attr_female<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="femaleopen" />
			<img id="female<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('female','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_female<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" value="femaleclose" />
			<img id="female<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('female','<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
');" style="cursor:pointer;">	
		<?php }?>
		</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['greeting'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['usecount'];?>
</td>

		<td align="center">
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" class="icon-set">设置</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['greetid'];?>
" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复。')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="7" align="center">暂无信息</td>
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
?c=greet&a=add">添加问候语</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet" class="btn-general"><span>返回列表</span></a>添加问候语</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveadd" />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">状 态 <span class='f_red'>*</span></td>
		<td class='hback' width="85%"><input type="radio" name="flag" id="flag" value="1" checked />正常，<input type="radio" name="flag" id="flag" value="0" />锁定 <span class='f_red' id="dflag"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>问候对象 <span class='f_red'></span></td>
		<td class='hback'><input type="checkbox" name="male" id="male" value="1" />男会员，<input type="checkbox" name="female" id="female" value="1" />女会员</td>
	  </tr>
	  <tr>
		<td class='hback_1'>问候语 <span class='f_red'>*</span></td>
		<td class='hback'><textarea name="greeting" id="greeting" style="width:60%;height:150px;overflow:auto;"></textarea>
		<span class='f_red' id="dgreeting"></span></td>
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
  <div class="path"><p>当前位置：系统设置<span>&gt;&gt;</span>其他设置<span>&gt;&gt;</span>编辑问候语</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑问候语</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=greet&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" onsubmit='return checkform();' />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='2' class='tab'>
	  <tr>
		<td class='hback_1' width="15%">状 态 <span class='f_red'>*</span></td>
		<td class='hback' width="85%">
		<input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['greet']->value['flag']=='1'){?> checked<?php }?> />正常，
		<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['greet']->value['flag']=='0'){?> checked<?php }?> />锁定 
		<span class='f_red' id="dflag"></span></td>
	  </tr>
	  <tr>
		<td class='hback_1'>问候对象 <span class='f_red'></span></td>
		<td class='hback'><input type="checkbox" name="male" id="male" value="1"<?php if ($_smarty_tpl->tpl_vars['greet']->value['male']=='1'){?> checked<?php }?> />男会员，<input type="checkbox" name="female" id="female" value="1"<?php if ($_smarty_tpl->tpl_vars['greet']->value['female']=='1'){?> checked<?php }?> />女会员</td>
	  </tr>
	  <tr>
		<td class='hback_1'>问候语 <span class='f_red'>*</span></td>
		<td class='hback'><textarea name="greeting" id="greeting" style="width:60%;height:150px;overflow:auto;"><?php echo $_smarty_tpl->tpl_vars['greet']->value['greeting'];?>
</textarea>
		<span class='f_red' id="dgreeting"></span></td>
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

	t = "greeting";
	v = $("#"+t).val();
	if(v=="") {
		dmsg("问候语不能为空", t);
		return false;
	}

	return true;
}

</script>
<?php }} ?>