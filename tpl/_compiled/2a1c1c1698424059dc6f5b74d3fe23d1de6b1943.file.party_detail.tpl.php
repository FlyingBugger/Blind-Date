<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:56:22
         compiled from "D:\freehost\ftp122778453\web\tpl\wap\party_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247315a2fe006bad197-91141301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1c1c1698424059dc6f5b74d3fe23d1de6b1943' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\wap\\party_detail.tpl',
      1 => 1512548592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247315a2fe006bad197-91141301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'party' => 0,
    'time' => 0,
    'login' => 0,
    'wapfile' => 0,
    'bmlist' => 0,
    'val' => 0,
    'wapskin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fe0073face0_60967967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fe0073face0_60967967')) {function content_5a2fe0073face0_60967967($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("party", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_party_detail">
      <div class="hd">
        <dl>
          <dt><img src="<?php echo $_smarty_tpl->tpl_vars['party']->value['drawimg'];?>
" /></dt>
          <dd class="dd_1">
            <h3>
              <p><?php echo $_smarty_tpl->tpl_vars['party']->value['title'];?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['party']->value['endbmtime']>$_smarty_tpl->tpl_vars['time']->value){?>
                <span class="p_2 current">活动报名中</span>
              <?php }else{ ?>
              <span class="p_2">结束报名</span>
              <?php }?>
            </h3>
            <p class="p_1">
              活动人数：
              <span class="span_1"><i class="iconfont">男</i> <em><?php if ($_smarty_tpl->tpl_vars['party']->value['limitman']>0){?><?php echo $_smarty_tpl->tpl_vars['party']->value['limitman'];?>
人<?php }else{ ?>不限<?php }?></em></span> 
              <span class="span_2"><i class="iconfont">女</i> <em><?php if ($_smarty_tpl->tpl_vars['party']->value['limitlady']>0){?><?php echo $_smarty_tpl->tpl_vars['party']->value['limitlady'];?>
人<?php }else{ ?>不限<?php }?></em></span> 
            </p>
          </dd>
          <div class="ge"></div>
          <dd class="dd_4">
            <p class="p_4"> 
              <?php if ($_smarty_tpl->tpl_vars['party']->value['moneyman']==$_smarty_tpl->tpl_vars['party']->value['moneylady']){?>
                <?php if ($_smarty_tpl->tpl_vars['party']->value['moneyman']>0){?>
                报名费用：<label>￥<?php echo $_smarty_tpl->tpl_vars['party']->value['moneyman'];?>
</label>
                <?php }else{ ?>
                <label>报名费用：免费</label>
                <?php }?>
              <?php }else{ ?>
              <span class="span_1"><i class="iconfont">男</i><em><?php if ($_smarty_tpl->tpl_vars['party']->value['moneyman']>0){?>￥<?php echo $_smarty_tpl->tpl_vars['party']->value['moneyman'];?>
<?php }else{ ?>免费<?php }?></em></span> 
              <span class="span_2"><i class="iconfont">女</i><em><?php if ($_smarty_tpl->tpl_vars['party']->value['moneylady']>0){?>￥<?php echo $_smarty_tpl->tpl_vars['party']->value['moneylady'];?>
<?php }else{ ?>免费<?php }?></em></span> 
              <?php }?>
            </p>
            <p class="p_3"> 活动时间： 
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['party']->value['starttime'],"%Y/%m/%d %H:%M");?>
 - 
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['party']->value['endtime'],"%Y/%m/%d %H:%M");?>
 
            </p>
          </dd>
          <dd class="dd_3 cursor"<?php if ($_smarty_tpl->tpl_vars['login']->value['status']==1){?>f="but_open_partybmuser" data-id="<?php echo $_smarty_tpl->tpl_vars['party']->value['partyid'];?>
"<?php }else{ ?> onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"<?php }?> >
            <?php $_smarty_tpl->tpl_vars["bmlist"] = new Smarty_variable(vo_list("mod={partybm} where={v.partyid='".((string)$_smarty_tpl->tpl_vars['party']->value['partyid'])."'} num={5}}"), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['bmlist']->value)){?>
            <p class="userlist"> 
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bmlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?> 
              <span><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['avatar'];?>
" /></span>
              <?php } ?> 
              <i class="iconfont">&#xe642;</i>
            </p>
            <?php }?>
            <p class="p_1"> 
              共有<i><?php echo ($_smarty_tpl->tpl_vars['party']->value['bmmans']+$_smarty_tpl->tpl_vars['party']->value['bmladys']+$_smarty_tpl->tpl_vars['party']->value['otherbms']);?>
