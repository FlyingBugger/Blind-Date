<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:35:58
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119365a2f5caf02d805-13192840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29064f1850e824516b2a7731d6edaa77982edf3f' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_user_list.tpl',
      1 => 1512112482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119365a2f5caf02d805-13192840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'user' => 0,
    'volist' => 0,
    'time' => 0,
    'login' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5caf37c6d2_65699735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5caf37c6d2_65699735')) {function content_5a2f5caf37c6d2_65699735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('user', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_userlist">
  <div class="oe_userlistcon">
    <?php if (empty($_smarty_tpl->tpl_vars['user']->value)){?>
    <div class="no_data">
      <p class="p_1"><span></span></p>
      <p class="p_2">没有符合条件的信息</p>
    </div>
    <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
    <dl>
      <dt><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
"><?php echo cmd_avatar(array('width'=>'110','height'=>'135','css'=>'img100','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a> </dt>
      <dd>
        <h3><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a> 
          <?php if ($_smarty_tpl->tpl_vars['volist']->value['groupid']>1&&$_smarty_tpl->tpl_vars['volist']->value['vipenddate']>$_smarty_tpl->tpl_vars['time']->value){?>
          <?php echo $_smarty_tpl->tpl_vars['volist']->value['levelimg'];?>

          <?php }?>
        </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
</p>
        <p class="p_1">
          <?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['monolog'],20);?>

        </p>
        <p class="btn">
          <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
          <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_loginbox();">打招呼</a> 
          <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_loginbox();">写信件</a>
          <?php }else{ ?>
          <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_hi(<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
);">打招呼</a> 
          <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_writemsg(<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
);">写信件</a>
          <?php }?>
        </p>
      </dd>
      <div class="clear"></div>
    </dl>
	<?php } ?>
    <?php }?>
    <div class="clear"></div>
    <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
      <div class="oe_page"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    <?php }?>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>