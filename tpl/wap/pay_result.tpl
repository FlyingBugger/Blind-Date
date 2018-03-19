<!--{assign var="menu_id" value="cp"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="pay_result">
   <div class="hd">
       <!--{if $payorder.paystatus == 10}-->
       <span  style="display:;"><i class="iconfont">&#xe620;</i></span>
     <!--{else}-->
       <span class="error"><i class="iconfont">&#xe627;</i></span>
     <!--{/if}-->
   </div>
   <div class="bd">
      <p class="p_2">
	    支付单号：<!--{$paynum}--><br>
        支付金额：<b><!--{$payorder.amount}--></b> 元
      </p>
      <p class="p_1" style="margin-top:10px;">
        <!--{if $payorder.paystatus == 10}-->
          <font color="red">支付成功</font>
        <!--{else}-->
        <font color="red">支付失败</font>
        <!--{/if}-->
      </p>
      <p class="p_3">
        <!--{if !empty($gourl)}-->
        <span class="span_1" onclick="goUrl('<!--{$gourl}-->');">返回来源页面</span>
        <!--{else}-->
        <span class="span_1" onclick="goUrl('<!--{$wapfile}-->?c=cp');">会员中心</span>
        <!--{/if}-->
		<span class="span_2" onclick="goUrl('<!--{$wapfile}-->?c=cp_recharge');">继续充值</span>
      </p>
   </div>
</div>
</body>
</html>