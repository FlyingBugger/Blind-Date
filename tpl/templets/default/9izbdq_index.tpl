<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<style type="text/css">
  body{background:#fff;}
</style>
<!--{assign var='menuid' value='index'}--> 
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<div class="oe_banner">
  <div class="bd">
    <!--{assign var='zone' value=get_zone('index_slide_banner')}--> 
    <!--{if !empty($zone.ads)}--> 
    <ul>
      <!--{foreach $zone.ads as $volist}-->
      <li style="background:url('<!--{$volist.uploadfiles}-->') no-repeat center top"><a href="<!--{$volist.url}-->"></a></li>
      <!--{/foreach}-->
    </ul>
    <!--{/if}-->
  </div>
  <div class="hd">
    <ul>
      <!--{foreach $zone.ads as $volist}--><li><span></span></li><!--{/foreach}-->
    </ul>
  </div>
  <div class="banner_bg"></div>
</div>
<script type="text/javascript">
  jQuery(".oe_banner").slide({mainCell:".bd ul",autoPlay:true});
</script>

<div class="oe_newusrer">
  <div class="index_search">
    <em class="dian"></em>
    <b class="text">快速查找</b>
    <form name="my_ser_cond_form" id="search_normal" method="post" action="<!--{$urlpath}-->index.php?c=user&a=list">
	<input type="hidden" name="storeid" id="storeid" value="<!--{$store.storeid}-->" />
    <div class="oes0_searchcon">         
      <div class="select">
        <i class="jiao"></i>
        <span id="s_sex_text">
        <!--{if $s_sex > 0}-->
		  <!--{hook mod="var" item="sex" type="text" value=$s_sex}-->
		  <!--{else}-->
		  性别
		  <!--{/if}-->
        </span>
        <select name="s_sex" id="s_sex" f="but_change_sel" data-tid="s_sex_text" />
          <option value="">不限</option>
          <option value="2"<!--{if $s_sex == '2'}--> selected<!--{/if}-->>女会员</option>
          <option value="1"<!--{if $s_sex == '1'}--> selected<!--{/if}-->>男会员</option>
        </select>
      </div>
      <div class="select">
        <i class="jiao"></i>
        <span id="s_marry_text">
            <!--{if $s_marry > 0}-->
		  <!--{hook mod="var" item="marrystatus" type="text" value=$s_marry}-->
		  <!--{else}-->
		  婚况
		  <!--{/if}-->
        </span>
          <!--{assign var="varlist" value=vo_list("mod={volistvar} where={marrystatus}")}-->
          <select name="s_marry" id="s_marry" f="but_change_sel" data-tid="s_marry_text">
              <option value="">不限</option>
              <!--{foreach $varlist as $val}-->
              <option value="<!--{$val.value}-->"<!--{if $s_marry == $val.value}--> selected<!--{/if}-->><!--{$val.text}--></option>
              <!--{/foreach}-->
          </select>
      </div>
      <div class="selectarea">
        <i class="jiao"></i>
        <span id="s_age_text" f="but_cond_multi_sel" data-box="s_age_box">
              <!--{if $s_sage > 0 && $s_eage > 0}-->
              <!--{$s_sage}-->&nbsp;至&nbsp;<!--{$s_eage}-->
              <!--{else}-->
              年龄
              <!--{/if}-->
        </span>
		<div class="selectbd" style="width:160px;display:none;" id="s_age_box">
		  <h3>请选择年龄</h3>
		  <!--{hook mod='age' name='s_sage' text='不限' value=$s_sage}-->
		  &nbsp;至&nbsp;
		  <!--{hook mod='age' name='s_eage' text='不限' value=$s_eage}-->
		  <p><label f="but_cond_multi_confirm" data-id1="s_sage" data-id2="s_eage" data-tid="s_age_text" data-tips="年龄" data-box="s_age_box">确定</label></p>
		</div>
      </div>
      <div class="selectarea">
        <i class="jiao"></i>
        <span id="s_dist_text" f="but_cond_multi_sel" data-box="s_dist_box">
		  <!--{if $s_dist1 > 0}-->
          <!--{area type="text" value=$s_dist1}-->
          <!--{area type="text" value=$s_dist2}-->
          <!--{area type="text" value=$s_dist3}-->
          <!--{area type="text" value=$s_dist4}-->
          <!--{else}-->
          所在地区
          <!--{/if}-->
		</span>
		<div class="selectbd" style="width:300px;display:none;" id="s_dist_box">
		  <h3>请选择地区</h3>
		  <!--{area type='dist1' name='s_dist1' value=$s_dist1 ajax='1' cname='s_dist2' cajax='1' dname='s_dist3' text='=请选择='}-->
		  <b id="json_s_dist2" style="font-weight:normal;"> 
			<!--{if $s_dist1>0}-->
			<!--{area type='dist2' pvalue=$s_dist1 cname='s_dist2' cvalue=$s_dist2 cajax='1' dname='s_dist3' dvalue=$s_dist3 text='=不限='}-->
			<!--{else}-->
			  <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
			<!--{/if}-->
		  </b>
		  <b id="json_s_dist3" style="font-weight:normal;"> 
			<!--{if $s_dist2>0}-->
		  <!--{area type='dist3' cvalue=$s_dist2 dname='s_dist3' dvalue=$s_dist3 text='=不限='}-->
		  <!--{else}-->
		  <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
		  <!--{/if}-->
		  </b>
		  <p><label f="but_cond_three_confirm" data-id1="s_dist1" data-id2="s_dist2" data-id3="s_dist3" data-tid="s_dist_text" data-tips="地区" data-box="s_dist_box">确定</label></p>
		</div>
      </div>
      <div class="select">
        <i class="jiao"></i>
        <span id="s_avatar_text">
            <!--{if $s_avatar == '1'}-->
		  有头像
		  <!--{else}-->
		  不限
		  <!--{/if}-->
        </span>
          <select name="s_avatar" id="s_avatar" f="but_change_sel" data-tid="s_avatar_text">
              <option value="2"<!--{if $s_avatar == '2'}--> selected<!--{/if}-->>不限</option>
              <option value="1"<!--{if $s_avatar == '1'}--> selected<!--{/if}-->>有头像</option>
          </select>
      </div>
      <div class="selectarea">
          <i class="jiao"></i>
          <span id="s_height_text" f="but_cond_multi_sel" data-box="s_height_box">
              <!--{if $s_sheight > 0 && $s_eheight > 0}-->
              <!--{$s_sheight}-->CM&nbsp;至&nbsp;<!--{$s_eheight}-->CM
              <!--{else}-->
              身高
              <!--{/if}-->
          </span>
          <div class="selectbd" style="width:180px;display:none;" id="s_height_box">
              <h3>请选择身高</h3>
              <!--{assign var="varlist" value=vo_list("mod={volistheight}")}-->
              <select name="s_sheight" id="s_sheight" f="but_change_sel" data-tid="s_sheight_text">
                  <option value="">不限</option>
                  <!--{foreach $varlist as $val}-->
                  <option value="<!--{$val.value}-->"<!--{if $s_sheight == $val.value}--> selected<!--{/if}-->><!--{$val.value}-->CM</option>
                  <!--{/foreach}-->
              </select>
              &nbsp;至&nbsp;
              <select name="s_eheight" id="s_eheight" f="but_change_sel" data-tid="s_eheight_text">
                  <option value="">不限</option>
                  <!--{foreach $varlist as $val}-->
                  <option value="<!--{$val.value}-->"<!--{if $s_eheight == $val.value}--> selected<!--{/if}-->><!--{$val.value}-->CM</option>
                  <!--{/foreach}-->
              </select>
              <p><label f="but_cond_multi_confirm" data-id1="s_sheight" data-id2="s_eheight" data-tid="s_height_text" data-tips="身高" data-box="s_height_box">确定</label></p>
          </div>
      </div>

        <div class="selectarea">
            <i class="jiao"></i>
          <span id="s_weight_text" f="but_cond_multi_sel" data-box="s_weight_box">
              <!--{if $s_sweight > 0 && $s_eweight > 0}-->
              <!--{$s_sweight}-->KG&nbsp;至&nbsp;<!--{$s_eweight}-->KG
              <!--{else}-->
              体重
              <!--{/if}-->
          </span>
            <div class="selectbd" style="width:180px;display:none;" id="s_weight_box">
                <h3>请选择体重</h3>
                <!--{assign var="varlist" value=vo_list("mod={volistweight}")}-->
                <select name="s_sweight" id="s_sweight" f="but_change_sel" data-tid="s_sweight_text">
                    <option value="">不限</option>
                    <!--{foreach $varlist as $val}-->
                    <option value="<!--{$val.value}-->"<!--{if $s_sweight == $val.value}--> selected<!--{/if}-->><!--{$val.value}-->KG</option>
                    <!--{/foreach}-->
                </select>
                &nbsp;至&nbsp;
                <select name="s_eweight" id="s_eweight" f="but_change_sel" data-tid="s_eweight_text">
                    <option value="">不限</option>
                    <!--{foreach $varlist as $val}-->
                    <option value="<!--{$val.value}-->"<!--{if $s_eweight == $val.value}--> selected<!--{/if}-->><!--{$val.value}-->KG</option>
                    <!--{/foreach}-->
                </select>
                <p><label f="but_cond_multi_confirm" data-id1="s_sweight" data-id2="s_eweight" data-tid="s_weight_text" data-tips="体重" data-box="s_weight_box">确定</label></p>
            </div>
        </div>
      <div class="btn_1" f="but_search_cond_user"><i></i>搜本店</div>
      <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<!--{$urlpath}-->index.php?c=user&a=advsearch';" />
    </div>
	</form>
    <div class="clear"></div>
  </div>
  <div class="oe_nuser">
    <div class="hd">
      <b>推荐会员</b>
      <ul>
        <li class="on"><span>最新</span></li>
        <li><span>VIP</span></li>
        <li><span>美女</span></li>
        <li><span>俊男</span></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="bd drop">
      <div>
        <!--{if $login.status=='1'}-->
	      <!--{if $login.info.gender == '2'}-->
	      <!--{assign var="userlist" value=vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}")}-->
	      <!--{else}-->
	      <!--{assign var="userlist" value=vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}")}-->
	      <!--{/if}-->
        <!--{else}-->
          <!--{assign var="userlist" value=vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1'} num={6}")}-->
        <!--{/if}-->
        <!--{foreach $userlist as $volist}-->
	    <dl class="cin">
          <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->" /></a></dt>
          <dd>
            <h3><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h3>
            <p class="p_1">
            <span><!--{area type='text' value=$volist.cityid}--> </span>
            <label><!--{if $volist.height > 0}--><!--{$volist.height}-->CM<!--{/if}--></label>
            <br>
            <!--{if $volist.salary==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$volist.salary}-->/月<!--{/if}--></p>
            <p class="btn">
              <span onClick="artbox_hi('<!--{$volist.userid}-->');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <!--{/foreach}-->
        <div class="clear"></div>
      </div>
      <div>
        <!--{if $login.status=='1'}-->
	      <!--{if $login.info.gender == '2'}-->
	      <!--{assign var="uservip" value=vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}")}-->
	      <!--{else}-->
	      <!--{assign var="uservip" value=vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}")}-->
	      <!--{/if}-->
        <!--{else}-->
          <!--{assign var="uservip" value=vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1'} num={6}")}-->
        <!--{/if}-->
        <!--{foreach $uservip as $volist}-->
	    <dl class="cin">
          <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->" /></a></dt>
          <dd>
            <h3><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h3>
            <p class="p_1">
            <span><!--{area type='text' value=$volist.cityid}--> </span>
            <label><!--{if $volist.height > 0}--><!--{$volist.height}-->CM<!--{/if}--></label>
            <br>
            <!--{if $volist.salary==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$volist.salary}-->/月<!--{/if}--></p>
            <p class="btn">
              <span onClick="artbox_hi('<!--{$volist.userid}-->');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <!--{/foreach}-->
        <div class="clear"></div>
      </div>
      <div>
        <!--{assign var="gender2" value=vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}")}-->
        <!--{foreach $gender2 as $volist}-->
	    <dl class="cin">
          <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->" /></a></dt>
          <dd>
            <h3><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h3>
            <p class="p_1">
            <span><!--{area type='text' value=$volist.cityid}--> </span>
            <label><!--{if $volist.height > 0}--><!--{$volist.height}-->CM<!--{/if}--></label>
            <br>
            <!--{if $volist.salary==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$volist.salary}-->/月<!--{/if}--></p>
            <p class="btn">
              <span onClick="artbox_hi('<!--{$volist.userid}-->');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <!--{/foreach}-->
        <div class="clear"></div>
      </div>
      <div>
         <!--{assign var="gender1" value=vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}")}-->
        <!--{foreach $gender1 as $volist}-->
	    <dl class="cin">
          <dt><a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->" /></a></dt>
          <dd>
            <h3><a href="<!--{$volist.homeurl}-->" target="_blank"><!--{$volist.username}--></a></h3>
            <p class="p_1">
            <span><!--{area type='text' value=$volist.cityid}--> </span>
            <label><!--{if $volist.height > 0}--><!--{$volist.height}-->CM<!--{/if}--></label>
            <br>
            <!--{if $volist.salary==0}--><font class='empty'>未透露</font><!--{else}--><!--{hook mod='var' item='salary' type='text' value=$volist.salary}-->/月<!--{/if}--></p>
            <p class="btn">
              <span onClick="artbox_hi('<!--{$volist.userid}-->');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <!--{/foreach}-->
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    jQuery(".oe_nuser").slide({trigger:"click"});
  </script>
</div>

<div class="oe_party">
  <div class="top"></div>
  <div class="hd">
     相亲活动
     <span></span>
     <img src="<!--{$skinpath}-->images/p_4.png"/>
     <a href="<!--{$urlpath}-->index.php?c=party" class="so">更多</a>
  </div>
  <div class="bd drop">
    <!--{assign var='party' value=vo_list("mod={party} where={v.elite=1} num={3}")}-->
    <!--{foreach $party as $volist}--> 
    <dl class="cin dl_<!--{$volist.i}--> <!--{if $volist.i==1}--> on <!--{/if}-->">
      <dt><a href="<!--{$volist.url}-->" target="_blank"><img src="<!--{$volist.thumbimg}-->"  /></a></dt>
      <dd class="sub"  <!--{if $volist.i==1}-->  <!--{else}--> style="display:none;<!--{/if}-->">
        <h3><a href="<!--{$volist.url}-->"><a href="<!--{$volist.url}-->" target="_blank" title="<!--{$volist.title}-->"><!--{$volist.title}--></a></a></h3>
        <p>截止报名：<!--{$volist.endbmtime|date_format:"%Y/%m/%d %H:%M"}--></p>
        <p><!--{$volist.content|filterhtml:30}-->…</p>
        <!--{if $volist.endbmtime > $time}-->
        <a href="<!--{$volist.url}-->" class="more">我要<br>报名</a>
        <!--{else}-->
        <a href="<!--{$volist.url}-->" class="more">活动<br>结束</a>
        <!--{/if}-->
        <a href="<!--{$volist.url}-->" class="go"></a>
      </dd>
      <div class="clear"></div>
    </dl>
    <!--{/foreach}-->
    <div class="clear"></div>
  </div>
  <div class="bottom"></div>
</div>

<script type="text/javascript">
  jQuery(".oe_party").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
</script>




<div class="oe_diary">
  <div class="oe_diarycon">
    <div class="hd">
      <img src="<!--{$skinpath}-->images/p_5.png" alt="" />日记心情
      <span></span>
    </div>
    <div class="bd">
      <div class="left">
        <!--{assign var='diarylist' value=vo_list("mod={diary}  where={v.thumbfiles !=''} num={3}")}-->
	      <!--{foreach $diarylist as $volist}-->
	      <dl <!--{if $volist.i==2}-->class="dl_2" <!--{/if}-->>
            <dt><a href="<!--{$volist.url}-->" target="_blank"><!--{avatar width='220' height='270' value=$volist.avatarurl}--></a></dt>
            <dd>
              <h3><a href="<!--{$volist.url}-->" target="_blank"><!--{$volist.title}--></a></h3>
              <p class="text"><!--{$volist.content|filterhtml:50}--></p>
              <p class="time">发布时间：<!--{$volist.timeline|date_format:'%Y-%m-%d'}--><span><i></i>浏览：<!--{$volist.hits}--></span></p>
            </dd>
            <div class="clear"></div>
          </dl>
          <!--{/foreach}-->
      </div>
      <div class="right">
        <div class="hder">微心情  
          <!--{if $login.status == '0'}-->
		  <a href="###" onclick="artbox_loginbox();">更多++</a>
		  <!--{else}-->
		  <a href="<!--{$urlpath}-->usercp.php?c=weibo">更多++</a>
		  <!--{/if}-->
        </div>
        <div class="bder">
          <!--{assign var='weibolist' value=vo_list("mod={weibo}  where={u.avatarflag='1'}  num={6}")}-->
		  <!--{foreach $weibolist as $volist}-->
		  <dl>
		    <dt>
              <!--{$volist.addtime|date_format:"%m-%d %H:%M:%S"}-->
              <a href="<!--{$volist.homeurl}-->" target="_blank"><img src="<!--{$volist.avatarurl}-->" /></a>
            </dt>
		    <dd>
              <h3><!--{$volist.username}--></h3>
              <p><!--{$volist.content}--></p>
		    </dd>
		    <div class="clear"></div>
		  </dl>
		<!--{/foreach}-->
          <div class="line"></div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<div class="oe_story">
  <div class="top"></div>
  <div class="oe_storycon">
    <div class="hd">
      成功案例
      <span></span>
      <img src="<!--{$skinpath}-->images/p_6.png" alt="" />
      <a href="<!--{$urlpath}-->index.php?c=case" class="so">更多</a>
    </div>
    <div class="bd">
      <!--{assign var='case' value=vo_list("mod={case}  num={6}")}-->
	  <!--{foreach $case as $volist}-->
      <dl class="dl_<!--{$volist.i}--> nLi <!--{if $volist.i==1}--> on <!--{/if}-->">
        <dt><a href="<!--{$volist.url}-->"><img src="<!--{$volist.thumbimg}-->" /></a></dt>
        <dd class="sub" <!--{if $volist.i>1}--> style="display:none;" <!--{/if}-->>
          <p class="p_1"></p>
          <div>
            <h3><a href="#"><!--{$volist.title}--></a></h3>
            <p>目前状态：<!--{hook mod="var" item="casecat" type="text" value=$volist.catid}--></p>
            <p class="p_2"><a href="<!--{$volist.url}-->">查看详情</a></p>
          </div>
        </dd>
      </dl>
      <!--{/foreach}-->
      <div class="clear"></div>
    </div>
  </div>
  <div class="bottom"></div>
</div>


<script type="text/javascript">
  jQuery(".oe_story").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
</script>

<div class="oe_link">
  <div class="oe_linkcon">
    <b>友情链接：</b>
    <!--{assign var='friendlink' value=vo_list("mod={friendlink}")}-->
	<!--{if !empty($friendlink)}-->
	<!--{foreach $friendlink as $volist}-->
	<a href="<!--{$volist.url}-->" target="_blank"><!--{$volist.name}--></a>&nbsp;
	<!--{/foreach}-->
	<!--{else}-->
	<!--{label name='friendlink'}-->
	<!--{/if}-->
  </div>
</div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->
</body>
</html>