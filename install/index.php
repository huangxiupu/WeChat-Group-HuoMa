<!DOCTYPE html>
<html>
<head>
	<title>里客云群活码生成系统安装</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.container{
			width: 600px;
		}
	</style>
</head>
<body>
<div class="container mt-3">
  <br/>
  <br/>
  <br/>
  <h3>里客云群活码生成系统安装</h3>
  <p>请在php5.6以上版本安装，建议使用php7.0</p>
	<p>遇到问题请加入交流群：<a href="http://pic.iask.cn/fimg/383045229743.jpg">http://pic.iask.cn/fimg/383045229743.jpg</a>或添加微信进群，微信号：face6009，备注“活码”</p>
  
  <form action="db_creat.php" method="post">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">数据库地址</span>
      </div>
      <input type="text" class="form-control" placeholder="请输入数据库服务器地址" name="dbservername">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">数据库登录账号</span>
      </div>
      <input type="text" class="form-control" placeholder="请输入数据库账号" name="dbusername">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">数据库登录密码</span>
      </div>
      <input type="password" class="form-control" placeholder="请输入数据库密码" name="dbpassword">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">数据库名</span>
      </div>
      <input type="text" class="form-control" placeholder="请输入数据库名" name="dbname">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">管理员账号</span>
      </div>
      <input type="text" class="form-control" placeholder="请设置管理员账号" name="adminuser">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">管理员密码</span>
      </div>
      <input type="password" class="form-control" placeholder="请设置管理员密码" name="adminpwd">
    </div>
    <input type="submit" value="立即安装" class="btn btn-secondary">
  </form>
</div>
</body>
</html>
