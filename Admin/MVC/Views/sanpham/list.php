<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">DataTables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <?php if (isset($_COOKIE['msg'])) { ?>
            <div class="alert alert-success">
                 <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
            </div>
        <?php } ?>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Sản phẩm</div>
           <a href="?mod=sanpham&act=add" type="button" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Count</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $value) { ?>
                        <tr>
                            <td><?= $value['MaSP'] ?></td>
                            <td><?= $value['TenSP'] ?></td>
                            <td><?= $value['DonGia'] ?></td>
                            <td><?= $value['SoLuong'] ?></td>
                            <td><?= $value['TrangThai'] ?></td>
                            <td>
                                <a href="../index.php?act=detail&id=<?= $row['MaSP'] ?>" type="button" class="btn btn-success" target="_blank">Xem</a>
                                <?php if (isset($_SESSION['isLogin_Admin']) and $_SESSION['isLogin_Admin'] == true) { ?>
                                    <a href="?mod=sanpham&act=delete&id=<?= $value['MaSP'] ?>" type="button" class="btn btn-danger">Xóa</a>
                                    <a href="?mod=sanpham&act=edit&id=<?= $value['MaSP'] ?>" type="button" class="btn btn-warning">Sửa</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
            <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
            <div class="wrap-1">
                <div class="wrap-2">
                    <div>
                        <img src="public/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                    </div>
                    <div class="color-white" style="margin-left:40px;">
                        <h1 class="font-bold">ADMINCA</h1>
                        <p class="font-16">Save your time, choose the best</p>
                        <ul class="list-unstyled">
                            <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                            <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                            <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                            <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                            <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                        </ul>
                    </div>
                </div>
                <div style="flex:1;">
                    <div class="d-flex justify-content-end wrap-3">
                        <div class="adminca-banner-b m-r-20">
                            <img src="public/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                        <div class="adminca-banner-b m-r-10">
                            <img src="public/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                    </div>
                    <div class="dev-img">
                        <img src="public/img/adminca-banner/sprite.png" />
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>