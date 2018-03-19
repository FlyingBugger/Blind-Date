<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>活动管理</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->
<style>
    .tab tr th {background:#f1f2f3;color:#333333;padding-left:10px;font-size:13px;text-align:left; height:30px;}
    .tab tr td{background:#fff;font-size:12px;}
</style>
<!--{if $a eq 'run'}-->
<div class="main-wrap">
  <div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=party">活动列表</a></p></div>
  <div class="main-cont">
    <h3 class="title"><a href="<!--{$cpfile}-->?c=party&a=add" class="btn-general"><span>添加活动</span></a>活动列表</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=party" />
	  <div class="item">
          所在地区：
          <!--{area type='dist1' name='sarea1' value=$sarea1 ajax='1' cname='sarea2' cajax='0' text='=不限='}-->&nbsp;<span id='dsdist1' class='f_red'></span>&nbsp;&nbsp;
            <span id="json_sdist2">
            <!--{if $sarea1>0}-->
            <!--{area type='dist2' pvalue=$sarea1 cname='sarea2' cvalue=$sarea2 text='=不限='}-->
            <!--{/if}-->
		</span>
		<span id="json_sarea3">
		  <!--{if $sarea2 > 0}-->
		  <!--{area type='select' name='sarea' depth='3' child='1' text='请选择' parentid=$sarea2 value=$sarea3}-->
		  <!--{else}-->
		  <select name="sarea3" id="sarea3"><option value="">请选择</option></select>
		  <!--{/if}-->
		</span>&nbsp;
          分类：<!--{hook mod='var' item='partycat' name='scatid' type='select' text='=不限=' value=$scatid}-->&nbsp;
          标题：<input type="text" name="stitle" id="stitle" class="input-200" value="<!--{$stitle}-->" />&nbsp;
          状态：
          <select name="sflag" id="sflag">
              <option value="">=不限=</option>
              <option value="1"<!--{if $sflag == '1'}--> selected<!--{/if}-->>已发布</option>
              <option value="2"<!--{if $sflag == '2'}--> selected<!--{/if}-->>待发布</option>
          </select>
          &nbsp;&nbsp;&nbsp;<input type="submit" name="btn_search" id="btn_search" class="button_s" value="搜索" />
	  </div>
	  </form>
	</div>

	<form action="<!--{$cpfile}-->?c=party&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
          <th width="8%">ID</th>
          <th width="8%">分类</th>
          <th width="20%">标题</th>
          <th width="13%">活动时间</th>
          <th width="13%">截止报名</th>
          <th width="5%">状态</th>
          <th width="5%">推荐</th>
          <th width="6%">报名</th>
          <th width="13%">添加时间</th>
          <th>操作</th>
      </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

        <!--{if empty($party)}-->
        <tr>
            <td class="text_center" colspan="10">没有符合条件的信息！</td>
        </tr>
        <!--{else}-->
        <!--{foreach $party as $volist}-->
        <tr>
            <td class="text_center"><input type="checkbox" name="id[]" id="id[]" class="selall" value="<!--{$volist.partyid}-->" /><!--{$volist.partyid}--></td>
            <td class="text_center">
                <!--{if $volist.catid > 0}-->
                <!--{hook mod="var" item="partycat" type="text" value=$volist.catid}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <td>
                <!--{if !empty($volist.thumbimg)}-->
                <img src="<!--{$volist.thumbimg}-->" width="20px" height="20px" data-img="<!--{$volist.drawimg}-->" f="viewimg" />
                <!--{/if}-->
                <a href="<!--{$urlpath}-->index.php?c=party&a=detail&id=<!--{$volist.partyid}-->" target="_blank"><!--{$volist.title}--></a>
            </td>
            <td>
                <!--{$volist.starttime|date_format:"%Y-%m-%d %H:%M"}--><br />
                <!--{$volist.endtime|date_format:"%Y-%m-%d %H:%M"}-->
            </td>
            <td><!--{$volist.endbmtime|date_format:"%Y-%m-%d %H:%M"}--></td>
            <td class="text_center" align="center">
                <!--{if $volist.flag=='0'}-->
                <input type="hidden" id="attr_flag<!--{$volist.partyid}-->" value="flagopen" />
                <img id="flag<!--{$volist.partyid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.partyid}-->');" style="cursor:pointer;">
                <!--{else}-->
                <input type="hidden" id="attr_flag<!--{$volist.partyid}-->" value="flagclose" />
                <img id="flag<!--{$volist.partyid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('flag','<!--{$volist.partyid}-->');" style="cursor:pointer;">
                <!--{/if}-->
            </td>
            <td class="text_center" align="center">
                <!--{if $volist.elite=='0'}-->
                <input type="hidden" id="attr_elite<!--{$volist.partyid}-->" value="eliteopen" />
                <img id="elite<!--{$volist.partyid}-->" src="<!--{$urlpath}-->tpl/static/images/no.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.partyid}-->');" style="cursor:pointer;">
                <!--{else}-->
                <input type="hidden" id="attr_elite<!--{$volist.partyid}-->" value="eliteclose" />
                <img id="elite<!--{$volist.partyid}-->" src="<!--{$urlpath}-->tpl/static/images/yes.gif" onClick="javascript:fetch_ajax('elite','<!--{$volist.partyid}-->');" style="cursor:pointer;">
                <!--{/if}-->
            </td>
            <td>
                <a href="<!--{$cpfile}-->?c=partybm&spartyid=<!--{$volist.partyid}-->">
                    男：<!--{$volist.bmmans}--><br />
                    女：<!--{$volist.bmladys}-->
                </a>
            </td>
            <td class="text_center"><!--{$volist.addtime|date_format:"%Y-%m-%d %H:%M:%S"}--></td>
            <td class="text_center">
                <a href="<!--{$cpfile}-->?c=<!--{$c}-->&a=edit&id=<!--{$volist.partyid}-->&<!--{$comeurl}-->" class="oe_ico_blue">编辑</a>
                <a href="<!--{$cpfile}-->?c=party&a=del&id[]=<!--{$volist.partyid}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="oe_ico_red">删除</a>
            </td>
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
	<!--{if $total>10}-->
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
  <div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=party&a=add">添加活动</a></p></div>
  <div class="main-cont">
	<h3 class="title"><strong>发布活动</strong> （填写活动基本信息）</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=party" />
    <input type="hidden" name="a" value="saveadd" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
        <tr>
            <th class='hback_1'>图片：<span class="f_red"></span> </th>
            <td colspan="3" class='hback'>
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input type="text" name="drawimg" id="drawimg" class="input-txt"  /> <span id='ddrawimg' class='f_red'></span></td>
                        <td>
                            <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=party&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th class='hback_1'>缩略图 <span class="f_red"></span> </th>
            <td class='hback' colspan="3">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input type="text" name="thumbimg" id="thumbimg" class="input-txt" /> <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span> </td>
                        <td><span id="previewsrc"></span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th width="15%" class='hback_1'>分类：<span class="f_red"></span></th>
            <td width="35%" class='hback'><!--{hook mod='var' item='partycat' type='select' name='catid' text='=请选择='}--></td>
            <th>标题：<span class="f_red">*</span></th>
            <td colspan="3">
                <input type="text" name="title" id="title" class="input-250" />
            </td>
        </tr>

        <tr>
            <th>所在地区：<span class="f_red">*</span> </th>
            <td>
                <!--{area type='dist1' name='area1' ajax='1' cname='area2' cajax='1' dname='distid' text='=请选择='}-->&nbsp;
                <span id='dprovinceid' class='f_red'></span>
                <span id="json_area2"></span>&nbsp;
                <span id="json_distid"></span>
            </td>
            <th>活动地址：</th>
            <td><input type="text" name="address" id="address" class="input-250" /></td>
        </tr>
        <tr>
            <th>交通线路：</th>
            <td colspan="3">
                <input type="text" name="traffic" id="traffic" class="input-250" />
            </td>
        </tr>

        <tr>
            <th>开始时间：<span class="f_red">*</span> </th>
            <td>
                日期：<input type="text" name="sdate" id="sdate" class="input-100" readonly="only" />
                时间：<input type="text" name="stime" id="stime" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#sdate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });

                    });
                </script>
            </td>
            <th>结束时间：<span class="f_red">*</span> </th>
            <td>
                日期：<input type="text" name="edate" id="edate" class="input-100" readonly="only" />
                时间：<input type="text" name="etime" id="etime" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#edate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });
                    });
                </script>
            </td>
        </tr>
        <tr>
            <th>截止报名：<span class="f_red">*</span> </th>
            <td colspan="3">
                日期：<input type="text" name="bmdate" id="bmdate" class="input-100" readonly="only" />
                时间：<input type="text" name="bmtime" id="bmtime" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#bmdate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });
                    });
                </script>
            </td>
        </tr>
        <tr>
            <th>活动说明：<span class="f_red"></span> </th>
            <td>
                <input type="text" name="explains" id="explains" class="input-250" /><br />
                （简要描述活动的特别说明信息）
            </td>
            <th>联系方式：<span class="f_red"></span> </th>
            <td>
                <input type="text" name="contact" id="contact" class="input-250" /><br />
                （填写活动主办方联系电话）
            </td>
        </tr>

        <tr>
            <th>状态：<span class="f_red"></span> </th>
            <td>
                <input type="radio" name="flag" id="flag" value="1" checked />发布，
                <input type="radio" name="flag" id="flag" value="0" />待发布
            </td>
            <th>推荐：<span class="f_red"></span> </th>
            <td>
                <input type="radio" name="elite" id="elite" value="1" />是，
                <input type="radio" name="elite" id="elite" value="0" checked />否
            </td>
        </tr>

        <tr>
            <th>默认已报名人数：<span class="f_red"></span> </th>
            <td colspan="3">
                <input type="text" name="otherbms" id="otherbms" class="input-100" /> 人
                <font color="red">（用于前台显示，总报名人数=默认报名人数+男会员报名数+女会员报名数）</font>
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>邀请人数</strong> （设置活动报名人数上限）</td>
        </tr>
        <tr>
            <th width="15%">女士上限：</th>
            <td width="35%"><input type="text" name="limitlady" id="limitlady" class="input-100" /> 人（0表示不限制）</td>
            <th width="15%">男士上限：</th>
            <td width="35%"><input type="text" name="limitman" id="limitman" class="input-100" /> 人（0表示不限制）</td>
        </tr>
        <tr>
            <th>女士费用：</th>
            <td><input type="text" name="moneylady" id="moneylady" class="input-100" /> 元（0表示免费）</td>
            <th>男士费用：</th>
            <td><input type="text" name="moneyman" id="moneyman" class="input-100" /> 元 （0表示免费）</td>
        </tr>
        <tr style="display:none;">
            <th>线下付款：</th>
            <td colspan="3">
                <input type="radio" name="offlinepay" id="offlinepay" value="1" checked />允许，
                <input type="radio" name="offlinepay" id="offlinepay" value="0" />不允许
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>活动详情</strong> </td>
        </tr>
        <tr>
            <th width="15%">活动详情：<span class="f_red"></span></th>
            <td width="85%" colspan="3">
                <textarea name="content" id="content" style="width:90%;height:350px;display:none;"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>地图标注</strong></td>
        </tr>
        <!--{include file="<!--{$cptplpath}-->block_map.tpl"}-->
        <tr>
            <th width="15%">地图标注：</th>
            <td colspan="3" style="line-height:30px;">
                搜索地图：<input type="text" name="maplocation" id="maplocation" class="input-150" />
                <input type="button" name="btn_sermap" id="btn_sermap" f="but_sermap_location" value="搜索" />&nbsp;&nbsp;&nbsp;
                地图坐标：
                经度：<input type="text" name="maplng" id="maplng" value="" class="input-150" />
                纬度：<input type="text" name="maplat" id="maplat" value="" class="input-150" />
                <br />
                <font color="red">（鼠标点击地图，出现红色标注，拖动红色标注可设置地图坐标）</font>
                <div id="oe_map" style="width:800px;height:400px;margin-top:10px;">
                </div>
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
        if ($("#area1").val().length == 0) {
            alert("请选择所在地区");
            return false;
        }
        if ($("#sdate").val().length == 0) {
            alert("请设置活动开始时间");
            return false;
        }
        if ($("#stime").val().length == 0) {
            alert("请设置活动开始时间");
            return false;
        }

        if ($("#edate").val().length == 0) {
            alert("请设置活动结束时间");
            return false;
        }
        if ($("#etime").val().length == 0) {
            alert("请设置活动结束时间");
            return false;
        }

        if ($("#bmdate").val().length == 0) {
            alert("请设置截止报名时间");
            return false;
        }
        if ($("#bmtime").val().length == 0) {
            alert("请设置截止报名时间");
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
  <div class="path"><p>当前位置：内容管理<span>&gt;&gt;</span>成功案例<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=party&a=edit&id=<!--{$id}-->">编辑案例</a></p></div>
  <div class="main-cont">
	<h3 class="title"><a href="<!--{$cpfile}-->?c=party&<!--{$comeurl}-->" class="btn-general"><span>返回列表</span></a>编辑案例</h3>
    <form name="myform" id="myform" method="post" action="<!--{$cpfile}-->?c=party" />
    <input type="hidden" name="a" value="saveedit" />
	<input type="hidden" name="id" value="<!--{$id}-->" />
	<table cellpadding='1' cellspacing='1' class='tab'>
        <tr>
            <th class='hback_1'>图片：<span class="f_red"></span> </th>
            <td colspan="3" class='hback'>
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input type="text" name="drawimg" id="drawimg" value="<!--{$party.drawimg}-->" class="input-txt"  /> <span id='ddrawimg' class='f_red'></span></td>
                        <td>
                            <iframe id='iframe_t' border='0' frameborder='0' scrolling='no' style="width:260px;height:25px;padding:0px;margin:0px;" src='<!--{$cpfile}-->?c=upload&formname=myform&module=party&uploadinput=drawimg&thumbinput=thumbimg&multipart=sf_upload&previewid=previewsrc'></iframe>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th class='hback_1'>缩略图 <span class="f_red"></span> </th>
            <td class='hback' colspan="3">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><input type="text" name="thumbimg" id="thumbimg" value="<!--{$party.thumbimg}-->" class="input-txt" />
                            <font color='#999999'>(自动生成)</font> <span id='dthumbimg' class='f_red'></span>
                        </td>
                        <td>
                            <span id="previewsrc">
                                <!--{if !empty($party.thumbimg)}-->
                                <img src="<!--{$urlpath}--><!--{$party.thumbimg}-->" width="60px" height="60px" />
                                <!--{/if}-->
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th width="15%" class='hback_1'>分类：<span class="f_red"></span></th>
            <td width="35%" class='hback'><!--{hook mod='var' item='partycat' type='select' name='catid' value=$party.catid text='=请选择='}--></td>
            <th>标题：<span class="f_red">*</span></th>
            <td colspan="3">
                <input type="text" name="title" id="title" value="<!--{$party.title}-->" class="input-250" />
            </td>
        </tr>

        <tr>
            <th>所在地区：<span class="f_red">*</span> </th>
            <td>
                <!--{area type='dist1' name='area1' value=$party.area1 ajax='1' cname='area2' cajax='0' text='=不限='}-->&nbsp;<span id='dsdist1' class='f_red'></span>&nbsp;&nbsp;
                <span id="json_area2">
                <!--{if $party.area1>0}-->
                <!--{area type='dist2' pvalue=$party.area1 cname='area2' cvalue=$party.area2 text='=不限='}-->
                <!--{/if}-->
            </td>
            <th>活动地址：</th>
            <td><input type="text" name="address" id="address" value="<!--{$party.address}-->" class="input-250" /></td>
        </tr>
        <tr>
            <th>交通线路：</th>
            <td colspan="3">
                <input type="text" name="traffic" id="traffic" value="<!--{$party.traffic}-->" class="input-250" />
            </td>
        </tr>

        <tr>
            <th>开始时间：<span class="f_red">*</span> </th>
            <td>
                日期：<input type="text" name="sdate" id="sdate" value="<!--{$party.starttime|date_format:"Y-m-d"}-->" class="input-100" readonly="only" />
                时间：<input type="text" name="stime" id="stime" value="<!--{$party.starttime|date_format:"H:i:s"}-->" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#sdate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });

                    });
                </script>
            </td>
            <th>结束时间：<span class="f_red">*</span> </th>
            <td>
                日期：<input type="text" name="edate" id="edate" value="<!--{$party.endtime|date_format:"Y-m-d"}-->" class="input-100" readonly="only" />
                时间：<input type="text" name="etime" id="etime" value="<!--{$party.endtime|date_format:"H:i:s"}-->" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#edate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });
                    });
                </script>
            </td>
        </tr>
        <tr>
            <th>截止报名：<span class="f_red">*</span> </th>
            <td colspan="3">
                日期：<input type="text" name="bmdate" id="bmdate" value="<!--{$party.endbmtime|date_format:"Y-m-d"}-->" class="input-100" readonly="only" />
                时间：<input type="text" name="bmtime" id="bmtime" value="<!--{$party.endbmtime|date_format:"H:i:s"}-->" class="input-100" readonly="only" onclick="javascript:_setTimer(this);" />
                <script type="text/javascript">
                    $(function(){
                        laydate({
                            elem: "#bmdate",
                            format: "YYYY-MM-DD",
                            istime: false,
                            choose: function(datas){}
                        });
                    });
                </script>
            </td>
        </tr>
        <tr>
            <th>活动说明：<span class="f_red"></span> </th>
            <td>
                <input type="text" name="explains" id="explains" value="<!--{$party.explains}-->" class="input-250" /><br />
                （简要描述活动的特别说明信息）
            </td>
            <th>联系方式：<span class="f_red"></span> </th>
            <td>
                <input type="text" name="contact" id="contact" value="<!--{$party.contact}-->" class="input-250" /><br />
                （填写活动主办方联系电话）
            </td>
        </tr>

        <tr>
            <th>状态：<span class="f_red"></span> </th>
            <td>
                <input type="radio" name="flag" id="flag" value="1" <!--{if $party.flag == '1'}-->checked<!--{/if}--> />发布，
                <input type="radio" name="flag" id="flag" value="0" <!--{if $party.flag == '0'}-->checked<!--{/if}--> />待发布
            </td>
            <th>推荐：<span class="f_red"></span> </th>
            <td>
                <input type="radio" name="elite" id="elite" value="1" <!--{if $party.elite == '1'}-->checked<!--{/if}--> />是，
                <input type="radio" name="elite" id="elite" value="0" <!--{if $party.elite == '0'}-->checked<!--{/if}--> />否
            </td>
        </tr>

        <tr>
            <th>默认已报名人数：<span class="f_red"></span> </th>
            <td colspan="3">
                <input type="text" name="otherbms" id="otherbms" value="<!--{$party.otherbms}-->" class="input-100" /> 人
                <font color="red">（用于前台显示，总报名人数=默认报名人数+男会员报名数+女会员报名数）</font>
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>邀请人数</strong> （设置活动报名人数上限）</td>
        </tr>
        <tr>
            <th width="15%">女士上限：</th>
            <td width="35%"><input type="text" name="limitlady" id="limitlady" value="<!--{$party.limitlady}-->" class="input-100" /> 人（0表示不限制）</td>
            <th width="15%">男士上限：</th>
            <td width="35%"><input type="text" name="limitman" id="limitman" value="<!--{$party.limitman}-->" class="input-100" /> 人（0表示不限制）</td>
        </tr>
        <tr>
            <th>女士费用：</th>
            <td><input type="text" name="moneylady" id="moneylady" class="input-100" value="<!--{$party.moneylady}-->" /> 元（0表示免费）</td>
            <th>男士费用：</th>
            <td><input type="text" name="moneyman" id="moneyman" class="input-100" value="<!--{$party.moneyman}-->" /> 元 （0表示免费）</td>
        </tr>
        <tr style="display:none;">
            <th>线下付款：</th>
            <td colspan="3">
                <input type="radio" name="offlinepay" id="offlinepay" value="1" <!--{if $party.offlinepay == '1'}-->checked<!--{/if}--> />允许，
                <input type="radio" name="offlinepay" id="offlinepay" value="0" <!--{if $party.offlinepay == '0'}-->checked<!--{/if}--> />不允许
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>活动详情</strong> </td>
        </tr>
        <tr>
            <th width="15%">活动详情：<span class="f_red"></span></th>
            <td width="85%" colspan="3">
                <textarea name="content" id="content" style="width:90%;height:350px;display:none;"><!--{$party.content}--></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>地图标注</strong></td>
        </tr>
        <!--{include file="<!--{$cptplpath}-->block_map.tpl"}-->
        <tr>
            <th width="15%">地图标注：</th>
            <td colspan="3" style="line-height:30px;">
                搜索地图：<input type="text" name="maplocation" id="maplocation" class="input-150" />
                <input type="button" name="btn_sermap" id="btn_sermap" f="but_sermap_location" value="搜索" />&nbsp;&nbsp;&nbsp;
                地图坐标：
                经度：<input type="text" name="maplng" id="maplng" value="<!--{$party.maplng}-->" class="input-150" />
                纬度：<input type="text" name="maplat" id="maplat" value="<!--{$party.maplat}-->" class="input-150" />
                <br />
                <font color="red">（鼠标点击地图，出现红色标注，拖动红色标注可设置地图坐标）</font>
                <div id="oe_map" style="width:800px;height:400px;margin-top:10px;">
                </div>
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
        if ($("#area1").val().length == 0) {
            alert("请选择所在地区");
            return false;
        }
        if ($("#sdate").val().length == 0) {
            alert("请设置活动开始时间");
            return false;
        }
        if ($("#stime").val().length == 0) {
            alert("请设置活动开始时间");
            return false;
        }

        if ($("#edate").val().length == 0) {
            alert("请设置活动结束时间");
            return false;
        }
        if ($("#etime").val().length == 0) {
            alert("请设置活动结束时间");
            return false;
        }

        if ($("#bmdate").val().length == 0) {
            alert("请设置截止报名时间");
            return false;
        }
        if ($("#bmtime").val().length == 0) {
            alert("请设置截止报名时间");
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