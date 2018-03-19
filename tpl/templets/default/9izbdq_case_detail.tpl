<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{assign var='menuid' value='case'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<style type="text/css">
  body{background:#EDEFF5;}
</style>
  <!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
  <div class="oe_case_detail">
    <div class="left">
        <h1 class="title"><!--{$case.title}--></h1>
        <div class="des">
           状态：<span><!--{hook mod="var" item="casecat" type="text" value=$case.catid}--></span> 浏览：<!--{$case.hits}-->  时间：<!--{$case.addtime|date_format:"%Y-%m-%d"}-->
        </div>
        <div class="oe_casecon">
            <!--{$case.content}-->
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
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>