<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:56
         compiled from "D:\weixin\desktop\jy\tpl\wap\passport_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214365aaf1a5054c642-04404377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68854f74cd5d70d4b8be71e5bd7bb88bf49f8ef5' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\passport_login.tpl',
      1 => 1514954696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214365aaf1a5054c642-04404377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
    'forward' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a508b7030_33933182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a508b7030_33933182')) {function content_5aaf1a508b7030_33933182($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("login", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form name="login_form" id="login_form" action="<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport" method="post">
<input type="hidden" name="a" id="a" value="loginpost" />
<div class="layout-body">
  <div class="login-box">
    <h2>会员登录</h2>
    <ul>
	  <li style="margin-bottom:15px;">
	    <i>帐号</i>
		<input type="text" id="loginname" name="loginname" placeholder="输入用户名或者邮箱" />
	  </li>
	  <li>
	    <i>密码</i>
		<input type="password" id="password" name="password" placeholder="输入登录密码" />
	  </li>
	</ul>
	<div class="clear"></div>
  </div>
  <div class="hr-t"></div>
  <div class="spanbtn0" id="btn_login">立即登录</div>
  <div class="hr-b"></div>
  <div class="login-tips" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=reg');">没有帐号？点击注册。</div>
</div>
</form>
<script type="text/javascript">
var forward = "<?php echo $_smarty_tpl->tpl_vars['forward']->value;?>
";
$(function(){
	$("#btn_login").click(function(){ //登录
		var loginname = $("#loginname").val();
		var password = $("#password").val();
		if (loginname == '') {
			ToastShow("登录帐号不能为空");
			return false;
		}
		if (password == '') {
			ToastShow("登录密码不为空");
			return false;
		}
		$("#login_form").submit();
	});

});
</script>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer_cp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>