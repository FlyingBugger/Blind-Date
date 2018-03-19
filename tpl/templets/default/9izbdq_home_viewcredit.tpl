  <h3>查询结果</h3>
  <div class="oe_home_saftycon">
	<div class="div_1"><span><img src="<!--{$home.avatarurl}-->" /></span>
	  <label>诚信星级：<i style="font-style:normal;"><!--{$home.star}--></i> 星</label>
	  <p>X表示被举报过</p>
	</div>
	<!--{if $power == '0'}-->
	<p class="no_pw" style="text-align:center;padding-top:20px;line-height:30px;">
	  对不起，您没有查询权限<br />
	  <a href="<!--{$urlpath}-->usercp.php?c=vip">立即升级</a>
	</p>
	<!--{else}-->
	<div class="div_2">
	  <p>
		<span>身份证</span>
		<!--{if !empty($home.idnumber)}-->
		<label<!--{if $idcard_flag == '1'}--> class="current"<!--{/if}-->><em></em></label>
		<!--{else}-->
		<label>--</label>
		<!--{/if}-->
	  </p>
	  <p>
		<span>手机号</span>
		<!--{if !empty($home.mobile)}-->
		<label<!--{if $mobile_flag == '1'}--> class="current"<!--{/if}-->><em></em></label>
		<!--{else}-->
		<label>--</label>
		<!--{/if}-->
	  </p>
	  <p>
		<span>QQ号</span>
		<!--{if !empty($home.qq)}-->
		<label<!--{if $qq_flag == '1'}--> class="current"<!--{/if}-->><em></em></label>
		<!--{else}-->
		<label>--</label>
		<!--{/if}-->
	  </p>
	  <p>
		<span>邮  箱</span>
		<!--{if !empty($home.email)}-->
		<label<!--{if $email_flag == '1'}--> class="current"<!--{/if}-->><em></em></label>
		<!--{else}-->
		<label>--</label>
		<!--{/if}-->
	  </p>
	  <p>
		<span>微  信</span>
		<!--{if !empty($home.msn)}-->
		<label<!--{if $weixin_flag == '1'}--> class="current"<!--{/if}-->><em></em></label>
		<!--{else}-->
		<label>--</label>
	   <!--{/if}-->
	  </p>
	</div>
	<!--{/if}-->
  </div>
