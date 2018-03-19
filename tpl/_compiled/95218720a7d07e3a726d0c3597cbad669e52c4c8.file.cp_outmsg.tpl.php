<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:10:04
         compiled from "D:\weixin\desktop\jy\tpl\wap\cp_outmsg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227805aaf1bfcd5e027-56370620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95218720a7d07e3a726d0c3597cbad669e52c4c8' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\cp_outmsg.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227805aaf1bfcd5e027-56370620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
    'type' => 0,
    'outmsg' => 0,
    'volist' => 0,
    'pagecount' => 0,
    'page' => 0,
    'prepage' => 0,
    'urlitem' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1bfceb9037_07898375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1bfceb9037_07898375')) {function content_5aaf1bfceb9037_07898375($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("cp", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cp-bartitle">发信箱 <b onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_message');">收信箱</b></div>
<div class="tab-layout-2">
  <ul>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&type=')" style="width:33.3%;"<?php if (empty($_smarty_tpl->tpl_vars['type']->value)){?> class="tab-selected"<?php }?>>全部</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&type=read')" style="width:33.3%;"<?php if ($_smarty_tpl->tpl_vars['type']->value=='read'){?> class="tab-selected"<?php }?>>已读</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&type=unread')" style="width:33.3%;"<?php if ($_smarty_tpl->tpl_vars['type']->value=='unread'){?> class="tab-selected"<?php }?>>未读</li>
  </ul>
  <div class="clear"></div>
</div>

<div class="cp-layout-body">

  <div class="cplist-box">
    <?php if (empty($_smarty_tpl->tpl_vars['outmsg']->value)){?>
    <h6>没有符合条件的信息</h6>
	<?php }else{ ?>
	<ul id="json_data">
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['outmsg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <li>
	    <div class="cplist-img" onclick="userDetail('<?php echo $_smarty_tpl->tpl_vars['volist']->value['touserid'];?>
');"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></div>
		<div class="cplist-info">
		  <h2>
		  <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['sendtime'],"%m/%d %H:%M");?>
</span>
		  <b onclick="userDetail('<?php echo $_smarty_tpl->tpl_vars['volist']->value['touserid'];?>
');"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</b></h2>
		  <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['marrystatus']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
</p>
		  <p>
		  <i onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&a=view&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['msgid'];?>
');">查看</i>
		  <?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['content'],10);?>
...
		  </p>
		</div>
		<div class="clear"></div>
	  </li>
	  <?php } ?>
	</ul>
	<div class="clear"></div>
	<?php }?>
  </div>
  <!--//List End-->

  <?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
  <div class="page-layout">
    页次：<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['prepage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
');">上一页</span>  
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['nextpage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_outmsg&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
');">下一页</span>  
	<?php }?>
  </div>
  <!--//ShowPage End-->
  <?php }?>

</div>

</body>
</html>
<script type="text/javascript">
$(function(){
	//maxwidth
	var max_width = (WIN_WIDTH-100);
	$(".cplist-box .cplist-info").css({"width":max_width});

});
</script><?php }} ?>