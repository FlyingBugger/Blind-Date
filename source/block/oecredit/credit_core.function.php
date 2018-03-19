<?php
/**
 * Copyright (C) OElove All rights reserved.free
 * <E-Mail：service@phpcoo.com>
 * Url http://www.phpcoo.com
 *     http://www.oephp.com
 *     http://www.oelove.com
 * Update 2017.04.24
 */
if (!defined('IN_OESOFT')) {
    exit('OElove[OEPHP] Access Denied');
}
/**
 *	数据基础验证-是否是IP
 * 	@param  string $value 需要验证的值
 *  @return bool
 */
function OEidIsIp($value) {
    if (preg_match('/^(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])$/', trim($value))) {
        return true;
    }
    else {
        return false;
    }
}

/**
 * 过滤指定的字符
 * @param:: string $str 需要过滤的值
 * @retrun:: string
 */
function OEidFilterBadChar($str) {
    if (empty($str) OR $str == '') {
        return "";
    }
    else {
        $badstring = array("'", '"', "\"", "=", "#", "$", ">", "<", "\\", "/*", "%", "\0", "%00", '*');
        $newstring = array('', '', '', '', '', '', '', '', '', '', '', '', '', '');
        $str = str_replace($badstring, $newstring, $str);
        return trim($str);
    }
}

//utf-8 to gbk
function OEidUtfToGbk($value){
    if (function_exists('iconv')) {
        return iconv('UTF-8', 'GBK', $value);
    }
    else {
        if (function_exists('mb_convert_encoding')) {
            return mb_convert_encoding($value, 'UTF-8', 'GBK');
        }
        else {
            return $value;
        }
    }
}

//gbk to utf-8
function OEidGbkToUtf($value){
    if (function_exists('iconv')) {
        return iconv('GBK', 'UTF-8', $value);
    }
    else {
        if (function_exists('mb_convert_encoding')) {
            return mb_convert_encoding($value, 'GBK', 'UTF-8');
        }
        else {
            return $value;
        }
    }
}

/**
 * 获取客户端IP
 * @return:: string
 */
function OEidGetIp() {
    static $realip;
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    $one = '([0-9]|[0-9]{2}|1\d\d|2[0-4]\d|25[0-5])';
    if(!@preg_match('/'.$one.'\.'.$one.'\.'.$one.'\.'.$one.'$/', $realip)){$realip='0.0.0.0';};
    return $realip;
}

/**
 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
 * @param $para 需要拼接的数组
 * return 拼接完成以后的字符串
 */
function OEidCreateLinkstring($para) {
	$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".$val."&";
	}
	//去掉最后一个&字符
	$arg = substr($arg,0,count($arg)-2);
	
	//如果存在转义字符，那么去掉转义
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
}

/**
 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串，并对字符串做urlencode编码
 * @param $para 需要拼接的数组
 * return 拼接完成以后的字符串
 */
function OEidCreateLinkstringUrlencode($para) {
	$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".urlencode($val)."&";
	}
	//去掉最后一个&字符
	$arg = substr($arg,0,count($arg)-2);
	
	//如果存在转义字符，那么去掉转义
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
}

/**
 * 除去数组中的空值和签名参数
 * @param $para 签名参数组
 * return 去掉空值与签名参数后的新签名参数组
 */
function OEidParaFilter($para) {
	$para_filter = array();
	while (list ($key, $val) = each ($para)) {
		if($key == "sign" || $key == "sign_type" || $val == "")continue;
		else	$para_filter[$key] = $para[$key];
	}
	return $para_filter;
}

/**
 * 对数组排序
 * @param $para 排序前的数组
 * return 排序后的数组
 */
function OEidArgSort($para) {
	ksort($para);
	reset($para);
	return $para;
}

/**
 * 写日志，方便测试（看网站需求，也可以改成把记录存入数据库）
 * 注意：服务器需要开通fopen配置
 * @param $word 要写入日志里的文本内容 默认值：空值
 */
function OEidLogResult($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	fwrite($fp,"执行日期：".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
	flock($fp, LOCK_UN);
	fclose($fp);
}

//CURL远程提交数据
function OEidGetHttpResponsePOST($url, $para) {
    $http_curl = new idCurlClass;
    return $http_curl->post($url, $para);
}

//CURL远程获取数据
function OEidGetHttpResponseGET($url) {
    $http_curl = new idCurlClass;
    return $http_curl->get($url);
}

/**
 * 实现多种字符编码方式
 * @param $input 需要编码的字符串
 * @param $_output_charset 输出的编码格式
 * @param $_input_charset 输入的编码格式
 * return 编码后的字符串
 */
function OEidCharsetEncode($input,$_output_charset ,$_input_charset) {
	$output = "";
	if(!isset($_output_charset) )$_output_charset  = $_input_charset;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset change.");
	return $output;
}

/**
 * 实现多种字符解码方式
 * @param $input 需要解码的字符串
 * @param $_output_charset 输出的解码格式
 * @param $_input_charset 输入的解码格式
 * return 解码后的字符串
 */
function OEidCharsetDecode($input,$_input_charset ,$_output_charset) {
	$output = "";
	if(!isset($_input_charset) )$_input_charset  = $_input_charset ;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset changes.");
	return $output;
}

?>