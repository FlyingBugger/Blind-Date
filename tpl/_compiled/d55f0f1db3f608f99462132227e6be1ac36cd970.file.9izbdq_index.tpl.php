<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:02:33
         compiled from "D:\weixin\desktop\jy\tpl\templets\default\9izbdq_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49065aaf1a395ffe62-11740850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55f0f1db3f608f99462132227e6be1ac36cd970' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\templets\\default\\9izbdq_index.tpl',
      1 => 1514954682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49065aaf1a395ffe62-11740850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'zone' => 0,
    'volist' => 0,
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
    'login' => 0,
    'userlist' => 0,
    'uservip' => 0,
    'gender2' => 0,
    'gender1' => 0,
    'skinpath' => 0,
    'party' => 0,
    'time' => 0,
    'diarylist' => 0,
    'weibolist' => 0,
    'case' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1a39b9b696_14576867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1a39b9b696_14576867')) {function content_5aaf1a39b9b696_14576867($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\weixin\\desktop\\jy\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<style type="text/css">
  body{background:#fff;}
</style>
<?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('index', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_banner">
  <div class="bd">
    <?php $_smarty_tpl->tpl_vars['zone'] = new Smarty_variable(get_zone('index_slide_banner'), null, 0);?> 
    <?php if (!empty($_smarty_tpl->tpl_vars['zone']->value['ads'])){?> 
    <ul>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zone']->value['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
      <li style="background:url('<?php echo $_smarty_tpl->tpl_vars['volist']->value['uploadfiles'];?>
') no-repeat center top"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"></a></li>
      <?php } ?>
    </ul>
    <?php }?>
  </div>
  <div class="hd">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zone']->value['ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?><li><span></span></li><?php } ?>
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
          <div class="selectbd" style="width:180px;display:none;" id="s_height_box">
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
            <div class="selectbd" style="width:180px;display:none;" id="s_weight_box">
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
      <div class="btn_1" f="but_search_cond_user"><i></i>搜本店</div>
      <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=user&a=advsearch';" />
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
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
	      <?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']=='2'){?>
	      <?php $_smarty_tpl->tpl_vars["userlist"] = new Smarty_variable(vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}"), null, 0);?>
	      <?php }else{ ?>
	      <?php $_smarty_tpl->tpl_vars["userlist"] = new Smarty_variable(vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}"), null, 0);?>
	      <?php }?>
        <?php }else{ ?>
          <?php $_smarty_tpl->tpl_vars["userlist"] = new Smarty_variable(vo_list("mod={listuser} where={v.avatar='1' AND v.monolog='1'} num={6}"), null, 0);?>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	    <dl class="cin">
          <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></a></dt>
          <dd>
            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h3>
            <p class="p_1">
            <span><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
 </span>
            <label><?php if ($_smarty_tpl->tpl_vars['volist']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<?php }?></label>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['salary']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>
/月<?php }?></p>
            <p class="btn">
              <span onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <?php } ?>
        <div class="clear"></div>
      </div>
      <div>
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
	      <?php if ($_smarty_tpl->tpl_vars['login']->value['info']['gender']=='2'){?>
	      <?php $_smarty_tpl->tpl_vars["uservip"] = new Smarty_variable(vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}"), null, 0);?>
	      <?php }else{ ?>
	      <?php $_smarty_tpl->tpl_vars["uservip"] = new Smarty_variable(vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}"), null, 0);?>
	      <?php }?>
        <?php }else{ ?>
          <?php $_smarty_tpl->tpl_vars["uservip"] = new Smarty_variable(vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1'} num={6}"), null, 0);?>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['uservip']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	    <dl class="cin">
          <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></a></dt>
          <dd>
            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h3>
            <p class="p_1">
            <span><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
 </span>
            <label><?php if ($_smarty_tpl->tpl_vars['volist']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<?php }?></label>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['salary']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>
/月<?php }?></p>
            <p class="btn">
              <span onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <?php } ?>
        <div class="clear"></div>
      </div>
      <div>
        <?php $_smarty_tpl->tpl_vars["gender2"] = new Smarty_variable(vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='2'} num={6}"), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gender2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	    <dl class="cin">
          <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></a></dt>
          <dd>
            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h3>
            <p class="p_1">
            <span><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
 </span>
            <label><?php if ($_smarty_tpl->tpl_vars['volist']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<?php }?></label>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['salary']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>
