<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:19:06
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\partybm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288875a2f66caa3d0a8-07522828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0228c6d88479d753c8b1a2f4ed3fceff7a099cec' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\partybm.tpl',
      1 => 1511231066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288875a2f66caa3d0a8-07522828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'stitle' => 0,
    'sgender' => 0,
    'suserid' => 0,
    'susername' => 0,
    'sflag' => 0,
    'spayflag' => 0,
    'partybm' => 0,
    'volist' => 0,
    'urlpath' => 0,
    'c' => 0,
    'comeurl' => 0,
    'total' => 0,
    'showpage' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f66cb6ddd40_81082652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f66cb6ddd40_81082652')) {function content_5a2f66cb6ddd40_81082652($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>活动管理</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>
<style>
    .tab tr th {background:#f1f2f3;color:#333333;padding-left:10px;font-size:13px;text-align:left; height:30px;}
    .tab tr td{background:#fff;font-size:12px;}
</style>
<?php if ($_smarty_tpl->tpl_vars['a']->value=='run'){?>
<div class="main-wrap">
  <div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=party">活动报名</a></p></div>
  <div class="main-cont">
    <h3 class="title">活动报名</h3>
	<div class="search-area ">
	  <form method="post" id="search_form" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=partybm" />
	  <div class="item">
          活动：<input type="text" name="stitle" id="stitle" class="input-150" value="<?php echo $_smarty_tpl->tpl_vars['stitle']->value;?>
" />&nbsp;
          性别：<select name="sgender" id="sgender">
              <option value="">不限</option>
              <option value="1"<?php if ($_smarty_tpl->tpl_vars['sgender']->value=='1'){?> selected<?php }?>>男</option>
              <option value="2"<?php if ($_smarty_tpl->tpl_vars['sgender']->value=='2'){?> selected<?php }?>>女</option>
          </select>&nbsp;
          会员UID：<input type="text" name="suserid" id="suserid" class="input-100" value="<?php if ($_smarty_tpl->tpl_vars['suserid']->value>0){?><?php echo $_smarty_tpl->tpl_vars['suserid']->value;?>
<?php }?>" />&nbsp;
          会员名：<input type="text" name="susername" id="susername" class="input-100" value="<?php echo $_smarty_tpl->tpl_vars['susername']->value;?>
" />&nbsp;
          状态：
          <select name="sflag" id="sflag">
              <option value="">不限</option>
              <option value="1"<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='1'){?> selected<?php }?>>已成功报名</option>
              <option value="2"<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='2'){?> selected<?php }?>>已取消报名</option>
              <option value="3"<?php if ($_smarty_tpl->tpl_vars['sflag']->value=='3'){?> selected<?php }?>>待审核报名</option>
          </select>&nbsp;
          支付状态：
          <select name="spayflag" id="spayflag">
              <option value="">不限</option>
              <option value="1"<?php if ($_smarty_tpl->tpl_vars['spayflag']->value=='1'){?> selected<?php }?>>已支付</option>
              <option value="2"<?php if ($_smarty_tpl->tpl_vars['spayflag']->value=='2'){?> selected<?php }?>>待支付</option>
          </select>
          &nbsp;&nbsp;&nbsp;<input type="submit" name="btn_search" id="btn_search" class="button_s" value="搜索" />
	  </div>
	  </form>
	</div>

	<form action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=party&a=del" method="post" name="myform" id="myform" style="margin:0">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table" align="center">
	  <thead class="tb-tit-bg">
	  <tr>
          <th width="8%">ID</th>
          <th width="16%">活动</th>
          <th width="8%">LoveID</th>
          <th width="20%">报名会员</th>
          <th width="8%">报名时间</th>
          <th width="8%">报名费</th>
          <th width="8%">支付状态</th>
          <th width="8%">支付时间</th>
          <th width="8%">状态</th>
          <th>操作</th>
      </tr>
	  </thead>
	  <tfoot class="tb-foot-bg"></tfoot>

        <?php if (empty($_smarty_tpl->tpl_vars['partybm']->value)){?>
        <tr>
            <td class="text_center" colspan="10">没有符合条件的信息</td>
        </tr>
        <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partybm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <tr>
            <td class="text_center"><input type="checkbox" name="id[]" id="id[]" class="selall" value="<?php echo $_smarty_tpl->tpl_vars['volist']->value['bmid'];?>
" /><?php echo $_smarty_tpl->tpl_vars['volist']->value['bmid'];?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=party&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['bmid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></td>
            <td class="text_center"><?php echo $_smarty_tpl->tpl_vars['volist']->value['loveid'];?>
</td>
            <td>
                <img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatar'];?>
" width="30px" height="30px" f="viewimg" />
                uid:<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
/<?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['volist']->value['gender']==1){?>男<?php }else{ ?>女<?php }?>/<?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁/<?php echo cmd_area(array('type'=>"text",'cache'=>"1",'value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>

            </td>
            <td class="text_center">
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y-%m-%d");?>
<br />
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%H:%M:%S");?>

            </td>
            <td>
                ¥<?php echo doubleval($_smarty_tpl->tpl_vars['volist']->value['amount']);?>

            </td>
            <td class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['volist']->value['amount']>0){?>
                <?php if ($_smarty_tpl->tpl_vars['volist']->value['payflag']=='1'){?>
                <font color="orange">已支付</font>
                <?php }else{ ?>
                <font color="blue">待支付</font>
                <?php }?>
                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <td class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['volist']->value['amount']>0){?>
                <?php if ($_smarty_tpl->tpl_vars['volist']->value['paytime']>0){?>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['paytime'],"%Y-%m-%d");?>
<br />
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['paytime'],"%H:%M:%S");?>

                <?php }else{ ?>
                --
                <?php }?>
                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <td class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['volist']->value['status']=='1'){?>
                <font color="green">成功报名</font>
                <?php }elseif($_smarty_tpl->tpl_vars['volist']->value['status']=='2'){?>
                <font color="red">已取消报名</font>
                <?php }else{ ?>
                <font color="gray">待审报名</font>
                <?php }?>
            </td>
            <td class="text_center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=view&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['bmid'];?>
