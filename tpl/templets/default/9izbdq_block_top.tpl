<div class="nav0">
<div class="oe_top">
  <div class="oe_topcon">
    <div class="left">欢迎来到<!--{$config.sitename}--></div>
    <div class="right drop">
      <div class="login">
        <!--{if $login.status == '0'}-->
        <a class="a_1" href="javascript:;" onclick="artbox_loginbox();" class="alogin"  rel="nofollow">登录</a><a  rel="nofollow" class="a_2" href="<!--{$appfile}-->?c=passport&a=reg" class="areg">注册</a>
        <!--{else}-->
        欢迎您：
        <!--{if !empty($login.info.levelimg)}-->
        <!--{$login.info.levelimg}--><!--{$login.username}-->(ID:<!--{$login.userid}-->) <span><!--{$login.info.groupname}--></span>
        <!--{else}-->
        <!--{$u.levelimg}--><!--{$login.username}-->(ID:<!--{$login.userid}-->) <span><!--{$u.groupname}--></span>
        <!--{/if}-->
        <!--{if $login.info.integrity == "0"}-->
        <a href="<!--{$urlpath}-->index.php?c=passport&a=perfect">点击这里激活帐号</a>&nbsp;&nbsp;
        <a href="<!--{$urlpath}-->index.php?c=passport&a=logout">退出登录</a> 
        <!--{else}-->
        <a href="<!--{$urlpath}-->usercp.php">会员中心</a> | <a href="<!--{$urlpath}-->index.php?c=home&uid=<!--{$login.userid}-->">我的主页</a> | <a href="<!--{$urlpath}-->index.php?c=passport&a=logout">退出登录</a> 
        <!--{/if}-->
        <!--{/if}-->
      </div>
      <dl class="cin">
        <dt><i></i>手机版</dt>
        <dd class="sub">
          <img src="<!--{$urlpath}--><!--{$config.mobileqr}-->" width="120px" />
          <p>扫一扫 手机交友</p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="oe_nav">
  <div class="oe_navcon">
    <div class="logo">
      <a href="<!--{$urlpath}-->index.php"><img class="logo" src="<!--{$config.logo}-->"  alt="<!--{$config.sitename}-->" /></a><img class="line" src="<!--{$skinpath}-->images/line.png" alt="" />
      <div class="clear"></div>
    </div>
    <div class="menu">
      <ul>
        <li<!--{if $menuid=='index'}--> class='current first'<!--{/if}-->><a href="<!--{$urlpath}-->">首页</a></li>
        <li<!--{if $menuid=='user'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=user">会员</a> </li>
        <li<!--{if $menuid=='party'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=party">活动</a> </li>
        <li<!--{if $menuid=='diary'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=diary">心情日记</a></li>
		<li<!--{if $menuid=='weibo'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->usercp.php?c=weibo">微心情</a></li>
		<li<!--{if $menuid=='case'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=case">成功案例</a></li>
        <li<!--{if $menuid=='safety'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=safety">防骗中心</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
</div>
<div style="height:140px;"></div>
