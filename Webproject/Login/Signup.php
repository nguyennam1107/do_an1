<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
require_once 'connect.php';
$conn = mysqli_connect("localhost", "root", "", "my_sql");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email= $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    if (isset($_POST['login'])) {
        header("Location: Login.php");
        exit();
    }
    if ($username == "" || $password == "" || $repassword == "") {
        echo "Vui lòng nhập đầy đủ thông tin.";
    } else if ($password != $repassword) {
        echo "Mật khẩu không khớp.";
    } else {
        $sql = "INSERT INTO users (email,username, password) VALUES ('$email','$username', '$password')";
        mysqli_query($conn, $sql);
        echo "Đăng ký thành công. Vui lòng đăng nhập.";
        header('Location: ../index.php');
    }
}

?>
<body>
    <div class="container" sty>
        <div class="img">
            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="Login-box" style="height: 600px; max-height: 100%">
            <h2>SIGN UP</h2>
            <form method="post" action="Signup.php" style="margin-top: -30px;">
                <div class="login-container">
                    <label for="email">Email hoặc số điện thoại</label>
                    <input type="text" name="email" placeholder="Email hoặc số điện thoại" autofocus>
                </div>
                <div class="login-container">
                    <label for="email">Tên đăng nhập</label>
                    <input type="text" name="username" placeholder="Tên đăng nhập">
                </div>
                <div class="login-container">
                    <label for="email">Mật khẩu</label>
                    <input type="password" name="password" placeholder="Mật khẩu">
                </div>
                <div class="login-container">
                    <label for="email">Nhập lại mật khẩu</label>
                    <input type="password" name="repassword" placeholder="Nhập lại mật khẩu">
                </div>
                <div class="bottom">
                    <input type="submit" name="signup" value="Đăng ký">
                    <input type="submit" name="login" value="Đăng Nhập">
                </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>