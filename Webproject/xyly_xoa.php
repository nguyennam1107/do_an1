<?php
session_start();
exit();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["masanpham"])) {
    $conn = new mysqli("localhost", "root", "", "my_sql");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    $masanpham_to_remove = $_GET["masanpham"];
    $ID = $_SESSION['ID'];

    // Thực hiện truy vấn SQL để xóa dữ liệu
    $sql = "DELETE FROM oder WHERE masanpham = '$masanpham_to_remove' AND UserID = '$ID'";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa thành công";
    } else {
        echo "Lỗi khi xóa: " . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
