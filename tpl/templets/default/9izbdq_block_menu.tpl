<div id="header">
  <div class="n_top">
    <div class="nn_top">
      <div class="n_logo"> 
        <a href="<!--{$urlpath}-->index.php"><img class="logo" src="<!--{$config.logo}-->"  alt="<!--{$config.sitename}-->" /></a><img class="line" src="<!--{$skinpath}-->themes/images/n/line.png" alt="" />
      </div>
      <div class="text">
        <p class="p_1">
          <a href="<!--{$urlpath}-->index.php">实名婚恋</a>
        </p>
        <p class="p_2">
          <a href="<!--{$urlpath}-->index.php">诚信认证联盟开创者！</a>
        </p>
      </div>
      <div class="oe_menu">
        <ul>
          <li<!--{if $menuid=='index'}--> class='current first'<!--{/if}-->><a href="<!--{$urlpath}-->">首页</a></li>
          <li<!--{if $menuid=='user'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=user">搜索会员</a> </li>
          <li<!--{if $menuid=='diary'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=diary">心情日记</a></li>
		  <li<!--{if $menuid=='weibo'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->usercp.php?c=weibo">微心情</a></li>
		  <li<!--{if $menuid=='case'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=case">成功案例</a></li>
          <li<!--{if $menuid=='safety'}--> class='current'<!--{/if}-->><a href="<!--{$urlpath}-->index.php?c=safety">防骗中心</a></li>
          <!--{if $login.status=='0'}-->
          <li class="logreg">
            <a href="<!--{$appfile}-->?c=passport&a=reg" class="areg">注册</a>
            <a href="javascript:;" onclick="artbox_loginbox();" class="alogin">登录</a>
          </li>
          <!--{else}-->
		  <!--{assign var="notread_nums" value=<!--{count mod="user" type="newmessage" value=$login.info.userid}-->}-->
          <li  f="but_open_news_box" class="headimg">
		    <!--{if $notread_nums > 0}-->
            <i></i>
			<!--{/if}-->
		    <span class="head">
			  <a href="<!--{$urlpath}-->usercp.php">
			  <img src="<!--{$login.info.avatar}-->" /></a>
             </span>
             <span class="name"><!--{$login.info.name}--></span>
			 <div class="drop" style="display:none;">
				<a href="<!--{$urlpath}-->usercp.php">会员中心</a>
				<a href="<!--{$urlpath}-->usercp.php?c=vip">升级VIP</a>
				<a href="<!--{$urlpath}-->usercp.php?c=profile">完善资料</a>
				<a href="<!--{$urlpath}-->usercp.php?c=message">信件
				<!--{if $notread_nums > 0}-->
				<em><!--{$notread_nums}--></em>
				<!--{/if}-->
				</a>
				<a href="<!--{$urlpath}-->index.php?c=passport&a=logout">退出登录</a>
		    </div>
          </li>
          <!--{/if}-->
        </ul>
      </div>
    </div>
  </div>
</div>
<div style="height:102px;"></div>
<script type="text/javascript">
  $(document).on("mouseover", "[f='but_open_news_box']", function(){
    if ($(this).find(".drop").css("display") == "none") {
	   $(this).find(".drop").show();
	 }
    });
    $(document).on("mouseout", "[f='but_open_news_box']", function(){
    if ($(this).find(".drop").css("display") == "block") {
	   $(this).find(".drop").hide();
	 }
    });
</script>