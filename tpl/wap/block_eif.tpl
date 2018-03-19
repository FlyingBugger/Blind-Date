<script type="text/javascript" language="JavaScript" src="<!--{$urlpath}-->tpl/static/js/mood-eif.js" ></script>
<style type="text/css">

</style>
<div id="emface_preview_pannel" class="eif-preview-pannel"></div>
<div id="emface_pannel" class="eif-pannel">
  <div class="emface-border">
	<div class="emface-bg"><a href="###" onclick="emface_close();"><img src="<!--{$ucpath}-->images/em_close.gif" border="0"/></a></div>
	<div class="clear"></div>
	<div class="eif-content">
	  <!--{for $eif_i = 0 to 104}-->
	  <a href="javascript:;" onclick="insertFace('<!--{$eif_i}-->');" class="face-body" >
          <img class="cursor" src="<!--{$urlpath}-->tpl/static/images/face/<!--{$eif_i}-->.gif" f="selectem" data-id="<!--{$eif_i}-->">
	  </a>
	  <!--{/for}-->
      <div class="clear"></div>
	</div>
  </div>
</div>