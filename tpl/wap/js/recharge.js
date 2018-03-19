/**
 * [OElove] (C)2010-2099 OELOVE.COM Inc. X
 * Email: service@phpcoo.com ,phpcoo@qq.com
 * This is NOT a freeware, use is subject to license terms
 * $ Last update 2017/11/24 by CL $
*/
$(function(){
		
	//选择支付方式
	$(document).on("click", "[f='sel_payment']", function(){
		$sdkid = $(this).attr("data-sdkid");
		$sdkname = $(this).attr("data-sdkname");
		$("[f='sel_payment']").removeClass("current");
		$(this).addClass("current");
		$("#sdkid").val($sdkid);
		$("#sdkname").val($sdkname);
	});
	
	//确定升级
	$(document).on("click", "[f='but_recharge_submit']", function(){
		$money = $("#money").val();
		$sdkid = $("#sdkid").val();
		$sdkname = $("#sdkname").val();
		if ($money.length == 0) {
			ToastShow("请输入充值金额");
			return false;
		}
		if ($sdkid.length == 0) {
			ToastShow("请选择支付方式");
			return false;
		}

		$.ajax({
			type: "POST",
			url: WAP_APPFILE + "?c=cp_recharge",
			cache: false,
			data: {a:"submit", money:$money, sdkid:$sdkid, sdkname:$sdkname, r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") { //成功，返回页面
					window.location.href = WAP_APPFILE+"?c=pay&a=submit&paynum="+$result;
				}
				else {
					if ($result.length > 0) {
						ToastShow($result);
					}
					else {
						ToastShow("提交失败，请检查！");
					}
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});


	});

});