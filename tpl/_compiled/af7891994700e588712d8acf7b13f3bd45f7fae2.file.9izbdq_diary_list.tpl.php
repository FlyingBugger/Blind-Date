<?php /* Smarty version Smarty-3.1.14, created on 2017-12-13 06:52:42
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_diary_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245675a305dbac67488-78310742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7891994700e588712d8acf7b13f3bd45f7fae2' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_diary_list.tpl',
      1 => 1511851784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245675a305dbac67488-78310742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'diary' => 0,
    'volist' => 0,
    'showpage' => 0,
    'diarycatlist' => 0,
    'appfile' => 0,
    'cid' => 0,
    'val' => 0,
    'hotdiary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a305dbb165a28_92562735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a305dbb165a28_92562735')) {function content_5a305dbb165a28_92562735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filterhtml')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.filterhtml.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\freehost\\ftp122778453\\web\\source\\core\\smarty\\plugins\\modifier.date_format.php';
?><?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('diary', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="oe_diary_list">
  <div class="left">
    <?php if (empty($_smarty_tpl->tpl_vars['diary']->value)){?>
    <div class="no_data">
      <p class="p_1"><span></span></p>
      <p class="p_2">没有符合条件的信息</p>
    </div>
    <?php }else{ ?>
    <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diary']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
    <dl>
      <dt>
        <span><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['avatar'];?>
" alt="" /></span>
      </dt>
      <dd>
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
" class="tit" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
">  <?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
 </a> <span>[<?php echo $_smarty_tpl->tpl_vars['volist']->value['catname'];?>
]</span></h3>
        <p class="text">
          <?php echo smarty_modifier_filterhtml($_smarty_tpl->tpl_vars['volist']->value['content'],80);?>

        </p>
        <p class="time">
          <span>【<a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['homeurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['volist']->value['username'];?>
</a>】 <i></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['volist']->value['timeline'],"%Y-%m-%d");?>
</span>
        </p>
      </dd>
      <div class="clear"></div>
    </dl>
    <?php } ?>          
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
      <div class="pagecode"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
	<?php }?>
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
</html><?php }} ?>