<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:39:42
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\home_space.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321115a2fdc1ed7a8d6-06106034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957d4b82ed04a28dfd0a16b44a2727458f19f437' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\home_space.tpl',
      1 => 1512099118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321115a2fdc1ed7a8d6-06106034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapskin' => 0,
    'login' => 0,
    'wapfile' => 0,
    'home' => 0,
    'listenstatus' => 0,
    'config' => 0,
    'album' => 0,
    'volist' => 0,
    'cond' => 0,
    'i' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdc207608a5_46423011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdc207608a5_46423011')) {function content_5a2fdc207608a5_46423011($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("home", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/jquery.scrollTo.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/photo.preview.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
style/photopreview_OELOVE26FL319L.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/oecredit.js"></script>
<div class="oe_hometop">
  <div class="home-time">
    最后登录时间：
  	<?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
	  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');">登录可见</span>
	<?php }else{ ?>
		<?php if ($_smarty_tpl->tpl_vars['login']->value['userid']==$_smarty_tpl->tpl_vars['home']->value['userid']){?>
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['logintime'],"%Y-%m-%d");?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['login']->value['group']['view']['viewlogintime']=='1'){?>
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['logintime'],"%Y-%m-%d");?>

			<?php }else{ ?>
			<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_buy');">特权套餐可见</span>
			<?php }?>
		<?php }?>
	<?php }?>
</div>
  <div class="oe_homeuser">
    <img src="<?php echo $_smarty_tpl->tpl_vars['home']->value['avatarurl'];?>
" />
  </div>
  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=="0"){?>
  <span class="span_1" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"><i class="iconfont">&#xe694;</i></span>
  <span class="span_2" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"><i class="iconfont">&#xe645;</i></span>
  <?php }else{ ?>
  <?php if (true===$_smarty_tpl->tpl_vars['listenstatus']->value){?>
  <span class="span_1 current"  onclick="addToListen();"><i class="iconfont">&#xe694;</i></span>
  <?php }else{ ?>
  <span class="span_1"  onclick="addToListen();"><i class="iconfont">&#xe694;</i></span>
  <?php }?>
  <span class="span_2"  id="act_message"><i class="iconfont">&#xe645;</i></span>
  <?php }?>
  <div class="oe_hombg">
    <img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/home_bg.png" alt="" />
  </div>
</div>

<div class="oe_homeuname">
  <h3><?php echo $_smarty_tpl->tpl_vars['home']->value['username'];?>
 <span>会员等级：<?php echo $_smarty_tpl->tpl_vars['home']->value['levelimg'];?>
</span></h3>
  <p> <span class="<?php if ($_smarty_tpl->tpl_vars['home']->value['mobilerz']=='1'){?>rz-mobile<?php }else{ ?>rz-mobile-n<?php }?> rz-line-25"></span>
    <span class="<?php if ($_smarty_tpl->tpl_vars['home']->value['emailrz']=='1'){?>rz-email<?php }else{ ?>rz-email-n<?php }?> rz-line-25"></span><?php echo $_smarty_tpl->tpl_vars['home']->value['age'];?>
岁&#12288;<?php if ($_smarty_tpl->tpl_vars['home']->value['gender']==1){?>男<?php }else{ ?>女<?php }?>&#12288; <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['cityid']),$_smarty_tpl);?>
</p>
  <div class="right">
    <?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'){?>
    <div class="oe_idsearch">
	  <span f="but_home_viewcredit" data-uid="<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
" style="cursor:pointer;">诚信查询</span>
    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=="0"){?>
      <span class="hi" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"><i class="iconfont">&#xe7e1;</i>打招呼</span>
    <?php }else{ ?>
      <span class="hi" id="act_hi"><i class="iconfont">&#xe7e1;</i>打招呼</span>
    <?php }?>
  </div>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['home']->value['monolog'])&&$_smarty_tpl->tpl_vars['home']->value['molstatus']=='1'){?>
<div class="oe_intor">
  <img src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
images/h_1.png" /> <span>内心独白：</span>“<?php echo $_smarty_tpl->tpl_vars['home']->value['monolog'];?>
”
</div>
<?php }?>


