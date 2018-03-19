<?php /* Smarty version Smarty-3.1.14, created on 2018-03-19 10:09:26
         compiled from "D:\weixin\desktop\jy\tpl\wap\cp_photo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86105aaf1bd6de8827-42479430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4960b36ac247326c8911088a92da68d2f73be6' => 
    array (
      0 => 'D:\\weixin\\desktop\\jy\\tpl\\wap\\cp_photo.tpl',
      1 => 1514954694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86105aaf1bd6de8827-42479430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waptpl' => 0,
    'wapfile' => 0,
    'config' => 0,
    'album' => 0,
    'volist' => 0,
    'pagecount' => 0,
    'page' => 0,
    'prepage' => 0,
    'urlitem' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aaf1bd6ed8989_38964524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aaf1bd6ed8989_38964524')) {function content_5aaf1bd6ed8989_38964524($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["menu_id"] = new Smarty_variable("cp", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['waptpl']->value)."block_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="cp-bartitle">我的相册 <b id="up_tips">上传照片</b></div>
<div class="cp-layout-body">

  <form action="<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_photo&a=saveupload&uploadpart=fileurl" method="post" enctype="multipart/form-data" name="upload_form" id="upload_form" target="uploadiframe" style="display:none;">
  <input type="hidden" name="thumbfiles" id="thumbfiles" />
  <div class="cp-album-upload">
    <ul>
	  <li>照片标题：<input type="text" name="title" id="title" maxlength="255" placeholder="输入照片标题" /></li>
	  <li>本地照片：<input type="file" name="fileurl" id="fileurl" /></li>
	</ul>
	<div class="clear"></div>
    
	<div class="spanbtn0" style="margin-top:10px;margin-bottom:10px;" id="btn_upload">上传</div>

  </div>
  <iframe name="uploadiframe" id="uploadiframe" style="display:none;"></iframe>
  </form>
  <script type="text/javascript">
  $(function(){
	$("#up_tips").click(function(){
		if (document.getElementById("upload_form").style.display == "none") { //展开
			$("#upload_form").show();
			$("#up_tips").html("取消上传");
		}
		else { //隐藏
			$("#upload_form").hide();
			$("#up_tips").html("上传照片");
		}
	});

	//提交上传
	$("#btn_upload").click(function(){
		var file = $("#fileurl");
		var file_val = $("#fileurl").val();
		var img_size = 0;
		var max_size = <?php echo $_smarty_tpl->tpl_vars['config']->value['uploadmaxsize'];?>
*1024*1024;
		if (file_val == "") {
			ToastShow("请选择要上传的照片");
			return false;
		}
		if(!/.(gif|jpg|jpeg|png)$/.test(file_val)){ 
			ToastShow("照片格式不正确");
			return false;
		}
		img_size = file[0].files[0].size;
		if (img_size > max_size) {
			ToastShow("照片大小不能超过<?php echo $_smarty_tpl->tpl_vars['config']->value['uploadmaxsize'];?>
M");
			return false;
		}
		$("#btn_upload").html("上传中，请稍等...");
		$("#upload_form").submit();
	});
  });
  //iframe callback parent.uploadCallBack();
  function uploadCallBack(res, msg) {
	if (res == "1") {
		ToastShow("上传成功");
		setTimeout(function(){
			$("#upload_form").remove();
			window.location.reload();
		}, 1000);
		
	}
	else {
		$("#btn_upload").html("上传");
		if (msg.length >0) {
			ToastShow(msg);
		}
		else {
			ToastShow("上传失败，请检查网络情况。");
		}
	}
  }
  </script>


  <div class="cp-album-list">
    <?php if (empty($_smarty_tpl->tpl_vars['album']->value)){?>
    <h6>没有符合条件的信息</h6>
	<?php }else{ ?>
	<ul id="json_data">
	  <?php  $_smarty_tpl->tpl_vars['volist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['volist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['volist']->key => $_smarty_tpl->tpl_vars['volist']->value){
$_smarty_tpl->tpl_vars['volist']->_loop = true;
?>
	  <li id="id_<?php echo $_smarty_tpl->tpl_vars['volist']->value['photoid'];?>
">
	    <div class="album-inner">
		  <h2><img src="<?php echo $_smarty_tpl->tpl_vars['volist']->value['thumbfiles'];?>
" /></h2>
		  <p>
			<?php if ($_smarty_tpl->tpl_vars['volist']->value['flag']=='2'){?>
			未通过
			<?php }elseif($_smarty_tpl->tpl_vars['volist']->value['flag']=='1'){?>
			已通过
			<?php }else{ ?>
			待审核
			<?php }?>
		  </p>
		  <p><span onclick="delAlbum('<?php echo $_smarty_tpl->tpl_vars['volist']->value['photoid'];?>
');">删除</span></p>
		</div>
	  </li>
	  <?php } ?>
	</ul>
	<div class="clear"></div>
	<?php }?>
  </div>
  <!--//List End-->

  <?php if ($_smarty_tpl->tpl_vars['pagecount']->value>1){?>
  <div class="page-layout">
    页次：<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['prepage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_photo&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['prepage']->value;?>
');">上一页</span>  
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['nextpage']->value>0){?>
	<span onclick="goUrl('<?php echo $_smarty_tpl->tpl_vars['wapfile']->value;?>
?c=cp_photo&<?php echo $_smarty_tpl->tpl_vars['urlitem']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
');">下一页</span>  
	<?php }?>
  </div>
  <!--//ShowPage End-->
  <?php }?>

</div>
</body>
</html>
<script type="text/javascript">
//删除
function delAlbum(id) {
	if (id > 0) {
		$.ajax({
			type: "POST",
			url: WAP_APPFILE+"?c=cp_photo",
			cache: false,
			data: {a:'del', id:id, r:get_rndnum(8)},
			dataType: "json",
			success: function(data) {
				var json = eval(data);
				var response = json.response;
				var result = json.result;
				if (response == '1') {
					ToastShow("删除成功");
					$("#id_"+id).remove();
				}
				else {
					if (result.length > 0) {
						ToastShow(result);
					}
					else {
						ToastShow("删除失败，请检查网络...");
					}
				}
			},
			error: function() {
				ToastShow("删除失败，请检查网络...");
			}
		});
	}
}
</script><?php }} ?>