&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="oe_ico_blue">管理</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=partybm&a=del&id[]=<?php echo $_smarty_tpl->tpl_vars['volist']->value['bmid'];?>
" onClick="{if(confirm('确定要删除吗？')){return true;} return false;}" class="oe_ico_red">删除</a>
            </td>
        </tr>
        <?php } ?>
          <?php if ($_smarty_tpl->tpl_vars['total']->value>0){?>
          <tr>
            <td align="center"><input name="chkAll" type="checkbox" id="chkAll" onClick="checkAll(this, 'id[]')" value="checkbox"></td>
            <td class="hback" colspan="9"><input class="button" name="btn_del" type="button" value="删 除" onClick="{if(confirm('确定要删除吗？一旦删除无法恢复！')){$('#myform').submit();return true;}return false;}" class="button">&nbsp;&nbsp;共[ <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> ]条记录</td>
          </tr>
          <?php }?>
	  <?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['total']->value>10){?>
	<table width='95%' border='0' cellspacing='0' cellpadding='0' align='center' style="margin-top:10px;">
	  <tr>
		<td align='center'><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</td>
	  </tr>
	</table>
	<?php }?>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=='view'){?>
<div class="main-wrap">
<div class="path"><p>当前位置：活动管理<span>&gt;&gt;</span>活动报名<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=party&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">报名详情</a></p></div>
<div class="main-cont">
<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=party&<?php echo $_smarty_tpl->tpl_vars['comeurl']->value;?>
" class="btn-general"><span>返回列表</span></a>报名详情</h3>

    <table cellpadding='1' cellspacing='1' class='tab'>
        <tr>
            <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
            <td class='hback' width="35%">
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['avatar'])){?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['avatar'];?>
" width="30px" height="30px" f="viewimg" />
                <?php }?>
                uid:<?php echo $_smarty_tpl->tpl_vars['partybm']->value['userid'];?>
/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['partybm']->value['gender']==1){?>男<?php }else{ ?>女<?php }?>/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['age'];?>
岁/<?php echo cmd_area(array('type'=>"text",'cache'=>"1",'value'=>$_smarty_tpl->tpl_vars['partybm']->value['cityid']),$_smarty_tpl);?>

            </td>
            <th class='hback_1' width="15%">活动名称：<span class="f_red"></span> </th>
            <td class='hback' width="35%">
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['title'])){?>
                 <?php echo $_smarty_tpl->tpl_vars['partybm']->value['title'];?>

                <?php }?>
            </td>
        </tr>
        <tr>
            <th>LoveID：</th>
            <td><?php echo $_smarty_tpl->tpl_vars['partybm']->value['loveid'];?>
