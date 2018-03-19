<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>成功案例</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->

<!--{if $a eq 'run'}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=case">成功案例</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=case&a=add" class="btn-general"><span>添加案例</span></a>案例列表</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=case" />
	  <div class="item">
	    分类：<!--{hook mod="var" item="casecat" type="select" name="scatid" text="=不限=" value=$scatid}-->&nbsp;&nbsp;
		标题：<input type="text" id="stitle" name="stitle" class="input-150" value="<!--{$stitle}-->" />&nbsp;&nbsp;
		状态：
		  <select name="sflag" id="sflag">
		  <option value="">=不限=</option>
		  <option value="1"<!--{if $sflag == '1'}--> selected<!--{/if}-->>正常</option>
		  <option value="2"<!--{if $sflag == '2'}--> selected<!--{/if}-->>锁定</option>
		  </select>
		&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button_s" value="搜索" />
	  </div>
	  </form>
	</div>

	<form action="<!--{$cpfile}-->?c=case&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
	    <th width="8%">ID</th>
		<th width="10%">分类</th>
		<th width="20%">标题</th>
		<th width="10%">恋爱时间</th>
		<th width="10%">结婚时间</th>
		<th width="6%">状态</th>
		<th width="6%">推荐</th>
		<th width="7%">浏览</th>
		<th width="13%">添加时间</th>
		<th>操作</th>
	  </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

	  <!--{if empty($case)}-->
      <tr>
	    <td colspan="10" align="center">没有符合条件的信息</td>
	  </tr>
	  <!--{else}-->
	  <!--{foreach $case as $volist}-->
	  <tr onMouseOver="overColor(this)" onMouseOut="outColor(this)">
	    <td align="center"><input name="id[]" type="checkbox" value="<!--{$volist.caseid}-->" onClick="checkItem(this, 'chkAll')"><!--{$volist.caseid}--></td>
		<td align="center">
		<!--{if $volist.catid > 0}-->
		<!--{hook mod="var" item="casecat" type="text" value=$volist.catid}-->
		<!--{else}-->
		--
		<!--{/if}-->
		</td>
		<td align="left"><a href="../index.php?c=case&a=detail&id=<!--{$volist.caseid}-->" target="_blank"><!--{$volist.title}--></a></td>
		<td><!--{$volist.lovetime}--></td>
		<td><!--{$volist.marrytime}--></td>
		<td align="center">
		<!--{if $volist.flag==0}-->
			<input type="hidden" id="attr_flag<!--{$volist.caseid}-->" value="flagopen" />
			<img id="flag<!--{$volist.caseid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.caseid}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_flag<!--{$volist.caseid}-->" value="flagclose" />
			<img id="flag<!--{$volist.caseid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.caseid}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center">
		<!--{if $volist.elite==0}-->
			<input type="hidden" id="attr_elite<!--{$volist.caseid}-->" value="eliteopen" />
			<img id="elite<!--{$volist.caseid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.caseid}-->');" style="cursor:pointer;">
		<!--{else}-->
			<input type="hidden" id="attr_elite<!--{$volist.caseid}-->" value="eliteclose" />
			<img id="elite<!--{$volist.caseid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.caseid}-->');" style="cursor:pointer;">	
		<!--{/if}-->
        </td>
		<td align="center"><!--{$volist.hits}--></td>
		<td align="center" title="<!--{$volist.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->"><!--{$volist.addtime|date_format:"%Y-%m-%d"}--></td>
		
		<td align="center">
		  <a href="<!--{$cpfile}-->?c=case&a=edit&id=<!--{$volist.caseid}-->&page=<!--{$page}-->&<!--{$urlitem}-->" class="icon-edit">编辑</a>&nbsp;&nbsp;
		  <a href="<!--{$cpfile}-->?c=case&a=del&id[]=<!--{$volist.caseid}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="icon-del">删除</a></td>
	  </tr>
	  <!--{/foreach}-->
	  <!--{if $total>0}-->
	  <tr>
		<td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
		<td class="hback" colspan="9"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><!--{$total}--></b> ]条记录</td>
	  </tr>
	  <!--{/if}-->
	  <!--{/if}-->
	</table>
	</form>
	<!--{if $pagecount>1}-->
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><!--{$showpage}--></td>
	  </tr>
	</table>
	<!--{/if}-->
  </div>
</div>
<!--{/if}-->


