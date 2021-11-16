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
            <div class="ibox-title">Detail Banner</div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình Ảnh</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><?= $data['Id'] ?></td>
                            <td style="width: 70%; height: auto;">
                                <img src="../public/<?= $data['HinhAnh'] ?>" alt="">
                            </td>
                        </tr>       
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once('MVC/Views/premium.php'); ?>
</div>
<!-- END PAGE CONTENT-->