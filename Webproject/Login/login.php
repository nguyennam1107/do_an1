<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include 'connect.php'; // Include the database connection file

session_start();
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['register'])) {
        header("Location: Signup.php");
        exit();
    }
    if (isset($_POST['login'])) {
        if (empty($username) || empty($password)) {
            echo "Vui lòng nhập tên đăng nhập và mật khẩu.";
        } else {
            $sql_select = "SELECT * FROM users WHERE UserName='$username' AND Password='$password'";
            $result = mysqli_query($conn, $sql_select);

            if (mysqli_num_rows($result) > 0) {
                $row= $result->fetch_assoc();
                $_SESSION['ID'] = $row['UserID'];
                echo "Đăng nhập thành công!";
                header('Location: ../index.php');
            } else {
                echo "Sai tên đăng nhập hoặc mật khẩu.";
            }
        }
    }
}
mysqli_close($conn);
?>
<body>
    <div class="container">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="Login-box" style="height: 450px; max-height: 100%">
            <h2>LOGIN</h2>
            <form action="Login.php" method="post" >
                <div class="login-container">
                    <label for="username">Email hoặc số điện thoại</label>
                    <input type="text" name="username" placeholder="Email hoặc số điện thoại" autofocus>
                </div>
                <div class="login-container">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" placeholder="Mật khẩu">
                </div>
                <div class="bottom">
                    <div style="width: 100%; display: flex; justify-content: space-between">
                        <input style="flex: 0.45" type="submit" name="login" value="Đăng Nhập">
                        <input style="flex: 0.45" type="submit" name="register" value="Đăng Ký">
                    </div>
                    <div class="forgot">
                        <a href="">
                            <div>
                                <p>Bạn quên mật khẩu?</p>
                            </div>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>