<!-- Bread Crumb -->
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="breadcrumb-link">
                    <a href="?act=home">Trang chủ</a>
                    <span>Giỏ hàng</span>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Bread Crumb -->

<!-- Page Content -->
<section class="content-page">
    <div class="container mb-80">
        <?php if (isset($_SESSION['sanpham']) and $_SESSION['sanpham']!=NULL) { ?>
            <div class="row">
                <div class="col-sm-12">
                    <article class="post-8">
                        <form class="cart-form">
                            <div class="cart-product-table-wrap responsive-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove"></th>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Thành tiền</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($_SESSION['sanpham'])) {
                                            foreach ($_SESSION['sanpham'] as $value) { ?>
                                                <tr>
                                                    <td class="product-remove">
                                                        <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    </td>
                        
                                                    <td class="product-thumbnail">
                                                        <a>
                                                            <img src="public/<?= $value['HinhAnh1'] ?>" alt="" /></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a><?= $value['TenSP'] ?></a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format($value['DonGia']) ?> VNĐ</span>
                                                    </td>
                                                    <td>
                                                        <form action="" method="POST">
                                                            <div class="product-quantity">
                                                                <a href="?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" type="button">-&ensp;</a>
                                                                <b class="plus-minus-box"><?= $value['SoLuong'] ?></b>
                                                                <a href="?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" type="button">&ensp;+</a>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="product-price-sub_totle amount"><span class="currency-sign"></span><?= number_format($value['ThanhTien']) ?> VNĐ</span>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row cart-actions">
                                <div class="col-md-6">
                                    <div class="coupon">
                                        <input class="input-md" id="coupon_code" name="coupon_code" title="Coupon Code" value="" placeholder="Mã giảm giá (nếu có)..." type="text">
                                        <input class="btn btn-md btn-black" name="coupon_code" value="Nhập mã giảm giá" type="submit" />
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 text-right">
                                <input class="btn btn-md btn-gray" name="update_cart" value="Cập nhật" disabled="" type="submit">
                            </div> -->
                            </div>
                        </form>
                        <div class="cart-collateral">
                            <div class="cart_totals">
                                <h3>Chi tiết thanh toán</h3>
                                <form action="?act=checkout" method="POST">
                                    <div class="responsive-table">
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Tổng giỏ hàng</th>
                                                    <td><span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format($count) ?> VNĐ</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Phí ship</th>
                                                    <td><span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format(15000) ?> VNĐ</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>VAT</th>
                                                    <td><span class="product-price-amount amount"><span class="currency-sign"></span>10%</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Tổng</th>
                                                    <td><span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format(15000 + $count + $count * 0.1) ?></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="product-proceed-to-checkout">
                                        <button class="btn btn-lg btn-color form-full-width">Đặt hàng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        <?php } else { ?>
            <div style="text-align: center;" >
                <h5>Bạn chưa chọn sản phẩm ! Vào cửa hàng chọn ngay sản phẩm ưa thích nhé !</h5>
            </div>
        <?php } ?>
    </div>

</section>
<!-- End Page Content -->