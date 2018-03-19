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
class idCurlClass {
    private $cookie_path = "";
    private $curl_ssl_type = 1; //1-2，curl版本大于7.28.1设置2
    public function __construct() {
        if (!function_exists("curl_init")) {
            die("curl not exist");
        }
        $this->curl_ssl_type = defined("OE_CURL_SSLTYPE") ? OE_CURL_SSLTYPE : $this->curl_ssl_type;
    }

    /**
     * CURL GET
     * @param:: string $url
     * @return:: fail/string
     */
    public function get($url) {
        if (!$url) return false;
        $ssl = substr($url, 0, 8) == 'https://' ? true : false;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($ssl) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $this->curl_ssl_type);
        }
        if (ini_get('safe_mode') || ini_get('open_basedir')) {
            //开启safe mode模式
            $this->curl_redir_exec($curl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $content = curl_exec($curl); //内容
        }
        else {
            //没开启safe mode
            @curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $content = curl_exec($curl); //内容
        }
        $status = curl_getinfo($curl); //状态   
        curl_close($curl);
        if (intval($status['http_code']) == 200) {
            //响应成功
            if (ini_get('safe_mode') || ini_get('open_basedir')) {
                //开启safe mode 需要去除header信息
                if (strpos($content, 'charset=utf-8')) {
                    $astring = explode('charset=utf-8', $content);
                    $content = trim($astring[1]);
                }
                return $content;
            }
            else {
                return $content;
            }
        }
        else {
            //响应失败
            return 'fail';
        }
    }

    /**
     * CURL-post方式获取数据
     * @param string $url URL
     * @param array  $data POST数据
     * @param string $proxy 是否代理
     * @param int    $timeout 请求时间
     */
    public function post($url, $data, $proxy = null, $timeout = 15) {
        if (!$url) return false;
        $ssl = substr($url, 0, 8) == 'https://' ? true : false;
        $curl = curl_init();
        if (!is_null($proxy)) curl_setopt ($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($ssl) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $this->curl_ssl_type); // 从证书中检查SSL加密算法是否存在
        }
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); //在HTTP请求中包含一个"User-Agent: "头的字符串。
        curl_setopt($curl, CURLOPT_HEADER, false); //启用时会将头文件的信息作为数据流输出。
        curl_setopt($curl, CURLOPT_POST, true); //发送一个常规的Post请求
        curl_setopt($curl,  CURLOPT_POSTFIELDS, $data);//Post提交的数据包
        @curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); //启用时会将服务器服务器返回的"Location: "放在header中递归的返回给服务器，使用CURLOPT_MAXREDIRS可以限定递归返回的数量。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //文件流形式
        //curl_setopt($curl, CURLOPT_TIMEOUT, $timeout); //设置cURL允许执行的最长秒数。
        $content = curl_exec($curl);
        $status = curl_getinfo($curl);
        curl_close($curl);
        if (intval($status['http_code']) == 200) {
            //响应成功
            return $content;
        }
        else {
            //响应失败
            return 'fail';
        }
    }

    /**
     * CURL-put方式获取数据
     * @param string $url URL
     * @param array  $data POST数据
     * @param string $proxy 是否代理
     * @param int    $timeout 请求时间
     */
    public function put($url, $data, $proxy = null, $timeout = 15) {
        if (!$url) return false;
        $ssl = substr($url, 0, 8) == 'https://' ? true : false;
        $curl = curl_init();
        if (!is_null($proxy)) curl_setopt ($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($ssl) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $this->curl_ssl_type); // 从证书中检查SSL加密算法是否存在
        }
        $cookie_file = $this->get_cookie_file();
        //curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file); //连接结束后保存cookie信息的文件。
        //curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file);//包含cookie数据的文件名，cookie文件的格式可以是Netscape格式，或者只是纯HTTP头部信息存入文件。
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); //在HTTP请求中包含一个"User-Agent: "头的字符串。
        curl_setopt($curl, CURLOPT_HEADER, false); //启用时会将头文件的信息作为数据流输出。
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); //启用时会将服务器服务器返回的"Location: "放在header中递归的返回给服务器，使用CURLOPT_MAXREDIRS可以限定递归返回的数量。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //文件流形式
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout); //设置cURL允许执行的最长秒数
        $data = (is_array($data)) ? http_build_query($data) : $data;
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Length: ' . strlen($data)));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($curl);
        $status = curl_getinfo($curl);
        curl_close($curl);
        if (intval($status['http_code']) == 200) {
            return $content;
        }
        else {
            return 'fail';
        }
    }

    /**
     * CURL-DEL方式获取数据
     * @param string $url URL
     * @param array  $data POST数据
     * @param string $proxy 是否代理
     * @param int    $timeout 请求时间
     */
    public function del($url, $data, $proxy = null, $timeout = 15) {
        if (!$url) return false;
        $ssl = substr($url, 0, 8) == 'https://' ? true : false;
        $curl = curl_init();
        if (!is_null($proxy)) curl_setopt ($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_URL, $url);
        if ($ssl) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $this->curl_ssl_type); // 从证书中检查SSL加密算法是否存在
        }
        $cookie_file = $this->get_cookie_file();
        //curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file); //连接结束后保存cookie信息的文件。
        //curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file);//包含cookie数据的文件名，cookie文件的格式可以是Netscape格式，或者只是纯HTTP头部信息存入文件。
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); //在HTTP请求中包含一个"User-Agent: "头的字符串。
        curl_setopt($curl, CURLOPT_HEADER, false); //启用时会将头文件的信息作为数据流输出。
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); //启用时会将服务器服务器返回的"Location: "放在header中递归的返回给服务器，使用CURLOPT_MAXREDIRS可以限定递归返回的数量。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //文件流形式
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout); //设置cURL允许执行的最长秒数
        $data = (is_array($data)) ? http_build_query($data) : $data;
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DEL');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Length: ' . strlen($data)));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $content = curl_exec($curl);
        $status = curl_getinfo($curl);
        curl_close($curl);
        if (intval($status['http_code']) == 200) {
            return $content;
        }
        else {
            return 'fail';
        }
    }

    /**
     * fileGet
     * @param:: string $url URL
     * @return:: string/null
     */
    public function fileGet($url) {
        $content = '';
        if (ini_get('allow_url_fopen') == '1') {
            $content = @file_get_contents($url);
            if (empty($content)) {
                $content = $this->get($url);
            }
        }
        else {
            $content = $this->get($url);
        }
        return $content;
    }

    /**
     * 遇到301跳转处理函数
     * @param:: string $ch CURL类名
     * @return::
     */
    private function curl_redir_exec($ch)
    {
        static $curl_loops = 0;
        static $curl_max_loops = 20;
        if ($curl_loops++ >= $curl_max_loops)
        {
            $curl_loops = 0;
            return FALSE;
        }
        //curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        list($header, $data) = explode("\n\n", $data, 2);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($http_code == 301 || $http_code == 302)
        {
            $matches = array();
            preg_match('/Location:(.*?)\n/', $header, $matches);
            $url = @parse_url(trim(array_pop($matches)));
            if (!$url)
            {
                //couldn't process the url to redirect to
                $curl_loops = 0;
                return $data;
            }
            $last_url = parse_url(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL));
            if (!$url['scheme'])
                $url['scheme'] = $last_url['scheme'];
            if (!$url['host'])
                $url['host'] = $last_url['host'];
            if (!$url['path'])
                $url['path'] = $last_url['path'];
            $new_url = $url['scheme'] . '://' . $url['host'] . $url['path'] . ($url['query']?'?'.$url['query']:'');
            curl_setopt($ch, CURLOPT_URL, $new_url);
            //debug('Redirecting to', $new_url);
            return $this->curl_redir_exec($ch);
        } else {
            $curl_loops=0;
            return $data;
        }
    }

}