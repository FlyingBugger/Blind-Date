<!--{assign var="menu_id" value="party"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="comm_search">
    <input type="hidden" name="s_catid" id="s_catid" value="<!--{$s_catid}-->" />
    <input type="hidden" name="s_type" id="s_type" value="<!--{$s_type}-->" />
	<input type="hidden" name="s_orderby" id="s_orderby" value="<!--{$s_orderby}-->" />
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">分类<i class="iconfont">&#xe65b;</i> <em></em></dt>
      <dd class="dd_1">
        <p class="<!--{if $s_catid == 0}-->current<!--{/if}--> cursor" f="but_sel_catid" data-id="0">全部</p>
        <!--{assign var="catlist" value=vo_list("mod={volistvar} where={partycat}")}--> 
        <!--{foreach $catlist as $val}-->
        <p class="cursor <!--{if $s_catid == $val.value}-->current<!--{/if}-->" f="but_sel_catid" data-id="<!--{$val.value}-->"><!--{$val.text}--></p>
        <!--{/foreach}--> 
      </dd>
    </dl>
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">地区<i class="iconfont">&#xe65b;</i><em></em></dt>
      <dd class="dd_2">
        <p class="area">
            <em>省/直辖市：</em>
            <input type="hidden" id="s_catid" name="s_catid" value="<!--{$s_catid}-->" >
            <!--{area type='dist1' name='s_area1' value=$s_area1 ajax='1' cname='s_area2' cajax='0' text='=不限='}-->
            <span id='s_area1' class='f_red'></span>

        </p>
        <p class="area"> <em>市/区：</em>
            <span id="json_s_area2">
                <!--{if $s_area1>0}-->
                <!--{area type='dist2' pvalue=$s_area1 cname='s_area2' cvalue=$s_area2 text='=不限='}-->
                <!--{else}-->
                <select name="s_area2" id="s_area2"><option value="">请选择</option></select>
                <!--{/if}-->
            </span>
        </p>
        <div class="clear"></div>
        <p class="p_1">
          <label f="but_confirm_search" class="cursor">确定</label>
        </p>
      </dd>
    </dl>
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">类型<i class="iconfont">&#xe65b;</i></dt>
      <dd class="dd_1">
        <p class=" <!--{if $s_type == 0}-->current<!--{/if}--> cursor" f="but_sel_type" data-type="0">全部</p>
        <p class="cursor <!--{if $s_type == 1}-->current<!--{/if}-->" f="but_sel_type" data-type="1">报名中</p>
        <p class="cursor <!--{if $s_type == 2}-->current<!--{/if}-->" f="but_sel_type" data-type="2">报名结束</p>
      </dd>
    </dl>
	<dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">排序<i class="iconfont">&#xe65b;</i></dt>
      <dd class="dd_1">
        <p class=" <!--{if $s_orderby == 0}-->current<!--{/if}--> cursor" f="but_sel_orderby" data-val="0">全部</p>
        <p class="cursor <!--{if $s_orderby == 1}-->current<!--{/if}-->" f="but_sel_orderby" data-val="1">最新报名</p>
        <p class="cursor <!--{if $s_orderby == 2}-->current<!--{/if}-->" f="but_sel_orderby" data-val="2">最新发布</p>
      </dd>
    </dl>
    <div class="clear"></div>
</div>
<div style="height:45px;"></div>

<div class="oe_party_list">
<!--{if empty($party)}-->
  <div class="no_data">
    <p class="p_1"><span><i class="iconfont">&#xe609;</i></span></p>
    <p class="p_2">没有相关信息</p>
    <p></p>
  </div>
<!--{else}-->
<!--{foreach $party as $volist}-->
<dl onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&a=detail&id=<!--{$volist.partyid}-->&<!--{$appurlitem}-->');">
  <dt><img src="<!--{$volist.thumbimg}-->" />
    <!--{if $volist.endbmtime > time()}-->
    <span class="iconfont"> </span>
    <!--{/if}-->
  </dt>
  <dd>
    <h3><!--{$volist.title}--></h3>
    <p><!--{$volist.starttime|date_format:"Y-m-d H:i"}--> 至 <!--{$volist.endtime|date_format:"Y-m-d H:i"}--></p>
    <p>报名截止时间：<!--{$volist.endbmtime|date_format:"Y-m-d H:i"}--></p>
    <!--{if $volist.endbmtime > time()}-->
    <p class="p_2"><span>我要报名</span></p>
    <!--{else}-->
    <p class="p_2"><span class="current">结束报名</span></p>
    <!--{/if}--> 
  </dd>
</dl>
<!--{/foreach}--> 
<!--{/if}-->

    <!--{if $pagecount > 1}-->
    <div class="oe_page">
        页次：<!--{$page}-->/<!--{$pagecount}-->
        <!--{if $prepage>0}-->
        <span onclick="goUrl('<!--{$wapfile}-->?c=party&<!--{$urlitem}-->&page=<!--{$prepage}-->');">上一页</span>
        <!--{/if}-->
        <!--{if $nextpage>0}-->
        <span onclick="goUrl('<!--{$wapfile}-->?c=party&<!--{$urlitem}-->&page=<!--{$nextpage}-->');">下一页</span>
        <!--{/if}-->
    </div>
    <!--//ShowPage End-->
    <!--{/if}-->
</div>  
<!-- 链接到我报名的活动 -->
<span class="myparty" onclick="goUrl('<!--{$wapfile}-->?c=myparty&a=list');">
  <i class="iconfont">&#xe664;</i>
</span>



<script src="<!--{$wapskin}-->js/party.js?<!--{time()}-->"></script>
<script src="<!--{$urlpath}-->tpl/static/js/ajax.js?<!--{time()}-->"></script>
<!--{include file="<!--{$waptpl}-->block_footer.tpl"}-->
</body>
</html>