<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:17:48
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\safety.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207465a2f667c202148-11809792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785cccbe5a86a156fbcc93358c799c96098af4bf' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\safety.tpl',
      1 => 1493030800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207465a2f667c202148-11809792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'scatid' => 0,
    'stitle' => 0,
    'sflag' => 0,
    'safety' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'page' => 0,
    'urlitem' => 0,
    'total' => 0,
    'pagecount' => 0,
    'showpage' => 0,
    'id' => 0,
    'comeurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f667c92c715_23732470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f667c92c715_23732470')) {function content_5a2f667c92c715_23732470($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>防骗文章</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=='run'){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety">防骗文章</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=add" class="btn-general"><span>添加文章</span></a>文章列表</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety" />
	  <div class="item">
	    分类：<?php echo cmd_hook(array('mod'=>"var",'item'=>"casecat",'type'=>"select",'name'=>"scatid",'text'=>"=不限=",'value'=>$_smarty_tpl->tpl_vars['scatid']->value),$_smarty_tpl);?>
&nbsp;&nbsp;
		标题：<input type="text" id="stitle" name="stitle" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['stitle']->value;?>
" />&nbsp;&nbsp;
		状态：
		  <select name="sflag" id="sflag">
		  <option value="">=不限=</option>
		  <option value="1"<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='1'){?> selected<?php }?>>正常</option>
		  <option value="2"<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='2'){?> selected<?php }?>>锁定</option>
		  </select>
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜索" />
	  </div>
	  </form>
	</div>

	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="9%">ID</th>
		<th width="30%">标题</th>
		<th width="10%">图文</th>
		<th width="15%">添加时间</th>
		<th width="7%">状态</th>
		<th width="7%">推荐</th>
		<th width="7%">浏览</th>
		<th>操作</th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

	  <?php if (empty($_smarty_tpl->tpl_vars['safety']->value)){?>
      <tr>
	    <td colspan="8" align="center">没有符合条件的信息</td>
	  </tr>
	  <?php }else{ ?>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['safety']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" onClick="checkItem(this, 'chkAll')"><?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
</td>
		<td align="left"><a href="../index.php?c=safety&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></td>
		<td align="center">
		<?php if (!empty($_smarty_tpl->tpl_vars['volist']->value['thumbimg'])){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
" width="20px" height="20px" data-img="<?php echo $_smarty_tpl->tpl_vars['volist']->value['drawimg'];?>
" f="viewimg" />
		<?php }else{ ?>
		--
		<?php }?>
		</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']==0){?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" value="flagopen" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" value="flagclose" />
			<img id="flag<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['elite']==0){?>
			<input type="hidden" id="attr_elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" value="eliteopen" />
			<img id="elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/no.gif" onClick="javascript:fetch_ajax('elite','<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
');" style="cursor:pointer;">
		<?php }else{ ?>
			<input type="hidden" id="attr_elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" value="eliteclose" />
			<img id="elite<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('elite','<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
');" style="cursor:pointer;">	
		<?php }?>
        </td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['hits'];?>
</td>
		<td align="center">
		  <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
" class="icon-edit">编辑</a>&nbsp;&nbsp;
		  <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['infoid'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <?php } ?>
	  <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="7"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
	  </tr>
	  <?php }?>
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


