<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:10:20
         compiled from "D:\weixin\desktop\jy\tpl\wap\weibo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155615aaf1c0ce8b295-10369887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd904ae48dce852777b2431c8003ca974bd672c66' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\weibo.tpl',
      1 => 1514954696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155615aaf1c0ce8b295-10369887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'login' => 0,
    'weibo' => 0,
    'volist' => 0,
    'u' => 0,
    'wapfile' => 0,
    'c' => 0,
    'commentlist' => 0,
    'val' => 0,
    'time' => 0,
    'pagecount' => 0,
    'page' => 0,
    'prepage' => 0,
    'urlitem' => 0,
    'nextpage' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1c0d187614_84376675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1c0d187614_84376675')) {function content_5aaf1c0d187614_84376675($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_nl2br')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.nl2br.php';
?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("party", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["u"] = new Smarty_variable($_smarty_tpl->tpl_vars['login']->value['info'], null, 0);?>
<div class="oe_weibo">
  <?php if (!empty($_smarty_tpl->tpl_vars['weibo']->value)){?>
  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weibo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
  <dl class="big">
    <?php if ($_smarty_tpl->tpl_vars['volist']->value['userid']==$_smarty_tpl->tpl_vars['u']->value['userid']){?>
    <dt class="dt_1">
      <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&type=my')"><img src="<?php echo $_smarty_tpl->tpl_vars['u']->value['avatarurl'];?>
" alt="" /></span>
      <b onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&type=my')"><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
</b>   <?php echo $_smarty_tpl->tpl_vars['u']->value['age'];?>
岁 <?php echo $_smarty_tpl->tpl_vars['u']->value['height'];?>
CM  <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['u']->value['cityid']),$_smarty_tpl);?>

      <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y/%m/%d %H:%M");?>
</p>
      <label f="submit_del" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
"><i class="iconfont">&#xe647;</i></label>
    </dt>
    <?php }else{ ?>
    <dt class="dt_1" onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&uid=<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
')">
          <span><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['user']['avatarurl'];?>
" alt="" /></span>
          <b><?php echo $_smarty_tpl->tpl_vars['volist']->value['user']['username'];?>
</b>    <?php echo $_smarty_tpl->tpl_vars['volist']->value['user']['age'];?>
岁  <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['volist']->value['user']['cityid']),$_smarty_tpl);?>

      <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%Y/%m/%d %H:%M");?>
</p>
    </dt>
    <?php }?>
    <dd class="dd_1">
        <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['volist']->value['content']);?>

    </dd>
    <?php if ($_smarty_tpl->tpl_vars['volist']->value['userid']!=$_smarty_tpl->tpl_vars['u']->value['userid']){?>
    <dd class="dd_2">
      <span class="span_1"><i class="iconfont">&#xe67b;</i><em><?php echo $_smarty_tpl->tpl_vars['volist']->value['commentcount'];?>
</em></span>
      <span class="span_4" f="act_comment" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
"><i class="iconfont">&#xe6a3;</i>发评论</span>
      <div class="btn">
        <span class="span_2" f="act_hi" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
"><i class="iconfont">&#xe683;</i>打招呼</span>
        <span class="span_3" f="act_message" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
"><i class="iconfont">&#xe645;</i>发私信</span>
      </div>
    </dd>
    <!--评论-->
    <dd class="dd_3">
      <div class="addcomment" id="add_comment_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
" style="display: none;">
          <textarea id="content_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
" name="content_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
" class="wb-reply-form-textarea" cols="30" rows="10" placeholder="添加评论…"></textarea>
          <div class="btn">
              <dl class="face">
                  <dt onclick="show_more_face('display_eif_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
', 'content_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
');"><span><i class="iconfont">&#xe613;</i></span></dt>
                  <dd id="display_eif_<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
"></dd>
              </dl>
              <span class="span_1" f="submit_comment" data-id="<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
">发表</span>
          </div>
      </div>
      <div class="addcomment">
          <div class="weibo_comment"  id="comlist-<?php echo $_smarty_tpl->tpl_vars['volist']->value['wbid'];?>
">
            <?php $_smarty_tpl->tpl_vars["commentlist"] = new Smarty_variable(vo_list("mod={weibocomment} where={v.wbid=".((string)$_smarty_tpl->tpl_vars['volist']->value['wbid'])."}"), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['commentlist']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <dl>
              <dt>
                <span>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['avatarurl'];?>
" />
                </span>
                <h3><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
 <label><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['cmtime'],"Y-m-d H:i");?>
</label></h3>
                <div class="clear"></div>
              </dt>
              <dd>
                  <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['val']->value['cmcontent']);?>

              </dd>
            </dl>
            <?php } ?>
            <?php }?>
          </div>
      </div>
    </dd>
    <?php }?>
  </dl>
  <?php } ?>
  <?php }else{ ?>
  <div class="nodata">
    <p class="p_1">
      <span><i class="iconfont">&#xe609;</i></span>
    </p>
    <p class="p_2">无相关信息</p>
  </div>
  
  <?php }?>

