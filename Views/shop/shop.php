            <!-- Bread Crumb -->
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb-link">
                                <a href="?act=home">Trang chủ</a>
                                <a href="?act=shop">Cửa hàng</a>
                                <span>//</span>
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

                        <!-- Product Content -->
                        <div class="col-md-9 push-md-3">
                            <!-- Title -->
                            <div class="list-page-title">
                                <h2 class=""><?= isset($_GET['tenloai']) ? $_GET['tenloai']: 'Cửa hàng'?><small>&ensp;<?= $data_tong ?>&ensp;Sản phẩm</small></h2>
                            </div>
                            <!-- End Title -->

                            <!-- Product Filter -->
                            <div class="product-filter-content">
                                <div class="product-filter-content-inner">
                                    <!--Product Sort By-->
                                    <form class="product-sort-by">
                                        <label for="short-by">Sắp xếp</label>
                                        <select name="short-by" id="short-by" class="nice-select-box">
                                            <option value="default_sorting" selected="selected">Mặc định</option>
                                            <option value="price_low_to_high">Giá: thấp đến cao</option>
                                            <option value="price_high_to_low">Giá: cao đến thấp</option>
                                        </select>
                                    </form>
                                    <script>

                                    </script>

                                    <!--Product List/Grid Icon-->
                                    <div class="product-view-switcher">
                                        <label>View</label>
                                        <div class="product-view-icon product-grid-switcher product-view-icon-active">
                                            <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="product-view-icon product-list-switcher">
                                            <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Product Filter -->

                            <!-- Product Grid -->
                            <div class="row product-list-item">
                                <!-- item.1 -->
                                <?php require_once('list_product.php') ?>
                                <!-- end item 1 -->
                            </div>
                            <!-- End Product Grid -->

                            <div class="pagination-wraper">
                                <div class="pagination">
                                    <ul class="pagination-numbers">
                                        <?php if ($data_tong > 9 and isset($test)) {
                                            for ($i = 1; $i <= ceil($data_tong / 9); $i++) { ?>
                                                <li>
                                                    <a href="?act=shop&trang=<?= $i ?>" class="page-number current"><?= $i ?></a>
                                                </li>
                                        <?php }
                                        } ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- End Product Content -->

                        <!-- Sidebar -->
                        <div class="sidebar-container col-md-3 pull-md-9">

                            <!-- Categories -->
                            <?php require_once('categories.php') ?>

                            <!-- Filter By Price -->

                            <div class="widget-sidebar widget-price-range">
                                <h6 class="widget-title">Tìm theo giá</h6>
                                <form class="widget-content" method="POST" action="index.php?act=shop">
                                    <div class="price-range-slider"></div>
                                    <div class="price-range-amount">
                                        <input id="price_range_min" name="price_min" value="" data-min="<?= isset($_POST['price_min']) ? $_POST['price_min'] : '100' ?>" placeholder="Min price" style="display: none;" type="text">
                                        <input id="price_range_max" name="price_max" value="" data-max="<?= isset($_POST['price_max']) ? $_POST['price_max'] : '500' ?>" placeholder="Max price" style="display: none;" type="text">
                                        <div id="price-range-from-to">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-xs btn-black pull-left" type="submit">Tìm kiếm</button>
                                </form>
                            </div>
                            <!-- Filter By Color -->
                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title">Tìm theo size</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="?act=shop&Size=S">
                                            S
                                        </a>
                                        <span class="size-count">(<?= sizeof($S) ?>)</span>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="?act=shop&Size=M">
                                            M
                                        </a>
                                        <span class="size-count">(<?= sizeof($M) ?>)</span>
                                    </li>
                                     <br>
                                    <li>
                                        <a href="?act=shop&Size=L">
                                            L
                                        </a>
                                        <span class="size-count">(<?= sizeof($L) ?>)</span>
                                    </li>
                                     <br>
                                    <li>
                                        <a href="?act=shop&Size=XL">
                                            XL
                                        </a>
                                        <span class="size-count">(<?= sizeof($XL) ?>)</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Filter By Tag -->
                            <div class="widget-sidebar widget-filter-tag">
                                <h6 class="widget-title">Popular Tag</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">Bánh kem</a>
                                    </li>
                                    <li>
                                        <a href="#">Bánh sinh nhật</a>
                                    </li>
                                    <li>
                                        <a href="#">Bánh đám cưới</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Widget Product -->
                            <div class="widget-sidebar widget-product">
                                <h6 class="widget-title">Sản phẩm phổ biến</h6>
                                <ul class="widget-content">
                                    <?php if (isset($data_random) and $data_random!= null) { foreach($data_random as $value){?>

                                        <li>
                                            <a class="product-img" href="#">
                                                <img src="public/<?=$value['HinhAnh1']?>" alt="">
                                            </a>
                                            <div class="product-content">
                                                <a class="product-link" href="#"><?=$value['TenSP']?></a>
                                                <div class="star-rating">
                                                    <span style="width: 80%;"></span>
                                                </div>
                                                <span class="product-amount"><?=number_format($value['DonGia'])?> VNĐ</span>
                                            </div>
                                        </li>

                                    <?php } }?>


                                </ul>
                            </div>

                            <div class="widget-sidebar widget-banner">
                                <a href="#" class="banner-image-wrap">
                                    <img src="public/img/banner/banner_115146.jpg" alt="" />
                                </a>
                            </div>

                        </div>
                        <!-- End Sidebar -->

                    </div>
                </div>
            </section>
            <!-- End Page Content -->