</td>
            <th>报名时间：</th>
            <td>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partybm']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>

            </td>
        </tr>
        <tr>
            <th>报名费用：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']==0){?>
                <font color="red">¥0</font>
                <?php }else{ ?>
                ¥ <?php echo doubleval($_smarty_tpl->tpl_vars['partybm']->value['amount']);?>

                <?php }?>
            </td>
            <th>报名状态：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['status']=='1'){?>
                已成功报名
                <?php }elseif($_smarty_tpl->tpl_vars['partybm']->value['status']=='2'){?>
                已取消报名
                <?php }else{ ?>
                待审核报名
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>备注说明：</th>
            <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['remark'])){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['remark'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <th>取消原因：</th>
            <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['reason'])){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['reason'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>操作</th>
            <td colspan="3">
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['status']=='0'){?>
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_green" f="partybm_pass" data-id="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['bmid'];?>
">审核通过</a>&nbsp;
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_red" f="partybm_cancel" data-id="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['bmid'];?>
">取消报名</a>
                <?php }elseif($_smarty_tpl->tpl_vars['partybm']->value['status']=='1'){?>
                <a style="padding-top:3px;padding-bottom:3px;" href="javascript:;" class="oe_ico_red" f="partybm_cancel" data-id="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['bmid'];?>
">取消报名</a>
                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>
        <tr>
            <td colspan="4"><strong>付款状态</strong></td>
        </tr>
        <tr>
            <th width="15%">付款状态：<span class="f_red"></span></th>
            <td width="35%">
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']>0){?>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['payflag']=='1'){?>
                <font color="orange">已支付</font>
                <?php }else{ ?>
                <font color="blue">待支付</font>
                <?php }?>
                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <th width="15%">已付金额：</th>
            <td width="35%">
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['paymoney']==0){?>
                <font color="red">¥0</font>
                <?php }else{ ?>
                ¥ <?php echo doubleval($_smarty_tpl->tpl_vars['partybm']->value['paymoney']);?>

                <?php }?>
            </td>
        </tr>
        <tr>
            <th>付款时间：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']>0){?>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['paytime']>0){?>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partybm']->value['paytime'],"%Y-%m-%d %H:%M:%S");?>

                <?php }else{ ?>
                --
                <?php }?>
                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <th>付款单号：</th>
            <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['paynum'])){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['paynum'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>

        <tr>
            <th>退款状态：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['refundflag']=='1'){?>
                退款中
                <?php }elseif($_smarty_tpl->tpl_vars['partybm']->value['refundflag']=='2'){?>
                已退款
                <?php }elseif($_smarty_tpl->tpl_vars['partybm']->value['refundflag']=='3'){?>
                拒绝退款
                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <th>已退金额：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['refundmoney']>0){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['refundmoney'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>退款时间：</th>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['partybm']->value['refundtime']>0){?>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partybm']->value['refundtime'],"%Y-%m-%d %H:%M:%S");?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
            <th>退款人：</th>
            <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['refunduse'])){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['refunduse'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>退款说明：</th>
            <td>
                <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['refundremark'])){?>
                <?php echo $_smarty_tpl->tpl_vars['partybm']->value['refundremark'];?>

                <?php }else{ ?>
                --
                <?php }?>
            </td>
        </tr>
    </table>
</div>
<div style="clear:both;"></div>
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['a']->value=='pass'){?>
<div class="main-wrap">
    <div class="main-cont">
        <h3 class="title">活动：<?php echo $_smarty_tpl->tpl_vars['partybm']->value['title'];?>
</h3>
        <table cellpadding='1' cellspacing='1' class='tab'>
            <tr>
                <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
                <td class='hback' colspan="3">
                    <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['avatar'])){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['avatar'];?>
" width="30px" height="30px" f="viewimg" />
                    <?php }?>
                    uid:<?php echo $_smarty_tpl->tpl_vars['partybm']->value['userid'];?>
/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['partybm']->value['gender']==1){?>男<?php }else{ ?>女<?php }?>/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['age'];?>
岁/<?php echo cmd_area(array('type'=>"text",'cache'=>"1",'value'=>$_smarty_tpl->tpl_vars['partybm']->value['cityid']),$_smarty_tpl);?>

                </td>
            </tr>
            <tr>
                <th>LoveID：</th>
                <td><?php echo $_smarty_tpl->tpl_vars['partybm']->value['loveid'];?>
