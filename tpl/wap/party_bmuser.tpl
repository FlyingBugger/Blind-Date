<input type="hidden" name="child_page" id="child_page" value="1" />
<input type="hidden" name="child_reqs_url" id="child_reqs_url" value="<!--{$oefile}-->&c=<!--{$c}-->&a=bmlist&partyid=<!--{$partyid}-->&datatype=json" />
<input type="hidden" name="child_json_box" id="child_json_box" value="party_bmlist_json_data" />

<div class="hd">
  <span f="but_close_partybmuser" class="cursor"><i class="iconfont">&#xe643;</i></span>
  <p>报名会员</p>
</div>
<div class="bd" id="party_bmlist_json_data">

</div>
<div class="clear"></div>

<div class="more_page cursor child_more_page" f="but_child_loadmore_page" style="margin-top:10px;display:none;">
  <span>点击下一页</span>
  <p style="display:none;"><img src="<!--{$wapskin}-->images/page_loading.gif" /></p>
</div>
