<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>index</title>
<link rel="stylesheet" href="/ComicWeb/Public/bs/css/bootstrap.min.css">
<script src="/ComicWeb/Public/bs/js/jquery.js"></script>
<script src="/ComicWeb/Public/bs/js/bootstrap.min.js"></script>
<script src="/ComicWeb/Public/bs/js/holder.min.js"></script>
<link rel="stylesheet" href="/ComicWeb/Admin/Home/View/Public/css/index.css">
</head>
<!--了解模板集成   这是后台登陆login页面-->
<body>
<div class="container">
		<div class="login">
		<form action="/ComicWeb/admin.php/Home/Login/check" method="post">
		<div class="form-group">
		<label for="">用户名：</label>
		<input class="form-control" type="text" name="username">
		</div>
		
		<div class="form-group">
		<label for="">密码：</label>
		<input class="form-control" type="password" name="password">
		</div>
		
		<div class="form-group">
			<label for="">验证码：</label>
		<div class="row">
		<div class="col-md-8">
		<input class="form-control" type="text" name="code">
		</div>
		<div class="col-md-4">
		<!-- /ComicWeb/admin.php/Home/Login/verify表示当前路径下verify的方法 -->
		<img class="verify"  src="/ComicWeb/admin.php/Home/Login/verify" alt="" onclick="this.src='/ComicWeb/admin.php/Home/login/verify'+'?'+Math.random()"">
		</div>
		</div>	<!-- row.div -->	
		</div><!-- form-group.div -->
		
		<div class="form-group">
		<div class="row">
		<div class="col-md-2">
		<input type="submit" value="登录" class="btn btn-primary"></div>
		<div class="col-md-10">
		<input type="submit" value="取消" class="btn  btn-danger"></div>
		</div><!-- row.div -->
		</div><!-- form-group.div -->
		
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		</div><!-- login.div -->
</div><!-- container.div -->
</body>
</html>