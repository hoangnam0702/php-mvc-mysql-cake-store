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
            <div class="ibox-title">Khuyến mãi</div>
            <a href="?mod=khuyenmai&act=add" type="button" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Mã khuyến mãi</th>
                        <th>Tên khuyến mãi</th>
                        <th>Loại khuyến mãi</th>
                        <th>Giá trị khuyến mãi</th>
                        <th>Ngày bắt đầu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $value) { ?>
                        <tr>
                            <td><?= $value['MaKM'] ?></td>
                            <td><?= $value['TenKM'] ?></td>
                            <td><?= $value['LoaiKM'] ?></td>
                            <td><?= $value['GiaTriKM'] ?></td>
                            <td><?= $value['NgayBD'] ?></td>
                            <td>
                                <a href="?mod=khuyenmai&act=detail&id=<?= $value['MaKM'] ?>" class="btn btn-success">Xem</a>
                                <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                                    <a href="?mod=khuyenmai&act=edit&id=<?= $value['MaKM'] ?>" class="btn btn-warning">Sửa</a>
                                    <a href="?mod=khuyenmai&act=delete&id=<?= $value['MaKM'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once('MVC/Views/premium.php'); ?>
</div>
<!-- END PAGE CONTENT-->