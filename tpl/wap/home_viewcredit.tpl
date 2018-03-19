    <div class="oe_safetycon" style="height:300px;">
      <h3>查询结果 <span style="cursor:pointer;" f="but_close_ajax_shadebox" data-tab="viewcredit" data-position="bottom"><i class="iconfont">&#xe627;</i></span></h3>
      <div class="oe_home_saftycon">
        <div class="div_1"><span><img src="<!--{$home.avatarurl}-->" /></span>
          <label>诚信星级：<i><!--{$home.star}--></i>星</label>
          <p>X表示被举报过</p>
        </div>
        <!--{if $power == '0'}-->
        <p class="no_pow">
          对不起，您没有查询权限<br />
          <a href="<!--{$urlpath}-->wap.php?c=vip">立即升级</a>
        </p>
        <!--{else}-->
        <div class="div_2">
          <p>
            <span>身份证</span>
            <!--{if !empty($home.idnumber)}-->
            <label<!--{if $idcard_flag == '1'}--> class="current"<!--{/if}-->><em class="iconfont">&#xe627;</em> <i class="iconfont">&#xe620;</i></label>
            <!--{else}-->
            <label>--</label>
            <!--{/if}-->
          </p>
          <p>
            <span>手机号</span>
            <!--{if !empty($home.mobile)}-->
            <label<!--{if $mobile_flag == '1'}--> class="current"<!--{/if}-->><em class="iconfont">&#xe627;</em> <i class="iconfont">&#xe620;</i></label>
            <!--{else}-->
            <label>--</label>
            <!--{/if}-->
          </p>
          <p>
            <span>QQ号</span>
            <!--{if !empty($home.qq)}-->
            <label<!--{if $qq_flag == '1'}--> class="current"<!--{/if}-->><em class="iconfont">&#xe627;</em> <i class="iconfont">&#xe620;</i></label>
            <!--{else}-->
            <label>--</label>
            <!--{/if}-->
          </p>
          <p>
            <span>邮  箱</span>
            <!--{if !empty($home.email)}-->
            <label<!--{if $email_flag == '1'}--> class="current"<!--{/if}-->><em class="iconfont">&#xe627;</em> <i class="iconfont">&#xe620;</i></label>
            <!--{else}-->
            <label>--</label>
            <!--{/if}-->
          </p>
          <p>
            <span>微  信</span>
            <!--{if !empty($home.msn)}-->
            <label<!--{if $weixin_flag == '1'}--> class="current"<!--{/if}-->><em class="iconfont">&#xe627;</em> <i class="iconfont">&#xe620;</i></label>
            <!--{else}-->
            <label>--</label>
            <!--{/if}-->
          </p>
        </div>
        <!--{/if}-->
      </div>
    </div>