<!--{if $a eq 'add'}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>成功案例<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=case&a=add">添加案例</a></p></div>
  <div class="main-cont">
	<h3 class="title">添加案例</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=case" />
    <input type="hidden" name="a" value="saveadd" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>

	  <tr>
		<td class='hback_1'>图片地址 <span class="f_red"></span> </td>
		<td class='hback' colspan="3">
		  
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="drawimg" id="drawimg" class="input-txt"  /> <span id='ddrawimg' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=story&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
	    </td>
	  </tr>
	  <tr>
		<td class='hback_1'>缩略图 <span class="f_red"></span> </td>
		<td class='hback'>
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbimg" id="thumbimg" class="input-txt" /> <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span> </td>
			  <td><span id="previewsrc"></span></td>
			</tr>
		  </table>
		</td>
		<td class="hback_1">分类：<span class="f_red"></span> </td>
		<td class="hback">
		  <!--{hook mod='var' item='casecat' type='select' name='catid' text='=请选择='}-->
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1" width="15%">标题：<span class="f_red">*</span></td>
		<td class="hback" width="35%">
		  <input type="text" name="title" id="title" class="input-txt" />
		</td>
		<td class="hback_1" width="15%">恋爱时间：<span class="f_red"></span> </td>
		<td class="hback" width="35%">
		  <input type="text" name="lovetime" id="lovetime" class="input-200" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">订婚时间：<span class="f_red"></span> </td>
		<td>
		  <input type="text" name="booktime" id="booktime" class="input-200" />
		</td>
		<td class="hback_1">结婚时间：<span class="f_red"></span> </td>
		<td>
		  <input type="text" name="marrytime" id="marrytime" class="input-200" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">状态：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="flag" id="flag" value="1" checked />正常，
		  <input type="radio" name="flag" id="flag" value="0" />锁定
		</td>
		<td class="hback_1">推荐：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="elite" id="elite" value="1" />是，
		  <input type="radio" name="elite" id="elite" value="0" checked />否
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">详情内容：<span class="f_red">*</span></td>
		<td colspan="3">
		<textarea name="content" id="content" style="width:90%;height:350px;display:none;"></textarea>
		</td>
	  </tr>
	  <tr>
		<td class="hback_none"></td>
		<td class="hback_none" colspan="3"><input type="button" id="btn_save" class="button" value="添加保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<script type="text/javascript">
$(function(){
	var myeditor;
	KindEditor.ready(function(K) {myeditor = K.create("#content");});

	$("#btn_save").bind("click", function(){
		if ($("#title").val().length == 0) {
			alert("请填写标题");
			return false;
		}
		$("#content").text(myeditor.html());
		$("#myform").submit();
	});
});
</script>
<!--{/if}-->

<!--{if $a eq "edit"}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>成功案例<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=case&a=edit&id=<!--{$id}-->">编辑案例</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=case&<!--{$comeurl}-->" class="btn-general"><span>返回列表</span></a>编辑案例</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=case" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
	  <tr>
		<td class="hback_1">图片地址 <span class="f_red"></span> </td>
		<td class="hback" colspan="3">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="drawimg" id="drawimg" class="input-txt" value="<!--{$case.drawimg}-->" /> <span id='ddrawimg' class='f_red'></span></td>
			  <td>
			  <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=story&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
			  </td>
			</tr>
		  </table>
	    </td>
	  </tr>
	  <tr>
		<td class="hback_1">缩略图 <span class="f_red"></span> </td>
		<td class="hback">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
			  <td><input type="text" name="thumbimg" id="thumbimg" class="input-txt" value="<!--{$case.thumbimg}-->" /> <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span> </td>
			  <td><span id="previewsrc"></span></td>
			</tr>
		  </table>
		</td>
		<td class="hback_1">分类：<span class="f_red"></span> </td>
		<td class="hback">
		  <!--{hook mod='var' item='casecat' type='select' name='catid' text='=请选择=' value=$case.catid}-->
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1" width="15%">标题：<span class="f_red">*</span></td>
		<td class="hback" width="35%">
		  <input type="text" name="title" id="title" class="input-txt" value="<!--{$case.title}-->" />
		</td>
		<td class="hback_1" width="15%">恋爱时间：<span class="f_red"></span> </td>
		<td class="hback" width="35%">
		  <input type="text" name="lovetime" id="lovetime" class="input-200" value="<!--{$case.lovetime}-->" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">订婚时间：<span class="f_red"></span> </td>
		<td>
		  <input type="text" name="booktime" id="booktime" class="input-200" value="<!--{$case.booktime}-->" />
		</td>
		<td class="hback_1">结婚时间：<span class="f_red"></span> </td>
		<td>
		  <input type="text" name="marrytime" id="marrytime" class="input-200" value="<!--{$case.marrytime}-->" />
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">状态：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="flag" id="flag" value="1"<!--{if $case.flag == '1'}--> checked<!--{/if}--> />正常，
		  <input type="radio" name="flag" id="flag" value="0"<!--{if $case.flag == '0'}--> checked<!--{/if}--> />锁定
		</td>
		<td class="hback_1">推荐：<span class="f_red"></span> </td>
		<td>
		  <input type="radio" name="elite" id="elite" value="1"<!--{if $case.elite == '1'}--> checked<!--{/if}--> />是，
		  <input type="radio" name="elite" id="elite" value="0"<!--{if $case.elite == '0'}--> checked<!--{/if}--> />否
		</td>
	  </tr>
	  <tr>
	    <td class="hback_1">详情内容：<span class="f_red">*</span></td>
		<td colspan="3">
		<textarea name="content" id="content" style="width:90%;height:350px;display:none;"><!--{$case.content}--></textarea>
		</td>
	  </tr>
	  <tr>
		<td class="hback_none"></td>
		<td class="hback_none" colspan="3"><input type="button" id="btn_save" class="button" value="更新保存" /></td>
	  </tr>
	</table>
	</form>
  </div>
  <div style="clear:both;"></div>
</div>
<script type="text/javascript">
$(function(){
	var myeditor;
	KindEditor.ready(function(K) {myeditor = K.create("#content");});

	$("#btn_save").bind("click", function(){
		if ($("#title").val().length == 0) {
			alert("请填写标题");
			return false;
		}
		$("#content").text(myeditor.html());
		$("#myform").submit();
	});
});
</script>
<!--{/if}-->

<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
</body>
</html>