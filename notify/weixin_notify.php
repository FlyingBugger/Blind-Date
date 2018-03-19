<?php
/**
 * Copyright (C) OElove All rights reserved.
 * Url http://www.xinlove.online
 *     http://www.xinlove.online
 * Update 2017.11.24
 */
require_once('source/core/run.php');
//c&a参数
$c = "pay";
$a = "notifywxpay";
//Controller
if (!in_array($c,
    array(
        'index', 'passport', 'user', 'home', 'credit', 'party', 'pay',
        'cp', 'cp_do', 'cp_info', 'cp_message', 'cp_outmsg', 'cp_visit', 'cp_visitme',
        'cp_listen', 'cp_fans', 'cp_money', 'cp_match', 'cp_cond', 'cp_photo', 'cp_buy',
        'cp_inhi', 'cp_outhi', 'cp_recharge',
    ))) {
    XHandle::error('Wap controller is forbiden!');
}
$control_base = BASE_ROOT."source/control/wapbase.php";
$hook_base = BASE_ROOT."source/control/apphook.php";
$control_path = BASE_ROOT."source/control/wap/{$c}.php";
if (!file_exists($control_path)) {
    XHandle::error('Wap controller file is not found!');
}
else {
    require_once($control_base);
    require_once($hook_base);
    require_once($control_path);
    $control = new control();
    $method = 'control_'.$a;
    if (method_exists($control, $method) && $a{0} != '_') {
        $control->$method();
    }
    else {
        XHandle::error('Wap controller action is not found!');
    }
    unset($control);
}
?>