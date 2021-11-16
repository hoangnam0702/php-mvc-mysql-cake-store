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
                        <div class="ibox-title">Danh mục</div>
                        <a href="?mod=danhmuc&act=add" type="button" class="btn btn-primary">Thêm mới</a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Categories code</th>
                                    <th>Categories name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($data as $row) { ?>
                                  <tr>
                                    <td><?= $row['MaDM'] ?></td>
                                    <td><?= $row['TenDM'] ?></td>
                                    <td>
                                      <a href="?mod=danhmuc&act=detail&id=<?= $row['MaDM'] ?>" class="btn btn-success">Xem</a>
                                      <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                                      <a href="?mod=danhmuc&act=edit&id=<?= $row['MaDM'] ?>" class="btn btn-warning">Sửa</a>
                                      <a href="?mod=danhmuc&act=delete&id=<?= $row['MaDM'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>         