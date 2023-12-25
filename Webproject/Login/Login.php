<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="stylesheet" href="Login.css">
</head>
<?php
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Tạo bảng users nếu chưa tồn tại
$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    UserName VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql_create_table)) {
    echo "Bảng users đã được tạo hoặc đã tồn tại.";
} else {
    echo "Lỗi tạo bảng users: " . mysqli_error($conn);
}

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['login'])) {
        if (empty($username) || empty($password)) {
            echo "Vui lòng nhập tên đăng nhập và mật khẩu.";
        } else {
            $sql_select = "SELECT * FROM users WHERE UserName='$username' AND Password='$password'";
            $result = mysqli_query($conn, $sql_select);

            if (mysqli_num_rows($result) > 0) {
                echo "Đăng nhập thành công!";
                header('Location: ../index.html');
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
        <div class="Login-box">
            <h2>LOGIN</h2>
            <form action="Login.php" method="post" >
                <div class="login-container">
                    <label for="username">Email hoặc số điện thoại</label>
                    <input type="text" name="username" placeholder="Email hoặc số điện thoại" required>
                </div>
                <div class="login-container">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="bottom">
                    <div style="display:flex ;justify-content: space-around;">
                        <input type="submit" name="login" value="Đăng Nhập">
                        <input type="submit" name="register" value="Đăng Ký">
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