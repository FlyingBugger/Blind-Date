<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:44:14
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_passport_setmonolog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79525a2fdd2ee22dc4-23505803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '865651c1d4806a990d843e79bc3ae5c2923b68b8' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_passport_setmonolog.tpl',
      1 => 1512697014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79525a2fdd2ee22dc4-23505803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'urlpath' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdd2f158516_97000186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdd2f158516_97000186')) {function content_5a2fdd2f158516_97000186($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="page-index" class="page">
  <div class="ce_reg">
    <div class="left">
      <div class="reg_left_title">
        <h1>第二步 设置内心独白</h1>
      </div>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=savemonolog" name="reg_form" id="reg_form" />
        <div class="form_box">

          <div class="form_li">
            <label>
			内心独白 (<?php echo $_smarty_tpl->tpl_vars['config']->value['molminlen'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['config']->value['molmaxlen'];?>
个字) <br />
			可以是一篇日记，一段歌词，一句座右铭，一个有趣的签名档……
			</label>
			<textarea name='content' id='content' style='width:85%;height:150px;overflow:auto;line-height:23px;' onKeyDown="count_char('content', 'counter');" onKeyUp="count_char('content', 'counter');"></textarea>

			<br />
			<font color='#999999'>(限<?php echo $_smarty_tpl->tpl_vars['config']->value['molminlen'];?>
 ~ <?php echo $_smarty_tpl->tpl_vars['config']->value['molmaxlen'];?>
个字，目前已输入<span id="counter">0</span>字)</font>

          </div>
          
          <div class="form_li">
            <div class="tijiao"> 
			  <a class="btn_a1" id="a_register_submit" href='###' onClick="return checkreg();"> <button class="button_register">下一步</button> </a>
              &nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=setcontact">跳过，以后再写</a>  
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="right"> 
	  <a class="login" href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=login">已有帐号？ 点此登录&gt;&gt;</a>
      <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."passport_tips.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <div style="clear:both;"></div>
  </div>
  <div style="clear:both;"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<script language='javascript'>
function checkreg(){
	var t = '';
	var v = '';

	t = 'content';
	v = $('#'+t).val();
	if (v == '') {
		alert('内心独白不能为空');
		$('#'+t).focus();
		return false;
	}
	else {
		if (strQuantity(v)<<?php echo $_smarty_tpl->tpl_vars['config']->value['molminlen'];?>
 || strQuantity(v)><?php echo $_smarty_tpl->tpl_vars['config']->value['molmaxlen'];?>
) {
			alert('内心独白字数必须在<?php echo $_smarty_tpl->tpl_vars['config']->value['molminlen'];?>
~<?php echo $_smarty_tpl->tpl_vars['config']->value['molmaxlen'];?>
个字之间');
			$('#'+t).focus();
			return false;
		}
	}

	$('#reg_form').submit();
	return true;
}
</script><?php }} ?>