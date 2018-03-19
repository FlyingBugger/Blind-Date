<!--{assign var="baidu_map_key" value="<!--{$config.baidumap_key}-->"}-->
<!--{if empty($baidu_map_key)}-->
<!--{assign var="baidu_map_key" value="d9jat2VxBFnIEWKGs2NaxAowYXDvlzal"}-->
<!--{/if}-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<!--{$baidu_map_key}-->"></script>
<script type="text/javascript" src="<!--{$urlpath}-->tpl/static/map/oelove.map.js"></script>
<script type="text/javascript">
$(function(){
	_initOEmap();//初始化
});
</script>