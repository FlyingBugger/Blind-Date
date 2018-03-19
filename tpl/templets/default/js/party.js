/**
 * [OElove] (C)2010-2099 OELOVE.COM Inc.biz
 * Email: service@phpcoo.com ,phpcoo@qq.com
 * This is NOT a freeware, use is subject to license terms
 * $ Last update 2017/11/27 by CL $
*/
$(function(){
	
	//搜索按钮
	$(document).on("click", "[f='but_confirm_partyser']", function(){
		$("#party_form").submit();
	});

	//显示隐藏更多项
	$(document).on("mouseover", "[f='party_show_more']", function(){
		if (!$(this).hasClass("current")) {
			$(this).addClass("current");
		}
	});
	$(document).on("mouseout", "[f='party_show_more']", function(){
		if ($(this).hasClass("current")) {
			$(this).removeClass("current");
		}
	});

	//选择地区
	$(document).on("click", "[f='but_party_selser']", function(){
		if ($(".select_area").css("display") == "none") {
			$(".select_area").slideDown(100);
		}
		else {
			$(".select_area").slideUp(100);
		}
	});
	$(document).on("click", "[f='but_party_selarea']", function(){
		$_val1 = parseInt($("#s_area1").find("option:selected").val());
		$_text1 = $("#s_area1").find("option:selected").text();

		$_val2 = parseInt($("#s_area2").find("option:selected").val());
		$_text2 = $("#s_area2").find("option:selected").text();
		if (typeof($_val2) == "undefined") {
			$_val2 = 0;
		}
		if (typeof($_text2) == "undefined") {
			$_text2 = "";
		}

		$_val3 = parseInt($("#s_area3").find("option:selected").val());
		$_text3 = $("#s_area3").find("option:selected").text();
		if (typeof($_val3) == "undefined") {
			$_val3 = 0;
		}
		if (typeof($_text3) == "undefined") {
			$_text3 = "";
		}

		$_val4 = parseInt($("#s_area4").find("option:selected").val());
		$_text4 = $("#s_area4").find("option:selected").text();
		if (typeof($_val4) == "undefined") {
			$_val4 = 0;
		}
		if (typeof($_text4) == "undefined") {
			$_text4 = "";
		}
		
		$text = "";
		if ($_text1.length > 0) {
			$text = $_text1;
		}
		if ($_text2.length > 0) {
			$text += "-"+$_text2;
		}
		if ($_text3.length > 0) {
			$text += "-"+$_text3;
		}
		if ($_text4.length > 0) {
			$text += "-"+$_text4;
		}
		if ($text.length > 0) {
			$("[f='but_party_selser']").html($text+"<i></i>");
		}
		$(".select_area").slideUp(100);


	});
	//点击空白出隐藏选择器
	$(document).on("click", function(e){
		var target1  = $(e.target);
        if (target1.closest(".oe_party_type dl").length == 0){
			$(".oe_party_type dl .select_area").slideUp(100);
		}
	});


	//打开报名窗
	$(document).on("click", "[f='but_open_partybm']", function(){
		$_id = $(this).attr("data-id");
		$_url = _ROOT_PATH+"index.php?c=party&a=bm&partyid="+$_id+"&r="+get_rndnum(8);
		oeShadeBox("bm_party", "ajax", $_url, 400, 190);
	});

	//保存报名
	$(document).on("click", "[f='but_confirm_partybm']", function(){

		$_id = $(this).attr("data-id");
		$mobile = $("#party_bm_mobile").val();
		if ($mobile.length == 0) {
			ToastShow("请填写手机号码");
			return false;
		}
		$.ajax({
			type: "POST",
			url: _ROOT_PATH + "index.php?c=party",
			cache: false,
			data: {a:"savebm", id:$_id, mobile:$mobile, r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					$("[f='but_open_partybm']").addClass("current");
					$("[f='but_open_partybm']").html("您已报名");
					$("[f='but_open_partybm']").attr("f", "");
					if ($result.length > 0) {
						window.location.href = _ROOT_PATH+"index.php?c=pay&paynum="+$result;
					}
					else {
						_closeShadeBox("bm_party", function(){
							ToastShow("报名成功");
						});
					}
				}
                else if($response == "2"){
                    if ($result.length > 0) {
                        ToastShow($result);
                    }
                    setTimeout(function(){
                        $forward = window.location.href;
                        $forward = encodeURIComponent($forward);
                        window.location.href = _ROOT_PATH  + "usercp.php?c=payment&isforward=1&forward="+$forward;
                    }, 500);
                }
				else {
					if ($result.length > 0) {
						ToastShow($result);
					}
					else {
						ToastShow("报名失败！");
					}
					_closeShadeBox("bm_party");
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});
	});


	//打开报名会员列表窗 7.06.21
	$(document).on("click", "[f='but_open_bmuser']", function(){
		$partyid = $("#partyid").val();
		$_url = _ROOT_PATH+"index.php?c=party&a=bmuser&partyid="+$partyid+"&r="+get_rndnum(8);
		oeShadeBox("party_bmuser", "ajax", $_url, 710, 450, function(){
			_getBmPageList(1);
		});
	});

	//加载下一页报名
	$(document).on("click", "[f='but_get_bmpage']", function(){
		$_page = parseInt($(this).attr("data-page"));
		if ($_page > 1) {
			$("[f='but_get_bmpage']").find("label").show();
		}
		_getBmPageList($_page);
	});

});


//ajax报名会员列表
function _getBmPageList($page) {
	if (typeof($page) == "undefined") {
		$page = 1;
	}
	$partyid = $("#partyid").val();
	$obj_box = $("#bm_json_data");
	$.ajax({
		type: "GET",
		url:  _ROOT_PATH+"index.php?c=party&a=bmlist&datatype=json&partyid="+$partyid,
		cache: false,
		data: {page:$page, r:get_rndnum(8)},
		dataType: "json",
		success: function($data) {
			$json = eval($data);
			$prepage = $json.prepage; //上一页
			$nextpage = $json.nextpage; //下一页
			$result = $json.result;
			if ($result.length > 0) {
				if ($page == "1") {
					$obj_box.html($result);
				}
				else {
					$obj_box.append($result);
				}
				if ($nextpage > 0) { //还有下一页
					$("[f='but_get_bmpage']").attr("data-page", $nextpage);
					$("[f='but_get_bmpage']").show();
					$("[f='but_get_bmpage']").find("label").hide();
				}
				else { 
					$("[f='but_get_bmpage']").hide();
				}
			}
		},
		error: function() {
		
		}
	});
}
