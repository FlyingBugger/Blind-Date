<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:19:17
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\complaint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194415a2f66d519ed43-61899399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098fc43b4f646cd05feb29d08085a5f0829442a0' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\complaint.tpl',
      1 => 1512639732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194415a2f66d519ed43-61899399',
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
    'scpuserid' => 0,
    'stype' => 0,
    'sfromuserid' => 0,
    'complaint' => 0,
    'volist' => 0,
    'comeurl' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'id' => 0,
    'urlpath' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f66d5d29f99_82171651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f66d5d29f99_82171651')) {function content_5a2f66d5d29f99_82171651($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_nl2br')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.nl2br.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>举报管理</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['a']->value=="run"){?>
<div class="main-wrap">
  <div class="path"><p>诚信联盟<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">会员举报管理</a></p></div>
  <div class="main-cont">
    <h3 class="title">会员举报管理</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" />
	  <div class="item">
	    <label>举报对象ID：&nbsp;&nbsp;</label><input type="text" id="scpuserid" name="scpuserid" class="input-100" value="<?php if ($_smarty_tpl->tpl_vars['scpuserid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['scpuserid']->value;?>
<?php }?>" />&nbsp;&nbsp;
		<label>举报类型：</label>
		<?php echo cmd_hook(array('mod'=>'var','item'=>'blacktype','type'=>'select','name'=>'stype','text'=>'=请选择=','value'=>$_smarty_tpl->tpl_vars['stype']->value),$_smarty_tpl);?>

		&nbsp;&nbsp;
		<label>举报人ID：&nbsp;&nbsp;</label><input type="text" id="sfromuserid" name="sfromuserid" class="input-100" value="<?php if ($_smarty_tpl->tpl_vars['sfromuserid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['sfromuserid']->value;?>
<?php }?>" />
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value=" 搜 索 " />
	  </div>
	  </form>
	</div>

	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=del" method="post" name="myform" id="myform">
    <table class="oe_table_list table_cs">
	  <tr>
	    <th width="8%">ID</th>
		<th width="12%">举报对象</th>
		<th width="8%">举报类型</th>
		<th width="18%">举报人信息</th>
		<th>情况说明</th>
		<th width="10%">处理状态</th>
		<th width="6%">黑名单</th>
		<th width="6%">禁封帐号</th>
		<th width="10%">操作</th>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['complaint']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr>
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
" onClick="checkItem(this, 'chkAll')"> <?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
</td>
		<td><a href="javascript:;" f="viewuser" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['cpuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['cpusername'];?>
</a><br />(<?php echo $_smarty_tpl->tpl_vars['volist']->value['cpuid'];?>
)</td>
		<td align="center"><?php echo cmd_hook(array('mod'=>'var','item'=>'blacktype','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cptype']),$_smarty_tpl);?>
</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['fromuid']>0){?>
		<a href="javascript:;" f="viewuser" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['fromuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['fromusername'];?>
</a>(<?php echo $_smarty_tpl->tpl_vars['volist']->value['fromuid'];?>
)
		<?php }?><br />
		联系电话:<?php echo $_smarty_tpl->tpl_vars['volist']->value['telephone'];?>
<br /> 联系邮箱:<?php echo $_smarty_tpl->tpl_vars['volist']->value['email'];?>

        </td>
		<td valign="top">
		<?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['volist']->value['content']);?>

		<?php if (!empty($_smarty_tpl->tpl_vars['volist']->value['imgfile'])){?><br />
		<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['imgfile'];?>
" target="_blank">举证图片</a>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']=='1'){?>
		  <font color="green">已处理，举报成功</font>
		<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['flag']=='2'){?>
		  <font color="red">已处理，举报失败</font>
		<?php }else{ ?>
		  <font color="gray">待处理</font>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['isback']=='1'){?>
		<font color="blue">是</font>
		<?php }else{ ?>
		<font color="gray">否</font>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['isforbid']=='1'){?>
		<font color="blue">是</font>
		<?php }else{ ?>
		<font color="gray">否</font>
		<?php }?>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']=='0'){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="oe_ico_blue">处理</a>
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="oe_ico_green">查看</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['id'];?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="oe_ico_red" onclick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){return true;} return false;}">删除</a>
		</td>
	  </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['volist']->_loop) {
?>
      <tr>
	    <td colspan="9" align="center">没有符合条件的数据</td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox">选择</td>
		<td colspan="8"><input class="button" name="btn_del" type="button" value="删除" class="button" onclick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#myform').submit();return true;}return false;}" />&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
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

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>诚信联盟<span>&gt;&gt;</span>会员举报管理</p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>处理举报</h3>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table class="oe_table_wrap">
	  <tr>
	    <td colspan="4" class="hback_c3"><b style="color:orange;">举报信息</b></td>
	  </tr>
	  <tr>
		<th>举报人(投诉人)：<span class="f_red"></span></th>
		<td colspan="3">
		  <a href="javascript:;" f="viewuser" data-id="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['fromuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['complaint']->value['fromusername'];?>
</a>（<?php echo $_smarty_tpl->tpl_vars['complaint']->value['fromuid'];?>
）&nbsp;&nbsp;
		  联系电话：<?php echo $_smarty_tpl->tpl_vars['complaint']->value['telephone'];?>
&nbsp;&nbsp;联系邮箱：<?php echo $_smarty_tpl->tpl_vars['complaint']->value['email'];?>

		</td>
	  </tr>
	  
	  <tr>
		<th>举报类型：<span class="f_red"></span></th>
		<td colspan="3"><?php echo cmd_hook(array('mod'=>'var','item'=>'blacktype','type'=>'text','value'=>$_smarty_tpl->tpl_vars['complaint']->value['cptype']),$_smarty_tpl);?>
</td>
	  </tr>
	  <tr>
		<th>举证图片：<span class="f_red"></span></th>
		<td colspan="3">
		<?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['imgfile'])){?>
		--
		<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['complaint']->value['imgfile'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['complaint']->value['imgfile'];?>
" width="100px" height="80px" /></a>
		<?php }?>
		</td>
	  </tr>
	  <tr>
		<th>举报描述：<span class="f_red"></span></th>
		<td colspan="3"><?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['complaint']->value['content']);?>
