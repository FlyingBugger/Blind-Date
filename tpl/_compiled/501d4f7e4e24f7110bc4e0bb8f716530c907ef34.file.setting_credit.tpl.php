<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 13:19:13
         compiled from "D:\freehost\ftp122778453\web\tpl\admincp\setting_credit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158125a2f66d1ce70b0-67977861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501d4f7e4e24f7110bc4e0bb8f716530c907ef34' => 
    array (
      0 => 'D:\\freehost\\ftp122778453\\web\\tpl\\admincp\\setting_credit.tpl',
      1 => 1512630860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158125a2f66d1ce70b0-67977861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_charset' => 0,
    'cptplpath' => 0,
    'a' => 0,
    'cpfile' => 0,
    'agreement' => 0,
    'domain' => 0,
    'config' => 0,
    'urlpath' => 0,
    'app_msg' => 0,
    'app_status' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2f66d24154b1_24838405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f66d24154b1_24838405')) {function content_5a2f66d24154b1_24838405($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['page_charset']->value;?>
" />
<title>管理员</title>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['cptplpath']->value)."headerjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_head'), null, 0);?>
</head>
<body>
<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_main_top'), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=="credit"){?>
<div class="main-wrap">
  <div class="path">
    <p>诚信查询应用<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=credit">参数设置</a></p>
  </div>
  <div class="main-cont">

    <div class="oe_apply">
      <div class="oe_apply_regtitle">
        <ul>
          <li class="li_1" id="step_1">1、诚信接口</li>
          <li class="li_2" id="step_2">2、阅读协议</li>
          <li class="li_3" id="step_3">3、申请资料</li>
          <li class="li_4 current" id="step_4">4、审核结果</li>
        </ul>
        <div class="clear"></div>
      </div>

      <div class="bd">

        <div class="now" style="display:none;" id="step_1_box">
          <div class="tips" style="margin-top:40px; margin-bottom:30px;">
            您还没申请OElove诚信开放开台接口<br>
            <b>申请诚信查询开放平台应用</b>
		    （申请步骤）：<br />
		     1、提交资料申请；<br />
		     2、等待应用审核；<br />
		     3、审核通过后，使用应用密钥查询诚信信息。
          </div>
          <span></span>
          <div class="btn"><span f="but_go_step" data-curr="step_1" data-next="step_2">阅读诚信平台协议</span></div>
        </div>
		<!--//step_1_box End -->

        <div class="text" style="display:none;" id="step_2_box"> 
          <h1>诚信开放平台合作伙伴开放协议</h1>
		  <?php echo $_smarty_tpl->tpl_vars['agreement']->value;?>

          <div class="btn"><span f="but_go_step" data-curr="step_2" data-next="step_3">同意协议，进入下一步</span></div>
        </div>
		<!--//step_2_box End-->

        <div class="selectfor" style="display:none;" id="step_3_box">
          <div class="tips">
		    （填写网站基本资料，申请诚信查询开放平台应用，只有审核通过才可以正常使用）
          </div>
			<table class="oe_table_wrap">
			  <tr>
				<th width="20%">应用域名：</th>
				<td width="80%">
				  <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

				  （不可修改，自动获取）
				</td>
			  </tr>
			  <tr>
				<th>网站名称：</th>
				<td>
				  <input type="text" name="credit_sitename" id="credit_sitename" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitename'];?>
" class="input-b" />
				</td>
			  </tr>
			  <tr>
				<th>网站网址：</th>
				<td>
				  <input type="text" name="credit_siteurl" id="credit_siteurl" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteurl'];?>
" class="input-b" />
				</td>
			  </tr>
			  <tr>
				<th>联系人：</th>
				<td>
				  <input type="text" name="credit_sitecontact" id="credit_sitecontact" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitecontact'];?>
" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>手机：</th>
				<td>
				  <input type="text" name="credit_sitemobile" id="credit_sitemobile" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitemobile'];?>
" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>QQ：</th>
				<td>
				  <input type="text" name="credit_siteqq" id="credit_siteqq" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteqq'];?>
" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>邮箱：</th>
				<td>
				  <input type="text" name="credit_siteemail" id="credit_siteemail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteemail'];?>
" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>网站备案号：</th>
				<td>
				  <input type="text" name="credit_siteicp" id="credit_siteicp" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteicp'];?>
" class="input-150" />
				</td>
			  </tr>
			</table>
           <div class="btn"><span f="but_submit_appopen">提交申请</span></div>
        </div>
		<!--//step_3_box End-->
		
		<div class="result" style="display:none;" id="app_submitok_box">
          <dl>
            <dt><img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/admincp/images/true.png" /></dt>
            <dd>
              资料提交成功！
              <p class="tips">
			    您的申请资料已提交，请耐心等待审核结果。
			  </p>
            </dd>
          </dl>
        </div>
		<!--//app_submitok_box End-->

        <div class="result" style="display:none;" id="app_fail_box">
          <dl>
            <dt>
			  <img src="<?php echo $_smarty_tpl->tpl_vars['urlpath']->value;?>
tpl/admincp/images/error.png"   />
            </dt>
            <dd>
              您的申请未通过
              <p class="tips">
			    原因：
				<?php if (!empty($_smarty_tpl->tpl_vars['app_msg']->value)){?>
				<span id="tips_appresult"><?php echo $_smarty_tpl->tpl_vars['app_msg']->value;?>
</span>
				<?php }else{ ?>
				<span id="tips_appresult">--</span>
				<?php }?>
			  </p>
              <p class="btn">
                <span f="but_go_step" data-curr="app_fail" data-next="step_3">重新编辑</span>
              </p>
            </dd>
          </dl>
        </div>
		<!--//app_fail_box End-->

        <div class="resulted" style="display:none;" id="step_success_box">
          <div class="tips">
            <ul>
              <li>
                <label>应用域名：</label><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

              </li>
              <li>
               <label>Secret KEY(应用密钥)： </label>
			   <?php if ($_smarty_tpl->tpl_vars['app_status']->value=='1'){?>
			   <span id="tips_key"><?php echo $_smarty_tpl->tpl_vars['app_msg']->value;?>
</span>
			   <?php }else{ ?>
			   <span id="tips_key">--</span>
			   <?php }?>
              </li>
            </ul>
          </div>

          <form id="myform" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" method="post">
          <input type="hidden" name="a" id="a" value="savecredit" />
          <div class="edite">
            <ul>
              <li><label>诚信查询：</label><input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'){?>  checked<?php }?> />开启，
				<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='0'){?>  checked<?php }?> />关闭
              </li>
              <li>
                <label>Secret KEY：</label><input type="text" name="appkey" id="appkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_key'];?>