<script type="text/javascript">
    $(function(){
        var loginstatus = "<?php echo $_smarty_tpl->tpl_vars['login']->value['status'];?>
";

        //删除
        $('[f="submit_del"]').click(function(){
            $id = $(this).attr("data-id");
            $.ajax({
                type: "POST",
                url: _ROOT_PATH + "wap.php?c=weibo&a=del",
                cache: false,
                data: {wbid:$id, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    var json = eval(data);
                    var response = json.response;
                    var msg = json.msg;
                    if (response == '1') {
                        if (msg != "" || msg.length>0) {
                            ToastShow(msg);
                        }
                        else {
                            ToastShow("删除成功");
                        }
                        setTimeout(function(){
                            window.top.location.reload();
                        },800);
                    }
                    else {
                        if (msg != "" || msg.length>0) {
                            ToastShow(msg);
                        }
                        else {
                            ToastShow("删除失败");
                        }
                    }
                },
                error: function() {
                }
            });
        });

        //发表动态   显示 隐藏
        $('[f="act_weibo"]').click(function(){
            $('[f="do_weibo_show"]').show();
        });
        $('[f="close_weibo"]').click(function(){
            $('[f="do_weibo_show"]').hide();
        });


        $('[f="act_comment"]').click(function(){ //打开评论框
            $id = $(this).attr("data-id");
            if($("#add_comment_"+$id).is(':hidden')){
                $("#add_comment_"+$id).show();
            }else{
                $("#add_comment_"+$id).hide();
                emface_close();
            }
        });

        //提交评论
        $('[f="submit_comment"]').click(function(){
            emface_close();
            id = $(this).attr("data-id");
            if (id < 1) {
                ToastShow("心情ID丢失");
                return false;
            }
            var content = $("#content_"+id).val();
            if (content == '' || content == '添加评论...') {
                ToastShow("请填写评论内容");
                $("#content_"+id).focus();
                return false;
            }
            if (strQuantity(content) > 500) {
                ToastShow("评论内容不能大于500个字！");
                $("#content_"+id).focus();
                return false;
            }

            //提交评论
            $.ajax({
                type: "POST",
                url: _ROOT_PATH + "wap.php?c=weibo&a=savecomment",
                cache: false,
                data: {wbid:id, content:content, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    var json = eval(data);
                    var response = json.response;
                    var msg = json.msg;
                    if (response == '1') {
                        if (msg != "" || msg.length>0) {
                            ToastShow(msg);
                        }
                        else {
                            ToastShow("评论成功");
                            //重载评论
                            get_comment_list(id);
                        }
                        //清除评论
                        $("#content_"+id).val("");
                    }
                    else {
                        if (msg != "" || msg.length>0) {
                            ToastShow(msg);
                        }
                        else {
                            ToastShow("评论失败");
                        }
                    }
                },
                error: function() {

                }
            });
        });

        $('[f="act_hi"]').click(function(){ //打招呼
            if (loginstatus == "0") {
                goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login");
                return false;
            }
            else {
                $uid = $(this).attr("data-id");
                $.ajax({
                    type: "POST",
                    url: "<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do",
                    cache: false,
                    data: {a:"hi", touid:$uid, r:"<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
"},
                    dataType: "json",
                    success: function(data) {
                        var json = eval(data);
                        var response = json.response;
                        var result = json.result;
                        if (response == '1') {
                            ToastShow("发送成功");
                        }
                        else {
                            if (result.length > 0) {
                                ToastShow(result);
                            }
                            else {
                                ToastShow("发送失败");
                            }
                        }
                    },
                    error: function() {
                        ToastShow("操作失败，请检查网络状态。");
                    }
                });
            }
        });


        $('[f="act_message"]').click(function(){ //写信件
            if (loginstatus == "0") {
                goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=passport&a=login");
                return false;
            }
            else {
                $uid = $(this).attr("data-id");
                goUrl("<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_do&a=writemsg&touid="+$uid);
            }
        });
    });

//载入评论
function get_comment_list(id) {
    if (id > 0) {
        $("#comlist-"+id).html('loading');
        $.ajax({
            type: "POST",
            url: _ROOT_PATH + "wap.php?c=weibo&a=getcomdata",
            cache: false,
            data: {wbid:id, r:get_rndnum(8)},
            dataType: "json",
            success: function(data) {
                var json = eval(data);
                var result = json.result;
                $("#comlist-"+id).html(result);
            },
            error: function() {

            }
        });
    }
}
</script>

</div>

<?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
<div class="oe_page">
  页次：<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

  <?php if ($_smarty_tpl->tpl_vars['prepage']->value>0){?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=weibo&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
');">上一页</span>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['nextpage']->value>0){?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=weibo&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
');">下一页</span>
  <?php }?>
</div>
<?php }?>

