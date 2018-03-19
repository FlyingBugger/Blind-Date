<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 23:13:22
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\halt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164235a2ff2120d8d60-76699218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8712598922ae2dd7f629c23fde18c5916e2ef553' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\halt.tpl',
      1 => 1416899436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164235a2ff2120d8d60-76699218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'msg' => 0,
    'type' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2ff212308d41_19830585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2ff212308d41_19830585')) {function content_5a2ff212308d41_19830585($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="navbar-layout">
  <p>信息提示</p>
</div>
<div class="halt-layout">
  <p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
  <p>
  <?php if ($_smarty_tpl->tpl_vars['type']->value=="1"){?>
  <span onclick="goBack();">返回上一页</span>
  <?php }else{ ?>
  <script type="text/javascript">
  $(function(){
	  setTimeout(function(){
		  window.location.href = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
	  }, 1000);
  });
  </script>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
');">如果没有跳转，点击这里。</span>
  <?php }?>
  </p>
</div>
</body>
</html><?php }} ?>