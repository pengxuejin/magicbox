<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理后台 - 大博云柜</title>
<link href="/server/Public/CSS/admin.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/server/Public/CSS/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="/server/Public/CSS/jbox.css" rel="stylesheet" />
<link href="/server/Public/CSS/reset_admin.css" rel="stylesheet" type="text/css" media="screen" />
<script src="/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery.jBox-2.3.min.js"></script>
<script src="js/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript">
function Check() {
	var userName = document.getElementById("txtUserName");
	if(userName.value == "")
	{
		alert("请输入用户名");
		userName.focus();
		// return false 使其不跳转php页面
		return false;
	}
	var password = document.getElementById("txtPassWord");
	if(password.value == "")
	{
		alert("请输入密码");
		password.focus();
		return false;
	}
	userName.focus();
	return true;
}

$(function(){
	var userName = document.getElementById("txtUserName");
	userName.focus();
});
</script>
</head>
<body>
<form action="login.php" method="post">
<div class="smallbox">
<div class="logo">
<h1>大博云柜</h1>
<p>大博云柜系统后台<span>Daboo Co.Ltd</span></p>
</div>
<div class="loginform">
<ul>
	<li><label for=""> 用户名：</label><input name="userName" type="text" id="txtUserName" class="normal_txt" /></li>
	<li><label for=""> 密码：</label><input name="password" type="password" id="txtPassWord" class="normal_txt" /></li>
	<li><input type="submit" name="btnLogin" value="登 11 录" onclick="return Check();" id="btnLogin" class="normal_btn btn_b" /></li>
</ul>
</div>
</div>

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('txtUserName');//]]>
</script></form>
</body>
</html>