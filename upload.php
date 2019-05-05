
<?php
	require 'db2.php';
 ?>
 <!DOCTYPE html >
 <html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
 <head>
 <title>upload</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="description" content="²¼¶û½ÌÓý http://www.itbool.com" />
 <link rel="stylesheet" href="bs/css/bootstrap.css">
 <script src="bs/js/jquery.min.js"></script>
 <script src="bs/js/bootstrap.js"></script>

 <style>
 	body{
 		background: white url("image/1.jpg");
 		background-size: cover;
 		
 		/*color: white;*/
     }
     .container{

 		margin-left: auto;
 		margin-right: auto;

 		width: 1000px;
 	}
 	.container h2{
 		text-align: left;
 		padding: 20px 0px;
 	}
 	.container p{
 		text-indent: 40px;
 		letter-spacing: 4px;
 		font-size: 20px;
 		padding: 10px;
 		line-height: 35px;
 	}
 	.container span p{
 		text-indent: 0px;
 		letter-spacing: 2px;
 		font-size: 15px;
 		padding: 5px;
 	}
     .up{
     	display: block;
     	width: 100%;
     }
 	.back{
 		width: 100%;
 	}
 	.goback{
 		color: white;

 	}
 	.back:hover{
 		opacity: 0.7;
 	}
 	.goback:hover{
 		color:white;
 	}

 </style>
 </head>

     <body >
     	<div class="container well">
     		<?php 

     			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
     			// echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
     			if ($_FILES["file"]["error"] > 0)
     			{
     			    // echo "错误：" . $_FILES["file"]["error"] . "<br>";
     			}
     			else
     			{
     				echo "<h1>~谢谢分享~</h1>";
     			    echo "<h2>上传文件名: " . $_FILES["file"]["name"] . "<br>";
     			    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
     			    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<h2>";
     			}
     			connect();

     			if (! isset($_POST["message"])){
     				$_POST["message"]=="";
     			}
     			if ($_POST["message"]!="" ){
     				echo "<h1>~留言已收到~</h1><br>";

                         date_default_timezone_set('prc');
                         header("Content-type: text/html;charset=utf-8");
                         $time=date('Y-m-d H:i:s',time());     			
                         insert($time,$_COOKIE["userName"],$_POST["message"]);
     			}
                    close();
     		 ?>		
 			<a  href="submit.php"><button  class="btn btn-warning btn-lg goback back">back &nbsp;<span class="glyphicon glyphicon-share-alt"></span></button></a><br><br>
 			<a  href="index.php"><button  class="btn btn-info btn-lg goback back">to index&nbsp;<span class="glyphicon glyphicon-share-alt"></span></button></a>

     		
     	</div>

</body>

 </html>