<?php $_smarty_tpl->tpl_vars['album'] = new Smarty_variable(vo_list("mod={album} where={v.userid='".((string)$_smarty_tpl->tpl_vars['home']->value['userid'])."'} num={1000}"), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['album']->value)){?>
<script type="text/javascript">
var photo_area_width = <?php echo count($_smarty_tpl->tpl_vars['album']->value);?>
*92;
$(function(){
	$(".photograph-list").css("width", photo_area_width+"px");
	photoCrollLoaded();
});
function photoCrollLoaded() {
	new iScroll("photograph_shop", {hScrollbar:false, vScrollbar:false});
}
//document.addEventListener('DOMContentLoaded', photoCrollLoaded, false);
</script> 
<div class="home-album-box" id="photograph_shop">
  <ul class="photograph-list">
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
    <li>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['uploadfiles'];?>
">
	  <img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbfiles'];?>
" />
	  </a>
	</li>
	<?php } ?> 
  </ul>
  <div class="clear"></div>
  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=="0"){?>
    <div class="home-album-mask">
      <p onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');">点击登录查看相册</p>
    </div>
  <?php }else{ ?>
    <?php if ($_smarty_tpl->tpl_vars['login']->value['userid']!=$_smarty_tpl->tpl_vars['home']->value['userid']){?>
    <?php if ($_smarty_tpl->tpl_vars['login']->value['info']['avatarflag']!='1'){?>
    <div class="home-album-mask">
      <p onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp');">您没上传头像，不能查看相册。</p>
    </div>
    <?php }?>
    <?php }?>
  <?php }?>
</div>
<script type="text/jscript">
$(document).ready(function() {
    $('.home-album-box').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				//return item.el.attr('title') + '<small></small>';
			}
		}
	});

});
</script>
<?php }?>
<!--//album End-->



<div class="oe_homeinfo">
  <div class="hd">
    <ul>
      <li>基本资料</li>
      <li>生活资料</li>
      <li>性格外貌</li>
      <li>学习工作</li>
      <li>爱情规划</li>
      <li>兴趣爱好</li>
      <li>择偶要求</li>
    </ul>
    <div class="clear"></div>
  </div>
  <div class="bd">
    <div class="bdcon">
      <ul>
		<li>交友ID：<span><?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
</span></li>
		<li>婚姻：<span><?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['marrystatus']),$_smarty_tpl);?>
 </span></li>
		<li>星座：<span><?php echo $_smarty_tpl->tpl_vars['home']->value['astro'];?>
</span></li>
		<li>生肖：<span><?php echo $_smarty_tpl->tpl_vars['home']->value['lunar'];?>
</span></li>
		<li>血型：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['blood']=="0"){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'blood','value'=>$_smarty_tpl->tpl_vars['home']->value['blood']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>学历：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['education']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['education']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>民族：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['national']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'national','value'=>$_smarty_tpl->tpl_vars['home']->value['national']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>出生地：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['nationprovinceid']==0){?>未填写<?php }else{ ?><?php echo cmd_hometown(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['nationprovinceid']),$_smarty_tpl);?>
 <?php echo cmd_hometown(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['nationcityid']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>居住情况：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['housing']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'housing','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['housing']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">购车情况：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['caring']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'caring','value'=>$_smarty_tpl->tpl_vars['home']->value['caring']),$_smarty_tpl);?>
<?php }?></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>家中排行：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['tophome']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'tophome','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['tophome']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>最大消费：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['consume']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'consume','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['consume']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>是否吸烟：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['smoking']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'smoking','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['smoking']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>是否喝酒：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['drinking']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'drinking','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['drinking']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>宗教信仰：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['faith']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'faith','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['faith']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>锻炼习惯：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['workout']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'workout','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['workout']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">作息习惯：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['rest']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'rest','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['rest']),$_smarty_tpl);?>
<?php }?></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>个性描述：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['personality']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'personality','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['personality']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>相貌自评：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['profile']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'profile','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['profile']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>体&#12288;&#12288;重：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['weight']==0){?>未填写<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['home']->value['weight'];?>
 (KG)<?php }?></span></li>
		<li>体&#12288;&#12288;型：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['bodystyle']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'bodystyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['bodystyle']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>魅力部位：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['charmparts']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'charmparts','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['charmparts']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>发&#12288;&#12288;型：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['hairstyle']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'hairstyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['hairstyle']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>发&#12288;&#12288;色：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['haircolor']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'haircolor','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['haircolor']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">脸&#12288;&#12288;型：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['facestyle']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'facestyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['facestyle']),$_smarty_tpl);?>
