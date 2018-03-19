<?php /* Smarty version Smarty-3.1.14, created on 2018-01-03 12:45:28
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_block_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286105a2f5c8511eeb6-39354435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b62fd98be7d7b468ef3e13379a94644559a949' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_block_top.tpl',
      1 => 1514954683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286105a2f5c8511eeb6-39354435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5c85571059_16870277',
  'variables' => 
  array (
    'config' => 0,
    'login' => 0,
    'appfile' => 0,
    'u' => 0,
    'urlpath' => 0,
    'skinpath' => 0,
    'menuid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5c85571059_16870277')) {function content_5a2f5c85571059_16870277($_smarty_tpl) {?><div class="nav0">
<div class="oe_top">
  <div class="oe_topcon">
    <div class="left">欢迎来到<?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
</div>
    <div class="right drop">
      <div class="login">
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
        <a class="a_1" href="javascript:;" onclick="artbox_loginbox();" class="alogin"  rel="nofollow">登录</a><a  rel="nofollow" class="a_2" href="<?php echo $_smarty_tpl->tpl_vars['appfile']->value;?>
?c=passport&a=reg" class="areg">注册</a>
        <?php }else{ ?>
        欢迎您：
        <?php if (!empty($_smarty_tpl->tpl_vars['login']->value['info']['levelimg'])){?>
        <?php echo $_smarty_tpl->tpl_vars['login']->value['info']['levelimg'];?>
<?php echo $_smarty_tpl->tpl_vars['login']->value['username'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['login']->value['userid'];?>
) <span><?php echo $_smarty_tpl->tpl_vars['login']->value['info']['groupname'];?>
</span>
        <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['u']->value['levelimg'];?>
<?php echo $_smarty_tpl->tpl_vars['login']->value['username'];?>
(ID:<?php echo $_smarty_tpl->tpl_vars['login']->value['userid'];?>
) <span><?php echo $_smarty_tpl->tpl_vars['u']->value['groupname'];?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['login']->value['info']['integrity']=="0"){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=perfect">点击这里激活帐号</a>&nbsp;&nbsp;
        <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=logout">退出登录</a> 
        <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php">会员中心</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=home&uid=<?php echo $_smarty_tpl->tpl_vars['login']->value['userid'];?>
">我的主页</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=passport&a=logout">退出登录</a> 
        <?php }?>
        <?php }?>
      </div>
      <dl class="cin">
        <dt><i></i>手机版</dt>
        <dd class="sub">
          <img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['mobileqr'];?>
" width="120px" />
          <p>扫一扫 手机交友</p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="oe_nav">
  <div class="oe_navcon">
    <div class="logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['logo'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['sitename'];?>
" /></a><img class="line" src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/line.png" alt="" />
      <div class="clear"></div>
    </div>
    <div class="menu">
      <ul>
        <li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='index'){?> class='current first'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
">首页</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='user'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user">会员</a> </li>
        <li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='party'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=party">活动</a> </li>
        <li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='diary'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=diary">心情日记</a></li>
		<li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='weibo'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=weibo">微心情</a></li>
		<li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='case'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=case">成功案例</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['menuid']->value=='safety'){?> class='current'<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=safety">防骗中心</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>
<div style="height:140px;"></div>
<?php }} ?>