<?php if ($_smarty_tpl->tpl_vars['a']->value=='add'){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>防骗文章<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=add">添加文章</a></p></div>
  <div class="main-cont">
	<h3 class="title">添加案例</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety" />
    <input type="hidden" name="a" value="saveadd" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>

	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback' colspan="3">
		  
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="drawimg" id="drawimg" class="input-txt"  /> <span id='ddrawimg' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=upload&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
	    </td>
	  </tr>
	  <tr>
		<td class='hback_1'>缩略图 <span class="f_red"></span> </td>
		<td class='hback' colspan="3">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbimg" id="thumbimg" class="input-txt" /> <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span> </td>
			  <td><span id="previewsrc"></span></td>
			</tr>
		  </table>
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">标题：<span class="f_red">*</span></td>
		<td class="hback"colspan="3">
		  <input type="text" name="title" id="title" class="input-txt" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1" width="15%">作者：<span class="f_red"></span> </td>
		<td width="35%">
		  <input type="text" name="author" id="author" class="input-150" />
		</td>
		<td class="hback_1" width="15%">浏览次数：<span class="f_red"></span> </td>
		<td width="35%">
		  <input type="text" name="hits" id="hits" class="input-s" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">状态：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="flag" id="flag" value="1" checked />正常，
		  <input type="radio" name="flag" id="flag" value="0" />锁定
		</td>
		<td class="hback_1">推荐：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="elite" id="elite" value="1" />是，
		  <input type="radio" name="elite" id="elite" value="0" checked />否
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">摘要：<span class="f_red"></span> </td>
		<td colspan="3"><textarea name="intro" id="intro" style="width:55%;height:60px;"></textarea></td>
	  </tr>
	  <tr>
	    <td class="hback_1">内容：<span class="f_red"></span></td>
		<td colspan="3">
		<textarea name="content" id="content" style="width:90%;height:350px;display:none;"></textarea>
		</td>
	  </tr>
	  <tr>
		<td class="hback_none"></td>
		<td class="hback_none" colspan="3"><input type="button" id="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<script type="text/javascript">
$(function(){
	var myeditor;
	KindEditor.ready(function(K) {myeditor = K.create("#content");});

	$("#btn_save").bind("click", function(){
		if ($("#title").val().length == 0) {
			alert("请填写标题");
			return false;
		}
		$("#content").text(myeditor.html());
		$("#myform").submit();
	});
});
</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="edit"){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>防骗文章<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">编辑文章</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>编辑文章</h3>
    <form name="myform" id="myform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=safety" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class="hback_1">图片地址 <span class="f_red"></span> </td>
		<td class="hback" colspan="3">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="drawimg" id="drawimg" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['safety']->value['drawimg'];?>
" /> <span id='ddrawimg' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=upload&formname=myform&module=upload&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
	    </td>
	  </tr>
	  <tr>
		<td class="hback_1">缩略图 <span class="f_red"></span> </td>
		<td class="hback" colspan="3">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbimg" id="thumbimg" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['safety']->value['thumbimg'];?>
" /> <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span> </td>
			  <td><span id="previewsrc"></span></td>
			</tr>
		  </table>
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">标题：<span class="f_red">*</span></td>
		<td class="hback" colspan="3">
		  <input type="text" name="title" id="title" class="input-txt" value="<?php echo $_smarty_tpl->tpl_vars['safety']->value['title'];?>
" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1" width="15%">作者：<span class="f_red"></span> </td>
		<td width="35%">
		  <input type="text" name="author" id="author" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['safety']->value['author'];?>
" />
		</td>
		<td class="hback_1" width="15%">浏览次数：<span class="f_red"></span> </td>
		<td width="35%">
		  <input type="text" name="hits" id="hits" class="input-s" value="<?php echo $_smarty_tpl->tpl_vars['safety']->value['hits'];?>
" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">状态：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['safety']->value['flag']=='1'){?> checked<?php }?> />正常，
		  <input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['safety']->value['flag']=='0'){?> checked<?php }?> />锁定
		</td>
		<td class="hback_1">推荐：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="elite" id="elite" value="1"<?php if ($_smarty_tpl->tpl_vars['safety']->value['elite']=='1'){?> checked<?php }?> />是，
		  <input type="radio" name="elite" id="elite" value="0"<?php if ($_smarty_tpl->tpl_vars['safety']->value['elite']=='0'){?> checked<?php }?> />否
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">摘要：<span class="f_red"></span> </td>
		<td colspan="3"><textarea name="intro" id="intro" style="width:55%;height:60px;"><?php echo $_smarty_tpl->tpl_vars['safety']->value['intro'];?>
</textarea></td>
	  </tr>
	  <tr>
	    <td class="hback_1">内容：<span class="f_red"></span></td>
		<td colspan="3">
		<textarea name="content" id="content" style="width:90%;height:350px;display:none;"><?php echo $_smarty_tpl->tpl_vars['safety']->value['content'];?>
</textarea>
		</td>
	  </tr>
	  <tr>
		<td class="hback_none"></td>
		<td class="hback_none" colspan="3"><input type="button" id="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<script type="text/javascript">
$(function(){
	var myeditor;
	KindEditor.ready(function(K) {myeditor = K.create("#content");});

	$("#btn_save").bind("click", function(){
		if ($("#title").val().length == 0) {
			alert("请填写标题");
			return false;
		}
		$("#content").text(myeditor.html());
		$("#myform").submit();
	});
});
</script>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html><?php }} ?>