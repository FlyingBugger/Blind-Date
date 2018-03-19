<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:10:08
         compiled from "D:\weixin\desktop\jy\tpl\wap\party_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94245aaf1c0018ae13-52285362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ec8899a78fdade999e5cae70440791f82be3c2' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\party_list.tpl',
      1 => 1514954696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94245aaf1c0018ae13-52285362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    's_catid' => 0,
    's_type' => 0,
    's_orderby' => 0,
    'catlist' => 0,
    'val' => 0,
    's_area1' => 0,
    's_area2' => 0,
    'party' => 0,
    'wapfile' => 0,
    'c' => 0,
    'volist' => 0,
    'appurlitem' => 0,
    'pagecount' => 0,
    'page' => 0,
    'prepage' => 0,
    'urlitem' => 0,
    'nextpage' => 0,
    'wapskin' => 0,
    'urlpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1c00362957_40059380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1c00362957_40059380')) {function content_5aaf1c00362957_40059380($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("party", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="comm_search">
    <input type="hidden" name="s_catid" id="s_catid" value="<?php echo $_smarty_tpl->tpl_vars['s_catid']->value;?>
" />
    <input type="hidden" name="s_type" id="s_type" value="<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
" />
	<input type="hidden" name="s_orderby" id="s_orderby" value="<?php echo $_smarty_tpl->tpl_vars['s_orderby']->value;?>
" />
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">分类<i class="iconfont">&#xe65b;</i> <em></em></dt>
      <dd class="dd_1">
        <p class="<?php if ($_smarty_tpl->tpl_vars['s_catid']->value==0){?>current<?php }?> cursor" f="but_sel_catid" data-id="0">全部</p>
        <?php $_smarty_tpl->tpl_vars["catlist"] = new Smarty_variable(vo_list("mod={volistvar} where={partycat}"), null, 0);?> 
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <p class="cursor <?php if ($_smarty_tpl->tpl_vars['s_catid']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?>current<?php }?>" f="but_sel_catid" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</p>
        <?php } ?> 
      </dd>
    </dl>
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">地区<i class="iconfont">&#xe65b;</i><em></em></dt>
      <dd class="dd_2">
        <p class="area">
            <em>省/直辖市：</em>
            <input type="hidden" id="s_catid" name="s_catid" value="<?php echo $_smarty_tpl->tpl_vars['s_catid']->value;?>
" >
            <?php echo cmd_area(array('type'=>'dist1','name'=>'s_area1','value'=>$_smarty_tpl->tpl_vars['s_area1']->value,'ajax'=>'1','cname'=>'s_area2','cajax'=>'0','text'=>'=不限='),$_smarty_tpl);?>

            <span id='s_area1' class='f_red'></span>

        </p>
        <p class="area"> <em>市/区：</em>
            <span id="json_s_area2">
                <?php if ($_smarty_tpl->tpl_vars['s_area1']->value>0){?>
                <?php echo cmd_area(array('type'=>'dist2','pvalue'=>$_smarty_tpl->tpl_vars['s_area1']->value,'cname'=>'s_area2','cvalue'=>$_smarty_tpl->tpl_vars['s_area2']->value,'text'=>'=不限='),$_smarty_tpl);?>

                <?php }else{ ?>
                <select name="s_area2" id="s_area2"><option value="">请选择</option></select>
                <?php }?>
            </span>
        </p>
        <div class="clear"></div>
        <p class="p_1">
          <label f="but_confirm_search" class="cursor">确定</label>
        </p>
      </dd>
    </dl>
    <dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">类型<i class="iconfont">&#xe65b;</i></dt>
      <dd class="dd_1">
        <p class=" <?php if ($_smarty_tpl->tpl_vars['s_type']->value==0){?>current<?php }?> cursor" f="but_sel_type" data-type="0">全部</p>
        <p class="cursor <?php if ($_smarty_tpl->tpl_vars['s_type']->value==1){?>current<?php }?>" f="but_sel_type" data-type="1">报名中</p>
        <p class="cursor <?php if ($_smarty_tpl->tpl_vars['s_type']->value==2){?>current<?php }?>" f="but_sel_type" data-type="2">报名结束</p>
      </dd>
    </dl>
	<dl style="width:25%;">
      <dt f="but_open_search_item" class="cursor">排序<i class="iconfont">&#xe65b;</i></dt>
      <dd class="dd_1">
        <p class=" <?php if ($_smarty_tpl->tpl_vars['s_orderby']->value==0){?>current<?php }?> cursor" f="but_sel_orderby" data-val="0">全部</p>
        <p class="cursor <?php if ($_smarty_tpl->tpl_vars['s_orderby']->value==1){?>current<?php }?>" f="but_sel_orderby" data-val="1">最新报名</p>
        <p class="cursor <?php if ($_smarty_tpl->tpl_vars['s_orderby']->value==2){?>current<?php }?>" f="but_sel_orderby" data-val="2">最新发布</p>
      </dd>
    </dl>
    <div class="clear"></div>
</div>
<div style="height:45px;"></div>

<div class="oe_party_list">
<?php if (empty($_smarty_tpl->tpl_vars['party']->value)){?>
  <div class="no_data">
    <p class="p_1"><span><i class="iconfont">&#xe609;</i></span></p>
    <p class="p_2">没有相关信息</p>
    <p></p>
  </div>
<?php }else{ ?>
<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['party']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
<dl onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['volist']->value['partyid'];?>
&<?php echo $_smarty_tpl->tpl_vars['appurlitem']->value;?>
');">
  <dt><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
" />
    <?php if ($_smarty_tpl->tpl_vars['volist']->value['endbmtime']>time()){?>
    <span class="iconfont"> </span>
    <?php }?>
  </dt>
  <dd>
    <h3><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</h3>
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['starttime'],"Y-m-d H:i");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['endtime'],"Y-m-d H:i");?>
</p>
    <p>报名截止时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['endbmtime'],"Y-m-d H:i");?>
</p>
    <?php if ($_smarty_tpl->tpl_vars['volist']->value['endbmtime']>time()){?>
    <p class="p_2"><span>我要报名</span></p>
    <?php }else{ ?>
    <p class="p_2"><span class="current">结束报名</span></p>
    <?php }?> 
  </dd>
</dl>
<?php } ?> 
<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
    <div class="oe_page">
        页次：<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['prepage']->value>0){?>
        <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
');">上一页</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['nextpage']->value>0){?>
        <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=party&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
');">下一页</span>
        <?php }?>
    </div>
    <!--//ShowPage End-->
    <?php }?>
</div>  
<!-- 链接到我报名的活动 -->
<span class="myparty" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=myparty&a=list');">
  <i class="iconfont">&#xe664;</i>
</span>



<script src="<?php echo $_smarty_tpl->tpl_vars['wapskin']->value;?>
js/party.js?<?php echo time();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/static/js/ajax.js?<?php echo time();?>
"></script>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>