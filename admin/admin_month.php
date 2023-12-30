<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2H&M | Manage Orders</title>
    <link rel="stylesheet" href="./css/p_month.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .bg-cl li:hover{
            background-color: #D4D3E1
        }
    </style>
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
                        <div class="Account Settings dash" style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;" >Dashboard</div>
                    </a>
                    <ul class="menu-sub" id="trangChuDropdown">
                    </ul>
                </li>
            </div>
            <div class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link menu-toggle"
                        onclick="toggleDropdown('doanhSoDropdown', 'accountSettingsDropdown','trangChuDropdown')">
                        <div style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;" class="Account Settings">Revenue management</div>
                    </a>
                    <ul class="menu-sub bg-cl" id="doanhSoDropdown">
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a style="font-size: 12px; font-weight: bold;" href="./admin_week.php"><i style="font-size: 12px; margin-right: 10px;" class="fa-solid fa-money-check-dollar"></i>INCOME</a></div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a style="font-size: 12px; font-weight: bold;" href="./admin_month.php"><i style="font-size: 15px; margin-right: 10px;"  class="fa-solid fa-person-circle-check"></i>APPROVE</a></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
        
            <div class="menu">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle"
                        onclick="toggleDropdown('accountSettingsDropdown', 'doanhSoDropdown','trangChuDropdown')">
                        <div  class="Account Settings" style="text-transform: uppercase; font-size: 14px; padding-bottom: 10px; font-weight: bold;" >Manage Products</div>
                    </a>
                    <ul class="menu-sub bg-cl" id="accountSettingsDropdown">
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a style="font-size: 12px; font-weight: bold;" href="./admin_add.php"><i style="font-size: 12px; margin-right: 6px;" class="fa-brands fa-product-hunt"></i>ADD PRODUCT</a></div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link">
                                <div style="margin-left: -50px; margin-top: -15px;" class="Account"><a style="font-size: 12px; font-weight: bold;" href="./admin_list.php"><i style="font-size: 12px; margin-right: 6px;" class="fa-solid fa-clipboard-list"></i>LIST PRODUCT</a></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
        <!-- book_left -->
        <style>
            table {
            border-collapse: collapse; /* Ẩn đường kẻ giữa các ô */
            width: 100%;
            margin-top: -40px;
            }
            th, td {
            border: 1px solid #ddd; /* Thiết lập đường kẻ cho các ô */
            padding: 8px;
            text-align: left;
            }
            tr td {
                color: #444;
            }
            tr th {
                color: #444;
            }
            tr td:nth-child(1) {
                width: 115px;
            }
            tr td:nth-child(2):hover {
                background-color: #CCCC99;
            }
            tr td:nth-child(3):hover {
                background-color: #CCCC99;
            }
            tr td:nth-child(4):hover {
                background-color: #CCCC99;
            }
            tr td:nth-child(5):hover {
                background-color: #CCCC99;
            }
            tr > th {
                background-color: #CCCC66;
            }
            .book_right h1 {
                color: #CCCC99;
                font-weight: bold;

            }
            .book_right .warning:hover {
                cursor: not-allowed;
            }
        </style>
        <div class="book_right">
            <div class="container-fluid bg-secondary mb-5" style="height: 150px; margin-top: -20px;">
                <div class="d-flex flex-column align-items-center justify-content-center" style="height: 150px;">
                    <h1 class="font-weight-semi-bold text-uppercase mb-3">Manage Orders</h1>
                    <div class="d-inline-flex">
                        <p class="m-0"><a href="#">ALADIN</a></p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0">List of customers who placed orders</p>
                    </div>
                </div>
            </div>   
            <table border="1">
                <tr>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Addres</th>
                    <th>Total Price</th>
                </tr>
                <style>
                    .like {
                        color: #444;
                    }
                
                    .dis {
                        color: #444;
                    }
                
                    .like.clicked {
                        color: #4CAF50;
                    }
                
                    .dis.clicked {
                        color: #FF6347;
                    }
                </style>
            </table>
            <p class="warning" style="background-color: #FF6347; text-align: center; padding: 8px 0; text-transform: uppercase; margin-top: 30px; color: white; font-size: 12px; font-weight: bold;">
                Warning: don't arbitrarily change without permission from the administrator!
            </p>
            <!--  -->
        </div>
    </div>
</body>
<script>
    function changeColor(type, element) {
        // Kiểm tra xem nút đang được click là like hay dislike
        if (type === 'like') {
            // Đảm bảo nút dislike không được click cùng lúc
            element.nextElementSibling.classList.remove('clicked');

            // Thêm hoặc xoá lớp 'clicked' cho nút like
            element.classList.toggle('clicked');
        } else if (type === 'dislike') {
            // Đảm bảo nút like không được click cùng lúc
            element.previousElementSibling.classList.remove('clicked');

            // Thêm hoặc xoá lớp 'clicked' cho nút dislike
            element.classList.toggle('clicked');
        }
    }
</script>
<script src="./js/p.js"></script>
</html>