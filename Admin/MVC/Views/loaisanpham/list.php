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
           <h2 class="ibox-title">Loại sản phẩm</h2>
           <a href="?mod=loaisanpham&act=add" type="button" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Type code</th>
                        <th>Type name</th>
                        <th>Desciption</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) { ?>
                      <tr>
                        <td><?= $row['MaLSP'] ?></td>
                        <td><?= $row['TenLSP'] ?></td>
                        <td><?= $row['Mota'] ?></td>
                        <td>
                          <a href="?mod=loaisanpham&act=detail&id=<?= $row['MaLSP'] ?>" class="btn btn-success">Xem</a>
                          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                          <a href="?mod=loaisanpham&act=edit&id=<?= $row['MaLSP'] ?>" class="btn btn-warning">Sửa</a>
                          <a href="?mod=loaisanpham&act=delete&id=<?= $row['MaLSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                          <?php }?>
                        </td>
                      </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once('MVC/Views/premium.php');?>
</div>