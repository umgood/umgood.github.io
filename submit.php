<?php
  require 'db2.php';

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>studyPlat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>study </b>PLAT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="Submit ">
            <a href="submit.php">Submit</a>
          </li>
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->

                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
		       	<?php echo isset($_COOKIE["userName"]) ? '<a href="#" class="dropdown-toggle" data-toggle="dropdown">':'<a href="signIN.php" >';?>
            
			      <?php 
                    if (!isset($_COOKIE["userName"])){
                      echo 'signIN';
                    }else{
                      echo $_COOKIE["userName"];
                    }
              ?>
              <?php echo isset($_COOKIE["userName"])?'<img src="image/2.jpg" class="user-image" alt="User Image">':"";?>

       
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="image/2.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php 
                      if (!isset($_COOKIE["userName"])){
                        echo '<a href="signIn.php">signIN<a>';
                      }else{
                        echo $_COOKIE["userName"];
                      }
                   ?>
                  <?php echo '<small>'.date("Y/m/d").'</small>'?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat ">Profile</a>
                </div>
                <div class="pull-right">
                  <button class="btn btn-default btn-flat" onclick="direact()">Sign out</button>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php 
	        if (!isset($_COOKIE["userName"])){
	          echo '';
	        }else{
	          echo '
	          <div class="user-panel">
	            <div class="pull-left image">
	              <img src="image/2.jpg" class="img-circle" alt="User Image">
	            </div>
	            <div class="pull-left info">
	          	<p>'.$_COOKIE["userName"].'</p>
	              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	            </div>
	          </div>
	          ';
	        }
	  ?>
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">INDEX</li>
        <!-- 自学网站 -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>自学网站</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a target="_blank" href="https://www.runoob.com/"><i class="fa fa-circle-o"></i>菜鸟教程</a></li>
            <li><a target="_blank" href="http://www.w3school.com.cn/"><i class="fa fa-circle-o"></i> W3school</a></li>
            <li><a target="_blank" href="https://www.csdn.net/"><i class="fa fa-circle-o"></i> CSDN</a></li>
            <li><a target="_blank" href="https://www.oracle.com/technetwork/cn/index.html"><i class="fa fa-circle-o"></i> Oracle技术网</a></li>
            <li><a target="_blank" href="http://www.shouce.ren/"><i class="fa fa-circle-o"></i> 手册网</a></li>
            <li><a target="_blank" href="http://www.hackerdoor.com/"><i class="fa fa-circle-o"></i> 黑客之门</a></li>
            
          </ul> 
        </li>
        <!-- 手册 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>一些手册</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a target="_blank" href="https://docs.python.org/3/"><i class="fa fa-circle-o"></i> python</a></li>
            <li><a target="_blank" href="https://zh.cppreference.com/w/c"><i class="fa fa-circle-o"></i> C</a></li>
            <li><a target="_blank" href="https://www.oracle.com/technetwork/cn/java/javase/documentation/index.html"><i class="fa fa-circle-o"></i> Java</a></li>
            <li ><a target="_blank" href="https://v3.bootcss.com/"><i class="fa fa-circle-o"></i>bootstrap</a></li>
            <li><a target="_blank" href="http://www.ceeger.com/Components/"><i class="fa fa-circle-o"></i>unity圣典</a></li>
            <li><a target="_blank" href="https://developers.weixin.qq.com/miniprogram/dev/framework/MINA.html"><i class="fa fa-circle-o"></i> 微信小程序</a></li>
            <li><a target="_blank" href="https://scrapy-chs.readthedocs.io/zh_CN/0.24/"><i class="fa fa-circle-o"></i> Scrapy2.4中文</a></li>
            <li><a target="_blank" href="https://www.cnblogs.com/along21/p/8985722.html#auto_id_37"><i class="fa fa-circle-o"></i> MySQL</a></li>
            <li><a target="_blank" href="https://www.php.net/manual/zh/"><i class="fa fa-circle-o"></i> php中文</a></li>
            <li><a target="_blank" href="https://www.kancloud.cn/manual/thinkphp5/118003"><i class="fa fa-circle-o"></i> thinkphp5完全开发手册</a></li>
            <li><a target="_blank" href="https://scrapy-chs.readthedocs.io/zh_CN/0.24/"><i class="fa fa-circle-o"></i> Scrapy2.4中文</a></li>

          </ul>
        </li>
        <!-- 视频网站 -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>视频网站</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a target="_blank" href="https://ke.qq.com/"><i class="fa fa-circle-o"></i> 腾迅课堂</a></li>
            <li><a target="_blank" href="https://www.jikexueyuan.com/"><i class="fa fa-circle-o"></i>极客学院</a></li>
            <li ><a target="_blank" href="https://www.51zxw.net/"><i class="fa fa-circle-o"></i>我要自学网</a></li>
            <li><a target="_blank" href="https://www.imooc.com/"><i class="fa fa-circle-o"></i>慕课网</a></li>
            <li><a target="_blank" href="http://www.sikiedu.com"><i class="fa fa-circle-o"></i> siki学院</a></li>
          </ul>
        </li>


      
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>邮箱</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Content
      </h1>
      <br>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Bootstrap WYSIHTML5
            <small>Simple and fast</small>
          </h3>
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                    title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <textarea class="textarea" name="message" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" name="file" id="file">

              <p class="help-block">thanks for your file.</p>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

    </section>
    

  </div>
<!-- ./wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019-2022 <a href="https://umgood.github.io">pqhuang</a></strong> All rights
    reserved.
  </footer>
<!-- myjs -->
<script src="bs/js/jquery.min.js"></script>

<script src="js/index.js"></script>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
	function getCookie(name) 
	{ 
	    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	 
	    if(arr=document.cookie.match(reg))
	 
	        return unescape(arr[2]); 
	    else 
	        return null; 
	}
	function direact(){
	  var exp = new Date(); 
	  var name="userName";
	  exp.setTime(exp.getTime() - 1); 
	  var cval=getCookie(name); 
	  if(cval!=null) 
	    document.cookie= name + "="+cval+";expires="+exp.toGMTString();
	  window.location.href="index.php";
	}
</script>
</body>
</html>
