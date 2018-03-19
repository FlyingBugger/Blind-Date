<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:19:19
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\blackuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296545a2f66d75e3889-70637624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd6cc2d2ef6064eeb8651fdfebb3c80bc851e96' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\blackuser.tpl',
      1 => 1465807870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296545a2f66d75e3889-70637624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'c' => 0,
    'sgender' => 0,
    'sblacktype' => 0,
    'suserid' => 0,
    'susername' => 0,
    'blackuser' => 0,
    'volist' => 0,
    'comeurl' => 0,
    'pagecount' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f66d79339f7_03403694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f66d79339f7_03403694')) {function content_5a2f66d79339f7_03403694($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>黑名单</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['a']->value=='run'){?>
<div class="main-wrap">
  <div class="path"><p>诚信联盟<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">会员黑名单</a></p></div>
  <div class="main-cont">
    <h3 class="title">会员黑名单</h3>
	<div class="search-area ">

	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" />
	  <div class="item">
	    <label>性别：</label>
		<select name="sgender" id="sgender">
		<option value="">=全部=</option>
		<option value="2"<?php if ($_smarty_tpl->tpl_vars['sgender']->value=="2"){?> selected<?php }?>>女会员</option>
		<option value="1"<?php if ($_smarty_tpl->tpl_vars['sgender']->value=="1"){?> selected<?php }?>>男会员</option>
		</select>
		&nbsp;&nbsp;&nbsp;
		<label>拉黑原因：</label>
		<?php echo cmd_hook(array('mod'=>'var','item'=>'blacktype','type'=>'select','name'=>'sblacktype','text'=>'=不限=','value'=>$_smarty_tpl->tpl_vars['sblacktype']->value),$_smarty_tpl);?>

		&nbsp;&nbsp;&nbsp;
		<label>会员ID：</label><input type="text" id="suserid" name="suserid" class="input-100" value="<?php if ($_smarty_tpl->tpl_vars['suserid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['suserid']->value;?>
<?php }?>" />&nbsp;&nbsp;&nbsp;
		<label>会员名称：</label><input type="text" id="susername" name="susername" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['susername']->value;?>
" />
		<input type="submit" class="button_s" value="搜索" />
	  </div>
	  </form>

	</div>

    <table class="oe_table_list table_cs">
	  <tr>
	    <th width="6%">ID</th>
		<th width="7%">会员</th>
		<th width="5%">性别</th>
		<th width="5%">年龄</th>
		<th width="7%">学历</th>
		<th width="10%">收入</th>
		<th width="10%">所在地</th>
		<th width="10%">拉黑原因</th>
		<th width="10%">拉黑时间</th>
		<th width="10%">注册时间</th>
		<th width="10%">最后登录</th>
		<th>操作</th>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blackuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr>
	    <td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['gender']=='1'){?>男<?php }else{ ?>女<?php }?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
</td>
		<td align="center">
		<?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['education']),$_smarty_tpl);?>

		</td>
		<td>
		<?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>

		</td>
		<td>
		<?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>

        </td>
		<td><?php echo cmd_hook(array('mod'=>'var','item'=>'blacktype','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['blacktype']),$_smarty_tpl);?>
</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['blacktime'],"%Y-%m-%d %H:%M");?>
</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d %H:%M");?>
</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['ontime']>0){?>
		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['ontime'],"%Y-%m-%d %H:%M");?>

		<?php }else{ ?>
		--
		<?php }?>
		</td>
		<td align="center">
		  <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=cancel&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="oe_ico_green" onclick="{if(confirm('确定要取消吗？一旦操作无法恢复。')){return true;} return false;}">取消黑名单</a>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="12" align="center">没有符合条件的数据</td>
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
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html><?php }} ?>