" class="input-b" />
                <p>
                  OE诚信查询开放平台应用密钥，一个站点对应一个密钥<br /><font color="red">请填写上边申请的Secret KEY(应用密钥)</font>
                </p>
              </li>
              <li><label>通信状态：</label><span id="test_tips"></span></li>
              <li class="btns"><input type="button"  id="btn_edit_save" value="提交保存" /> </li>
            </ul>
          </div>
          </form>
	    </div>
	
	  </div>
	  <!--//bd End -->
    </div>
	<!--//oe_apply End -->
    
    <script type="text/javascript">
	$(function(){
		
		<?php if ($_smarty_tpl->tpl_vars['app_status']->value=='1'){?>
		//成功
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#step_success_box").show();
		<?php }elseif($_smarty_tpl->tpl_vars['app_status']->value=='2'){?>
		//失败
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#app_fail_box").show();
		<?php }elseif($_smarty_tpl->tpl_vars['app_status']->value=='3'){?>
		//审核中
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#app_submitok_box").show();
		<?php }else{ ?>
		//未提交
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_1").addClass("current");
		$("#step_1_box").show();
		<?php }?>

		//申请步骤 下一步...
		$(document).on("click", "[f='but_go_step']", function(){
			$_curr_box = $(this).attr("data-curr");
			$_next_box = $(this).attr("data-next");
			$(".oe_apply_regtitle").find("ul li").removeClass("current");
			$("#"+$_next_box).addClass("current");

			$("#"+$_curr_box+"_box").hide();
			$("#"+$_next_box+"_box").show();
		});

		//提交申请资料
		$(document).on("click", "[f='but_submit_appopen']", function(){
			$credit_sitename = $("#credit_sitename").val();
			$credit_siteurl = $("#credit_siteurl").val();
			$credit_sitecontact = $("#credit_sitecontact").val();
			$credit_sitemobile = $("#credit_sitemobile").val();
			$credit_siteqq = $("#credit_siteqq").val();
			$credit_siteemail = $("#credit_siteemail").val();
			$credit_siteicp = $("#credit_siteicp").val();
			if ($credit_sitename.length == 0) {
				ToastShow("请填写网站名称");
				return false;
			}
			if ($credit_siteurl.length == 0) {
				ToastShow("请填写网站地址");
				return false;
			}
			if ($credit_sitecontact.length == 0) {
				ToastShow("请填写联系人");
				return false;
			}
			if ($credit_sitemobile.length == 0) {
				ToastShow("请填写手机号码");
				return false;
			}
			$.ajax({
				type: "GET",
				url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
",
				cache: false,
				data: {
					c:"<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
", a:"saveappcredit", 
					credit_sitename:$credit_sitename, credit_siteurl:$credit_siteurl, credit_sitecontact:$credit_sitecontact,
					credit_sitemobile:$credit_sitemobile, credit_siteqq:$credit_siteqq, credit_siteemail:$credit_siteemail, 
					credit_siteicp:$credit_siteicp, r:get_rndnum(8)
				},
				dataType: "json",
				success: function($data) {
					$json = eval($data);
					$response = $json.response;
					$result = $json.result;
					if ($response == "1") {
						//官方申请
						$.ajax({
							type: "GET",
							url: _ROOT_PATH+"index.php",
							cache: false,
							data: {c:"credit", a:"app", r:get_rndnum(8)},
							dataType: "json",
							success: function($jdata) {
								$jjson = eval($jdata);
								$jresponse = $jjson.response;
								$jresult = $jjson.result;
								if ($jresponse == "1") {
									$(".oe_apply_regtitle").find("ul li").removeClass("current");
									$("#step_4").addClass("current");
									$("#step_3_box").hide();
									$("#app_submitok_box").show();
								}
								else {
									ToastShow("提交失败");
								}
							},
							error: function() {
							
							}
						});

					}
					else {
						if ($result.length > 0) {
							ToastShow($result);
						}
						else {
							ToastShow("提交失败");
						}
					}
				},
				error: function() {
				
				}
			});
		
		});

		//编辑保存
		$(document).on("click", "#btn_edit_save", function(){
			$("#myform").submit();
		});
		//通信状态
		<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'&&!empty($_smarty_tpl->tpl_vars['config']->value['credit_key'])){?>
		$.ajax({
			type: "GET",
			url: _ROOT_PATH+"index.php",
			cache: false,
			data: {c:"credit", a:"test", r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					$("#test_tips").html("<font color='green'>通信成功</font>");
				}
				else {
					$("#test_tips").html("<font color='red'>通信失败</font>");
				}
			},
			error: function() {
			
			}
		});
		<?php }?>
	});
	</script>
    
	<table class="oe_table_wrap" style="display: none;">
	  <tr>
	    <td class="hback_c3" colspan="2"><b>诚信查询接口设置</b> （使用OE诚信联盟，查询诚信信息）</td>
	  </tr>
	  <tr>
	    <td width="50%" valign="top">

		    <form id="myform" action="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting" method="post">
			<input type="hidden" name="a" id="a" value="savecredit" />
			<table class="oe_table_wrap">
			  <tr>
				<th width="25%">诚信开关：</th>
				<td width="75%">
				<input type="radio" name="flag" id="flag" value="1"<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'){?>  checked<?php }?> />开启，
				<input type="radio" name="flag" id="flag" value="0"<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='0'){?>  checked<?php }?> />关闭
				</td>
			  </tr>
			  <tr>
				<th>Secret KEY：</th>
				<td>
				  <input type="text" name="appkey" id="appkey" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_key'];?>
