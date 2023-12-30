<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2H&M | Manage product lists</title>
    <link rel="stylesheet" href="./css/p_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .bg-cl li:hover {
            background-color: #D4D3E1
        }
    </style>
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
<body>
    <div class="book">
        <div class="book_left" style="position: sticky; top: 0px;">
            <div class="menu">
                <img style="width: 100%;" src="./images/ALADIN.png" alt="">
            </div>
            <div>
                <li class="menu-item">
                    <a href="./admin_dashboard.php" class="menu-link menu-toggle"
                        onclick="toggleDropdown('trangChuDropdown','doanhSoDropdown', 'accountSettingsDropdown')">
                        <div class="Account Settings dash"
                            style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;">
                            Dashboard</div>
                    </a>
                    <ul class="menu-sub" id="trangChuDropdown">
                    </ul>
                </li>
            </div>
            <div class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link menu-toggle"
                        onclick="toggleDropdown('doanhSoDropdown', 'accountSettingsDropdown','trangChuDropdown')">
                        <div style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold; width: 195px;"
                            class="Account Settings">Revenue management</div>
                    </a>
                    <ul class="menu-sub bg-cl" id="doanhSoDropdown">
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a
                                        style="font-size: 12px; font-weight: bold;"
                                        href="./admin_week.php"><i
                                            style="font-size: 12px; margin-right: 10px;"
                                            class="fa-solid fa-money-check-dollar"></i>INCOME</a></div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a
                                        style="font-size: 12px; font-weight: bold;"
                                        href="./admin_month.php"><i
                                            style="font-size: 15px; margin-right: 10px;"
                                            class="fa-solid fa-person-circle-check"></i>APPROVE</a></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
        
            <div class="menu">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle"
                        onclick="toggleDropdown('accountSettingsDropdown', 'doanhSoDropdown','trangChuDropdown')">
                        <div class="Account Settings"
                            style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;">Manage
                            Products</div>
                    </a>
                    <ul class="menu-sub bg-cl" id="accountSettingsDropdown">
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a
                                        style="font-size: 12px; font-weight: bold;"
                                        href="./admin_add.php"><i
                                            style="font-size: 12px; margin-right: 6px;"
                                            class="fa-brands fa-product-hunt"></i>ADD PRODUCT</a></div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a
                                        style="font-size: 12px; font-weight: bold;"
                                        href="./admin_list.php"><i
                                            style="font-size: 12px; margin-right: 6px;"
                                            class="fa-solid fa-clipboard-list"></i>LIST PRODUCT</a></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
        <!-- book_left -->
        <div class="book_right">
            <div style="width: 100%;">
                <div class="container-fluid bg-secondary mb-5" style="height: 150px; margin-top: -20px; position: sticky; top:0; z-index: 999;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 150px;">
                        <h1 style="color: #CCCC99;" class="font-weight-semi-bold text-uppercase mb-3">Manage product lists</h1>
                        <div class="d-inline-flex">
                            <p class="m-0"><a href="#">ALADIN</a></p>
                            <p class="m-0 px-2">-</p>
                            <p class="m-0">List of products</p>
                        </div>
                    </div>
                    <div style="width: 100%; margin-top: 20px; margin-left: -29px;" class="col-12 pb-1" id="search-container">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        <form action="search.php" method="get" onsubmit="return true;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search by name" id="search-input" name="search">
                                <div style="z-index: 999; background-color: rgba(255, 255, 255, 0.637);" class="input-group-append">
                                    <button type="submit" class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    
                            <div style="z-index: 999;">
                                <h6 style="opacity: .4;">Note that the currency is calculated in US dollars:<?php echo $total;?> $</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; overflow: auto; width: 100%;flex-wrap: wrap;">
                    <?php
                    include'displayProduct.php';
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            displayProduct($row);
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    session_destroy();
                    ?>
                    <div id="not-found-message" style="display: none; margin-top: 40px;">No found product</div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #back-to-top {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #CCCC99;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: opacity 0.5s;
        }
    </style>
    <a href="#" id="back-to-top" style="display: none;color: #fff;"><i class="fa-solid fa-angle-up"></i></a>
</body>
<script src="./js/p.js"></script>
<script>
        // Lắng nghe sự kiện cuộn trang
        window.addEventListener('scroll', function () {
            const backToTopButton = document.getElementById('back-to-top');
            // Kiểm tra vị trí cuộn
            if (window.pageYOffset > 75) { // Thay đổi 200 thành mức độ cuộn bạn muốn
                backToTopButton.style.display = 'block'; // Hiển thị nút khi cuộn đủ xa
            } else {
                backToTopButton.style.display = 'none'; // Ẩn nút khi cuộn không đủ xa
            }
        });
        // Lắng nghe sự kiện khi người dùng nhấp vào nút "Quay về đầu trang"
        document.getElementById('back-to-top').addEventListener('click', function (event) {
            event.preventDefault();
            scrollToTop(100);
        });
        function scrollToTop(duration) {
            const start = window.pageYOffset;
            const startTime = performance.now();
            function scrollStep(timestamp) {
                const currentTime = timestamp - startTime;
                const progress = Math.min(currentTime / duration, 1);

                window.scrollTo(0, start - start * progress);

                if (currentTime < duration) {
                    requestAnimationFrame(scrollStep);
                }
            }
            requestAnimationFrame(scrollStep);
        }
</script>
<script>
    function updateProductInfo(productId, field, value) {
        // Gửi yêu cầu cập nhật thông qua Ajax khi người dùng rời khỏi trường nhập liệu
        fetch(`/update_product/${productId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ [field]: value }),
        })
            .then(response => response.json())
            .then(data => {
                // Xử lý kết quả trả về nếu cần
                console.log('Update response:', data.message);
            })
            .catch(error => {
                console.error('Error during update:', error);
            });
    }
</script>
<script>
    function searchProducts() {
        var searchTerm = document.getElementById('search-input').value.trim().toLowerCase();

        var products = document.querySelectorAll('.search_product');
        var productFound = false;

        products.forEach(function (product) {
            var productName = product.querySelector('[name="productName"]').value.trim().toLowerCase();

            if (productName.startsWith(searchTerm)) {
                // Nếu sản phẩm bắt đầu bằng từ khóa tìm kiếm, hiển thị nó
                product.style.display = 'block';
                productFound = true; // Đặt biến thành true khi tìm thấy sản phẩm
            } else {
                // Nếu sản phẩm không bắt đầu bằng từ khóa tìm kiếm, ẩn nó
                product.style.display = 'none';
            }
        });

        // Kiểm tra xem có sản phẩm nào được tìm thấy không và hiển thị thông báo
        var notFoundMessage = document.getElementById('not-found-message');
        if (!productFound) {
            notFoundMessage.style.display = 'block';
        } else {
            notFoundMessage.style.display = 'none';
        }
    }
</script>
</html>