<div style="height:85px;"></div>
<div class="oe_weibobtn">
  <span class="span_1" f="act_weibo">
    <i class="iconfont">&#xe668;</i>
  </span>
  <?php if ($_smarty_tpl->tpl_vars['type']->value=='my'){?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&uid=0')">
    <i class="iconfont">&#xe65c;</i>
  </span>
  <?php }else{ ?>
  <span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
&type=my')">
    <i class="iconfont">&#xe65c;</i>
  </span>
  <?php }?>
</div>



<div class="oe_shade" style="z-index:101; display:none;" f="do_weibo_show">
  <div class="oe_addweibo">
    <div class="hd">
      <span class="goback" f="close_weibo"><i class="iconfont">&#xe643;</i></span>
      发表心情
    </div>
    <div class="bd">
      <textarea id="mood_content" name="mood_content" onkeydown="textCounter('mood_content', 'counter', 500);" onkeyup="textCounter('mood_content', 'counter', 500);" cols="30" rows="10" placeholder="记录你今天的心情吧"></textarea>
      <p>还能输入<span id="counter">500</span>字</p>
    </div>
    <div class="btn">
      <dl>
        <dt onclick="show_more_face('display-eif', 'mood_content');"><span><i class="iconfont">&#xe613;</i></span></dt>
        <dd id="display-eif"></dd>
      </dl>
      <span class="span_1" onclick="obj_public_mood('mood_content');">发表</span>
    </div>
  </div>
</div>
<script>
    /**
     * 限制输入字符个数
     * 函数，3个参数，表单名字，表单域元素名，限制字符；
     */
    function textCounter(field, countfield, maxlimit) {
        var contentvalue = $.trim($('#'+field).val());
        if (contentvalue.length > maxlimit) {
            $('#'+field).val(contentvalue.substring(0, maxlimit));
        }
        else
        {
            var cannum = (maxlimit - contentvalue.length);
            $('#'+countfield).html(cannum);
        }
    }
    //发表心情
    function obj_public_mood(content_id) {
        var content = $("#"+content_id).val();
        //心情内容
        if (content == '' || content == '记录每一天的心情...') {
            ToastShow("请填写心情内容");
            return false;
        }
        if (strQuantity(content) > 500) {
            ToastShow("心情内容不能大于500个字");
            return false;
        }

        //发表心情
        $.ajax({
            type: "POST",
            url: _ROOT_PATH + "wap.php?c=weibo",
            cache: false,
            data: {a:"saveweibo", content:content, r:get_rndnum(8)},
            dataType: "json",
            success: function(data) {
                var json = eval(data);
                var response = json.response;
                var msg = json.msg;
                if (response == '1') {
                    var tips = "";
                    if (msg.length > 0) {
                        tips = msg;
                    }
                    else {
                        tips = "发表成功";
                    }
                    ToastShow(tips);
                    setTimeout(function(){
                        window.top.location.reload();
                    },1500);
                }
                else {
                    var tips = "";
                    if (msg.length > 0) {
                        tips = msg;
                    }
                    else {
                        tips = "发表失败";
                    }
                    ToastShow(tips);
                }
            },
            error: function() {
                ToastShow("网络错误，请检查");
            }
        });
    }

</script>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_eif.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



</body>
</html><?php }} ?>