" class="input-txt" />
				  <br />
				  OE诚信联盟应用密钥，一个站点对应一个密钥<br /><font color="red">请填写右边申请的应用密钥</font>
				</td>
			  </tr>
			  <tr>
				<th>应用域名：</th>
				<td><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</td>
			  </tr>
			  <tr>
				<td></td>
				<td>
				  <input type="button" class="button" id="btn_save" value="编辑保存" /> 

				  &nbsp;&nbsp;&nbsp;<span id="test_tips"></span>
				</td>
			  </tr>
			</table>
			</form>
			<script type="text/javascript">
			$(function(){
				//提交保存
				$("#btn_save").bind("click", function(){
					$("#myform").submit();
				});
				//审批状态
				$.ajax({
					type: "GET",
					url: _ROOT_PATH+"index.php",
					cache: false,
					data: {c:"credit", a:"appstatus", domain:"<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
", r:get_rndnum(8)},
					dataType: "json",
					success: function($data) {
						$json = eval($data);
						$response = $json.response;
						$result = $json.result;
						if ($response == "1") {
							$("#tips_appresult").html("<font color='green'>审核通过</font>");
							$("#tips_key").html($result);
						}
						else if ($response == "2"){
							$("#tips_appresult").html("<font color='red'>审核未通过</font><br />原因："+$result+"");
							$("#but_edit_data").show();
						}
						else if ($response == "3") {
							$("#tips_appresult").html("<font color='gray'>资料审核中，请耐心等待。</font>");
						}
						else {
							$("#but_app_data").show();
						}
					},
					error: function() {
					
					}
				});

				//通信状态
				<?php if ($_smarty_tpl->tpl_vars['config']->value['credit_flag']=='1'&&!empty($_smarty_tpl->tpl_vars['config']->value['credit_key'])){?>
				$.ajax({
					type: "GET",
					url: _ROOT_PATH+"index.php",
					cache: false,
					data: {c:"credit", a:"test", r:get_rndnum(8)},
					dataType: "json",
					success: function($data) {
						$json = eval($data);
						$response = $json.response;
						$result = $json.result;
						if ($response == "1") {
							$("#test_tips").html("<font color='green'>通信成功</font>");
						}
						else {
							$("#test_tips").html("<font color='red'>通信失败</font>");
						}
					},
					error: function() {
					
					}
				});
				<?php }?>

			});
			</script>

		</td>

		<td width="50%" valign="top">

		  <table class="oe_table_wrap">
			<tr>
			  <td>
			    <b>申请诚信联盟应用</b>
				（申请步骤）：<br />
				1、提交资料申请；<br />
				2、等待应用审核；<br />
				3、审核通过后，使用应用密钥查询诚信信息。
			  </td>
			</tr>
			<tr>
			  <td><b>应用域名：</b><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</td>
			</tr>
			<tr>
			  <td>
			    <b>Secret KEY(应用密钥)：</b>
				<span id="tips_key">--</span>
			  </td>
			</tr>
			<tr>
			  <td>
			    <b>申请结果：</b>
				<span id="tips_appresult">--</span>
			  </td>
			</tr>
			<tr id="but_app_data" style="display:none;">
			  <td>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=appcredit" class="oe_ico_orange">申请诚信联盟</a>
			  </td>
			</tr>
			<tr id="but_edit_data" style="display:none;">
			  <td>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=appcredit" class="oe_ico_green">重新编辑申请</a>
			  </td>
			</tr>
		  </table>

		</td>
	  </tr>
	</table>
  
  
  </div>
  <div style="clear:both;"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['a']->value=='appcredit'){?>
<div class="main-wrap">
  <div class="path">
    <p>诚信查询应用<span>&gt;&gt;</span><a href="<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=appcredit">申请诚信联盟应用</a></p>
  </div>
  <div class="main-cont">


    <table class="oe_table_wrap">
	  <tr>
	    <td class="hback_c3" colspan="2">
		  <b>申请诚信联盟应用</b> 
		  <em>（填写网站基本资料，申请诚信联盟应用，只有审核通过才可以正常使用）</em>
		</td>
	  </tr>
	  <tr>
	    <th width="15%">应用域名：</th>
		<td width="85%">
		  <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

		  （不可修改，自动获取）
		</td>
	  </tr>
	  <tr>
	    <th>网站名称：</th>
		<td>
		  <input type="text" name="credit_sitename" id="credit_sitename" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitename'];?>
" class="input-txt" />
		</td>
	  </tr>
	  <tr>
	    <th>网站网址：</th>
		<td>
		  <input type="text" name="credit_siteurl" id="credit_siteurl" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteurl'];?>
" class="input-txt" />
		</td>
	  </tr>
	  <tr>
	    <th>联系人：</th>
		<td>
		  <input type="text" name="credit_sitecontact" id="credit_sitecontact" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitecontact'];?>
" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>手机：</th>
		<td>
		  <input type="text" name="credit_sitemobile" id="credit_sitemobile" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_sitemobile'];?>
" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>QQ：</th>
		<td>
		  <input type="text" name="credit_siteqq" id="credit_siteqq" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteqq'];?>
" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>邮箱：</th>
		<td>
		  <input type="text" name="credit_siteemail" id="credit_siteemail" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteemail'];?>
" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>网站备案号：</th>
		<td>
		  <input type="text" name="credit_siteicp" id="credit_siteicp" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['credit_siteicp'];?>
" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <td></td>
		<td>
		  <input type="button" class="button" id="btn_save" value="提交申请" />  
		  <span id="submit_tips"></span>
		</td>
	  </tr>
	</table>


  </div>
  <div style="clear:both;"></div>
</div>

  <script type="text/javascript">
  $(function(){
	//申请诚信联盟应用资料
	$(document).on("click", "#btn_save", function(){
		$credit_sitename = $("#credit_sitename").val();
		$credit_siteurl = $("#credit_siteurl").val();
		$credit_sitecontact = $("#credit_sitecontact").val();
		$credit_sitemobile = $("#credit_sitemobile").val();
		$credit_siteqq = $("#credit_siteqq").val();
		$credit_siteemail = $("#credit_siteemail").val();
		$credit_siteicp = $("#credit_siteicp").val();
		if ($credit_sitename.length == 0) {
			ToastShow("请填写网站名称");
			return false;
		}
		if ($credit_siteurl.length == 0) {
			ToastShow("请填写网站地址");
			return false;
		}
		if ($credit_sitecontact.length == 0) {
			ToastShow("请填写联系人");
			return false;
		}
		if ($credit_sitemobile.length == 0) {
			ToastShow("请填写手机号码");
			return false;
		}
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
",
			cache: false,
			data: {
				c:"setting", a:"saveappcredit", 
				credit_sitename:$credit_sitename, credit_siteurl:$credit_siteurl, credit_sitecontact:$credit_sitecontact,
				credit_sitemobile:$credit_sitemobile, credit_siteqq:$credit_siteqq, credit_siteemail:$credit_siteemail, 
				credit_siteicp:$credit_siteicp, r:get_rndnum(8)
			},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					//官方申请
					$.ajax({
						type: "GET",
						url: _ROOT_PATH+"index.php",
						cache: false,
						data: {c:"credit", a:"app", r:get_rndnum(8)},
						dataType: "json",
						success: function($jdata) {
							$jjson = eval($jdata);
							$jresponse = $jjson.response;
							$jresult = $jjson.result;
							if ($jresponse == "1") {
								$("#submit_tips").html("<font color='green'>提交成功</font>");
								setTimeout(function(){
									window.location.href = "<?php echo $_smarty_tpl->tpl_vars['cpfile']->value;?>
?c=setting&a=credit";
								}, 500);
							}
							else {
								$("#submit_tips").html("<font color='red'>提交失败</font>");
							}
						},
						error: function() {
						
						}
					});

				}
				else {
					if ($result.length > 0) {
						$("#submit_tips").html("<font color='red'>"+$result+"</font>");
					}
					else {
						$("#submit_tips").html("<font color='red'>提交失败</font>");
					}
				}
			},
			error: function() {
			
			}
		});
	
	});

  });
  </script>

<?php }?>

<?php $_smarty_tpl->tpl_vars['pluginevent'] = new Smarty_variable(XHook::doAction('adm_footer'), null, 0);?>
</body>
</html><?php }} ?>