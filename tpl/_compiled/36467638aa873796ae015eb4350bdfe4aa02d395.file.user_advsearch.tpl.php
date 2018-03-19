<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:56:36
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\user_advsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71075a2fe014637eb9-78215955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36467638aa873796ae015eb4350bdfe4aa02d395' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\user_advsearch.tpl',
      1 => 1493115660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71075a2fe014637eb9-78215955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fe014c66fa5_92195451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fe014c66fa5_92195451')) {function content_5a2fe014c66fa5_92195451($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("user", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="hr-shadow"></div>
<div class="tab-layout">
  <ul>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user');" style="width:33.3%">搜索结果</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&a=idsearch');" style="width:33.3%">ID搜索</li>
    <li class="tab-selected" style="width:33.3%">条件搜索</li>
  </ul>
  <div class="clear"></div>
</div>

<form name="search_form" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user" method="post">
<div class="adv-search">
  <dl>
    <dt>地&#12288;区：</dt>
	<dd>
		<span onclick="areaPopup('选择地区', 's_dist');" id="s_dist_text">选择</span>
		<input type="hidden" name="s_dist1" id="s_dist1" value="0" />
		<input type="hidden" name="s_dist2" id="s_dist2" value="0" />
		<input type="hidden" name="s_dist3" id="s_dist3" value="0" />
	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>我要找：</dt>
	<dd>
	   <select name="s_sex" id='s_sex'>
		<?php if ($_smarty_tpl->tpl_vars['login']->value['status']==1){?>
        <option value="1"<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']==2){?> selected<?php }?>>男会员</option>
        <option value="2"<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']==1){?> selected<?php }?>>女会员</option>
		<?php }else{ ?>
        <option value="1">男会员</option>
        <option value="2" selected="selected">女会员</option>
		<?php }?>
      </select>
	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>头&#12288;像：</dt>
	<dd>
	   <select name='s_avatar' id='s_avatar'><option value=''>不限</option><option value='1' selected>有</option></select>
	</dd>
	<div class="clear"></div>
  </dl>



  <dl>
    <dt>年&#12288;龄：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'age','name'=>'s_sage','value'=>'20','text'=>'=不限='),$_smarty_tpl);?>
&nbsp;~&nbsp;<?php echo cmd_hook(array('mod'=>'age','name'=>'s_eage','value'=>'30','text'=>'=不限='),$_smarty_tpl);?>
 岁
	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>身&#12288;高：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'height','name'=>'s_sheight','value'=>'155','text'=>'=不限='),$_smarty_tpl);?>
<span>&nbsp;~&nbsp;</span><?php echo cmd_hook(array('mod'=>'height','name'=>'s_eheight','value'=>'175','text'=>'=不限='),$_smarty_tpl);?>
 CM
	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>婚&#12288;史：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','name'=>'s_marry','type'=>'select','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>学&#12288;历：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'select','name'=>'s_sedu','text'=>'=不限='),$_smarty_tpl);?>
<span>&nbsp;~&nbsp;</span><?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'select','name'=>'s_eedu','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>月收入：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'select','name'=>'s_ssalary','text'=>'=不限='),$_smarty_tpl);?>
<span>&nbsp;~&nbsp;</span><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'select','name'=>'s_esalary','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>小孩情况：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'childrenstatus','type'=>'select','name'=>'s_havechild','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <dl>
    <dt>住房情况：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'housing','type'=>'select','name'=>'s_house','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <dl style="border-bottom:none;">
    <dt>购车情况：</dt>
	<dd>
	   <?php echo cmd_hook(array('mod'=>'var','item'=>'caring','type'=>'select','name'=>'s_car','text'=>'=不限='),$_smarty_tpl);?>

	</dd>
	<div class="clear"></div>
  </dl>

  <div class="clear"></div>
</div>
</form>
<div class="spanbtn0" id="btn_submit">立即搜索</div>
<script type="text/javascript">
$("#btn_submit").click(function(){
	$("#search_form").submit();
});
</script>
<div class="hr-b"></div>


<div id="varpop_shade" class="varpop-shade"></div>
<div class="varpop-layout" id='area_box'>
  <div class="varpop-head">
    <span id="area_title">选择</span>
	<i id="area_loading">loading...</i>
  </div>
  <div id="area_data"></div>
  <!--//area_data End-->
</div>
<!--//area_box ajax End-->

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer_cp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>