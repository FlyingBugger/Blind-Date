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
require_once("credit_curl.class.php");
require_once("credit_domain.class.php");
require_once("credit_core.function.php");
class idCredit {
    var $credit_config;
    var $credit_token;
    var $credit_domain;
    var $credit_serv_http = "http://id.oephp.com/";//网关地址
    public function __construct($credit_config){
        $this->credit_config = $credit_config;
    }
    public function credit($credit_config) {
        $this->__construct($credit_config);
    }

    /**
     * 生成Token、组合需要校验的字符串
     * @return:: array(flag, token) 1-开启，-1未开启
     */
    public function creatToken() {
        $flag = -1;
        if ($this->credit_config['flag'] == 1 && !empty($this->credit_config['creditkey'])) {
            $domainClass = new idDomainClass;
            $this->credit_domain = $domainClass->getDomain();
            $flag = 1;
            $token_array = array(
                "domain"=>$this->credit_domain,
                "key"=>$this->credit_config['creditkey'],
            );
            $this->credit_token = base64_encode(json_encode($token_array)); //json之后再base64加密
        }
        return array($flag, $this->credit_token);
    }

    /**
     * 获取申请应用状态 7.04.20
     * @param:: string $domain 根域名
     * @return:: array($response, $result) 1-审核通过，返回key，2-审核失败，返回原因，3-资料待审核，0-未申请，-1-请求失败
    */
    public function getAppStatus($domain = "") {
        $response = -1;
        $result = "";
        if (!empty($domain)) {
            $http_url = $this->credit_serv_http."index.php?c=creditapi&a=appstatus&token=".urlencode(base64_encode($domain));
            $_http_data = OEidGetHttpResponseGET($http_url);
            if (!empty($_http_data) && $_http_data != "fail") {
                if($this->credit_config['input_charset'] == 'gbk'){
                    $_http_data = OEidUtfToGbk($_http_data);
                }
                $http_array = json_decode($_http_data, true);
                if (is_array($http_array)) {
                    $response = intval($http_array['response']);
                    $result = OEidFilterBadChar($http_array['result']);
                }
            }
        }
        return array($response, $result);
    }

    /**
     * 诚信联盟应用申请 7.04.20
     * @param:: array $args 申请参数
     * @return:: tinyint $res 0-提交失败，1-提交成功
     */
    public function doJoin($args) {
        $res = 0;
        $domainClass = new idDomainClass;
        $this->credit_domain = $domainClass->getDomain(); //根域名
        $_items = "";
        if (is_array($args)) {
            if (!isset($args['sitename'])) {
                $args["sitename"] = $this->credit_config['sitename'];
            }
            if (!isset($args['siteurl'])) {
                $args["siteurl"] = $this->credit_config['siteurl'];
            }
            foreach ($args as $key=>$value) {
                if ($this->credit_config['input_charset'] == 'gbk') {
                    $_items .= $key."=".urlencode(OEidGbkToUtf($value))."&";
                }
                else {
                    $_items .= $key."=".urlencode($value)."&";
                }
            }
        }
        $_url = $this->credit_serv_http."index.php?c=creditapi&a=join&domain=".urlencode($this->credit_domain)."&".$_items;
        $_http_data = OEidGetHttpResponseGET($_url);
        if (!empty($_http_data) && $_http_data != "fail") {
            if($this->credit_config['input_charset'] == 'gbk'){
                $_http_data = OEidUtfToGbk($_http_data);
            }
            $http_array = json_decode($_http_data, true);
            if (is_array($http_array)) {
                $res = intval($http_array['response']);
            }
        }
        return $res;
    }

    /**
     * 通信状态 7.04.21
     * @return:: tinyint 0-通信失败，1-通信成功
    */
    public function doTest() {
        $res = 0;
        list($flag, $token) = $this->creatToken();
        if ($flag == 1) {
            $_url = $this->credit_serv_http."index.php?c=creditapi&a=test&token=".urlencode($token);
            $_http_data = OEidGetHttpResponseGET($_url);
            if (!empty($_http_data) && $_http_data != "fail") {
                if($this->credit_config['input_charset'] == 'gbk'){
                    $_http_data = OEidUtfToGbk($_http_data);
                }
                $http_array = json_decode($_http_data, true);
                if (is_array($http_array)) {
                    $res = intval($http_array['response']);
                }
            }
        }
        return $res;
    }

