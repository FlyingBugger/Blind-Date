<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:09:46
         compiled from "D:\weixin\desktop\jy\tpl\wap\cp_writemsg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220005aaf1bea482bf8-48201117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f7ae70601e4792aa791e19edbeee641d22b2f51' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\cp_writemsg.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220005aaf1bea482bf8-48201117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'touser' => 0,
    'touid' => 0,
    'paystatus' => 0,
    'fee' => 0,
    'wapfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1bea51b0f3_15937259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1bea51b0f3_15937259')) {function content_5aaf1bea51b0f3_15937259($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("cp", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cp-bartitle">【给<?php echo $_smarty_tpl->tpl_vars['touser']->value['username'];?>
写信件】</div>

<div class="cp-layout-body-gray">
  <div class="item-wrap">
    <h2>信件不能出现联系方式，否则无法提交。</h2>
	<div class="item-list">
	  <p>
	  <input type="hidden" name="touid" id="touid" value="<?php echo $_smarty_tpl->tpl_vars['touid']->value;?>
" />
	  <textarea name="content" id="content" style="height:150px;"></textarea></p>
	</div>
  </div>
  <div class="hr-t"></div>

  <?php if (true===$_smarty_tpl->tpl_vars['paystatus']->value){?>
  <div class="spanbtn1" id="btn_post">付费发信(<?php echo $_smarty_tpl->tpl_vars['fee']->value;?>
金币)</div>
  <?php }else{ ?>
  <div class="spanbtn0" id="btn_post">免费发信</div>
  <?php }?>
  <div class="hr-b"></div>
</div>
</body>
</html>
<script type="text/javascript">
$("#btn_post").click(function(){ //提交
	var touid = $("#touid").val();
	var content = $("#content").val();
	if (touid < 1) {
		ToastShow("参数错误");
		return false;
	}
	if (content == "") {
		ToastShow("内容不能为空");
		return false;
	}

	$.ajax({
		type: "POST",
		url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do",
		cache: false,
		data: {a:"savewrite", touid:touid, content:content, r:get_rndnum(8)},
		dataType: "json",
		success: function(data) {
			var json = eval(data);
			var response = json.response;
			var result = json.result;
			if (response == '1') {
				ToastShow("发送成功");
				setTimeout(function(){
					goBack();
				}, 500);
			}
			else {
				if (result.length > 0) {
					ToastShow(result);
				}
				else {
					ToastShow("发送失败");
				}
			}
		},
		error: function() {
			ToastShow("操作失败，请检查网络状态。");
		}
	});

});
</script><?php }} ?>