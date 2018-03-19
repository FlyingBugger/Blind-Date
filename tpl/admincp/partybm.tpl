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
  <div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=party">活动报名</a></p></div>
  <div class="main-cont">
    <h3 class="title">活动报名</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<!--{$cpfile}-->?c=partybm" />
	  <div class="item">
          活动：<input type="text" name="stitle" id="stitle" class="input-150" value="<!--{$stitle}-->" />&nbsp;
          性别：<select name="sgender" id="sgender">
              <option value="">不限</option>
              <option value="1"<!--{if $sgender == '1'}--> selected<!--{/if}-->>男</option>
              <option value="2"<!--{if $sgender == '2'}--> selected<!--{/if}-->>女</option>
          </select>&nbsp;
          会员UID：<input type="text" name="suserid" id="suserid" class="input-100" value="<!--{if $suserid > 0}--><!--{$suserid}--><!--{/if}-->" />&nbsp;
          会员名：<input type="text" name="susername" id="susername" class="input-100" value="<!--{$susername}-->" />&nbsp;
          状态：
          <select name="sflag" id="sflag">
              <option value="">不限</option>
              <option value="1"<!--{if $sflag == '1'}--> selected<!--{/if}-->>已成功报名</option>
              <option value="2"<!--{if $sflag == '2'}--> selected<!--{/if}-->>已取消报名</option>
              <option value="3"<!--{if $sflag == '3'}--> selected<!--{/if}-->>待审核报名</option>
          </select>&nbsp;
          支付状态：
          <select name="spayflag" id="spayflag">
              <option value="">不限</option>
              <option value="1"<!--{if $spayflag == '1'}--> selected<!--{/if}-->>已支付</option>
              <option value="2"<!--{if $spayflag == '2'}--> selected<!--{/if}-->>待支付</option>
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
          <th width="16%">活动</th>
          <th width="8%">LoveID</th>
          <th width="20%">报名会员</th>
          <th width="8%">报名时间</th>
          <th width="8%">报名费</th>
          <th width="8%">支付状态</th>
          <th width="8%">支付时间</th>
          <th width="8%">状态</th>
          <th>操作</th>
      </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

        <!--{if empty($partybm)}-->
        <tr>
            <td class="text_center" colspan="10">没有符合条件的信息</td>
        </tr>
        <!--{else}-->
        <!--{foreach $partybm as $volist}-->
        <tr>
            <td class="text_center"><input type="checkbox" name="id[]" id="id[]" class="selall" value="<!--{$volist.bmid}-->" /><!--{$volist.bmid}--></td>
            <td><a href="<!--{$urlpath}-->index.php?c=party&a=detail&id=<!--{$volist.bmid}-->" target="_blank"><!--{$volist.title}--></a></td>
            <td class="text_center"><!--{$volist.loveid}--></td>
            <td>
                <img src="<!--{$volist.avatar}-->" width="30px" height="30px" f="viewimg" />
                uid:<!--{$volist.userid}-->/<!--{$volist.username}-->/<!--{if $volist.gender==1}-->男<!--{else}-->女<!--{/if}-->/<!--{$volist.age}-->岁/<!--{area type="text" cache="1" value=$volist.cityid}-->
            </td>
            <td class="text_center">
                <!--{$volist.addtime|date_format:"%Y-%m-%d"}--><br />
                <!--{$volist.addtime|date_format:"%H:%M:%S"}-->
            </td>
            <td>
                ¥<!--{doubleval($volist.amount)}-->
            </td>
            <td class="text_center">
                <!--{if $volist.amount > 0}-->
                <!--{if $volist.payflag == '1'}-->
                <font color="orange">已支付</font>
                <!--{else}-->
                <font color="blue">待支付</font>
                <!--{/if}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <td class="text_center">
                <!--{if $volist.amount > 0}-->
                <!--{if $volist.paytime > 0}-->
                <!--{$volist.paytime|date_format:"%Y-%m-%d"}--><br />
                <!--{$volist.paytime|date_format:"%H:%M:%S"}-->
                <!--{else}-->
                --
                <!--{/if}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <td class="text_center">
                <!--{if $volist.status == '1'}-->
                <font color="green">成功报名</font>
                <!--{elseif $volist.status == '2'}-->
                <font color="red">已取消报名</font>
                <!--{else}-->
                <font color="gray">待审报名</font>
                <!--{/if}-->
            </td>
            <td class="text_center">
                <a href="<!--{$cpfile}-->?c=<!--{$c}-->&a=view&id=<!--{$volist.bmid}-->&<!--{$comeurl}-->" class="oe_ico_blue">管理</a>
                <a href="<!--{$cpfile}-->?c=partybm&a=del&id[]=<!--{$volist.bmid}-->" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="oe_ico_red">删除</a>
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

