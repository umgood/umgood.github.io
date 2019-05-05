<?php
	require 'db.php';

 ?>
 <!DOCTYPE html >
 <html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
 <head>
 <title>test</title>

 <style>

 </style>
 </head>

     <body >
     	<div class="container well">
     		<?php 

     			connect();

     			$a= $_POST["userName"];
     			$b=$_POST["password1"];
     			$c=$_POST["password2"];

     			if ($a!="" and $b!="" and $c!=""){

         			if (strcmp($c,$b)==0){
                        if(selectOne("password","userName",$a)){
                            session_start();
                            $_SESSION["temp"]=array('tip :用户名已经存在');
                            header('content-type:text/html;charset=uft-8');
                            header('location:html/register.php');

                        }else{
                            insert($a,$b);
                            session_start();
                            $_SESSION["temp"]=array('tip :注册成功，请登陆');
                            header('content-type:text/html;charset=uft-8');
                            header('location:signIn.php');
                        }

         			}
         			else {
                        session_start();
                        $_SESSION["temp"]=array('tip : 密码输入不能不同');
                        header('content-type:text/html;charset=uft-8');
                        header('location:html/register.php');

         			}	
         			
                }else{
                    session_start();
                    $_SESSION["temp"]=array('tip : 信息不能为空');
                    header('content-type:text/html;charset=uft-8');
                    header('location:html/register.php');
                }
                close();
     		 ?>		

</body>

 </html>
