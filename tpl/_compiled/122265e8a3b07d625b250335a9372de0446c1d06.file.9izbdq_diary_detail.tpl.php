<?php /* Smarty version Smarty-3.1.14, created on 2017-12-16 12:38:28
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_diary_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202575a34a344338dc5-14328977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122265e8a3b07d625b250335a9372de0446c1d06' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_diary_detail.tpl',
      1 => 1511851878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202575a34a344338dc5-14328977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'diary' => 0,
    'comment' => 0,
    'volist' => 0,
    'showpage' => 0,
    'id' => 0,
    'config' => 0,
    'urlpath' => 0,
    'login' => 0,
    'appfile' => 0,
    'diarycatlist' => 0,
    'cid' => 0,
    'val' => 0,
    'hotdiary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a34a344804718_87304446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a34a344804718_87304446')) {function content_5a34a344804718_87304446($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_nl2br')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.nl2br.php';
?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('diary', null, 0);?> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="oe_diary_detail">
      <div class="left">
          <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['diary']->value['title'];?>
</h1>
          <div class="jian">
            天气：<?php echo cmd_hook(array('mod'=>'var','item'=>'weather','type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['weather']),$_smarty_tpl);?>
&nbsp;&nbsp;
            心情：<?php echo cmd_hook(array('mod'=>'var','item'=>'feel','type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['feel']),$_smarty_tpl);?>
&nbsp;&nbsp;
            发表时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['diary']->value['timeline'],"%m-%d %H:%M");?>
 
            人气：<font id='json_hits'></font>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#content">我要评论</a>
          </div>
            <div class="topj"> 
              <a href="<?php echo $_smarty_tpl->tpl_vars['diary']->value['homeurl'];?>
" class="topimg"><?php echo cmd_avatar(array('width'=>'70','height'=>'86','value'=>$_smarty_tpl->tpl_vars['diary']->value['avatarurl']),$_smarty_tpl);?>
</a>
              <h3>发表人：<?php echo $_smarty_tpl->tpl_vars['diary']->value['levelimg'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['diary']->value['homeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['diary']->value['username'];?>
</a></h3>
              <span class="username"><?php echo $_smarty_tpl->tpl_vars['diary']->value['age'];?>
岁 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['cityid']),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['diary']->value['height'];?>
CM <?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['education']),$_smarty_tpl);?>
 <?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['diary']->value['salary']),$_smarty_tpl);?>
</span>
              <p>
                <a href="###" class="sg_1" onClick="artbox_writemsg('<?php echo $_smarty_tpl->tpl_vars['diary']->value['userid'];?>
');">发信件</a> 
                <a href="###" class="sg_2" onClick="artbox_hi('<?php echo $_smarty_tpl->tpl_vars['diary']->value['userid'];?>
');">打招呼</a> 
                <a  href="###" class="sg_3" onClick="artbox_sendgift('<?php echo $_smarty_tpl->tpl_vars['diary']->value['userid'];?>
');">送礼物</a> 
              </p>
              <div class="clear"></div>
            </div>
          <div class="oe_diary_content">
            <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['diary']->value['content']);?>

          </div>
          <div class="comments">
            <h2>相关评论</h2>
              <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
              <dl> 
                <dt>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" class="head" target='_blank'><?php echo cmd_avatar(array('value'=>$_smarty_tpl->tpl_vars['volist']->value['avatarurl']),$_smarty_tpl);?>
</a>
                </dt>
                <dd>
                  <h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><b><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</b></a> 说：
                    <p>
                      <span>评论于：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['timeline'],"%m-%d %H:%M");?>
</span>
                      <label><?php echo $_smarty_tpl->tpl_vars['volist']->value['ordersi'];?>
楼</label>
                    </p>
                  </h3>
                  <p class="p_1">
                    <?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['volist']->value['content']);?>

                  </p>
                </dd>
                <div style="clear:both"></div>
              </dl>
              <?php } ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
            <div class="pagecode"> 
              <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
 
            </div>
            <div style="clear:both;"></div>
            <?php }?>
            <div class="comments_input">
              <h2 style="margin-top:5px;">发表评论：</h2>
              <input type='hidden' name='id' id='id' value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
              <div class="textarea">
                <textarea  id="content" name="content"></textarea>
              </div>
              
              <div class="diary_login">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['commentcode']=='1'){?>
              <div class="code">
                <input type="text" id="checkcode" name="checkcode" class="checkcode"  maxlength='6' />
                <img id="checkCodeImg" src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
source/include/imagecode.php?act=verifycode" align="middle" /> <a href="javascript:refresh_code('checkCodeImg');"> 换一张</a>
              </div>
              <?php }?>
              <div class="log">
                <?php if ($_smarty_tpl->tpl_vars['login']->value['status']==1){?> 
                欢迎您：<?php echo $_smarty_tpl->tpl_vars['login']->value['username'];?>
&nbsp;&nbsp;&nbsp; <a class="btn" name='btn_roll' id='btn_roll'><span>提交评论</span></a> 
                <?php }else{ ?> 
                只有登录会员才可以进行评论! <a href="###" class="a_1" onClick="artbox_loginbox();">登录</a> 或者 <a class="a_2" href="<?php echo $_smarty_tpl->tpl_vars['appfile']->value;?>
?c=passport&a=reg">免费注册</a> 
                <?php }?>
              </div>
              </div>
            </div>
          </div>
      </div>
      <div class="right">
    <?php $_smarty_tpl->tpl_vars['diarycatlist'] = new Smarty_variable(vo_list("mod={diarycat}"), null, 0);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['diarycatlist']->value)){?>
    <div class='listtype'>
      <a href="<?php echo $_smarty_tpl->tpl_vars['appfile']->value;?>
?c=diary&a=list"<?php if ($_smarty_tpl->tpl_vars['cid']->value==0){?> class='current'<?php }?>>全部日记</a> 
      <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diarycatlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['val']->value['catid']){?> class='current'<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['catname'];?>
</a>
      <?php } ?>
    </div>
    <?php }?>
    <div class="hot_diary">
      <h3><i>热门日记</i></h3>
      <ul>
        <?php $_smarty_tpl->tpl_vars['hotdiary'] = new Smarty_variable(vo_list("mod={diary} orderby={v.hits DESC} num={10}"), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotdiary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
        <li><i></i><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a> </li>
        <?php } ?>
      </ul>
    </div>
  </div>
      <div class="clear"></div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
		<?php if ($_smarty_tpl->tpl_vars['config']->value['commentcode']=='1'){?>
		checkcode = $('#checkcode').val();
		if (checkcode == '') {
			alert('请填写验证码！');
			$('#checkcode').focus();
			return false;
		}
		<?php }?>

		roll_diarycomment(id, content, checkcode);
	});

	update_hits('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', 'diary', 'json_hits');
});
</script><?php }} ?>