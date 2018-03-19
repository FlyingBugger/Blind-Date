<!--{assign var='menuid' value='diary'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
<div class="oe_diary_list">
  <div class="left">
    <!--{if empty($diary)}-->
    <div class="no_data">
      <p class="p_1"><span></span></p>
      <p class="p_2">没有符合条件的信息</p>
    </div>
    <!--{else}-->
    <!--{foreach $diary as $volist}-->
    <dl>
      <dt>
        <span><img src="<!--{$volist.avatar}-->" alt="" /></span>
      </dt>
      <dd>
        <h3><a href="<!--{$volist.url}-->" class="tit" target="_blank" title="<!--{$volist.title}-->">  <!--{$volist.title}--> </a> <span>[<!--{$volist.catname}-->]</span></h3>
        <p class="text">
          <!--{$volist.content|filterhtml:80}-->
        </p>
        <p class="time">
          <span>【<a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a>】 <i></i><!--{$volist.timeline|date_format:"%Y-%m-%d"}--></span>
        </p>
      </dd>
      <div class="clear"></div>
    </dl>
    <!--{/foreach}-->          
    <!--{/if}-->
    <!--{if !empty($showpage)}-->
      <div class="pagecode"><!--{$showpage}--></div>
	<!--{/if}-->
  </div>
  <div class="right">
    <!--{assign var='diarycatlist' value=vo_list("mod={diarycat}")}-->
    <!--{if !empty($diarycatlist)}-->
    <div class='listtype'>
      <a href="<!--{$appfile}-->?c=diary&a=list"<!--{if $cid==0}--> class='current'<!--{/if}-->>全部日记</a> 
      <!--{foreach $diarycatlist as $val}-->
      <a href="<!--{$val.url}-->"<!--{if $cid==$val.catid}--> class='current'<!--{/if}-->><!--{$val.catname}--></a>
      <!--{/foreach}-->
    </div>
    <!--{/if}-->
    <div class="hot_diary">
      <h3><i>热门日记</i></h3>
      <ul>
        <!--{assign var='hotdiary' value=vo_list("mod={diary} orderby={v.hits DESC} num={10}")}-->
        <!--{foreach $hotdiary as $volist}-->
        <li><i></i><a target="_blank" href="<!--{$volist.url}-->"><!--{$volist.title}--></a> </li>
        <!--{/foreach}-->
      </ul>
    </div>
  </div>
  <div class="clear"></div>
</div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>