<!--{assign var='menuid' value=''}-->
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}--> 
<div class="oe_home">
  <div class="oe_hometop">
    <div class="headimg">
      <div class="bd">
        <img class="img" src="<!--{$home.avatarurl}-->" />
      </div>
      <div class="hd">
        <!--{include file="<!--{$tplpath}--><!--{$tplpre}-->home_block_album.tpl"}--> 
      <div class="clear"></div>
      </div>
    </div>
    <div class="home_info">
      <h3>
        <!--{$home.username}-->
        
        <!--{if $home.idnumberrz=='1'}-->
          <span class="span_1"></span>
        <!--{/if}-->
        <!--{if $home.emailrz=='1'}--> 
          <span class="span_2"></span>
        <!--{/if}-->
        <!--{if $home.videorz=='1'}--> 
        <span class="span_3"></span>
        <!--{/if}-->
        <!--{$home.levelimg}-->
        <em><!--{$home.groupname}--></em>
      </h3>
      <p class="p_1">
        ID:<!--{$home.userid}-->&#12288;&#12288;&#12288;&#12288;&#12288;&#12288;
        <span>注册时间： </span>
        <!--{if $login.status==0}--> 
        <a href="javascript:;" onClick="artbox_loginbox();">登录可见</a> 
        <!--{else}--> 
        <!--{if $login.userid == $home.userid}--> 
        <!--{$home.regtime|date_format:"%Y-%m-%d"}--> 
        <!--{else}--> 
        <!--{if $login.group.view.viewlogintime == 1}--> 
        <!--{$home.regtime|date_format:"%Y-%m-%d"}--> 
              <!--{else}--> 
              <a href="<!--{$urlpath}-->usercp.php?c=vip">VIP可见</a> 
              <!--{/if}--> 
              <!--{/if}--> 
              <!--{/if}--> 
              &#12288;&#12288;
              <span>登录时间：</span> 
              <!--{if $login.status==0}--> 
              <a href="javascript:;" onClick="artbox_loginbox();">登录可见</a> 
              <!--{else}--> 
              <!--{if $login.userid == $home.userid}--> 
              <!--{$home.logintime|date_format:"%Y-%m-%d"}--> 
              <!--{else}--> 
              <!--{if $login.group.view.viewlogintime == 1}--> 
              <!--{$home.logintime|date_format:"%Y-%m-%d"}--> 
              <!--{else}--> 
              <a href="<!--{$urlpath}-->usercp.php?c=vip">VIP可见</a> 
              <!--{/if}--> 
              <!--{/if}--> 
              <!--{/if}-->
      </p>
      <ul>
        <li><label>用户名：</label> <b><!--{$home.username}--> </b> </li>
        <li><label>性别：</label><span class="certiconph"><!--{if $home.gender==1}-->男<!--{else}-->女<!--{/if}--></span></li>
        <li><label>婚姻状态：</label><!--{hook mod='var' item='marrystatus' type='text' value=$home.marrystatus}--><span class="certiconph"></span></li>
        <li><label>年龄：</label><!--{$home.age}--> 岁<span class="certiconph"></span></li>
        <li><label>学历：</label><!--{hook mod='var' item='education' type='text' value=$home.education}--><span class="certiconph"></span></li>
        <li><label>身高：</label><!--{$home.height}-->CM</li>
        <li><label>月薪收入：</label><!--{if $home.salary == 0}--><font class="empty">未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$home.salary}--><!--{/if}--></li>
        <li><label>所在地区：</label><!--{area type='text' value=$home.provinceid}--> <!--{area type='text' value=$home.cityid}--></li>
        <div class="clear"></div>
      </ul>
      <div class="clear"></div>
      <div class="btn">
        <!--{if $login.status == '1'}-->
        <span class="span_1" onClick="artbox_hi('<!--{$home.userid}-->');"><i></i>打招呼</span>
        <span class="span_2" onClick="artbox_writemsg('<!--{$home.userid}-->');"><i></i>写信件</span>
        <!--{if $config.showhomecontact == '1' && $home.privacy != '4'}--> 
        <span class="span_3" onClick="artbox_viewcontact('<!--{$home.userid}-->');"><i></i>联系方式</span>
        <!--{else}-->
        <span class="span_3" onClick="artbox_writemsg('<!--{$home.userid}-->');"><i></i>索要联系方式</span>
        <!--{/if}-->
        
        <!--{if true === $listenstatus}-->
        <input type="hidden" name="listentype" id="listentype" value="newcancel" />
        <span class="span_4"  id="btn_listen"><i></i>取消关注</span>
        <!--{else}-->
        <input type="hidden" name="listentype" id="listentype" value="newlisten" />
        <span class="span_4"  id="btn_listen"><i></i>加关注</span>
        <!--{/if}--> 
        
      
        
        
        <!--{else}-->
        <span  class="span_1" onClick="artbox_loginbox();"><i></i>打招呼</span>
        <span  class="span_2" onClick="artbox_loginbox();"><i></i>写信件</span>
        <span  class="span_3" onClick="artbox_loginbox();"><i></i>联系方式</span>
        <span  class="span_4" onClick="artbox_loginbox();"><i></i>加关注</span>
        <!--{/if}-->
      </div>
      <div class="intro">
        <span class="icon"></span>
        <!--{$home.monolog|nl2br}-->
      </div>
      <div class="jubao"  onClick="artbox_complaint('<!--{$home.userid}-->');">
        <i></i> 投诉/举报
      </div>
      
      <!--{if $config.credit_flag == '1'}-->
      <script type="text/javascript" src="<!--{$skinpath}-->js/oecredit.js"></script>
      <dl class="oe_home_safety">
        <dt title="诚信查询" f="but_home_viewcredit" data-uid="<!--{$home.userid}-->" class="cursor">
          <span> </span>
        </dt>
        <dd class="loading" style="display:none;" id="credit_loading">
          <img src="<!--{$skinpath}-->images/loading.gif" />
        </dd>
        <label class="close cursor" f="but_close_viewcredit" style="display:none;"></label>
        <dd style="display:none;" id="credit_result"></dd>
      </dl>
      <!--{/if}-->
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="oe_homeinfo">
    <div class="left">
      <dl>
        <dt>
          <span class="span_1"><i></i>&nbsp;</span> 择偶条件
        </dt>
        <dd>
          <ul>
            <li><span>性别：</span> <!--{if $cond.gender=='1'}-->男<!--{else if $cond.gender=='2'}-->女<!--{else}--><font class='empty'>不限</font><!--{/if}--></li>
            <li><span>照片要求：</span> <!--{if $cond.avatar=='1'}-->有照片<!--{else}--><font class='empty'>不限</font><!--{/if}--></li>
            <li><span>年龄范围：</span><!--{if $cond.startage=='0'}--><font class='empty'>不限</font><!--{else}--><!--{$cond.startage}-->~<!--{$cond.endage}-->岁<!--{/if}--></li>
            <li><span>身高范围：</span><!--{if $cond.startheight=='0'}--><font class='empty'>不限</font><!--{else}--><!--{$cond.startheight}-->~<!--{$cond.endheight}-->CM<!--{/if}--></li>
            <li><span>交友类型：</span><!--{if empty($cond.lovesort)}--><font class='empty'>不限</font><!--{else}--><!--{hook mod='lovesort' type='multi' value=$cond.lovesort}--><!--{/if}--></li>
            <li><span>婚史状况：</span><!--{if empty($cond.marry)}--><font class='empty'>不限</font><!--{else}--><!--{hook mod='var' type='multi' item='marrystatus' value=$cond.marry}--><!--{/if}--></li>
            <li><span>学历要求：</span><!--{if $cond.startedu == 0}--><font class='empty'>不限</font><!--{else}--><!--{hook mod='var' type='text' item='education' value=$cond.startedu}-->~<!--{hook mod='var' type='text' item='education' value=$cond.endedu}--><!--{/if}--></li>
            <li><span>诚信星级：</span><!--{if $cond.star==0}--><font class='empty'>不限</font><!--{else}--><!--{if $cond.starup==1}-->以上<!--{elseif $cond.starup==2}-->以下<!--{/if}--><!--{/if}--></li>
            <li>
              <span>所在地区：</span>
              <!--{assign var='i' value=false}--> 
              <!--{foreach $cond.bulidarea as $volist}--> 
              <!--{if $volist.city>0}--> 
              <!--{assign var='i' value=true}--> 
              <!--{area type='text' value=$volist.province}--> <!--{area type='text' value=$volist.city}--><br />
              <!--{/if}--> 
              <!--{/foreach}--> 
              <!--{if false === $i}--> 
              <font class='empty'>不限</font> 
              <!--{/if}-->
            </li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
      <dl>
        <dt>
          <span class="span_2"><i></i>&nbsp;</span> 详细资料
        </dt>
        <dd>
          <ul>
            <li><span>年龄：</span><!--{$home.age}--> 岁</li>
            <li><span>生肖：</span><!--{$home.lunar}--></li>
            <li><span>星座：</span><!--{$home.astro}--></li>
            <li><span>交友类型：</span><!--{if $home.lovesort==0}--><font class='empty'>未透露</font><!--{else}--><!--{$home.sortname}--><!--{/if}--></li>
            <li><span>血型：</span><!--{if $home.blood==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' type='text' item='blood' value=$home.blood}--><!--{/if}--></li>
            <li><span>民族：</span><!--{if $home.national==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' type='text' item='national' value=$home.national}--><!--{/if}--></li>
            <li><span>有无子女：</span><!--{if $home.childrenstatus==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' type='text' item='childrenstatus' value=$home.childrenstatus}--><!--{/if}--></li>
            <li><span>购车情况：</span><!--{if $home.caring==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' type='text' item='caring' value=$home.caring}--><!--{/if}--></li>
            <li><span>住房情况：</span><!--{if $home.housing==0}--><font class="empty">未透露</font><!--{else}--><!--{hook mod='var' item='housing' type='text' value=$home.housing}--><!--{/if}--></li>
            <li><span>所在地区：</span><!--{if $home.provinceid == 0}--><font class='empty'>未透露</font><!--{else}--><!--{area type='text' value=$home.provinceid}--> <!--{area type='text' value=$home.cityid}--> <!--{area type='text' value=$home.distid}--><!--{/if}--></li>
            <li><span>户籍地区：</span><!--{if $home.nationprovinceid == 0}--><font class='empty'>未透露</font><!--{else}--><!--{hometown type='text' value=$home.nationprovinceid}--> <!--{hometown type='text' value=$home.nationcityid}--><!--{/if}--></li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
      <dl>
        <dt>
          <span class="span_3"><i></i>&nbsp;</span> 性格相貌
        </dt>
        <dd>
          <ul>
            <li><span>个性描述：</span><!--{if $home.personality==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='personality' type='text' value=$home.personality}--><!--{/if}--></li>
            <li><span>相貌自评：</span><!--{if $home.profile==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='profile' type='text' value=$home.profile}--><!--{/if}--></li>
            <li><span>体重：</span><!--{if $home.weight==0}--><font class='empty'>未透露</font><!--{else}--><!--{$home.weight}--> (KG)<!--{/if}--></li>
            <li><span>体型：</span><!--{if $home.bodystyle==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='bodystyle' type='text' value=$home.bodystyle}--><!--{/if}--></li>
            <li><span>魅力部位：</span><!--{if $home.charmparts==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='charmparts' type='text' value=$home.charmparts}--><!--{/if}--></li>
            <li><span>发型：</span><!--{if $home.hairstyle==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='hairstyle' type='text' value=$home.hairstyle}--><!--{/if}--></li>
            <li><span>发色：</span><!--{if $home.haircolor==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='haircolor' type='text' value=$home.haircolor}--><!--{/if}--></li>
            <li><span>脸型：</span><!--{if $home.facestyle==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='facestyle' type='text' value=$home.facestyle}--><!--{/if}--></li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
      <dl>
        <dt>
          <span class="span_4"><i></i>&nbsp;</span> 工作与学习
        </dt>
        <dd>
          <ul>
            <li><span>公司类型：</span><!--{if $home.companytype==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='companytype' type='text' value=$home.companytype}--><!--{/if}--></li>
            <li><span>收入描述：</span><!--{if $home.salary==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$home.salary}--><!--{/if}--></li>
            <li><span>工作状况：</span><!--{if $home.workstatus==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='workstatus' type='text' value=$home.workstatus}--><!--{/if}--></li>
            <li><span>公司名称：</span><!--{if $home.companyname==''}--><font class='empty'>未透露</font><!--{else}--><!--{$home.companyname}--><!--{/if}--></li>
            <li><span>教育程度：</span><!--{if $home.education==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='education' type='text' value=$home.education}--><!--{/if}--></li>
            <li><span>所学专业：</span><!--{if $home.specialty==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='specialty' type='text' value=$home.specialty}--><!--{/if}--></li>
            <li><span>职业：</span><!--{if $home.jobs=='0'}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='jobs' type='text' value=$home.jobs}--><!--{/if}--></li>
            <li><span>语言能力：</span><!--{if $home.language==''}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='language' type='multi' value=$home.language}--><!--{/if}--></li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
      <dl>
        <dt>
          <span class="span_5"><i></i>&nbsp;</span> 生活描述
        </dt>
        <dd>
          <ul>
            <li><span>家中排行：</span><!--{if $home.tophome==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='tophome' type='text' value=$home.tophome}--><!--{/if}--></li>
            <li><span>最大消费：</span><!--{if $home.consume==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='consume' type='text' value=$home.consume}--><!--{/if}--></li>
            <li><span>是否吸烟：</span><!--{if $home.smoking==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='smoking' type='text' value=$home.smoking}--><!--{/if}--></li>
            <li><span>是否喝酒：</span><!--{if $home.drinking==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='drinking' type='text' value=$home.drinking}--><!--{/if}--></li>
            <li><span>宗教信仰：</span><!--{if $home.faith==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='faith' type='text' value=$home.faith}--><!--{/if}--></li>
            <li><span>锻炼习惯：</span><!--{if $home.workout==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='workout' type='text' value=$home.workout}--><!--{/if}--></li>
            <li><span>作息习惯：</span><!--{if $home.rest==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='rest' type='text' value=$home.rest}--><!--{/if}--></li>
            <li><span>是否要孩子：</span><!--{if $home.havechildren==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='havechildren' type='text' value=$home.havechildren}--><!--{/if}--></li>
            <li><span>愿意与对方父母同住：</span><!--{if $home.talive==0}--><font class='empty'>未透露</font><!--{else}--><!--{$home.talive_t}--><!--{/if}--></li>
            <li><span>喜欢制造浪漫：</span><!--{if $home.romantic==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='romantic' type='text' value=$home.romantic}--><!--{/if}--></li>
            <li><span>擅长生活技能：</span><!--{if $home.lifeskill==''}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='lifeskill' type='multi' value=$home.lifeskill}--><!--{/if}--></li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
    </div>
    <div class="right">
      <div class="oe_gift">
        <!--{assign var='giftlist' value=vo_list("mod={gift} where={v.touserid='<!--{$home.userid}-->'} num={6}")}--> 
        <div class="hd">
          <h4>收到礼物 <span>(<!--{count($giftlist)}-->)</span></h4>
          <!--{if count($giftlist) >2}-->
          <a class="next"></a> <a class="prev"></a>
          <!--{/if}-->
          </div>
        <div class="bd">
          <ul class="_gift_list">
            <!--{if empty($giftlist)}-->
            <!--{if $login.userid = $home.userid}--> 
            <p style="padding-top:10px; padding-left:10px; color:#999;">TA还没收到礼物！成为第一个赠送TA礼物的人吧。</p>
            <!--{else}-->
            <p style="padding-top:10px; padding-left:10px; color:#999;">你还没收到礼物！</p>
            <!--{/if}-->
            <!--{/if}--> 
            <!--{foreach $giftlist as $volist}-->
            <li> <img src="<!--{$volist.imgurl}-->" />
            </li>
            <!--{/foreach}-->
          </ul>
        </div>
        <div class="btn">
          <span onclick="artbox_sendgift('<!--{$home.userid}-->');">送礼物</span>
        </div>
      </div>
      
      <div class="oe_like">
      <h2>猜你喜欢</h2>
	    <!--{assign var='likeuser' value=vo_list("mod={spuser} num={4}")}-->
      <!--{foreach $likeuser as $volist}-->
        <dl>
        <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{avatar width='70' height='86' value=$volist.avatarurl}--></a></dt>
        <dd>
          <h4><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h4>
          <p class="p_1"><!--{$volist.age}-->岁 <!--{$volist.height}--> cm</p>
          <p class="p_2"><span></span><!--{$volist.monolog|filterhtml:18}--></p>
        </dd>
        <div class="clear"></div>
		</dl>
		<!--{/foreach}-->
        <div style="clear:both;"></div>
      </div>
      
      
      
      
    </div>
    <div class="clear"></div>
  </div>

</div>

<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->



<script type='text/javascript'>
$(function(){
	update_hits('<!--{$home.userid}-->', 'home', 'json_hits');
	<!--{if $login.status == '1' && $login.userid != $home.userid}-->
	ajax_visithome('<!--{$home.userid}-->');
	<!--{/if}-->

	$("#btn_listen").bind("click", function(){ //加关注
		oeDoListen();
	});	

	$("#btn_addblack").bind("click", function(){ //拉黑
		oeAddBlack();
	});
});


function oeDoListen() {
	<!--{if $login.status == '0'}-->
	artbox_loginbox();
	return false;
	<!--{/if}-->
	$listentype = $("#listentype").val();
	$.ajax({
		type: "POST",
		url: "<!--{$urlpath}-->usercp.php?c=listen",
		cache: false,
		data: {a:$listentype, fuid:"<!--{$home.userid}-->", halttype:"ajax", r:get_rndnum(8)},
		dataType: "json",
		success: function($data) {
			$json = eval($data);
			$response = $json.response;
			$result = $json.result;
			if ($response == '1') {
				if ($listentype == "newlisten") {
					ToastShow("加关注成功");
					$("#btn_listen").html("取消关注");
					$("#listentype").val("newcancel");
				}
				else {
					ToastShow("取消成功");
					$("#btn_listen").html("加关注");
					$("#listentype").val("newlisten");
				}
			}
			else {
				if ($result.length > 0) {
					ToastShow($result);
				}
				else {
					ToastShow("操作失败，请检查网络。");
				}
			}
		},
		error: function() {
			ToastShow("操作失败，请检查网络...");
		}
	});
}

function oeAddBlack() {
	<!--{if $login.status == '0'}-->
	artbox_loginbox();
	return false;
	<!--{/if}-->
	$.ajax({
		type: "POST",
		url: "<!--{$urlpath}-->usercp.php?c=listen",
		cache: false,
		data: {a:"newblack", fuid:"<!--{$home.userid}-->", halttype:"ajax", r:get_rndnum(8)},
		dataType: "json",
		success: function($data) {
			$json = eval($data);
			$response = $json.response;
			$result = $json.result;
			if ($response == '1') {
				ToastShow("拉黑成功");
				$("#btn_listen").html("加关注");
				$("#listentype").val("newlisten");
			}
			else {
				if ($result.length > 0) {
					ToastShow($result);
				}
				else {
					ToastShow("操作失败，请检查网络。");
				}
			}
		},
		error: function() {
			ToastShow("操作失败，请检查网络...");
		}
	});
}
</script>

</body>
</html>