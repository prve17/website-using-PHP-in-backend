<?php 
require dirname(__FILE__).'/../config/route.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url;?>plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url;?>dist/css/adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
	<div class="card">
		<div class="card-body login">
			<div class="form">
				<p>Sign in to start your session</p>
			<form action="<?php echo url.'admins/controllers/Admin.php'; ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" name="username" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="hidden" name="action" value="login">
            <button type="submit" class="btn btn-primary btn-block btn-sm">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <!-- <div class="form-row">
          <div class="col-md-12">
            <a href="<?php echo url.'admins/'; ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-user mr-2"></i>Admin Login</a>
          </div>
        </div> -->
      </form>
			</div>
		</div>
	</div>
</body>
</html>