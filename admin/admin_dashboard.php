<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN | Dashboard</title>
    <link rel="stylesheet" href="./css/p_dashboard.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .bg-cl li:hover {
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
            <div class="container-fluid bg-secondary mb-5" style="height: 150px; margin-top: -20px;">
                <div class="d-flex flex-column align-items-center justify-content-center" style="height: 150px;">
                    <h1 style="color: #CCCC99;" class="font-weight-semi-bold text-uppercase mb-3">Manager &amp; Statistics</h1>
                    <div class="d-inline-flex">
                        <p class="m-0"><a href="../index.php">ALADIN-Shop</a></p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0">The ALADIN platform offers streamlined management and statistics functionalities for effective business operations.</p>
                    </div>
                </div>
            </div>
            <div class="bieudo">
                <img src="./images/hoa1.jpg" alt="">
            </div>
            <!--  -->

        </div>
    </div>
</body>
    <script src="./js/p.js"></script>
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
    <script src="./js/p.js"></script>
</html>