<!--{if $a eq 'view'}-->
<div class="main-wrap">
<div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span>活动报名<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=party&a=edit&id=<!--{$id}-->">报名详情</a></p></div>
<div class="main-cont">
<h3 class="title"><a href="<!--{$cpfile}-->?c=party&<!--{$comeurl}-->" class="btn-general"><span>返回列表</span></a>报名详情</h3>

    <table cellpadding='1' cellspacing='1' class='tab'>
        <tr>
            <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
            <td class='hback' width="35%">
                <!--{if !empty($partybm.avatar)}-->
                <img src="<!--{$partybm.avatar}-->" width="30px" height="30px" f="viewimg" />
                <!--{/if}-->
                uid:<!--{$partybm.userid}-->/<!--{$partybm.username}-->/<!--{if $partybm.gender==1}-->男<!--{else}-->女<!--{/if}-->/<!--{$partybm.age}-->岁/<!--{area type="text" cache="1" value=$partybm.cityid}-->
            </td>
            <th class='hback_1' width="15%">活动名称：<span class="f_red"></span> </th>
            <td class='hback' width="35%">
                <!--{if !empty($partybm.title)}-->
                 <!--{$partybm.title}-->
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>LoveID：</th>
            <td><!--{$partybm.loveid}--></td>
            <th>报名时间：</th>
            <td>
                <!--{$partybm.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->
            </td>
        </tr>
        <tr>
            <th>报名费用：</th>
            <td>
                <!--{if $partybm.amount == 0}-->
                <font color="red">¥0</font>
                <!--{else}-->
                ¥ <!--{doubleval($partybm.amount)}-->
                <!--{/if}-->
            </td>
            <th>报名状态：</th>
            <td>
                <!--{if $partybm.status == '1'}-->
                已成功报名
                <!--{elseif $partybm.status == '2'}-->
                已取消报名
                <!--{else}-->
                待审核报名
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>备注说明：</th>
            <td>
                <!--{if !empty($partybm.remark)}-->
                <!--{$partybm.remark}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <th>取消原因：</th>
            <td>
                <!--{if !empty($partybm.reason)}-->
                <!--{$partybm.reason}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>操作</th>
            <td colspan="3">
                <!--{if $partybm.status == '0'}-->
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_green" f="partybm_pass" data-id="<!--{$partybm.bmid}-->">审核通过</a>&nbsp;
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_red" f="partybm_cancel" data-id="<!--{$partybm.bmid}-->">取消报名</a>
                <!--{elseif $partybm.status == '1'}-->
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_red" f="partybm_cancel" data-id="<!--{$partybm.bmid}-->">取消报名</a>
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>付款状态</strong></td>
        </tr>
        <tr>
            <th width="15%">付款状态：<span class="f_red"></span></th>
            <td width="35%">
                <!--{if $partybm.amount > 0}-->
                <!--{if $partybm.payflag == '1'}-->
                <font color="orange">已支付</font>
                <!--{else}-->
                <font color="blue">待支付</font>
                <!--{/if}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <th width="15%">已付金额：</th>
            <td width="35%">
                <!--{if $partybm.paymoney == 0}-->
                <font color="red">¥0</font>
                <!--{else}-->
                ¥ <!--{doubleval($partybm.paymoney)}-->
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>付款时间：</th>
            <td>
                <!--{if $partybm.amount > 0}-->
                <!--{if $partybm.paytime > 0}-->
                <!--{$partybm.paytime|date_format:"%Y-%m-%d %H:%M:%S"}-->
                <!--{else}-->
                --
                <!--{/if}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <th>付款单号：</th>
            <td>
                <!--{if !empty($partybm.paynum)}-->
                <!--{$partybm.paynum}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>

        <tr>
            <th>退款状态：</th>
            <td>
                <!--{if $partybm.refundflag == '1'}-->
                退款中
                <!--{elseif $partybm.refundflag == '2'}-->
                已退款
                <!--{elseif $partybm.refundflag == '3'}-->
                拒绝退款
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <th>已退金额：</th>
            <td>
                <!--{if $partybm.refundmoney > 0}-->
                <!--{$partybm.refundmoney}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>退款时间：</th>
            <td>
                <!--{if $partybm.refundtime > 0}-->
                <!--{$partybm.refundtime|date_format:"%Y-%m-%d %H:%M:%S"}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
            <th>退款人：</th>
            <td>
                <!--{if !empty($partybm.refunduse)}-->
                <!--{$partybm.refunduse}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>退款说明：</th>
            <td>
                <!--{if !empty($partybm.refundremark)}-->
                <!--{$partybm.refundremark}-->
                <!--{else}-->
                --
                <!--{/if}-->
            </td>
        </tr>
    </table>
</div>
<div style="clear:both;"></div>
</div>
<!--{/if}-->


<!--{if $a eq 'pass'}-->
<div class="main-wrap">
    <div class="main-cont">
        <h3 class="title">活动：<!--{$partybm.title}--></h3>
        <table cellpadding='1' cellspacing='1' class='tab'>
            <tr>
                <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
                <td class='hback' colspan="3">
                    <!--{if !empty($partybm.avatar)}-->
                    <img src="<!--{$partybm.avatar}-->" width="30px" height="30px" f="viewimg" />
                    <!--{/if}-->
                    uid:<!--{$partybm.userid}-->/<!--{$partybm.username}-->/<!--{if $partybm.gender==1}-->男<!--{else}-->女<!--{/if}-->/<!--{$partybm.age}-->岁/<!--{area type="text" cache="1" value=$partybm.cityid}-->
                </td>
            </tr>
            <tr>
                <th>LoveID：</th>
                <td><!--{$partybm.loveid}--></td>
                <th>报名时间：</th>
                <td>
                    <!--{$partybm.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->
                </td>
            </tr>
            <tr>
                <th>报名费用：</th>
                <td>
                    <!--{if $partybm.amount == 0}-->
                    <font color="red">¥0</font>
                    <!--{else}-->
                    ¥ <!--{doubleval($partybm.amount)}-->
                    <!--{/if}-->
                </td>
                <th width="15%">付款状态：<span class="f_red"></span></th>
                <td width="35%">
                    <!--{if $partybm.amount > 0}-->
                    <!--{if $partybm.payflag == '1'}-->
                    <font color="orange">已支付</font>
                    <!--{else}-->
                    <font color="blue">待支付</font>
                    <!--{/if}-->
                    <!--{else}-->
                    --
                    <!--{/if}-->
                </td>
            </tr>
            <tr>
                <th>备注说明：</th>
                <td colspan="3">
                    <textarea name="remark" id="remark" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>

            <tr>
                <td class="hback_none" colspan="4" align="center"><input type="submit" id="btn_save" name="btn_save" class="button" value="更新保存"></td>
            </tr>
        </table>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
    $(function(){
        //编辑保存
        $("#btn_save").bind("click", function(){
            $remark = $("#remark").val();
            $.ajax({
                type: "POST",
                url: "<!--{$cpfile}-->?c=<!--{$c}-->",
                cache: false,
                data: {a:"savepass", id:"<!--{$id}-->", remark:$remark, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    $json = eval(data);
                    $response = $json.response;
                    $result = $json.result;
                    if ($response == '1') {
                        alert("操作成功");
                        setTimeout(function(){
                            window.parent.location.href = "<!--{$cpfile}-->?c=<!--{$c}-->";
                        }, 300);
                    }
                    else {
                        if ($result.length > 0) {
                            alert($result);
                        }
                        else {
                            alert("操作失败");
                        }
                    }
                },
                error: function() {
                    alert("系统繁忙，请稍后再试！");
                }
            });

        });
    });
</script>
<!--{/if}-->


<!--{if $a eq 'cancel'}-->
<div class="main-wrap">
    <div class="main-cont">
        <h3 class="title">活动：<!--{$partybm.title}--></h3>
        <table cellpadding='1' cellspacing='1' class='tab'>
            <tr>
                <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
                <td class='hback' colspan="3">
                    <!--{if !empty($partybm.avatar)}-->
                    <img src="<!--{$partybm.avatar}-->" width="30px" height="30px" f="viewimg" />
                    <!--{/if}-->
                    uid:<!--{$partybm.userid}-->/<!--{$partybm.username}-->/<!--{if $partybm.gender==1}-->男<!--{else}-->女<!--{/if}-->/<!--{$partybm.age}-->岁/<!--{area type="text" cache="1" value=$partybm.cityid}-->
                </td>
            </tr>
            <tr>
                <th>LoveID：</th>
                <td><!--{$partybm.loveid}--></td>
                <th>报名时间：</th>
                <td>
                    <!--{$partybm.addtime|date_format:"%Y-%m-%d %H:%M:%S"}-->
                </td>
            </tr>
            <tr>
                <th>报名费用：</th>
                <td>
                    <!--{if $partybm.amount == 0}-->
                    <font color="red">¥0</font>
                    <!--{else}-->
                    ¥ <!--{doubleval($partybm.amount)}-->
                    <!--{/if}-->
                </td>
                <th width="15%">付款状态：<span class="f_red"></span></th>
                <td width="35%">
                    <!--{if $partybm.amount > 0}-->
                    <!--{if $partybm.payflag == '1'}-->
                    <font color="orange">已支付</font>
                    <!--{else}-->
                    <font color="blue">待支付</font>
                    <!--{/if}-->
                    <!--{else}-->
                    --
                    <!--{/if}-->
                </td>
            </tr>
            <tr>
                <th>取消原因：</th>
                <td colspan="3">
                    <textarea name="reason" id="reason" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>
            <tr>
                <th>备注说明：</th>
                <td colspan="3">
                    <textarea name="remark" id="remark" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>

            <tr>
                <td class="hback_none" colspan="4" align="center"><input type="submit" id="btn_save" name="btn_save" class="button" value="更新保存"></td>
            </tr>
        </table>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
    $(function(){
        //编辑保存
        $("#btn_save").bind("click", function(){
            $reason = $("#reason").val();
            $remark = $("#remark").val();
            if ($reason.length == 0) {
                alert("请填写取消原因");
                return false;
            }
            $.ajax({
                type: "POST",
                url: "<!--{$cpfile}-->?c=<!--{$c}-->",
                cache: false,
                data: {a:"savecancel", id:"<!--{$id}-->", remark:$remark, reason:$reason, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    $json = eval(data);
                    $response = $json.response;
                    $result = $json.result;
                    if ($response == '1') {
                        alert("操作成功");
                        setTimeout(function(){
                            window.parent.location.href = "<!--{$cpfile}-->?c=<!--{$c}-->";
                        }, 300);
                    }
                    else {
                        if ($result.length > 0) {
                            alert($result);
                        }
                        else {
                            alert("操作失败");
                        }
                    }
                },
                error: function() {
                    alert("系统繁忙，请稍后再试！");
                }
            });

        });
    });
</script>
<!--{/if}-->

<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
</body>
</html>