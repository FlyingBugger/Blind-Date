<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:51:41
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\cp_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211275a2fdeed316678-20694749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ad18eef91d85eb343d8992f36b07bfcada689c' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\cp_index.tpl',
      1 => 1511773388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211275a2fdeed316678-20694749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'login' => 0,
    'urlpath' => 0,
    'wapskin' => 0,
    'wapfile' => 0,
    'cp_newmsg' => 0,
    'cp_newhi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdeed86ea51_59594297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdeed86ea51_59594297')) {function content_5a2fdeed86ea51_59594297($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("cp", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="cp-layout-body">

  <div class="cp-data">
    <div class="cp-data-avatar">
	  <?php if (!empty($_smarty_tpl->tpl_vars['login']->value['info']['avatar'])){?>
	  <img id="img_preview" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['login']->value['info']['avatar'];?>
" />
	  <?php }else{ ?>
	  <img id="img_preview" src="<?php echo $_smarty_tpl->tpl_vars['login']->value['info']['avatarurl'];?>
" />
	  <?php }?>
	  <i>
		<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['avatarflag']=='-2'){?>
		待审核
		<?php }elseif($_smarty_tpl->tpl_vars['login']->value['info']['avatarflag']=='-1'){?>
		未通过
		<?php }elseif($_smarty_tpl->tpl_vars['login']->value['info']['avatarflag']=='1'){?>
		已通过
		<?php }else{ ?>
		点击上传
		<?php }?>
	  </i>
	</div>
	<div class="cp-data-info">
	  <h2>
	  <span class="user-name"><?php echo $_smarty_tpl->tpl_vars['login']->value['info']['username'];?>
</span>
	  <span class="<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['mobilerz']=='1'){?>rz-mobile<?php }else{ ?>rz-mobile-n<?php }?> rz-line-30"></span>
	  <span class="<?php if ($_smarty_tpl->tpl_vars['login']->value['info']['emailrz']=='1'){?>rz-email<?php }else{ ?>rz-email-n<?php }?> rz-line-30"></span>
	  </h2>
	  <ul>
	    <li>
		  <?php echo $_smarty_tpl->tpl_vars['login']->value['info']['age'];?>
岁 <?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']=='1'){?>男<?php }elseif($_smarty_tpl->tpl_vars['login']->value['info']['gender']=='2'){?>女<?php }?> 
		  <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['login']->value['info']['provinceid']),$_smarty_tpl);?>
 
		  <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['login']->value['info']['cityid']),$_smarty_tpl);?>
 
		  <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['login']->value['info']['distid']),$_smarty_tpl);?>

		</li>
		<li>
		  <?php echo $_smarty_tpl->tpl_vars['login']->value['info']['astro'];?>
 
		  <?php echo cmd_hook(array('mod'=>"var",'item'=>"marrystatus",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['login']->value['info']['marrystatus']),$_smarty_tpl);?>
 
          <?php echo cmd_hook(array('mod'=>"var",'item'=>"jobs",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['login']->value['info']['jobs']),$_smarty_tpl);?>

		</li>
	  </ul>
	  <div class="clear"></div>
	</div>
	<div class="clear"></div>
  </div><!--//cp-data End-->


  <div class="oe_uploadimg_layout" style="display:none;">
    <div class="_img_layout_lt">本地头像：</div>
	<div class="_img_layout_rt">
	  <div class="oe_img_upload">
		<label class="_uploadbtn">上传头像<input type="file" name="img" id="img" value="" /></label>
		<label class="_uploading" id="img_loading">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/loading.gif" />上传中...
		</label>
		<input type="hidden" id="img_thumb" name="img_thumb" value="" />
		<input type="hidden" id="img_url" name="img_url" value="" />
	  </div>
	</div>
	<div class="clear"></div>
  </div>
  <script type="text/javascript">
  $(function(){
	$("#img_preview").click(function(){
		if ($(".oe_uploadimg_layout").css("display") == "none") {
			$(".oe_uploadimg_layout").show();
		}
		else {
			$(".oe_uploadimg_layout").hide();
		}
	});
	$("#img").live("change", function(){
		oeloveUploadImg("img", "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp&a=upladimg");
	});
  });
  </script>
  <div class="cp-data-tips">
    可用金币：<font color="green"><?php echo $_smarty_tpl->tpl_vars['login']->value['info']['money'];?>
