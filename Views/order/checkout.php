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
        <?php if (isset($_SESSION['sanpham']) and $_SESSION['sanpham'] != NULL) { ?>
            <div class="row">
                <div class="col-sm-12">
                    <article class="post-8">
                        <!-- <p class="checkout-info">
                            Returning customer? <strong><a href="login-register.html">Click here to login</a></strong>
                        </p>
                        <p class="checkout-info">
                            Have a coupon? <strong><a href="#">Click here to enter your code</a></strong>
                        </p> -->

                        <form class="product-checkout mt-45" action="?act=checkout&xuli=save" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Chi tiết hóa đơn</h3>
                                    <div class="row">
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_last_name" class="left">
                                                Người nhận
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="NguoiNhan" title="Last Name" value="<?= $_SESSION['login']['Ho'] ?>&nbsp;<?= $_SESSION['login']['Ten'] ?>" placeholder="Last Name" type="text" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-6">
                                            <label for="billing_phone" class="left">
                                                Điện thoại
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="SDT" title="phone" value="<?= $_SESSION['login']['SDT'] ?>" placeholder="Phone..." type="tel" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-12">
                                            <label for="billing_email" class="left">
                                                Email
                                                <abbr class="form-required" title="required">*</abbr></label>
                                            <input class="input-md form-full-width" name="Email" title="Enter Email" value="<?= $_SESSION['login']['Email'] ?>" placeholder="Enter Email" type="email" required="" aria-required="true">
                                        </div>
                                        <div class="form-field-wrapper form-center col-sm-12">
                                            <label for="billing_company" class="left">Địa chỉ giao hàng</label>
                                            <input class="input-md form-full-width" name="DiaChi" title="Company Name" value="<?= $_SESSION['login']['DiaChi'] ?>" placeholder="Company Name" type="text" required>
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
                                                        <?php foreach ($_SESSION['sanpham'] as $value) { ?>
                                                            <tr class="cart_item">
                                                                <td class="product-name"><?= $value['TenSP'] ?><strong> </strong></td>
                                                                <td class="product-total">
                                                                    <span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format($value['DonGia']) ?> VNĐ</span>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                    <tfoot>
                                                        <!-- <tr class="cart-subtotal">
                                                            <th>Tổng</th>
                                                            <td>
                                                                <strong><span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format($value['ThanhTien']) ?> VNĐ</span></strong>
                                                            </td>
                                                        </tr> -->
                                                        <tr class="shipping">
                                                            <th>Phí ship</th>
                                                            <td>
                                                                <strong><span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format(15000) ?> VNĐ</span></strong>
                                                            </td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>VAT</th>
                                                            <td>
                                                                <strong><span class="product-price-amount amount"><span class="currency-sign"></span>10%</span></strong>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td>
                                                                <span class="product-price-amount amount"><span class="currency-sign"></span><?= number_format($count + 15000 + $count * 0.1) ?> VNĐ</span>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>


                                            <!--send mail   -->



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
                                                <div class="place-order">
                                                    <button class="btn btn-lg btn-color form-full-width">Thanh toán</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </article>
                </div>
            </div>
        <?php 
        //send mail
        //include("./PHPMailer/src/PHPMailer.php");
        //include("./PHPMailer/src/Exception.php");
        //include("./PHPMailer/src/OAuth.php");
        //include("./PHPMailer/src/SMTP.php");
        //include("./PHPMailer/src/POP3.php");
        include("PHPMailermaster/class.smtp.php");
        include("PHPMailermaster/class.phpmailer.php");

        //use PHPMailer\PHPMailer\PHPMailer;
        //use PHPMailer\PHPMailer\SMTP;
        //use PHPMailer\PHPMailer\Exception;
        $mail = new PHPMailer(true);
        $mail->CharSet = "utf-8";

        try {
            $mail->SMTPDebug = 0;                    // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'loanhe1xb@gmail.com';                     // SMTP username
            $mail->Password   = '12092001';                               // SMTP password
            $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $em = $_SESSION['login']['Email'];
            $nhan =$_SESSION['login']['Ho'] ?>&nbsp;<?= $_SESSION['login']['Ten'];
            $mail->setFrom('system@xxx.com', 'Shopping');
            $mail->addAddress($em, $nhan);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            $content = "<table width = '500' border = '1' text-align = 'center'>";
            $content .= "<tr>  
                            <th>#</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>";
            $i = 0;
            foreach ($_SESSION['sanpham'] as $value) { 
                $i++;
                $content .="<tr> <td>$i</td> <td>".$value['TenSP']."</td> <td>".number_format($value['DonGia'])."</td> <td>".$value['SoLuong']."</td> <td>".number_format($count + 15000)."</td> </tr>";
            }
            $content .="</table>";

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Chào bạn!! Đây là thông tin bạn vừa mua sản phẩm của chúng tôi';
            $mail->Body    = $content;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Đã gửi đơn hàng thành công';
        } catch (Exception $e) {
            echo "Lỗi: {$mail->ErrorInfo}";
        }

        } else { ?>
            <div style="text-align: center;">
                <h6>Bạn chưa chọn sản phẩm ! Vui lòng đặt hàng trước khi thanh toán !</h6>
            </div>
        <?php } ?>
    </div>

</section>
<!-- End Page Content -->