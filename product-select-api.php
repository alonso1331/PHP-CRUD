<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "product";

	// 建立連線
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//確認連線
	if(!$conn){
		die("連線失敗!".mysqli_connect_error());
	}
	// mysqli_query($conn, "SET NAMES 'utf8'")
	// 撈取資料庫的資料
	$sql = "SELECT * FROM product";
	$result = mysqli_query($conn, $sql);

	// echo mysqli_num_rows($result);
	if(mysqli_num_rows($result) > 0){
		// $row = mysqli_fetch_assoc($result);
		// echo $row["ID"]."<BR>";
		// echo $row["Pname"]."<BR>";
		// echo $row["Pnum"]."<BR>";
		// echo $row["creat_at"]."<BR>";
		while ($row = mysqli_fetch_assoc($result)) {
			//echo $row["ID"].$row["Pname"].$row["Pnum"].$row["creat_at"]."<BR>";
			$mydata[] = $row; //$mydata沒有[]會變成一維陣列，列出來的資料會被覆蓋，沒辦法顯示全部；有[]會變成二維陣列。
		}
		echo json_encode($mydata);//將後端資料轉成json才能給前端用
	}else{
		echo "查無資料";
	}
	mysqli_close($conn);
?>