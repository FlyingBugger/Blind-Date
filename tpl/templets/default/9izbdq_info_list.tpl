<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{assign var='menuid' value='info'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
  <div class="oe_main">
    <div class="oe_info">
      <div class="left">
        
        <!--{if empty($info)}-->
		<div class="no_data">
          <p class="p_1"><span></span></p>
          <p class="p_2">没有符合条件的信息</p>
        </div>
		<!--{else}-->
        <!--{foreach $info as $volist}-->
        <dl <!--{if $volist.thumbfiles !="/tpl/static/images/nopic_s.jpg"}--> class="current" <!--{/if}-->>
          <dt><h3><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h3></dt>
          <dd>
            <!--{if $volist.thumbfiles !="/tpl/static/images/nopic_s.jpg"}-->
            <p class="img">
              <a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbfiles}-->" /></a>
            </p>
            <!--{/if}-->
            <p class="text"> 
              <!--{$volist.content|filterhtml:100}-->
            </p>
            <p class="time">
              时间：<!--{$volist.addtime|date_format:"%Y-%m-%d"}-->
              <span class="span_1"></span>浏览：<!--{$volist.hits}-->
            </p>
            <div class="clear"></div>
          </dd>
          <div class="clear"></div>
        </dl>
        <!--{/foreach}-->
        <!--{/if}-->
        
        <!--{if !empty($showpage)}-->
      <div class="page1">
        <div class="pagecode">
		<!--{$showpage}-->
        </div>
        <div style="clear:both;"></div>
      </div>
	  <!--{/if}-->
       
      </div>
      <div class="right">
        <!--{assign var='infocatlist' value=vo_list("mod={infocat}")}-->
	    <!--{if !empty($infocatlist)}-->
        <div class='listtype'>
	      <a href="<!--{$appfile}-->?c=info&a=list"<!--{if $cid==0}--> class='listnow'<!--{/if}-->>全部文章</a> 
	      <!--{foreach $infocatlist as $val}-->
	      <a href="<!--{$val.url}-->"<!--{if $cid==$val.catid}--> class='listnow'<!--{/if}-->><!--{$val.catname}--></a>
	      <!--{/foreach}-->
	    </div>
	    <!--{/if}-->
        <div class="hot_info">
          <h3><span>热门资讯</span></h3>
          <!--{assign var='hotinfo' value=vo_list("mod={info} num={10}")}-->
          <!--{foreach $hotinfo as $volist}-->
          <ul>
            <li><i></i><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></li>
          </ul>
          <!--{/foreach}-->
        </div>
      </div>
        <div class="clear"></div>
    </div>
     
  </div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>