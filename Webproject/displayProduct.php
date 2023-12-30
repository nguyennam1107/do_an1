<?php
function displayProduct($row) {
    echo '<div class="product-card" >';
    echo '<a href="./Infoproduct/info.php?Masanpham=' . $row['Masanpham'] . '">';
    echo '<img src="' . $row["img"] . '" alt="' . $row["Tensanpham"] . '" class="product-image">';
    echo '<div class="product-info">';
    echo '<h2 style="font-size: 20px; color: #CCCC99;">' . $row["Tensanpham"] . '</h2>';
    echo '<p >Giá: $' . $row["Gia"] . '</p>';
    echo '<p >Số lượng: ' . $row["Soluong"] . '</p>';
    echo '<p >Màu sắc: ' . $row["MauSac"] . '</p>';
    echo '<p >Size: ' . $row["Size"] . '</p>';
    echo '<p >Nhà sản xuất: ' . $row["NhaSanXuat"] . '</p>';
    echo '</a>';
    echo '</div>';
    echo '</div>';
}
?>