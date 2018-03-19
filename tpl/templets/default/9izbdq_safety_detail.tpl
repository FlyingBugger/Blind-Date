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
        <div class="info_content">
          <h1><!--{$safety.title}--></h1>
          <div class="des">
            发表时间：<!--{$safety.addtime|date_format:"%m-%d %H:%M"}-->&nbsp;&nbsp;&nbsp;&nbsp;浏览：<!--{$safety.hits}-->
          </div>
          <div class="bd">
            <!--{$safety.content}--> 
          </div>
          <div class="share">
		   上一篇：<!--{$previous_item}--><br>
		   下一篇：<!--{$next_item}-->
	      </div>
        </div>
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