<!--{assign var='menuid' value='safety'}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->

<div id="page-index" class="page">
  <div class="oe_main">
    <div class="oe_safety">
      <!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_safety_search.tpl"}--> 
      <div class="left">
        <div class="title">
          <ul>
            <li class="current"><a href="<!--{$urlpath}-->index.php?c=blackuser">黑名单</a></li>
            <li><a href="<!--{$urlpath}-->index.php?c=safety">防骗文章</a></li>
          </ul>
        </div>
        <div class="_safaty_list">
          <dl>
            <dt> 
              <span class="span_1">头像</span> <span class="span_2">昵称</span> <span class="span_3">基本信息</span> <span class="span_4">查封原因</span> <span class="span_5">   查封时间</span>
              <div class="clear"></div>
            </dt>
            <!--{if empty($blackuser)}-->
            <dd>
            <div class="no_data">
              <p class="p_1"><span></span></p>
              <p class="p_2">没有符合条件的信息</p>
            </div>
            </dd>
            <!--{else}--> 
            <!--{foreach $blackuser as $volist}-->
            <dd> <span class="span_1"><em> <img class="img" src="<!--{$volist.avatarurl}-->" /></em></span> <span class="span_2"><!--{$volist.username}--></span> <span class="span_3"> 
              <!--{if $volist.gender == '1'}-->男<!--{else}-->女<!--{/if}-->/<!--{$volist.age}-->岁/ 
              <!--{area type="text" value=$volist.provinceid}--> <!--{area type="text" value=$volist.cityid}--> 
              </span> <span class="span_4"> 
              <!--{if $volist.blacktype > 0}--> 
              <!--{hook mod="var" item="blacktype" type="text" value=$volist.blacktype}--> 
              <!--{else}--> 
              资料审核不通过 
              <!--{/if}--> 
              </span> <span class="span_5"><!--{$volist.blacktime|date_format:"%Y-%m-%d %H:%M"}--></span>
              <div class="clear"></div>
            </dd>
            <!--{/foreach}--> 
            <!--{/if}-->
          </dl>
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
          <h3>热门防骗攻略</h3>
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