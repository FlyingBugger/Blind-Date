<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<!--{$page_charset}-->" />
<title>管理员</title>
<!--{include file="<!--{$cptplpath}-->headerjs.tpl"}-->
<!--{assign var='pluginevent' value=XHook::doAction('adm_head')}-->
</head>
<body>
<!--{assign var='pluginevent' value=XHook::doAction('adm_main_top')}-->

<!--{if $a == "credit"}-->
<div class="main-wrap">
  <div class="path">
    <p>诚信查询应用<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=setting&a=credit">参数设置</a></p>
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
		  <!--{$agreement}-->
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
				  <!--{$domain}-->
				  （不可修改，自动获取）
				</td>
			  </tr>
			  <tr>
				<th>网站名称：</th>
				<td>
				  <input type="text" name="credit_sitename" id="credit_sitename" value="<!--{$config.credit_sitename}-->" class="input-b" />
				</td>
			  </tr>
			  <tr>
				<th>网站网址：</th>
				<td>
				  <input type="text" name="credit_siteurl" id="credit_siteurl" value="<!--{$config.credit_siteurl}-->" class="input-b" />
				</td>
			  </tr>
			  <tr>
				<th>联系人：</th>
				<td>
				  <input type="text" name="credit_sitecontact" id="credit_sitecontact" value="<!--{$config.credit_sitecontact}-->" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>手机：</th>
				<td>
				  <input type="text" name="credit_sitemobile" id="credit_sitemobile" value="<!--{$config.credit_sitemobile}-->" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>QQ：</th>
				<td>
				  <input type="text" name="credit_siteqq" id="credit_siteqq" value="<!--{$config.credit_siteqq}-->" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>邮箱：</th>
				<td>
				  <input type="text" name="credit_siteemail" id="credit_siteemail" value="<!--{$config.credit_siteemail}-->" class="input-150" />
				</td>
			  </tr>
			  <tr>
				<th>网站备案号：</th>
				<td>
				  <input type="text" name="credit_siteicp" id="credit_siteicp" value="<!--{$config.credit_siteicp}-->" class="input-150" />
				</td>
			  </tr>
			</table>
           <div class="btn"><span f="but_submit_appopen">提交申请</span></div>
        </div>
		<!--//step_3_box End-->
		
		<div class="result" style="display:none;" id="app_submitok_box">
          <dl>
            <dt><img src="<!--{$urlpath}-->tpl/admincp/images/true.png" /></dt>
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
			  <img src="<!--{$urlpath}-->tpl/admincp/images/error.png"   />
            </dt>
            <dd>
              您的申请未通过
              <p class="tips">
			    原因：
				<!--{if !empty($app_msg)}-->
				<span id="tips_appresult"><!--{$app_msg}--></span>
				<!--{else}-->
				<span id="tips_appresult">--</span>
				<!--{/if}-->
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
                <label>应用域名：</label><!--{$domain}-->
              </li>
              <li>
               <label>Secret KEY(应用密钥)： </label>
			   <!--{if $app_status == '1'}-->
			   <span id="tips_key"><!--{$app_msg}--></span>
			   <!--{else}-->
			   <span id="tips_key">--</span>
			   <!--{/if}-->
              </li>
            </ul>
          </div>

          <form id="myform" action="<!--{$cpfile}-->?c=<!--{$c}-->" method="post">
          <input type="hidden" name="a" id="a" value="savecredit" />
          <div class="edite">
            <ul>
              <li><label>诚信查询：</label><input type="radio" name="flag" id="flag" value="1"<!--{if $config.credit_flag == '1'}-->  checked<!--{/if}--> />开启，
				<input type="radio" name="flag" id="flag" value="0"<!--{if $config.credit_flag == '0'}-->  checked<!--{/if}--> />关闭
              </li>
              <li>
                <label>Secret KEY：</label><input type="text" name="appkey" id="appkey" value="<!--{$config.credit_key}-->" class="input-b" />
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
		
		<!--{if $app_status == '1'}-->
		//成功
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#step_success_box").show();
		<!--{elseif $app_status == '2'}-->
		//失败
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#app_fail_box").show();
		<!--{elseif $app_status == '3'}-->
		//审核中
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_4").addClass("current");
		$("#app_submitok_box").show();
		<!--{else}-->
		//未提交
		$(".oe_apply_regtitle").find("ul li").removeClass("current");
		$("#step_1").addClass("current");
		$("#step_1_box").show();
		<!--{/if}-->

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
				url: "<!--{$cpfile}-->",
				cache: false,
				data: {
					c:"<!--{$c}-->", a:"saveappcredit", 
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
		<!--{if $config.credit_flag == '1' && !empty($config.credit_key)}-->
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
		<!--{/if}-->
	});
	</script>
    
	<table class="oe_table_wrap" style="display: none;">
	  <tr>
	    <td class="hback_c3" colspan="2"><b>诚信查询接口设置</b> （使用OE诚信联盟，查询诚信信息）</td>
	  </tr>
	  <tr>
	    <td width="50%" valign="top">

		    <form id="myform" action="<!--{$cpfile}-->?c=setting" method="post">
			<input type="hidden" name="a" id="a" value="savecredit" />
			<table class="oe_table_wrap">
			  <tr>
				<th width="25%">诚信开关：</th>
				<td width="75%">
				<input type="radio" name="flag" id="flag" value="1"<!--{if $config.credit_flag == '1'}-->  checked<!--{/if}--> />开启，
				<input type="radio" name="flag" id="flag" value="0"<!--{if $config.credit_flag == '0'}-->  checked<!--{/if}--> />关闭
				</td>
			  </tr>
			  <tr>
				<th>Secret KEY：</th>
				<td>
				  <input type="text" name="appkey" id="appkey" value="<!--{$config.credit_key}-->" class="input-txt" />
				  <br />
				  OE诚信联盟应用密钥，一个站点对应一个密钥<br /><font color="red">请填写右边申请的应用密钥</font>
				</td>
			  </tr>
			  <tr>
				<th>应用域名：</th>
				<td><!--{$domain}--></td>
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
					data: {c:"credit", a:"appstatus", domain:"<!--{$domain}-->", r:get_rndnum(8)},
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
				<!--{if $config.credit_flag == '1' && !empty($config.credit_key)}-->
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
				<!--{/if}-->

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
			  <td><b>应用域名：</b><!--{$domain}--></td>
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
			    <a href="<!--{$cpfile}-->?c=setting&a=appcredit" class="oe_ico_orange">申请诚信联盟</a>
			  </td>
			</tr>
			<tr id="but_edit_data" style="display:none;">
			  <td>
			    <a href="<!--{$cpfile}-->?c=setting&a=appcredit" class="oe_ico_green">重新编辑申请</a>
			  </td>
			</tr>
		  </table>

		</td>
	  </tr>
	</table>
  
  
  </div>
  <div style="clear:both;"></div>
