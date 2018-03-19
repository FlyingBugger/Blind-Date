<?php

if(!defined('IN_OESOFT')) {
exit('Access Denied');
}
;echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
';if ($type == 0){;echo '<meta http-equiv="refresh" content="1;URL=';echo $url;;echo '" />
';};echo '<meta http-equiv="cache-control" content="no-cache"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;  minimum-scale=1.0; maximum-scale=1.0" />
<link href="';echo PATH_URL;;echo 'tpl/wap/style/halt.css"  rel="stylesheet" type="text/css" />
<title>信息提示</title>
</head>
<body>
<h3 class="slide_bg_d"><span class="pl_5">信息提示</span></h3>
<div class="index_p">
  <p class="op">
  ';if ($type == 0) {;echo '  <img src="';echo PATH_URL;;echo 'tpl/wap/images/ok.gif"/>
  ';}else {;echo '  <img src="';echo PATH_URL;;echo 'tpl/wap/images/error.gif"/>
  ';};echo '  ';echo $str;;echo '  </p>
  ';if ($type == 1){;echo ' 
  <a href="javascript:history.back();">返回上一页</a>
  <br />
  如果返回上一页链接无法点击,请按浏览器的后退按钮!
  ';}else {;echo '  <br />1秒后页面没有自动跳转请点<a href=\'';echo $url;;echo '\'>这里</a>
  ';};echo '</div>
</body>
</html>';?>
