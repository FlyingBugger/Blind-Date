<div class="oe_footer">
  <div class="oe_footercon">
    <div class="er">
      <h3>微信扫一扫</h3>
      <img src="<!--{$urlpath}--><!--{$config.mobileqr}-->" width="120px" />
    </div>
    <div class="fast">
      <h3>快速链接</h3>
      <ul>
        <!--{assign var='abouttip' value=vo_list("mod={about} where={v.navshow='1'} num={6}")}-->
	    <!--{foreach $abouttip as $volist}-->
        <li><a rel="nofollow" href="<!--{$volist.url}-->"><!--{$volist.title}--></a></li>
        <!--{/foreach}-->
        <li><a href="<!--{$urlpath}-->index.php?c=blackuser">黑名单</a></li>
        <!--{if $login.status == '0'}-->
        <li><a rel="nofollow" f="but_safety_addto" style="cursor:pointer;"  onclick="artbox_loginbox();"><i></i>投诉/举报</a></li>
        <!--{else}-->
        <li><a rel="nofollow" f="but_safety_addto" style="cursor:pointer;"  onclick="artbox_complaint('0');"><i></i>投诉/举报</a></li>
        <!--{/if}-->
        <li><a rel="nofollow" href="<!--{$urlpath}-->index.php">返回首页</a></li>
      </ul>
    </div>
    <div class="right">
      <h3>会员服务</h3>
      <!--{$config.sitefooter}-->
	  <!--{if !empty($config.icpcode)}-->
	    <!--{$config.icpcode}-->
	  <!--{/if}-->
	  <!--{if !empty($config.tjcode)}-->
  	    <!--{$config.tjcode|stripslashes}-->
	  <!--{/if}-->
      <!--{assign var='pluginevent' value=XHook::doAction('plugin_runtime')}-->
    </div>
    <div class="clear"></div>
  </div>
</div>

<!--{assign var='pluginevent' value=XHook::doAction('event_online')}-->

<!--{if $login.status == '1'}-->
<!--{include file="<!--{$uctplpath}-->block_popwin.tpl"}-->
<!--{/if}-->
<script type='text/javascript'>
//WAP提醒
$(function(){
    var x = 10;  
    var y = 20;
    $("a.waptips").mouseover(function(e){
           this.myTitle = this.title;
        this.title = "";    
        var tooltip = "<div id='waptips'>"+ this.myTitle +"<\/div>"; //创建 div 元素
        $("body").append(tooltip);    //把它追加到文档中
        $("#waptips")
            .css({
                "top": (e.pageY+y) + "px",
                "left": (e.pageX+x)  + "px"
            }).show("fast");      //设置x坐标和y坐标，并且显示
    }).mouseout(function(){        
        this.title = this.myTitle;
        $("#waptips").remove();   //移除 
    }).mousemove(function(e){
        $("#waptips")
            .css({
                "top": (e.pageY+y) + "px",
                "left": (e.pageX+x)  + "px"
            });
    });
})

jQuery(".drop").slide({ type:"menu", titCell:".cin", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});

</script>