</td>
	  </tr>
	  <tr>
		<th>举报时间：<span class="f_red"></span></th>
		<td colspan="3"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['complaint']->value['timeline'],"%Y-%m-%d %H:%M:%S");?>
</td>
	  </tr>

	  <tr>
	    <td colspan="4" class="hback_c3">
            <b style="color:orange;">举报对象资料</b>
            <font color="red">（开启诚信联盟，可查询该会员的诚信举报情况）</font>
            <?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'&&!empty($_smarty_tpl->tpl_vars['config']->value['credit_key'])){?>
            <input type='button'  class="oe_ico_blue" name='btn_credit' id='btn_credit' value='诚信查询' onclick="oelove_varpop_creditview('诚信查询', '<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['userid'];?>
')" />&nbsp;&nbsp;
            <?php }else{ ?>
            <input type='button'  class="oe_ico_blue" name='btn_credit' id='btn_credit' value='诚信查询' disabled />&nbsp;
            <?php }?>
        </td>
	  </tr>
	  <tr>
	    <th>会员名：</th>
		<td>
		  <a href="javascript:;" f="viewuser" data-id="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['username'];?>
</a>（<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['userid'];?>
）<?php if ($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['gender']=='1'){?>男<?php }else{ ?>女<?php }?>
		</td>
		<th>姓名：</th>
		<td>
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['realname'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['realname'];?>

		  <?php }?>
		</td>
	  </tr>
	  <tr>
		<th>身份证号：</th>
		<td>
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['idnumber'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['idnumber'];?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=='0'){?>
		  <input type="checkbox" name="creditidnumber" id="creditidnumber" value="1" checked /> <font color="orange">上报诚信联盟</font>&nbsp;&nbsp;
		  <?php }?>

		  <a href="javascript:;" class="oe_ico_blue" f="creditget" data-type="idcard" data-value="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['idnumber'];?>
" data-tips="tips_idnumber">查询诚信</a> <span id="tips_idnumber"></span>

		  <?php }?>
		</td>
	  </tr>
	  <tr>
	    <th width="12%">邮箱：</th>
		<td width="38%">
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['email'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['email'];?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=='0'){?>
		  <input type="checkbox" name="creditemail" id="creditemail" value="1" checked /> <font color="orange">上报诚信联盟</font>&nbsp;&nbsp;
		  <?php }?>

		  <a href="javascript:;" class="oe_ico_blue" f="creditget" data-type="email" data-value="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['email'];?>
" data-tips="tips_email">查询诚信</a> <span id="tips_email"></span>

		  <?php }?>
		</td>
		<th width="12%">手机号：</th>
		<td width="38%">
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['mobile'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['mobile'];?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=='0'){?>
		  <input type="checkbox" name="creditmobile" id="creditmobile" value="1" checked /> <font color="orange">上报诚信联盟</font>&nbsp;&nbsp;
		  <?php }?>

		  <a href="javascript:;" class="oe_ico_blue" f="creditget" data-type="mobile" data-value="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['mobile'];?>
