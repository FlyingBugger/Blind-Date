<!--{assign var="menu_id" value="cp"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->

<div class="cp-bartitle">我报名的活动</div>
<div class="myparty_list">
   <!--{if !empty($myparty)}-->
    <!--{foreach $myparty as $volist}-->
    <dl onclick="goUrl('<!--{$wapfile}-->?c=party&a=detail&id=<!--{$volist.partyid}-->&<!--{$appurlitem}-->');">
        <dt>
          <img src="<!--{$volist.thumbimg}-->" />
        </dt>
        <dd>
          <h3> <!--{$volist.title}--> </h3>
          <p class="p_1">
              <!--{if $volist.status == '1'}-->
              <span class="span_2">报名成功，审核通过</span>
              <!--{elseif $volist.status == '2'}-->
              <span class="span_3">已取消报名</span>
              <!--{else}-->
              <span class="span_1">报名成功，等待审核</span>
              <!--{/if}-->
              <!--已有<em>0</em>人报名 --> </p>
          <p class="p_2">
            活动时间： <!--{$volist.starttime|date_format:"Y-m-d H:i"}--> - <!--{$volist.endtime|date_format:"Y-m-d H:i"}-->
          </p>
          <p class="p_3">
              <!--{if $volist.amount > 0}-->
                  <!--{if $volist.payflag == "1"}-->
                      <!--{if $volist.status == "2"}-->
                          <!--{if $volist.refundflag == '2'}-->
                          <span class="free">退款成功</span>
                          <!--{elseif $volist.refundflag == '3'}-->
                          <span class="payback">退款失败</span>
                          <!--{elseif $volist.refundflag == '1'}-->
                          <span class="payback">退款中</span>
                          <!--{else}-->
                          <span class="pay" f="but_open_apprefund" data-id="<!--{$volist.bmid}-->">申请退款</span>
                          <!--{/if}-->
                      <!--{else}-->
                      <span class="free">已支付，￥<!--{$volist.amount}-->元</span>
                      <!--{/if}-->
                  <!--{else}-->
                  <span class="pay" f="but_party_pay_submit" data-id="<!--{$volist.bmid}-->">立即支付</span>
                  <!--{/if}-->
              <!--{else}-->
              <span class="free">该活动免费</span>
              <!--{/if}-->
          </p>
        </dd>
    </dl>
    <!--{/foreach}-->
    <!--{else}-->
    <div class="no_data">
    <p class="p_1"><span><i class="iconfont">&#xe609;</i></span></p>
    <p class="p_2">你还没报名任何活动</p>
    <p class="pbtn"><span onclick="goUrl('<!--{$wapfile}-->?c=party');">查看最新活动</span></p>
  </div>
   <!--{/if}-->
</div>

  <!--{if $pagecount > 1}-->
  <div class="page-layout">
    页次：<!--{$page}-->/<!--{$pagecount}-->
	<!--{if $prepage>0}-->
	<span onclick="goUrl('<!--{$wapfile}-->?c=cp_money&<!--{$urlitem}-->&page=<!--{$prepage}-->');">上一页</span>  
	<!--{/if}-->
	<!--{if $nextpage>0}-->
	<span onclick="goUrl('<!--{$wapfile}-->?c=cp_money&<!--{$urlitem}-->&page=<!--{$nextpage}-->');">下一页</span>  
	<!--{/if}-->
  </div>
  <!--//ShowPage End-->
  <!--{/if}-->

<script src="<!--{$wapskin}-->js/party.js?<!--{time()}-->"></script>
<!--{include file="<!--{$waptpl}-->block_footer_cp.tpl"}-->
</html>