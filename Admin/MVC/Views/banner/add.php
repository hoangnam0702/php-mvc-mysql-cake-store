<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Quản lý banner</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Banner</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form action="?mod=banner&act=store" class="form-horizontal" id="form-sample-1" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hình ảnh</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="HinhAnh">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit">Thêm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require_once('MVC/Views/premium.php'); ?>
</div>
<!-- END PAGE CONTENT-->