<?php }?></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>职&#12288;&#12288;业：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['jobs']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'jobs','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['jobs']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>公司类型：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['companytype']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'companytype','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['companytype']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>收入描述：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['income']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'income','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['income']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>工作状况：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['workstatus']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'workstatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['workstatus']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>所学专业：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['specialty']==0){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'specialty','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['specialty']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">语言能力：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['language']==''){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'language','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['language']),$_smarty_tpl);?>
<?php }?></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>最大消费：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['consume']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'consume','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['consume']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>制造浪漫：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['romantic']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'romantic','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['romantic']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>是否要小孩：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['havechildren']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'havechildren','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['havechildren']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">与对方父母同住：<span><?php if ($_smarty_tpl->tpl_vars['home']->value['talive']=='0'){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'talive','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['talive']),$_smarty_tpl);?>
<?php }?></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>喜欢的运动：<?php if ($_smarty_tpl->tpl_vars['home']->value['sports']==''){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'sports','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['sports']),$_smarty_tpl);?>
<?php }?></li>
		<li>喜欢的食物：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['food'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'food','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['food']),$_smarty_tpl);?>
<?php }?></li>
		<li>喜欢的书籍：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['book'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'book','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['book']),$_smarty_tpl);?>
<?php }?></li>
		<li>喜欢的电影：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['film'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'film','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['film']),$_smarty_tpl);?>
<?php }?></li>
		<li>业余爱好：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['interest'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'interest','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['interest']),$_smarty_tpl);?>
<?php }?></li>
		<li>喜欢的旅游去处：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['travel'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'travel','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['travel']),$_smarty_tpl);?>
<?php }?></li>
		<li>关注的节目：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['attention'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'attention','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['attention']),$_smarty_tpl);?>
<?php }?></li>
		<li style="border-bottom:none;">娱乐休闲：<?php if (empty($_smarty_tpl->tpl_vars['home']->value['leisure'])){?>未填写<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'leisure','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['leisure']),$_smarty_tpl);?>
<?php }?></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
	    <li>会员性别：<span><?php if ($_smarty_tpl->tpl_vars['cond']->value['gender']=='1'){?>男<?php }elseif($_smarty_tpl->tpl_vars['cond']->value['gender']=='2'){?>女<?php }else{ ?>不限<?php }?></span></li>
		<li>照片要求：<span><?php if ($_smarty_tpl->tpl_vars['cond']->value['avatar']=='1'){?>有照片<?php }else{ ?>不限<?php }?></span></li>
		<li>年龄要求：<span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startage']=='0'){?>不限<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cond']->value['startage'];?>
~<?php echo $_smarty_tpl->tpl_vars['cond']->value['endage'];?>
岁<?php }?></span></li>
		<li>身高要求：<span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startheight']=='0'){?>不限<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cond']->value['startheight'];?>
