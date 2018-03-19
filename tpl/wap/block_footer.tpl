<div class="footer-about"<!--{if $menu_id == 'home'}--> style="border-top:none;" <!--{/if}-->>
  <span onclick="window.location.href='<!--{$wapfile}-->?c=index&a=about';">关于我们</span> | <span onclick="window.location.href='<!--{$wapfile}-->?c=index&a=contact';">联系我们</span> | <span onclick="window.location.href='<!--{$wapfile}-->?c=index&a=clause';">用户条款</span> | <span onclick="window.location.href='<!--{$wapfile}-->?c=index&a=payment';">付款方式</span><br />
  &copy;<!--{$config.sitename}--> 版权所有
</div>
<div style="height:55px;"></div>
<div class="oe_footerbar">
  <dl class="dl_1 <!--{if $menu_id == 'index'}--> current<!--{/if}-->" onclick="goUrl('<!--{$wapfile}-->');">
    <dt><i class="iconfont">&#xe822;</i></dt>
    <dd>首页</dd>
  </dl>
  <dl class="dl_2 <!--{if $menu_id == 'user'}--> current<!--{/if}-->" onclick="goUrl('<!--{$wapfile}-->?c=user');">
    <dt><i class="iconfont">&#xe60c;</i></dt>
    <dd>会员</dd>
  </dl>
  <dl class="dl_3 <!--{if $menu_id == 'party'}--> current<!--{/if}-->" onclick="goUrl('<!--{$wapfile}-->?c=party');">
    <dt><i class="iconfont">&#xe61e;</i></dt>
    <dd>活动</dd>
  </dl>
  <!--{if $login.status == '1'}-->
  <!--{assign var="new_msg" value=<!--{count mod='user' type='newmessage' value=$login.info.userid}-->}-->
  <!--{else}-->
  <!--{assign var="new_msg" value=<!--{count mod='user' type='newmessage' value=0}-->}-->
  <!--{/if}-->
  <dl class="dl_3 <!--{if $menu_id == 'message'}--> current<!--{/if}-->" onclick="goUrl('<!--{$wapfile}-->?c=cp_message');">
    <dt>
	  <i class="iconfont">&#xe7c1;</i><!--{if $new_msg > 0}--><em></em><!--{/if}-->
	</dt>
    <dd>信件</dd>
  </dl>
  <dl class="dl_4 <!--{if $menu_id == 'cp'}--> current<!--{/if}-->" onclick="goUrl('<!--{$wapfile}-->?c=cp');">
    <dt>
      <i class="iconfont">&#xe6c7;</i>
    </dt>
    <dd>我的</dd>
  </dl>
</div>