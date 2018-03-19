<div class="user_main_left">
  <div class="oe_index_uL_top">
    <div class="oe_index_uL_head">
	  <dl>
	    <dt>
		  <!--{if !empty($u.avatar)}--> 
		  <a href="<!--{$ucfile}-->?c=avatar"><img src="<!--{$urlpath}--><!--{$u.avatar}-->" title="设置头像" /></a>
		  <!--{else}-->
		  <a href="<!--{$ucfile}-->?c=avatar"><img src="<!--{$u.avatarurl}-->" title="设置头像" /></a>
		  <!--{/if}-->
		</dt>
		<dd>
		  <h2><!--{$u.levelimg}--><!--{$u.username}--></h2>
		  <h3><a href="<!--{$u.homeurl}-->" target="_blank">查看我的主页</a></h3>
		</dd>
		<div class="clear"></div>
	  </dl>
	  <div class="clear"></div>

    </div>
    <div class="oe_uL_rz">
      <div class="oe_uL_rz_name">
	  征友状态：
	  <!--{if $u.lovestatus == '1'}-->
	  进行中
	  <!--{else}-->
	  已关闭
	  <!--{/if}-->
	  <a href="<!--{$ucfile}-->?c=account&a=setstatus">修改</a>
	  </div>
      <div class="oe_uL_rz_con">
	    <img src="<!--{$ucpath}-->images/a1<!--{if $u.idnumberrz==0}-->_h<!--{/if}-->.png" title="<!--{if $u.idnumberrz==0}-->身份证未认证<!--{else}-->已身份证认证<!--{/if}-->" />
		<img src="<!--{$ucpath}-->images/a2<!--{if $u.emailrz==0}-->_h<!--{/if}-->.png" title="<!--{if $u.emailrz==0}-->邮箱未认证<!--{else}-->已邮箱认证<!--{/if}-->" />
		<img src="<!--{$ucpath}-->images/a3<!--{if $u.videorz==0}-->_h<!--{/if}-->.png" title="<!--{if $u.videorz==0}-->视频未认证<!--{else}-->已视频认证<!--{/if}-->" />
	   <a href="<!--{$ucfile}-->?c=certify">诚信认证</a>
	  </div>
    </div>
    <div class="oe_index_uL_jb">
      <ul>
        <li><span><a href="<!--{$ucfile}-->?c=money"><!--{doubleval($u.money)}--></a></span>我的金币</li>
        <li><span><a href="<!--{$ucfile}-->?c=points"><!--{doubleval($u.points)}--></a></span>我的积分</li>
        <div class="clear"></div>
      </ul>
    </div>
    <div class="mu_profile">
      <a href="<!--{$ucfile}-->?c=payment" class="a_1">在线充值</a>
      <a href="<!--{$ucfile}-->?c=profile" class="a_2">完善资料</a>
    </div>
  </div>
  <div class="oe_hr"></div>
  <div class="u_menu">
    <ul>
      <li<!--{if $cp_menuid=='vip'}--> class="current"<!--{/if}-->> <i class="ico_1"></i><a href="<!--{$ucfile}-->?c=vip">会员服务</a></li>

	  <!--{assign var="new_msg" value=<!--{count mod='user' type='newmessage' value=$u.userid}-->}-->
	  <!--{assign var="new_gift" value=<!--{count mod='user' type='newgift' value=$u.userid}-->}-->

      <li<!--{if $cp_menuid=='message'}--> class="current"<!--{/if}-->>
        <i class="ico_2"></i><a href="<!--{$ucfile}-->?c=message">信件</a> 
		<!--{if $new_msg > 0}-->
        <em><!--{$new_msg}--></em>
		<!--{/if}-->
      </li>
      <li<!--{if $cp_menuid=='gift'}--> class="current"<!--{/if}-->>
        <i class="ico_3"></i><a href="<!--{$ucfile}-->?c=gift">礼物</a>
		<!--{if $new_gift > 0}-->
        <em><!--{$new_gift}--></em>
		<!--{/if}-->
      </li>

      <li<!--{if $cp_menuid=='listen'}--> class="current"<!--{/if}-->><i class="ico_4"></i><a href="<!--{$ucfile}-->?c=listen">关注</a></li>
      <li<!--{if $cp_menuid=='visit'}--> class="current"<!--{/if}-->><i class="ico_5"></i><a href="<!--{$ucfile}-->?c=visitme">谁看过我</a></li>
      <li<!--{if $cp_menuid=='weibo'}--> class="current"<!--{/if}-->><i class="ico_6"></i><a href="<!--{$ucfile}-->?c=weibo">心情微博</a></li>
      <li<!--{if $cp_menuid=='diary'}--> class="current"<!--{/if}-->><i class="ico_7"></i><a href="<!--{$ucfile}-->?c=diary">日记</a></li>
      <li<!--{if $cp_menuid=='myparty'}--> class="current"<!--{/if}-->><i class="ico_10"></i><a href="<!--{$ucfile}-->?c=myparty">我报名的活动</a></li>
      <li<!--{if $cp_menuid=='extend' && $a=='connect'}--> class="current"<!--{/if}-->><i class="ico_8"></i><a href="<!--{$ucfile}-->?c=extend&a=connect">其它</a></li>
    </ul>
  </div>
  
  <div class="u_photo">
    <dl>
      <dt>
        <a href="<!--{$ucfile}-->?c=album&a=upload"><span></span></a>
      </dt>
      <dd>
        <a href="<!--{$ucfile}-->?c=album&a=upload"><b>上传美照</b><br>获取更多关注</a>
      </dd>
      <div class="clear"></div>
    </dl>
  </div>
  </div>
  <!--//user_main_left End-->