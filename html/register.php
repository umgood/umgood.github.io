<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>

</style>
</head>

 <body class="hold-transition login-page">

		
		 <div class="login-box">
		   <div class="login-logo">
		     <a href="../index.php"><b>study</b>PLAT</a>
		   </div>
		   <!-- /.login-logo -->
		   <div class="login-box-body">
		     <p class="login-box-msg">Register your session</p>

		     <form action="../registerDB.php" method="post">
		       <div class="form-group has-feedback">
		         <input type="email" class="form-control" name="userName" placeholder="userName">
		         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		       </div>
		       <div class="form-group has-feedback">
		         <input type="password" class="form-control" name="password1" placeholder="password">
		         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		       </div>
		       <div class="form-group has-feedback">
		         <input type="password" class="form-control" name="password2" placeholder="password">
		         <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		       </div>
		         <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
		         <p>
		         <?php 
		         session_start();
		            $i=0;
		            echo $_SESSION['temp'][$i];
		         ?>
		         </p>

		     </form>

		     <!-- /.social-auth-links -->

		     <a href="../signIN.php">back to sign in </a><br>
		     <a href="../index.php" class="text-center">back to index</a>

			<!-- 表单处理 -->
			
		   </div>
		   <!-- /.login-box-body -->
		 </div>
		 <!-- /.login-box -->


        </form>

			
    		
    	</div>



 </body>

</html>