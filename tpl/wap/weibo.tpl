<!--{assign var="menu_id" value="party"}-->
<!--{include file="<!--{$waptpl}-->block_header.tpl"}-->
<!--{include file="<!--{$waptpl}-->block_navbar.tpl"}-->

<!--{assign var="u" value=$login.info}-->
<div class="oe_weibo">
  <!--{if !empty($weibo)}-->
  <!--{foreach $weibo as $volist}-->
  <dl class="big">
    <!--{if $volist.userid == $u.userid}-->
    <dt class="dt_1">
      <span onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&type=my')"><img src="<!--{$u.avatarurl}-->" alt="" /></span>
      <b onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&type=my')"><!--{$u.username}--></b>   <!--{$u.age}-->岁 <!--{$u.height}-->CM  <!--{area type="text" value=$u.cityid}-->
      <p><!--{$volist.addtime|date_format:"%Y/%m/%d %H:%M"}--></p>
      <label f="submit_del" data-id="<!--{$volist.wbid}-->"><i class="iconfont">&#xe647;</i></label>
    </dt>
    <!--{else}-->
    <dt class="dt_1" onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&uid=<!--{$volist.userid}-->')">
          <span><img src="<!--{$volist.user.avatarurl}-->" alt="" /></span>
          <b><!--{$volist.user.username}--></b>    <!--{$volist.user.age}-->岁  <!--{area type="text" value=$volist.user.cityid}-->
      <p><!--{$volist.addtime|date_format:"%Y/%m/%d %H:%M"}--></p>
    </dt>
    <!--{/if}-->
    <dd class="dd_1">
        <!--{$volist.content|nl2br}-->
    </dd>
    <!--{if $volist.userid != $u.userid}-->
    <dd class="dd_2">
      <span class="span_1"><i class="iconfont">&#xe67b;</i><em><!--{$volist.commentcount}--></em></span>
      <span class="span_4" f="act_comment" data-id="<!--{$volist.wbid}-->"><i class="iconfont">&#xe6a3;</i>发评论</span>
      <div class="btn">
        <span class="span_2" f="act_hi" data-id="<!--{$volist.userid}-->"><i class="iconfont">&#xe683;</i>打招呼</span>
        <span class="span_3" f="act_message" data-id="<!--{$volist.userid}-->"><i class="iconfont">&#xe645;</i>发私信</span>
      </div>
    </dd>
    <!--评论-->
    <dd class="dd_3">
      <div class="addcomment" id="add_comment_<!--{$volist.wbid}-->" style="display: none;">
          <textarea id="content_<!--{$volist.wbid}-->" name="content_<!--{$volist.wbid}-->" class="wb-reply-form-textarea" cols="30" rows="10" placeholder="添加评论…"></textarea>
          <div class="btn">
              <dl class="face">
                  <dt onclick="show_more_face('display_eif_<!--{$volist.wbid}-->', 'content_<!--{$volist.wbid}-->');"><span><i class="iconfont">&#xe613;</i></span></dt>
                  <dd id="display_eif_<!--{$volist.wbid}-->"></dd>
              </dl>
              <span class="span_1" f="submit_comment" data-id="<!--{$volist.wbid}-->">发表</span>
          </div>
      </div>
      <div class="addcomment">
          <div class="weibo_comment"  id="comlist-<!--{$volist.wbid}-->">
            <!--{assign var="commentlist" value=vo_list("mod={weibocomment} where={v.wbid=<!--{$volist.wbid}-->}")}-->
            <!--{if !empty($commentlist)}-->
            <!--{foreach $commentlist as $val}-->
            <dl>
              <dt>
                <span>
                  <img src="<!--{$val.avatarurl}-->" />
                </span>
                <h3><!--{$val.username}--> <label><!--{$val.cmtime|date_format:"Y-m-d H:i"}--></label></h3>
                <div class="clear"></div>
              </dt>
              <dd>
                  <!--{$val.cmcontent|nl2br}-->
              </dd>
            </dl>
            <!--{/foreach}-->
            <!--{/if}-->
          </div>
      </div>
    </dd>
    <!--{/if}-->
  </dl>
  <!--{/foreach}-->
  <!--{else}-->
  <div class="nodata">
    <p class="p_1">
      <span><i class="iconfont">&#xe609;</i></span>
    </p>
    <p class="p_2">无相关信息</p>
  </div>
  
  <!--{/if}-->

<script type="text/javascript">
    $(function(){
        var loginstatus = "<!--{$login.status}-->";

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
                goUrl("<!--{$wapfile}-->?c=passport&a=login");
                return false;
            }
            else {
                $uid = $(this).attr("data-id");
                $.ajax({
                    type: "POST",
                    url: "<!--{$wapfile}-->?c=cp_do",
                    cache: false,
                    data: {a:"hi", touid:$uid, r:"<!--{$time}-->"},
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
                goUrl("<!--{$wapfile}-->?c=passport&a=login");
                return false;
            }
            else {
                $uid = $(this).attr("data-id");
                goUrl("<!--{$wapfile}-->?c=cp_do&a=writemsg&touid="+$uid);
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

<!--{if $pagecount > 1}-->
<div class="oe_page">
  页次：<!--{$page}-->/<!--{$pagecount}-->
  <!--{if $prepage>0}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=weibo&<!--{$urlitem}-->&page=<!--{$prepage}-->');">上一页</span>
  <!--{/if}-->
  <!--{if $nextpage>0}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=weibo&<!--{$urlitem}-->&page=<!--{$nextpage}-->');">下一页</span>
  <!--{/if}-->
</div>
<!--{/if}-->

<div style="height:85px;"></div>
<div class="oe_weibobtn">
  <span class="span_1" f="act_weibo">
    <i class="iconfont">&#xe668;</i>
  </span>
  <!--{if $type == 'my'}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&uid=0')">
    <i class="iconfont">&#xe65c;</i>
  </span>
  <!--{else}-->
  <span onclick="goUrl('<!--{$wapfile}-->?c=<!--{$c}-->&type=my')">
    <i class="iconfont">&#xe65c;</i>
  </span>
  <!--{/if}-->
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

<!--{include file="<!--{$waptpl}-->block_eif.tpl"}-->


</body>
</html>