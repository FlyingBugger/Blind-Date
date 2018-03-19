<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:18:32
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\block_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21345a2f66a83ed0b9-83953821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca35aaacd9cbdf3e3bdef9efde2cec461f04ed0c' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\block_map.tpl',
      1 => 1508307360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21345a2f66a83ed0b9-83953821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'baidu_map_key' => 0,
    'urlpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f66a8516214_01321995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f66a8516214_01321995')) {function content_5a2f66a8516214_01321995($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["baidu_map_key"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['config']->value['baidumap_key']), null, 0);?>
<?php if (empty($_smarty_tpl->tpl_vars['baidu_map_key']->value)){?>
<?php $_smarty_tpl->tpl_vars["baidu_map_key"] = new Smarty_variable("d9jat2VxBFnIEWKGs2NaxAowYXDvlzal", null, 0);?>
<?php }?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $_smarty_tpl->tpl_vars['baidu_map_key']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/map/oelove.map.js"></script>
<script type="text/javascript">
$(function(){
	_initOEmap();//初始化
});
</script><?php }} ?>