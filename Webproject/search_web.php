<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="icon" href="./Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./Female/FashionFemale.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
session_start();
include 'connect.php'; 
$total=0;
$conn = mysqli_connect("localhost", "root", "", "my_sql");
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
$sql = "SELECT *
FROM sanpham
INNER JOIN chitietquanao ON sanpham.Masanpham = chitietquanao.MaSanPham;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $total=$total+ $row["Gia"];
    }}
    if (!isset($_SESSION['sql_search'])) {
        $sql = "SELECT * FROM sanpham INNER JOIN chitietquanao ON sanpham.Masanpham = chitietquanao.MaSanPham";
    } else {
        $sql = $_SESSION['sql_search'];
    }
    ?>
<body id="body">
    <div class="no">
    </div>
    <div class="ship">
        <div class="wrap">
            <div>
                <div class="x">
                    <p style="font-size: 20px;"><i class="fa-solid fa-x"></i></p>
                </div>
            </div>
            <div class="aboutship">
                <div>
                    <h1>GIAO HÀNG MIỄN PHÍ CHO THÀNH VIÊN CỦA ADICLUB</h1>
                    <br>
                    <p>Đăng ký thành viên adiClub để hưởng thụ dịch vụ giao hàng miễn phí! Hoặc bạn chỉ được nhận ưu đãi
                        miễn phí giao hàng với hóa đơn có trị giá ít nhất 1.6 triệu đồng</p>
                    <br>
                    <a href="">THAM GIA NGAY</a>
                </div>
                <div>
                    <h1>TRẢ HÀNG DỄ DÀNG</h1>
                    <br>
                    <p>Nếu bạn không hài lòng với đơn hàng của mình, bạn có thể được hoàn lại tiền. Vui lòng xem Chính
                        Sách Trả Hàng của chúng tôi để biết thêm chi tiết.</p>
                    <br>
                    <a href="">TRẢ HÀNG DỄ DÀNG</a>
                </div>
            </div>
        </div>
    </div>
    <header class="title">
        <div class="text_animation">
            <p style="cursor: pointer;">GIAO HÀNG MIỄN PHÍ CHO CÁC THÀNH VIÊN CỦA Nhóm 2 DHTI15A21HN&nbsp&nbsp<i
                    class="fa-solid fa-chevron-down"></i></p>
        </div>
        <div class="navbar">
            <a href="./index.php">
                <div class="logo">
                    <div class="_logo">
                        <img src="./database/logo/ALADIN.png" alt="">
                    </div>
                </div>
            </a>
            <div class="main">
                <ul class="subnav">
                    <li>
                        <a href="./Male/pageMale.php"><b>NAM</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Member excluslves</a>
                                    <a href="" class="a_hover">Những mặt hàng bán chạy nhất tuần</a><br>
                                    <a href="" class="a_hover">Adizero</a>
                                    <a href="" class="a_hover">Samba</a>
                                    <a href="" class="a_hover">Gazelle</a>
                                    <a href="" class="a_hover">Ultraboost</a>
                                    <a href="" class="a_hover">Stan Smith</a>
                                    <a href="" class="a_hover">Superstar</a>
                                    <a href="" class="a_hover">Adilette</a>
                                </div>
                                <div class="content_2">
                                    <a href="./Female/ShoeFemale.php" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Bóng đá</a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">NGoài trời</a>
                                    <a href="" class="a_hover">Bóng rổ</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="./Female/Fashionmale.php" class="a_hover"><b>QUẦN ÁO</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo polo</a>
                                    <a href="" class="a_hover">Áo Jersay</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Quần bò</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Áo thun Compression layers</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>PHỤ KIỆN</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                    <a href="" class="a_hover">Bóng</a>
                                    <a href="" class="a_hover">Nẹp ỐNg Chân & Băng Buộc</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Bóng đá</a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Basketball</a>
                                    <a href="" class="a_hover">Bơi lội</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả giày nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả quần áo nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả phụ kiện dành cho nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả Nam</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Our Men's Better Choices Rage</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="./Female/pageFemale.php"><b>NỮ</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Member excluslves</a>
                                    <a href="" class="a_hover">Những mặt hàng bán chạy nhất tuần</a><br>
                                    <a href="" class="a_hover">Adizero</a>
                                    <a href="" class="a_hover">Samba</a>
                                    <a href="" class="a_hover">Gazelle</a>
                                    <a href="" class="a_hover">Ultraboost</a>
                                    <a href="" class="a_hover">Stan Smith</a>
                                    <a href="" class="a_hover">Superstar</a>
                                    <a href="" class="a_hover">FORUM</a>
                                    <a href="" class="a_hover">STELLA MACCARTNEY</a>
                                </div>
                                <div class="content_2">
                                    <a href="./Female/ShoeFemale.php" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="./Female/FashionFemale.php" class="a_hover"><b>QUẦN ÁO</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo không tay</a>
                                    <a href="" class="a_hover">Áo Nỉ</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Leggings</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Váy liền</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>PHỤ KIỆN</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Tập Yoga</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả giày nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả quần áo nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả phụ kiện dành cho nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover"> Tất cả Nữ</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Tất cả đồ dành cho nữ </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="./Kids/pageKid.php"><b>TRẺ EM</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Mặt hàng bán chạy trong tuần</a><br>
                                    <a href="" class="a_hover">Hiệu năng</a>
                                    <a href="" class="a_hover">Bộ sưu tập Hellokitty</a>
                                    <a href="" class="a_hover">Originals</a>
                                    <a href="" class="a_hover">Lego</a>
                                    <a href="" class="a_hover">adicolor</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                    <a href="" class="a_hover">Superstar</a><br>
                                    <a href="" class="a_hover">MEMBERS WEAK</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>THANH THIẾU NIÊN(8 - 16)</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>TRẺ EM(4 - 8)</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo không tay</a>
                                    <a href="" class="a_hover">Áo Nỉ</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Leggings</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Váy liền</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>TRẺ NHỎ VÀ TRẺ MỚI BIẾT ĐI (1 - 4)</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Tập Yoga</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ em</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho thanh thiếu niên</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ em</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ nhỏ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover"> Giảm Giá</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho thể thao</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">THỂ THAO</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href="">CÁC NHÃN HIỆU</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href="">SẮP & MỚI RA MẮT</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href=""><b>GIẢM GIÁ</b></a>
                        <div class="sub_content">

                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_help">
                <div class="help">
                    <ul class="help_ul">
                        <li><a href="">Trợ giúp</a></li>
                        <li><a href="">Trình theo dõi đơn hàng</a></li>
                        <li><a href="">Đăng ký hội viên</a></li>
                        <li class="language_select">
                            <i class="fa-solid fa-chevron-down"></i>
                            <div class="_language_change">
                                <div>
                                    <p>Chọn ngôn ngữ</p>
                                </div>
                                <select name="language" id="language">
                                    <option value="Tiếng việt">Tiếng Việt</option>
                                    <option value="Tiếng Anh">Tiếng Anh</option>
                                </select>
                                <div class="button">
                                    <div class="_main_button">
                                        <a href="">LƯU THAY ĐỔI<i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="search">
                <form action="search.php" method="get" class="search-form">
                    <div class="search-container">
                        <input type="text" name="search" id="search" placeholder="Tìm kiếm">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
            </div>
        </div>
    </header>
    <div class="none"></div>
    <nav class="post">
        <span>EXPLORE OUR KEY ICONS - <a href="">KHÁM PHÁ ORIGINALS</a></span>
        <i class="fa-solid fa-xmark"></i>
    </nav>

    <nav>
        <h1>Thông tin tìm kiếm </h1>
        <p style="width: 60%; font-size: 20px;">Nếu bạn đang tìm kiếm những món đồ  thật phong cách, thể thao và
            thoải mái, thì dòng sản phẩm ALADIN dành cho  tự tin giành ngôi vương. Cho dù bạn đang đến phòng tập thể
            dục, ra sân hay chỉ thư giãn, bạn sẽ tìm thấy lựa chọn hoàn hảo của mình.
        </p>
        <div class="Menubar">
            <ul>
                
                <li style="font-weight: bold;"><a href="">THỜI TRANG</a></li>
                <li><a href="">PHỤ KIỆN</a></li>
                <li><a href="">HÀNG MỚI</a></li>
                <li><a href="">TẤT CẢ CÁC SẢN PHẨM NAM</a></li>
            </ul>
        </div>
    </nav>
    <style>
      .product-card {
        width: 23%; /* Đặt chiều rộng để hiển thị 4 sản phẩm trên mỗi hàng */
        margin: 10px;
        box-sizing: border-box;
    }

    .product-card a {
        text-decoration: none; /* Loại bỏ đường kẻ dưới khi làm việc với các liên kết */
        color: #fff;
    }

    .product-card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    .product-image {
        width: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều rộng của sản phẩm */
        border-radius: 8px 8px 0 0; /* Bo góc trên của hình ảnh */
    }

    /* Style for the product info */
    .product-info {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 0 0 8px 8px; /* Bo góc dưới của thông tin sản phẩm */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .product-info h2 {
        font-size: 20px;
        color: #CCCC99;
        margin: 0;
    }

    .product-info p {
        font-size: 16px;
        margin: 5px 0;
    }
</style>

<?php
include 'displayProduct.php';
$productsPerRow = 4;
$productCount = 0;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($productCount % $productsPerRow == 0) {
            echo '<div class="row">'; // Open a new row for every 4 products
        }

        displayProduct($row);

        $productCount++;

        if ($productCount % $productsPerRow == 0) {
            echo '</div>'; // Close the row after every 4 products
        }
    }

    // Close the last row if it's not already closed
    if ($productCount % $productsPerRow != 0) {
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
session_destroy();
?>


    <script>
        var parentElements = document.querySelectorAll(".myImage");

        parentElements.forEach(function (parentElement) {
            var imgElement = parentElement.querySelector(".imgg");
            var listImgElement = parentElement.querySelector(".list-img");

            // Lưu trữ src ban đầu của imgElement vào một biến
            var originalSrc = imgElement.src;

            parentElement.addEventListener("mouseover", function (event) {
                if (event.target.classList.contains("img1") || event.target.classList.contains("img2") || event.target.classList.contains("img3") || event.target.classList.contains("img4") || event.target.classList.contains("img5") || event.target.classList.contains("img6")) {
                    imgElement.src = event.target.src;
                }
                listImgElement.style.display = "flex";
            });

            parentElement.addEventListener("mouseout", function () {
                // Sử dụng biến originalSrc để thiết lập lại src
                imgElement.src = originalSrc;
                listImgElement.style.display = "none";
            });
        });

    </script>


    <footer>
        <div class="members">
            <div class="over">
                <h1>TRỞ THÀNH HỘI VIÊN & HƯỞNG ƯU ĐÃI 15%</h1>
                <div class="button">
                    <div class="_main_button">
                        <a href="">ĐĂNG KÝ MIỄN PHÍ <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="over">
                <div class="properties">
                    <h1>SẢN PHẨM</h1>
                    <a href="" class="a_hover">Giày</a>
                    <a href="" class="a_hover">Quần áo</a>
                    <a href="" class="a_hover">Phụ kiện</a>
                    <a href="" class="a_hover">Hàng Mới Về</a>
                    <a href="" class="a_hover">Release Dates</a>
                    <a href="" class="a_hover">Member exclusives</a>
                    <a href="" class="a_hover">Outlet</a>
                </div>
                <div class="properties">
                    <h1>THỂ THAO</h1>
                    <a href="" class="a_hover">Chạy</a>
                    <a href="" class="a_hover">Đánh Gold</a>
                    <a href="" class="a_hover">Tập luyện</a>
                    <a href="" class="a_hover">Bóng đá</a>
                    <a href="" class="a_hover">Bóng rổ</a>
                    <a href="" class="a_hover">Quần vợt</a>
                    <a href="" class="a_hover">Ngoài trời</a>
                    <a href="" class="a_hover">Bơi lội</a>
                </div>
                <div class="properties">
                    <h1>BỘ SƯU TẬP</h1>
                    <a href="" class="a_hover">IVY PARK</a>
                    <a href="" class="a_hover">Giày adidas Pharrell Williams</a>
                    <a href="" class="a_hover">Giày Ultra Boost</a>
                    <a href="" class="a_hover">Giày Pureboost</a>
                    <a href="" class="a_hover">Predator</a>
                    <a href="" class="a_hover">X</a>
                    <a href="" class="a_hover">Copa</a>
                    <a href="" class="a_hover">Continental 80</a>
                    <a href="" class="a_hover">Giày Superstar</a>
                    <a href="" class="a_hover">Giày Stan Smith</a>
                    <a href="" class="a_hover">nmd</a>
                    <a href="" class="a_hover">ZX</a>
                </div>
                <div class="properties">
                    <h1>THÔNG TIN VỀ CÔNG TY</h1>
                    <a href="" class="a_hover">Giới Thiệu Về Chúng Tôi</a>
                    <a href="" class="a_hover">Cơ Hội Nghề Nghiệp</a>
                    <a href="" class="a_hover">Tin tức</a>
                    <a href="" class="a_hover">adidas Blog</a>
                </div>
                <div class="properties">
                    <h1>HỖ TRỢ</h1>
                    <a href="" class="a_hover">Trợ Giúp Dịch Vụ Khách Hàng</a>
                    <a href="" class="a_hover">Công cụ tìm kiếm cửa hàng</a>
                    <a href="" class="a_hover">Biểu Đồ Kích Cỡ</a>
                    <a href="" class="a_hover">Thanh toán</a>
                    <a href="" class="a_hover">Giao hàng</a>
                    <a href="" class="a_hover">Trả Hàng & Hoàn Tiền</a>
                    <a href="" class="a_hover">khuyến mãi</a>
                    <a href="" class="a_hover">Sơ đồ trang web</a>
                </div>
                <div class="properties">
                    <h1>THEO DÕI CHÚNG TÔI</h1>
                    <a href="" class="a_hover"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-telegram"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="policy">
            <ul>
                <li><a href="">Cài Đặt Cookie</a></li>
                <li><a href="">Chính sách Bảo mật</a></li>
                <li><a href="">Điều Khoản và Điều Kiện</a></li>
                <li><a href="">XUẤT BẢN BỞI</a></li>
                <li><a href="">© 2020 Công ty TNHH Team 15 Việt Nam</a></li>
            </ul>
        </div>
    </footer>
    <script>
        document.body.onload = function () {
            text_animation();
            open_ship();
            change_language();
            close_post();
            hidden_title();
        }

        // tạo hiệu ứng chuyển đổi dòng text
        function text_animation() {
            let list = [
                "HÀNG UNETI CHẤT LƯỢNG CAO ",
                "ALADIN - ĐỒNG HÀNH TRÊN CON ĐƯỜNG CHINH PHỤC",
                "GIAO HÀNG MIỄN PHÍ CHO CÁC THÀNH VIÊN Nhóm 2 DHTI15A21HN"
            ];
            var i = 0;

            setInterval(() => {
                let text = document.querySelector(".text_animation>p");
                var newText = list[i];
                text.classList.add("animate");
                text.innerHTML = newText + '&nbsp&nbsp<i class="fa-solid fa-chevron-down"></i>';
                text.addEventListener("animationend", function () {
                    text.classList.remove("animate");
                });
                i++;
                if (i > 2) {
                    i = 0;
                }
            }, 5000);
        }
        // open ship
        function open_ship() {
            var p = document.querySelector(".text_animation>p");
            var block_scroll = document.getElementById("body");
            var div_hidden = document.querySelector(".no");
            var bar = document.querySelector(".ship");
            var close = document.querySelector(".x");
            p.addEventListener("click", () => {
                div_hidden.style.display = "block";
                block_scroll.style.overflow = "hidden";
                bar.classList.add("ani");
                bar.style.top = "0px";
                bar.addEventListener("animationend", function () {
                    bar.classList.remove("ani");
                });
            });

            div_hidden.addEventListener("click", () => {
                div_hidden.style.display = "none";
                block_scroll.style.overflow = "scroll";
                bar.classList.add("ani_out");
                bar.style.top = "-300px";;
                bar.addEventListener("animationend", function () {
                    bar.classList.remove("ani_out");
                });
            })

            close.addEventListener("click", () => {
                div_hidden.style.display = "none";
                block_scroll.style.overflow = "scroll";
                bar.classList.add("ani_out");
                bar.style.top = "-300px";
                bar.addEventListener("animationend", function () {
                    bar.classList.remove("ani_out");
                });
            })
        }
        // gọi hàm chuyển ngôn ngữ
        function change_language() {
            var language = document.querySelector(".language_select>i");
            //var isblock = false;
            language.addEventListener("click", function () {
                var el = document.querySelector(".language_select>div");
                if (el.className == "_language_change") {
                    el.classList.remove("_language_change");
                    el.classList.add("language_change");
                    language.style.transform = "rotate(-180deg)";
                } else {
                    el.classList.remove("language_change");
                    el.classList.add("_language_change");
                    language.style.transform = "rotate(0)"
                }
            });
        }

        // đóng quảng cáo
        function close_post() {
            var close = document.querySelector(".post>i");
            close.addEventListener("click", function () {
                var div = document.querySelector(".post");
                if (div.style.display = "block") {
                    div.style.display = "none";
                }
            });
        }

        // ẩn thanh title
        function hidden_title() {
            var previousScrollPosition = window.scrollY;
            var Title = document.querySelector(".title");

            // Đăng ký sự kiện scroll
            window.addEventListener("scroll", function () {
                var currentScrollPosition = window.scrollY;

                if (currentScrollPosition < previousScrollPosition) {
                    if (Title.style.top != "0px") {
                        // Scroll lên (scroll up)
                        Title.classList.add("scroll_up");
                        Title.style.top = "0px";
                        Title.addEventListener("animationend", function () {
                            Title.classList.remove("scroll_up");
                        });
                    }
                } else if (currentScrollPosition >= previousScrollPosition) {
                    // Scroll xuống (scroll down)
                    if (Title.style.top != "-120px") {
                        Title.classList.add("scroll_down");
                        Title.style.top = "-120px"; // Ẩn thanh tiêu đề bằng cách đặt top âm
                        Title.addEventListener("animationend", function () {
                            Title.classList.remove("scroll_down");
                        });
                    }
                }
                previousScrollPosition = currentScrollPosition;
            });
        }
    </script>
</body>

</html>