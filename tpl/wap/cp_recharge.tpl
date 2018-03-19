<!--{assign var="menu_id" value="cp"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="oe_recharge">
    <input type="hidden" name="sdkid" id="sdkid" value="" />
	<input type="hidden" name="sdkname" id="sdkname" value="" />
    <div class="hd">
      <p>帐户余额：<b><!--{$login.info.money}--></b> <!--{$config.moneyname}--></p>
    </div>
    <div class="bd">
      <div class="input">
        <input type="text" name="money" id="money" placeholder="请输入充值金额" /> 元
		<span><i>1</i>元 = <i>1</i><!--{$config.moneyname}--></span>
	  </div>
      <h2>选择充值方式</h2>
      <ul>
	    <!--{assign var="pay_list" value=vo_list("mod={payment} where={v.type='wap' AND v.flag='1'}")}-->

		<!--{foreach $pay_list as $volist}-->
		<!--{if $volist.filepath == 'wapyjpay'}-->
        <li class="cursor" f="sel_payment" data-sdkid="<!--{$volist.mentid}-->" data-sdkname="<!--{$volist.filepath}-->">
		  <span><i class="iconfont">&#xe67d;</i></span>
          <label><i class="iconfont">&#xe6c8;</i></label>
          <p>银行卡支付</p>
        </li>
		<!--{elseif $volist.filepath == 'wapalipay'}-->
		<!--{if $apptype != "weixin"}-->
        <li class="cursor" f="sel_payment" data-sdkid="<!--{$volist.mentid}-->" data-sdkname="<!--{$volist.filepath}-->">
		  <span><i class="iconfont">&#xe67d;</i></span>
          <label><i class="iconfont">&#xe6c8;</i></label>
          <p>支付宝支付</p>
        </li>
		<!--{/if}-->
		<!--{/if}-->
		<!--{/foreach}-->
		<!--{if $config.weixin_payflag == '1'}-->
		<!--{if $apptype == "weixin"}-->
        <li class="cursor" f="sel_payment" data-sdkid="998" data-sdkname="weixinpay">
		  <span><i class="iconfont">&#xe67d;</i></span>
          <label><i class="iconfont">&#xe6c8;</i></label>
          <p>微信支付</p>
        </li>
		<!--{/if}-->
		<!--{/if}-->
        <!--{if $config.weixin_h5pay == '1'}-->
        <!--{if $apptype == "weixin"}-->
        <li class="cursor" f="sel_payment" data-sdkid="998" data-sdkname="weixinpay">
          <span><i class="iconfont">&#xe67d;</i></span>
          <label><i class="iconfont">&#xe6c8;</i></label>
          <p>微信支付</p>
        </li>
        <!--{else}-->
          <!--{if $config.weixin_h5pay == '1'}-->
          <li class="cursor" f="sel_payment" data-sdkid="997" data-sdkname="wxh5pay">
              <span><i class="iconfont">&#xe67d;</i></span>
              <label><i class="iconfont">&#xe6c8;</i></label>
              <p>微信支付</p>
          </li>
          <!--{/if}-->
        <!--{/if}-->
        <!--{/if}-->
      </ul>
      <div class="all_btn_1"> <span f="but_recharge_submit" class="cursor">确定充值</span> </div>
    </div>
    <!--//bd End--> 
</div>
<script src="<!--{$wapskin}-->js/recharge.js?<!--{time()}-->"></script>
</body>
</html>