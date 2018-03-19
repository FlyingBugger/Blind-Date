/**
 * [OElove] (C)2010-2099 oelove.com Inc.
 * Email:service@phpcoo.com,phpcoo@qq.com
 * This is NOT a freeware, use is subject to license terms
 * $ Last update 2016/11/23 by OEdev $
*/
var _time_str = ""; 
document.writeln("<div id=\"_contents\" style=\"padding:6px; background-color:#E3E3E3; font-size: 12px; border: 1px solid #777777; position:absolute; left:0; top:0; z-index:9999;display:none;\">");
_time_str += "\u65f6<select name=\"_hour\">"; 
for (var h = 0; h <= 9; h++) { 
	_time_str += "<option value=\"0" + h + "\">0" + h + "</option>"; 
} 
for (var h = 10; h <= 23; h++) { 
	_time_str += "<option value=\"" + h + "\">" + h + "</option>"; 
} 

_time_str += "</select> \u5206<select name=\"_minute\">"; 
for (var m = 0; m <= 9; m++) { 
	_time_str += "<option value=\"0" + m + "\">0" + m + "</option>"; 
} 
for (var m = 10; m <= 59; m++) { 
	_time_str += "<option value=\"" + m + "\">" + m + "</option>"; 
} 

_time_str += "</select> \u79d2<select name=\"_second\">"; 
for (var s = 0; s <= 9; s++) { 
	_time_str += "<option value=\"0" + s + "\">0" + s + "</option>"; 
} 
for (var s = 10; s <= 59; s++) { 
	_time_str += "<option value=\"" + s + "\">" + s + "</option>"; 
} 
_time_str += "</select> <input name=\"queding\" type=\"button\" onclick=\"_selectTimer()\" value=\"\u786e\u5b9a\" style=\"font-size:12px\" /></div>"; 
document.writeln(_time_str); 
var _fieldname;
//弹出时间框
function _setTimer(tt) { 
	_fieldname = tt; 
	var ttop = tt.offsetTop; //TT控件的定位点高 
	var thei = tt.clientHeight; //TT控件本身的高 
	var tleft = tt.offsetLeft; //TT控件的定位点宽 
	while (tt = tt.offsetParent) { 
		ttop += tt.offsetTop; 
		tleft += tt.offsetLeft; 
	}
	$_top = (ttop + thei + 4);
	$_left = tleft;
	var _cont_obj = document.getElementById("_contents");
	_cont_obj.style.display = "block"; 
	_cont_obj.style.top = $_top+"px";
	_cont_obj.style.left = $_left+"px";
}
//确定选择
function _selectTimer() { 
	_fieldname.value = document.all._hour.value + ":" + document.all._minute.value + ":" + document.all._second.value;
	var _cont_obj = document.getElementById("_contents");
	_cont_obj.style.display = "none"; 
} 