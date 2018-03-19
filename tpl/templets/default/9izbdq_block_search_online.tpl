    <div class="oein_search">
      <form method="post" action="<!--{$urlpath}-->index.php?c=online&a=list" id="search_normal">
        <div class="oein_searchcon">
          <em class="dian"></em>
         <b class="text">我要找</b>
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
          &nbsp;&nbsp;
		  <input type="submit" value="搜索" name="btn_search" id="btn_search" class="n_search_btn" />&nbsp;
		  &nbsp;&nbsp;
          
          <div class="search_tips"> 在线会员 共<span><!--{$total}--></span>人符合您的搜索条件 </div>
		  </div>
      </form>
    </div>