    /**
     * 提交举报资料 7.04.21
     * @param:: array $datalist 资料
     * @return:: array($res, $msg) 0-提交失败，1-提交成功
     */
    public function doSubmit($data) {
        $res = 0;
        $msg = "";
        list($flag, $token) = $this->creatToken();
        if ($flag == 1 && !empty($data)) {
            $obj_domain = new idDomainClass;
            $domain = $obj_domain->getDomain(); //根域名
            unset($obj_domain);

            if (!isset($data['sitename'])) {
                $sitename = $this->credit_config['sitename'];
            }
            else {
                $sitename = $data['sitename'];
            }
            if (!isset($data['siteurl'])) {
                $siteurl = $this->credit_config['siteurl'];
            }
            else {
                $siteurl = $data['siteurl'];
            }
            $ip = OEidGetIp();
            $args = array(
                'type'=>$data['type'],
                'name'=>$data['name'],
                'userid'=>intval($data['userid']),
                'reason'=>$data['reason'],
                'callbackid'=>intval($data['callbackid']),
                'token'=>$token,
                'ip'=>$ip,
                'domain'=>$domain,
                'sitename'=>$sitename,
                'siteurl'=>$siteurl,
            );
            if ($this->credit_config['input_charset'] == 'gbk') {
                $strcode = "";
                foreach($args as $key=>$val){
                    $strcode .= $key."=".urlencode(OEidGbkToUtf($val))."&";
                }
            }
            else {
                //键值对 urlencode字符串
                $strcode = OEidCreateLinkstringUrlencode($args);
            }
            $_http_url = $this->credit_serv_http."index.php?c=creditapi&a=submit&".$strcode;
            $_http_data = OEidGetHttpResponseGET($_http_url);
            if (!empty($_http_data) && $_http_data != "fail") {
                if ($this->credit_config['input_charset'] == 'gbk') {
                    $_http_data = OEidUtfToGbk($_http_data);
                }
                $http_array = json_decode($_http_data, true);
                if (is_array($http_array)) {
                    $res = intval($http_array['response']);
                    $msg = OEidFilterBadChar($http_array['result']);
                }
            }
        }
        return array($res, $msg);
    }

    /**
     * 查询某项资料 7.04.21
     * @param:: sting $type 类型 idcard/mobile/email/qq/weixin/all-null
     * @param:: string $value 值
     * @return:: tinyint 1-查询成功，有举报记录；2-查询成功，没有举报记录；3-查询失败，请检查密钥；0-查询失败，已关闭
     */
    public function doGet($type, $value) {
        $res = 0;
        $msg = "";
        list($flag, $token) = $this->creatToken();
        if ($flag == 1) {
            if($this->credit_config['input_charset'] == 'gbk'){
                $value = OEidGbkToUtf($value);
            }
            $_url = $this->credit_serv_http."index.php?c=creditapi&a=getcredit&token=".urlencode($token).
                "&type=".urlencode($type)."&name=".urlencode($value);
            $_http_data = OEidGetHttpResponseGET($_url);
            if (!empty($_http_data) && $_http_data != "fail") {
                if ($this->credit_config['input_charset'] == 'gbk') {
                    $_http_data = OEidUtfToGbk($_http_data);
                }
                $http_array = json_decode($_http_data, true);
                if (is_array($http_array)) {
                    $res = intval($http_array['response']);
                    $msg = $http_array['result'];
                }
            }
        }
        else {
            $msg = "未开启诚信查询应用";
        }
        return array($res, $msg);
    }

    /**
     * 查询资料举报详情内容 7.04.21
     * @param:: sting $type 类型 idcard/mobile/email/qq/weixin/all
     * @param:: string $value 值
     * @return:: $res -1：未开启，0-失败，2-网站不存在或密钥错误，1-获取详情成功
     */
    public function doGetDetails($type, $value) {
        $res = 0;
        $msg = "";
        list($flag, $token) = $this->creatToken();
        if ($flag == 1) {
            if ($this->credit_config['input_charset'] == 'gbk') {
                $value = OEidGbkToUtf($value);
            }
            $_url = $this->credit_serv_http."index.php?c=creditapi&a=getdetails&token=".urlencode($token).
                "&type=".urlencode($type)."&name=".urlencode($value);
            $_http_data = OEidGetHttpResponseGET($_url);
            if (!empty($_http_data) && $_http_data != "fail") {
                if($this->credit_config['input_charset'] == 'gbk'){
                    $_http_data = OEidUtfToGbk($_http_data);
                }
                $http_array = json_decode($_http_data, true);
                if (is_array($http_array)) {
                    $res = intval($http_array['response']);
                    $msg = $http_array['result'];//1状态 返回二维数组，失败 返回字符串
                }
            }
        }
        else {
            $msg = "未开启诚信查询应用";
        }
        return array($res, $msg);
    }
}
?>