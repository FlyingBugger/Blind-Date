<!--{assign var='menuid' value='party'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}--> 
 <!--{assign var='ads' value=get_ads('party_banner')}-->
<!--{if !empty($ads)}-->
<div class="oe_party_banner"
  style="
  background:url(<!--{$ads.uploadfiles}-->) center top no-repeat;
  "
> </div>
<!--{/if}-->
<div class="oe_party_list">
  <div class="left">
    <div class="hd">
      <ul>

          <li <!--{if $s_catid == '0'}--> class="current"<!--{/if}-->>
            <a href="<!--{$urlpath}-->index.php?c=party&s_catid=0&s_area1=<!--{$s_area1}-->&s_area2=<!--{$s_area2}-->&s_orderby=<!--{$s_orderby}-->">全部</a>
          </li>
          <!--{assign var="partycatlist" value=vo_list("mod={volistvar} where={partycat}")}-->
          <!--{foreach $partycatlist as $val}-->
          <li <!--{if $val.value==$s_catid}-->class="current" <!--{/if}-->>
            <a href="<!--{$urlpath}-->index.php?c=party&s_catid=<!--{$val.value}-->&s_area1=<!--{$s_area1}-->&s_area2=<!--{$s_area2}-->&s_orderby=<!--{$s_orderby}-->"><!--{$val.text}--></a>
          </li>
          <!--{/foreach}-->
      </ul>
      
      <div class="oe_psearch">
          <form id="party_form" action="<!--{$urlpath}-->index.php" method="get">
              <input type="hidden" id="c" name="c" value="party" >
          <input type="hidden" id="s_catid" name="s_catid" value="<!--{$s_catid}-->" >
              <!--{area type='dist1' name='s_area1' value=$s_area1 ajax='1' cname='s_area2' cajax='0' text='=不限='}-->
            <span id='s_area1' class='f_red'></span>
            <span id="json_s_area2">
                <!--{if $s_area1>0}-->
                <!--{area type='dist2' pvalue=$s_area1 cname='s_area2' cvalue=$s_area2 text='=不限='}-->
                <!--{else}-->
                <select name="s_area2" id="s_area2"><option value="">请选择</option></select>
                <!--{/if}-->
            </span>
            排序：
            <select name="s_orderby" id="s_orderby">
                <option value="">--</option>
                <option value="1" <!--{if $s_orderby == 1}-->selected<!--{/if}-->>最新报名</option>
                <option value="2" <!--{if $s_orderby == 2}-->selected<!--{/if}-->>最新发布</option>
            </select>
          </form>
      </div>
    </div>
    <div class="bd">
      <!--{if empty($party)}-->
       <div class="no_data">
          <p class="p_1"><span></span></p>
          <p class="p_2">没有符合条件的信息</p>
        </div>
      <!--{else}-->
      <!--{foreach $party as $volist}-->
      <dl>
        <dt>
          <h3>
              <!--{if $volist.moneylady==0 && $volist.moneyman==0 }--><span></span><!--{/if}-->
              <a href="<!--{$volist.url}-->"><!--{$volist.title}--></a>
          </h3>
          <div class="img">
            <a href="<!--{$volist.url}-->" class="head"><img src="<!--{$volist.drawimg}-->" /></a>
            <p>
              活动时间：<!--{$volist.starttime|date_format:"Y-m-d H:i"}--> 至 <!--{$volist.endtime|date_format:"Y-m-d H:i"}--> <label>已报名<!--{$volist.bmladys+$volist.bmmans+$volist.otherbms}-->人</label>
            </p>
            <!--{if $volist.endbmtime>time()}--> 
            <span class="ico"> </span>
            <!--{else}-->
            <span class="ico current"> </span>
            <!--{/if}-->
          </div>
        </dt>
        <dd>
          <p class="p_1"><!--{$volist.content|filterhtml:168}--></p>
          <p class="btn">
            截止报名：<!--{$volist.endbmtime|date_format:"Y-m-d"}-->    <label><i></i><!--{$volist.address}--></label> 
            <!--{if $volist.endbmtime<time()}--> 
            <a href="<!--{$volist.url}-->" class="current">查看详情</a>
            <!--{else}-->
            <a href="<!--{$volist.url}-->">我要报名</a>
            <!--{/if}-->
          </p>
        </dd>
      </dl>
      <!--{/foreach}--> 
      <!--{/if}-->
    </div>
    <!--{if !empty($showpage)}-->
      <div class="oe_page"><!--{$showpage}--></div>
    <!--{/if}-->
  </div>
  <div class="right">
    <div class="oe_newbm">
      <div class="hd">最新报名</div>
      <div class="bd">
        <div class="line"></div>
        <!--{assign var="partybm" value=vo_list("mod={partybm} num={5}")}-->
        <!--{foreach $partybm as $val}-->
        <dl>
          <dt>
              <span><i></i>
                <!--{$val.trantime}-->
              </span>
          </dt>
          <dd>
            <a href="#" class="head"><img src="<!--{$val.thumbimg}-->" alt="" /></a>
            <h3><!--{$val.username}--></h3>
            <p>报名了活动<a href="<!--{$val.url}-->"><!--{$val.party.title}--></a>;</p>
          </dd>
        </dl>
        <!--{/foreach}-->
      </div>
    </div>
    <div class="oe_partyhelp">
      <div class="hd">活动帮助</div>
      <div class="bd">
        <dl>
          <dt>1</dt>
          <dd>
            <h3>报名活动</h3>
            <p>找到感兴趣的活动，提交报名信息；</p>
          </dd>
        </dl>
        <dl>
          <dt>2</dt>
          <dd>
            <h3>支付费用</h3>
            <p>在线支付活动费用，也可以参加活动时现场支付；</p>
          </dd>
        </dl>
        <dl>
          <dt>3</dt>
          <dd>
            <h3>准时参加活动</h3>
            <p>现场签到，参加相亲活动；</p>
          </dd>
        </dl>
        <dl>
          <dt>4</dt>
          <dd>
            <h3>活动结束</h3>
            <p>有心仪的对象，进一步交往。</p>
          </dd>
        </dl>
      </div>
    </div>
    
    <div class="oe_contact">
      <div class="hd">联系我们</div>
      <div class="bd">
        <dl>
          <dt><span><i class="ico_1"></i>电话：</span></dt>
          <dd><!--{$config.sitetel}--></dd>
        </dl>
        <dl>
          <dt><span><i class="ico_2"></i>邮箱：</span></dt>
          <dd><!--{$config.siteemail}--></dd>
        </dl>
        <dl>
          <dt><span><i class="ico_3"></i>地址：</span></dt>
          <dd>
           <!--{assign var="html1" value="<!--{label name="address"}-->"}-->
            <!--{if empty($html1)}-->
            请在后台添加自定义HTML标签：address
            <!--{else}-->
            <!--{$html1}-->
            <!--{/if}-->
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>

<script>
    function jumpArea() {
        $s_area1 = $("#s_area1").val();
        $s_area1 = parseInt($s_area1);
        $s_area2 = $("#s_area2").val();
        if (typeof($s_area2) == "undefined") {
            $s_area2 = 0;
        }
        else {
            $s_area2 = parseInt($s_area2);
        }
        if ($s_area2 > 0) {
            $("#party_form").submit();
        }
    }
    $(function(){
        //地区
        $(document).on("change", "#s_area2", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
        //排序
        $(document).on("change", "#s_orderby", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
    });

</script>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>