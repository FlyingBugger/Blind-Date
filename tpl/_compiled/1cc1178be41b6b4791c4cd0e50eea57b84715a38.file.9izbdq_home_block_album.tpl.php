<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:49:29
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_home_block_album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246155a2fde69307a87-57681357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc1178be41b6b4791c4cd0e50eea57b84715a38' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_home_block_album.tpl',
      1 => 1511430476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246155a2fde69307a87-57681357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'home' => 0,
    'album' => 0,
    'urlpath' => 0,
    'config' => 0,
    'login' => 0,
    'volist' => 0,
    'skinpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fde69494875_87519907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fde69494875_87519907')) {function content_5a2fde69494875_87519907($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['album'] = new Smarty_variable(vo_list("mod={album} where={v.userid='".((string)$_smarty_tpl->tpl_vars['home']->value['userid'])."'} num={1000}"), null, 0);?> 
<?php if (!empty($_smarty_tpl->tpl_vars['album']->value)){?> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">[<?php echo $_smarty_tpl->tpl_vars['home']->value['username'];?>
] 的相册 ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});
		</script>
<div class="articlesec detailsec">
    <?php if ($_smarty_tpl->tpl_vars['config']->value['avatarpermflag']=='1'&&$_smarty_tpl->tpl_vars['login']->value['info']['avatarflag']!='1'){?>
    <table border="0" cellspacing="10" cellpadding="10" width="98%">
      <tr>
        <td align="center">对不起，您还没上传形象照或未通过审核，无法查看其他会员相册<br />
          <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=avatar">马上设置形象照</a></td>
      </tr>
    </table>
    <?php }else{ ?>
    <div class="home-album bd">
      <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
      <ul>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <li> <a rel="example_group" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['uploadfiles'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbfiles'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
" /></a><img class="imgheigt" src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
themes/images/l39_height.png" alt="" />
        </li>
        <?php } ?>
      </ul>
      <?php }else{ ?>
        <p>对不起，需要登录才可查看会员相册，<a href="###" onclick="artbox_loginbox();">点此登录</a>。</p>
      <?php }?>
      <div style="clear:both;"></div>
    </div>
    <?php }?> 
  <script type="text/javascript">
		jQuery(".articlesec").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:7,trigger:"click"});
  </script>
</div>
<?php }else{ ?>
  <p class="nodata">TA很懒，还没上传任何照片</p>
<?php }?> 
<?php }} ?>