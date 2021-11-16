<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PTE</title>
    <meta name="description" content="Philos Template" />
    <meta name="keywords" content="philos, WooCommerce, bootstrap, html template, philos template">
    <meta name="author" content="philos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/img/favicon.ico">
    <link rel="icon" type="img/png" href="public/img/favicon.png">
    <link rel="apple-touch-icon" href="public/img/favicon.png">

    <!-- CSS -->
    <link href="public/css/plugins/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap css -->
    <link href="public/css/plugins/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawesome css -->
    <link href="public/css/plugins/animate.css" rel="stylesheet" type="text/css" />
    <!-- animate css -->
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <!-- template css -->
    <link href="public/plugins/rev_slider/css/settings-ver.5.3.1.css" rel="stylesheet" type="text/css" />
    <!-- Slider Revolution Css Setting -->

</head>

<body>

    <!-- Newsletter Popup ---------------------------------------------------->
    <section id="nlpopup" data-expires="30" data-delay="10">
        <!--Close Button-->
        <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
            <img src="public/img/close-icon-white.png" alt="Newsletter Close" /></a>
        <!--End Close Button-->

        <h3 class="mb-40">Join Our Mailing List </h3>
        <p class="black mb-20">
            But I must explain to you how all this mistaken<br />
            idea of denouncing pleasure pain.
        </p>
        <form>
            <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
            <button class="btn btn-md btn-color">Subscribe</button>
        </form>
        <label class="mt-20">
            Sign up For Exclusive Updates, New Arrivals<br />
            And Insider-Only Discount.</label>
        <a class="nlpopup_close nlpopup_close_link mt-40">&#10006; Close</a>
    </section>
    <!-- Overlay -->
    <div id="nlpopup_overlay"></div>
    <!-- End Newsletter Popup ------------------------------------------------>

    <!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
    <section id="sidebar-right" class="sidebar-menu sidebar-right">
        <div class="cart-sidebar-wrap">

            <!-- Cart Headiing -->
            <div class="cart-widget-heading">
                <h4>Shopping Cart</h4>
                <!-- Close Icon -->
                <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
                <!-- End Close Icon -->
            </div>
            <!-- End Cart Headiing -->

            <!-- Cart Product Content -->
            <div class="cart-widget-content">
                <div class="cart-widget-product ">

                    <!-- Empty Cart -->
                    <div class="cart-empty">
                        <p>Không có sản phẩm nào trong giỏ hàng</p>
                    </div>
                   
                    <!-- EndEmpty Cart -->

                    <!-- Cart Products -->
                    <ul class="cart-product-item">

                        <!-- Item -->
                        <?php if(isset($_SESSION['sanpham']) and $_SESSION['sanpham']!=null){ foreach($_SESSION['sanpham'] as $value){?>
                        <li>
                            <!--Item Image-->
                            <a href="#" class="product-image">
                                <img src="public/<?=$value['HinhAnh1']?>" alt="" /></a>
                            <!--Item Content-->
                            <div class="product-content">
                                <!-- Item Linkcollateral -->
                                <a class="product-link" href="#"><?=$value['TenSP']?></a>
                                <!-- Item Cart Totle -->
                                <div class="cart-collateral">
                                    <span class="qty-cart"><?=$value['SoLuong']?></span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign"></span><?=number_format($value['DonGia'])?>&ensp;VNĐ</span>
                                </div>
                                <!-- Item Remove Icon -->
                                <a class="product-remove" href="?act=cart&xuli=deleteall&id=<?=$value['MaSP'] ?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <?php } }else { echo 'Bạn chưa chọn sản phẩm nào !';}?>
                    </ul>
                    <!-- End Cart Products -->
                </div>
            </div>
            <!-- End Cart Product Content -->


            <!-- calculator total price  -->
            <?php 
            if(isset($_SESSION['sanpham']) and $_SESSION['sanpham']!=null){
            $count = 0;
            foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
            }} else $count = 0;?>
            <!-- end calculator  -->


            <!-- Cart Footer -->
            <div class="cart-widget-footer">
                <div class="cart-footer-inner">

                    <!-- Cart Total -->
                    <h4 class="cart-total-hedding normal"><span>Tổng :</span><span class="cart-total-price"><?=number_format($count)?>&ensp;VNĐ</span></h4>
                    <!-- Cart Total -->

                    <!-- Cart Buttons -->
                    <div class="cart-action-buttons">
                        <a href="?act=cart" class="view-cart btn btn-md btn-gray">Xem giỏ hàng</a>
                        <a href="?act=checkout" class="checkout btn btn-md btn-color">Thanh toan</a>
                    </div>
                    <!-- End Cart Buttons -->

                </div>
            </div>
            <!-- Cart Footer -->
        </div>
    </section>
    <!--Overlay-->
    <div class="sidebar_overlay"></div>
    <!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

    <!-- Search Overlay Menu ----------------------------------------------------->
    <section class="search-overlay-menu">
        <!-- Close Icon -->
        <a href="javascript:void(0)" class="search-overlay-close"></a>
        <!-- End Close Icon -->
        <div class="container">
            <!-- Search Form -->
            <form role="search" id="searchform" action="?act=shop" method="POST">
                <div class="search-icon-lg">
                    <img src="public/img/search-icon-lg.png" alt="" />
                </div>
                <label class="h6 normal search-input-label" for="search-query">Nhập sản phẩm cần tìm...</label>
                <input value="" name="keyword" type="search" placeholder="Search..." />
                <button type="submit">
                    <img src="public/img/search-lg-go-icon.png" alt="" />
                </button>
            </form>
            <!-- End Search Form -->

        </div>
    </section>
    <!-- End Search Overlay Menu ------------------------------------------------>

    <!--==========================================-->
    <!-- wrapper -->
    <!--==========================================-->
    <div class="wraper">
        <!-- Header -->
        <?php
        require_once("header_footer/header.php");
        ?>
        <!-- End Header -->

        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <?php
            require_once("dieuhuong.php");
            ?>
        </div>
        <!-- End Page Content Wraper -->

        <!-- Footer Section -------------->
        <?php
        require_once("header_footer/footer.php");
        ?>
        <!-- End Footer Section -------------->

    </div>
    <!-- End wrapper =============================-->

    <!--==========================================-->
    <!-- JAVASCRIPT -->
    <!--==========================================-->
    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/plugins/jquery-ui.js"></script>
    <!-- jquery library js -->
    <script type="text/javascript" src="public/js/plugins/modernizr.js"></script>
    <!--modernizr Js-->
    <script type="text/javascript" src="public/plugins/rev_slider/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="public/plugins/rev_slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="public/plugins/rev_slider/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="public/plugins/rev_slider/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="public/plugins/rev_slider/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="public/plugins/rev_slider/js/revolution.extension.layeranimation.min.js"></script>
    <!--Slider Revolution Js File-->
    <script type="text/javascript" src="public/js/plugins/tether.min.js"></script>
    <!--Bootstrap tooltips require Tether (Tether Js)-->
    <script type="text/javascript" src="public/js/plugins/bootstrap.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="public/js/plugins/owl.carousel.js"></script>
    <!-- OWL carousel js -->
    <script type="text/javascript" src="public/js/plugins/slick.js"></script>
    <!-- Slick Slider js -->
    <script type="text/javascript" src="public/js/plugins/plugins-all.js"></script>
    <!-- Plugins All js -->
    <script type="text/javascript" src="public/js/custom.js"></script>
    <!-- end jquery -->
</body>

</html>