</div>
<!--{/if}-->

<!--{if $a == 'appcredit'}-->
<div class="main-wrap">
  <div class="path">
    <p>诚信查询应用<span>&gt;&gt;</span><a href="<!--{$cpfile}-->?c=setting&a=appcredit">申请诚信联盟应用</a></p>
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
		  <!--{$domain}-->
		  （不可修改，自动获取）
		</td>
	  </tr>
	  <tr>
	    <th>网站名称：</th>
		<td>
		  <input type="text" name="credit_sitename" id="credit_sitename" value="<!--{$config.credit_sitename}-->" class="input-txt" />
		</td>
	  </tr>
	  <tr>
	    <th>网站网址：</th>
		<td>
		  <input type="text" name="credit_siteurl" id="credit_siteurl" value="<!--{$config.credit_siteurl}-->" class="input-txt" />
		</td>
	  </tr>
	  <tr>
	    <th>联系人：</th>
		<td>
		  <input type="text" name="credit_sitecontact" id="credit_sitecontact" value="<!--{$config.credit_sitecontact}-->" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>手机：</th>
		<td>
		  <input type="text" name="credit_sitemobile" id="credit_sitemobile" value="<!--{$config.credit_sitemobile}-->" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>QQ：</th>
		<td>
		  <input type="text" name="credit_siteqq" id="credit_siteqq" value="<!--{$config.credit_siteqq}-->" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>邮箱：</th>
		<td>
		  <input type="text" name="credit_siteemail" id="credit_siteemail" value="<!--{$config.credit_siteemail}-->" class="input-150" />
		</td>
	  </tr>
	  <tr>
	    <th>网站备案号：</th>
		<td>
		  <input type="text" name="credit_siteicp" id="credit_siteicp" value="<!--{$config.credit_siteicp}-->" class="input-150" />
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
			url: "<!--{$cpfile}-->",
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
									window.location.href = "<!--{$cpfile}-->?c=setting&a=credit";
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

<!--{/if}-->

<!--{assign var='pluginevent' value=XHook::doAction('adm_footer')}-->
</body>
</html>