~<?php echo $_smarty_tpl->tpl_vars['cond']->value['endheight'];?>
CM<?php }?></span></li>
		<li>类型要求：<span><?php if (empty($_smarty_tpl->tpl_vars['cond']->value['lovesort'])){?>不限<?php }else{ ?><?php echo cmd_hook(array('mod'=>'lovesort','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['cond']->value['lovesort']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>婚史要求：<span><?php if (empty($_smarty_tpl->tpl_vars['cond']->value['marry'])){?>不限<?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'multi','item'=>'marrystatus','value'=>$_smarty_tpl->tpl_vars['cond']->value['marry']),$_smarty_tpl);?>
<?php }?></span></li>
		<li>学历要求：<span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startedu']=='0'){?>不限<?php }else{ ?><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['startedu']),$_smarty_tpl);?>
~<?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['endedu']),$_smarty_tpl);?>
<?php }?></span></li>
		<li style="border-bottom:none;">地区要求：<span>

		<?php if ($_smarty_tpl->tpl_vars['cond']->value['wbdist1']>0){?>
		<?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['cond']->value['wbdist1']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['cond']->value['wbdist2']),$_smarty_tpl);?>

		<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(false, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value['bulidarea']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['volist']->value['city']>0){?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(true, null, 0);?>
		<?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['province']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['city']),$_smarty_tpl);?>
<br />
		<?php }?>
		<?php } ?>
		<?php if (false===$_smarty_tpl->tpl_vars['i']->value){?>
		不限
		<?php }?>
		<?php }?>

		</span></li>
	  </ul>
    </div>
    
    
 
    
  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript">
  jQuery(".oe_homeinfo").slide({trigger:"click"});
</script>

 




 
 




<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_id_bigbox" id="id_credit_details">

</div>


<div class="oe_shade" style="display:none;" id="viewcredit_box">
  <div id="credit_loading"></div>
  <div class="_animate_bottom" style="bottom:10px; height:300px; position:absolute;display:none;" id="credit_result">

  </div>
</div>


<script type="text/javascript">
$(function(){
	var loginstatus = "<?php echo $_smarty_tpl->tpl_vars['login']->value['status'];?>
";
	$("#act_hi").click(function(){ //打招呼
		if (loginstatus == "0") {
			goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login");
			return false;
		}
		else {
			$.ajax({
				type: "POST",
				url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do",
				cache: false,
				data: {a:"hi", touid:"<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
", r:"<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"},
				dataType: "json",
				success: function(data) {
					var json = eval(data);
					var response = json.response;
					var result = json.result;
					if (response == '1') {
						ToastShow("发送成功");
					}
					else {
						if (result.length > 0) {
							ToastShow(result);
						}
						else {
							ToastShow("发送失败");
						}
					}
				},
				error: function() {
					ToastShow("操作失败，请检查网络状态。");
				}
			});
		}
	});


	$("#act_message").click(function(){ //写信件
		if (loginstatus == "0") {
			goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login");
			return false;
		}
		else {
			goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do&a=writemsg&touid=<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
");
		}
	});
});

function addToListen() { //加入关注
	$.ajax({
	type: "POST",
	url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do",
	cache: false,
	data: {a:"listen", touid:"<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
", r:get_rndnum(8)},
	dataType: "json",
	success: function(data) {
		var json = eval(data);
		var response = json.response;
		var result = json.result;
		if (response == '1') {
			ToastShow("关注成功");
			$("#tip_listen").html("<span onclick='cancelListen();'>取消关注</span>");
		}
		else {
			if (result.length > 0) {
				ToastShow(result);
			}
			else {
				ToastShow("关注失败");
			}
		}
	},
	error: function() {
			ToastShow("操作失败，请检查网络状态。");
		}
	});
}

function cancelListen() { //取消关注
	$.ajax({
	type: "POST",
	url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do",
	cache: false,
	data: {a:"dellisten", touid:"<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
", r:"<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"},
	dataType: "json",
	success: function(data) {
		var json = eval(data);
		var response = json.response;
		var result = json.result;
		if (response == '1') {
			ToastShow("取消成功");
			$("#tip_listen").html("<span onclick='addToListen();'>加关注</span>");
		}
		else {
			if (result.length > 0) {
				ToastShow(result);
			}
			else {
				ToastShow("取消成功");
			}
		}
	},
	error: function() {
			ToastShow("操作失败，请检查网络状态。");
		}
	});
}

</script>


</body>
</html><?php }} ?>