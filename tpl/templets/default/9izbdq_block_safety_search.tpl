  <script type="text/javascript" src="<!--{$skinpath}-->js/safety.js"></script>
  <div class="oe_safety_search">
    <div class="ser_top">
      <dl>
	    <dt>
		  <span class="current" f="but_credit_type" data-type="all">综合查询</span>
          <span f="but_credit_type" data-type="mobile">手机号码</span>
          <span f="but_credit_type" data-type="qq">QQ号码</span>
          <span f="but_credit_type" data-type="email">邮箱</span>
          <span f="but_credit_type" data-type="weixin">微信</span>
		  <span f="but_credit_type" data-type="idcard">身份证号</span>
          <div class="clear"></div>
        </dt>
		<dd>
          <input type="text" name="credit_key" id="credit_key" f="checkinput" /><span f="but_check_credit" data-flag="<!--{$config.credit_flag}-->"><i></i></span>
          <p id="credit_key_pt" f="changept" data-id="credit_key">请输入查询关键词</p>
		  <input type="hidden" name="credit_type" id="credit_type" value="all" />
          <em class="loading" id="credit_loading" style="display:none;">
            <img src="<!--{$skinpath}-->/themes/images/loading.gif" />
          </em>
        </dd>
	  </dl>
      
      <!--{if $login.status == '0'}-->
      <label f="but_safety_addto"  onclick="artbox_loginbox();"><i></i>投诉/举报</label>
      <!--{else}-->
      <label f="but_safety_addto"  onclick="artbox_complaint('0');"><i></i>投诉/举报</label>
      <!--{/if}-->
      
    </div>
  
    <div class="oe_safety_searchresult" style="display:none;" id="credit_result">
      <dl>
	    <dt><label class="" id="credit_img"></label> </dt>
		<dd>
		  <span id="key_tips"></span>
		  <em id="check_tips"></em>
        </dd>
        <div class="clear"></div>   

	  </dl>
    </div>
  </div>
  <!--//oe_safety_search End -->