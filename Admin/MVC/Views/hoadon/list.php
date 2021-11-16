<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">DataTables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">DataTables</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Table</div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Tên khách hàng</th>
                        <th>Ngày đặt</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Điện thoại</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $value){?>
                    <tr>
                        <td><?=$value['NguoiNhan']?></td>
                        <td><?=$value['NgayLap']?></td>
                        <td><?=$value['DiaChi']?></td>
                        <td><?=number_format($value['TongTien'])?> VNĐ</td>
                        
                        <td><?=$value['SDT']?></td>
                        <td>
                            <?php if($value['TrangThai']==0) { 
                                echo 'Chưa duyệt';
                            } else echo 'Đã duyệt';?>
                        </td>
                        <td>
                            <a href="?mod=hoadon&act=chitiet&id=<?=$value['MaHD']?>" class="btn btn-success">Views</a>
                            <?php if (isset($_SESSION['isLogin_Admin']) and $_SESSION['isLogin_Admin'] == true) { ?>
                                <a href="?mod=hoadon&act=delete&id=<?=$value['MaHD']?>" class="btn btn-danger">Delete</a>
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
<!-- END PAGE CONTENT-->