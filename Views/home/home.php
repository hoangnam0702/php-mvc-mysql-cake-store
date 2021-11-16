<?php
require_once("banner.php");
?>
<!-- Promo Box -->

<section id="promo" class="section-padding-sm promo ">
    <div class="container">
        <div class="promo-box row">
            <div class="col-md-4 mtb-sm-30 promo-item">
                <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                <div class="info">
                    <a href="#">
                        <h6 class="normal">Vẫn chuyển miễn phí</h6>
                    </a>
                    <p>Mua trên 249k</p>
                </div>
            </div>
            <div class="col-md-4 mtb-sm-30 promo-item">
                <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
                <div class="info">
                    <a href="#">
                        <h6 class="normal">Đổi hàng</h6>
                    </a>
                    <p>Nếu sản phẩm bị lỗi</p>
                </div>
            </div>
            <div class="col-md-4 mtb-sm-30 promo-item">
                <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                <div class="info">
                    <a href="#">
                        <h6 class="normal">Hỗ trợ</h6>
                    </a>
                    <p>Hoạt động 24/7</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Promo Box -->

<!-- Promo Banner -->

<section id="promo-banner" class="section-padding-b">
    <div class="container">
        <div class="row">
            <!--Left Side-->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-30">
                        <!-- banner No.1 -->
                        <div class="promo-banner-wrap">
                            <a href="?act=detail&id=4" class="promo-image-wrap">
                                <img src="public/img/banhsinhnhat/tonghop.jpg" style="height: 300px" alt="Accesories" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mb-sm-30">
                        <!-- banner No.2 -->
                        <div class="promo-banner-wrap">
                            <a href="" class="promo-image-wrap">
                                <img src="public/img/banhkemsua/kem3.jpg" style="height: 400px" alt="Accesories" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Right Side-->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12 mb-30">
                        <!-- banner No.3 -->
                        <div class="promo-banner-wrap">
                            <a href="#" class="promo-image-wrap">
                               <img src="public/img/banhkemsocola/sp19.jpg" style="height: 400px" alt="Accesories" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mb-sm-30">
                        <!-- banner No.4 -->
                        <div class="promo-banner-wrap">
                            <a href="#" class="promo-image-wrap">
                                <img src="public/img/cuoi-hoi/mau-banh-cuoi-dep-1-150x150.jpg" style="height: 300px" alt="Accesories" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-
<!-- End Promo Banner -->

