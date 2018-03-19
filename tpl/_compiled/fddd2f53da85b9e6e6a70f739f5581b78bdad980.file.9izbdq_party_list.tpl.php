<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:41:57
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_party_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33485a2fdca5642885-68219498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fddd2f53da85b9e6e6a70f739f5581b78bdad980' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_party_list.tpl',
      1 => 1512638060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33485a2fdca5642885-68219498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'ads' => 0,
    's_catid' => 0,
    'urlpath' => 0,
    's_area1' => 0,
    's_area2' => 0,
    's_orderby' => 0,
    'partycatlist' => 0,
    'val' => 0,
    'party' => 0,
    'volist' => 0,
    'showpage' => 0,
    'partybm' => 0,
    'config' => 0,
    'html1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fdca6291194_06580884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fdca6291194_06580884')) {function content_5a2fdca6291194_06580884($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('party', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
 <?php $_smarty_tpl->tpl_vars['ads'] = new Smarty_variable(get_ads('party_banner'), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['ads']->value)){?>
<div class="oe_party_banner"
  style="
  background:url(<?php echo $_smarty_tpl->tpl_vars['ads']->value['uploadfiles'];?>
) center top no-repeat;
  "
> </div>
<?php }?>
<div class="oe_party_list">
  <div class="left">
    <div class="hd">
      <ul>

          <li <?php if ($_smarty_tpl->tpl_vars['s_catid']->value=='0'){?> class="current"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=party&s_catid=0&s_area1=<?php echo $_smarty_tpl->tpl_vars['s_area1']->value;?>
&s_area2=<?php echo $_smarty_tpl->tpl_vars['s_area2']->value;?>
&s_orderby=<?php echo $_smarty_tpl->tpl_vars['s_orderby']->value;?>
">全部</a>
          </li>
          <?php $_smarty_tpl->tpl_vars["partycatlist"] = new Smarty_variable(vo_list("mod={volistvar} where={partycat}"), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partycatlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
          <li <?php if ($_smarty_tpl->tpl_vars['val']->value['value']==$_smarty_tpl->tpl_vars['s_catid']->value){?>class="current" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=party&s_catid=<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
&s_area1=<?php echo $_smarty_tpl->tpl_vars['s_area1']->value;?>
&s_area2=<?php echo $_smarty_tpl->tpl_vars['s_area2']->value;?>
&s_orderby=<?php echo $_smarty_tpl->tpl_vars['s_orderby']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</a>
          </li>
          <?php } ?>
      </ul>
      
      <div class="oe_psearch">
          <form id="party_form" action="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php" method="get">
              <input type="hidden" id="c" name="c" value="party" >
          <input type="hidden" id="s_catid" name="s_catid" value="<?php echo $_smarty_tpl->tpl_vars['s_catid']->value;?>
" >
              <?php echo cmd_area(array('type'=>'dist1','name'=>'s_area1','value'=>$_smarty_tpl->tpl_vars['s_area1']->value,'ajax'=>'1','cname'=>'s_area2','cajax'=>'0','text'=>'=不限='),$_smarty_tpl);?>

            <span id='s_area1' class='f_red'></span>
            <span id="json_s_area2">
                <?php if ($_smarty_tpl->tpl_vars['s_area1']->value>0){?>
                <?php echo cmd_area(array('type'=>'dist2','pvalue'=>$_smarty_tpl->tpl_vars['s_area1']->value,'cname'=>'s_area2','cvalue'=>$_smarty_tpl->tpl_vars['s_area2']->value,'text'=>'=不限='),$_smarty_tpl);?>

                <?php }else{ ?>
                <select name="s_area2" id="s_area2"><option value="">请选择</option></select>
                <?php }?>
            </span>
            排序：
            <select name="s_orderby" id="s_orderby">
                <option value="">--</option>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['s_orderby']->value==1){?>selected<?php }?>>最新报名</option>
                <option value="2" <?php if ($_smarty_tpl->tpl_vars['s_orderby']->value==2){?>selected<?php }?>>最新发布</option>
            </select>
          </form>
      </div>
    </div>
    <div class="bd">
      <?php if (empty($_smarty_tpl->tpl_vars['party']->value)){?>
       <div class="no_data">
          <p class="p_1"><span></span></p>
          <p class="p_2">没有符合条件的信息</p>
        </div>
      <?php }else{ ?>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['party']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
      <dl>
        <dt>
          <h3>
              <?php if ($_smarty_tpl->tpl_vars['volist']->value['moneylady']==0&&$_smarty_tpl->tpl_vars['volist']->value['moneyman']==0){?><span></span><?php }?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a>
          </h3>
          <div class="img">
            <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="head"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['drawimg'];?>
" /></a>
            <p>
              活动时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['starttime'],"Y-m-d H:i");?>
 至 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['endtime'],"Y-m-d H:i");?>
 <label>已报名<?php echo $_smarty_tpl->tpl_vars['volist']->value['bmladys']+$_smarty_tpl->tpl_vars['volist']->value['bmmans']+$_smarty_tpl->tpl_vars['volist']->value['otherbms'];?>
人</label>
            </p>
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['endbmtime']>time()){?> 
            <span class="ico"> </span>
            <?php }else{ ?>
            <span class="ico current"> </span>
            <?php }?>
          </div>
        </dt>
        <dd>
          <p class="p_1"><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['content'],168);?>
