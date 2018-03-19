<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 21:49:27
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_home_space.tpl" */ ?>
<?php /*%%SmartyHeaderCode:253185a2fde67bbaec0-15689177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '400e32ea9e096d9924eb8c610d4c9637a353d697' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_home_space.tpl',
      1 => 1511944232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253185a2fde67bbaec0-15689177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'home' => 0,
    'login' => 0,
    'urlpath' => 0,
    'config' => 0,
    'listenstatus' => 0,
    'skinpath' => 0,
    'cond' => 0,
    'volist' => 0,
    'i' => 0,
    'giftlist' => 0,
    'likeuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fde6923b327_30206747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fde6923b327_30206747')) {function content_5a2fde6923b327_30206747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_nl2br')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.nl2br.php';
if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
?><?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="oe_home">
  <div class="oe_hometop">
    <div class="headimg">
      <div class="bd">
        <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['home']->value['avatarurl'];?>
" />
      </div>
      <div class="hd">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."home_block_album.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
      <div class="clear"></div>
      </div>
    </div>
    <div class="home_info">
      <h3>
        <?php echo $_smarty_tpl->tpl_vars['home']->value['username'];?>

        
        <?php if ($_smarty_tpl->tpl_vars['home']->value['idnumberrz']=='1'){?>
          <span class="span_1"></span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['home']->value['emailrz']=='1'){?> 
          <span class="span_2"></span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['home']->value['videorz']=='1'){?> 
        <span class="span_3"></span>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['home']->value['levelimg'];?>

        <em><?php echo $_smarty_tpl->tpl_vars['home']->value['groupname'];?>
</em>
      </h3>
      <p class="p_1">
        ID:<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
&#12288;&#12288;&#12288;&#12288;&#12288;&#12288;
        <span>注册时间： </span>
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']==0){?> 
        <a href="javascript:;" onClick="artbox_loginbox();">登录可见</a> 
        <?php }else{ ?> 
        <?php if ($_smarty_tpl->tpl_vars['login']->value['userid']==$_smarty_tpl->tpl_vars['home']->value['userid']){?> 
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['regtime'],"%Y-%m-%d");?>
 
        <?php }else{ ?> 
        <?php if ($_smarty_tpl->tpl_vars['login']->value['group']['view']['viewlogintime']==1){?> 
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['regtime'],"%Y-%m-%d");?>
 
              <?php }else{ ?> 
              <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=vip">VIP可见</a> 
              <?php }?> 
              <?php }?> 
              <?php }?> 
              &#12288;&#12288;
              <span>登录时间：</span> 
              <?php if ($_smarty_tpl->tpl_vars['login']->value['status']==0){?> 
              <a href="javascript:;" onClick="artbox_loginbox();">登录可见</a> 
              <?php }else{ ?> 
              <?php if ($_smarty_tpl->tpl_vars['login']->value['userid']==$_smarty_tpl->tpl_vars['home']->value['userid']){?> 
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['logintime'],"%Y-%m-%d");?>
 
              <?php }else{ ?> 
              <?php if ($_smarty_tpl->tpl_vars['login']->value['group']['view']['viewlogintime']==1){?> 
              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['home']->value['logintime'],"%Y-%m-%d");?>
 
              <?php }else{ ?> 
              <a href="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=vip">VIP可见</a> 
              <?php }?> 
              <?php }?> 
              <?php }?>
      </p>
      <ul>
        <li><label>用户名：</label> <b><?php echo $_smarty_tpl->tpl_vars['home']->value['username'];?>
 </b> </li>
        <li><label>性别：</label><span class="certiconph"><?php if ($_smarty_tpl->tpl_vars['home']->value['gender']==1){?>男<?php }else{ ?>女<?php }?></span></li>
        <li><label>婚姻状态：</label><?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['marrystatus']),$_smarty_tpl);?>
<span class="certiconph"></span></li>
        <li><label>年龄：</label><?php echo $_smarty_tpl->tpl_vars['home']->value['age'];?>
 岁<span class="certiconph"></span></li>
        <li><label>学历：</label><?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['education']),$_smarty_tpl);?>
<span class="certiconph"></span></li>
        <li><label>身高：</label><?php echo $_smarty_tpl->tpl_vars['home']->value['height'];?>
CM</li>
        <li><label>月薪收入：</label><?php if ($_smarty_tpl->tpl_vars['home']->value['salary']==0){?><font class="empty">未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['salary']),$_smarty_tpl);?>
<?php }?></li>
        <li><label>所在地区：</label><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['cityid']),$_smarty_tpl);?>
</li>
        <div class="clear"></div>
      </ul>
      <div class="clear"></div>
      <div class="btn">
        <?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'){?>
        <span class="span_1" onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');"><i></i>打招呼</span>
        <span class="span_2" onClick="artbox_writemsg('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');"><i></i>写信件</span>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['showhomecontact']=='1'&&$_smarty_tpl->tpl_vars['home']->value['privacy']!='4'){?> 
        <span class="span_3" onClick="artbox_viewcontact('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');"><i></i>联系方式</span>
        <?php }else{ ?>
        <span class="span_3" onClick="artbox_writemsg('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');"><i></i>索要联系方式</span>
        <?php }?>
        
        <?php if (true===$_smarty_tpl->tpl_vars['listenstatus']->value){?>
        <input type="hidden" name="listentype" id="listentype" value="newcancel" />
        <span class="span_4"  id="btn_listen"><i></i>取消关注</span>
        <?php }else{ ?>
        <input type="hidden" name="listentype" id="listentype" value="newlisten" />
        <span class="span_4"  id="btn_listen"><i></i>加关注</span>
        <?php }?> 
        
      
        
        
        <?php }else{ ?>
        <span  class="span_1" onClick="artbox_loginbox();"><i></i>打招呼</span>
        <span  class="span_2" onClick="artbox_loginbox();"><i></i>写信件</span>
        <span  class="span_3" onClick="artbox_loginbox();"><i></i>联系方式</span>
        <span  class="span_4" onClick="artbox_loginbox();"><i></i>加关注</span>
        <?php }?>
      </div>
      <div class="intro">
        <span class="icon"></span>
        <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['home']->value['monolog']);?>

      </div>
      <div class="jubao"  onClick="artbox_complaint('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');">
        <i></i> 投诉/举报
      </div>
      
      <?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'){?>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
js/oecredit.js"></script>
      <dl class="oe_home_safety">
        <dt title="诚信查询" f="but_home_viewcredit" data-uid="<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
" class="cursor">
          <span> </span>
        </dt>
        <dd class="loading" style="display:none;" id="credit_loading">
          <img src="<?php echo $_smarty_tpl->tpl_vars['skinpath']->value;?>
images/loading.gif" />
        </dd>
        <label class="close cursor" f="but_close_viewcredit" style="display:none;"></label>
        <dd style="display:none;" id="credit_result"></dd>
      </dl>
      <?php }?>
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
            <li><span>性别：</span> <?php if ($_smarty_tpl->tpl_vars['cond']->value['gender']=='1'){?>男<?php }elseif($_smarty_tpl->tpl_vars['cond']->value['gender']=='2'){?>女<?php }else{ ?><font class='empty'>不限</font><?php }?></li>
            <li><span>照片要求：</span> <?php if ($_smarty_tpl->tpl_vars['cond']->value['avatar']=='1'){?>有照片<?php }else{ ?><font class='empty'>不限</font><?php }?></li>
            <li><span>年龄范围：</span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startage']=='0'){?><font class='empty'>不限</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cond']->value['startage'];?>
~<?php echo $_smarty_tpl->tpl_vars['cond']->value['endage'];?>
岁<?php }?></li>
            <li><span>身高范围：</span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startheight']=='0'){?><font class='empty'>不限</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cond']->value['startheight'];?>
~<?php echo $_smarty_tpl->tpl_vars['cond']->value['endheight'];?>
CM<?php }?></li>
            <li><span>交友类型：</span><?php if (empty($_smarty_tpl->tpl_vars['cond']->value['lovesort'])){?><font class='empty'>不限</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'lovesort','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['cond']->value['lovesort']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>婚史状况：</span><?php if (empty($_smarty_tpl->tpl_vars['cond']->value['marry'])){?><font class='empty'>不限</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'multi','item'=>'marrystatus','value'=>$_smarty_tpl->tpl_vars['cond']->value['marry']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>学历要求：</span><?php if ($_smarty_tpl->tpl_vars['cond']->value['startedu']==0){?><font class='empty'>不限</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'education','value'=>$_smarty_tpl->tpl_vars['cond']->value['startedu']),$_smarty_tpl);?>
~<?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'education','value'=>$_smarty_tpl->tpl_vars['cond']->value['endedu']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>诚信星级：</span><?php if ($_smarty_tpl->tpl_vars['cond']->value['star']==0){?><font class='empty'>不限</font><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['cond']->value['starup']==1){?>以上<?php }elseif($_smarty_tpl->tpl_vars['cond']->value['starup']==2){?>以下<?php }?><?php }?></li>
            <li>
              <span>所在地区：</span>
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(false, null, 0);?> 
              <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value['bulidarea']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?> 
              <?php if ($_smarty_tpl->tpl_vars['volist']->value['city']>0){?> 
              <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(true, null, 0);?> 
              <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['province']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['city']),$_smarty_tpl);?>
<br />
              <?php }?> 
              <?php } ?> 
              <?php if (false===$_smarty_tpl->tpl_vars['i']->value){?> 
              <font class='empty'>不限</font> 
              <?php }?>
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
            <li><span>年龄：</span><?php echo $_smarty_tpl->tpl_vars['home']->value['age'];?>
 岁</li>
            <li><span>生肖：</span><?php echo $_smarty_tpl->tpl_vars['home']->value['lunar'];?>
</li>
            <li><span>星座：</span><?php echo $_smarty_tpl->tpl_vars['home']->value['astro'];?>
</li>
            <li><span>交友类型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['lovesort']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['home']->value['sortname'];?>
<?php }?></li>
            <li><span>血型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['blood']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'blood','value'=>$_smarty_tpl->tpl_vars['home']->value['blood']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>民族：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['national']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'national','value'=>$_smarty_tpl->tpl_vars['home']->value['national']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>有无子女：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['childrenstatus']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'childrenstatus','value'=>$_smarty_tpl->tpl_vars['home']->value['childrenstatus']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>购车情况：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['caring']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','type'=>'text','item'=>'caring','value'=>$_smarty_tpl->tpl_vars['home']->value['caring']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>住房情况：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['housing']==0){?><font class="empty">未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'housing','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['housing']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>所在地区：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['provinceid']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['cityid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['distid']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>户籍地区：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['nationprovinceid']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hometown(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['nationprovinceid']),$_smarty_tpl);?>
 <?php echo cmd_hometown(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['nationcityid']),$_smarty_tpl);?>
<?php }?></li>
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
            <li><span>个性描述：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['personality']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'personality','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['personality']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>相貌自评：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['profile']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'profile','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['profile']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>体重：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['weight']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['home']->value['weight'];?>
 (KG)<?php }?></li>
            <li><span>体型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['bodystyle']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'bodystyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['bodystyle']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>魅力部位：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['charmparts']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'charmparts','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['charmparts']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>发型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['hairstyle']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'hairstyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['hairstyle']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>发色：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['haircolor']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'haircolor','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['haircolor']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>脸型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['facestyle']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'facestyle','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['facestyle']),$_smarty_tpl);?>
<?php }?></li>
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
            <li><span>公司类型：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['companytype']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'companytype','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['companytype']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>收入描述：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['salary']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['salary']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>工作状况：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['workstatus']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'workstatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['workstatus']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>公司名称：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['companyname']==''){?><font class='empty'>未透露</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['home']->value['companyname'];?>
<?php }?></li>
            <li><span>教育程度：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['education']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['education']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>所学专业：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['specialty']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'specialty','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['specialty']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>职业：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['jobs']=='0'){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'jobs','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['jobs']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>语言能力：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['language']==''){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'language','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['language']),$_smarty_tpl);?>
<?php }?></li>
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
            <li><span>家中排行：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['tophome']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'tophome','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['tophome']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>最大消费：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['consume']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'consume','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['consume']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>是否吸烟：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['smoking']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'smoking','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['smoking']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>是否喝酒：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['drinking']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'drinking','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['drinking']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>宗教信仰：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['faith']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'faith','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['faith']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>锻炼习惯：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['workout']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'workout','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['workout']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>作息习惯：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['rest']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'rest','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['rest']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>是否要孩子：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['havechildren']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'havechildren','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['havechildren']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>愿意与对方父母同住：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['talive']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['home']->value['talive_t'];?>
<?php }?></li>
            <li><span>喜欢制造浪漫：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['romantic']==0){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'romantic','type'=>'text','value'=>$_smarty_tpl->tpl_vars['home']->value['romantic']),$_smarty_tpl);?>
<?php }?></li>
            <li><span>擅长生活技能：</span><?php if ($_smarty_tpl->tpl_vars['home']->value['lifeskill']==''){?><font class='empty'>未透露</font><?php }else{ ?><?php echo cmd_hook(array('mod'=>'var','item'=>'lifeskill','type'=>'multi','value'=>$_smarty_tpl->tpl_vars['home']->value['lifeskill']),$_smarty_tpl);?>
<?php }?></li>
          </ul>
          <div class="clear"></div>
        </dd>
      </dl>
    </div>
    <div class="right">
      <div class="oe_gift">
        <?php $_smarty_tpl->tpl_vars['giftlist'] = new Smarty_variable(vo_list("mod={gift} where={v.touserid='".((string)$_smarty_tpl->tpl_vars['home']->value['userid'])."'} num={6}"), null, 0);?> 
        <div class="hd">
          <h4>收到礼物 <span>(<?php echo count($_smarty_tpl->tpl_vars['giftlist']->value);?>
)</span></h4>
          <?php if (count($_smarty_tpl->tpl_vars['giftlist']->value)>2){?>
          <a class="next"></a> <a class="prev"></a>
          <?php }?>
          </div>
        <div class="bd">
          <ul class="_gift_list">
            <?php if (empty($_smarty_tpl->tpl_vars['giftlist']->value)){?>
            <?php if (!isset($_smarty_tpl->tpl_vars['login']) || !is_array($_smarty_tpl->tpl_vars['login']->value)) $_smarty_tpl->createLocalArrayVariable('login');
if ($_smarty_tpl->tpl_vars['login']->value['userid'] = $_smarty_tpl->tpl_vars['home']->value['userid']){?> 
            <p style="padding-top:10px; padding-left:10px; color:#999;">TA还没收到礼物！成为第一个赠送TA礼物的人吧。</p>
            <?php }else{ ?>
            <p style="padding-top:10px; padding-left:10px; color:#999;">你还没收到礼物！</p>
            <?php }?>
            <?php }?> 
            <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['giftlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
            <li> <img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['imgurl'];?>
" />
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="btn">
          <span onclick="artbox_sendgift('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');">送礼物</span>
        </div>
      </div>
      
      <div class="oe_like">
      <h2>猜你喜欢</h2>
	    <?php $_smarty_tpl->tpl_vars['likeuser'] = new Smarty_variable(vo_list("mod={spuser} num={4}"), null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['likeuser']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <dl>
        <dt><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo cmd_avatar(array('width'=>'70','height'=>'86','value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a></dt>
        <dd>
          <h4><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a></h4>
          <p class="p_1"><?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 <?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
 cm</p>
          <p class="p_2"><span></span><?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['monolog'],18);?>
</p>
        </dd>
        <div class="clear"></div>
		</dl>
		<?php } ?>
        <div style="clear:both;"></div>
      </div>
      
      
      
      
    </div>
    <div class="clear"></div>
  </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<script type='text/javascript'>
$(function(){
	update_hits('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
', 'home', 'json_hits');
	<?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='1'&&$_smarty_tpl->tpl_vars['login']->value['userid']!=$_smarty_tpl->tpl_vars['home']->value['userid']){?>
	ajax_visithome('<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
');
	<?php }?>

	$("#btn_listen").bind("click", function(){ //加关注
		oeDoListen();
	});	

	$("#btn_addblack").bind("click", function(){ //拉黑
		oeAddBlack();
	});
});


function oeDoListen() {
	<?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
	artbox_loginbox();
	return false;
	<?php }?>
	$listentype = $("#listentype").val();
	$.ajax({
		type: "POST",
		url: "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=listen",
		cache: false,
		data: {a:$listentype, fuid:"<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
", halttype:"ajax", r:get_rndnum(8)},
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
	<?php if ($_smarty_tpl->tpl_vars['login']->value['status']=='0'){?>
	artbox_loginbox();
	return false;
	<?php }?>
	$.ajax({
		type: "POST",
		url: "<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
usercp.php?c=listen",
		cache: false,
		data: {a:"newblack", fuid:"<?php echo $_smarty_tpl->tpl_vars['home']->value['userid'];?>
", halttype:"ajax", r:get_rndnum(8)},
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
</html><?php }} ?>