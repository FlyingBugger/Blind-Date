<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 12:35:59
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_block_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190335a2f5caf3c0033-74742908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17de6d58aed62bf117a070ca7aaed2b776710aa' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_block_search.tpl',
      1 => 1512698244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190335a2f5caf3c0033-74742908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlpath' => 0,
    'store' => 0,
    's_sex' => 0,
    's_marry' => 0,
    'varlist' => 0,
    'val' => 0,
    's_sage' => 0,
    's_eage' => 0,
    's_dist1' => 0,
    's_dist2' => 0,
    's_dist3' => 0,
    's_dist4' => 0,
    's_avatar' => 0,
    's_sheight' => 0,
    's_eheight' => 0,
    's_sweight' => 0,
    's_eweight' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f5cafe19643_82807976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f5cafe19643_82807976')) {function content_5a2f5cafe19643_82807976($_smarty_tpl) {?><div class="oein_search">
  <div class="oein_searchcon">
    <em class="dian"></em>
    <b class="text">快速查找</b>
    <form name="my_ser_cond_form" id="search_normal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user&a=list">
	<input type="hidden" name="storeid" id="storeid" value="<?php echo $_smarty_tpl->tpl_vars['store']->value['storeid'];?>
" />
    <div class="oes0_searchcon">         
      <div class="select">
        <i class="jiao"></i>
        <span id="s_sex_text">
        <?php if ($_smarty_tpl->tpl_vars['s_sex']->value>0){?>
		  <?php echo cmd_hook(array('mod'=>"var",'item'=>"sex",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_sex']->value),$_smarty_tpl);?>

		  <?php }else{ ?>
		  性别
		  <?php }?>
        </span>
        <select name="s_sex" id="s_sex" f="but_change_sel" data-tid="s_sex_text" />
          <option value="">不限</option>
          <option value="2"<?php if ($_smarty_tpl->tpl_vars['s_sex']->value=='2'){?> selected<?php }?>>女会员</option>
          <option value="1"<?php if ($_smarty_tpl->tpl_vars['s_sex']->value=='1'){?> selected<?php }?>>男会员</option>
        </select>
      </div>
      <div class="select">
        <i class="jiao"></i>
        <span id="s_marry_text">
            <?php if ($_smarty_tpl->tpl_vars['s_marry']->value>0){?>
		  <?php echo cmd_hook(array('mod'=>"var",'item'=>"marrystatus",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_marry']->value),$_smarty_tpl);?>

		  <?php }else{ ?>
		  婚况
		  <?php }?>
        </span>
          <?php $_smarty_tpl->tpl_vars["varlist"] = new Smarty_variable(vo_list("mod={volistvar} where={marrystatus}"), null, 0);?>
          <select name="s_marry" id="s_marry" f="but_change_sel" data-tid="s_marry_text">
              <option value="">不限</option>
              <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_marry']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</option>
              <?php } ?>
          </select>
      </div>
      <div class="selectarea">
        <i class="jiao"></i>
        <span id="s_age_text" f="but_cond_multi_sel" data-box="s_age_box">
              <?php if ($_smarty_tpl->tpl_vars['s_sage']->value>0&&$_smarty_tpl->tpl_vars['s_eage']->value>0){?>
              <?php echo $_smarty_tpl->tpl_vars['s_sage']->value;?>
&nbsp;至&nbsp;<?php echo $_smarty_tpl->tpl_vars['s_eage']->value;?>

              <?php }else{ ?>
              年龄
              <?php }?>
        </span>
		<div class="selectbd" style="width:160px;display:none;" id="s_age_box">
		  <h3>请选择年龄</h3>
		  <?php echo cmd_hook(array('mod'=>'age','name'=>'s_sage','text'=>'不限','value'=>$_smarty_tpl->tpl_vars['s_sage']->value),$_smarty_tpl);?>

		  &nbsp;至&nbsp;
		  <?php echo cmd_hook(array('mod'=>'age','name'=>'s_eage','text'=>'不限','value'=>$_smarty_tpl->tpl_vars['s_eage']->value),$_smarty_tpl);?>

		  <p><label f="but_cond_multi_confirm" data-id1="s_sage" data-id2="s_eage" data-tid="s_age_text" data-tips="年龄" data-box="s_age_box">确定</label></p>
		</div>
      </div>
      <div class="selectarea">
        <i class="jiao"></i>
        <span id="s_dist_text" f="but_cond_multi_sel" data-box="s_dist_box">
		  <?php if ($_smarty_tpl->tpl_vars['s_dist1']->value>0){?>
          <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_dist1']->value),$_smarty_tpl);?>

          <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_dist2']->value),$_smarty_tpl);?>

          <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_dist3']->value),$_smarty_tpl);?>

          <?php echo cmd_area(array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['s_dist4']->value),$_smarty_tpl);?>

          <?php }else{ ?>
          所在地区
          <?php }?>
		</span>
		<div class="selectbd" style="width:300px;display:none;" id="s_dist_box">
		  <h3>请选择地区</h3>
		  <?php echo cmd_area(array('type'=>'dist1','name'=>'s_dist1','value'=>$_smarty_tpl->tpl_vars['s_dist1']->value,'ajax'=>'1','cname'=>'s_dist2','cajax'=>'1','dname'=>'s_dist3','text'=>'=请选择='),$_smarty_tpl);?>

		  <b id="json_s_dist2" style="font-weight:normal;"> 
			<?php if ($_smarty_tpl->tpl_vars['s_dist1']->value>0){?>
			<?php echo cmd_area(array('type'=>'dist2','pvalue'=>$_smarty_tpl->tpl_vars['s_dist1']->value,'cname'=>'s_dist2','cvalue'=>$_smarty_tpl->tpl_vars['s_dist2']->value,'cajax'=>'1','dname'=>'s_dist3','dvalue'=>$_smarty_tpl->tpl_vars['s_dist3']->value,'text'=>'=不限='),$_smarty_tpl);?>

			<?php }else{ ?>
			  <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
			<?php }?>
		  </b>
		  <b id="json_s_dist3" style="font-weight:normal;"> 
			<?php if ($_smarty_tpl->tpl_vars['s_dist2']->value>0){?>
		  <?php echo cmd_area(array('type'=>'dist3','cvalue'=>$_smarty_tpl->tpl_vars['s_dist2']->value,'dname'=>'s_dist3','dvalue'=>$_smarty_tpl->tpl_vars['s_dist3']->value,'text'=>'=不限='),$_smarty_tpl);?>

		  <?php }else{ ?>
		  <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
		  <?php }?>
		  </b>
		  <p><label f="but_cond_three_confirm" data-id1="s_dist1" data-id2="s_dist2" data-id3="s_dist3" data-tid="s_dist_text" data-tips="地区" data-box="s_dist_box">确定</label></p>
		</div>
      </div>
      <div class="select">
        <i class="jiao"></i>
        <span id="s_avatar_text">
            <?php if ($_smarty_tpl->tpl_vars['s_avatar']->value=='1'){?>
		  有头像
		  <?php }else{ ?>
		  不限
		  <?php }?>
        </span>
          <select name="s_avatar" id="s_avatar" f="but_change_sel" data-tid="s_avatar_text">
              <option value="2"<?php if ($_smarty_tpl->tpl_vars['s_avatar']->value=='2'){?> selected<?php }?>>不限</option>
              <option value="1"<?php if ($_smarty_tpl->tpl_vars['s_avatar']->value=='1'){?> selected<?php }?>>有头像</option>
          </select>
      </div>
      <div class="selectarea">
          <i class="jiao"></i>
          <span id="s_height_text" f="but_cond_multi_sel" data-box="s_height_box">
              <?php if ($_smarty_tpl->tpl_vars['s_sheight']->value>0&&$_smarty_tpl->tpl_vars['s_eheight']->value>0){?>
              <?php echo $_smarty_tpl->tpl_vars['s_sheight']->value;?>
CM&nbsp;至&nbsp;<?php echo $_smarty_tpl->tpl_vars['s_eheight']->value;?>
CM
              <?php }else{ ?>
              身高
              <?php }?>
          </span>
          <div class="selectbd" style="width:160px;display:none;" id="s_height_box">
              <h3>请选择身高</h3>
              <?php $_smarty_tpl->tpl_vars["varlist"] = new Smarty_variable(vo_list("mod={volistheight}"), null, 0);?>
              <select name="s_sheight" id="s_sheight" f="but_change_sel" data-tid="s_sheight_text">
                  <option value="">不限</option>
                  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_sheight']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
CM</option>
                  <?php } ?>
              </select>
              &nbsp;至&nbsp;
              <select name="s_eheight" id="s_eheight" f="but_change_sel" data-tid="s_eheight_text">
                  <option value="">不限</option>
                  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_eheight']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
CM</option>
                  <?php } ?>
              </select>
              <p><label f="but_cond_multi_confirm" data-id1="s_sheight" data-id2="s_eheight" data-tid="s_height_text" data-tips="身高" data-box="s_height_box">确定</label></p>
          </div>
      </div>

        <div class="selectarea">
            <i class="jiao"></i>
          <span id="s_weight_text" f="but_cond_multi_sel" data-box="s_weight_box">
              <?php if ($_smarty_tpl->tpl_vars['s_sweight']->value>0&&$_smarty_tpl->tpl_vars['s_eweight']->value>0){?>
              <?php echo $_smarty_tpl->tpl_vars['s_sweight']->value;?>
KG&nbsp;至&nbsp;<?php echo $_smarty_tpl->tpl_vars['s_eweight']->value;?>
KG
              <?php }else{ ?>
              体重
              <?php }?>
          </span>
            <div class="selectbd" style="width:160px;display:none;" id="s_weight_box">
                <h3>请选择体重</h3>
                <?php $_smarty_tpl->tpl_vars["varlist"] = new Smarty_variable(vo_list("mod={volistweight}"), null, 0);?>
                <select name="s_sweight" id="s_sweight" f="but_change_sel" data-tid="s_sweight_text">
                    <option value="">不限</option>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_sweight']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
