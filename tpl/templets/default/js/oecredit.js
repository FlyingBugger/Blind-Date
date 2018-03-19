/**
 * OElove (C)2010-2016 phpcoo.com
 * This is not a freeware, use is subject to license terms
 * Email：service@phpcoo.com ,phpcoo@qq.com
 * Last Time: 2017.04.25 By OE
*/
$(function(){

	//诚信查询 7.04.25
	$(document).on("click", "[f='but_home_viewcredit']", function(){
		$home_uid = $(this).attr("data-uid");
		$("#credit_loading").show();
		$.ajax({
			type: "POST",
			url: _ROOT_PATH + "index.php?c=home",
			cache: false,
			data: {a:"viewcredit", id:$home_uid, datatype:"json", r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				$("#credit_loading").hide();
				if ($response == "1") {
					$("#credit_result").html($result).show();
					$("[f='but_close_viewcredit']").show();
				}
				else {
					if ($result.length > 0) {
						ToastShow($result);
					}
					else {
						ToastShow("查询失败，请联系客服");
					}
				}
			},
			error: function() {
				ToastShow("系统繁忙，请稍后再试");
			}
		});

	});
	//关闭诚信查询结果 7.04.25
	$(document).on("click", "[f='but_close_viewcredit']", function(){
		$("#credit_result").hide();
		$("[f='but_close_viewcredit']").hide();
	});
});
