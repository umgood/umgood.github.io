<?php
	require '../db2.php';
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Submit</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> </head>

     <body >
 		<h1 class="page-header">Message Board<span class="glyphicon glyphicon-pencil"></span></h1>
     	<div class="container well">
     		<?php 
     			connect();
     			for ($i=1;$i<=getArrayNum();$i++){
     				$t="";
     				if ($i%4==0){
     					$t = "alert-info";
     				}elseif ($i%4==1) {
     					$t = "alert-danger";
     				}elseif ($i%4==2) {
     					$t = "alert-warning";
     				}else {
     					$t = "alert-success";
     				}
     				echo "<h4 >".selectOne('nick','id',$i).": </h4>";
     				echo "<p class='alert ".$t."'>".selectOne("message","id",$i)."</p>";
     			}

                close();
     		 ?>		

<!--  			<a  href="html/register.php"><button  class="btn btn-warning btn-lg goback back">to register&nbsp;<span class="glyphicon glyphicon-share-alt"></span></button></a><br><br> -->
			<br><br><br>
 			<a  href="../index.php"><button  class="btn btn-info btn-lg goback back">to index&nbsp;<span class="glyphicon glyphicon-share-alt"></span></button></a>
<!--  			<a  href="html/register.html"><button  class="btn btn-warning btn-lg goback back">to register&nbsp;<span class="glyphicon glyphicon-share-alt"></span></button></a> -->
     		
     	</div>

 	    <audio controls="controls" autoplay="autoplay" >
 			<source src="../music/2.mp3" type="audio/mpeg" />
 			Your browser does not support the audio element.
 		</audio>
</body>
  <script>
  	$('audio').hide();
  </script>
 </html>