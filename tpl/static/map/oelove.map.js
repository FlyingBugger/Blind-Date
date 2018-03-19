/**
 * [OElove] (C)2010-2099 OELOVE.COM Inc. Biz
 * Email: service@phpcoo.com ,phpcoo@qq.com
 * This is NOT a freeware, use is subject to license terms
 * $ Last update 2017/11/10 by OE $
*/
var OE_MAP_ZOOM = 16; //默认放大比例
var map_obj = ""; //地图对象
var map_point = ""; //坐标对象
var map_marker = ""; //标注对象
var OE_MAP_LNG = ""; //默认已设置的坐标 经度
var OE_MAP_LAT = ""; //默认已设置的坐标 纬度

//初始化地图
function _initOEmap($zoom) {
	if (typeof($zoom) == "undefined") {
		$zoom = "";
	}
	else {
		OE_MAP_ZOOM = $zoom;
	}
	$_init_display_marker = false;
	OE_MAP_LNG = $("#maplng").val();
	OE_MAP_LAT = $("#maplat").val();
	if (typeof(OE_MAP_LNG) == "undefined") {
		OE_MAP_LNG = "";
	}
	if (typeof(OE_MAP_LAT) == "undefined") {
		OE_MAP_LAT = "";
	}
	if (OE_MAP_LNG.length == 0) {
		OE_MAP_LNG = 116.404;
	}
	else {
		$_init_display_marker = true;
	}
	if (OE_MAP_LAT.length == 0) {
		OE_MAP_LAT = 39.915;
	}
	map_obj = new BMap.Map("oe_map");
	map_point = new BMap.Point(OE_MAP_LNG, OE_MAP_LAT);
	map_obj.centerAndZoom(map_point, OE_MAP_ZOOM);
	map_obj.addControl(new BMap.NavigationControl()); // 添加平移缩放控件
	map_obj.addControl(new BMap.ScaleControl()); // 添加比例尺控件
	map_obj.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件
	map_obj.enableScrollWheelZoom(); //启用滚轮放大缩小
	map_obj.addControl(new BMap.MapTypeControl()); //添加地图类型控件放按

	//默认初始化是否显示标注
	if ($_init_display_marker == true) {
		map_marker = new BMap.Marker(new BMap.Point(OE_MAP_LNG, OE_MAP_LAT));
		map_marker.enableDragging();
		map_obj.addOverlay(map_marker);
		map_marker.addEventListener("dragend",function(e){
			$("#maplng").val(e.point.lng);//获取拖动后的坐标
			$("#maplat").val(e.point.lat);//获取拖动后的坐标
			if ($("#maplng_tips").length > 0) {
				$("#maplng_tips").html(e.point.lng);
			}
			if ($("#maplat_tips").length > 0) {
				$("#maplat_tips").html(e.point.lat);
			}
			
		});
	}
	
	if (map_marker) {//如果存在标注
		map_obj.addOverlay(map_marker);
		map_marker.enableDragging(); //可以拖动
		map_marker.addEventListener("dragend",function(e){
			$("#maplng").val(e.point.lng);//获取拖动后的坐标
			$("#maplat").val(e.point.lat);//获取拖动后的坐标
			if ($("#maplng_tips").length > 0) {
				$("#maplng_tips").html(e.point.lng);
			}
			if ($("#maplat_tips").length > 0) {
				$("#maplat_tips").html(e.point.lat);
			}
		});

	}


	//点击了地图标注跟随
	map_obj.addEventListener("click", function(e){
		map_obj.clearOverlays(); //清空所有的标注
		//重新创建
		map_marker = new BMap.Marker(new BMap.Point(e.point.lng, e.point.lat));
		map_marker.enableDragging();
		map_obj.addOverlay(map_marker);
		$("#maplng").val(e.point.lng);//获取点击的坐标
		$("#maplat").val(e.point.lat);//获取点击的坐标
		if ($("#maplng_tips").length > 0) {
			$("#maplng_tips").html(e.point.lng);
		}
		if ($("#maplat_tips").length > 0) {
			$("#maplat_tips").html(e.point.lat);
		}
		//拖动
		map_marker.addEventListener("dragend",function(e){
			$("#maplng").val(e.point.lng);//获取拖动后的坐标
			$("#maplat").val(e.point.lat);//获取拖动后的坐标
			if ($("#maplng_tips").length > 0) {
				$("#maplng_tips").html(e.point.lng);
			}
			if ($("#maplat_tips").length > 0) {
				$("#maplat_tips").html(e.point.lat);
			}
		});

	});



}
//搜索地区
function _searchMap() {
	$_location_key = $("#maplocation").val();
	if ($_location_key.length > 0) {
		map_obj.clearOverlays(); //清空所有的标注
		//获取第一个标注
		function _getBDFirstMarker(){
			var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
			map_obj.centerAndZoom(pp, OE_MAP_ZOOM);
			//map_obj.addOverlay(new BMap.Marker(pp));    //添加标注
			map_marker = new BMap.Marker(new BMap.Point(pp.lng, pp.lat));
			map_marker.enableDragging();
			map_obj.addOverlay(map_marker);
			$("#maplng").val(pp.lng);//获取纬度
			$("#maplat").val(pp.lat);//获取经度
			if ($("#maplng_tips").length > 0) {
				$("#maplng_tips").html(pp.lng);
			}
			if ($("#maplat_tips").length > 0) {
				$("#maplat_tips").html(pp.lat);
			}

			map_marker.addEventListener("dragend",function(e){
				$("#maplng").val(e.point.lng);//获取拖动后的坐标纬度
				$("#maplat").val(e.point.lat);//获取拖动后的坐标经度
				if ($("#maplng_tips").length > 0) {
					$("#maplng_tips").html(e.point.lng);
				}
				if ($("#maplat_tips").length > 0) {
					$("#maplat_tips").html(e.point.lat);
				}
			});

		}
		var local = new BMap.LocalSearch(map_obj, { //智能搜索
			onSearchComplete: _getBDFirstMarker
		});
		local.search($_location_key);
	}
}

$(function(){
	//搜索地址
	$(document).on("click", "[f='but_sermap_location']", function(){
		_searchMap();
	});
});
