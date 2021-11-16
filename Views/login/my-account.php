<!-- Bread Crumb -->
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumb-link">
                    <a href="?act=home">Trang chủ</a>
                    <span>Thanh toán</span>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Bread Crumb -->

<!-- Page Content -->
<section class="content-page">
    <div class="container mb-80">
        <div class="row">
            <div class="col-sm-12">
                <article class="post-8">
                    <?php if (isset($_COOKIE['doimk'])) { ?>
                        <h6><?php echo $_COOKIE['doimk'] ?></h6>
                    <?php } ?>
                    <div class="row">

                        <div class="col-md-6">
                            <form class="product-checkout mt-45" action="?act=taikhoan&xuli=update " method="POST">
                                <h3>Thông tin tài khoản</h3>
                                <div class="row">
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_first_name" class="left">
                                            Họ
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="Ho" title="First Name" value="<?= $data['Ho'] ?>" placeholder="First Name" type="text" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_last_name" class="left">
                                            Tên
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="Ten" title="Last Name" value="<?= $data['Ten'] ?>" placeholder="Last Name" type="text" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-12">
                                        <label for="billing_country" class="left">
                                            Giới tính
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <select name="GioiTinh" id="billing_country" class="input-md form-full-width" tabindex="-1" aria-hidden="true" required="" aria-required="true">
                                            <option disabled selected value="">Chưa chọn</option>
                                            <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam">Nam</option>
                                            <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ">Nữ</option>
                                            <option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-12">
                                        <label for="billing_address" class="left">
                                            Địa chỉ
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width mb-20" name="DiaChi" title="Address" value="<?= $data['DiaChi'] ?>" placeholder="Street Address" type="text" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_phone" class="left">
                                            Điện thoại
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="SĐT" title="phone" value="<?= $data['SDT'] ?>" placeholder="(+00) 123 456 7890" type="tel" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_email" class="left">
                                            Email
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="Email" title="Enter Email" value="<?= $data['Email'] ?>" placeholder="Enter Email" type="email" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-12">
                                        <label for="billing_email" class="left">
                                            <input class="" id="createaccount" name="createaccount" value="1" type="checkbox" />
                                            <button class="btn btn-lg btn-color form-full-width" type="submit">Lưu thông tin</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <form class="product-checkout mt-45" action="?act=taikhoan&xuli=update" method="POST">
                                <h3>Đổi mật khẩu</h3>
                                <div class="row">
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_first_name" class="left">
                                            Mật khẩu hiện tại
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="MatKhau" placeholder="Nhập mật khẩu hiện tại..." type="text" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-6">
                                        <label for="billing_last_name" class="left">
                                            Mật khẩu mới
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width" name="MatKhauMoi" value="" placeholder="Nhập mật khẩu mới..." type="text" required="" aria-required="true">
                                    </div>

                                    <div class="form-field-wrapper form-center col-sm-12">
                                        <label for="billing_address" class="left">
                                            Xác nhận mật khẩu mới
                                            <abbr class="form-required" title="required">*</abbr></label>
                                        <input class="input-md form-full-width mb-20" name="MatKhauXN" value="" placeholder="Mật khẩu xác nhận..." type="text" required="" aria-required="true">
                                    </div>
                                    <div class="form-field-wrapper form-center col-sm-12">
                                        <label for="billing_email" class="left">
                                            <button class="btn btn-lg btn-color form-full-width" type="submit">Đổi mật khẩu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- End Page Content -->