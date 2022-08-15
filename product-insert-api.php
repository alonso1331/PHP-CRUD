<?php
	$p_pname = $_POST["pname"];
	$p_pnum = $_POST["pnum"];

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "product";

	//建立連線
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//確認連線
	if(!$conn){
		die("連線失敗！".mysqli_connect_error());
	}
	// echo "連線成功！";

	$sql = "INSERT INTO product(Pname, Pnum) VALUES('$p_pname', '$p_pnum')";
	if(mysqli_query($conn, $sql)){
		echo "新增成功！";
	}else{
		echo "新增失敗！".mysqli_error($conn);
	}
	mysqli_close($conn);
?>