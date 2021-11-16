<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Quản lý banner</h1>
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
            <div class="ibox-title">Banner</div>
            <a href="?mod=banner&act=add" type="button" class="btn btn-primary">Thêm mới</a>
        </div>

        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình Ảnh</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $value) { ?>
                        <tr>
                            <td><?= $value['Id'] ?></td>
                            <td style="width: 70%; height: auto;">
                                <?=$value['HinhAnh']?>
                            </td>
                            <td>
                                <a href="?mod=banner&act=detail&id=<?= $value['Id'] ?>" class="btn btn-success">Xem</a>
                                <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                                    <a href="?mod=banner&act=edit&id=<?= $value['Id'] ?>" class="btn btn-warning">Sửa</a>
                                    <a href="?mod=banner&act=delete&id=<?= $value['Id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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