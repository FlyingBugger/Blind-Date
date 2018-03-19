<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:45:10
         compiled from "D:\freehost\ftp122778453\web\tpl\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230875a2fdd66f3d3d5-15433667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73f2b8935bd872db5f30186c7fe99fb8ca17a643' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\user\\index.tpl',
      1 => 1493088214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230875a2fdd66f3d3d5-15433667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uctplpath' => 0,
    'ucpath' => 0,
    'ucfile' => 0,
    'u' => 0,
    'matchlist' => 0,
    'volist' => 0,
    'gift' => 0,
    'weibo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdd675dfd73_35411535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdd675dfd73_35411535')) {function content_5a2fdd675dfd73_35411535($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="user_main">
  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div class="user_main_middle">
    <!--发表心情-->
	<div class="mood-post-box">
	  <div class="mood-post-content">
	 <textarea class="mood-textarea" id="mood_content" name="mood_content" onkeydown="textCounter('mood_content', 'counter', 500);" onkeyup="textCounter('mood_content', 'counter', 500);" onclick="obj_del_wbcontent('mood_content');" onblur="obj_attr_wbcontent('mood_content');">记录每一天的心情...</textarea>
	    <div class="mood-box-block">
          <div class="fl" style="position:relative;">
	        <a href="###" onclick="show_more_face('display-eif', 'mood_content');"><img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/eif.gif" style="padding-bottom:3px;">表情</a>
		    <div id="display-eif"></div>
	      </div>
		  <div class="fr">
	        <div id="post_limit" class="fl" style="padding-top:5px;">还能输入<span id="counter">500</span>字</div>
		    <div class="mood-post-button" onclick="obj_public_mood('mood_content');"><img src="<?php echo $_smarty_tpl->tpl_vars['ucpath']->value;?>
images/button-mood.gif"></div>
		    <div class="mood-post-cancel"><a href="###" onclick="obj_cancel_wbcontent('mood_content');">取消</a></div>
		  </div>
	      <div class="clear"></div>
		</div>
	    </div>
	</div>
    <!--//mood-post-form End-->
    <div class="u_match">
      <div class="hd">今日速配  <a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=cond">修改择友条件</a></div>
      <div class="bd">
      <?php $_smarty_tpl->tpl_vars['matchlist'] = new Smarty_variable(vo_list("mod={mymatch} value={".((string)$_smarty_tpl->tpl_vars['u']->value['userid'])."} num={16}"), null, 0);?>
      <?php if (empty($_smarty_tpl->tpl_vars['matchlist']->value)){?>
      <div class="no_data">
        <p class="p_1"><span></span></p>
        <p class="p_2">没有符合条件的信息,请去设置<a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=cond">择友条件</a></p>
      </div>
      <?php }else{ ?>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matchlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
      <dl>
        <dt>
          <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
"/></a>
        </dt>
        <dd>
          <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h3>
          <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁，<?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
</p>
        </dd>
      </dl>
      <?php } ?>
      <?php }?>
      </div>
    </div>
  </div>
  <!--//user_main_middle End-->

  <!--右边 Begin-->
  <div class="user_main_right">
    <div class="user_iph_k">
	  <ul>
	    <li class="gdlh"><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=vip">升级VIP会员，享受更多服务</a></li>
		<li class="lwsc"><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=certify">诚信认证点亮图标提高人气</a></li>
      </ul>
	  <div class="clear"></div>
    </div>
	<!--//user_iph_k End-->
	
	<?php $_smarty_tpl->tpl_vars['gift'] = new Smarty_variable(vo_list("mod={gift} where={v.touserid='".((string)$_smarty_tpl->tpl_vars['u']->value['userid'])."'} num={9}"), null, 0);?>
	<?php if (!empty($_smarty_tpl->tpl_vars['gift']->value)){?>
	<div class="user-rt-box">
	  <div class="user-rt-title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=gift">更多礼物</a></span>收到的礼物</div>
	  <div class="user-index-gift">
		<ul>
		  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		  <li><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['imgurl'];?>
" width="60" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['volist']->value['giftname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['giftname'];?>
" /></li>
		  <?php } ?>
		</ul>
        <div class="clear"></div>
	  </div>
	</div>
	<!--//user-rt-box End-->
	<?php }?>
 

    <div class="oe_index_wei">
      <h3>微心情 <span><a href="<?php echo $_smarty_tpl->tpl_vars['ucfile']->value;?>
?c=weibo">更多&gt;&gt;</a></span><i></i></h3>
      <div class="oe_index_weicon"> 
        <?php $_smarty_tpl->tpl_vars['weibo'] = new Smarty_variable(vo_list("mod={weibo} num={8}"), null, 0);?> 
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weibo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <dl>
          <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo cmd_avatar(array('width'=>'50','height'=>'58','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a></dt>
          <dd>
		    <span><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%H:%M");?>
</span>
            <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['content'];?>
 </p>
          </dd>
          <div class="c"></div>
        </dl>
        <?php } ?> 
      </div>
    </div>
  

  </div>
  <div style="clear:both;"> </div>
  <!--//user_main_right End--> 
  
</div>
<!--//user_main End--> 

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_eif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
</body>
</html><?php }} ?>