/月<?php }?></p>
            <p class="btn">
              <span onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <?php } ?>
        <div class="clear"></div>
      </div>
      <div>
         <?php $_smarty_tpl->tpl_vars["gender1"] = new Smarty_variable(vo_list("mod={listuser}  type={vip} where={v.avatar='1' AND v.monolog='1' AND v.gender='1'} num={6}"), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gender1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	    <dl class="cin">
          <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></a></dt>
          <dd>
            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h3>
            <p class="p_1">
            <span><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
 </span>
            <label><?php if ($_smarty_tpl->tpl_vars['volist']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<?php }?></label>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['volist']->value['salary']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>
/月<?php }?></p>
            <p class="btn">
              <span onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');"><i></i>打招呼</span>
            </p>
          </dd>
          <div class="clear"></div>
        </dl>
        <?php } ?>
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
     <img src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/p_4.png"/>
     <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=party" class="so">更多</a>
  </div>
  <div class="bd drop">
    <?php $_smarty_tpl->tpl_vars['party'] = new Smarty_variable(vo_list("mod={party} where={v.elite=1} num={3}"), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['party']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?> 
    <dl class="cin dl_<?php echo $_smarty_tpl->tpl_vars['volist']->value['i'];?>
 <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']==1){?> on <?php }?>">
      <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
"  /></a></dt>
      <dd class="sub"  <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']==1){?>  <?php }else{ ?> style="display:none;<?php }?>">
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></a></h3>
        <p>截止报名：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['endbmtime'],"%Y/%m/%d %H:%M");?>
</p>
        <p><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['content'],30);?>
…</p>
        <?php if ($_smarty_tpl->tpl_vars['volist']->value['endbmtime']>$_smarty_tpl->tpl_vars['time']->value){?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="more">我要<br>报名</a>
        <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="more">活动<br>结束</a>
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="go"></a>
      </dd>
      <div class="clear"></div>
    </dl>
    <?php } ?>
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
      <img src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/p_5.png" alt="" />日记心情
      <span></span>
    </div>
    <div class="bd">
      <div class="left">
        <?php $_smarty_tpl->tpl_vars['diarylist'] = new Smarty_variable(vo_list("mod={diary}  where={v.thumbfiles !=''} num={3}"), null, 0);?>
	      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diarylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	      <dl <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']==2){?>class="dl_2" <?php }?>>
            <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank"><?php echo cmd_avatar(array('width'=>'220','height'=>'270','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a></dt>
            <dd>
              <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></h3>
              <p class="text"><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['content'],50);?>
</p>
              <p class="time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['timeline'],'%Y-%m-%d');?>
<span><i></i>浏览：<?php echo $_smarty_tpl->tpl_vars['volist']->value['hits'];?>
</span></p>
            </dd>
            <div class="clear"></div>
          </dl>
          <?php } ?>
      </div>
      <div class="right">
        <div class="hder">微心情  
          <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
		  <a href="###" onclick="artbox_loginbox();">更多++</a>
		  <?php }else{ ?>
		  <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=weibo">更多++</a>
		  <?php }?>
        </div>
        <div class="bder">
          <?php $_smarty_tpl->tpl_vars['weibolist'] = new Smarty_variable(vo_list("mod={weibo}  where={u.avatarflag='1'}  num={6}"), null, 0);?>
		  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weibolist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
		  <dl>
		    <dt>
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['addtime'],"%m-%d %H:%M:%S");?>

              <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" /></a>
            </dt>
		    <dd>
              <h3><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</h3>
              <p><?php echo $_smarty_tpl->tpl_vars['volist']->value['content'];?>
</p>
		    </dd>
		    <div class="clear"></div>
		  </dl>
		<?php } ?>
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
      <img src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/p_6.png" alt="" />
      <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
index.php?c=case" class="so">更多</a>
    </div>
    <div class="bd">
      <?php $_smarty_tpl->tpl_vars['case'] = new Smarty_variable(vo_list("mod={case}  num={6}"), null, 0);?>
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
      <dl class="dl_<?php echo $_smarty_tpl->tpl_vars['volist']->value['i'];?>
 nLi <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']==1){?> on <?php }?>">
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
" /></a></dt>
        <dd class="sub" <?php if ($_smarty_tpl->tpl_vars['volist']->value['i']>1){?> style="display:none;" <?php }?>>
          <p class="p_1"></p>
          <div>
            <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></h3>
            <p>目前状态：<?php echo cmd_hook(array('mod'=>"var",'item'=>"casecat",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['volist']->value['catid']),$_smarty_tpl);?>
</p>
            <p class="p_2"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
">查看详情</a></p>
          </div>
        </dd>
      </dl>
      <?php } ?>
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
    <?php $_smarty_tpl->tpl_vars['friendlink'] = new Smarty_variable(vo_list("mod={friendlink}"), null, 0);?>
	<?php if (!empty($_smarty_tpl->tpl_vars['friendlink']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendlink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['name'];?>
</a>&nbsp;
	<?php } ?>
	<?php }else{ ?>
	<?php echo cmd_label(array('name'=>'friendlink'),$_smarty_tpl);?>

	<?php }?>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>