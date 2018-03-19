<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_headinc.tpl"}-->
<body>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_top.tpl"}-->
<div id="page-index" class="page" style="background:#ffd7d7;">
  <div class="oe_nlogin" style="background:url('<!--{$skinpath}-->images/login.png') right 50px no-repeat #ffd7d7;">
    <div class="oe_nlogincn">
      <div class="hd">
        登录网站
      </div>
      <div class="bd">
        <ul>
          <li>
            <label>帐号</label>
            <input type="text" name="loginname" id="loginname" value="用户名/邮箱" class="w1" />
          </li>
          <li>
            <label>密码</label>
            <input type="password" name="password" id="password" class="w1" />
          </li>
          <li class="ma">
            <label>验证码</label>
            <input type="text" id="checkcode" name="checkcode" class="w2" />
			<img id="codeimg" src="<!--{$urlpath}-->source/include/imagecode.php?act=verifycode" align="middle" />
		    <a href="javascript:refreshCode();"> 换一张</a>
          </li>
          <li class="btn">
            <a href="javascript:;">
			  <button id="but_login">登 录</button>
            </a>
            <a class="a_2" href="<!--{$urlpath}-->index.php?c=passport&a=forget">忘记密码</a>
          </li>
          <li class="other">
            <!--{assign var='connect' value=vo_list("mod={connect}")}-->
			<!--{foreach $connect as $volist}-->
			<a href="<!--{$volist.apiurl}-->"><img src="<!--{$volist.logo}-->" /><!--{$volist.authname}--></a>  &nbsp;&nbsp;
			<!--{/foreach}-->
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>
<!--{include file="<!--{$tplpath}--><!--{$tplpre}-->block_footer.tpl"}-->

<script language="javascript">
$(function(){

	$("#loginname").bind("click", function(){ //帐号
		$_val = $(this).val();
		if ($_val == "用户名/邮箱") {
			$(this).val("");
		}
	});

	$("#codeimg").bind("click", function(){ //验证码
		$(this).attr("src", "<!--{$urlpath}-->source/include/imagecode.php?act=verifycode&"+Math.random());
	});

	$("#but_login").bind("click", function(){ //注册
		$_loginname = $("#loginname").val();
		$_password = $("#password").val();
		$_checkcode = "";

		if ($_loginname == "" || $_loginname == "用户名/邮箱") {
			alert("请填写登录帐号");
			return false;
		}
		if ($_password.length == 0) {
			alert("请填写登录密码");
			return false;
		}
		<!--{if $config.logincode=='1'}-->
		$_checkcode = $("#checkcode").val();
		if ($_checkcode.length == 0) {
			alert("请填写验证码");
			return false;
		}
		<!--{/if}-->
		
		$forward = "<!--{$forward}-->";
		if ($forward.length == 0) {
			$forward = "<!--{$urlpath}-->";
		}
		$.ajax({
			type: "POST",
			url: _ROOT_PATH+"index.php?c=passport",
			cache: false,
			data: {a:"loginpost", loginname:$_loginname, password:$_password, checkcode:$_checkcode, forward:$forward, fromhalt:"ajax", r:get_rndnum(8)},
			dataType: "json",
			success: function($data) {
				$json = eval($data);
				$response = $json.response;
				$result = $json.result;
				if ($response == "1") {
					window.location.href = $forward;
				}
				else if ($response == "2") {
					window.top.location.href = $result;
				}
				else {
					if ($result.length > 0) {
						alert($result);
					}
					else {
						alert("登录失败，请检查帐号和密码");
					}
				}
			},
			error: function() {
				alert("登录失败，请检查帐号和密码");
			}
		});

	});

});
    function refreshCode(){
        $("#codeimg").attr("src", "<!--{$urlpath}-->source/include/imagecode.php?act=verifycode&"+Math.random());
    }
</script>
</body>
</html>