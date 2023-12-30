<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN | Income</title>
    <link rel="stylesheet" href="./css/p_week.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    // Kiểm tra xem các trường đã được gửi từ biểu mẫu
    $sql = "SELECT TongTien FROM thunhap LIMIT 1";
    $result = $conn->query($sql);

if (!$result) {
    die("Lỗi truy vấn SQL: " . $conn->error);
}
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
        <div class="book_right">
            <div style="width: 100%;">
                <div class="container-fluid bg-secondary mb-5" style="height: 150px; margin-top: -20px;">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 150px;">
                        <h1 style="color: #CCCC99;" class="font-weight-semi-bold text-uppercase mb-3">Income</h1>
                        <div class="d-inline-flex">
                            <p class="m-0"><a href="#">2HM</a></p>
                            <p class="m-0 px-2">-</p>
                            <p class="m-0">Income</p>
                        </div>
                    </div>
                </div>
                <div style="display: flex; width: 100%;">
                    <div style="margin-top: 40px; height: 100%; width: 100%;" class="book_right-main">
                        <div class="transactions">
                            <span>Transactions</span>
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <div class="Surplus" style="margin-top: -10px;">
                            <div class="Surplus_main">
                                <div class="Surplus_img">
                                    <img src="./images/hoa3.jpg" alt="">
                                </div>
                                <div class="Surplus_comment">
                                    <span style="opacity: 0.6;">Total order amount</span>
                                    <br>
                                    <span style="color: brown;">Surplus : :</span>
                                    <span class="Surplus_money"> <i class="fa-solid fa-dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 90px; height: 100%; width: 100%;" class="book_right-main">
                        <div class="transactions">
                            <span>Storehouse</span>
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                        </div>
                        <div class="Surplus">
                            <div class="Surplus_main">
                                <div class="Surplus_img">
                                    <img src="./images/hoa4.jpg" alt="">
                                </div>
                                <div class="Surplus_comment">
                                    <span style="opacity: 0.6;" id="currentDateTime"></span>
                                    <br>
                                    <span style="color: brown;">Surplus :
                                    <?php if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $tongTien = $row["TongTien"];
                                    echo "<span>$tongTien</span>";
                                    } else {
                                    echo "Không có dữ liệu";
                                    }?> 
                                    :</span>
                                    <span class="Surplus_money"><i class="fa-solid fa-dollar-sign"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <canvas id="doughnutChart" width="200" height="200"></canvas>
                    </div>
                </div>
                <p class="warning"
                    style="background-color: #FF6347; text-align: center; padding: 8px 0; text-transform: uppercase; margin-top: 30px; color: white; font-size: 12px; font-weight: bold;">
                    <a style="color: white;" href="./admin_month.php">Return to MANAGE Orders!</a>
                </p>
                <div>
                    <canvas id="barChart" width="100%" height="200px"></canvas>
                </div>
            </div> 
        </div>
    </div>
</body>
<script src="./js/p.js"></script>
<script>
    function formatDateTime(date) {
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const seconds = date.getSeconds();
        const milliseconds = date.getMilliseconds();

        return `${day}/${month}/${year} ${hours}:${minutes}:${seconds}.${milliseconds}`;
    }

    function updateDateTime() {
        const currentDateTime = new Date();
        const currentDateTimeElement = document.getElementById('currentDateTime');
        currentDateTimeElement.innerHTML = `${formatDateTime(currentDateTime)}`;
    }

    // Update the date and time every second (1000 milliseconds)
    setInterval(updateDateTime, 1000);

    // Initial update
    updateDateTime();
</script>
<script>
    // Lấy thẻ canvas để vẽ biểu đồ tròn
    var doughnutCtx = document.getElementById('doughnutChart').getContext('2d');

    // Lấy thẻ canvas để vẽ biểu đồ cột
    var barCtx = document.getElementById('barChart').getContext('2d');

    // Tạo dữ liệu cho biểu đồ tròn
    var doughnutData = {
        labels: ['Total Order Amount', 'Storehouse'],
        datasets: [{
            data: [total_price_order, total_price],
            backgroundColor: ['#36A2EB', '#FFCE56']
        }]
    };

    // Tạo dữ liệu cho biểu đồ cột
    var barData = {
        labels: ['Total Order Amount', 'Storehouse'],
        datasets: [{
            label: 'Amount',
            data: [total_price_order, total_price],
            backgroundColor: ['#36A2EB', '#FFCE56']
        }]
    };

    // Tạo biểu đồ tròn
    var doughnutChart = new Chart(doughnutCtx, {
        type: 'doughnut',
        data: doughnutData,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Tạo biểu đồ cột
    var barChart = new Chart(barCtx, {
        type: 'bar',
        data: barData,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
</html>
<?php
 $conn->close();
?>