</i>人报名
			  <em class="iconfont em_1">&#xe621;</em> <i><?php echo $_smarty_tpl->tpl_vars['party']->value['bmmans'];?>
</i>人  
              <em class="iconfont em_2">&#xe622;</em> <i><?php echo $_smarty_tpl->tpl_vars['party']->value['bmladys'];?>
</i>人 
			  <?php if ($_smarty_tpl->tpl_vars['party']->value['otherbms']>0){?>
			  <em class="iconfont em_3">&#xe85d;</em> <i><?php echo $_smarty_tpl->tpl_vars['party']->value['otherbms'];?>
</i>人 
			  <?php }?>
            </p>
          </dd>
          <div class="ge"></div>
          <dd class="dd_2">
            <p class="p_1"> 
              <i class="iconfont">&#xe636;</i>
              地址：
              <label>
                <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['party']->value['area1']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['party']->value['area2']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['party']->value['area3']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['party']->value['area4']),$_smarty_tpl);?>
 
                <?php echo $_smarty_tpl->tpl_vars['party']->value['address'];?>
 
              </label>
            </p>
            <p class="p_2"> 
              <i class="iconfont">&#xe614;</i> 截止报名： 
              <label> 
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['party']->value['endbmtime'],"%Y/%m/%d %H:%M");?>
 
              </label> </p>
            <p class="p_1"> 
              <i class="iconfont">&#xe672;</i> 
              公交路线：
              <label>
                <?php echo $_smarty_tpl->tpl_vars['party']->value['traffic'];?>
 
              </label>
            </p>
            <p class="p_1"> 
              <i class="iconfont">&#xe646;</i> 
              联系方式：
              <label><?php echo $_smarty_tpl->tpl_vars['party']->value['contact'];?>
</label>
            </p>
          </dd>
        </dl>
        <div class="ge"></div>
      </div>
      <div class="bd" id="party_detail">
        <h3>活动详情</h3>
        <?php echo $_smarty_tpl->tpl_vars['party']->value['content'];?>
 
      </div>
      <div class="ge"></div>
      <div class="bd">
        <h3>活动流程</h3>
        <dl>
          <dt>1、报名活动</dt>
          <dd>找到感兴趣的活动，提交报名信息；</dd>
        </dl>
        <dl>
          <dt>2、支付费用</dt>
          <dd>在线支付活动费用，也可以参加活动时现场支付；</dd>
        </dl>
        <dl>
          <dt>3、准时参加活动</dt>
          <dd>现场签到，参加相亲活动；</dd>
        </dl>
        <dl>
          <dt>4、活动结束</dt>
          <dd>有心仪的对象，进一步交往。</dd>
        </dl>
      </div>
    </div>

 
 <div class="oe_shade" style="display:none;" id="myparty_box">
  <div class="myparty_box" id="myparty_data">
  </div>
</div>
 
 
<div class="oe_party_btn">
  <?php if ($_smarty_tpl->tpl_vars['party']->value['bm']=='0'){?>
  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
  <span class="span_1" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"><i class="iconfont">&#xe668;</i>立即报名</span>
  <?php }else{ ?>
  <span class="span_1" f="but_open_partybm" data-id="<?php echo $_smarty_tpl->tpl_vars['party']->value['partyid'];?>
"><i class="iconfont">&#xe668;</i>立即报名</span>
  <?php }?>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='1'){?>
  <span class="span_1">您已报名</span>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='2'){?>
  <span class="span_1">已结束</span>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='3'){?>
  <span class="span_1">名额已满</span>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='4'){?>
  <span class="span_1">已报名，待付款</span>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='5'){?>
    <span class="span_1">已报名，待审核</span>
  <?php }elseif($_smarty_tpl->tpl_vars['party']->value['bm']=='6'){?>
    <span class="span_1">已报名，审核不通过</span>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login');"> <i class="iconfont">&#xe664;</i>我报名的</span>
  <?php }else{ ?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=myparty&a=list');")"> <i class="iconfont">&#xe664;</i>我报名的</span>
  <?php }?>
</div>
<div style="height:45px;"></div>

<div class="oe_shade" style="display:none;" id="party_bmuser_box">
    <div class="party_userlist" style="right:0px;display:none;" id="party_bmuser_data"> </div>
</div>
<!--//报名会员-->

<div class="oe_shade" style="display:none;" id="myparty_box">
    <div class="myparty_box" id="myparty_data"> </div>
</div>
<!--//我报名的-->

<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/party.js?<?php echo time();?>
"></script>
</body>
</html><?php }} ?>