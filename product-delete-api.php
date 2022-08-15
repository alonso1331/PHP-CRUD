<?php
	$d_id = $_POST["ID"];

	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "product";

	//建立連線
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//確認連線
	if(!$conn){
		die("連線失敗!".mysqli_connect_error());
	}
	//刪除資料
	$sql = "DELETE FROM product WHERE ID = '$d_id'";
	if(mysqli_query($conn, $sql)){
		echo "刪除成功!";
	}else{
		echo "刪除失敗!";
	}
	mysqli_close($conn);
?>