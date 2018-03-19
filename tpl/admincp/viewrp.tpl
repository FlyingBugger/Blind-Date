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

<style type="text/css">
body{background:#91bdff;}
</style>
<div class="oe_viewrp">
  <ul>
    <li class="card" id="idcard_rp" data-need="<!--{if !empty($user.idnumber)}-->1<!--{/if}-->"><span></span>身份证 <em></em></li>
    <li class="mobile" id="mobile_rp" data-need="<!--{if !empty($user.mobile)}-->1<!--{/if}-->"><span></span>手机<em></em></li>
    <li class="email" id="email_rp" data-need="<!--{if !empty($user.email)}-->1<!--{/if}-->"><span></span>邮箱<em></em></li>
    <li class="qq" id="qq_rp" data-need="<!--{if !empty($user.qq)}-->1<!--{/if}-->"><span></span>QQ<em></em></li>
    <li class="weixin" id="weixin_rp" data-need="<!--{if !empty($user.msn)}-->1<!--{/if}-->"><span></span>微信<em></em></li>
  </ul>
  <div class="move" style="top:13px;" id="progress_shade">
    <span></span>
    <label id="progress_percent">0%</label>
  </div>

</div>

<div class="viewrp_tips">
  <ul>
    <li class="li_1"><span></span>状态正常</li>
    <li class="li_2"><span></span>存在风险</li>
    <li class="li_3"><span></span>未填写</li>
  </ul>
</div>


<script type="text/javascript">
var objInterval;
var RP_STEP = "idcard";
var RP_PROGRESS_I = 1;
var RP_SHADE_HEIGHT_1 = "13px"; //进度遮罩位置
var RP_SHADE_HEIGHT_2 = "93px"; //进度遮罩位置
var RP_SHADE_HEIGHT_3 = "173px"; //进度遮罩位置
var RP_SHADE_HEIGHT_4 = "253px"; //进度遮罩位置
var RP_SHADE_HEIGHT_5 = "333px"; //进度遮罩位置
var RP_GO_NEXT_STEP = 0; //执行下一个

$(function(){
	//高度 身份证：13px  手机：93px 邮箱：173px  QQ：253px  微信：333px 
	_beginRPcheck();

});


function _beginRPcheck() {
	RP_PROGRESS_I = 1;
	if (RP_STEP == "idcard") {
		$("#progress_shade").css({"top":RP_SHADE_HEIGHT_1});
	}
	else if (RP_STEP == "mobile") {
		$("#progress_shade").css({"top":RP_SHADE_HEIGHT_2});
	}
	else if (RP_STEP == "email") {
		$("#progress_shade").css({"top":RP_SHADE_HEIGHT_3});
	}
	else if (RP_STEP == "qq") {
		$("#progress_shade").css({"top":RP_SHADE_HEIGHT_4});
	}
	else {
		$("#progress_shade").css({"top":RP_SHADE_HEIGHT_5});
	}
	if (RP_STEP != "stop") {
		$("#"+RP_STEP+"_rp").addClass("current");
		if ($("#"+RP_STEP+"_rp").attr("data-need") == "1") {
			_postCheckRP();
		}
	}
	_downProgress(1); //查询进度

}
function _downProgress($check) {
	if (typeof($check) == "undefined") {
		$check = "";
	}
	if (RP_STEP == "stop") {
		//查询完成
		$("#progress_shade").hide();
		if ($("#weixin_rp").attr("data-need") != "1") {
			$("#weixin_rp").removeClass("current");
		}
		RP_GO_NEXT_STEP = 0;
		if (objInterval.length > 0) {
			clearTimeout(objInterval);
		}
		
	}
	else {
		
		if ((RP_PROGRESS_I*10) < 110) {
			$("#progress_percent").html((RP_PROGRESS_I*10)+"%");
		}
		$("#progress_shade").show();
		RP_PROGRESS_I++;

		if (RP_PROGRESS_I < 12) {
			objInterval = setTimeout(function(){
				_downProgress();
			}, 100);
		}
		else {
			if (RP_STEP != "stop") {
				if ($("#"+RP_STEP+"_rp").attr("data-need") != "1") {
					$("#"+RP_STEP+"_rp").find("em").addClass("blank");
				}
			}

			RP_GO_NEXT_STEP = 1;
			if (RP_STEP == "idcard") {
				if ($("#idcard_rp").attr("data-need") != "1") {
					$("#idcard_rp").removeClass("current");
				}
				RP_STEP = "mobile";
			}
			else if (RP_STEP == "mobile") {
				if ($("#mobile_rp").attr("data-need") != "1") {
					$("#mobile_rp").removeClass("current");
				}
				RP_STEP = "email";
			}
			else if (RP_STEP == "email") {
				if ($("#email_rp").attr("data-need") != "1") {
					$("#email_rp").removeClass("current");
				}
				RP_STEP = "qq";
			}
			else if (RP_STEP == "qq") {
				if ($("#qq_rp").attr("data-need") != "1") {
					$("#qq_rp").removeClass("current");
				}
				RP_STEP = "weixin";
			}
			else if (RP_STEP == "weixin") {
				if ($("#weixin_rp").attr("data-need") != "1") {
					$("#weixin_rp").removeClass("current");
				}
				RP_STEP = "stop";
			}

			if (RP_GO_NEXT_STEP == 1) {
				$("#progress_shade").hide();
				RP_PROGRESS_I = 1;
				_beginRPcheck(1); //跳转下一个
			}
		}
	}
}


//执行查询 
function _postCheckRP() {
	RP_GO_NEXT_STEP = 0;
	$obj_id = $("#"+RP_STEP+"_rp");
	$current_step = RP_STEP;
	$.ajax({
		type: "POST",
		url: "<!--{$cpfile}-->?c=<!--{$c}-->&a=checkrp",
		cache: false,
		data: {
			rptype:$current_step, id:"<!--{$user.userid}-->", r:get_rndnum(8)
		},
		dataType: "json",
		success: function($data) {
			$json = eval($data);
			$response = $json.response;
			$result = $json.result;

			RP_GO_NEXT_STEP = 1; //可继续查询
			if ($response == "1") {
				$obj_id.find("em").addClass("ok");
			}
			else {
				$obj_id.find("em").addClass("error");
			}
			//判断进度条
			if (RP_PROGRESS_I < 12) {

			}
			else {
				if (objInterval.length > 0) {
					clearTimeout(objInterval);
				}
				$("#progress_shade").hide();
				_beginRPcheck(1); //跳转下一个
			}

		},
		error: function() {
		}
	});
}
</script>
</body>
</html>