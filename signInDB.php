<?php
	require 'db.php';
    connect();
    $a=$_POST["userName"];
    $b=$_POST["password"];
     
 ?>
 <!DOCTYPE html >
 <html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
 <head>
 <title>test</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="description" content="²¼¶û½ÌÓý http://www.itbool.com" />
 <link rel="stylesheet" href="bs/css/bootstrap.css">
 <script src="bs/js/jquery.min.js"></script>
 <script src="bs/js/bootstrap.js"></script>

 <style>
 </style>
 </head>

     <body >
     	<div class="container well">
     		<?php 
        
     			if ($a!="" and $b!=""){

                    $password=selectOne("password","userName",$a);
                    echo $password,$b;
                    if(strcmp($password,$b)==0){
                        echo "<h1>Success</h1>";
                        setcookie("userName",$a,time()+1000);
                        header('content-type:text/html;charset=uft-8');
                        header('location:index.php');

                    }else{
                        session_start();
                        $_SESSION["temp"]=array('tip : 请重新输入密码');
                        header('content-type:text/html;charset=uft-8');
                        header('location:signIN.php');
                    }

         			
                }else{
                    session_start();
                    $_SESSION["temp"]=array('tip : 不能为空');
                    header('content-type:text/html;charset=uft-8');
                    header('location:signIN.php');
                }
                close();
     		 ?>		

     		
     	</div>


 </body>

 </html>
