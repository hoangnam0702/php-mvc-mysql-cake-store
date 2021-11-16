<?php
if (isset($data) and $data != NULL) {
    foreach ($data as  $value) {
?>
        <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
            <div class="product-item">
                <div class="product-item-inner">
                    <div class="product-img-wrap">
                        <img src="public/<?= $value['HinhAnh1'] ?>" alt="">
                    </div>
                    <div class="product-button">
                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                        <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                        <a href="?act=detail&id=<?=$value['MaSP']?>" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                    <a class="tag" href="#">PTE</a>
                    <p class="product-title"><a href="product_detail.html"><?= $value['TenSP'] ?></a></p>
                    <div class="product-rating">
                        <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                            <span style="width: 60%"></span>
                        </div>
                        <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                    </div>
                    <p class="product-description">
                        Ngon - Bổ - Rẻ
                    </p>
                    <h5 class="item-price"><?= number_format($value['DonGia']) ?> VNĐ</h5>
                </div>
            </div>
        </div>
<?php }
} else {
    echo 'Không có dữ liệu';
} ?>