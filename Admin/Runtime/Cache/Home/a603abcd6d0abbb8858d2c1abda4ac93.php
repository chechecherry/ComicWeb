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
<script src="/ComicWeb/Public/kd/kindeditor-min.js"></script>
<!-- 新鲜事物 -->
<script >//why
  		menu='<?php echo ($_GET[menu]); ?>'?'<?php echo ($_GET[menu]); ?>':'user';
  		
</script>
<script src="/ComicWeb/Admin/Home/View/Public/js/index.js"></script>
</head>
<!-- View.index后台登陆后首页页面 -->
<body>
	<div class="container">
	<!-- 导航条 -->
   		<nav class="navbar navbar-default">
			<div class="container-fluid">
<!-- ComicWeb标签 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			 <span class="icon-bar"></span>
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span>
			</button>
		<a class="navbar-brand" href="/ComicWeb/admin.php/Home/index/index">后台首页</a>
		</div><!-- navbar-header.div -->
<!-- 查看动漫 -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	      <!-- 注意路径，先注销方法logout清理数据后再回到登录界面 -->
	      <!-- /ComicWeb/admin.php/Home/Cartoon和/ComicWeb/admin.php和__Root__区别 -->
	        <li><a href="/ComicWeb/admin.php/Home/Login/logout">退出<span class="sr-only">(current)</span></a></li>
	        </ul>
	        </div>
	 </div><!-- /.container-fluid -->
</nav>
<!-- 后台内容区 -->
		<div class="row row2">
		<!-- 左边菜单栏显示区 -->
		<div class="col-md-3 left">
		<!-- 用户管理 -->
		<div class="list-group user">
			  <a href="javascript:" class="list-group-item active">用户管理</a>
			  <!-- 注意路径，action表示当前操作方法路径，menu下user传参 -->
			  <a href="/ComicWeb/admin.php/Home/Cartoon/add/menu/user" class="list-group-item">添加用户</a>
			  <a href="/ComicWeb/admin.php/Home/Cartoon/add/menu/user" class="list-group-item">查看用户</a>
		</div>
		<!-- 内容管理 -->
		<div class="list-group cartoon">
			  <a href="javascript:" class="list-group-item active">发布动漫</a>
			  <a href="/ComicWeb/admin.php/Home/Cartoon/listAll/menu/cartoon" class="list-group-item">查看动漫</a>
			  <a href="/ComicWeb/admin.php/Home/Cartoon/add/menu/cartoon" class="list-group-item">添加动漫</a>
		</div>
		
		</div><!-- left.div -->
		<div class="col-md-9 right">
			
<!-- 注意方法为post -->
		<form action="/ComicWeb/admin.php/Home/Cartoon/insert" method="post">
			<div class="form-group">
			<label for="">发布者：</label>
			<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
			<label for="">动漫标题：</label>
			<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
			<label for="">动漫内容：</label>
			<textarea name="content" rows="10" class="form-control content"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="发布" class="btn btn-primary">
				<input type="reset" value="取消" class="btn btn-danger">
			</div>
			
		
		</form>

		</div><!-- right.div -->
		
		</div><!-- row -->













</div>
</body>
</html>