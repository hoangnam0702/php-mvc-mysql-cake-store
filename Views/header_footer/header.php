
<header class="header">
    <!--Topbar-->
    <div class="header-topbar">
        <div class="header-topbar-inner">
            <!--Topbar Left-->
            <div class="topbar-left hidden-sm-down">
                <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Hỗ trợ khách hàng : <b>0969037917</b></div>
            </div>
            <!--End Topbar Left-->
            
            <!--Topbar Right-->
            <div class="topbar-right">
                <ul class="list-none">
                    <li class="dropdown-nav">
                        <?php if (isset($_SESSION['login'])) { ?>
                            <a href="#"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">Chào&nbsp;<?= $_SESSION['login']['Ten'] ?></span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <?php if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
                                        <li><a href="admin/?mod=login">Trang quản trị</a></li>
                                    <?php } ?>
                                    <li><a href="?act=history">Lịch sử mua hàng</a></li>
                                    <li><a href="#">Danh sách yêu thích</a></li>
                                    <li><a href="?act=checkout">Thanh toán</a></li>
                                    <li><a href="index.php?act=cart">Giỏ hàng</a></li>
                                </ul>
                                <span class="divider"></span>
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="fa fa-lock left" aria-hidden="true"></i>Tài khoản</a></li>
                                    <li><a href="?act=taikhoan&xuli=dangxuat"><i class="fa fa-user left" aria-hidden="true"></i>Đăng xuất</a></li>
                                </ul>
                            </div>
                            <!--End Dropdown-->
                        <?php } else { ?>
                    <li><a href="?act=taikhoan">Đăng ký</a></li>
                    <li><a href="?act=taikhoan">Đăng nhập</a></li>
                <?php } ?>
                </li>
                </ul>
            </div>
            <!-- End Topbar Right -->
        </div>
    </div>
    <!--End Topbart-->

    <!-- Header Container -->
    <div id="header-sticky" class="header-main">
        <div class="header-main-inner">
            <!-- Logo -->
            <div class="logo">
                <a href="?act=home">
                    <img src="public/img/logo_black.png" alt="Philos" />
                </a>
            </div>
            <!-- End Logo -->


            <!-- Right Sidebar Nav -->
            <div class="header-rightside-nav">
                <!-- Login-Register Link -->
                <div class="header-btn-link hidden-lg-down"><a href="?act=shop" class="btn btn-sm btn-color">Mua ngay</a></div>
                <!-- End Login-Register Link -->

                <!-- Sidebar Icon -->
                <div class="sidebar-icon-nav">
                    <ul class="list-none-ib">
                        <!-- Search-->
                        <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                        <!-- Whishlist-->
                        <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                        <!-- Cart-->
                        <li>
                            <a id="sidebar_toggle_btn">
                                <?php
                                $soluong = 0;
                                $thanhtien = 0;
                                if (isset($_SESSION['sanpham'])) {
                                    foreach ($_SESSION['sanpham'] as $value) {
                                        $soluong += 1;
                                        $thanhtien += $value['ThanhTien'];
                                    }
                                }
                                ?>
                                <div class="cart-icon">
                                    <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                </div>
                                <div class="cart-title">

                                    <span class="cart-count"><?=$soluong?></span>
                                    /
                                    <span class="cart-price strong"><?=number_format($thanhtien)?> VNĐ</span>

                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar Icon -->
            </div>
            <!-- End Right Sidebar Nav -->


            <!-- Navigation Menu -->
            <nav class="navigation-menu">
                <ul>
                    <li>
                        <a href="?act=home">trang chủ</a>
                    </li>
                    <li>
                        <a href="?act=shop">cửa hàng<span class="nav-label-sale"></span></a>
                        <!-- Drodown Menu ------->
                        <ul class="nav-dropdown js-nav-dropdown">
                            <li class="container">
                                <ul class="row">
                                    <!--Grid 1-->
                                    <?php $i = 1;
                                    foreach ($data_chitietDM as $row) { ?>
                                        <li class="nav-dropdown-grid">
                                            <h6><?= $data_danhmuc[$i - 1]['TenDM'] ?></h6>
                                            <ul>
                                                <?php foreach ($row as $value) { ?>
                                                    <li><a href="?act=shop&danhmuc=<?= $value['MaDM'] ?>&loai=<?= $value['MaLSP'] ?>"><?= $value['TenLSP'] ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    <?php $i++;
                                    } ?>

                                    <li class="nav-dropdown-grid">
                                        <a href="#" class="sub-banner">
                                            <img src="public/img/banner/banner_115145.jpg" alt="" /></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Drodown Menu -->
                    </li>
                    <li>
                        <a href="?act=checkout">thanh toán</a>
                    </li>
                    <li>
                        <a href="?act=about">giới thiệu</a>
                    </li>
                    <li>
                        <a href="?act=contact">liên hệ</a>
                    </li>
                </ul>
            </nav>
            <!-- End Navigation Menu -->

        </div>
    </div>
    <!-- End Header Container -->
</header>