</td>
                <th>报名时间：</th>
                <td>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partybm']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>

                </td>
            </tr>
            <tr>
                <th>报名费用：</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']==0){?>
                    <font color="red">¥0</font>
                    <?php }else{ ?>
                    ¥ <?php echo doubleval($_smarty_tpl->tpl_vars['partybm']->value['amount']);?>

                    <?php }?>
                </td>
                <th width="15%">付款状态：<span class="f_red"></span></th>
                <td width="35%">
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']>0){?>
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['payflag']=='1'){?>
                    <font color="orange">已支付</font>
                    <?php }else{ ?>
                    <font color="blue">待支付</font>
                    <?php }?>
                    <?php }else{ ?>
                    --
                    <?php }?>
                </td>
            </tr>
            <tr>
                <th>备注说明：</th>
                <td colspan="3">
                    <textarea name="remark" id="remark" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>

            <tr>
                <td class="hback_none" colspan="4" align="center"><input type="submit" id="btn_save" name="btn_save" class="button" value="更新保存"></td>
            </tr>
        </table>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
    $(function(){
        //编辑保存
        $("#btn_save").bind("click", function(){
            $remark = $("#remark").val();
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
",
                cache: false,
                data: {a:"savepass", id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", remark:$remark, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    $json = eval(data);
                    $response = $json.response;
                    $result = $json.result;
                    if ($response == '1') {
                        alert("操作成功");
                        setTimeout(function(){
                            window.parent.location.href = "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
";
                        }, 300);
                    }
                    else {
                        if ($result.length > 0) {
                            alert($result);
                        }
                        else {
                            alert("操作失败");
                        }
                    }
                },
                error: function() {
                    alert("系统繁忙，请稍后再试！");
                }
            });

        });
    });
</script>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['a']->value=='cancel'){?>
<div class="main-wrap">
    <div class="main-cont">
        <h3 class="title">活动：<?php echo $_smarty_tpl->tpl_vars['partybm']->value['title'];?>
</h3>
        <table cellpadding='1' cellspacing='1' class='tab'>
            <tr>
                <th class='hback_1' width="15%">报名会员：<span class="f_red"></span> </th>
                <td class='hback' colspan="3">
                    <?php if (!empty($_smarty_tpl->tpl_vars['partybm']->value['avatar'])){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['partybm']->value['avatar'];?>
" width="30px" height="30px" f="viewimg" />
                    <?php }?>
                    uid:<?php echo $_smarty_tpl->tpl_vars['partybm']->value['userid'];?>
/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['username'];?>
/<?php if ($_smarty_tpl->tpl_vars['partybm']->value['gender']==1){?>男<?php }else{ ?>女<?php }?>/<?php echo $_smarty_tpl->tpl_vars['partybm']->value['age'];?>
岁/<?php echo cmd_area(array('type'=>"text",'cache'=>"1",'value'=>$_smarty_tpl->tpl_vars['partybm']->value['cityid']),$_smarty_tpl);?>

                </td>
            </tr>
            <tr>
                <th>LoveID：</th>
                <td><?php echo $_smarty_tpl->tpl_vars['partybm']->value['loveid'];?>
</td>
                <th>报名时间：</th>
                <td>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['partybm']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>

                </td>
            </tr>
            <tr>
                <th>报名费用：</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']==0){?>
                    <font color="red">¥0</font>
                    <?php }else{ ?>
                    ¥ <?php echo doubleval($_smarty_tpl->tpl_vars['partybm']->value['amount']);?>

                    <?php }?>
                </td>
                <th width="15%">付款状态：<span class="f_red"></span></th>
                <td width="35%">
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['amount']>0){?>
                    <?php if ($_smarty_tpl->tpl_vars['partybm']->value['payflag']=='1'){?>
                    <font color="orange">已支付</font>
                    <?php }else{ ?>
                    <font color="blue">待支付</font>
                    <?php }?>
                    <?php }else{ ?>
                    --
                    <?php }?>
                </td>
            </tr>
            <tr>
                <th>取消原因：</th>
                <td colspan="3">
                    <textarea name="reason" id="reason" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>
            <tr>
                <th>备注说明：</th>
                <td colspan="3">
                    <textarea name="remark" id="remark" style="width:70%;height:60px;"></textarea>
                </td>
            </tr>

            <tr>
                <td class="hback_none" colspan="4" align="center"><input type="submit" id="btn_save" name="btn_save" class="button" value="更新保存"></td>
            </tr>
        </table>
    </div>
    <div style="clear:both;"></div>
</div>
<script type="text/javascript">
    $(function(){
        //编辑保存
        $("#btn_save").bind("click", function(){
            $reason = $("#reason").val();
            $remark = $("#remark").val();
            if ($reason.length == 0) {
                alert("请填写取消原因");
                return false;
            }
            $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
",
                cache: false,
                data: {a:"savecancel", id:"<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", remark:$remark, reason:$reason, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    $json = eval(data);
                    $response = $json.response;
                    $result = $json.result;
                    if ($response == '1') {
                        alert("操作成功");
                        setTimeout(function(){
                            window.parent.location.href = "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
";
                        }, 300);
                    }
                    else {
                        if ($result.length > 0) {
                            alert($result);
                        }
                        else {
                            alert("操作失败");
                        }
                    }
                },
                error: function() {
                    alert("系统繁忙，请稍后再试！");
                }
            });

        });
    });
</script>
<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html><?php }} ?>