" data-tips="tips_mobile">查询诚信</a> <span id="tips_mobile"></span>
		  <?php }?>
		</td>
	  </tr>
	  <tr>
	    <th>QQ号：</th>
		<td>
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['qq'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['qq'];?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=='0'){?>
		  <input type="checkbox" name="creditqq" id="creditqq" value="1" checked /> <font color="orange">上报诚信联盟</font>&nbsp;&nbsp;
		  <?php }?>

		  <a href="javascript:;" class="oe_ico_blue" f="creditget" data-type="qq" data-value="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['qq'];?>
" data-tips="tips_qq">查询诚信</a> <span id="tips_qq"></span>
		  <?php }?>
		</td>
		<th>微信号：</th>
		<td>
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['cpuser']['weixin'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['weixin'];?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=='0'){?>
		  <input type="checkbox" name="creditweixin" id="creditweixin" value="1" checked /> <font color="orange">上报诚信联盟</font>&nbsp;&nbsp;
		  <?php }?>

		  <a href="javascript:;" class="oe_ico_blue" f="creditget" data-type="weixin" data-value="<?php echo $_smarty_tpl->tpl_vars['complaint']->value['cpuser']['weixin'];?>
" data-tips="tips_weixin">查询诚信</a> <span id="tips_weixin"></span>
		  <?php }?>
		</td>
	  </tr>

	  <tr>
	    <td colspan="4" class="hback_c3"><b style="color:orange;">处理举报</b></td>
	  </tr>
	  
	  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=="0"){?>
	  <tr>
		<th>处理状态：<span class="f_red">*</span></th>
		<td colspan="3">
		  <select name="flag" id="flag">
		    <option value="">=请选择=</option>
			<option value="1">情况属实，举报成功</option>
			<option value="2">举报失败，证据不足</option>
		  </select>

		  <span id="tips_credit" style="display:none;">
		  <font color="red">（开启诚信联盟，将举报对象的联系方式上报到联盟中心）</font>
		  </span>
		</td>
	  </tr>

      <tr id="tips_reason" style="display:none;">
	    <th>上报理由<br />(举报理由)：<span class="f_red">*</span></th>
		<td colspan="3">
		  <textarea name="dealreason" id="dealreason" style="width:40%;height:60px;border:1px solid #ddd;overflow:auto;"></textarea><br/ >
		  （请填写举报理由，上报到诚信联盟中心）
		</td>
	  </tr>


	  <tr id="tips_forbid" style="display:none;">
		<th>处理结果：<span class="f_red"></span> </th>
		<td colspan="3">
		  <input type="checkbox" name="isforbid" id="isforbid" value="1" />禁封帐号，
		  <input type="checkbox" name="isblack" id="isblack" value="1" />拉入黑名单
		</td>
	  </tr>

	  <tr>
		<th>处理备注：<span class="f_red"></span> </th>
		<td colspan="3">
		<textarea name="dealcontent" id="dealcontent" style="width:40%;height:60px;border:1px solid #ddd;overflow:auto;"></textarea>
		</td>
	  </tr>

	  <tr>
		<td></td>
		<td colspan="3">
		  <input type="button" name="btn_save" class="button" value="提交保存" f="but_save" />

		  <span id="tips_submit"></span>
		</td>
	  </tr>
	  <?php }else{ ?>
	  <tr>
	    <th>处理状态：</th>
		<td>
		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['flag']=="1"){?>
		  <font color="green">情况属实，举报成功</font>
		  <?php }else{ ?>
		  <font color="red">举报失败，证据不足</font>
		  <?php }?>
		</td>
	  </tr>
	  <tr>
	    <th>处理结果：</th>
		<td>
		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['isforbid']=='1'){?>
		  禁封帐号
		  <?php }?>

		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['isblack']=='1'){?>
		  拉入黑名单
		  <?php }?>
		</td>
	  </tr>
	  <tr>
	    <th>备注说明：</th>
		<td>
		  <?php if (empty($_smarty_tpl->tpl_vars['complaint']->value['dealcontent'])){?>
		  --
		  <?php }else{ ?>
		  <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['complaint']->value['dealcontent']);?>

		  <?php }?>
		</td>
	  </tr>
	  <tr>
	    <th>处理时间：</th>
		<td>
		  <?php if ($_smarty_tpl->tpl_vars['complaint']->value['dealtimeline']==0){?>
		  --
		  <?php }else{ ?>
		  <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['complaint']->value['dealtimeline'],"%Y-%m-%d %H:%M:%S");?>

		  <?php }?>
		</td>
	  </tr>
	  <?php }?>

	</table>


  </div>
  <div style="clear:both;"></div>
</div>



