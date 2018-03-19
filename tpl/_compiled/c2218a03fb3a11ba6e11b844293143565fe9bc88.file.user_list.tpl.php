<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:09:39
         compiled from "D:\weixin\desktop\jy\tpl\wap\user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126405aaf1be32bc642-22467297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2218a03fb3a11ba6e11b844293143565fe9bc88' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\user_list.tpl',
      1 => 1514954696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126405aaf1be32bc642-22467297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
    'user' => 0,
    'volist' => 0,
    'time' => 0,
    'pagecount' => 0,
    'page' => 0,
    'prepage' => 0,
    'urlitem' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1be37a5700_28067229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1be37a5700_28067229')) {function content_5aaf1be37a5700_28067229($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("user", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="hr-shadow"></div>
<div class="tab-layout">
  <ul>
    <li style="width:33.3%" class="tab-selected">搜索结果</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&a=idsearch');" style="width:33.3%">ID搜索</li>
    <li onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&a=advsearch');" style="width:33.3%">条件搜索</li>
  </ul>
  <div class="clear"></div>
</div>

<div class="layout-body">
  <div class="user-list">
    <?php if (empty($_smarty_tpl->tpl_vars['user']->value)){?>
    <h6>没有符合条件的信息</h6>
	<?php }else{ ?>
    <ul id="json_data">
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <li onclick="userDetail('<?php echo $_smarty_tpl->tpl_vars['volist']->value['userid'];?>
');">
	    <img class="userlist-img" src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatarurl'];?>
" />
		<div class="user-inner">
		  <h5>
		  <?php if ($_smarty_tpl->tpl_vars['volist']->value['groupid']>1&&$_smarty_tpl->tpl_vars['volist']->value['vipenddate']>$_smarty_tpl->tpl_vars['time']->value){?>
		  <?php echo $_smarty_tpl->tpl_vars['volist']->value['levelimg'];?>

		  <?php }?>
		  <?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</h5>
		  <p>
		     <span><?php if ($_smarty_tpl->tpl_vars['volist']->value['gender']=='1'){?>男<?php }else{ ?>女<?php }?></span> <?php echo $_smarty_tpl->tpl_vars['volist']->value['age'];?>
岁 | <?php echo cmd_hook(array('mod'=>'var','item'=>'marrystatus','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['marrystatus']),$_smarty_tpl);?>
 | <?php echo $_smarty_tpl->tpl_vars['volist']->value['height'];?>
CM<br />
			 <?php echo $_smarty_tpl->tpl_vars['volist']->value['astro'];?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['provinceid']),$_smarty_tpl);?>
 <?php echo cmd_area(array('type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['cityid']),$_smarty_tpl);?>
 
		  </p>
		  <p>
		    <?php echo cmd_hook(array('mod'=>'var','item'=>'education','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['education']),$_smarty_tpl);?>
 <?php echo cmd_hook(array('mod'=>'var','item'=>'salary','type'=>'text','value'=>$_smarty_tpl->tpl_vars['volist']->value['salary']),$_smarty_tpl);?>
 
		  </p>
		</div>
        <span class="jian">
          <i class="iconfont">&#xe642;</i>
        </span>
	  </li>
	  <?php } ?>
	</ul>
    <div class="clear"></div>
	<?php }?>
  </div>
  <!--//list End-->

  <?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
  <div class="page-layout">
    页次：<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['prepage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
');">上一页</span>  
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['nextpage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=user&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
');">下一页</span>  
	<?php }?>
  </div>
  <!--//ShowPage End-->
  <?php }?>

</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>