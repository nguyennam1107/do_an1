<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Thông tin kết nối cơ sở dữ liệu
$host = 'localhost';
$dbname = 'my_sql';
$username = 'root';
$password = '';

try {
    // Kết nối cơ sở dữ liệu
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Đặt chế độ lỗi để hiển thị thông báo lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thực hiện các truy vấn SQL ở đây

} catch (PDOException $e) {
    // Xử lý nếu có lỗi kết nối
    echo "Lỗi kết nối: " . $e->getMessage();
    die();
}

// Đóng kết nối sau khi hoàn thành công việc
$conn = null;
?>

</body>
</html>