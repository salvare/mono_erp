<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ERP登陆</title>
</head>

<body>
<style>
body
{
	text-align:center;
	margin:0;
	padding:0;
}
.admin_table
{
	float: left;
	width: 100%;
	background:#e6f2fb;
	height:100%;
}
.admin_table a
{
	color:#21759b;
}
.admin_table a:hover
{
	color:#d54e21;
}
.admin_login
{
	width:420px;
	margin:100px auto 100px;
}
#loginform
{
	background: none repeat scroll 0 0 #fff;
    border: 1px solid #e5e5e5;
    box-shadow: 0 4px 10px -1px rgba(200, 200, 200, 0.7);
    font-weight: normal;
    margin-left: 8px;
    padding: 26px 24px 46px;
}
.admin_login label
{
	color: #777;
    display: block;
    font-size: 13px;
    margin: auto;
    text-align: left;
    width: 60%;
}
#user_pass,#user_login
{
	width:95%;
	border:1px solid #e4e4e4;
	padding:8px;
	border-radius:4px;
}
#wp-submit
{
	float:right;
}
.admin_main_btn
{
	background:#278ab7;
	border-radius: 3px;
	border:1px solid #1b607f;
	color: #fff;
    padding: 4px 6px;
	cursor:pointer;
}
</style>
<?php  if($_POST['pwd']) { $DatabaseHandle=new DatabaseHandle(); $user_login=$DatabaseHandle->selectData("select * from b_user where user_name='$_POST[log]' and password='$_POST[pwd]'"); unset($DatabaseHandle); if($user_login) { $_SESSION['blog_login']=$user_login[0][id]; $_SESSION['login_admin_language']=$user_login[0][language_id]; echo "<script>location.href='".DOMAIN_ADMIN."'</script>"; } } ?>
<div class="admin_table">
<div class="admin_login">
<form name="loginform" id="loginform" action="<?php echo U('Admin/Public/checkLogin');?>" method="post">
	<p>
	<img src="http://lilysilk.s3.amazonaws.com/lilysilk_image/logo.png">ERP
	</p>
	<p>
		<label for="user_login">用户名<br />
		<input type="text" name="username" id="user_login" class="input" value="" size="20" onfocus="this.style.borderColor='#aaa'" onBlur="this.style.borderColor='#e4e4e4'" /></label>
	</p>
	<p>
		<label for="user_pass">密码<br />
		<input type="password" name="password" id="user_pass" class="input" value="" size="20" onfocus="this.style.borderColor='#aaa'" onBlur="this.style.borderColor='#e4e4e4'" /></label>
	</p>
	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> 记住我的登录信息<input type="submit" name="wp-submit" id="wp-submit" class="admin_main_btn" value="登录" /></label></p>

</form>
</div>
</div>

</body>
</html>