<div class="oe_editinput">
  <div class="hd">(活动)申请退款</div>
  <div class="bd">
    <ul>
	  <li class="text">
	    <em>可退金额</em>
	    <span class="name">￥<!--{doubleval($party.paymoney)}-->元</span><em>（退回当前账户）</em>
	  </li>

    </ul>
  </div>
  <div class="btn">
    <span class="span_1 cursor" f="but_save_apprefund" data-id="<!--{$party.bmid}-->" data-rz="<!--{$login.info.idrz}-->">确定</span>
    <span class="span_2 cursor" f="but_close_apprefund">取消</span>
  </div>
</div>
