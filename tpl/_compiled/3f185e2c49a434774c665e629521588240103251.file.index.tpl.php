<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:22:31
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199025a2fd817d25b07-09792408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f185e2c49a434774c665e629521588240103251' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\index.tpl',
      1 => 1512713358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199025a2fd817d25b07-09792408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'zone' => 0,
    'volist' => 0,
    'wapskin' => 0,
    'wapfile' => 0,
    'login' => 0,
    'eliteuser' => 0,
    'party' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fd81832aad5_25799467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fd81832aad5_25799467')) {function content_5a2fd81832aad5_25799467($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("index", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_banner">
  <div class="bd">
    <?php $_smarty_tpl->tpl_vars['zone'] = new Smarty_variable(get_zone('wap_banner'), null, 0);?> 
    <?php if (!empty($_smarty_tpl->tpl_vars['zone']->value['ads'])){?> 
    <ul>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zone']->value['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['uploadfiles'];?>
" /></a></li>
      <?php } ?>
    </ul>
    <?php }?>
  </div>
  <div class="hd">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zone']->value['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?><li><span></span></li><?php } ?>
    </ul>
  </div>
  <div class="banner_bg">
    <img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/w_1.png" />
  </div>
</div>
<script type="text/javascript">
  jQuery(".oe_banner").slide({mainCell:".bd ul",autoPlay:true});
</script>
<div class="oe_innav">
  <dl class="dl_1" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user');">
    <dt><span><i class="iconfont">&#xe693;</i></span></dt>
    <dd>会员</dd>
  </dl>
  <dl class="dl_2" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party');">
    <dt><span><i class="iconfont">&#xe61e;</i></span></dt>
    <dd>活动</dd>
  </dl>
  <dl class="dl_3" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=weibo');">
    <dt><span><i class="iconfont">&#xe691;</i></span></dt>
    <dd>微心情</dd>
  </dl>
  <dl class="dl_4" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_message');">
    <dt><span><i class="iconfont">&#xe645;</i></span></dt>
    <dd>信息</dd>
  </dl>
  <div class="clear"></div>
</div>


<div class="oe_youzi">
  <div class="hd">
    <span class="span_1"><i></i></span>
    <label>优质会员</label>
    <span class="span_2"><i></i></span>
    <em  onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user');"><i class="iconfont">&#xe642;</i></em>
  </div>
  <div class="bd">
    <?php if ($_smarty_tpl->tpl_vars['login']->value['status']==1){?>
	<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']==1){?>
	<?php $_smarty_tpl->tpl_vars['eliteuser'] = new Smarty_variable(vo_list("mod={listuser} type={elite} where={v.avatar='1' AND v.gender='2'} num={4}"), null, 0);?> 
	<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['eliteuser'] = new Smarty_variable(vo_list("mod={listuser} type={elite} where={v.avatar='1' AND v.gender='1'} num={4}"), null, 0);?> 
	<?php }?>
    <?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['eliteuser'] = new Smarty_variable(vo_list("mod={listuser} type={elite} where={v.avatar='1'} num={4}"), null, 0);?> 
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eliteuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
    <dl onclick="userDetail('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');">
	  <dt>
       <span><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></span></dt>
	  <dd>
        <h3><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
 </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php if ($_smarty_tpl->tpl_vars['volist']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<?php }?> <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
</p>
      </dd>
	</dl>
    <?php } ?>
    <div class="clear"></div>
  </div>
</div>

<div class="oe_inparty">
  <div class="hd">
    <span class="span_1"><i></i></span>
    <label>相亲活动</label>
    <span class="span_2"><i></i></span>
    <em  onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party');"><i class="iconfont">&#xe642;</i></em>
  </div>
  <div class="bd">
    <div class="bdcon">
      <?php $_smarty_tpl->tpl_vars['party'] = new Smarty_variable(vo_list("mod={party}  num={5}"), null, 0);?> 
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['party']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?> 
      <dl>
        <dt><a href="javascript:;" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['partyid'];?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
"  /></a></dt>
        <dd>
          <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></a></h3>
          <p class="p_2"><i class="iconfont">&#xe636;</i><?php echo $_smarty_tpl->tpl_vars['volist']->value['address'];?>
</p>
       </dd>
        <div class="clear"></div>
      </dl>
      <?php } ?>
      <div class="clear"></div>
    </div>
  </div>
</div>


<script type="text/javascript">
	//var scWidth = $(window).width();
	scWidth = WIN_WIDTH;
    <?php if (count($_smarty_tpl->tpl_vars['party']->value)==0){?>
    var bigimg_width = 205;
    <?php }else{ ?>
    var bigimg_width = (205*<?php echo count($_smarty_tpl->tpl_vars['party']->value);?>
);
    <?php }?>
	$(".oe_inparty .bdcon").css({"width":bigimg_width+"px"});
</script>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>