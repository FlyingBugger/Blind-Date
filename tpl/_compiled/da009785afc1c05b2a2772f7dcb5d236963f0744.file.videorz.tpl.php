<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:18:18
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\videorz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299965a2f669a34b145-31795145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da009785afc1c05b2a2772f7dcb5d236963f0744' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\videorz.tpl',
      1 => 1352357508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299965a2f669a34b145-31795145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'fromtype' => 0,
    'a' => 0,
    'cpfile' => 0,
    'stype' => 0,
    'skeyword' => 0,
    'sflag' => 0,
    'page' => 0,
    'urlitem' => 0,
    'videorz' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f669a9fe118_37617775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f669a9fe118_37617775')) {function content_5a2f669a9fe118_37617775($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>视频认证</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['fromtype']->value!='jdbox'){?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
<?php }?>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['fromtype']->value!='jdbox'){?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：用户管理<span>&gt;&gt;</span>会员管理<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=videorz">视频认证</a></p></div>
  <div class="main-cont">
    <h3 class="title"></h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=videorz" />
	  <div class="item">
	    <label>搜索：</label>
		<select name='stype' id='stype'>
		<option value=''></option>
		<option value='userid'<?php if ($_smarty_tpl->tpl_vars['stype']->value=='userid'){?> selected<?php }?>>会员ID</option>
		<option value='username'<?php if ($_smarty_tpl->tpl_vars['stype']->value=='username'){?> selected<?php }?>>会员名称</option>
		<option value='email'<?php if ($_smarty_tpl->tpl_vars['stype']->value=='email'){?> selected<?php }?>>邮箱</option>
		</select>
		&nbsp;
		<input type="text" id="skeyword" name="skeyword" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['skeyword']->value;?>
" />
		&nbsp;&nbsp;
		<label>状态：</label>
		<select name='sflag' id='sflag'>
		<option value=''>全部</option>
		<option value='audit'<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='audit'){?> selected<?php }?>>待审</option>
		<option value='pass'<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='pass'){?> selected<?php }?>>通过</option>
		<option value='lock'<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='lock'){?> selected<?php }?>>未通过</option>
		</select>
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜 索" />
	  </div>
	  </form>
	</div>
	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=videorz&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" method="post" name="myform" id="myform" style="margin:0">
	<input type="hidden" name="a" id="a" value='' />
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="10%"><div class="th-gap">ID</div></th>
		<th width="15%"><div class="th-gap">会员名称</div></th>
		<th width="15%"><div class="th-gap">会员信息</div></th>
		<th width="10%"><div class="th-gap">类型</div></th>
		<th width="13%"><div class="th-gap">图片/视频</div></th>
		<th width="10%"><div class="th-gap">上传时间</div></th>
		<th width="12%"><div class="th-gap">状态</div></th>
		<th><div class="th-gap">操作</div></th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videorz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdid'];?>
" onClick="checkItem(this, 'chkAll')"><?php echo $_smarty_tpl->tpl_vars['volist']->value['vdid'];?>
</td>
		<td align="left"><a href='javascript:void(0);' onclick="tbox_user_view('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
)<br /><?php echo $_smarty_tpl->tpl_vars['volist']->value['email'];?>
</td>
		<td align="left">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['gender']=='1'){?>男<?php }else{ ?>女<?php }?> <?php echo cmd_hook(array('mod'=>'birthday','value'=>$_smarty_tpl->tpl_vars['volist']->value['ageyear']),$_smarty_tpl);?>