</p>
          <p class="btn">
            截止报名：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['endbmtime'],"Y-m-d");?>
    <label><i></i><?php echo $_smarty_tpl->tpl_vars['volist']->value['address'];?>
</label> 
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['endbmtime']<time()){?> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="current">查看详情</a>
            <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
">我要报名</a>
            <?php }?>
          </p>
        </dd>
      </dl>
      <?php } ?> 
      <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
      <div class="oe_page"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    <?php }?>
  </div>
  <div class="right">
    <div class="oe_newbm">
      <div class="hd">最新报名</div>
      <div class="bd">
        <div class="line"></div>
        <?php $_smarty_tpl->tpl_vars["partybm"] = new Smarty_variable(vo_list("mod={partybm} num={5}"), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partybm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <dl>
          <dt>
              <span><i></i>
                <?php echo $_smarty_tpl->tpl_vars['val']->value['trantime'];?>

              </span>
          </dt>
          <dd>
            <a href="#" class="head"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['thumbimg'];?>
" alt="" /></a>
            <h3><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</h3>
            <p>报名了活动<a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['party']['title'];?>
</a>;</p>
          </dd>
        </dl>
        <?php } ?>
      </div>
    </div>
    <div class="oe_partyhelp">
      <div class="hd">活动帮助</div>
      <div class="bd">
        <dl>
          <dt>1</dt>
          <dd>
            <h3>报名活动</h3>
            <p>找到感兴趣的活动，提交报名信息；</p>
          </dd>
        </dl>
        <dl>
          <dt>2</dt>
          <dd>
            <h3>支付费用</h3>
            <p>在线支付活动费用，也可以参加活动时现场支付；</p>
          </dd>
        </dl>
        <dl>
          <dt>3</dt>
          <dd>
            <h3>准时参加活动</h3>
            <p>现场签到，参加相亲活动；</p>
          </dd>
        </dl>
        <dl>
          <dt>4</dt>
          <dd>
            <h3>活动结束</h3>
            <p>有心仪的对象，进一步交往。</p>
          </dd>
        </dl>
      </div>
    </div>
    
    <div class="oe_contact">
      <div class="hd">联系我们</div>
      <div class="bd">
        <dl>
          <dt><span><i class="ico_1"></i>电话：</span></dt>
          <dd><?php echo $_smarty_tpl->tpl_vars['config']->value['sitetel'];?>
</dd>
        </dl>
        <dl>
          <dt><span><i class="ico_2"></i>邮箱：</span></dt>
          <dd><?php echo $_smarty_tpl->tpl_vars['config']->value['siteemail'];?>
</dd>
        </dl>
        <dl>
          <dt><span><i class="ico_3"></i>地址：</span></dt>
          <dd>
           <?php ob_start();?><?php echo cmd_label(array('name'=>"address"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["html1"] = new Smarty_variable($_tmp1, null, 0);?>
            <?php if (empty($_smarty_tpl->tpl_vars['html1']->value)){?>
            请在后台添加自定义HTML标签：address
            <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['html1']->value;?>

            <?php }?>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>

<script>
    function jumpArea() {
        $s_area1 = $("#s_area1").val();
        $s_area1 = parseInt($s_area1);
        $s_area2 = $("#s_area2").val();
        if (typeof($s_area2) == "undefined") {
            $s_area2 = 0;
        }
        else {
            $s_area2 = parseInt($s_area2);
        }
        if ($s_area2 > 0) {
            $("#party_form").submit();
        }
    }
    $(function(){
        //地区
        $(document).on("change", "#s_area2", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
        //排序
        $(document).on("change", "#s_orderby", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
    });

</script>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>