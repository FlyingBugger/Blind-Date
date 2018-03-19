<!--{include file="<!--{$uctplpath}-->block_head.tpl"}-->
<!--{include file="<!--{$uctplpath}-->block_top.tpl"}-->
<!--{assign var="cp_menuid" value="myparty"}-->
<div class="user_main">
  <div class="oe_bn"><span></span><a href="<!--{$ucfile}-->">会员中心</a> &gt;&gt; 我报名的活动</div>
  <!--{include file="<!--{$uctplpath}-->block_menu.tpl"}-->

  <div class="main_right">
    <div class="oe_tab_nv">
	    <ul>
		  <li class="tab_item current">我报名的活动</li>
	    </ul>
	  </div>
    <div class="myparty">
      <!--{if !empty($myparty)}-->
      <!--{foreach $myparty as $volist}-->
      <dl>
        <dt><a href="<!--{$volist.url}-->"> <img src="<!--{$volist.thumbimg}-->" /></a></dt>
        <dd>
          <h3><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h3>
          <p class="p_1">活动时间：  <!--{$volist.starttime|date_format:"Y-m-d H:i"}--> - <!--{$volist.endtime|date_format:"Y-m-d H:i"}--></p>
          <p class="p_2"><span><!--{$volist.bmmans+$volist.bmladys}--></span>人报名   男：<span> <!--{$volist.bmmans}--></span>  女<span> <!--{$volist.bmladys}--></span> </p>
          <p class="p_3">
            <!--{if $volist.status == '1'}-->
              <span class="span_2">报名成功，审核通过</span>
              <!--{elseif $volist.status == '2'}-->
              <span class="span_3">已取消报名</span>
              <!--{else}-->
              <span class="span_1">报名成功，等待审核</span>
              <!--{/if}-->
          </p>
        </dd>
        <div class="clear"></div>
      </dl>
 
      <!--{/foreach}-->
      <!--{else}-->
      <div class="no_data">
        <p class="p_1"><span></span></p>
        <p class="p_2">还没有报名任何活动</p>
        <p class="p_3"><a href="<!--{$urlpath}-->index.php?c=party">了解最新活动</a></p>
      </div>
      <!--{/if}-->
    </div>

	
	<div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div style="margin: 30px;"></div>
</div>
<!--//user_main End-->

<!--{include file="<!--{$uctplpath}-->block_footer.tpl"}-->
</body>
</html>
<script type="text/javascript">
//支付阅读
function read_payfee(id, type, page) {
	var umoney = <!--{$u.money}-->;
	var syspafee = <!--{$g.fee.viewmsgfee}-->;
	if (syspafee <= 0) {
		syspafee = 1;
	}
	if (parseFloat(umoney) < parseFloat(syspafee)) {
		$.dialog.tips("对不起，需要支付"+syspafee+"金币才能看这封信。如金币不足，请先充值。", 3);
		return false;
	}
	else {
		$.dialog({
			lock:true,
			title: '温馨提示',
			content: '确定使用'+syspafee+'个金币阅读这封信件吗？', 
			icon: 'warning',
			button: [
				{
					name: '确定',
					callback: function () {
						if (id > 0) {
							$.ajax({
								type: "POST",
								url: _ROOT_PATH + "usercp.php?c=message",
								cache: false,
								data: {a: "readpay", id: id, r:get_rndnum(8)},
								dataType: "json",
								beforeSend: function(XMLHttpRequest) {
									XMLHttpRequest.setRequestHeader("request_type", "ajax");
								},
								success: function(data) {
									var json = eval(data);
									var response = json.response;
									var msg = json.msg;
									if (response == '1') {
										//跳转到阅读页面
										window.location.href="<!--{$ucfile}-->?c=readmsg&a=read&id="+id+"&type="+type+"&page="+page+"";
									}
									else {
										//邮票失败
										if (msg.length>0) {
											$.dialog.tips(msg, 3);
										}
										else {
											$.dialog.tips("对不起，支付失败", 3);
										}
									}
								},
								error: function() {}
							});
						}

					}
				}, 
				{
					name: '取消'
				}
			]
		});
	}
}
</script>