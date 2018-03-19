<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<style type="text/css">
  body{background:#EDEFF5;}
</style>
<!--{assign var='menuid' value='safety'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<div id="page-index" class="page">
  <div class="oe_main">
    <div class="oe_safety">
      <!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_safety_search.tpl"}-->
      <div class="left">
        <div class="title">
          <ul>
            <li><a href="<!--{$urlpath}-->index.php?c=blackuser">黑名单</a></li>
            <li class="current"><a href="<!--{$urlpath}-->index.php?c=safety">防骗文章</a></li>
          </ul>
        </div>
        <div class="_safety_article">
          <!--{if empty($safety)}-->
		  <div class="no_data">
            <p class="p_1"><span></span></p>
            <p class="p_2">没有符合条件的信息</p>
          </div>
		  <!--{else}-->
          <!--{foreach $safety as $volist}-->
          <dl <!--{if $volist.hasimg == '1'}--> class="current" <!--{/if}-->>
            <dt><h3><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></h3></dt>
            <dd>
              <!--{if $volist.hasimg == '1'}-->
              <p class="img">
               <a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbimg}-->" /></a>
              </p>
              <!--{/if}-->
              <p class="text"> 
                <!--{$volist.content|filterhtml:100}-->
              </p>
              <p class="time">
                发布人：<!--{$volist.author}--> &#12288;
                时间：<!--{$volist.addtime|date_format:"%Y-%m-%d"}-->
                <span class="span_1"></span>浏览：<!--{$volist.hits}-->
              </p>
              <div class="clear"></div>
            </dd>
            <div class="clear"></div>
          </dl>
          <!--{/foreach}-->
          <!--{/if}-->
          </div>
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
        <div class="hot_info">
          <h3><span>热门防骗攻略</span></h3>
          <!--{assign var='hotinfo' value=vo_list("mod={safety} num={10}")}-->
          <!--{foreach $hotinfo as $volist}-->
          <ul>
            <li><i></i><a href="<!--{$volist.url}-->"><!--{$volist.title}--></a></li>
          </ul>
          <!--{/foreach}-->
        </div>
        <div class="oe_safety_info">
          <div class="hd">如何举报不良会员</div>
          <div class="bd">
             您可以在以下位置对于不法用户进行举报，并在举报时尽量提供相关私信，以便审核人员尽快处理。<br>
            1、该会员的个人主页、资料页<br>
            2、信件中心和该会员的聊天记录；
            <p>对于被举报会员，我们将在认定后对其作出封禁帐号的处理。</p><br>
          </div>
        </div>
      </div>
	  <div class="clear"></div>
    </div>
     
  </div>
</div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>