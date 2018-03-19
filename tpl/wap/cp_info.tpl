<!--{assign var="menu_id" value="cp"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->
<div class="cp-bartitle">修改资料</div>

<div class="cp-layout-body-gray">

  <div class="cp-index-bar">
    <ul>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=base');"><span><i class="iconfont">&#xe680;</i></span>基本资料<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=area');"><span><i class="iconfont">&#xe636;</i></span>设置地区<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=life');"><span><i class="iconfont">&#xe606;</i></span>生活资料<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=looks')" style="border-bottom:none;"><span><i class="iconfont">&#xe6c7;</i></span>外貌资料<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>

  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=monolog');"><span><i class="iconfont">&#xe62c;</i></span>内心独白<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=work');"><span><i class="iconfont">&#xe668;</i></span>学习工作<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=guihua');" style="border-bottom:none;"><span><i class="iconfont">&#xe638;</i></span>爱情规划<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>

  <div class="cp-index-bar" style="margin-top:20px;">
	<ul>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=interest');"><span><i class="iconfont">&#xe629;</i></span>兴趣爱好<label><i class="iconfont">&#xe642;</i></label></li>
	  <li onclick="goUrl('<!--{$wapfile}-->?c=cp_info&a=contact');" style="border-bottom:none;"><span><i class="iconfont">&#xe646;</i></span>联系方式<label><i class="iconfont">&#xe642;</i></label></li>
	</ul>
	<div class="clear"></div>
  </div>
</div>

<!--{include file="<!--{$waptpl}-->block_footer_cp.tpl"}-->
</body>
</html>