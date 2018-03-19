<?php /* Smarty version Smarty-3.1.14, created on 2017-12-16 12:40:50
         compiled from "D:\freehost\ftp122778453\web\tpl\templets\default\9izbdq_case_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23155a34a3d1f25bf2-23388228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daef0fe3b617eca08f47cfbf1ab375dd07d21a68' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\templets\\default\\9izbdq_case_list.tpl',
      1 => 1511936908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23155a34a3d1f25bf2-23388228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplpath' => 0,
    'tplpre' => 0,
    'case' => 0,
    'volist' => 0,
    'showpage' => 0,
    'case_right' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a34a3d23b45c7_75602319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a34a3d23b45c7_75602319')) {function content_5a34a3d23b45c7_75602319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_headinc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<?php $_smarty_tpl->tpl_vars['menuid'] = new Smarty_variable('case', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
  body{background:#EDEFF5;}
</style>
<div class="oe_case_list">
  <div class="left">
  <?php if (empty($_smarty_tpl->tpl_vars['case']->value)){?>
		<div class="no_data">
          <p class="p_1"><span></span></p>
          <p class="p_2">没有符合条件的信息！</p>
        </div>
		<?php }else{ ?>
        <div class="oe_datalist">
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
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></h3>
                <p>目前状态：<?php echo cmd_hook(array('mod'=>"var",'item'=>"casecat",'type'=>"text",'value'=>$_smarty_tpl->tpl_vars['volist']->value['catid']),$_smarty_tpl);?>
</p>
                <p class="p_2"><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
">查看详情</a></p>
              </div>
            </dd>
          </dl>
          <?php } ?>
          <?php }?>
          <div class="clear"></div>
          <?php if (!empty($_smarty_tpl->tpl_vars['showpage']->value)){?>
            <div class="pagecode">
		      <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

            </div>
            <?php }?>
        </div>
        
      </div>
      <div class="right">
        <div class="oe_rightcase">
          <h3><span>幸福瞬间</span></h3>
          <div class="oe_rightcasecon">
          <?php $_smarty_tpl->tpl_vars['case_right'] = new Smarty_variable(vo_list("mod={case} num={10}"), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['case_right']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
          <ul>
            <li>
              <p class="img">
                <a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbimg'];?>
" /></a>
              </p>
              <h4><a href="<?php echo $_smarty_tpl->tpl_vars['volist']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['volist']->value['title'];?>
</a></h4>
            </li>
          </ul>
          <?php } ?>
          </div>
        </div>
      </div>
        <div class="clear"></div>
</div>
     
<script type="text/javascript">
  jQuery(".oe_case_list").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
</script>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tplpath']->value).((string)$_smarty_tpl->tpl_vars['tplpre']->value)."block_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>