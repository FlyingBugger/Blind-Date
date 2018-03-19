<!--{assign var='menuid' value='party'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<style type="text/css">
body{background:#f0f0f0;}
</style>
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}--> 
<div class="oe_party_detail">
  <h1 class="title"><!--{if $party.moneyman==0 && $party.moneylady==0}--><span></span><!--{/if}--><!--{$party.title}--></h1>
  <div class="left">
    <div class="hd"><img src="<!--{$party.drawimg}-->" alt="" />
      <!--{if $party.endbmtime<time()}--> 
      <span class="ico current"></span>
      <!--{else}-->
      <span class="ico"></span>
      <!--{/if}-->
    </div>
    <div class="bd">
      <h3><span></span>活动详情</h3>
      <div class="num">
        <p class="p_3">
            <span>活动时间：</span><!--{$party.starttime|date_format:"Y-m-d H:i"}--> - <!--{$party.endtime|date_format:"Y-m-d H:i"}-->
        </p>
        <!--{if !empty($party.address)}-->
          <p class="p_3"><span>详细地址：</span><!--{$party.address}--></p>
        <!--{/if}-->
        <!--{if !empty($party.traffic)}-->
          <p class="p_3"><span>交通线路：</span><!--{$party.traffic}--></p>
        <!--{/if}-->
      </div>
      <div class="bdcon">
          <!--{$party.content|nl2br}-->
      </div>
      <div class="bdliu">
        <h4><i></i>活动流程</h4>
        <dl>
          <dt><span></span></dt>
          <dd>
            <span>01</span>
            <p>活动报名</p>
          </dd>
        </dl>
        <dl>
          <dt><span></span></dt>
          <dd>
            <span>02</span>
            <p>支付费用</p>
          </dd>
        </dl>
        <dl>
          <dt><span></span></dt>
          <dd>
            <span>03</span>
            <p>准时参加活动</p>
          </dd>
        </dl>
        <dl>
          <dt><span></span></dt>
          <dd>
            <span>04</span>
            <p>活动结束</p>
          </dd>
        </dl>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="right">
    <div class="oe_partyma">
      <p class="p_1">微信扫码，快速报名</p>
      <p class="p_2"><img src="<!--{$urlpath}-->index.php?c=scan&a=scan&id=<!--{$party.partyid}-->&mod=party&size=7" alt="" /></p>
      <div class="numm">
        <p class="p_3"><span></span>男：<!--{$party.limitman}-->人(已报名<b> <!--{$party.bmmans}--> </b>人)</p>
        <p class="p_3"><span></span>女：<!--{$party.limitlady}-->人(已报名<b> <!--{$party.bmladys}--> </b>人)</p>
        <!--{if $party.otherbms > 0}-->
        <p class="p_3"><span>线下报名：</span><b> <!--{$party.otherbms}--> </b>人</p>
        <!--{/if}-->
        <p class="p_3"><span>截止报名：</span><font color="red"><!--{$party.endbmtime|date_format:"Y-m-d"}--><!--{if $party.endbmtime<time()}--> </font><font color="red">（报名结束）</font><!--{/if}--></p>
     </div>

      <div class="btn">
         <input type="hidden" name="partyid" id="partyid" value="<!--{$party.partyid}-->">
        <!--{if $login.status=='0'}-->
          <label><a href="<!--{$urlpath}-->index.php?c=passport&a=login">查看已报名会员</a></label>
        <!--{else}-->
          <label><a href="javascript:;"  f="but_open_bmuser">查看已报名会员</a></label>
        <!--{/if}-->
        <!--{if $party.bm == '0'}-->
          <!--{if $login.status=='0'}-->
          <span onclick="location.href='<!--{$urlpath}-->index.php?c=passport&a=login'">立即报名</span>
          <!--{else}-->
          <span f="but_open_partybm" data-id="<!--{$party.partyid}-->">立即报名</span>
          <!--{/if}-->
        <!--{elseif $party.bm == '1'}-->
        <span class="current">您已报名</span>
        <!--{elseif $party.bm == '2'}-->
        <span class="current">已结束</span>
        <!--{elseif $party.bm == '3'}-->
        <span class="current">名额已满</span>
        <!--{elseif $party.bm == '4'}-->
        <span class="span_1">已报名，待付款</span>
        <!--{elseif $party.bm == '5'}-->
          <span class="current">已报名，待审核</span>
        <!--{elseif $party.bm == '6'}-->
          <span class="current">已报名，审核不通过</span>
        <!--{/if}-->
      </div>
    </div>

    <!--{assign var="baidu_map_key" value="<!--{$config.baidumap_key}-->"}-->
    <!--{if !empty($baidu_map_key)}-->
    <div class="oe_partymap">
      <h3><span></span>活动地点</h3>
        <input type="hidden" name="maplng" id="maplng" value="<!--{$party.maplng}-->" class="input-150" />
        <input type="hidden" name="maplat" id="maplat" value="<!--{$party.maplat}-->" class="input-150" />
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<!--{$baidu_map_key}-->"></script>
        <script type="text/javascript" src="<!--{$urlpath}-->tpl/static/map/oelove.map.js"></script>
        <script type="text/javascript">
            $(function(){
                _initOEmap();//初始化
            });
        </script>
      <div class="mapcon" id="oe_map">
        
      </div>
    </div>
    <!--{/if}-->
    <!--{assign var="time" value=time()}-->
    <!--{assign var="partylist" value=vo_list("mod={party} where={v.endtime>$time AND v.partyid<><!--{$party.partyid}-->} num={5} orderby={v.partyid DESC}")}-->
    <!--{if !empty($partylist)}-->
    <div class="oe_hotparty">
      <h3><span></span>最新活动</h3>
      <!--{foreach $partylist as $volist}-->
      <dl>
        <dt><a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbimg}-->" /></a></dt>
        <dd>
          <h4><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h4>
          <p>活动时间：<!--{$volist.starttime|date_format:"Y-m-d"}--></p>
        </dd>
      </dl>
        <!--{/foreach}-->
    </div>
    <!--{/if}-->

  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript" src="<!--{$skinpath}-->js/party.js?<!--{time()}-->"></script>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>