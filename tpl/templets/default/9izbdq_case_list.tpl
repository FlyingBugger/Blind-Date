<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{assign var='menuid' value='case'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<style type="text/css">
  body{background:#EDEFF5;}
</style>
<div class="oe_case_list">
  <div class="left">
  <!--{if empty($case)}-->
		<div class="no_data">
          <p class="p_1"><span></span></p>
          <p class="p_2">没有符合条件的信息！</p>
        </div>
		<!--{else}-->
        <div class="oe_datalist">
          <!--{foreach $case as $volist}-->
          <dl class="dl_<!--{$volist.i}--> nLi <!--{if $volist.i==1}--> on <!--{/if}-->">
            <dt><a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbimg}-->" /></a></dt>
            <dd class="sub" <!--{if $volist.i>1}--> style="display:none;" <!--{/if}-->>
              <p class="p_1"></p>
              <div>
                <h3><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h3>
                <p>目前状态：<!--{hook mod="var" item="casecat" type="text" value=$volist.catid}--></p>
                <p class="p_2"><a href="<!--{$volist.url}-->">查看详情</a></p>
              </div>
            </dd>
          </dl>
          <!--{/foreach}-->
          <!--{/if}-->
          <div class="clear"></div>
          <!--{if !empty($showpage)}-->
            <div class="pagecode">
		      <!--{$showpage}-->
            </div>
            <!--{/if}-->
        </div>
        
      </div>
      <div class="right">
        <div class="oe_rightcase">
          <h3><span>幸福瞬间</span></h3>
          <div class="oe_rightcasecon">
          <!--{assign var='case_right' value=vo_list("mod={case} num={10}")}-->
          <!--{foreach $case_right as $volist}-->
          <ul>
            <li>
              <p class="img">
                <a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbimg}-->" /></a>
              </p>
              <h4><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h4>
            </li>
          </ul>
          <!--{/foreach}-->
          </div>
        </div>
      </div>
        <div class="clear"></div>
</div>
     
<script type="text/javascript">
  jQuery(".oe_case_list").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
</script>

<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>