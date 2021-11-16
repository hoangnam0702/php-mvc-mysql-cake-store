
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

    <div class="order_success" style="width: 100%; text-align: center; margin-top: 50px;" >
          <h3>Đặt hàng thành công</h3>
          <p>Đơn hàng đang được chờ xét duyệt. Vui lòng chờ !</p>
    </div>

    <!-- Page Content -->
    <section class="content-page">
        <div class="container mb-80">
            <div class="row">
                <div class="col-sm-12">
                    <article class="post-8">
                        <!-- <p class="checkout-info">
                            Returning customer? <strong><a href="login-register.html">Click here to login</a></strong>
                        </p>
                        <p class="checkout-info">
                            Have a coupon? <strong><a href="#">Click here to enter your code</a></strong>
                        </p> -->
                        <form class="product-checkout mt-45">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Chi tiết hóa đơn</h3>
                                    <div class="row">
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_first_name" class="left">
                                                First Name
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="billing_first_name" title="First Name" value="<?=$_SESSION['login']['Ho']?>" placeholder="First Name" type="text" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_last_name" class="left">
                                                Last Name
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="billing_last_name" title="Last Name" value="<?=$_SESSION['login']['Ten']?>" placeholder="Last Name" type="text" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_phone" class="left">
                                                Phone
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="billing_phone" title="phone" value="<?=$_SESSION['login']['SDT']?>" placeholder="Phone..." type="tel" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_email" class="left">
                                                Email
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="billing_email" title="Enter Email" value="<?=$_SESSION['login']['Email']?>" placeholder="Enter Email" type="email" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-12">
                                            <label for="billing_company" class="left">Địa chỉ giao hàng</label>
                                            <input class="input-md form-full-width" name="billing_company" title="Company Name" value="<?=$_SESSION['login']['DiaChi']?>" placeholder="Company Name" type="text" required="" aria-required="true">
                                        </div>
                                        <!-- dont have acc  -->
                                        <!-- <div class="form-field-wrapper form-center col-sm-12">
                                            <label for="billing_email" class="left">
                                                <input class="" id="createaccount" name="createaccount" value="1" type="checkbox" />
                                                <span>Create an account?</span></label>
                                        </div> -->
                                        <!-- end  -->

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-order-review">
                                        <h3>Đơn hàng của bạn</h3>
                                        <div class="product-checkout-review-order">
                                            <div class="responsive-table">
                                                <table class="">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($_SESSION['sanpham'] as $value) {?>
                                                        <tr class="cart_item">
                                                            <td class="product-name"><?=$value['TenSP']?><strong> </strong></td>
                                                            <td class="product-total">
                                                                <span class="product-price-amount amount"><span class="currency-sign"></span><?=number_format($value['DonGia'])?> VNĐ</span>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <!-- <tr class="cart-subtotal">
                                                            <th>Tổng</th>
                                                            <td>
                                                                <strong><span class="product-price-amount amount"><span class="currency-sign"></span><?=number_format($value['ThanhTien'])?> VNĐ</span></strong>
                                                            </td>
                                                        </tr> -->
                                                        <tr class="shipping">
                                                            <th>Phí ship</th>
                                                            <td>
                                                            <strong><span class="product-price-amount amount"><span class="currency-sign"></span><?=number_format(15000)?> VNĐ</span></strong>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td>
                                                                <span class="product-price-amount amount"><span class="currency-sign"></span><?=number_format($count + 15000)?> VNĐ</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>Tình trạng xét duyệt</th>
                                                            <td>
                                                            <strong><span class="product-price-amount amount"><span class="currency-sign"></span>Chưa xét duyệt</span></strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <div class="product-checkout-payment">
                                                <!-- <ul>
                                                    <li>
                                                        <input id="payment_method_bacs" name="payment_method" value="bacs" checked="checked" type="radio" />
                                                        <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <input id="payment_method_cheque" name="payment_method" value="cheque" type="radio" />
                                                        <label for="payment_method_cheque">Check payments</label>
                                                    </li>
                                                    <li>
                                                        <input id="payment_method_cod" name="payment_method" value="cod" type="radio" />
                                                        <label for="payment_method_cod">Cash on Delivery</label>
                                                    </li>
                                                    <li>
                                                        <input id="payment_method_paypal" name="payment_method" value="paypal" type="radio" />
                                                        <label for="payment_method_paypal">
                                                            PayPal<img class="paypal-img" src="public/img/AM_mc_vs_ms_ae_UK.png" />
                                                            <a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">'What is PayPal?</a>
                                                        </label>
                                                    </li>
                                                </ul> -->
                                                <!-- <div class="place-order">
                                                    <a class="btn btn-lg btn-color form-full-width" href="?act=order_complete">Đặt hàng</a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <?php unset($_SESSION['sanpham']);?>
    <!-- End Page Content -->

