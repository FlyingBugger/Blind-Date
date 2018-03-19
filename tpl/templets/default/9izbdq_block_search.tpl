<div class="oein_search">
  <div class="oein_searchcon">
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
          <div class="selectbd" style="width:160px;display:none;" id="s_height_box">
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
            <div class="selectbd" style="width:160px;display:none;" id="s_weight_box">
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
      <div class="btn_1" f="but_search_cond_user"><i></i>搜索</div>
      <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<!--{$urlpath}-->index.php?c=user&a=advsearch';" />
    </div>
	</form>
    <div class="clear"></div>
  </div>
</div>

<div class="n_search_top" style="display:none;">
  <form method="post" action="<!--{$urlpath}-->index.php?c=user&a=list" id="search_normal">
  <div class="search_in">
    <i class="icon"></i>
    找:
    <select name='s_sex' id='s_sex'>
      <option value='0'>=不限=</option>
      <option value='2'<!--{if $s_sex == 2}--> selected<!--{/if}-->>女会员</option>
      <option value='1'<!--{if $s_sex == 1}--> selected<!--{/if}-->>男会员</option>
    </select>
    &nbsp;年龄:
    <!--{hook mod='age' name='s_sage' text='不限'}-->
    <span>~</span>
    <!--{hook mod='age' name='s_eage' text='不限'}-->
    &nbsp;地区:
    <!--{area type='dist1' name='s_dist1' value=$s_dist1 ajax='1' cname='s_dist2' cajax='1' dname='s_dist3' text='=请选择='}-->&nbsp;
    <span id="json_s_dist2">
      <!--{if $s_dist1>0}-->
      <!--{area type='dist2' pvalue=$s_dist1 cname='s_dist2' cvalue=$s_dist2 cajax='1' dname='s_dist3' dvalue=$s_dist3 text='=不限='}-->
      <!--{else}-->
      <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
      <!--{/if}-->
    </span>&nbsp;
    <span id="json_s_dist3">
      <!--{if $s_dist2>0}-->
      <!--{area type='dist3' cvalue=$s_dist2 dname='s_dist3' dvalue=$s_dist3 text='=不限='}-->
      <!--{else}-->
      <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
      <!--{/if}-->
    </span>&nbsp;
    婚史:<!--{hook mod='var' item='marrystatus' type='select' name='s_marry' text='=不限=' value=$s_marry}-->&nbsp;
    <input type="checkbox" value="1" name="s_avatar" id="s_avatar"<!--{if $s_avatar==1}--> checked<!--{/if}--> />
    <label for="s_p_img">有头像</label>
    &nbsp;&nbsp;
    <input type="submit" value="搜索" name="btn_search" id="btn_search" class="n_search_btn" />&nbsp;
    <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<!--{$urlpath}-->index.php?c=user&a=advsearch';" />
		  &nbsp;&nbsp;
  </div>
  </form>
</div>