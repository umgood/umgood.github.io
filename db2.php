


<?php 
	$serverName='127.0.0.1:3308';      //改成自己的mysql数据库服务器
	$userName='root';                  //改成自己的mysql数据库用户名
	$password='root';        //改成自己的mysql数据库密码
	$database='mydb';        //改成自己的mysql数据库名
	$form="message";
	$link;

	function connect(){	
		global $serverName, $userName,$password,$database,$link;
		$link= mysqli_connect($serverName, $userName, $password, $database);
		if (!$link) {

		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		// echo "connect success<br>" . PHP_EOL;
		// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
	}
	function close(){
		global $link,$form;
		mysqli_close($link);
		// echo "close success<br>";
	}
	function insert($time,$nick,$message){
		global $link,$form;
		$column=" (time,";
		$column.="nick,";
		$column.="message)";
		$sql = "INSERT INTO ".$form.$column." VALUES ('$time','$nick','$message')";
		// $sql = "INSERT INTO ".$table .' (id,title,body,create_time)'." VALUES (null,'$title','$body',$time)";
		if (mysqli_query($link,$sql)) {
			// echo "新纪录插入成功<br>";
		}else{
			echo "Error:".$sql."<br>".mysqli_error($link);
		}

	}
	function getArrayNum(){
		global $link,$form;
		$num=0;
		$sql = "SELECT * FROM ".$form;
		$result = mysqli_query($link, $sql);	 
		if (mysqli_num_rows($result) > 0) {
		    // 输出数据
		    while($row = mysqli_fetch_assoc($result)) {
		        // echo "id: " . $row["id"]. " - Name: " . $row["uesrName"]. " " . $row["password"]."<br>";
		        // echo "id: ".$row["id"]."-name:".$row["userName"]." -password:".$row["password"]."<br>";
		       $num++;

		    }
		    return $num;
		} else {
		    echo "0 结果";
		}
	}
	function selectColumn($column){
		global $link,$form;
		$sql = "SELECT * FROM ".$form;
		$result = mysqli_query($link, $sql);	 
		if (mysqli_num_rows($result) > 0) {
		    // 输出数据
		    while($row = mysqli_fetch_assoc($result)) {
		        echo  $row[$column]. "<br>";
		    }
		} else {
		    echo "0 结果";
		}

	}
	function selectOne($column,$indexColumn,$indexValue){
		global $link,$form;
		$sql = "SELECT * FROM ".$form;
		$result = mysqli_query($link, $sql);	 
		if (mysqli_num_rows($result) > 0) {
		    // 输出数据
		    $flag=0;
		    while($row = mysqli_fetch_assoc($result)) {
		    	if ($row[$indexColumn]==$indexValue){
		    		return $row[$column];
		    		$flag=1;
		    	}
		    }
		    if ($flag==0){
		    	return 0;
		    }
		} else {
		    echo "0 结果";
		}

	}
	function update($updateColumn,$updateValue,$indexColumn,$indexValue){
		global $link,$form;
		$sql = "UPDATE ".$form." SET ".$updateColumn." = '$updateValue' WHERE ".$indexColumn." = '$indexValue'";
		if(mysqli_query($link,$sql)){
		    echo "更新数据成功！<br>";
		} else {
		    echo "更新数据失败：<br>".mysql_error();
		}

	}
	function delete($indexColumn,$indexValue){
		global $link,$form;
		$sql = "DELETE FROM ".$form." WHERE ".$indexColumn."='$indexValue'";
		if(mysqli_query($link,$sql)){
		    echo "删除数据成功！<br>";
		} else {
		    echo "删除数据失败：<br>".mysql_error();
		}
		
	}

 ?>