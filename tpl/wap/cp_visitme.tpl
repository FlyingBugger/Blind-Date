<!--{assign var="menu_id" value="cp"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="tab-layout-2">
  <ul>
    <li onclick="goUrl('<!--{$wapfile}-->?c=cp_visit');" style="width:50%;">我看了谁</li>
    <li class="tab-selected" style="width:50%;">谁看了我</li>
  </ul>
  <div class="clear"></div>
</div>
<div class="cp-layout-body">

  <div class="cplist-box">
    <!--{if empty($visitme)}-->
    <h6>没有符合条件的信息</h6>
	<!--{else}-->
	<ul id="json_data">
	  <!--{foreach $visitme as $volist}-->
	  <li onclick="userDetail('<!--{$volist.viewuserid}-->');">
	    <div class="cplist-img"><img src="<!--{$volist.avatarurl}-->" /></div>
		<div class="cplist-info">
		  <h2><span><!--{$volist.viewtime|date_format:"%m-%d %H:%M"}--></span> <!--{$volist.username}--></h2>
		  <p><!--{$volist.age}-->岁 <!--{hook mod='var' item='marrystatus' type='text' value=$volist.marrystatus}--> <!--{$volist.astro}--></p>
		  <p>
		  <!--{area type='text' value=$volist.provinceid}--> <!--{area type='text' value=$volist.cityid}--> <!--{hook mod='var' item='education' type='text' value=$volist.education}--> <!--{hook mod='var' item='salary' type='text' value=$volist.salary}-->
		  </p>
		</div>
		<div class="clear"></div>
	  </li>
	  <!--{/foreach}-->
	</ul>
	<div class="clear"></div>
	<!--{/if}-->
  </div>
  <!--//List End-->

  <!--{if $pagecount > 1}-->
  <div class="page-layout">
    页次：<!--{$page}-->/<!--{$pagecount}-->
	<!--{if $prepage>0}-->
	<span onclick="goUrl('<!--{$wapfile}-->?c=cp_visitme&<!--{$urlitem}-->&page=<!--{$prepage}-->');">上一页</span>  
	<!--{/if}-->
	<!--{if $nextpage>0}-->
	<span onclick="goUrl('<!--{$wapfile}-->?c=cp_visitme&<!--{$urlitem}-->&page=<!--{$nextpage}-->');">下一页</span>  
	<!--{/if}-->
  </div>
  <!--//ShowPage End-->
  <!--{/if}-->

</div>

</body>
</html>
<script type="text/javascript">
$(function(){
	//maxwidth
	var max_width = (WIN_WIDTH-100);
	$(".cplist-box .cplist-info").css({"width":max_width});

});
</script>
