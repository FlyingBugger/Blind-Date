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
class idDomainClass{
    //地域域名
    private $state_domain = array(
       'al','dz','af','ar','ae','aw','om','az','eg',
       'et','ie','ee','ad','ao','ai','ag','at','au',
       'mo','bb','pg','bs','pk','py','ps','bh','pa',
       'br','by','bm','bg','mp','bj','be','is','pr',
       'ba','pl','bo','bz','bw','bt','bf','bi','bv',
       'kp','gq','dk','de','tl','tp','tg','dm','do',
       'ru','ec','er','fr','fo','pf','gf','tf','va',
       'ph','fj','fi','cv','fk','gm','cg','cd','co',
       'cr','gg','gd','gl','ge','cu','gp','gu','gy',
       'kz','ht','kr','nl','an','hm','hn','ki','dj',
       'kg','gn','gw','ca','gh','ga','kh','cz','zw',
       'cm','qa','ky','km','ci','kw','cc','hr','ke',
       'ck','lv','ls','la','lb','lt','lr','ly','li',
       're','lu','rw','ro','mg','im','mv','mt','mw',
       'my','ml','mk','mh','mq','yt','mu','mr','us',
       'um','as','vi','mn','ms','bd','pe','fm','mm',
       'md','ma','mc','mz','mx','nr','np','ni','ne',
       'ng','nu','no','nf','na','za','aq','gs','eu',
       'pw','pn','pt','jp','se','ch','sv','ws','yu',
       'sl','sn','cy','sc','sa','cx','st','sh','kn',
       'lc','sm','pm','vc','lk','sk','si','sj','sz',
       'sd','sr','sb','so','tj','tw','th','tz','to',
       'tc','tt','tn','tv','tr','tm','tk','wf','vu',
       'gt','ve','bn','ug','ua','uy','uz','es','eh',
       'gr','hk','sg','nc','nz','hu','sy','jm','am',
       'ac','ye','iq','ir','il','it','in','id','uk',
       'vg','io','jo','vn','zm','je','td','gi','cl',
       'cf','cn','yr'
    );
    //顶级域名
    private $top_domain = array(
        'com', 'arpa', 'edu', 'gov', 'int', 'mil', 'net', 'org',
        'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero',
        'xxx', 'idv', 'me', 'mobi', 'wang', 'xin', 'xn--fiqs8s'
    );
    private $hostname = null;    
    
    /**
     * 获取根域名
     * @param:: string $inhost 传入值
     * @return:: string localhost/127.0.0.1/ip/root domain
    */
    public function getDomain($inhost='') {
        $domain = null;
        $this->_getHostName($inhost);
        if (!empty($this->hostname)) {
            if ($this->hostname == 'locahost' || $this->hostname == '127.0.0.1') { 
                $domain = $this->hostname;
            }
            else {
                if (false === OEidIsIp($this->hostname)) {
                    //获取根域名
                    $state = $this->_getState();
                    $top = $this->_getTop($state);
                    if (!empty($state)) {
                        if (!empty($top)) {
                            $suffix = $top.'.'.$state;
                        }
                        else {
                            $suffix = $state;
                        }
                    }
                    else {
                        if (!empty($top)) {
                            $suffix = $top;
                        }
                    }
                    $domain = $this->_getRootDomain($suffix);    
                }
                else {
                    $domain = $this->hostname;
                }     
            }
        }
        return $domain;
    }
    
    /**
     * 获取地域后缀
     * @return:: string $state
    */
    private function _getState() {
        $state = '';
        $domainarr = explode('.', $this->hostname);
        $count = count($domainarr);
        $last = $domainarr[$count-1];
        if (in_array($last, $this->state_domain)) {
            $state = $last;
        }
        return $state;
    }
    
    /**
     * 获取顶级域名
     * @param:: string $state 地域标识
     * @return:: string $top
    */
    private function _getTop($state) {
        $top = '';
        $domainarr = explode('.', $this->hostname);
        $count = count($domainarr);
        if (!empty($state)) {
            $last_top = $domainarr[$count-2];
        }
        else {
            $last_top = $domainarr[$count-1];
        }
        if (in_array($last_top, $this->top_domain)) {
            $top = $last_top;
        }      
        return $top;
    }
    
    /**
     * 处理根域名
     * @param:: string $suffix后缀名
     * @return:: string $rootdomain
    */
    private function _getRootDomain($suffix) {
        $rootdomain = null;
        $domainarr = explode('.', $this->hostname);
        $count = count($domainarr);
        if ($count > 2) {
            if (strpos($suffix, '.')) {
                $rootdomain = $domainarr[$count-3].'.'.$suffix;
            }
            else {
                $rootdomain = $domainarr[$count-2].'.'.$suffix;
            }
        }  
        else { 
            $rootdomain = $this->hostname;
        } 
        return $rootdomain;     
    }
    
    /**
     * 获取hostname
     * @param:: string $inputdomain 传入的值
     * @return:: string $hostname
    */
    private function _getHostName($inputdomain='') {
        if (!empty($inputdomain)) {
            $this->hostname = strtolower($inputdomain);
        }
        else {
            $this->hostname = strtolower($_SERVER['HTTP_HOST']);
            if (empty($this->hostname)) {
                $this->hostname = strtolower($_SERVER['SERVER_NAME']);
            }
        }
    }
} 
?>