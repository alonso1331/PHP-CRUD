<?php
  $u_pname = $_POST["pname"];
  $u_pnum = $_POST["pnum"];
  $u_id = $_POST["ID"];

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
  //更新資料
  $sql = "UPDATE product SET Pname = '$p_pname', Pnum = '$p_pnum'  WHERE ID = '$u_id'";

  if(mysqli_query($conn, $sql)){
    echo "更新成功!";
  }else{
    echo "更新失敗!";
  }
  mysqli_close($conn);
?>