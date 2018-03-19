<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{assign var='menuid' value='info'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<div id="page-index" class="page">
  <div class="oe_main">
    <!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
    <div class="oe_info">
      <div class="left">
        <div class="info_content">
          <h1><!--{$info.title}--></h1>
          <div class="des">
            发表时间：<!--{$info.addtime|date_format:"%m-%d %H:%M"}-->&nbsp;&nbsp;&nbsp;&nbsp;浏览：<font id='json_hits'></font>
          </div>
          <div class="bd">
            <!--{$info.content}--> 
          </div>
          <div class="share">
		   上一篇：<!--{$previous_item}--><br>
		   下一篇：<!--{$next_item}-->
	      </div>
          <div class="related_content">
		<div class="related_title">相关文章</div>
		<div class="related_w">
		  <!--{assign var='related' value=vo_list("mod={info} where={v.catid='<!--{$info.catid}-->' AND v.infoid!='<!--{$id}-->'} num={8}")}-->
		  <!--{foreach $related as $volist}-->
		  <div class="<!--{if $volist.i%2 == 2}-->related_wr<!--{else}-->related_wl<!--{/if}-->"> ▪ <a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></div>
		  <!--{/foreach}-->
		<div class="c"></div>
		</div>
	  </div>
        </div>
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
          <h3>热门资讯</h3>
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
</div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>
<script type='text/javascript'>
$(function(){
	update_hits('<!--{$id}-->', 'info', 'json_hits');
});
</script>