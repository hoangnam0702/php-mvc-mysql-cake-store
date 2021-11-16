<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">DataTables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Người dùng</div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Mã người dùng</th>
                        <th>Tài khoản</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Giới tính</th>
                        <th>Quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $value){?>
                    <tr>
                        <td><?=$value['MaND']?></td>
                        <td><?=$value['TaiKhoan']?></td>
                        <td><?=$value['SDT']?></td>
                        <td><?=$value['Email']?></td>
                        <td><?=$value['GioiTinh']?></td>
                        <td>
                            <?php if($value['MaQuyen']==1) echo 'Khách hàng'?>
                            <?php if($value['MaQuyen']==2) echo 'Quản trị viên'?>
                        </td>
                        <td>
                            <a href="?mod=nguoidung&act=detail&id=<?=$value['MaND']?>" class="btn btn-success">Views</a>
                            <?php if (isset($_SESSION['isLogin_Admin']) and $_SESSION['isLogin_Admin'] == true) { ?>
                                <a href="?mod=nguoidung&act=delete&id=<?=$value['MaND']?>" class="btn btn-danger" onclick="return confirm('Bạn có thực sự muốn xóa ?');">Delete</a>
                                <a href="?mod=nguoidung&act=edit&id=<?=$value['MaND']?>" class="btn btn-warning">Edit</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php require_once('MVC/Views/premium.php');?>
</div>
<!-- END PAGE CONTENT-->