KG</option>
                    <?php } ?>
                </select>
                &nbsp;至&nbsp;
                <select name="s_eweight" id="s_eweight" f="but_change_sel" data-tid="s_eweight_text">
                    <option value="">不限</option>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['varlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_eweight']->value==$_smarty_tpl->tpl_vars['val']->value['value']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
KG</option>
                    <?php } ?>
                </select>
                <p><label f="but_cond_multi_confirm" data-id1="s_sweight" data-id2="s_eweight" data-tid="s_weight_text" data-tips="体重" data-box="s_weight_box">确定</label></p>
            </div>
        </div>
      <div class="btn_1" f="but_search_cond_user"><i></i>搜索</div>
      <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user&a=advsearch';" />
    </div>
	</form>
    <div class="clear"></div>
  </div>
</div>

<div class="n_search_top" style="display:none;">
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user&a=list" id="search_normal">
  <div class="search_in">
    <i class="icon"></i>
    找:
    <select name='s_sex' id='s_sex'>
      <option value='0'>=不限=</option>
      <option value='2'<?php if ($_smarty_tpl->tpl_vars['s_sex']->value==2){?> selected<?php }?>>女会员</option>
      <option value='1'<?php if ($_smarty_tpl->tpl_vars['s_sex']->value==1){?> selected<?php }?>>男会员</option>
    </select>
    &nbsp;年龄:
    <?php echo cmd_hook(array('mod'=>'age','name'=>'s_sage','text'=>'不限'),$_smarty_tpl);?>

    <span>~</span>
    <?php echo cmd_hook(array('mod'=>'age','name'=>'s_eage','text'=>'不限'),$_smarty_tpl);?>

    &nbsp;地区:
    <?php echo cmd_area(array('type'=>'dist1','name'=>'s_dist1','value'=>$_smarty_tpl->tpl_vars['s_dist1']->value,'ajax'=>'1','cname'=>'s_dist2','cajax'=>'1','dname'=>'s_dist3','text'=>'=请选择='),$_smarty_tpl);?>