<!-- Product (Tab with Slider) -->
<section class="section-padding-b">
    <div class="container">
        <h2 class="page-title">Danh mục</h2>
    </div>
    <div class="container">
        <ul class="product-filter nav" role="tablist">
                <?php $i = 1;
                    foreach ($data_chitietDM as $row) { ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="" role="tab" data-toggle="tab">
                                <?= $data_danhmuc[$i - 1]['TenDM'] ?>
                            </a>
                        </li>
                <?php $i++;
                } ?>
        </ul>
        <div class="tab-content">
            <!-- Tab1 - Latest Product -->
            <div id="latest" role="tabpanel" class="tab-pane fade in active">
                <div id="new-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <?php if($data_sanpham1!=NULL){ for($i=0;$i<=6;$i++) { ?>
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="public/<?=$data_sanpham1[$i]['HinhAnh1']?>" alt="">
                            </div>
                            <div class="product-button">
                                <a href="?act=detail&id=<?=$data_sanpham1[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="?act=add_to_list&id=<?=$data_sanpham1[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="?act=detail&id=<?=$data_sanpham1[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">PTE</a>
                            <p class="product-title"><a href="product_detail.php"><?=$data_sanpham1[$i]['TenSP']?></a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                Ngon - Bổ - Rẻ
                            </p>
                            <h5 class="item-price"><?=number_format($data_sanpham1[$i]['DonGia'])?> VNĐ</h5>
                        </div>
                    </div>
                    <?php } }?>
                    <!-- end item 1  -->
                </div>
            </div>

            <!-- Tab2 - Best Sellar -->
            <div id="best-sellar" role="tabpanel" class="tab-pane fade">
                <div id="popular-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <?php if($data_sanpham2!=NULL){ for($i=0;$i<=6;$i++) { ?>
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="public/<?=$data_sanpham2[$i]['HinhAnh1']?>" alt="">
                            </div>
                            <div class="product-button">
                                <a href="?act=detail&id=<?=$data_sanpham2[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="?act=add_to_list&id=<?=$data_sanpham2[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="?act=detail&id=<?=$data_sanpham2[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">PTE</a>
                            <p class="product-title"><a href="product_detail.php"><?=$data_sanpham2[$i]['TenSP']?></a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                Ngon - Bổ - Rẻ
                            </p>
                            <h5 class="item-price"><?=number_format($data_sanpham2[$i]['DonGia'])?> VNĐ</h5>
                        </div>
                    </div>
                    <?php } }?>
                </div>
            </div>

            <!-- Tab3 - Features -->
            <div id="features" role="tabpanel" class="tab-pane fade">
                <div id="features-product" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <?php if($data_sanpham3!=NULL){ for($i=0;$i<=6;$i++) { ?>
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="public/<?=$data_sanpham3[$i]['HinhAnh1']?>" alt="">
                            </div>
                            <div class="product-button">
                                <a href="?act=detail&id=<?=$data_sanpham3[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="?act=add_to_list&id=<?=$data_sanpham3[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="?act=detail&id=<?=$data_sanpham3[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">PTE</a>
                            <p class="product-title"><a href="product_detail.php"><?=$data_sanpham3[$i]['TenSP']?></a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                Ngon - Bổ - Rẻ - Đẹp
                            </p>
                            <h5 class="item-price"><?=number_format($data_sanpham3[$i]['DonGia'])?> VNĐ</h5>
                        </div>
                    </div>
                    <?php } }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product (Tab with Slider) -->

<!-- Categories -->
<!--<section class="">
    <div class="section-padding container-fluid bg-image text-center overlay-light90" data-background-img="img/bg/bg_5.jpg" data-bg-position-x="center center">
        <div class="container">
            <h2 class="page-title">Mua sắm trong danh mục</h2>
        </div>
    </div>
    <div class="container container-margin-minus-t">
        <div class="row">
            <?php if($data_sanpham!=NULL){ for($i=0;$i<=2;$i++){?>
            <div class="col-md-4">
                <div class="categories-box">
                    <div class="categories-image-wrap">
                        <img src="public/<?=$data_sanpham[$i]['HinhAnh']?>" alt="" />
                    </div>
                    <div class="categories-content">
                        <a href="#">
                            <div class="categories-caption">
                                <h6 class="normal"><?=$data_sanpham[$i]['TenSP']?></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php } }?>
        </div>
    </div>
</section>-->
<!-- End Categories -->

<!-- Newsletter -->

<section class="section-padding dark-bg container-fluid bg-image text-center overlay-black40"  data-bg-position-x="center top">
        <div class="container newsletter section-padding-b">
            <h2 class="page-title">Subscribe To Newsletter</h2>
                <form name="form-newsletter" class="newsletter-from" id="form-newsletter" method="post">
                    <div class="form-input">
                        <input class="input-lg" name="frmemail" id="frmemail" placeholder="Enter Email Address..." title="Enter Email Address..." type="text">
                        </div>
                        <button class="btn btn-lg btn-color">Sing Up</button>
                </form>
            <p class="italic">Sign up For Exclusive Updates, New Arrivals And Insider-Only Discount.</p>
        </div>
</section>

            <!-- Newsletter -->

<section class="">
                <div class="container container-margin-minus-t">
                    <div class="home-about-blocks">
                        <div class="col-12 about-blocks-wrap">
                            <div class="row">
                                <!--Customer Say-->
                                <div class="col-sm-6 col-md-6 customer-say">
                                    <div class="about-box-inner">
                                        <h4 class="mb-25">Customer Say</h4>

                                        <!--Customer Carousel-->
                                        <div class="testimonials-carousel owl-carousel owl-theme nf-carousel-theme1">
                                            <div class="product-item">
                                                <p class="large quotes">I think when we use 'stress', we are often using a kind of dummy word to try to fit many different things into one big category</p>
                                                <h6 class="quotes-people">- Jeff Dunham (Apple)</h6>
                                            </div>
                                            <div class="product-item">
                                                <p class="large quotes">It's true, you can never eat a pet you name. And anyway, it would be like a ventriloquist eating his dummy</p>
                                                <h6 class="quotes-people">- George Lois (microsoft)</h6>
                                            </div>
                                        </div>
                                        <!--End Customer Carousel-->
                                    </div>
                                </div>

                                <!--About Shop-->
                                <div class="col-sm-6 col-md-6 about-shop">
                                    <div class="about-box-inner">
                                        <h4 class="mb-25">About PTE</h4>
                                        <p class="mb-20">Welcome to <b class="black">PTE</b> - where you can enjoy a variety of cakes, very safe and beautiful.</p>
                                        <a href="#" class="btn btn-xs btn-black">More <i class="fa fa-angle-right right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About blocks -->

            <!-- Brnad Logo -->
            <section id="brand-logo" class="section-padding brand-logo">
                <div class="container">
                    <ul class="list-none-ib brand-logo-carousel owl-carousel owl-theme">
                        <li class="brand-item">
                        <a href="#">
                            Bánh sinh nhật
                        </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                Bánh cưới - hỏi
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                Bánh cupcake
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                Bánh lạnh
                            </a>
                        </li>
                        <li class="brand-item">
                            <a href="#">
                                Bánh su kem
                            </a>
                        </li>

                    </ul>

                </div>
            </section>
            <!-- End Brnad Logo -->

<!-- New Product -->
<section class="section-padding">
    <div class="container">
        <h2 class="page-title">Sản phẩm mới</h2>
    </div>
    <div class="container">
        <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
            <!-- item.1 -->
            <?php if($new_product!=null){ for($i=0;$i<=6;$i++){?>
            <div class="product-item">
                <div class="product-item-inner">
                    <div class="product-img-wrap">
                        <img src="public/<?=$new_product[$i]['HinhAnh1']?>" alt="">
                    </div>
                    <div class="product-button">
                        <a href="?act=detail&id=<?=$new_product[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                        <a href="?act=add_to_list&id=<?=$new_product[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                        <a href="?act=detail&id=<?=$new_product[$i]['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                    <a class="tag" href="#">PTE</a>
                    <p class="product-title"><a href="product_detail.html"><?=$new_product[$i]['TenSP']?></a></p>
                    <div class="product-rating">
                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                            <span style="width: 60%"></span>
                        </div>
                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                    </div>
                    <p class="product-description">
                        Ngon - Bổ - Rẻ
                    </p>
                    <h5 class="item-price"><?=number_format($new_product[$i]['DonGia'])?> VNĐ</h5>
                </div>
            </div>
            <?php } }?>
        </div>
    </div>
</section>
<!-- End New Product -->

<!-- Instagram -->
<!--<section class="section-padding instagram bg-gray">
    <div class="container text-center">
        <h2 class="page-title">ART-SHOP on Instagram</h2>
        <p class="">Follow Us <a class="strong" href="#">@MayShop</a></p>
    </div>
    <div class="container">
        <ul class="intagram-feed">
            <li>
                <a href="#">
                    <img src="public/img/instagram/insta-1.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="public/img/instagram/insta-2.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="public/img/instagram/insta-3.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="public/img/instagram/insta-4.jpg" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="public/img/instagram/insta-5.jpg" alt="">
                </a>
            </li>
        </ul>
    </div>
</section>-->