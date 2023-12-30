<?php
session_start();
include 'connect.php';
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
// Kiểm tra xem có dữ liệu tìm kiếm được gửi hay không
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
   
    // Sử dụng truy vấn SQL để tìm kiếm theo Tensanpham
    $sql = "SELECT chitietquanao.*, sanpham.*
    FROM chitietquanao
    JOIN sanpham ON chitietquanao.Masanpham = sanpham.Masanpham
    WHERE sanpham.Tensanpham LIKE '%$searchTerm%'
    ";
    $result = $conn->query($sql);
    $_SESSION['sql_search']=$sql;
    // Kiểm tra xem có kết quả hay không
    if ($result->num_rows > 0) {
        // Hiển thị kết quả
        echo "<h2>Kết quả tìm kiếm cho: " . htmlspecialchars($searchTerm) . "</h2>";
        while ($row = $result->fetch_assoc()) {
            header("Location: admin_list.php");
            exit();
        }
    } else {
        echo "Không tìm thấy kết quả.";
    }
} else {
    echo "Nhập từ khóa để tìm kiếm.";
}

// Đóng kết nối CSDL
$conn->close();
?>
