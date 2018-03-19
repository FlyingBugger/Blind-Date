<!--{assign var="menu_id" value="home"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<script src="<!--{$wapskin}-->js/jquery.scrollTo.js"></script>
<script src="<!--{$wapskin}-->js/photo.preview.min.js"></script>
<link rel="stylesheet" href="<!--{$wapskin}-->style/photopreview_OELOVE26FL319L.css" />
<script src="<!--{$wapskin}-->js/oecredit.js"></script>
<div class="oe_hometop">
  <div class="home-time">
    最后登录时间：
  	<!--{if $login.status == '0'}-->
	  <span onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');">登录可见</span>
	<!--{else}-->
		<!--{if $login.userid == $home.userid}-->
			<!--{$home.logintime|date_format:"%Y-%m-%d"}-->
		<!--{else}-->
			<!--{if $login.group.view.viewlogintime == '1'}-->
			<!--{$home.logintime|date_format:"%Y-%m-%d"}-->
			<!--{else}-->
			<span onclick="goUrl('<!--{$wapfile}-->?c=cp_buy');">特权套餐可见</span>
			<!--{/if}-->
		<!--{/if}-->
	<!--{/if}-->
</div>
  <div class="oe_homeuser">
    <img src="<!--{$home.avatarurl}-->" />
  </div>
  <!--{if $login.status == "0"}-->
  <span class="span_1" onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"><i class="iconfont">&#xe694;</i></span>
  <span class="span_2" onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"><i class="iconfont">&#xe645;</i></span>
  <!--{else}-->
  <!--{if true === $listenstatus}-->
  <span class="span_1 current"  onclick="addToListen();"><i class="iconfont">&#xe694;</i></span>
  <!--{else}-->
  <span class="span_1"  onclick="addToListen();"><i class="iconfont">&#xe694;</i></span>
  <!--{/if}-->
  <span class="span_2"  id="act_message"><i class="iconfont">&#xe645;</i></span>
  <!--{/if}-->
  <div class="oe_hombg">
    <img src="<!--{$wapskin}-->images/home_bg.png" alt="" />
  </div>
</div>

<div class="oe_homeuname">
  <h3><!--{$home.username}--> <span>会员等级：<!--{$home.levelimg}--></span></h3>
  <p> <span class="<!--{if $home.mobilerz == '1'}-->rz-mobile<!--{else}-->rz-mobile-n<!--{/if}--> rz-line-25"></span>
    <span class="<!--{if $home.emailrz == '1'}-->rz-email<!--{else}-->rz-email-n<!--{/if}--> rz-line-25"></span><!--{$home.age}-->岁&#12288;<!--{if $home.gender==1}-->男<!--{else}-->女<!--{/if}-->&#12288; <!--{area type='text' value=$home.cityid}--></p>
  <div class="right">
    <!--{if $config.credit_flag == '1'}-->
    <div class="oe_idsearch">
	  <span f="but_home_viewcredit" data-uid="<!--{$home.userid}-->" style="cursor:pointer;">诚信查询</span>
    </div>
    <!--{/if}-->
    <!--{if $login.status == "0"}-->
      <span class="hi" onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"><i class="iconfont">&#xe7e1;</i>打招呼</span>
    <!--{else}-->
      <span class="hi" id="act_hi"><i class="iconfont">&#xe7e1;</i>打招呼</span>
    <!--{/if}-->
  </div>
</div>
<!--{if !empty($home.monolog) && $home.molstatus == '1'}-->
<div class="oe_intor">
  <img src="<!--{$wapskin}-->images/h_1.png" /> <span>内心独白：</span>“<!--{$home.monolog}-->”
</div>
<!--{/if}-->


<!--{assign var='album' value=vo_list("mod={album} where={v.userid='<!--{$home.userid}-->'} num={1000}")}-->
<!--{if !empty($album)}-->
<script type="text/javascript">
var photo_area_width = <!--{count($album)}-->*92;
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
    <!--{foreach $album as $volist}-->
    <li>
	  <a href="<!--{$volist.uploadfiles}-->">
	  <img src="<!--{$volist.thumbfiles}-->" />
	  </a>
	</li>
	<!--{/foreach}--> 
  </ul>
  <div class="clear"></div>
  <!--{if $login.status == "0"}-->
    <div class="home-album-mask">
      <p onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');">点击登录查看相册</p>
    </div>
  <!--{else}-->
    <!--{if $login.userid != $home.userid}-->
    <!--{if $login.info.avatarflag != '1'}-->
    <div class="home-album-mask">
      <p onclick="goUrl('<!--{$wapfile}-->?c=cp');">您没上传头像，不能查看相册。</p>
    </div>
    <!--{/if}-->
    <!--{/if}-->
  <!--{/if}-->
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
<!--{/if}-->
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
		<li>交友ID：<span><!--{$home.userid}--></span></li>
		<li>婚姻：<span><!--{hook mod='var' item='marrystatus' type='text' value=$home.marrystatus}--> </span></li>
		<li>星座：<span><!--{$home.astro}--></span></li>
		<li>生肖：<span><!--{$home.lunar}--></span></li>
		<li>血型：<span><!--{if $home.blood=="0"}-->未填写<!--{else}--><!--{hook mod='var' type='text' item='blood' value=$home.blood}--><!--{/if}--></span></li>
		<li>学历：<span><!--{if $home.education == '0'}-->未填写<!--{else}--><!--{hook mod='var' item='education' type='text' value=$home.education}--><!--{/if}--></span></li>
		<li>民族：<span><!--{if $home.national == '0'}-->未填写<!--{else}--><!--{hook mod='var' type='text' item='national' value=$home.national}--><!--{/if}--></span></li>
		<li>出生地：<span><!--{if $home.nationprovinceid == 0}-->未填写<!--{else}--><!--{hometown type='text' value=$home.nationprovinceid}--> <!--{hometown type='text' value=$home.nationcityid}--><!--{/if}--></span></li>
		<li>居住情况：<span><!--{if $home.housing==0}-->未填写<!--{else}--><!--{hook mod='var' item='housing' type='text' value=$home.housing}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">购车情况：<span><!--{if $home.caring==0}-->未填写<!--{else}--><!--{hook mod='var' type='text' item='caring' value=$home.caring}--><!--{/if}--></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>家中排行：<span><!--{if $home.tophome==0}-->未填写<!--{else}--><!--{hook mod='var' item='tophome' type='text' value=$home.tophome}--><!--{/if}--></span></li>
		<li>最大消费：<span><!--{if $home.consume==0}-->未填写<!--{else}--><!--{hook mod='var' item='consume' type='text' value=$home.consume}--><!--{/if}--></span></li>
		<li>是否吸烟：<span><!--{if $home.smoking==0}-->未填写<!--{else}--><!--{hook mod='var' item='smoking' type='text' value=$home.smoking}--><!--{/if}--></span></li>
		<li>是否喝酒：<span><!--{if $home.drinking==0}-->未填写<!--{else}--><!--{hook mod='var' item='drinking' type='text' value=$home.drinking}--><!--{/if}--></span></li>
		<li>宗教信仰：<span><!--{if $home.faith==0}-->未填写<!--{else}--><!--{hook mod='var' item='faith' type='text' value=$home.faith}--><!--{/if}--></span></li>
		<li>锻炼习惯：<span><!--{if $home.workout==0}-->未填写<!--{else}--><!--{hook mod='var' item='workout' type='text' value=$home.workout}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">作息习惯：<span><!--{if $home.rest==0}-->未填写<!--{else}--><!--{hook mod='var' item='rest' type='text' value=$home.rest}--><!--{/if}--></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>个性描述：<span><!--{if $home.personality==0}-->未填写<!--{else}--><!--{hook mod='var' item='personality' type='text' value=$home.personality}--><!--{/if}--></span></li>
		<li>相貌自评：<span><!--{if $home.profile==0}-->未填写<!--{else}--><!--{hook mod='var' item='profile' type='text' value=$home.profile}--><!--{/if}--></span></li>
		<li>体&#12288;&#12288;重：<span><!--{if $home.weight==0}-->未填写<!--{else}--><!--{$home.weight}--> (KG)<!--{/if}--></span></li>
		<li>体&#12288;&#12288;型：<span><!--{if $home.bodystyle==0}-->未填写<!--{else}--><!--{hook mod='var' item='bodystyle' type='text' value=$home.bodystyle}--><!--{/if}--></span></li>
		<li>魅力部位：<span><!--{if $home.charmparts==0}-->未填写<!--{else}--><!--{hook mod='var' item='charmparts' type='text' value=$home.charmparts}--><!--{/if}--></span></li>
		<li>发&#12288;&#12288;型：<span><!--{if $home.hairstyle==0}-->未填写<!--{else}--><!--{hook mod='var' item='hairstyle' type='text' value=$home.hairstyle}--><!--{/if}--></span></li>
		<li>发&#12288;&#12288;色：<span><!--{if $home.haircolor==0}-->未填写<!--{else}--><!--{hook mod='var' item='haircolor' type='text' value=$home.haircolor}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">脸&#12288;&#12288;型：<span><!--{if $home.facestyle==0}-->未填写<!--{else}--><!--{hook mod='var' item='facestyle' type='text' value=$home.facestyle}--><!--{/if}--></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>职&#12288;&#12288;业：<span><!--{if $home.jobs==0}-->未填写<!--{else}--><!--{hook mod='var' item='jobs' type='text' value=$home.jobs}--><!--{/if}--></span></li>
		<li>公司类型：<span><!--{if $home.companytype==0}-->未填写<!--{else}--><!--{hook mod='var' item='companytype' type='text' value=$home.companytype}--><!--{/if}--></span></li>
		<li>收入描述：<span><!--{if $home.income==0}-->未填写<!--{else}--><!--{hook mod='var' item='income' type='text' value=$home.income}--><!--{/if}--></span></li>
		<li>工作状况：<span><!--{if $home.workstatus==0}-->未填写<!--{else}--><!--{hook mod='var' item='workstatus' type='text' value=$home.workstatus}--><!--{/if}--></span></li>
		<li>所学专业：<span><!--{if $home.specialty==0}-->未填写<!--{else}--><!--{hook mod='var' item='specialty' type='text' value=$home.specialty}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">语言能力：<span><!--{if $home.language==''}-->未填写<!--{else}--><!--{hook mod='var' item='language' type='multi' value=$home.language}--><!--{/if}--></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>最大消费：<span><!--{if $home.consume=='0'}-->未填写<!--{else}--><!--{hook mod='var' item='consume' type='text' value=$home.consume}--><!--{/if}--></span></li>
		<li>制造浪漫：<span><!--{if $home.romantic=='0'}-->未填写<!--{else}--><!--{hook mod='var' item='romantic' type='text' value=$home.romantic}--><!--{/if}--></span></li>
		<li>是否要小孩：<span><!--{if $home.havechildren=='0'}-->未填写<!--{else}--><!--{hook mod='var' item='havechildren' type='text' value=$home.havechildren}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">与对方父母同住：<span><!--{if $home.talive=='0'}-->未填写<!--{else}--><!--{hook mod='var' item='talive' type='text' value=$home.talive}--><!--{/if}--></span></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
		<li>喜欢的运动：<!--{if $home.sports==''}-->未填写<!--{else}--><!--{hook mod='var' item='sports' type='multi' value=$home.sports}--><!--{/if}--></li>
		<li>喜欢的食物：<!--{if empty($home.food)}-->未填写<!--{else}--><!--{hook mod='var' item='food' type='multi' value=$home.food}--><!--{/if}--></li>
		<li>喜欢的书籍：<!--{if empty($home.book)}-->未填写<!--{else}--><!--{hook mod='var' item='book' type='multi' value=$home.book}--><!--{/if}--></li>
		<li>喜欢的电影：<!--{if empty($home.film)}-->未填写<!--{else}--><!--{hook mod='var' item='film' type='multi' value=$home.film}--><!--{/if}--></li>
		<li>业余爱好：<!--{if empty($home.interest)}-->未填写<!--{else}--><!--{hook mod='var' item='interest' type='multi' value=$home.interest}--><!--{/if}--></li>
		<li>喜欢的旅游去处：<!--{if empty($home.travel)}-->未填写<!--{else}--><!--{hook mod='var' item='travel' type='multi' value=$home.travel}--><!--{/if}--></li>
		<li>关注的节目：<!--{if empty($home.attention)}-->未填写<!--{else}--><!--{hook mod='var' item='attention' type='multi' value=$home.attention}--><!--{/if}--></li>
		<li style="border-bottom:none;">娱乐休闲：<!--{if empty($home.leisure)}-->未填写<!--{else}--><!--{hook mod='var' item='leisure' type='multi' value=$home.leisure}--><!--{/if}--></li>
	  </ul>
    </div>
    <div class="bdcon">
      <ul>
	    <li>会员性别：<span><!--{if $cond.gender=='1'}-->男<!--{else if $cond.gender=='2'}-->女<!--{else}-->不限<!--{/if}--></span></li>
		<li>照片要求：<span><!--{if $cond.avatar=='1'}-->有照片<!--{else}-->不限<!--{/if}--></span></li>
		<li>年龄要求：<span><!--{if $cond.startage=='0'}-->不限<!--{else}--><!--{$cond.startage}-->~<!--{$cond.endage}-->岁<!--{/if}--></span></li>
		<li>身高要求：<span><!--{if $cond.startheight=='0'}-->不限<!--{else}--><!--{$cond.startheight}-->~<!--{$cond.endheight}-->CM<!--{/if}--></span></li>
		<li>类型要求：<span><!--{if empty($cond.lovesort)}-->不限<!--{else}--><!--{hook mod='lovesort' type='multi' value=$cond.lovesort}--><!--{/if}--></span></li>
		<li>婚史要求：<span><!--{if empty($cond.marry)}-->不限<!--{else}--><!--{hook mod='var' type='multi' item='marrystatus' value=$cond.marry}--><!--{/if}--></span></li>
		<li>学历要求：<span><!--{if $cond.startedu == '0'}-->不限<!--{else}--><!--{area type='text' value=$home.startedu}-->~<!--{area type='text' value=$home.endedu}--><!--{/if}--></span></li>
		<li style="border-bottom:none;">地区要求：<span>

		<!--{if $cond.wbdist1 > 0}-->
		<!--{area type='text' value=$cond.wbdist1}--> <!--{area type='text' value=$cond.wbdist2}-->
		<!--{else}-->
		<!--{assign var='i' value=false}-->
		<!--{foreach $cond.bulidarea as $volist}-->
		<!--{if $volist.city>0}-->
		<!--{assign var='i' value=true}-->
		<!--{area type='text' value=$volist.province}--> <!--{area type='text' value=$volist.city}--><br />
		<!--{/if}-->
		<!--{/foreach}-->
		<!--{if false === $i}-->
		不限
		<!--{/if}-->
		<!--{/if}-->

		</span></li>
	  </ul>
    </div>
    
    
 
    
  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript">
  jQuery(".oe_homeinfo").slide({trigger:"click"});
</script>

 




 
 




<!--{include file="<!--{$waptpl}-->block_footer.tpl"}-->
<div class="oe_id_bigbox" id="id_credit_details">

</div>


<div class="oe_shade" style="display:none;" id="viewcredit_box">
  <div id="credit_loading"></div>
  <div class="_animate_bottom" style="bottom:10px; height:300px; position:absolute;display:none;" id="credit_result">

  </div>
</div>


<script type="text/javascript">
$(function(){
	var loginstatus = "<!--{$login.status}-->";
	$("#act_hi").click(function(){ //打招呼
		if (loginstatus == "0") {
			goUrl("<!--{$wapfile}-->?c=passport&a=login");
			return false;
		}
		else {
			$.ajax({
				type: "POST",
				url: "<!--{$wapfile}-->?c=cp_do",
				cache: false,
				data: {a:"hi", touid:"<!--{$home.userid}-->", r:"<!--{$time}-->"},
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
			goUrl("<!--{$wapfile}-->?c=passport&a=login");
			return false;
		}
		else {
			goUrl("<!--{$wapfile}-->?c=cp_do&a=writemsg&touid=<!--{$home.userid}-->");
		}
	});
});

function addToListen() { //加入关注
	$.ajax({
	type: "POST",
	url: "<!--{$wapfile}-->?c=cp_do",
	cache: false,
	data: {a:"listen", touid:"<!--{$home.userid}-->", r:get_rndnum(8)},
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
	url: "<!--{$wapfile}-->?c=cp_do",
	cache: false,
	data: {a:"dellisten", touid:"<!--{$home.userid}-->", r:"<!--{$time}-->"},
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
</html>