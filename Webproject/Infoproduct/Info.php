<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="icon" href="Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<?php
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy mã sản phẩm từ tham số truyền qua URL
$masanpham = $_GET['Masanpham'];
// Truy vấn cơ sở dữ liệu để lấy thông tin chi tiết của sản phẩm
$sql = "SELECT * FROM sanpham WHERE Masanpham = '$masanpham'";
$result = $conn->query($sql);
// Đóng kết nối
$conn->close();
?>
<body class="body">
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
            <p style="cursor: pointer;">GIAO HÀNG MIỄN PHÍ CHO CÁC THÀNH VIÊN CỦA ADICLUB&nbsp&nbsp<i
                    class="fa-solid fa-chevron-down"></i></p>
        </div>
        <div class="navbar">
            <a href="../index.php">
                <div class="logo">
                    <div class="_logo">
                        <img src="../database/logo/ALADIN.png"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="main">
                <ul class="subnav">
                    <li>
                        <a href="../Male/pageMale.php"><b>NAM</b></a>
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
                                    <a href="../Male/Shoemale.php" class="a_hover"><b>GIÀY</b></a>
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
                                    <a href="../Ma/Fashionmale.php" class="a_hover"><b>QUẦN ÁO</b></a>
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
                        <a href="../Female/pageFemale.php"><b>NỮ</b></a>
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
                                    <a href="../Female/ShoeFemale.php" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="../Female/FashionFemale.php" class="a_hover"><b>QUẦN ÁO</b></a>
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
                        <a href="../Kids/pageKid.php"><b>TRẺ EM</b></a>
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
                                    <a href="../Female/ShoeFemale.php" class="a_hover"><b>THANH THIẾU NIÊN(8 - 16)</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="../Female/FashionFemale.php" class="a_hover"><b>TRẺ EM(4 - 8)</b></a>
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
                                        <p>LƯU THAY ĐỔI<i class="fa-solid fa-arrow-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <form action="" class="form">
                        <input type="text" name="search" id="search" placeholder="Tìm kiếm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </form>
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
            </div>
        </div>
        <div class="navbar_sub">
            <div class="menu_s">
                <div class="menu_s_sub open">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="menu_s_sub">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <a href="../index.php">
                <div class="logo_1">
                    <div class="_logo_1">
                        <img src="../database/logo/ALADIN.png"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="search_s">
                <div class="search_s_sub">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="search_s_sub">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search_s_sub">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
            </div>
        </div>
        <div class="menu_hid">
            <a href="../index.php">
                <div class="logo_1">
                    <div class="_logo_1">
                        <img src="../database/logo/ALADIN.png"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="wrap">
                <div>
                    <div class="close">
                        <p style="font-size: 20px;"><i class="fa-solid fa-x"></i></p>
                    </div>
                </div>
                <div class="list">
                    <div>
                        <div class="t1 a1">
                            <p><b>Nam</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c1">
                            <ul class="clist">
                                <li><a href="../Male/Shoemale.php">GIÀY</a></li>
                                <li><a href="../Male/Fashionmale.php">QUẦN ÁO</a></li>
                                <li><a href="">PHỤ KIỆN</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1 a2" id="t1">
                            <p><b>Nữ</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c2">
                            <ul class="clist">
                                <li><a href="../Female/ShoeFemale.php">GIÀY</a></li>
                                <li><a href="../Female/FashionFemale.php">QUẦN ÁO</a></li>
                                <li><a href="">PHỤ KIỆN</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1 a3" id="t1">
                            <p><b>TRẺ EM</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c3">
                            <ul class="clist">
                                <li><a href="../Kids/Shoekid.php">GIÀY</a></li>
                                <li><a href="../Kids/Fashionkid.php">QUẦN ÁO</a></li>
                                <li><a href="../Kids/Sportskid.php">THỂ LOẠI</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1" id="t3">
                            <p>THỂ THAO</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div>
                        <div class="t1">
                            <p>CÁC NHÃN HIỆU</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div>
                        <div class="t1">
                            <p>OUTLET</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <div class="list_supporta">
                    <ul class="clist">
                        <li><a href="">TRÌNH THEO DÕI ĐƠN HÀNG</a></li>
                        <li><a href="">My Profile</a></li>
                        <li><a href="">Release Dates</a></li>
                        <li><a href="">Công cụ tìm kiếm cửa hàng</a></li>
                        <li><a href="">Trợ gúp dịch vụ khách hàng</a></li>
                        <li><a href="">Exchanges and returns</a></li>
                        <li><a href="">PHẢN HỒI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav class="post">
        <span>EXPLORE OUR KEY ICONS - <a href="">KHÁM PHÁ ORIGINALS</a></span>
        <i class="fa-solid fa-xmark"></i>
    </nav>
    <div class="main_info">
        <div class="left_content">
            <div class="parent">
                <ul class="back">
                    <li>
                        <a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Trở lại</a>
                    </li>
                    <li>
                        <a href="../index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="../index.php">Original</a>
                    </li>
                    <li>
                        <a href="../index.php">Giày</a>
                        <img src="../images/" alt="">
                    </li>
                </ul>
                <div class="im">
                <?php
                $row = $result->fetch_assoc();
                $image = $row['img'];
                
                 $numberOfImages = 4;
                for ($i = 0; $i < $numberOfImages; $i++) {
                echo '<div class="cover">';
                echo '<img src="../' . $image . '" alt="">';
                echo '</div>';
                }
                ?>
           </div>

                <div class="toggle">
                <div class="im">
                <?php
        // Lặp qua số lượng ảnh cố định một lần nữa nếu cần hiển thị ở một vị trí khác
                for ($i = 0; $i < $numberOfImages; $i++) {
                echo '<div class="cover">';
                echo '<img src="../' . $image . '" alt="">';
               echo '</div>';
               
                 }
                ?>
             </div>
          </div>

                <div class="show_more">
                    <p>Hiện thêm</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class="wrap_n">
                <div class="title_1">
                    <p>Mô tả</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="Ds_info_1">
                    <div>
                        <div class="text">
                            <h1>
                                ĐÔI GIÀY PHONG CÁCH GOLF HỢP TÁC THIẾT KẾ CÙNG BAPE, CÓ SỬ DỤNG CHẤT LIỆU
                                TÁI CHẾ.
                            </h1>
                            <span>
                                Dòng giày adidas Stan Smith đặc trưng khám phá thế giới bất tận của BAPE —
                                kết quả là một thiết kế dành cho sân golf. Với thiết kế phù hợp ở cả sân
                                golf và clubhouse, đôi giày này hòa trộn phong cách tennis cổ điển với các
                                chi tiết phù hợp với bộ môn golf. Thân giày bằng chất liệu tổng hợp và đế
                                ngoài đinh liền bằng cao su cho cảm giác thoải mái và độ bám suốt ngày dài,
                                cùng ba tùy chọn dây giày cho phép bạn thỏa sức thay đổi phong cách tùy tâm
                                trạng. Tất cả đi kèm hộp giày đặc biệt mà bạn sẽ muốn nhìn ngắm mãi về sau.

                                Làm từ một loạt chất liệu tái chế, thân giày có chứa tối thiểu 50% thành
                                phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp
                                của chúng tôi hướng tới chấm dứt rác thải nhựa.
                            </span>
                        </div>
                        <div class="img_Ds">
                            <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2e86d2d18f224468bf21a5ae627d144c_9366/Giay_Golf_BAPE_x_adidas_Stan_Smith_trang_IG5916_01_standard.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="title_2">
                    <p>Thông tin chi tiết</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="Ds_info_2">
                    <div class="text">
                        <h1>
                            ĐÔI GIÀY PHONG CÁCH GOLF HỢP TÁC THIẾT KẾ CÙNG BAPE, CÓ SỬ DỤNG CHẤT LIỆU
                            TÁI CHẾ.
                        </h1>
                        <span>
                            Dòng giày adidas Stan Smith đặc trưng khám phá thế giới bất tận của BAPE —
                            kết quả là một thiết kế dành cho sân golf. Với thiết kế phù hợp ở cả sân
                            golf và clubhouse, đôi giày này hòa trộn phong cách tennis cổ điển với các
                            chi tiết phù hợp với bộ môn golf. Thân giày bằng chất liệu tổng hợp và đế
                            ngoài đinh liền bằng cao su cho cảm giác thoải mái và độ bám suốt ngày dài,
                            cùng ba tùy chọn dây giày cho phép bạn thỏa sức thay đổi phong cách tùy tâm
                            trạng. Tất cả đi kèm hộp giày đặc biệt mà bạn sẽ muốn nhìn ngắm mãi về sau.

                            Làm từ một loạt chất liệu tái chế, thân giày có chứa tối thiểu 50% thành
                            phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp
                            của chúng tôi hướng tới chấm dứt rác thải nhựa.
                        </span>
                    </div>
                </div>
            </div>
            <div class="more_product">
                <h1>
                    COMPLETE THE LOOK
                </h1>
                <div class="image-slider">
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7477b277ec6647919fa241a78609964a_9366/Giay_Alphaboost_V1_mau_xanh_la_IG3129_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Adizero Adios 8</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">
       
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eb1e2d9fd65242d588bddc35bd66e61e_9366/Giay_X_PLR_Boost_Mau_xanh_da_troi_ID9580_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Chạy Giày Adizero Adios 8</p>
                                <p>Nữ Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3c43063276d94cbbb23a74dcd292bd3c_9366/Giay_X_PLR_Boost_mau_xanh_la_ID9579_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày Alphaboost V1</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/91fa955f44f54f3bb9f3634bca6ecb5f_9366/GAZELLE_DJo_IE8503_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af6af2de73824e3bbbe435933a357fde_9366/Giay_Chay_Bo_Switch_FWD_mau_xanh_la_IG0676_HM1.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/520fd9246c6d439eb1d5a9f0842e4976_9366/Giay_X_PLR_Boost_Hong_IF2954_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Originals GAZELLE</p>
                                <p>Nam Originals</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/841d520758dc46879a708b4e316e6691_9366/Giay_X_PLR_Boost_Xam_IF2953_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>NNữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e711a37af3424846b5470558bcd2bcb7_9366/Giay_Ultraboost_Light_Xam_IE1759_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>Nữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/316297fac2c54c689ec192e376e79540_9366/gi%C3%A0y-ultraboost-light.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Ultraboost Light</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="more_product">
                <h1>
                    YOU MAY ALSO LIKE
                </h1>
                <div class="image-slider">
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7477b277ec6647919fa241a78609964a_9366/Giay_Alphaboost_V1_mau_xanh_la_IG3129_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Adizero Adios 8</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eb1e2d9fd65242d588bddc35bd66e61e_9366/Giay_X_PLR_Boost_Mau_xanh_da_troi_ID9580_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Chạy Giày Adizero Adios 8</p>
                                <p>Nữ Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3c43063276d94cbbb23a74dcd292bd3c_9366/Giay_X_PLR_Boost_mau_xanh_la_ID9579_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày Alphaboost V1</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/91fa955f44f54f3bb9f3634bca6ecb5f_9366/GAZELLE_DJo_IE8503_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af6af2de73824e3bbbe435933a357fde_9366/Giay_Chay_Bo_Switch_FWD_mau_xanh_la_IG0676_HM1.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/520fd9246c6d439eb1d5a9f0842e4976_9366/Giay_X_PLR_Boost_Hong_IF2954_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Originals GAZELLE</p>
                                <p>Nam Originals</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/841d520758dc46879a708b4e316e6691_9366/Giay_X_PLR_Boost_Xam_IF2953_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>NNữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e711a37af3424846b5470558bcd2bcb7_9366/Giay_Ultraboost_Light_Xam_IE1759_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>Nữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/316297fac2c54c689ec192e376e79540_9366/gi%C3%A0y-ultraboost-light.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Ultraboost Light</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right_content">
            <div>
            
             <p>Originals</p>
             <h1><?php echo $row['Tensanpham']; ?></h1>
             <p><?php echo number_format($row['Gia']); ?>₫</p>
            </div>
            <div>
                <p style="font-weight: 300;">
                    Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ
                    trường hợp pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và
                    khuyến mãi nào. Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.
                </p>
            </div>
            <div>
                <p>Cloud White / Cloud White / Green</p>
            </div>
            <div>
                <h3>
                    MỞ BÁN VÀO SATURDAY, OCTOBER 21ST TẠI 10:00
                </h3>
                <div class="button">
                    <a href="">
                        <div class="_main_button">
                        <?php echo '<a href="../gh.php?ID='.$masanpham.'"><p style="color: white;" >Bỏ Vào Giỏ Mua BỎ Vào Giỏ></p></a>';
                            ?>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <span>
                    <i class="fa-solid fa-truck-fast"></i> <a href=""> FREE SHIPPING FOR ADICLUB MEMBERS</a>
                </span>
                <span>
                    <i class="fa-solid fa-right-left"></i> <a href=""></i> HOÀN TRẢ DỄ DÀNG</a>
                </span>
            </div>
        </div>
    </div>
    <footer>
        <div class="members">
            <div class="over">
                <h1>TRỞ THÀNH HỘI VIÊN & HƯỞNG ƯU ĐÃI 15%</h1>
                <div class="button">
                    <a href="../Login/Login.php">
                        <div class="_main_button">
                            <p>ĐĂNG KÝ MIỄN PHÍ <i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="opinion">
            <div class="wrap">
                <h1 style="font-size: 20px;">Ý KIẾN CỦA BẠN</h1>
                <p>
                    Chúng tôi cố gắng phục vụ bạn tốt hơn và đánh giá cao phản hồi của bạn
                </p>
            </div>
        </div>
        <div class="FAQ">
            <div class="wrap">
                <ul class="FAQ_UL">
                    <li><a href="">Công cụ của cửa hàng</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Cơ hội nghề nghiệp</a></li>
                    <li><a href="">Trình theo dõi đơn hàng</a></li>
                    <li><a href="">Trợ Giúp Dịch Vụ Khách Hàng</a></li>
                    <li><a href="">Sơ đồ trang web</a></li>
                    <li><a href="">Giao hàng</a></li>
                </ul>
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
                <li><a href="">© Nhóm 2 DHTI15A21HN</a></li>
            </ul>
        </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="Info.js"></script>
</body>

</html>