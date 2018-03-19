<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:22:32
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19945a2fd818820818-57364669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b73a28a0ea11831cb721c2e0ab28a7fcf817b32a' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\block_footer.tpl',
      1 => 1512540546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19945a2fd818820818-57364669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_id' => 0,
    'wapfile' => 0,
    'config' => 0,
    'login' => 0,
    'new_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fd818acf990_38503559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fd818acf990_38503559')) {function content_5a2fd818acf990_38503559($_smarty_tpl) {?><div class="footer-about"<?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='home'){?> style="border-top:none;" <?php }?>>
  <span onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=index&a=about';">关于我们</span> | <span onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=index&a=contact';">联系我们</span> | <span onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=index&a=clause';">用户条款</span> | <span onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=index&a=payment';">付款方式</span><br />
  &copy;<?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
 版权所有
</div>
<div style="height:55px;"></div>
<div class="oe_footerbar">
  <dl class="dl_1 <?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='index'){?> current<?php }?>" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
');">
    <dt><i class="iconfont">&#xe822;</i></dt>
    <dd>首页</dd>
  </dl>
  <dl class="dl_2 <?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='user'){?> current<?php }?>" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user');">
    <dt><i class="iconfont">&#xe60c;</i></dt>
    <dd>会员</dd>
  </dl>
  <dl class="dl_3 <?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='party'){?> current<?php }?>" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party');">
    <dt><i class="iconfont">&#xe61e;</i></dt>
    <dd>活动</dd>
  </dl>
  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newmessage','value'=>$_smarty_tpl->tpl_vars['login']->value['info']['userid']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["new_msg"] = new Smarty_variable($_tmp1, null, 0);?>
  <?php }else{ ?>
  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newmessage','value'=>0),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["new_msg"] = new Smarty_variable($_tmp2, null, 0);?>
  <?php }?>
  <dl class="dl_3 <?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='message'){?> current<?php }?>" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_message');">
    <dt>
	  <i class="iconfont">&#xe7c1;</i><?php if ($_smarty_tpl->tpl_vars['new_msg']->value>0){?><em></em><?php }?>
	</dt>
    <dd>信件</dd>
  </dl>
  <dl class="dl_4 <?php if ($_smarty_tpl->tpl_vars['menu_id']->value=='cp'){?> current<?php }?>" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp');">
    <dt>
      <i class="iconfont">&#xe6c7;</i>
    </dt>
    <dd>我的</dd>
  </dl>
</div><?php }} ?>