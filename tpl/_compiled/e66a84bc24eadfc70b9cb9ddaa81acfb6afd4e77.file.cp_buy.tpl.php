<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:51:47
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\cp_buy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301325a2fdef3373114-63947316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66a84bc24eadfc70b9cb9ddaa81acfb6afd4e77' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\cp_buy.tpl',
      1 => 1465963180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301325a2fdef3373114-63947316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'viplist' => 0,
    'volist' => 0,
    'wapskin' => 0,
    'val' => 0,
    'wapfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdef376e106_83376641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdef376e106_83376641')) {function content_5a2fdef376e106_83376641($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("buy", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cp-bartitle">购买特权</div>

<div class="cp-layout-body">

  <?php $_smarty_tpl->tpl_vars["viplist"] = new Smarty_variable(vo_list("mod={usergroup} where={v.groupid>1}"), null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
  <div class="buy-box" onclick="changeTab('group_<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
');">
    <div class="buy-wrap">
	  <div class="buy-wrap-left"><img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/service_000.png" /></div>
	  <div class="buy-wrap-right">
	    <h2><?php echo $_smarty_tpl->tpl_vars['volist']->value['groupname'];?>
</h2>
		<p>开通<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupname'];?>
，尊享更多特权。</p>
	  </div>
	  <div class="clear"></div>
	</div>
	<span class="sel-down" id="span_group_<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
"></span>
  </div>
  <div style="position:relative;display:none;" id="group_<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
">
    <div class="buy-slide-up"></div>
  	<div class="buy-vip-spec">
	  <h2>特权：</h2> 
	  <ul>
	    <li>炫亮身份标识</li>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['msg']['daysendslimit']=='0'){?>
		<li>每天不限免费发信</li>
		<?php }else{ ?>
		<li>每天免费发<?php echo $_smarty_tpl->tpl_vars['volist']->value['msg']['daysends'];?>
封信件</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['msg']['dayviewslimit']=='0'){?>
		<li>每天不限免费看信</li>
		<?php }else{ ?>
		<li>每天免费看<?php echo $_smarty_tpl->tpl_vars['volist']->value['msg']['dayviews'];?>
封信件</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['viewlogintime']=='1'){?>
		<li>查看登录时间</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['msg']['msgistop']=='1'){?>
		<li>信件置顶</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['useadvsearch']=='1'){?>
		<li>条件搜索</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['viewvisitor']=='1'){?>
		<li>谁看过我</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['viewmatch']=='1'){?>
		<li>缘分速配</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['viewcontact']=='1'){?>
		<li>查看联系方式</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['view']['viewcredit']=='1'){?>
		<li>诚信查询</li>
		<?php }?>
	  </ul>
	  <div class="clear"></div>
	</div>
	<div class="buy-list">
      <ul>
	    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['volist']->value['commer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	    <li>有效<font color="green"><?php echo $_smarty_tpl->tpl_vars['val']->value['days'];?>
</font>天，￥<font color="orange"><?php echo $_smarty_tpl->tpl_vars['val']->value['money'];?>
</font><?php if ($_smarty_tpl->tpl_vars['val']->value['postage']>0){?>，送<font color="blue"><?php echo $_smarty_tpl->tpl_vars['val']->value['postage'];?>
</font>张邮票<?php }?> <span onclick="confirmBuy('buyvip', '<?php echo $_smarty_tpl->tpl_vars['volist']->value['groupid'];?>
_<?php echo $_smarty_tpl->tpl_vars['val']->value['orders'];?>
');">购买</span></li>
	    <?php } ?>
	  </ul>
    </div>
  </div>
  <?php } ?>

</div>

<div id="varpop_shade" class="varpop-shade"></div>
<div class="confirm-layout" id="confirm_box" style="display:none;">
  <input type="hidden" name="type" id="type" value="" />
  <h2>信息提示</h2>
  <p>确定要购买该套餐吗？</p>
  <div class="confirm-list">
    <div class="confirm-l" id="btn_cancel">取消</div>
	<div class="confirm-r" id="btn_confirm">确定</div>
	<div class="clear"></div>
  </div>
</div>
<script type="text/javascript">
//切换tab
function changeTab(id) {
	if (document.getElementById(id).style.display == "none") { //展开
		$("#span_"+id).removeClass("sel-down");
		$("#span_"+id).addClass("sel-up");
		$("#"+id).show();
	}
	else { //隐藏
		$("#span_"+id).removeClass("sel-up");
		$("#span_"+id).addClass("sel-down");
		$("#"+id).hide();
	}
}

//购买套餐
function objBuyService() {
	var type = $("#type").val();
	$.ajax({
		type: "POST",
		url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_buy",
		cache: false,
		data: {a:"buyvip", type:type, r:get_rndnum(8)},
		dataType: "json",
		success: function(data) {
			var json = eval(data);
			var response = json.response;
			var result = json.result;
			if (response == '1') {
				ToastShow("购买成功");
				setTimeout(function(){
					window.location.href = "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp";
				}, 800);
			}
			else if (response == '2') {
				ToastShow("帐户余额不足，请先充值。");
				setTimeout(function(){
					goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=index&a=payment");
				}, 800);
			}
			else {
				if (result.length > 0) {
					ToastShow(result);
				}
				else {
					ToastShow("购买失败");
				}
			}
		},
		error: function() {
			ToastShow("操作失败，请检查网络状态。");
		}
	});
}

//确认购买
function confirmBuy(a, type) {
	$("#varpop_shade").show();
	tabPopMarginAuto("confirm_box");
	$("#confirm_box").fadeIn(200); //显示
	$("#type").val(type);
}

$(function(){
	$("#btn_cancel").click(function(){ //取消
		$("#varpop_shade").hide();
		$("#confirm_box").fadeOut(200);
	});

	$("#btn_confirm").click(function(){
		$("#varpop_shade").hide();
		$("#confirm_box").fadeOut(200);
		objBuyService();
	});
});
</script>
</body>
</html>
<?php }} ?>