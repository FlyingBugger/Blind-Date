<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:34
         compiled from "D:\weixin\desktop\jy\tpl\templets\default\9izbdq_block_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239385aaf1a3a2349e2-24395442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4edb5fe1eff2845e207ef4bde9cb0de06c27ca33' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\templets\\default\\9izbdq_block_footer.tpl',
      1 => 1514954682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239385aaf1a3a2349e2-24395442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlpath' => 0,
    'config' => 0,
    'abouttip' => 0,
    'volist' => 0,
    'login' => 0,
    'uctplpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a3a29a4b4_56088958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a3a29a4b4_56088958')) {function content_5aaf1a3a29a4b4_56088958($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_stripslashes')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.stripslashes.php';
?><div class="oe_footer">
  <div class="oe_footercon">
    <div class="er">
      <h3>微信扫一扫</h3>
      <img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['config']->value['mobileqr'];?>
" width="120px" />
    </div>
    <div class="fast">
      <h3>快速链接</h3>
      <ul>
        <?php $_smarty_tpl->tpl_vars['abouttip'] = new Smarty_variable(vo_list("mod={about} where={v.navshow='1'} num={6}"), null, 0);?>
	    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abouttip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <li><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></li>
        <?php } ?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=blackuser">黑名单</a></li>
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
        <li><a rel="nofollow" f="but_safety_addto" style="cursor:pointer;"  onclick="artbox_loginbox();"><i></i>投诉/举报</a></li>
        <?php }else{ ?>
        <li><a rel="nofollow" f="but_safety_addto" style="cursor:pointer;"  onclick="artbox_complaint('0');"><i></i>投诉/举报</a></li>
        <?php }?>
        <li><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php">返回首页</a></li>
      </ul>
    </div>
    <div class="right">
      <h3>会员服务</h3>
      <?php echo $_smarty_tpl->tpl_vars['config']->value['sitefooter'];?>

	  <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['icpcode'])){?>
	    <?php echo $_smarty_tpl->tpl_vars['config']->value['icpcode'];?>

	  <?php }?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['tjcode'])){?>
  	    <?php echo smarty_modifier_stripslashes($_smarty_tpl->tpl_vars['config']->value['tjcode']);?>

	  <?php }?>
      <?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('plugin_runtime'), null, 0);?>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('event_online'), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['uctplpath']->value)."block_popwin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<script type='text/javascript'>
//WAP提醒
$(function(){
    var x = 10;  
    var y = 20;
    $("a.waptips").mouseover(function(e){
           this.myTitle = this.title;
        this.title = "";    
        var tooltip = "<div id='waptips'>"+ this.myTitle +"<\/div>"; //创建 div 元素
        $("body").append(tooltip);    //把它追加到文档中
        $("#waptips")
            .css({
                "top": (e.pageY+y) + "px",
                "left": (e.pageX+x)  + "px"
            }).show("fast");      //设置x坐标和y坐标，并且显示
    }).mouseout(function(){        
        this.title = this.myTitle;
        $("#waptips").remove();   //移除 
    }).mousemove(function(e){
        $("#waptips")
            .css({
                "top": (e.pageY+y) + "px",
                "left": (e.pageX+x)  + "px"
            });
    });
})

jQuery(".drop").slide({ type:"menu", titCell:".cin", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});

</script><?php }} ?>