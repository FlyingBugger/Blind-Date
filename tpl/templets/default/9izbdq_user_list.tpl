<!--{assign var='menuid' value='user'}--> 
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
<div class="oe_userlist">
  <div class="oe_userlistcon">
    <!--{if empty($user)}-->
    <div class="no_data">
      <p class="p_1"><span></span></p>
      <p class="p_2">没有符合条件的信息</p>
    </div>
    <!--{else}-->
    <!--{foreach $user as $volist}-->
    <dl>
      <dt><a target="_blank" href="<!--{$volist.homeurl}-->"><!--{avatar width='110' height='135' css='img100' value=$volist.avatarurl}--></a> </dt>
      <dd>
        <h3><a target="_blank" href="<!--{$volist.homeurl}-->"><!--{$volist.username}--></a> 
          <!--{if $volist.groupid > 1 && $volist.vipenddate>$time}-->
          <!--{$volist.levelimg}-->
          <!--{/if}-->
        </h3>
        <p><!--{$volist.age}-->岁 <!--{area type='text' value=$volist.provinceid}--> <!--{area type='text' value=$volist.cityid}--></p>
        <p class="p_1">
          <!--{$volist.monolog|filterhtml:20}-->
        </p>
        <p class="btn">
          <!--{if $login.status == '0'}-->
          <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_loginbox();">打招呼</a> 
          <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_loginbox();">写信件</a>
          <!--{else}-->
          <a class="btn_bt1 chat sayHiBtn" href="###" onclick="artbox_hi(<!--{$volist.userid}-->);">打招呼</a> 
          <a class="btn_bt2 mail sendEmailBtn" href="###" onclick="artbox_writemsg(<!--{$volist.userid}-->);">写信件</a>
          <!--{/if}-->
        </p>
      </dd>
      <div class="clear"></div>
    </dl>
	<!--{/foreach}-->
    <!--{/if}-->
    <div class="clear"></div>
    <!--{if !empty($showpage)}-->
      <div class="oe_page"><!--{$showpage}--></div>
    <!--{/if}-->
  </div>
</div>

<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>