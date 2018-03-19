    <div class="oe_withbox_input">
      <div class="title">报名参加活动</div>
      <ul>
        <li class="li_1">
          报名费用：
          <!--{if $login.info.gender=='1'}-->
          <span><!--{if $party.moneyman >0}-->￥<!--{doubleval($party.moneyman)}--><!--{else}-->免费<!--{/if}--></span>
          <!--{else}-->
          <span><!--{if $party.moneylady >0}-->￥<!--{doubleval($party.moneylady)}--><!--{else}-->免费<!--{/if}--></span>
          <!--{/if}-->
        </li>
        <li class="li_1">
		  <input type="text" name="party_bm_mobile" id="party_bm_mobile" placeholder="请输入手机号码" value="<!--{$login.info.mobile}-->"  />
		</li>
      </ul>
      <div class="btn">
        <span class="span_1 cursor" f="but_confirm_partybm" data-id="<!--{$party.partyid}-->">确定</span>
        <span class="span_2 cursor" f="but_close_partybm">取消</span>
      </div>
    </div>