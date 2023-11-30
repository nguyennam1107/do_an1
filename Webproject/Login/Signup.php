<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Kết nối database
$conn = mysqli_connect("localhost", "root", "", "my_database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    if ($username == "" || $password == "" || $repassword == "") {
        echo "Vui lòng nhập đầy đủ thông tin.";
    } else if ($password != $repassword) {
        echo "Mật khẩu không khớp.";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
        echo "Đăng ký thành công. Vui lòng đăng nhập.";
        header('Location: index.html');
    }
}

?>
</body>
</html>