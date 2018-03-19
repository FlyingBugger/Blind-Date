  <div class="bd party_box">
	<h3 style="margin-bottom:0px;">活动报名</h3>
	<dl>
	  <dt>报名费用：</dt>
	  <dd>
		男：<span><!--{if $party.moneyman >0}-->￥<!--{doubleval($party.moneyman)}--><!--{else}-->免费<!--{/if}--></span> 
		女：<span><!--{if $party.moneylady >0}-->￥<!--{doubleval($party.moneylady)}--><!--{else}-->免费<!--{/if}--></span>  
	  </dd>
	  <div class="clear"></div>
	</dl>
	<dl>
	  <dt>手机号码：</dt>
	  <dd><input type="text" id="party_bm_mobile" value="<!--{$login.info.mobile}-->" /></dd>
	  <div class="clear"></div>
	</dl>
	<div class="btn cursor" f="but_confirm_partybm" data-id="<!--{$party.partyid}-->"> <label>确定</label> </div>
  </div>