</font>
    <span  onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_recharge');">充值</span>
  </div>
</div>


<div class="cp-layout-body-gray">
  <div class="cp-index-bar">
    <ul>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_buy');"><span><i class="iconfont ico_1">&#xe6af;</i></span>购买特权<em><?php echo $_smarty_tpl->tpl_vars['login']->value['info']['groupname'];?>
</em> <label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_photo');"><span><i class="iconfont ico_2">&#xeb1e;</i></span>我的相片<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_info');"><span><i class="iconfont ico_3">&#xe680;</i></span>修改资料<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_cond');"><span><i class="iconfont ico_4">&#xe606;</i></span>征友条件<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=myparty');"><span><i class="iconfont ico_4">&#xe664;</i></span>我报名的活动<label><i class="iconfont">&#xe642;</i></label></li>
	  <?php if ($_smarty_tpl->tpl_vars['login']->value['group']['view']['viewmatch']=="1"){?>
	  <li style="border-bottom:none;" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_match');"><span><i class="iconfont ico_5">&#xe60f;</i></span>缘分速配<label><i class="iconfont">&#xe642;</i></label></li>
	  <?php }else{ ?>
	  <li style="border-bottom:none;" onclick="needBuyVip();"><span><i class="iconfont ico_5">&#xe60f;</i></span>缘分速配<label><div class="cp-vip-lock"></div><i class="iconfont">&#xe642;</i></label></li>
	  <?php }?>
      
	</ul>
	<div class="clear"></div>
  </div>

  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newmessage','value'=>$_smarty_tpl->tpl_vars['login']->value['info']['userid']),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["cp_newmsg"] = new Smarty_variable($_tmp1, null, 0);?>
	  <?php ob_start();?><?php echo cmd_count(array('mod'=>'user','type'=>'newhi','value'=>$_smarty_tpl->tpl_vars['login']->value['info']['userid']),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["cp_newhi"] = new Smarty_variable($_tmp2, null, 0);?>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_message');"><span><i class="iconfont ico_6">&#xe645;</i></span>我的信件<?php if ($_smarty_tpl->tpl_vars['cp_newmsg']->value>0){?><em><?php echo $_smarty_tpl->tpl_vars['cp_newmsg']->value;?>
</em><?php }?><label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_inhi');"><span><i class="iconfont ico_7">&#xe628;</i></span>收到问候<?php if ($_smarty_tpl->tpl_vars['cp_newhi']->value>0){?><em><?php echo $_smarty_tpl->tpl_vars['cp_newhi']->value;?>
</em><?php }?><label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_listen');"><span><i class="iconfont ico_8">&#xe60d;</i></span>我的关注<label><i class="iconfont">&#xe642;</i></label></li>
	  <?php if ($_smarty_tpl->tpl_vars['login']->value['group']['view']['viewvisitor']=="1"){?>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_visitme');" style="border-bottom:none;"><span><i class="iconfont ico_9">&#xe660;</i></span>谁看过我<label><i class="iconfont">&#xe642;</i></label></li>
	  <?php }else{ ?>
	  <li onclick="needBuyVip();" style="border-bottom:none;"><span><i class="iconfont ico_9">&#xe660;</i></span>谁看过我
	  <div class="cp-vip-lock"></div><label><i class="iconfont">&#xe642;</i></label>
	  </li>
	  <?php }?>
	</ul>
	<div class="clear"></div>
  </div>


  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_money');"><span><i class="iconfont ico_10">&#xe6ad;</i></span>消费记录</li>
	  <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp&a=editpwd');" style="border-bottom:none;"><span><i class="iconfont ico_11">&#xe6b0;</i></span>修改密码</li>
	</ul>
	<div class="clear"></div>
  </div>

  <div class="spanbtn0" style="margin-top:15px;margin-bottom:15px;" id="btn_logout" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=logout');">退出登录</div>
</div>
<script type="text/javascript">
//跳到购买中心
function needBuyVip() {
	ToastShow("没有使用特权，请购买会员等级。");
	setTimeout(function(){
		goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_buy");
	}, 1000);
}
</script>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer_cp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>