岁 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>

		</td>
		<td align='center'><?php if ($_smarty_tpl->tpl_vars['volist']->value['vdtype']==0){?><font color="green">拍照</font><?php }else{ ?><font color="blue">视频</font><?php }?></td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['vdtype']==0){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdurl'];?>
" border="0" width='100' height='73' /></a>
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdurl'];?>
" target="_blank">点击查看视频</a>
		<?php }?>
		</td>
		<td align='center'><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y/%m/%d");?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%H:%M:%S");?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
		<font color='#999999'>待审</font>
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['flag']==1){?>
		<font color="green">通过</font>
		<?php }else{ ?>
		<font color="red">未通过</font>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==1){?>
		<?php }else{ ?>
		<a href="javascript:void(0);" onclick="tbox_videorz_edit('视频认证管理', '<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdid'];?>
', 680, 250)" class="icon-edit">管理</a>
		<?php }?>
		&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=videorz&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['vdid'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="8" align="center">暂无信息</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="7">
		<input class="button" name="btn_del" type="button" value="批量删除" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#a').val('del');$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
	</table>
	</form>
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

<!-- 编辑认证 -->
<?php if ($_smarty_tpl->tpl_vars['a']->value=='edit'){?>
<div class="main-wrap">
  <div class="main-cont">

    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=videorz&fromtype=jdbox" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name='id' value="<?php echo $_smarty_tpl->tpl_vars['videorz']->value['vdid'];?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
	    <td class='hback_1' width='15%'>会 员 ID </td>
		<td class='hback' width='35%'><?php echo $_smarty_tpl->tpl_vars['videorz']->value['userid'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=home&uid=<?php echo $_smarty_tpl->tpl_vars['videorz']->value['userid'];?>
" target="_blank">访问主页</a></td>
	    <td class='hback_1' width='15%'>登录邮箱 </td>
		<td class='hback' width='35%'><?php echo $_smarty_tpl->tpl_vars['videorz']->value['email'];?>
</td>
	  </tr>
	  <tr>
	    <td class='hback_1'>会员信息 </td>
		<td class='hback' colspan='3'>
		<a href='javascript:void(0);' onclick="tbox_user_view('<?php echo $_smarty_tpl->tpl_vars['videorz']->value['userid'];?>
');"><?php echo $_smarty_tpl->tpl_vars['videorz']->value['username'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['videorz']->value['gender']=='1'){?>男<?php }else{ ?>女<?php }?> <?php echo cmd_hook(array('mod'=>'birthday','value'=>$_smarty_tpl->tpl_vars['videorz']->value['ageyear']),$_smarty_tpl);?>
岁 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['videorz']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['videorz']->value['cityid']),$_smarty_tpl);?>

		&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['videorz']->value['star'];?>
星
		</td>
	  </tr>
	  <tr>
		<td class='hback_c1'>拍照/视频 <span class="f_red"></span> </td>
		<td class='hback'>
		<?php if ($_smarty_tpl->tpl_vars['videorz']->value['vdtype']==0){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['videorz']->value['vdurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['videorz']->value['vdurl'];?>
" width='100px' height='73px' border='0' /></a>
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['videorz']->value['vdurl'];?>
" target="_blank">点击查看视频</a>
		<?php }?>
		
		</td>
		<td class='hback_c1'>认证项目<br /><font color='#999999'>(绿色表示已认证)</font></td>
		<td class='hback'>
		<input type='hidden' name='emailrz' id='emailrz' value="<?php echo $_smarty_tpl->tpl_vars['videorz']->value['emailrz'];?>
" />
		<input type='hidden' name='mobilerz' id='mobilerz' value="<?php echo $_smarty_tpl->tpl_vars['videorz']->value['mobilerz'];?>
" />

		<input type='checkbox' id='arz' name='arz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['emailrz']=='1'){?> checked<?php }?> disabled /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['emailrz']=='1'){?>green<?php }?>">邮箱认证</font>&nbsp;&nbsp;
		<input type='checkbox' id='mrz' name='mrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['mobilerz']=='1'){?> checked<?php }?> disabled /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['mobilerz']=='1'){?>green<?php }?>">手机认证</font>&nbsp;&nbsp;<br />

		<input type='checkbox' id='idnumberrz' name='idnumberrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['idnumberrz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['idnumberrz']=='1'){?>green<?php }?>">身份认证</font>&nbsp;&nbsp;
		<input type='checkbox' id='videorz' name='videorz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['videorz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['videorz']=='1'){?>green<?php }?>">视频认证</font>&nbsp;&nbsp;<br />
		<input type='checkbox' id='heightrz' name='heightrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['heightrz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['heightrz']=='1'){?>green<?php }?>">身高认证</font>&nbsp;&nbsp;
		<input type='checkbox' id='marryrz' name='marryrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['marryrz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['marryrz']=='1'){?>green<?php }?>">婚姻认证</font>&nbsp;&nbsp;<br />
		<input type='checkbox' id='incomerz' name='incomerz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['incomerz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['incomerz']=='1'){?>green<?php }?>">收入认证</font>&nbsp;&nbsp;
		<input type='checkbox' id='educationrz' name='educationrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['educationrz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['educationrz']=='1'){?>green<?php }?>">学历认证&nbsp;&nbsp;<br />
		<input type='checkbox' id='houserz' name='houserz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['houserz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['houserz']=='1'){?>green<?php }?>">房产认证</font>&nbsp;&nbsp;
		<input type='checkbox' id='carrz' name='carrz' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['carrz']=='1'){?> checked<?php }?> /><font color="<?php if ($_smarty_tpl->tpl_vars['videorz']->value['carrz']=='1'){?>green<?php }?>">汽车认证</font>&nbsp;&nbsp;
		</td>
	  </tr>
	  <tr>
		<td class='hback_c1'>审核状态 <span class="f_red"></span> </td>
		<td class='hback' colspan='3'>
		<input type='radio' name='flag' id='flag' value='0'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['flag']=='0'){?> checked<?php }?> />待审，
		<input type='radio' name='flag' id='flag' value='1'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['flag']=='1'){?> checked<?php }?> />通过，
		<input type='radio' name='flag' id='flag' value='2'<?php if ($_smarty_tpl->tpl_vars['videorz']->value['flag']=='2'){?> checked<?php }?> />未通过 
		
		<span id='dflag' class='f_red'></span> 
		</td>
	  </tr>
	  <tr>
		<td class='hback_none' colspan="4" align="center"><input type="submit" name="btn_save" class="button" value="编辑保存" /></td>
	  </tr>
	</table>
	</form>

  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['fromtype']->value!='jdbox'){?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
<?php }?>

</body>
</html><?php }} ?>