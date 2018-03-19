<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:56
         compiled from "D:\weixin\desktop\jy\tpl\wap\block_footer_cp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80055aaf1a508d5ef5-98381497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bedd5eeb65a01c085a76ebcddf62acfe3d603e4c' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\block_footer_cp.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80055aaf1a508d5ef5-98381497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_id' => 0,
    'wapfile' => 0,
    'login' => 0,
    'new_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a50a346a5_76256655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a50a346a5_76256655')) {function content_5aaf1a50a346a5_76256655($_smarty_tpl) {?><div style="height:55px;"></div>
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