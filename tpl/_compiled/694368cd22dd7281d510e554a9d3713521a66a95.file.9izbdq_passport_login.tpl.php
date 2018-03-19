<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:46:15
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_passport_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23535a2fdda7c83786-54615620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '694368cd22dd7281d510e554a9d3713521a66a95' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_passport_login.tpl',
      1 => 1512700348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23535a2fdda7c83786-54615620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'skinpath' => 0,
    'urlpath' => 0,
    'connect' => 0,
    'volist' => 0,
    'config' => 0,
    'forward' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdda7f08976_40039551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdda7f08976_40039551')) {function content_5a2fdda7f08976_40039551($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="page-index" class="page" style="background:#ffd7d7;">
  <div class="oe_nlogin" style="background:url('<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/login.png') right 50px no-repeat #ffd7d7;">
    <div class="oe_nlogincn">
      <div class="hd">
        登录网站
      </div>
      <div class="bd">
        <ul>
          <li>
            <label>帐号</label>
            <input type="text" name="loginname" id="loginname" value="用户名/邮箱" class="w1" />
          </li>
          <li>
            <label>密码</label>
            <input type="password" name="password" id="password" class="w1" />
          </li>
          <li class="ma">
            <label>验证码</label>
            <input type="text" id="checkcode" name="checkcode" class="w2" />
			<img id="codeimg" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
source/include/imagecode.php?act=verifycode" align="middle" />
		    <a href="javascript:refreshCode();"> 换一张</a>
          </li>
          <li class="btn">
            <a href="javascript:;">
			  <button id="but_login">登 录</button>
            </a>
            <a class="a_2" href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=forget">忘记密码</a>
          </li>
          <li class="other">
            <?php $_smarty_tpl->tpl_vars['connect'] = new Smarty_variable(vo_list("mod={connect}"), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['connect']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['apiurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['logo'];?>
" /><?php echo $_smarty_tpl->tpl_vars['volist']->value['authname'];?>
</a>  &nbsp;&nbsp;
			<?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script language="javascript">
$(function(){

	$("#loginname").bind("click", function(){ //帐号
		$_val = $(this).val();
		if ($_val == "用户名/邮箱") {
			$(this).val("");
		}
	});

	$("#codeimg").bind("click", function(){ //验证码
		$(this).attr("src", "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
source/include/imagecode.php?act=verifycode&"+Math.random());
	});

	$("#but_login").bind("click", function(){ //注册
		$_loginname = $("#loginname").val();
		$_password = $("#password").val();
		$_checkcode = "";

		if ($_loginname == "" || $_loginname == "用户名/邮箱") {
			alert("请填写登录帐号");
			return false;
		}
		if ($_password.length == 0) {
			alert("请填写登录密码");
			return false;
		}
		<?php if ($_smarty_tpl->tpl_vars['config']->value['logincode']=='1'){?>
		$_checkcode = $("#checkcode").val();
		if ($_checkcode.length == 0) {
			alert("请填写验证码");
			return false;
		}
		<?php }?>
		
		$forward = "<?php echo $_smarty_tpl->tpl_vars['forward']->value;?>
";
		if ($forward.length == 0) {
			$forward = "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
";
		}
		$.ajax({
			type: "POST",
			url: _ROOT_PATH+"index.php?c=passport",
			cache: false,
			data: {a:"loginpost", loginname:$_loginname, password:$_password, checkcode:$_checkcode, forward:$forward, fromhalt:"ajax", r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					window.location.href = $forward;
				}
				else if ($response == "2") {
					window.top.location.href = $result;
				}
				else {
					if ($result.length > 0) {
						alert($result);
					}
					else {
						alert("登录失败，请检查帐号和密码");
					}
				}
			},
			error: function() {
				alert("登录失败，请检查帐号和密码");
			}
		});

	});

});
    function refreshCode(){
        $("#codeimg").attr("src", "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
source/include/imagecode.php?act=verifycode&"+Math.random());
    }
</script>
</body>
</html><?php }} ?>