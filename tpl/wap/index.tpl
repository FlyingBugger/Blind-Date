<!--{assign var="menu_id" value="index"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="oe_banner">
  <div class="bd">
    <!--{assign var='zone' value=get_zone('wap_banner')}--> 
    <!--{if !empty($zone.ads)}--> 
    <ul>
      <!--{foreach $zone.ads as $volist}-->
      <li><a href="<!--{$volist.url}-->"><img src="<!--{$volist.uploadfiles}-->" /></a></li>
      <!--{/foreach}-->
    </ul>
    <!--{/if}-->
  </div>
  <div class="hd">
    <ul>
      <!--{foreach $zone.ads as $volist}--><li><span></span></li><!--{/foreach}-->
    </ul>
  </div>
  <div class="banner_bg">
    <img src="<!--{$wapskin}-->images/w_1.png" />
  </div>
</div>
<script type="text/javascript">
  jQuery(".oe_banner").slide({mainCell:".bd ul",autoPlay:true});
</script>
<div class="oe_innav">
  <dl class="dl_1" onclick="goUrl('<!--{$wapfile}-->?c=user');">
    <dt><span><i class="iconfont">&#xe693;</i></span></dt>
    <dd>会员</dd>
  </dl>
  <dl class="dl_2" onclick="goUrl('<!--{$wapfile}-->?c=party');">
    <dt><span><i class="iconfont">&#xe61e;</i></span></dt>
    <dd>活动</dd>
  </dl>
  <dl class="dl_3" onclick="goUrl('<!--{$wapfile}-->?c=weibo');">
    <dt><span><i class="iconfont">&#xe691;</i></span></dt>
    <dd>微心情</dd>
  </dl>
  <dl class="dl_4" onclick="goUrl('<!--{$wapfile}-->?c=cp_message');">
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
    <em  onclick="goUrl('<!--{$wapfile}-->?c=user');"><i class="iconfont">&#xe642;</i></em>
  </div>
  <div class="bd">
    <!--{if $login.status == 1}-->
	<!--{if $login.info.gender == 1}-->
	<!--{assign var='eliteuser' value=vo_list("mod={listuser} type={elite} where={v.avatar='1' AND v.gender='2'} num={4}")}--> 
	<!--{else}-->
	<!--{assign var='eliteuser' value=vo_list("mod={listuser} type={elite} where={v.avatar='1' AND v.gender='1'} num={4}")}--> 
	<!--{/if}-->
    <!--{else}-->
    <!--{assign var='eliteuser' value=vo_list("mod={listuser} type={elite} where={v.avatar='1'} num={4}")}--> 
    <!--{/if}-->
    <!--{foreach $eliteuser as $volist}-->
    <dl onclick="userDetail('<!--{$volist.userid}-->');">
	  <dt>
       <span><img src="<!--{$volist.avatarurl}-->" /></span></dt>
	  <dd>
        <h3><!--{$volist.username}--> </h3>
        <p><!--{$volist.age}-->岁 <!--{if $volist.height > 0}--><!--{$volist.height}-->CM<!--{/if}--> <!--{area type='text' value=$volist.cityid}--></p>
      </dd>
	</dl>
    <!--{/foreach}-->
    <div class="clear"></div>
  </div>
</div>

<div class="oe_inparty">
  <div class="hd">
    <span class="span_1"><i></i></span>
    <label>相亲活动</label>
    <span class="span_2"><i></i></span>
    <em  onclick="goUrl('<!--{$wapfile}-->?c=party');"><i class="iconfont">&#xe642;</i></em>
  </div>
  <div class="bd">
    <div class="bdcon">
      <!--{assign var='party' value=vo_list("mod={party}  num={5}")}--> 
      <!--{foreach $party as $volist}--> 
      <dl>
        <dt><a href="javascript:;" onclick="goUrl('<!--{$wapfile}-->?c=party&a=detail&id=<!--{$volist.partyid}-->')"><img src="<!--{$volist.thumbimg}-->"  /></a></dt>
        <dd>
          <h3><a href="<!--{$volist.url}-->"><a href="<!--{$volist.url}-->" target="_blank" title="<!--{$volist.title}-->"><!--{$volist.title}--></a></a></h3>
          <p class="p_2"><i class="iconfont">&#xe636;</i><!--{$volist.address}--></p>
       </dd>
        <div class="clear"></div>
      </dl>
      <!--{/foreach}-->
      <div class="clear"></div>
    </div>
  </div>
</div>


<script type="text/javascript">
	//var scWidth = $(window).width();
	scWidth = WIN_WIDTH;
    <!--{if count($party) == 0}-->
    var bigimg_width = 205;
    <!--{else}-->
    var bigimg_width = (205*<!--{count($party)}-->);
    <!--{/if}-->
	$(".oe_inparty .bdcon").css({"width":bigimg_width+"px"});
</script>

<!--{include file="<!--{$waptpl}-->block_footer.tpl"}-->
</body>
</html>