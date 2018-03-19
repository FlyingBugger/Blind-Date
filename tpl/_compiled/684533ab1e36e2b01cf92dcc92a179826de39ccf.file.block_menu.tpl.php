<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:45:11
         compiled from "D:\freehost\ftp122778453\web\tpl\user\block_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272115a2fdd679f4bb8-83671280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684533ab1e36e2b01cf92dcc92a179826de39ccf' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\user\\block_menu.tpl',
      1 => 1512012980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272115a2fdd679f4bb8-83671280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'u' => 0,
    'ucfile' => 0,
    'urlpath' => 0,
    'ucpath' => 0,
    'cp_menuid' => 0,
    'new_msg' => 0,
    'new_gift' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdd67d29023_59692579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdd67d29023_59692579')) {function content_5a2fdd67d29023_59692579($_smarty_tpl) {?><div class="user_main_left">
  <div class="oe_index_uL_top">
    <div class="oe_index_uL_head">
	  <dl>
	    <dt>
		  <?php if (!empty($_smarty_tpl->tpl_vars['u']->value['avatar'])){?> 
		  <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['u']->value['avatar'];?>
" title="设置头像" /></a>
		  <?php }else{ ?>
		  <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['avatarurl'];?>
" title="设置头像" /></a>
		  <?php }?>
		</dt>
		<dd>
		  <h2><?php echo $_smarty_tpl->tpl_vars['u']->value['levelimg'];?>
<?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
</h2>
		  <h3><a href="<?php echo $_smarty_tpl->tpl_vars['u']->value['homeurl'];?>
" target="_blank">查看我的主页</a></h3>
		</dd>
		<div class="clear"></div>
	  </dl>
	  <div class="clear"></div>

    </div>
    <div class="oe_uL_rz">
      <div class="oe_uL_rz_name">
	  征友状态：
	  <?php if ($_smarty_tpl->tpl_vars['u']->value['lovestatus']=='1'){?>
	  进行中
	  <?php }else{ ?>
	  已关闭
	  <?php }?>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=account&a=setstatus">修改</a>
	  </div>
      <div class="oe_uL_rz_con">
	    <img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/a1<?php if ($_smarty_tpl->tpl_vars['u']->value['idnumberrz']==0){?>_h<?php }?>.png" title="<?php if ($_smarty_tpl->tpl_vars['u']->value['idnumberrz']==0){?>身份证未认证<?php }else{ ?>已身份证认证<?php }?>" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/a2<?php if ($_smarty_tpl->tpl_vars['u']->value['emailrz']==0){?>_h<?php }?>.png" title="<?php if ($_smarty_tpl->tpl_vars['u']->value['emailrz']==0){?>邮箱未认证<?php }else{ ?>已邮箱认证<?php }?>" />
		<img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/a3<?php if ($_smarty_tpl->tpl_vars['u']->value['videorz']==0){?>_h<?php }?>.png" title="<?php if ($_smarty_tpl->tpl_vars['u']->value['videorz']==0){?>视频未认证<?php }else{ ?>已视频认证<?php }?>" />
	   <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=certify">诚信认证</a>
	  </div>
    </div>
    <div class="oe_index_uL_jb">
      <ul>
        <li><span><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=money"><?php echo doubleval($_smarty_tpl->tpl_vars['u']->value['money']);?>
</a></span>我的金币</li>
        <li><span><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=points"><?php echo doubleval($_smarty_tpl->tpl_vars['u']->value['points']);?>
</a></span>我的积分</li>
        <div class="clear"></div>
      </ul>
    </div>
    <div class="mu_profile">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=payment" class="a_1">在线充值</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=profile" class="a_2">完善资料</a>
    </div>
  </div>
  <div class="oe_hr"></div>
  <div class="u_menu">
    <ul>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='vip'){?> class="current"<?php }?>> <i class="ico_1"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=vip">会员服务</a></li>

	  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newmessage','value'=>$_smarty_tpl->tpl_vars['u']->value['userid']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["new_msg"] = new Smarty_variable($_tmp1, null, 0);?>
	  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newgift','value'=>$_smarty_tpl->tpl_vars['u']->value['userid']),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["new_gift"] = new Smarty_variable($_tmp2, null, 0);?>

      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='message'){?> class="current"<?php }?>>
        <i class="ico_2"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=message">信件</a> 
		<?php if ($_smarty_tpl->tpl_vars['new_msg']->value>0){?>
        <em><?php echo $_smarty_tpl->tpl_vars['new_msg']->value;?>
</em>
		<?php }?>
      </li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='gift'){?> class="current"<?php }?>>
        <i class="ico_3"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=gift">礼物</a>
		<?php if ($_smarty_tpl->tpl_vars['new_gift']->value>0){?>
        <em><?php echo $_smarty_tpl->tpl_vars['new_gift']->value;?>
</em>
		<?php }?>
      </li>

      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='listen'){?> class="current"<?php }?>><i class="ico_4"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=listen">关注</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='visit'){?> class="current"<?php }?>><i class="ico_5"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=visitme">谁看过我</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='weibo'){?> class="current"<?php }?>><i class="ico_6"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=weibo">心情微博</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='diary'){?> class="current"<?php }?>><i class="ico_7"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=diary">日记</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='myparty'){?> class="current"<?php }?>><i class="ico_10"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=myparty">我报名的活动</a></li>
      <li<?php if ($_smarty_tpl->tpl_vars['cp_menuid']->value=='extend'&&$_smarty_tpl->tpl_vars['a']->value=='connect'){?> class="current"<?php }?>><i class="ico_8"></i><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=extend&a=connect">其它</a></li>
    </ul>
  </div>
  
  <div class="u_photo">
    <dl>
      <dt>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=album&a=upload"><span></span></a>
      </dt>
      <dd>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=album&a=upload"><b>上传美照</b><br>获取更多关注</a>
      </dd>
      <div class="clear"></div>
    </dl>
  </div>
  </div>
  <!--//user_main_left End--><?php }} ?>