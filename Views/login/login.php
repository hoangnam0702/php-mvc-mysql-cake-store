<div class="page-content-wraper">
    <!-- Bread Crumb -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb-link">
                        <a href="?act=home">Trang chủ</a>
                        <span>Đăng nhập & đăng kí</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Bread Crumb -->

    <!-- Page Content -->
    <section class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-border-box">
                        <form action="?act=taikhoan&xuli=dangnhap" method="POST" id="form1">
                            <h2 class="normal"><span>Khách hàng đã đăng kí !</span></h2>
                            <p>Đăng nhập tại đây nếu bạn đã có tài khoản !</p>
                            <?php if (isset($_COOKIE['msg'])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                                </div>
                            <?php } ?>
                            <div class="form-field-wrapper">
                                <label>Tên người dùng...<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="taikhoan" placeholder="Nhập username..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <div class="form-field-wrapper">
                                <label>Mật khẩu... <span class="required">*</span></label>
                                <input id="author-pass" class="input-md form-full-width" name="matkhau" placeholder="Nhập mật khẩu..." value="" size="30" aria-required="true" required="" type="password">
                            </div>
                            <div class="form-field-wrapper">
                                <input name="submit" id="form1" class="submit btn btn-md btn-black" value="Sign In" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-border-box">
                        <form action="?act=taikhoan&xuli=dangky" method="POST" id="form2">
                            <h2 class="normal"><span>Khách hàng mới !</span></h2>
                            <p>Vui lòng điền đầy đủ thông tin bên dưới</p>
                            <?php if (isset($_COOKIE['msg'])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                                </div>
                            <?php } ?>
                            <!-- ho  -->
                            <div class="form-field-wrapper">
                                <label>Họ<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="Ho" placeholder="Họ..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <!-- ten  -->
                            <div class="form-field-wrapper">
                                <label>Tên<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="Ten" placeholder="Tên..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <!-- username  -->
                            <div class="form-field-wrapper">
                                <label>Tên đăng nhập<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="TaiKhoan" placeholder="Tên đăng nhập..." minlength="6" value="" maxlength="30" aria-required="true" required="" type="text">
                            </div>
                            <!-- email  -->
                            <div class="form-field-wrapper">
                                <label>Email<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="Email" placeholder="Email..." value="" size="30" aria-required="true" required="" type="email">
                            </div>
                            <!-- address  -->
                            <div class="form-field-wrapper">
                                <label>Địa chỉ<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="DiaChi" placeholder="Địa chỉ..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <!-- dienthoai  -->
                            <div class="form-field-wrapper">
                                <label>Điện thoại<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="SĐT" placeholder="Số điện thoại..." required pattern="[0-9]+" minlength="10" value="" aria-required="true" required="" type="tel">
                            </div>
                            <!-- pass  -->
                            <div class="form-field-wrapper">
                                <label>Mật khẩu<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="MatKhau" placeholder="Mật khẩu..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <!-- xac nhan pass  -->
                            <div class="form-field-wrapper">
                                <label>Xác nhận mật khẩu<span class="required">*</span></label>
                                <input id="author-email" class="input-md form-full-width" name="check_password" placeholder="Nhập lại mật khẩu..." value="" size="30" aria-required="true" required="" type="text">
                            </div>
                            <div class="form-field-wrapper">
                                <input name="submit" id="submit1" class="submit btn btn-md btn-color" value="Create An Account" type="submit" form="form2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Content -->

</div>