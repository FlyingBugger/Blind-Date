/**
 * [OElove Webapp] (C)2010-2099 oelove.com Inc.
 * Email: service@phpcoo.com，phpcoo@qq.com
 * This is not a freeware, use is subject to license terms
 * $ LastTime 2016.12.14 Update by CL $
*/
var JS_ANIMATE_TIME = 100;
var JS_FADEIN_TIME = 100;
var JS_FADEOUT_TIME = 100;
//根据搜索参数请求数据
function _partySearchList() {
	$s_catid = $("#s_catid").val();
	$s_type = $("#s_type").val();
    $s_orderby = $("#s_orderby").val();

	$s_area1 = $("#s_area1").find("option:selected").val();
	if (typeof($s_area1) == "undefined") {
		$s_area1 = "0";
	}
    $s_area2 = $("#s_area2").find("option:selected").val();
	if (typeof($s_area2) == "undefined") {
        $s_area2 = "0";
	}
	
	$_reqs_url = WAP_APPFILE+"?c=party&a=list&datatype=json&="+
				"&s_catid="+$s_catid+"&s_area1="+$s_area1+"&s_area2="+$s_area2+
				"&s_type="+$s_type+"&s_orderby="+$s_orderby;
	$("#reqs_url").val($_reqs_url);
    location.href = $_reqs_url;
}
$(function(){

	//列表搜索
	$(document).on("click", "[f='but_open_search_item']", function(){
		if ($(this).parent().find("dd").css("display") == "block") {
			$(this).parent().removeClass("current");
		}
		else {
			$("[f='but_open_search_item']").parent().removeClass("current");
			$(this).parent().addClass("current");
		}
	});

	//选择分类
	$(document).on("click", "[f='but_sel_catid']", function(){
		$("[f='but_sel_catid']").removeClass("current");
		$(this).addClass("current");
		$_val = $(this).attr("data-id");
		$("#s_catid").val($_val);
		$("[f='but_open_search_item']").parent().removeClass("current");
		_partySearchList();
	});

	//选择类型
	$(document).on("click", "[f='but_sel_type']", function(){
		$("[f='but_sel_type']").removeClass("current");
		$(this).addClass("current");
		$_val = $(this).attr("data-type");
		$("#s_type").val($_val);
		$("[f='but_open_search_item']").parent().removeClass("current");
		_partySearchList();
	});

    $(document).on("click", "[f='but_sel_orderby']", function(){
        $("[f='but_sel_orderby']").removeClass("current");
        $(this).addClass("current");
        $_val = $(this).attr("data-val");
        $("#s_orderby").val($_val);
        $("[f='but_open_search_item']").parent().removeClass("current");
        _partySearchList();
    });
	
	
	//确定搜索
	$(document).on("click", "[f='but_confirm_search']", function(){
		$("[f='but_open_search_item']").parent().removeClass("current");
		_partySearchList();
	});

	//去除所有所属项
	$(document).on("click", "#scroll_body", function(){
		$("[f='but_open_search_item']").parent().removeClass("current");
	});

	
	/*------------------ 华丽分割线 show bmlist Begin ---------------------*/
	//打开报名会员 从右向左
	$(document).on("click", "[f='but_open_partybmuser']", function(){
		$_id = $(this).attr("data-id");
		$("body").append("<div class='page_loading' style='display:block;' id='ajax_loading'><span></span></div>");
		$url = WAP_APPFILE + "?c=party&a=bmlist&id="+$_id;
        window.location.href = $url;
	});
	//关闭报名会员页
	$(document).on("click", "[f='but_close_partybmuser']", function(){
		$("#party_bmuser_data").animate({right:"-"+WIN_WIDTH+"px"}, JS_ANIMATE_TIME, function(){
			$("#party_bmuser_box").fadeOut(JS_FADEOUT_TIME);
		});
	});

	/*------------------ 华丽分割线 show bmlist End ---------------------*/

	
	/*------------------ 华丽分割线 my party Begin ---------------------*/
	//打开我报名的
	$(document).on("click", "[f='but_open_myparty']", function(){
		$("body").append("<div class='page_loading' style='display:block;' id='ajax_loading'><span></span></div>");
		$.ajax({
			type: "POST",
			url: WAP_APPFILE + "?c=myparty",
			cache: false,
			data: {a:"run", r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					$("#myparty_data").html($result);
					$("#myparty_box").show();
					$("#myparty_data").css({"right":"-"+WIN_WIDTH+"px"}).show();
					$("#myparty_data").animate({right:"0px"}, JS_ANIMATE_TIME).fadeIn(JS_FADEIN_TIME);
					//_oeLoadChildPageData(); //加载我报名的
				}
				else {
					if ($result != '' && $result != undefined) {
						ToastShow($result);
					}
					else {
						ToastShow("获取数据失败");
					}
				}
				$("#ajax_loading").remove();
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});
	});

	//关闭我报名的
	$(document).on("click", "[f='but_close_myparty']", function(){
		$("#myparty_data").animate({right:"-"+WIN_WIDTH+"px"}, JS_ANIMATE_TIME, function(){
			$("#myparty_box").fadeOut(JS_FADEOUT_TIME);
		});
	});
	//活动报名付款
	$(document).on("click", "[f='but_party_pay_submit']", function(){
		$_id = $(this).attr("data-id");
		$.ajax({
			type: "POST",
			url: WAP_APPFILE+"?c=myparty",
			cache: false,
			data: {
					a:"confirmpay", id:$_id, r:get_rndnum(8)
			},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					window.location.href = WAP_APPFILE+"?c=pay&paynum="+$result;
				}
				else {
					$_error = $result;
					if ($_error.length == 0) {
						$_error = "提交失败，请检查";
					}
					ToastShow($_error);
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});

	});
	//打开申请退款页
	$(document).on("click", "[f='but_open_apprefund']", function(){
		$_id = $(this).attr("data-id");
		$_url = WAP_APPFILE+"?c=myparty&a=refund&id="+$_id;
		oeAjaxShadeBox("pop_apprefund", $_url, "bottom", "", 120, "210");
	});
	//关闭申请退款页
	$(document).on("click", "[f='but_close_apprefund']", function(){
		_closeCss3Box("pop_apprefund", "bottom", 1);
	});
	//提交申请
	$(document).on("click", "[f='but_save_apprefund']", function(){
		$_id = $(this).attr("data-id");
		$.ajax({
			type: "POST",
			url: WAP_APPFILE+"?c=myparty",
			cache: false,
			data: {
					a:"saveapp", id:$_id, r:get_rndnum(8)
			},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					ToastShow("退款成功");
					setTimeout(function(){
						window.location.reload();
					}, 500);
				}
				else {
					$_error = $result;
					if ($_error.length == 0) {
						$_error = "申请失败，请检查";
					}
					ToastShow($_error);
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});

	});

	

	/*------------------ 华丽分割线 my party End ---------------------*/



	/*----------------- bm Begin ------------------*/
	//打开报名 7.3.19
	$(document).on("click", "[f='but_open_partybm']", function(){
        $
		$_id = $(this).attr("data-id");
		$_url = WAP_APPFILE+"?c=party&a=bm&partyid="+$_id;
		oeAjaxShadeBox("pop_partybm", $_url, "bottom", "", 230);
	});
	
	//关闭报名
	$(document).on("click", "[f='but_close_partybm']", function(){
		_closeCss3Box("pop_partybm", "bottom", 1);
		
	});
	//确定报名
	$(document).on("click", "[f='but_confirm_partybm']", function(){
		$_id = $(this).attr("data-id");
		$mobile = $("#party_bm_mobile").val();
		if ($mobile.length == 0) {
			ToastShow("请填写手机号码");
			return false;
		}
		$.ajax({
			type: "POST",
			url: WAP_APPFILE + "?c=party",
			cache: false,
			data: {a:"savebm", id:$_id, mobile:$mobile, r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					if ($result != '' && $result != undefined) {
						window.location.href = WAP_APPFILE+"?c=pay&paynum="+$result;
					}
					else {
						ToastShow("活动报名成功");
						setTimeout(function(){
							window.location.reload();
						}, 500);
					}
				}
                else if ($response == "2"){
                    if ($result != '' && $result != undefined) {
                        ToastShow($result);
                    }
                    else {
                        ToastShow("报名失败！");
                    }
                    setTimeout(function(){
                        $forward = window.location.href;
                        $forward = encodeURIComponent($forward);
                        window.location.href = WAP_APPFILE + "?c=cp_recharge&isforward=1&forward="+$forward;
                    }, 500);
                }
				else {
					if ($result != '' && $result != undefined) {
						ToastShow($result);
					}
					else {
						ToastShow("报名失败！");
					}
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});
	});

	//关闭支付框
	$(document).on("click", "[f='but_close_bmpay']", function(){
		$("#bmpay_data").slideUp(JS_FADEOUT_TIME, function(){
			$("#bmpay_box").fadeOut(JS_FADEOUT_TIME);
		});
		
	});
	/*----------------- bm End ------------------*/
});

