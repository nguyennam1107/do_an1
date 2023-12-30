<?php
function displayProduct($row) {
    echo '<div class="product-card" style="font-family: Arial, sans-serif; font-size: 16px;">';
    echo '<img src="' . $row["img"] . '" alt="' . $row["Tensanpham"] . '" class="product-image">';
    echo '<div class="product-info" style ="background-color: rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">';
    echo '<h2 style="font-size: 20px; color: #CCCC99;">' . $row["Tensanpham"] . '</h2>';
    echo '<p style="font-size: 18px;">Giá: $' . $row["Gia"] . '</p>';
    echo '<p style="font-size: 16px;">Số lượng: ' . $row["Soluong"] . '</p>';
    echo '<p style="font-size: 16px;">Màu sắc: ' . $row["MauSac"] . '</p>';
    echo '<p style="font-size: 16px;">Size: ' . $row["Size"] . '</p>';
    echo '<p style="font-size: 16px;">Nhà sản xuất: ' . $row["NhaSanXuat"] . '</p>';
    echo '<a href="http://localhost/do_an1/admin/admin_sua.php?masanpham=' . $row["Masanpham"]  . '" <p style ="font-size: 14px; color: #ff0000; text-decoration: none;">Chỉnh Sửa</p></a>';
    echo '</div>';
    echo '</div>';
}
?>