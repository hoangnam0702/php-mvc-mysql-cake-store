<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
            <span class="brand">Admin
                <span class="brand-tip">-PTE</span>
            </span>
            <span class="brand-mini">AC</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <form class="navbar-search" action="javascript:;">
                    <div class="rel">
                        <span class="search-icon"><i class="ti-search"></i></span>
                        <input class="form-control" placeholder="Search here...">
                    </div>
                </form>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="public/img/admin-avatar.png" />
                    <span></span><?= $_SESSION['login']['Ten'] ?><i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Tài khoản</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Cài đặt</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="../?act=taikhoan&xuli=dangxuat"><i class="fa fa-power-off"></i>Đăng xuất</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>