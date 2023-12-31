<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    <link rel="icon" href="../Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="ShoeFemale.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php 
session_start();
    $conn = mysqli_connect("localhost", "root", "", "my_sql");
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}?>
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
                                    <a href="../Male/Fashionmale.php" class="a_hover"><b>QUẦN ÁO</b></a>
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
                        <a href="pageFemale.php"><b>NỮ</b></a>
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
                                    <a href="ShoeFemale.php" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="FashionFemale.php" class="a_hover"><b>QUẦN ÁO</b></a>
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
    </header>
    <div class="none"></div>
    <nav class="post">
        <span>EXPLORE OUR KEY ICONS - <a href="">KHÁM PHÁ ORIGINALS</a></span>
        <i class="fa-solid fa-xmark"></i>
    </nav>

    <header>
        <h1>GIÀY NỮ </h1>
        <p style="font-size: 20px; width: 60%;">
            Từ giày Superstars cho đến dép dành cho nữ, bạn có thể tìm thấy những lựa chọn hoàn hảo cho mức độ hoạt động của mình. 
            Dù bạn đang luyện tập hay thư giãn, bạn sẽ được chuẩn bị sẵn sàng với các tính năng ưu việt dành cho vận động.
        </p>
        <div class="Menubar">
            <ul>
                <li style="font-weight: bold;"><a href="">GIÀY</a></li>
                <li><a href="FashionFemale.php">THỜI TRANG</a></li>
                <li><a href="">BÓNG ĐÁ</a></li>
                <li><a href="">BÓNG RỔ</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="row row1">
        <?php
            $sql = "SELECT * 
            FROM sanpham
            INNER JOIN chitietquanao ON sanpham.Masanpham = chitietquanao.MaSanPham
            WHERE chitietquanao.LoaiQuanAo = 'giay'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="myImage row12">';
                        echo '<div style="position: relative;">';
                        echo '<a href="../Infoproduct/info.php?Masanpham=' . $row['Masanpham']. '">';
                        echo '<img class="imgg" src=".' . $row['img'] . '" alt="Ảnh mặc định">';
                        echo '<p style="position: absolute; bottom: 20px; left: 5px; background-color: #fff;"<sup>' . number_format($row['Gia']) . '$</sup></p>';
                        echo '</div>';
                        echo '<div class="list-img" style="display: none; list-style: none; z-index: 999;">';
                        echo '<img class="img1" src=".' . $row['img'] . '" alt="">';
                        echo '<img style="padding: 0 5px 0 10px;" class="img2" src=".' . $row['img'] . '" alt="">';
                        echo '<img style="padding: 0 10px 0 5px;" class="img3" src=".' . $row['img'] . '" alt="">';
                        echo '<img class="img4" src=".' . $row['img'] . '" alt="">';
                        echo '</a>';
                        echo '</div>';
                        echo '<p>' . $row['Tensanpham'] . '<br><span style="color: #868687;">Nam Sportswear</span><br><span style="color: #868687;">4 colours</span>&nbsp;• mới</p>';
                        echo '</div>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            <script>
                
                var parent = document.getElementById("myImage");
                var img = document.getElementById("img");
                var listImg = document.getElementById("list-img");

                parent.addEventListener("mouseover", function (event) {
                    if (event.target.tagName === "IMG") {
                        img.src = event.target.src;
                    }
                    listImg.style.display = "flex";
                });

                parent.addEventListener("mouseout", function () {
                    img.src = "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af9273bcd4b34ccc9c505d185afaf1e3_9366/Giay_DJa_Bong_Firm_Ground_Copa_Pure_II.1_Mau_xanh_da_troi_IE4894_22_model.jpg";
                    listImg.style.display = "none";
                });
                
            </script>
            <div class="myImage row12">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a38b235c107243918be2066d37417faf_9366/Giay_X_PLRBOOST_Mau_tim_ID9576_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">4.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/48bd23c53b1645369de5af9c00ecd416_9366/Giay_X_PLRBOOST_Xam_HP3139_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bf7a1362b0a9455192d1af9c00c5fdeb_9366/Giay_X_PLRBOOST_Mau_xanh_da_troi_HP3143_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/50d56745e873415bbbb5af8e01125560_9366/Giay_X_PLRBOOST_Mau_tim_ID9443_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a38b235c107243918be2066d37417faf_9366/Giay_X_PLRBOOST_Mau_tim_ID9576_01_standard.jpg"
                        alt="">
                
                </div>
                <p>Giày X_PLRBOOST<br><span style="color: #868687;">Nữ Sportswear</span><br><span
                        style="color: #868687;">4 colours</span>&nbsp;• mới</p>
            </div>
            
         
        
            <div class="myImage row13">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/373371eb6f8944a3af4daf3a00a9eae2_9366/Giay_Alphabounce_Sustainable_Bounce_trang_HP6147_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">4.500.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/373371eb6f8944a3af4daf3a00a9eae2_9366/Giay_Alphabounce_Sustainable_Bounce_trang_HP6147_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7a1e94eecc67441088abaf8c00d148f5_9366/Giay_Alphabounce_Sustainable_Bounce_Hong_HP6637_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/621993f3fe92403889d3e471195e15cf_9366/Giay_Alphabounce_Sustainable_Bounce_Xam_IE9754_01_standard.jpg"
                        alt="">
                    
                </div>
                <p>Giày ALPHABOUNCE+ SUSTAINABLE BOUNCE <br><span style="color: #868687;">Nữ Sportswear</span><br><span
                        style="color: #868687;">3 colours</span>&nbsp;• mới</p>
            </div>
            
          
            <div class="myImage row14">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/70f9cace9163472b97c28136484847fe_9366/Dep_Sandal_Mehana_DJen_IF7365_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/70f9cace9163472b97c28136484847fe_9366/Dep_Sandal_Mehana_DJen_IF7365_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eda97dd1c4274a4ab78ab86b1373d085_9366/Dep_Sandal_Mehana_Hong_IF8182_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/df54bec024bd49349d5baeff06597819_9366/Dep_Sandal_Mehana_Xam_IF8183_01_standard.jpg"
                        alt="">
                </div>
                <p>DÉP SANDAL MEHANA<br><span style="color: #868687;">Nữ Sportswear</span><br><span
                        style="color: #868687;">3 colours</span>&nbsp;• mới</p>
            </div> 
        </div>
    


        

        <div class="row row2">
            <div class="myImage row21">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fc885d1de97246fc9183af9000da38a8_9366/Giay_Ultraboost_Light_DJen_HQ6340_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">3.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/822d1f6419e74aaab479af9c01084c1d_9366/Giay_Ultraboost_Light_DJen_HP9204_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fc885d1de97246fc9183af9000da38a8_9366/Giay_Ultraboost_Light_DJen_HQ6340_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/78dd4d965142478b9f31af9c01346ffe_9366/Giay_Ultraboost_Light_nau_HQ6343_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fc885d1de97246fc9183af9000da38a8_9366/Giay_Ultraboost_Light_DJen_HQ6340_01_standard.jpg"
                        alt="">
                    <img class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9fc33404c64d4b8db52af275add6b62e_9366/Giay_Ultraboost_Light_trang_IE1768_01_standard.jpg"
                        alt="">
                    <img class="img6"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/414e45f2bc6c4b8f9b40cfaca52abae9_9366/Giay_Ultraboost_Light_Mau_xanh_da_troi_IE1772_HM1.jpg"
                        alt="">
                </div>
                <p>GIÀY ULTRABOOST LIGHT<br><span style="color: #868687;">Chạy</span><br><span
                        style="color: #868687;">6 colours</span>&nbsp;• mới</p>
            </div> 

            <div class="myImage row22">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f24f818f046e433aa725b8ce329cb75e_9366/Giay_Ultrabounce_trang_ID2250_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/71a00703e8c14c76aa8471445a9eaf40_9366/Giay_Ultrabounce_Mau_xanh_da_troi_HP5783_HM1.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/26b9430960fc4d6ca4a4607aeae5c357_9366/Giay_Ultrabounce_trang_ID2243_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/26b9430960fc4d6ca4a4607aeae5c357_9366/Giay_Ultrabounce_trang_ID2243_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e25439aab0da4006868daf3800ce6d46_9366/Giay_Ultrabounce_trang_HP5792_01_standard.jpg"
                        alt="">
                    <img class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/877f87fbcbf34e299720aef600eff064_9366/ADIZERO_SL_DJen_HQ1349_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày ULTRABOUNCE<br><span style="color: #868687;">Nữ chạy</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div> 
            
           

            <div class="myImage row23">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/814a157ea86245f282d6aa4bdcf00e67_9366/Giay_Trae_Unlimited_Xam_IF5610_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/62a8dd6d88d04319aa3d5e1e97b71599_9366/Giay_Trae_Unlimited_Xam_IF5611_01_standard.jpg"
                        alt="">
                   
                    <img style="padding: 0 10px 0 5px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/814a157ea86245f282d6aa4bdcf00e67_9366/Giay_Trae_Unlimited_Xam_IF5610_01_standard.jpg"
                        alt="">
                    
                </div>
                <p>Giày NMD_S1<br><span style="color: #868687;">Bóng rổ</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div> 

            
            <div class="myImage row24">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bb2d93d9cfa84b9d89382f99299e017c_9366/Giay_Stan_Smith_trang_ID4549_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.500.000 <sup>đ</sup></p>
                </div>
                <p>Giày Stan Smith <br><span style="opacity: 30%;">Nữ Originals</span><br> mới</p>
            </div>
           
        </div>




        <div class="row row3">

            <div class="myImage row31">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8fa18f64b890422b91b937ef5a709d0f_9366/Giay_Chay_Bo_Supernova_3_Hong_IE4352_HM1.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8fa18f64b890422b91b937ef5a709d0f_9366/Giay_Chay_Bo_Supernova_3_Hong_IE4352_HM1.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8fa18f64b890422b91b937ef5a709d0f_9366/Giay_Chay_Bo_Supernova_3_Hong_IE4352_HM1.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9e9915f3a13449cd94e2f5651748e92b_9366/Giay_Chay_Bo_Supernova_3_trang_HQ1805_HM1.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4f7519d0500f47b4b409ede811a5467d_9366/Giay_Chay_Bo_Supernova_3_DJen_IE4348_HM1.jpg"
                        alt="">
                    
                </div>
                <p>GIÀY CHẠY BỘ SUPERNOVA 3<br><span style="color: #868687;">Nữ Chạy</span><br><span
                        style="color: #868687;">4 colours</span>&nbsp;• mới</p>
            </div> 


            <div class="myImage row32">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/508a54c897224197b84cad6e00cbb8d6_9366/d%C3%A9p-adilette-comfort.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0157fd9113e44930b599dcd49f92aad4_9366/Giay_Duramo_SL_DJen_IE7261_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f966c785028a4d1aac15aecb01057252_9366/Dep_adilette_Comfort_DJen_GW9647_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/923bec57082443e39f92ad6e00cbed3d_9366/Dep_adilette_Comfort_DJen_GZ5896_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d1e62143e93b469a9c09aeda013f4e61_9366/Dep_adilette_Comfort_DJen_GY1946_01_standard.jpg"
                        alt="">
                    <img class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ccd588ab17994c03a53bad6e00cbac19_9366/Dep_adilette_Comfort_Mau_xanh_da_troi_GZ5892_01_standard.jpg"
                        alt="">
                </div>
                <p> Dép Adilette Comfort<br><span style="color: #868687;">Sportswear</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div> 
           
            
            <div class="myImage row33">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/61fe3434be124b81ad49ab0600c31d43_9366/Dep_quai_ngang_Adilette_Aqua_DJen_EG1758_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">600.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7a7020df0ec24acfa00fabfe00cab88b_9366/Dep_quai_ngang_Adilette_Aqua_trang_EF1730_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f79a796080824995bc42af4800a3bb92_9366/Dep_quai_ngang_Adilette_Aqua_Mau_xanh_da_troi_HP9391_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/923bec57082443e39f92ad6e00cbed3d_9366/Dep_adilette_Comfort_DJen_GZ5896_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/aaf285289cb44714a7acac0800d5e59f_9366/Dep_quai_ngang_Adilette_Aqua_Mau_xanh_da_troi_FY8047_01_standard.jpg"
                        alt="">
                    <img class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/61fe3434be124b81ad49ab0600c31d43_9366/Dep_quai_ngang_Adilette_Aqua_DJen_EG1758_01_standard.jpg"
                        alt="">
                </div>
                <p> DÉP QUAI NGANG ADILETTE AQUA<br><span style="color: #868687;">Sportswear</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div> 

            
            <div class="myImage row34">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/195eb09d7693430a8a0ead71015fe991_9366/d%C3%A9p-b%C6%A1i-adilette.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">500.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ea38c9ad02c14317b731ad6e00cc6fc8_9366/Dep_DJi_Boi_adilette_trang_GZ5921_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/25eaf44f839e4e8faf8fad7801166696_9366/Dep_DJi_Boi_adilette_Mau_xanh_da_troi_GZ5920_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 10px 0 5px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/253b5fe8085a477a8302ad6e0070c3f9_9366/Dep_Boi_adilette_DJen_GZ3779_01_standard.jpg"
                        alt="">
                    <img class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ea38c9ad02c14317b731ad6e00cc6fc8_9366/Dep_DJi_Boi_adilette_trang_GZ5921_01_standard.jpg"
                        alt="">
                    <img class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e6d708dc2ba645819426ad71015fdb57_9366/Dep_Boi_adilette_Be_GW8749_01_standard.jpg"
                        alt="">
                </div>
                <p> Dép bơi Adilette <br><span style="color: #868687;">Sportswear</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div> 
        </div>


        <div class="row row4">
            <div class="myImage row41">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/4021420ae680473a901bab730140d3b8_9366/d%C3%A9p-s%E1%BB%A5c-adilette.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">700.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f544367209ae4494b5f0ab730140c5af_9366/Dep_Suc_adilette_trang_FY8970_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e6520c5f895e4041b467ad6e0080fc35_9366/Dep_Suc_adilette_DJen_GZ5886_01_standard.jpg"
                        alt="">
              
                </div>
                <p> Dép sục Adilette <br><span style="color: #868687;">Sportswear</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>

            <div class="myImage row42">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6474b3753afe4dafac9e47c3c740300d_9366/Giay_Trainer_Dropset_2_trai_cam_ID4955_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">700.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6474b3753afe4dafac9e47c3c740300d_9366/Giay_Trainer_Dropset_2_trai_cam_ID4955_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/32ce137fbb2d4fab9a829432c3d667bf_9366/Giay_Trainer_Dropset_2_DJen_HQ8775_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Trainer Dropset 2 <br><span style="color: #868687;">Tập luyện</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>

            
            <div class="myImage row43">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e2163c9f296a47aa8766af8d01805648_9366/Giay_Golf_DJinh_Lien_Adicross_Low_Mau_xanh_da_troi_IF2153_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">5.100.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4b96690e64b742bd869eaf8d01820cea_9366/Giay_Golf_DJinh_Lien_Adicross_Low_trang_GW2118_01_standard.jpg"
                        alt="">
                    
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e2163c9f296a47aa8766af8d01805648_9366/Giay_Golf_DJinh_Lien_Adicross_Low_Mau_xanh_da_troi_IF2153_01_standard.jpg"
                        alt="">
                </div>
                <p> GIÀY GOLF ĐINH LIỀN ADICROSS LOW <br><span style="color: #868687;">Đánh Golf</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
           
            <div class="myImage row44">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fbfd369589b0456ba725a376db00c031_9366/Dep_adilette_Comfort_nau_IF5640_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                
                <p> Dép Adilette Comfort<br><span style="color: #868687;">Sportswear</span><br>• mới</p>
            </div>
        </div>



        <div class="row row5">
            <div class="myImage row51">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a5b68e04a1c24a9fb23ac9a41c798123_9366/Giay_Gazelle_Bold_Hong_ID6997_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/94f9a833550c4083b3090ba473208537_9366/Giay_Gazelle_Bold_mau_xanh_la_ID6998_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a5b68e04a1c24a9fb23ac9a41c798123_9366/Giay_Gazelle_Bold_Hong_ID6997_01_standard.jpg"
                        alt="">
                </div>
                <p> GIÀY GAZELLE BOLD <br><span style="color: #868687;">Nữ Originals</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row52">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1fe05516b2f44b98ab1fae7b01374f56_9366/Giay_Response_Super_3.0_trang_GW1379_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c142072a75bb4a7fa357ae9b0104b4ec_9366/Giay_Response_Super_3.0_DJen_GW1371_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bf34e3cf2ea74279ad3cae890002d5e3_9366/Giay_Response_Super_3.0_Xam_GW1376_01_standard.jpg"
                        alt="">
                  
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/95d20607532442e3a4f5afb000bb9592_9366/Giay_Response_Super_3.0_Xam_HP5937_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/838e2cebaa804ad59669af6801691df3_9366/Giay_Response_Super_3.0_DJo_HP5934_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1fe05516b2f44b98ab1fae7b01374f56_9366/Giay_Response_Super_3.0_trang_GW1379_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Response Super 3.0 <br><span style="color: #868687;">Nam Tập Luyện</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row53">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c0885d851f843a5836a731d0ae7c71b_9366/Giay_Duramo_SL_Ngoc_lam_IE7256_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.500.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c142072a75bb4a7fa357ae9b0104b4ec_9366/Giay_Response_Super_3.0_DJen_GW1371_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/64722991241d4625a5c350ff904e996a_9366/Giay_Duramo_SL_trang_IF7869_01_standard.jpg"
                        alt="">
                  
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/dd420826dea74a3f8c865072ef93e035_9366/Giay_Duramo_SL_trang_IE7262_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6e40d0127aec41c9b1d3bc5120fce9fa_9366/Giay_Duramo_SL_DJen_ID9849_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c0885d851f843a5836a731d0ae7c71b_9366/Giay_Duramo_SL_Ngoc_lam_IE7256_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Duramo SL <br><span style="color: #868687;">Nam Chạy</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row54">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d24a194891044c1fb0a17d049d19b86a_9366/Giay_Alphaboost_V1_Xam_IE9704_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.500.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d24a194891044c1fb0a17d049d19b86a_9366/Giay_Alphaboost_V1_Xam_IE9704_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ce17e0da18c74ef5925eb206d51dcc42_9366/Giay_Alphaboost_V1_DJen_IF9839_01_standard.jpg"
                        alt=""> 
                </div>
                <p> Giày Alphaboost V1 <br><span style="color: #868687;">Nam Chạy</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
           
        </div>
        <div class="row row6">
            <div class="myImage row61">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9e1a955a962f46aea214d57960a73b18_9366/Giay_Grand_Court_2.0_nau_IF2832_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.500.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9e1a955a962f46aea214d57960a73b18_9366/Giay_Grand_Court_2.0_nau_IF2832_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c3e00e2f6cf248f0a00a04f58ab80161_9366/Giay_Grand_Court_2.0_trang_ID4469_01_standard.jpg"
                        alt="">

                </div>
                <p> Giày Grand Court 2.0 <br><span style="color: #868687;">Nam Sportswear</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row62">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3fdca9845dc141fda919458eb165e39c_9366/Giay_Duramo_Speed_Mau_xanh_da_troi_IE9673_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.700.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/62017c4a3f054736ad53de461982cc05_9366/Giay_Duramo_Speed_mau_xanh_la_IF4820_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/72949966bf1b494bbfc41da130240203_9366/Giay_Duramo_Speed_Mau_xanh_da_troi_IF0566_01_standard.jpg"
                        alt="">
                  
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/95bbd3a5e0f5454682b6ecc55bec3104_9366/Giay_Duramo_Speed_trang_IE9674_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d621e9c5b1bd4d09a6e0df06905e05f1_9366/Giay_Duramo_Speed_DJen_ID9850_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3fdca9845dc141fda919458eb165e39c_9366/Giay_Duramo_Speed_Mau_xanh_da_troi_IE9673_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Duramo Speed <br><span style="color: #868687;">Nam Chạy</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row63">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c949d4551234df09420c1838bb75138_9366/Giay_Heawyn_Xam_ID9553_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.950.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;">
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6c949d4551234df09420c1838bb75138_9366/Giay_Heawyn_Xam_ID9553_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b6e4e0899db14764851dfbcdf4ad04c6_9366/Giay_Heawyn_DJen_IG2381_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày HEAWWYN <br><span style="color: #868687;">Nam Sportswear</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row64">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/20534682685e4ff39bed8a8e58bbfee5_9366/Giay_Ultrabounce_trang_ID2259_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/20534682685e4ff39bed8a8e58bbfee5_9366/Giay_Ultrabounce_trang_ID2259_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/641ca1a4fe0643068371aef900c3a51e_9366/Giay_Ultrabounce_trang_HP5771_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/dae5b1738ae344d698afaf3b014fb25c_9366/Giay_Ultrabounce_Mau_tim_HQ1475_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/032a85ad404f4adaa069af3500c2abb6_9366/Giay_Ultrabounce_DJo_HP5775_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a0111a233e4640c2b54baf560104f817_9366/Giay_Ultrabounce_trang_HP5778_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img6"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a131354e47ea4710aeebaf35011d48bf_9366/Giay_Ultrabounce_Xam_HP5776_01_standard.jpg"
                        alt="">
                    
                    
                </div>
                <p> Giày Ultrabounce <br><span style="color: #868687;">Nam chạy</span><br><span
                        style="color: #868687;">6 colours</span>&nbsp;• mới</p>
            </div>
        </div>
        <div class="row row7">
            <div class="myImage row71">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/134ada05ee8d4eeaa09e50d88bb2c62a_9366/Giay_Pureboost_23_Xam_IF2367_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">3.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d0915a5750c04c98bbd2f64820b09498_9366/Giay_Pureboost_23_Xam_IF2369_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/46d148ef00a54c7ea16a35082d6c10d2_9366/Giay_Pureboost_23_Xam_IF2372_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/97099eca461340b7942b23b2e4af4994_9366/Giay_Pureboost_23_Mau_xanh_da_troi_IF2373_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0cb8d7b276cc47da94a6e60ecd335ae3_9366/Giay_Pureboost_23_DJen_IF2375_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/134ada05ee8d4eeaa09e50d88bb2c62a_9366/Giay_Pureboost_23_Xam_IF2367_01_standard.jpg"
                        alt="">
                    
                </div>
                <p> Giày Pureboost 23 <br><span style="color: #868687;">Nam chạy</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row72">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/31a7cc7b42d54bd08bfa71a4323a6be4_9366/gi%C3%A0y-ultraboost-light.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">5.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fc36ee2d083a493faca1f31bb3d03440_9366/Giay_Ultraboost_Light_Xam_IE1758_HM1.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/31a7cc7b42d54bd08bfa71a4323a6be4_9366/gi%C3%A0y-ultraboost-light.jpg"
                        alt="">
                </div>
                <p> Giày Utralboost Light <br><span style="color: #868687;">Nam chạy</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row73">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a41ae84d535e4d9d8f2cf641b387f77e_9366/Giay_Stan_Smith_trang_ID2032_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4cf7720ac5a7420591148d75b2f3f592_9366/Giay_Stan_Smith_trang_ID2031_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a41ae84d535e4d9d8f2cf641b387f77e_9366/Giay_Stan_Smith_trang_ID2032_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Stan Smith <br><span style="color: #868687;">Nam Originals</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row74">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/744bd8365dc447ad8b2a3e3a5a2121cd_9366/Giay_Rivalry_86_Low_trang_IE7171_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">2.600.000 <sup>đ</sup></p>
                </div>
                
                <p> Giày RIVALRY 86 LOW <br><span style="color: #868687;">Nam Originals</span><br><span
                        style="color: #868687;">Sắp có</span></p>
            </div>
        </div>
        <div class="row row8">
            <div class="myImage row81">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/cfa9b475ea184d508547afd300fdad70_9366/Dep_Adicane_Xam_ID7188_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/cfa9b475ea184d508547afd300fdad70_9366/Dep_Adicane_Xam_ID7188_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9369893bfc58491585d0af5000bd8874_9366/Dep_Adicane_Be_HP9415_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img3"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e17736cb48a74c64bce8af5d009af5dd_9366/Dep_Adicane_mau_xanh_la_HQ9914_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img4"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e5646514991140efbb6caf500115bf11_9366/Dep_Adicane_Xam_HQ9915_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img5"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/14d9166f7e604df49ab7afd300fe068e_9366/Dep_Adicane_DJo_ID7189_01_standard.jpg"
                        alt="">
                </div>
                <p> Dép Adicane <br><span style="color: #868687;">Sportswear</span><br><span
                        style="color: #868687;">5 colours</span>&nbsp;• mới</p>
            </div>
             
            
            <div class="myImage row82">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/36a570caef194bcface66eef966a681a_9366/gi%C3%A0y-ultraboost-23.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">5.000.000 <sup>đ</sup></p>
                </div>
                <p> Giày Utralboost 23 <br><span style="color: #868687;">Chạy</span><br>• mới</p>
            </div>
            

            <div class="myImage row83">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/169e671d6b3d46509cc114eb96e53f80_9366/Giay_Galaxy_Star_Xam_IG0761_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">1.200.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/169e671d6b3d46509cc114eb96e53f80_9366/Giay_Galaxy_Star_Xam_IG0761_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f8187ff1fe6241dc83c2afb2010a3949_9366/Giay_Galaxy_Star_Xam_IF5399_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày Galaxy Star <br><span style="color: #868687;">Nam chạy</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
            <div class="myImage row84">
                <div style="position: relative;">
                    <img class="imgg"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9154585bab24464cbc0b514ff1c3a36d_9366/RETROPY_E5_mau_xanh_la_IG9994_01_standard.jpg"
                        alt="Ảnh mặc định">
                    <p style="position: absolute;bottom: 20px;left: 5px;background-color: #fff;">3.000.000 <sup>đ</sup></p>
                </div>
                <div class="list-img" style="display: none;list-style: none;z-index: 999;"  >
                    <img class="img1"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9154585bab24464cbc0b514ff1c3a36d_9366/RETROPY_E5_mau_xanh_la_IG9994_01_standard.jpg"
                        alt="">
                    <img style="padding: 0 5px 0 10px;" class="img2"
                        src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/09d6bc32c24b468190b5705f68929571_9366/RETROPY_E5_Mau_xanh_da_troi_IG9995_01_standard.jpg"
                        alt="">
                </div>
                <p> Giày RETROPY E5 <br><span style="color: #868687;">Nam chạy</span><br><span
                        style="color: #868687;">2 colours</span>&nbsp;• mới</p>
            </div>
            
        </div>
        </div>
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
                <li><a href="">© Nhóm 2 DHTI15A21HN</a></li>
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