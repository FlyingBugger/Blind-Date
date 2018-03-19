<!--{include file="<!--{$uctplpath}-->block_head.tpl"}--> 
<!--{include file="<!--{$uctplpath}-->block_top.tpl"}-->
<div class="user_main">
  <!--{include file="<!--{$uctplpath}-->block_menu.tpl"}-->
  <div class="user_main_middle">
    <!--发表心情-->
	<div class="mood-post-box">
	  <div class="mood-post-content">
	 <textarea class="mood-textarea" id="mood_content" name="mood_content" onkeydown="textCounter('mood_content', 'counter', 500);" onkeyup="textCounter('mood_content', 'counter', 500);" onclick="obj_del_wbcontent('mood_content');" onblur="obj_attr_wbcontent('mood_content');">记录每一天的心情...</textarea>
	    <div class="mood-box-block">
          <div class="fl" style="position:relative;">
	        <a href="###" onclick="show_more_face('display-eif', 'mood_content');"><img src="<!--{$ucpath}-->images/eif.gif" style="padding-bottom:3px;">表情</a>
		    <div id="display-eif"></div>
	      </div>
		  <div class="fr">
	        <div id="post_limit" class="fl" style="padding-top:5px;">还能输入<span id="counter">500</span>字</div>
		    <div class="mood-post-button" onclick="obj_public_mood('mood_content');"><img src="<!--{$ucpath}-->images/button-mood.gif"></div>
		    <div class="mood-post-cancel"><a href="###" onclick="obj_cancel_wbcontent('mood_content');">取消</a></div>
		  </div>
	      <div class="clear"></div>
		</div>
	    </div>
	</div>
    <!--//mood-post-form End-->
    <div class="u_match">
      <div class="hd">今日速配  <a href="<!--{$ucfile}-->?c=cond">修改择友条件</a></div>
      <div class="bd">
      <!--{assign var='matchlist' value=vo_list("mod={mymatch} value={<!--{$u.userid}-->} num={16}")}-->
      <!--{if empty($matchlist)}-->
      <div class="no_data">
        <p class="p_1"><span></span></p>
        <p class="p_2">没有符合条件的信息,请去设置<a href="<!--{$ucfile}-->?c=cond">择友条件</a></p>
      </div>
      <!--{else}-->
      <!--{foreach $matchlist as $volist}-->
      <dl>
        <dt>
          <a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->"/></a>
        </dt>
        <dd>
          <h3><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h3>
          <p><!--{$volist.age}-->岁，<!--{area type="text" value=$volist.provinceid}--></p>
        </dd>
      </dl>
      <!--{/foreach}-->
      <!--{/if}-->
      </div>
    </div>
  </div>
  <!--//user_main_middle End-->

  <!--右边 Begin-->
  <div class="user_main_right">
    <div class="user_iph_k">
	  <ul>
	    <li class="gdlh"><a href="<!--{$ucfile}-->?c=vip">升级VIP会员，享受更多服务</a></li>
		<li class="lwsc"><a href="<!--{$ucfile}-->?c=certify">诚信认证点亮图标提高人气</a></li>
      </ul>
	  <div class="clear"></div>
    </div>
	<!--//user_iph_k End-->
	
	<!--{assign var='gift' value=vo_list("mod={gift} where={v.touserid='<!--{$u.userid}-->'} num={9}")}-->
	<!--{if !empty($gift)}-->
	<div class="user-rt-box">
	  <div class="user-rt-title"><span><a href="<!--{$ucfile}-->?c=gift">更多礼物</a></span>收到的礼物</div>
	  <div class="user-index-gift">
		<ul>
		  <!--{foreach $gift as $volist}-->
		  <li><img src="<!--{$volist.imgurl}-->" width="60" height="60" alt="<!--{$volist.giftname}-->" title="<!--{$volist.giftname}-->" /></li>
		  <!--{/foreach}-->
		</ul>
        <div class="clear"></div>
	  </div>
	</div>
	<!--//user-rt-box End-->
	<!--{/if}-->
 

    <div class="oe_index_wei">
      <h3>微心情 <span><a href="<!--{$ucfile}-->?c=weibo">更多&gt;&gt;</a></span><i></i></h3>
      <div class="oe_index_weicon"> 
        <!--{assign var='weibo' value=vo_list("mod={weibo} num={8}")}--> 
        <!--{foreach $weibo as $volist}-->
        <dl>
          <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{avatar width='50' height='58' value=$volist.avatarurl}--></a></dt>
          <dd>
		    <span><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a> - <!--{$volist.addtime|date_format:"%H:%M"}--></span>
            <p><!--{$volist.content}--> </p>
          </dd>
          <div class="c"></div>
        </dl>
        <!--{/foreach}--> 
      </div>
    </div>
  

  </div>
  <div style="clear:both;"> </div>
  <!--//user_main_right End--> 
  
</div>
<!--//user_main End--> 

<!--{include file="<!--{$uctplpath}-->block_eif.tpl"}--> 
<!--{include file="<!--{$uctplpath}-->block_footer.tpl"}--> 
</body>
</html>