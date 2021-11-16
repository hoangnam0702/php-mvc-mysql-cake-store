<?php if ($data != null) { ?>
    <!-- Bread Crumb -->
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb-link">
                        <a href="?act=home">Home</a>
                        <a href="?act=shop">Cửa hàng</a>
                        <span>Chi tiết sản phẩm</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Bread Crumb -->

    <!-- Page Content -->
    <section id="product-ID_XXXX" class="content-page single-product-content">

        <!-- Product -->
        <div id="product-detail" class="container">
            <div class="row">
                <!-- Product Image -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="product-page-image">
                        <!-- Slick Image Slider -->
                        <div class="product-image-slider product-image-gallery" id="product-image-gallery" data-pswp-uid="3">
                            <?php if ($data['HinhAnh1'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh1'] ?>" data-size="" data-med="public/<?= $data['HinhAnh1'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh1'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh2'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh2'] ?>" data-size="" data-med="public/<?= $data['HinhAnh2'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh2'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh3'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh3'] ?>" data-size="" data-med="public/<?= $data['HinhAnh3'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh3'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>
                            <!--<?php if ($data['HinhAnh4'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh4'] ?>" data-size="" data-med="public/<?= $data['HinhAnh4'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh4'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh5'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh5'] ?>" data-size="" data-med="public/<?= $data['HinhAnh5'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh5'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh6'] != null) { ?>
                                <div class="item">
                                    <a class="product-gallery-item" href="public/<?= $data['HinhAnh6'] ?>" data-size="" data-med="public/<?= $data['HinhAnh6'] ?>" data-med-size="">
                                        <img src="public/<?= $data['HinhAnh6'] ?>" alt="image 1" />
                                    </a>
                                </div>
                            <?php } ?>-->
                        </div>
                        <!-- End Slick Image Slider -->

                        <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i class="fa fa-expand" aria-hidden="true"></i></a>


                    </div>

                    <!-- Slick Thumb Slider -->
                    <div class="product-image-slider-thumbnails">
                        <?php if ($data['HinhAnh1'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh1'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>
                        <?php if ($data['HinhAnh2'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh2'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>
                        <?php if ($data['HinhAnh3'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh3'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>
                        <!--<?php if ($data['HinhAnh4'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh4'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>
                        <?php if ($data['HinhAnh5'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh5'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>
                        <?php if ($data['HinhAnh6'] != null) { ?>
                            <div class="item">
                                <img src="public/<?= $data['HinhAnh6'] ?>" alt="image 1" />
                            </div>
                        <?php } ?>-->
                    </div>
                    <!-- End Slick Thumb Slider -->
                </div>
                <!-- End Product Image -->

                <!-- Product Content -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="product-page-content">
                        <h2 class="product-title"><?= $data['TenSP'] ?></h2>
                        <div class="product-rating">
                            <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                <span style="width: 60%"></span>
                            </div>
                            <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                        </div>
                        <div class="product-price">
                            <del>400,000</del><span><span class="product-price-sign"></span><span class="product-price-text"><?= number_format($data['DonGia']) ?> VNĐ</span></span>
                        </div>
                        <p class="product-description">
                            <?= $data['MoTa'] ?>
                        </p>
                        <div class="row product-filters">
                            <!-- <form class="col-md-6 filters-color">
                                <label for="select-color">Select Color</label>

                                <select name="select-color" id="select-color" class="nice-select-box select-color">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="#f00">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="orange">Orange</option>
                                            <option value="green">Green</option>
                                            <option value="black">Black</option>
                                            <option value="gray">Gray</option>
                                        </select>

                                <div class="color-selector">
                                    <div class="entry active" style="background: #000;">&nbsp;</div>
                                    <div class="entry" style="background: #7eabe9;">&nbsp;</div>
                                    <div class="entry" style="background: #f27123;">&nbsp;</div>
                                    <div class="entry" style="background: #d1d1d1;">&nbsp;</div>
                                </div>
                            </form> -->
                            <form class="col-md-6 filters-size">
                                <label for="select-size">Select Size</label>
                                <!--<select name="select-size" id="select-size" class="nice-select-box">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="l">L</option>
                                            <option value="m">M</option>
                                            <option value="s">S</option>
                                            <option value="x">X</option>
                                            <option value="xl">XL</option>
                                            <option value="xs">XS</option>
                                            <option value="xxl">XXL</option>
                                        </select>-->
                                <div class="size-selector">
                                    <div class="entry active">S</div>
                                    <div class="entry">M</div>
                                    <div class="entry">L</div>
                                    <div class="entry">X</div>
                                    <div class="entry">XL</div>
                                </div>
                            </form>
                        </div>
                        <form class="single-variation-wrap">
                            <!-- <div class="product-quantity">
                                <span data-value="+" class="quantity-btn quantityPlus"></span>
                                <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number" />
                                <span data-value="-" class="quantity-btn quantityMinus"></span>
                            </div> -->
                            <a href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" type="submit" class="btn btn-lg btn-black"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Thêm vào giỏ</a>
                        </form>
                        <div class="single-add-to-wrap">
                            <a class="single-add-to-wishlist"><i class="fa fa-heart left" aria-hidden="true"></i><span>Thêm vào yêu thích</span></a>
                            <!-- <a class="single-add-to-compare "><i class="fa fa-refresh left" aria-hidden="true"></i><span>Add to Compare</span></a> -->
                        </div>
                        <div class="product-meta">
                            <span>SKU : <span class="sku" itemprop="sku">005687</span></span>
                            <span>Danh mục : <span class="category" itemprop="category"><?= $ten_danh_muc['TenDM'] ?></span></span>
                        </div>
                        <div class="product-share">
                            <span>Share :</span>
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://nileforest.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://plus.google.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="mailto:?subject=Check this http://nileforest.com/" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="http://pinterest.com/pin/create/button/?url=http://nileforest.com/exampleImage.jpg" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->

        <!-- Product Content Tab -->
        <div class="product-tabs-wrapper container">
            <ul class="product-content-tabs nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Reviews (<span><?= $data_tong ?></span>)</a>
                </li>
            </ul>
            <div class="product-content-Tabs_wraper tab-content container">
                <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                    <div id="tab_reviews-coll" class=" product-collapse collapse container">
                        <div class="row">
                            <?php if (isset($_SESSION['login'])) { ?>
                                <div class="review-form-wrapper col-md-6">
                                    <h6 class="review-title">Thêm bình luận</h6>
                                    <form class="comment-form" action="?act=detail&xuli=add_comment&id=<?= $data['MaSP'] ?>" method="POST" role="form">
                                        <div class="form-field-wrapper">
                                            <label>Đánh giá của bạn *(Số sao)</label>
                                            <p class="stars">
                                                <span>
                                                    <input class="input-md" type="number" name="star" id="" min="1" max="5" required>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <label>Bình luận của bạn <span class="required">*</span></label>
                                            <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                            <!-- <button type="submit">submit</button> -->
                                        </div>
                                    </form>
                                </div>
                            <?php } else { ?>
                                <div class="review-form-wrapper col-md-6">
                                    <h6 class="review-title">Thêm bình luận</h6>
                                    <form class="comment-form" action="#" method="POST" role="form">
                                        <div class="form-field-wrapper">
                                            <label>Đánh giá của bạn *(Số sao)</label>
                                            <p class="stars">
                                                <span>
                                                    <input class="input-md" type="number" name="star" id="" min="1" max="5" required>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <label>Bình luận của bạn (Bạn phải đăng nhập để bình luận !)<span class="required">*</span></label>
                                            <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                        </div>
                                        <div class="form-field-wrapper">
                                            <!-- <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit"> -->
                                            <!-- <button type="submit">submit</button> -->
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>

                            <div class="comments col-md-6">
                                <h6 class="review-title">Customer Reviews</h6>
                                <!--<p class="review-blank">There are no reviews yet.</p>-->
                                <ul class="commentlist">
                                    <?php foreach ($data_comment as $value) { ?>

                                        <li id="comment-101" class="comment-101">
                                            <img src="public/img/avatar.jpg" class="avatar" alt="author" />
                                            <div class="comment-text">
                                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                    <span style="width: <?= $value['star'] * 20 ?>%"></span>
                                                </div>
                                                <p class="meta">
                                                    <strong itemprop="author"><?= $value['Ten'] ?></strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime=""><?= $value['CreateAt'] ?></time>
                                                </p>
                                                <div class="description" itemprop="description">
                                                    <p><?= $value['NoiDung'] ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordian Content -->
                </div>
            </div>
        </div>
        <!-- End Product Content Tab -->

        <!-- Product Carousel -->
        <div class="container product-carousel">
            <h2 class="page-title">Sản phẩm tương tự</h2>
            <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                <!-- item.1 -->
                <?php foreach ($data_lq as $row) { ?>
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap">
                                <img src="public/<?= $row['HinhAnh1'] ?>" alt="">
                            </div>
                            <div class="product-button">
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                <a href="?act=detail&id=<?= $row['MaSP'] ?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <a class="tag" href="#">Men Fashion</a>
                            <p class="product-title"><a href="product_detail.html"><?= $row['TenSP'] ?></a></p>
                            <div class="product-rating">
                                <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                    <span style="width: 60%"></span>
                                </div>
                                <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                            </div>
                            <p class="product-description">
                                <?= $row['MoTa'] ?>
                            </p>
                            <h5 class="item-price"><?= number_format($row['DonGia']) ?> VNĐ</h5>
                        </div>
                    </div>
                <?php } ?>



            </div>
        </div>
        <!-- End Product Carousel -->
    </section>
<?php } else {
    require_once("Views/error_404.php");
} ?>