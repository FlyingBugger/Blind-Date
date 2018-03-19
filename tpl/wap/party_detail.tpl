<!--{assign var="menu_id" value="party"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="oe_party_detail">
      <div class="hd">
        <dl>
          <dt><img src="<!--{$party.drawimg}-->" /></dt>
          <dd class="dd_1">
            <h3>
              <p><!--{$party.title}--></p>
              <!--{if $party.endbmtime > $time}-->
                <span class="p_2 current">活动报名中</span>
              <!--{else}-->
              <span class="p_2">结束报名</span>
              <!--{/if}-->
            </h3>
            <p class="p_1">
              活动人数：
              <span class="span_1"><i class="iconfont">男</i> <em><!--{if $party.limitman >0}--><!--{$party.limitman}-->人<!--{else}-->不限<!--{/if}--></em></span> 
              <span class="span_2"><i class="iconfont">女</i> <em><!--{if $party.limitlady >0}--><!--{$party.limitlady}-->人<!--{else}-->不限<!--{/if}--></em></span> 
            </p>
          </dd>
          <div class="ge"></div>
          <dd class="dd_4">
            <p class="p_4"> 
              <!--{if $party.moneyman == $party.moneylady}-->
                <!--{if $party.moneyman >0}-->
                报名费用：<label>￥<!--{$party.moneyman}--></label>
                <!--{else}-->
                <label>报名费用：免费</label>
                <!--{/if}-->
              <!--{else}-->
              <span class="span_1"><i class="iconfont">男</i><em><!--{if $party.moneyman >0}-->￥<!--{$party.moneyman}--><!--{else}-->免费<!--{/if}--></em></span> 
              <span class="span_2"><i class="iconfont">女</i><em><!--{if $party.moneylady >0}-->￥<!--{$party.moneylady}--><!--{else}-->免费<!--{/if}--></em></span> 
              <!--{/if}-->
            </p>
            <p class="p_3"> 活动时间： 
              <!--{$party.starttime|date_format:"%Y/%m/%d %H:%M"}--> - 
              <!--{$party.endtime|date_format:"%Y/%m/%d %H:%M"}--> 
            </p>
          </dd>
          <dd class="dd_3 cursor"<!--{if $login.status==1}-->f="but_open_partybmuser" data-id="<!--{$party.partyid}-->"<!--{else}--> onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"<!--{/if}--> >
            <!--{assign var="bmlist" value=vo_list("mod={partybm} where={v.partyid='<!--{$party.partyid}-->'} num={5}}")}-->
            <!--{if !empty($bmlist)}-->
            <p class="userlist"> 
              <!--{foreach $bmlist as $val}--> 
              <span><img src="<!--{$val.avatar}-->" /></span>
              <!--{/foreach}--> 
              <i class="iconfont">&#xe642;</i>
            </p>
            <!--{/if}-->
            <p class="p_1"> 
              共有<i><!--{($party.bmmans+$party.bmladys+$party.otherbms)}--></i>人报名
			  <em class="iconfont em_1">&#xe621;</em> <i><!--{$party.bmmans}--></i>人  
              <em class="iconfont em_2">&#xe622;</em> <i><!--{$party.bmladys}--></i>人 
			  <!--{if $party.otherbms > 0}-->
			  <em class="iconfont em_3">&#xe85d;</em> <i><!--{$party.otherbms}--></i>人 
			  <!--{/if}-->
            </p>
          </dd>
          <div class="ge"></div>
          <dd class="dd_2">
            <p class="p_1"> 
              <i class="iconfont">&#xe636;</i>
              地址：
              <label>
                <!--{area type="text" value=$party.area1}--> <!--{area type="text" value=$party.area2}--> <!--{area type="text" value=$party.area3}--> <!--{area type="text" value=$party.area4}--> 
                <!--{$party.address}--> 
              </label>
            </p>
            <p class="p_2"> 
              <i class="iconfont">&#xe614;</i> 截止报名： 
              <label> 
              <!--{$party.endbmtime|date_format:"%Y/%m/%d %H:%M"}--> 
              </label> </p>
            <p class="p_1"> 
              <i class="iconfont">&#xe672;</i> 
              公交路线：
              <label>
                <!--{$party.traffic}--> 
              </label>
            </p>
            <p class="p_1"> 
              <i class="iconfont">&#xe646;</i> 
              联系方式：
              <label><!--{$party.contact}--></label>
            </p>
          </dd>
        </dl>
        <div class="ge"></div>
      </div>
      <div class="bd" id="party_detail">
        <h3>活动详情</h3>
        <!--{$party.content}--> 
      </div>
      <div class="ge"></div>
      <div class="bd">
        <h3>活动流程</h3>
        <dl>
          <dt>1、报名活动</dt>
          <dd>找到感兴趣的活动，提交报名信息；</dd>
        </dl>
        <dl>
          <dt>2、支付费用</dt>
          <dd>在线支付活动费用，也可以参加活动时现场支付；</dd>
        </dl>
        <dl>
          <dt>3、准时参加活动</dt>
          <dd>现场签到，参加相亲活动；</dd>
        </dl>
        <dl>
          <dt>4、活动结束</dt>
          <dd>有心仪的对象，进一步交往。</dd>
        </dl>
      </div>
    </div>

 
 <div class="oe_shade" style="display:none;" id="myparty_box">
  <div class="myparty_box" id="myparty_data">
  </div>
</div>
 
 
<div class="oe_party_btn">
  <!--{if $party.bm == '0'}-->
  <!--{if $login.status=='0'}-->
  <span class="span_1" onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"><i class="iconfont">&#xe668;</i>立即报名</span>
  <!--{else}-->
  <span class="span_1" f="but_open_partybm" data-id="<!--{$party.partyid}-->"><i class="iconfont">&#xe668;</i>立即报名</span>
  <!--{/if}-->
  <!--{elseif $party.bm == '1'}-->
  <span class="span_1">您已报名</span>
  <!--{elseif $party.bm == '2'}-->
  <span class="span_1">已结束</span>
  <!--{elseif $party.bm == '3'}-->
  <span class="span_1">名额已满</span>
  <!--{elseif $party.bm == '4'}-->
  <span class="span_1">已报名，待付款</span>
  <!--{elseif $party.bm == '5'}-->
    <span class="span_1">已报名，待审核</span>
  <!--{elseif $party.bm == '6'}-->
    <span class="span_1">已报名，审核不通过</span>
  <!--{/if}-->
  <!--{if $login.status=='0'}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=passport&a=login');"> <i class="iconfont">&#xe664;</i>我报名的</span>
  <!--{else}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=myparty&a=list');")"> <i class="iconfont">&#xe664;</i>我报名的</span>
  <!--{/if}-->
</div>
<div style="height:45px;"></div>

<div class="oe_shade" style="display:none;" id="party_bmuser_box">
    <div class="party_userlist" style="right:0px;display:none;" id="party_bmuser_data"> </div>
</div>
<!--//报名会员-->

<div class="oe_shade" style="display:none;" id="myparty_box">
    <div class="myparty_box" id="myparty_data"> </div>
</div>
<!--//我报名的-->

<script src="<!--{$wapskin}-->js/party.js?<!--{time()}-->"></script>
</body>
</html>