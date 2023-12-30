<?php
 session_start();
  $conn = mysqli_connect("localhost", "root", "", "my_sql");

  if ($conn->connect_error) {
      die("Kết nối không thành công: " . $conn->connect_error);
  }  
  $masanpham = $_GET['ID'];
  $ID=$_SESSION['ID'];
if(isset($_SESSION['ID'])) {
    $string = "INSERT INTO giohang (UserID, Masanpham) VALUES ('$ID', '$masanpham')";
    mysqli_query($conn, $string);
    $conn->close();
    header('Location: cart.php');
    exit(); 
} else {
    header("Location: http://localhost/do_an1/Webproject/Login/Login.php");
    exit();
}
?>