<script type="text/javascript">
$(function(){

	//选择处理状态
	$("#flag").bind("change", function(){
		$_val = $(this).val();
		if ($_val == "1") {
			$("#tips_credit").show();
			$("#tips_reason").show();
			$("#tips_forbid").show();
		}
		else if ($_val == "2") {
			$("#tips_credit").hide();
			$("#tips_reason").hide();
			$("#tips_forbid").hide();
		}

	});
	
	//提交保存
	$("[f='but_save']").bind("click", function(){
		$tips_obj = $("#tips_submit");

		$_flag = $("#flag").find("option:selected").val();
		if (typeof($_flag) == "undefined") {
			$tips_obj.html("<font color='red'>请选择处理状态</font>");
			return false;
		}

		if ($_flag == "1") {
			$("#tips_credit").show();
			$("#tips_reason").show();
			$("#tips_forbid").show();
		}
		else if ($_flag == "2") {
			$("#tips_credit").hide();
			$("#tips_reason").hide();
			$("#tips_forbid").hide();
		
		}
		
		if ($_flag.length == 0) {
			$tips_obj.html("<font color='red'>请选择处理状态</font>");
			return false;
		}
		//身份证号
		$_creditidnumber = $("input[name='creditidnumber']:checked").val();
		if (typeof($_creditidnumber) == "undefined") {
			$_creditidnumber = 0;
		}
		//邮箱
		$_creditemail = $("input[name='creditemail']:checked").val();
		if (typeof($_creditemail) == "undefined") {
			$_creditemail = 0;
		}
		//手机
		$_creditmobile = $("input[name='creditmobile']:checked").val();
		if (typeof($_creditmobile) == "undefined") {
			$_creditmobile = 0;
		}
		//QQ号
		$_creditqq = $("input[name='creditqq']:checked").val();
		if (typeof($_creditqq) == "undefined") {
			$_creditqq = 0;
		}
		//微信号
		$_creditweixin = $("input[name='creditweixin']:checked").val();
		if (typeof($_creditweixin) == "undefined") {
			$_creditweixin = 0;
		}

		$_dealreason = $("#dealreason").val();
		$_isforbid = $("input[name='isforbid']:checked").val();
		if (typeof($_isforbid) == "undefined") {
			$_isforbid = 0;
		}

		$_isblack = $("input[name='isblack']:checked").val();
		if (typeof($_isblack) == "undefined") {
			$_isblack = 0;
		}

		$_dealcontent = $("#dealcontent").val();
		
		//审批成功
		if ($_flag == "1") {
			if ($_dealreason.length == 0) {
				$tips_obj.html("<font color='red'>请填写举报理由</font>");
				return false;
			}
		}
		
		//成功
		if ($_flag == "1") {
		
			$.ajax({
				type: "POST",
				url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
",
				cache: false,
				data: {c:"complaint", a:"success", id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", creditidnumber:$_creditidnumber, creditemail:$_creditemail, creditmobile:$_creditmobile, creditqq:$_creditqq, creditweixin:$_creditweixin, dealreason:$_dealreason, isforbid:$_isforbid, isblack:$_isblack, dealcontent:$_dealcontent, r:get_rndnum(8)},
				dataType: "json",
				success: function($data) {
					$json = eval($data);
					$response = $json.response;
					$result = $json.result;
					if ($response == "1") {
						$tips_obj.html("<font color='green'>操作成功</font>");
						setTimeout(function(){
							window.location.reload();
						}, 500);
					}
					else {
						if ($result.length > 0) {
							$tips_obj.html("<font color='red'>"+$result+"</font>");
						}
						else {
							$tips_obj.html("<font color='red'>操作失败，请检查</font>");
						}
					}

				},
				error: function() {

				}
			});

		}
		//失败
		else if ($_flag == "2") {
		
			$.ajax({
				type: "POST",
				url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
",
				cache: false,
				data: {c:"complaint", a:"fail", id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", dealcontent:$_dealcontent, r:get_rndnum(8)},
				dataType: "json",
				success: function($data) {
					$json = eval($data);
					$response = $json.response;
					$result = $json.result;
					if ($response == "1") {
						//ToastShow("操作成功");
						$tips_obj.html("<font color='green'>操作成功</font>");
						setTimeout(function(){
							window.location.reload();
						}, 500);
					}
					else {
						if ($result.length > 0) {
							//ToastShow($result);
							$tips_obj.html("<font color='red'>"+$result+"</font>");

						}
						else {
							//ToastShow("操作失败，请检查");
							$tips_obj.html("<font color='red'>操作失败，请检查</font>");
						}
					}

				},
				error: function() {

				}
			});


		}

	});

});

</script>

<?php }?>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html><?php }} ?>