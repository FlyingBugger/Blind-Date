<!--{if !empty($jsondata)}-->

  <!--{foreach $jsondata as $volist}-->
  <dl>
	<dt><a href="<!--{$urlpath}-->index.php?c=home&uid=<!--{$volist.userid}-->" target="_blank"><img src="<!--{$volist.avatar}-->" /></a></dt>
	<dd>
	  <h4><!--{$volist.username}--></h4>
	  <p><!--{$volist.age}-->岁</p>
	</dd>
  </dl>
  <!--{/foreach}-->
<!--{else}-->
  <!--{if $page == "1"}-->
  <div class="no_data">
	<p class="p_1"><span></span></p>
	<p class="p_2">还没有会员报名哦！~</p>
  </div>
  <!--{/if}-->
<!--{/if}-->
