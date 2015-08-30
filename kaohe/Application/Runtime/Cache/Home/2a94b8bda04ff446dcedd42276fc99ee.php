<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
      <title>校职工权限管理系统登录界面</title>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span5">
			<h3 class="text-center">
				权限管理系统登录界面...
			</h3>
		</div>
		<div class="span7">
			<form class="form-horizontal" action="/kaohe/index.php/Home/Index/login" method="post">
				<div class="control-group">
					 <label class="control-label" for="inputEmail">姓名</label>
					<div class="controls">
						<input id="inputEmail" type="text" name="username"/>
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label" for="inputPassword">密码</label>
					<div class="controls">
						<input id="inputPassword" type="password" name="password"/>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						 <button class="btn" type="submit">登陆</button>
						 <a href="<?php echo U('Register/register');?>" class="btn">注册</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


</body>
</html>