    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ALADIN| Cart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../admin/css/style.css" rel="stylesheet">
</head>
<?php session_start();
if (isset($_GET['sanpham'])) {
    
    $masanpham_to_remove = $_GET['sanpham'];
    $conn = new mysqli("localhost", "root", "", "my_sql");
    
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }
    $ID = $_SESSION['ID'];
    $sql = "DELETE FROM giohang WHERE Masanpham = '$masanpham_to_remove' AND UserID = '$ID'";
    if ($conn->query($sql) === true) {
        echo "Xóa thành công"; 
        header('Location: http://localhost/do_an1/Webproject/cart.php');
        exit();

    } else {
        echo "Lỗi khi xóa: " . $conn->error;
    }
    $conn->close();
}
?>
<script>
    document.getElementById('clearInput').addEventListener('click', function() {
    document.getElementById('myInput').value = '';
});

</script>

<!-- <script>
    function confirmDelete(masanpham) {
        var result = confirm("Bạn có chắc chắn muốn xoá sản phẩm có tên " + masanpham + "?");
        if (result) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };

            xhttp.open("GET", "xuly_xoa.php?masanpham=" + masanpham, true);
            xhttp.send();
        } else {
            alert("Đã hủy xoá sản phẩm có tên " + masanpham);
        }
    }
</script>  -->
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">ALADIN</span>ALADIN</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Shirts</a>
                        <a href="" class="nav-item nav-link">Jeans</a>
                        <a href="" class="nav-item nav-link">Swimwear</a>
                        <a href="" class="nav-item nav-link">Sleepwear</a>
                        <a href="" class="nav-item nav-link">Sportswear</a>
                        <a href="" class="nav-item nav-link">Jumpsuits</a>
                        <a href="" class="nav-item nav-link">Blazers</a>
                        <a href="" class="nav-item nav-link">Jackets</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">ALADIN</span>ALADIN</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="./index.php" class="nav-item nav-link">Home</a>
                            <a href="./index.php" class="nav-item nav-link">Shop</a>
                            <a href="./index.php" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="./cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="./checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="#" class="dropdown-item">Administrators</a>
                                    <a href="./login" class="dropdown-item">Individual</a>
                                </div>
                            </div>
                            <a href="./sinup" class="nav-item nav-link">Register</a>

                            <a href="./Login/logout.php" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="./index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                        <?php 
                            include 'connect.php';
                            
                            $conn = mysqli_connect("localhost", "root", "", "my_sql");

                            // Kiểm tra kết nối
                            if ($conn->connect_error) {
                                die("Kết nối không thành công: " . $conn->connect_error);
                            }

                            $ID=$_SESSION['ID'];
                            $string = "SELECT * from giohang where UserID = $ID";
                            $results = $conn->query($string);
                            $totalall =0;
                            foreach ($results as $product) {
                                $masanpham =  $product['Masanpham'];
                                $sql = "SELECT * FROM SanPham where Masanpham = $masanpham";
                                $result = $conn->query($sql);
                                $row= $result->fetch_assoc();
                                $tenSanPham = $row["Tensanpham"];
                                $gia = $row["Gia"];
                                $soLuong = 1;
                                $total = $gia * $soLuong;
                                $totalall=$totalall+$total;
                                echo '<tr>
                                <td>'.$tenSanPham.'</td>
                                <td>'.$gia.'</td>
                                <td>
                                '.$soLuong.'
                                </td>
                                <td>'.$total.'</td>
                                <td>';
                                echo '<form action="http://localhost/do_an1/Webproject/cart.php?sanpham='.$masanpham.'" method="get">
                                    <div class="input-container">
                                        <input type="hidden" name="sanpham" value="' . $masanpham . '">
                                        <input type="submit" value="&#10006";>
                                    </div>
                                  </form>';
                                echo '</td>
                                </tr>';
                            }    
                            $conn->close();
                        ?>
                    </thead>
                    <tbody class="align-middle">
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="" >
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold"></h5>
                            <h5 class="font-weight-bold">$<?php echo $totalall ?></h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3"> <?php echo '<a href="http://localhost/do_an1/Webproject/checkout.php?ID='.$ID.'"><p style="color: white;" >Proceed To Checkout></p></a>';?></button>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold">
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4"></h5>
                    </div>
                    <div class="col-md-4 mb-5">
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4"></h5>

                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="../static/images/payments.png" alt="">
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../static/js/easing.js"></script>
    <!-- Template Javascript -->
    <script src="../static/js/main.js"></script>
    <script src="../static/js/cart.js"></script>
</body>

</html>
<?php 
session_start();
$_SESSION['totalall'] = $totalall;
$totalall=0;?>