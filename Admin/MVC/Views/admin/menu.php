<div id="sidebar-collapse">
    <div class="admin-block d-flex">
        <div>
            <img src="public/img/admin-avatar.png" width="45px" />
        </div>
        <div class="admin-info">
            <div class="font-strong"><?= $_SESSION['login']['Ten'] ?></div><small>Administrator</small>
        </div>
    </div>
    <ul class="side-menu metismenu">
        <li>
            <a href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                <span class="nav-label">Trang chủ</span>
            </a>
        </li>
        <li class="heading">Chức năng</li>
        <?php if(isset($_SESSION['isLogin_Admin']) and $_SESSION['isLogin_Admin']==true) {?>
        <li>
            <a href="?mod=nguoidung"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lí tài khoản</span></a>
        </li>
        <?php } ?>
        <li>
            <a href="?mod=sanpham"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý sản phẩm</span></a>
        </li>
        <li>
            <a href="?mod=loaisanpham"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý loại sản phẩm</span></a>
        </li>
        <li>
            <a href="?mod=danhmuc"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý danh mục</span></a>
        </li>
        <li>
            <a href="?mod=hoadon"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý hóa đơn</span></a>
        </li>
        <li>
            <a href="?mod=khuyenmai"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý khuyến mãi</span></a>
        </li>
        <li>
            <a href="?mod=banner"><i class="sidebar-item-icon fa fa-table"></i>
                <span class="nav-label">Quản lý banner</span></a>
        </li>
        <li>
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse">
                <li>
                    <a href="charts_flot.html">Flot Charts</a>
                </li>
                <li>
                    <a href="charts_morris.html">Morris Charts</a>
                </li>
                <li>
                    <a href="chartjs.html">Chart.js</a>
                </li>
                <li>
                    <a href="charts_sparkline.html">Sparkline Charts</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse">
                <li>
                    <a href="maps_vector.html">Vector maps</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                <span class="nav-label">Icons</span>
            </a>
        </li>
        <li class="heading">PAGES</li>
        <li>
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse">
                <li>
                    <a href="mailbox.html">Inbox</a>
                </li>
                <li>
                    <a href="mail_view.html">Mail view</a>
                </li>
                <li>
                    <a href="mail_compose.html">Compose mail</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
                <span class="nav-label">Calendar</span>
            </a>
        </li>
        <li>
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse">
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="profile.html">Profile</a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="register.html">Register</a>
                </li>
                <li>
                    <a href="lockscreen.html">Lockscreen</a>
                </li>
                <li>
                    <a href="forgot_password.html">Forgot password</a>
                </li>
                <li>
                    <a href="error_404.html">404 error</a>
                </li>
                <li>
                    <a href="error_500.html">500 error</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
            <ul class="nav-2-level collapse">
                <li>
                    <a href="javascript:;">Level 2</a>
                </li>
                <li>
                    <a href="javascript:;">
                        <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-3-level collapse">
                        <li>
                            <a href="javascript:;">Level 3</a>
                        </li>
                        <li>
                            <a href="javascript:;">Level 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>