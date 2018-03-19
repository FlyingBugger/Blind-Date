<?php /* Smarty version Smarty-3.1.14, created on 2018-01-03 12:50:07
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302385a2f5cc8e174d0-89504761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0608a32f28d3a108f34180d657c16385150e68e7' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\frame.tpl',
      1 => 1514954679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302385a2f5cc8e174d0-89504761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5cc907a3f8_48748281',
  'variables' => 
  array (
    'page_charset' => 0,
    'config' => 0,
    'copyright_header' => 0,
    'copyright_author' => 0,
    'cpfile' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5cc907a3f8_48748281')) {function content_5a2f5cc907a3f8_48748281($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>管理中心-[<?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
]-<?php echo $_smarty_tpl->tpl_vars['copyright_header']->value;?>
</title>
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['copyright_author']->value;?>
" />
<meta name="generator" content="OElove" />
<frameset frameborder=10 framespacing=0 border=0 rows="70, *,32">
<frame src="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=top" name="top" frameborder=0 NORESIZE SCROLLING='no' marginwidth=0 marginheight=0>
<frameset frameborder=0  framespacing=0 border=0 cols="170,7, *" id="frame-body">
<frame src="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=left" frameborder=0 id="menu-frame" name="menu" scrolling="auto" marginwidth="0">
<frame src="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=drag" id="drag-frame" name="drag-frame" frameborder="no" scrolling="no">
<frame src="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=main" frameborder=0 id="main-frame" name="main">
</frameset>
<frame src="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=frame&a=footer" name="footer" frameborder=0 NORESIZE SCROLLING='no' marginwidth=0 marginheight=0>
</frameset><noframes></noframes>
</html><?php }} ?>