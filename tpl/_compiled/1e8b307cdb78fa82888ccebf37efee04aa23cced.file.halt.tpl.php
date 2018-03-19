<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:58
         compiled from "D:\weixin\desktop\jy\tpl\wap\halt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237855aaf1a52cd3137-53420477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e8b307cdb78fa82888ccebf37efee04aa23cced' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\halt.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237855aaf1a52cd3137-53420477',
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
  'unifunc' => 'content_5aaf1a52d39413_02089836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a52d39413_02089836')) {function content_5aaf1a52d39413_02089836($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable('', null, 0);?>
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