<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN | Add products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/p_add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .bg-cl li:hover {
            background-color: #D4D3E1
        }
    </style>
 
    <?php
session_start();
include 'connect.php'; 
$conn = mysqli_connect("localhost", "root", "", "my_sql");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem các trường đã được gửi từ biểu mẫu
    
        // Lấy giá trị từ biểu mẫu
        $TenSanPham = $_POST["Tensanpham"];
        $Gia = $_POST["Giatien"];
        $SoLuong = $_POST["Soluong"];
        $img = $_FILES["img"];
        $date = $_POST['dateTimeInput'];
        // Kiểm tra xem có lỗi tải lên không
        if ($img["error"] == UPLOAD_ERR_OK) {
            // Thông tin về tệp
            $tmp_name = $img["tmp_name"];
            $name = basename($img["name"]);
            // Chuyển tệp tạm thời đến thư mục bạn muốn lưu trữ
            $upload_directory = "./images/"; // Đường dẫn cụ thể bạn muốn sử dụng
            $upload_path = $upload_directory . $name;
            move_uploaded_file($tmp_name, $upload_path);
    // Câu truy vấn SQL để chèn dữ liệu vào bảng
    $sql = "INSERT INTO sanpham (Tensanpham, Gia, Soluong, img,NgayNhap)
            VALUES ('$TenSanPham', '$Gia', '$SoLuong', '$upload_path','$date')";
    if ($conn->query($sql) === TRUE) {
        echo "Dữ liệu đã được chèn thành công";
        } 
    }
        else {
        echo "Lỗi chèn dữ liệu: " . $conn->error;
    }
}
// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
</head>
<body>
    <div class="book">
        <div class="book_left">
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
                        <div style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;"
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
        <div class="book_right" style="margin-top: -1px;">
            
            <div class="container-fluid bg-secondary mb-5" style="height: 150px; margin-top: -20px;">
                <div class="d-flex flex-column align-items-center justify-content-center" style="height: 150px;">
                    <h1 style="color: #CCCC99;" class="font-weight-semi-bold text-uppercase mb-3">ADD PRODUCT</h1>
                    <div class="d-inline-flex">
                        <p class="m-0"><a href="#">ALADIN</a></p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0">The product is added to the database</p>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 700px;" class="book_right-hoa">
                    <form id="myForm" action="admin_add.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="book_right-main">
                            <label style="color: #CCCC66;" for="Tensanpham">Tên Sản Phẩm: </label>
                            <input style="height: 100%; outline: none; border: 1px solid #CCCC99;" type="text" name="Tensanpham" required>
                        </div>
                
                        <div class="book_right-main">
                            <label style="color: #CCCC66;"  for="Soluong">SỐ Lượng: </label>
                            <input style="height: 100%; outline: none;  border: 1px solid #CCCC99;" type="number" name="Soluong" required>
                        </div>
                        <div class="book_right-main">
                            <label style="color: #CCCC66;"  for="Giatien">Giá Tiền: </label>
                            <input style="height: 100%; outline: none;  border: 1px solid #CCCC99;" type="number" name="Giatien" step="0.01" required>
                        </div>
                
                        <div class="book_right-main">
                            <label style="color: #CCCC66;"  for="img">IMG Sản Phẩm: </label>
                            <input style="height: 100%; outline: none;  border: 1px solid #CCCC99;" type="file" name="img" accept="image/*" required>
                        </div>
                        <div class="book_right-main">
                            <label style="color: #CCCC66;"  for="img">Ngày Nhập: </label>
                            <input style="height: 100%; outline: none;  border: 1px solid #CCCC99;" type="datetime-local" id="dateTimeInput" name="dateTimeInput" >
                        </div>
                        <style>
                            .book_submit input{
                                color: white;
                                background-color: #CCCC99;
                                text-transform: uppercase;
                            }
                            .book_submit input:hover{
                                background-color: #CCCC66;
                            }
                        </style>
                        <div class="book_submit" style="margin-top: 40px; float: right;">
                            <input type="submit" value="Save">
                        </div>
                        <p class="warning"
                            style="background-color: #FF6347; text-align: center; padding: 8px 0; text-transform: uppercase; margin-top: 200px; color: white; font-size: 12px; font-weight: bold;">
                            <a style="color: white;" href="./admin_list.php">Return to MANAGE PRODUCTS - List!</a>
                        </p>
                    </form>
                </div>
                <!-- <div>
                    <img style="width: 700px; object-fit: cover;" src="../static/images/2H&M_LOGO.png" alt="">
                </div> -->
                <div style=" margin-right: -18px;">
                    <img style="width: 600px; height: 500px; object-fit: cover;" src="./images/cat-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('.alert .close').click(function () {
            $(this).parent().fadeOut('slow');
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="./p.js"></script>
</html> 