&nbsp;
    <span id="json_s_dist2">
      <?php if ($_smarty_tpl->tpl_vars['s_dist1']->value>0){?>
      <?php echo cmd_area(array('type'=>'dist2','pvalue'=>$_smarty_tpl->tpl_vars['s_dist1']->value,'cname'=>'s_dist2','cvalue'=>$_smarty_tpl->tpl_vars['s_dist2']->value,'cajax'=>'1','dname'=>'s_dist3','dvalue'=>$_smarty_tpl->tpl_vars['s_dist3']->value,'text'=>'=不限='),$_smarty_tpl);?>

      <?php }else{ ?>
      <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
      <?php }?>
    </span>&nbsp;
    <span id="json_s_dist3">
      <?php if ($_smarty_tpl->tpl_vars['s_dist2']->value>0){?>
      <?php echo cmd_area(array('type'=>'dist3','cvalue'=>$_smarty_tpl->tpl_vars['s_dist2']->value,'dname'=>'s_dist3','dvalue'=>$_smarty_tpl->tpl_vars['s_dist3']->value,'text'=>'=不限='),$_smarty_tpl);?>

      <?php }else{ ?>
      <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
      <?php }?>
    </span>&nbsp;
    婚史:<?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','type'=>'select','name'=>'s_marry','text'=>'=不限=','value'=>$_smarty_tpl->tpl_vars['s_marry']->value),$_smarty_tpl);?>
&nbsp;
    <input type="checkbox" value="1" name="s_avatar" id="s_avatar"<?php if ($_smarty_tpl->tpl_vars['s_avatar']->value==1){?> checked<?php }?> />
    <label for="s_p_img">有头像</label>
    &nbsp;&nbsp;
    <input type="submit" value="搜索" name="btn_search" id="btn_search" class="n_search_btn" />&nbsp;
    <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user&a=advsearch';" />
		  &nbsp;&nbsp;
  </div>
  </form>
</div><?php }} ?>