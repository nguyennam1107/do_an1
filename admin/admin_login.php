<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/sign-form.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <title>ALa&amp;DIN | Sign in</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form method="post" class="sign-in-form" action="admin_login.php">
                <h2 class="title">Sign in</h2>
                <div class="form-group input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group  input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" value="Login" class="btn">
                
            </form>
            <form action="" class="sign-up-form">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>ALADIN</h3>
                    <img style="max-width: 100%; width: 600px; height: 200px; object-fit: cover; margin: 20px 0;"
                        src="./images/ALADIN.png" alt="">
                    <p>The ALADIN platform offers streamlined management and statistics functionalities for effective business operations.</p>
                   <a style="color: white;" href="../index.html"><button class="btn" id="sign-up-btn">Shop</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
session_start();
include 'connect.php'; 
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Truy vấn SQL để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND admin = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Đăng nhập thành công, chuyển hướng đến trang quản trị
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>