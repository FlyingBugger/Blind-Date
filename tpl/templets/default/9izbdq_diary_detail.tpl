<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{assign var='menuid' value='diary'}--> 
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_search.tpl"}-->
    <div class="oe_diary_detail">
      <div class="left">
          <h1 class="title"><!--{$diary.title}--></h1>
          <div class="jian">
            天气：<!--{hook mod='var' item='weather' type='text' value=$diary.weather}-->&nbsp;&nbsp;
            心情：<!--{hook mod='var' item='feel' type='text' value=$diary.feel}-->&nbsp;&nbsp;
            发表时间：<!--{$diary.timeline|date_format:"%m-%d %H:%M"}--> 
            人气：<font id='json_hits'></font>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#content">我要评论</a>
          </div>
            <div class="topj"> 
              <a href="<!--{$diary.homeurl}-->" class="topimg"><!--{avatar width='70' height='86' value=$diary.avatarurl}--></a>
              <h3>发表人：<!--{$diary.levelimg}--><a href="<!--{$diary.homeurl}-->"><!--{$diary.username}--></a></h3>
              <span class="username"><!--{$diary.age}-->岁 <!--{area type='text' value=$diary.provinceid}--> <!--{area type='text' value=$diary.cityid}--> <!--{$diary.height}-->CM <!--{hook mod='var' item='education' type='text' value=$diary.education}--> <!--{hook mod='var' item='salary' type='text' value=$diary.salary}--></span>
              <p>
                <a href="###" class="sg_1" onClick="artbox_writemsg('<!--{$diary.userid}-->');">发信件</a> 
                <a href="###" class="sg_2" onClick="artbox_hi('<!--{$diary.userid}-->');">打招呼</a> 
                <a  href="###" class="sg_3" onClick="artbox_sendgift('<!--{$diary.userid}-->');">送礼物</a> 
              </p>
              <div class="clear"></div>
            </div>
          <div class="oe_diary_content">
            <!--{$diary.content|nl2br}-->
          </div>
          <div class="comments">
            <h2>相关评论</h2>
              <!--{foreach $comment as $volist}-->
              <dl> 
                <dt>
                  <a href="<!--{$volist.homeurl}-->" class="head" target='_blank'><!--{avatar  value=$volist.avatarurl}--></a>
                </dt>
                <dd>
                  <h3>
                    <a href="<!--{$volist.homeurl}-->" target="_blank"><b><!--{$volist.username}--></b></a> 说：
                    <p>
                      <span>评论于：<!--{$volist.timeline|date_format:"%m-%d %H:%M"}--></span>
                      <label><!--{$volist.ordersi}-->楼</label>
                    </p>
                  </h3>
                  <p class="p_1">
                    <!--{$volist.content|nl2br}-->
                  </p>
                </dd>
                <div style="clear:both"></div>
              </dl>
              <!--{/foreach}-->
            <!--{if !empty($showpage)}-->
            <div class="pagecode"> 
              <!--{$showpage}--> 
            </div>
            <div style="clear:both;"></div>
            <!--{/if}-->
            <div class="comments_input">
              <h2 style="margin-top:5px;">发表评论：</h2>
              <input type='hidden' name='id' id='id' value="<!--{$id}-->" />
              <div class="textarea">
                <textarea  id="content" name="content"></textarea>
              </div>
              
              <div class="diary_login">
                <!--{if $config.commentcode == '1'}-->
              <div class="code">
                <input type="text" id="checkcode" name="checkcode" class="checkcode"  maxlength='6' />
                <img id="checkCodeImg" src="<!--{$urlpath}-->source/include/imagecode.php?act=verifycode" align="middle" /> <a href="javascript:refresh_code('checkCodeImg');"> 换一张</a>
              </div>
              <!--{/if}-->
              <div class="log">
                <!--{if $login.status==1}--> 
                欢迎您：<!--{$login.username}-->&nbsp;&nbsp;&nbsp; <a class="btn" name='btn_roll' id='btn_roll'><span>提交评论</span></a> 
                <!--{else}--> 
                只有登录会员才可以进行评论! <a href="###" class="a_1" onClick="artbox_loginbox();">登录</a> 或者 <a class="a_2" href="<!--{$appfile}-->?c=passport&a=reg">免费注册</a> 
                <!--{/if}-->
              </div>
              </div>
            </div>
          </div>
      </div>
      <div class="right">
    <!--{assign var='diarycatlist' value=vo_list("mod={diarycat}")}-->
    <!--{if !empty($diarycatlist)}-->
    <div class='listtype'>
      <a href="<!--{$appfile}-->?c=diary&a=list"<!--{if $cid==0}--> class='current'<!--{/if}-->>全部日记</a> 
      <!--{foreach $diarycatlist as $val}-->
      <a href="<!--{$val.url}-->"<!--{if $cid==$val.catid}--> class='current'<!--{/if}-->><!--{$val.catname}--></a>
      <!--{/foreach}-->
    </div>
    <!--{/if}-->
    <div class="hot_diary">
      <h3><i>热门日记</i></h3>
      <ul>
        <!--{assign var='hotdiary' value=vo_list("mod={diary} orderby={v.hits DESC} num={10}")}-->
        <!--{foreach $hotdiary as $volist}-->
        <li><i></i><a target="_blank" href="<!--{$volist.url}-->"><!--{$volist.title}--></a> </li>
        <!--{/foreach}-->
      </ul>
    </div>
  </div>
      <div class="clear"></div>
    </div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html><script type='text/javascript'>
$(function(){
	$('#btn_roll').click(function(){
		var id = $('#id').val();
		var content = $('#content').val();
		var checkcode = '';

		if (id == '') {
			alert('ID错误！');
			return false;
		}
		if (content == '') {
			alert('评论内容不能为空！');
			$('#content').focus();
			return false;
		}
		<!--{if $config.commentcode == '1'}-->
		checkcode = $('#checkcode').val();
		if (checkcode == '') {
			alert('请填写验证码！');
			$('#checkcode').focus();
			return false;
		}
		<!--{/if}-->

		roll_diarycomment(id, content, checkcode);
	});

	update_hits('<!--{$id}-->', 'diary', 'json_hits');
});
</script>