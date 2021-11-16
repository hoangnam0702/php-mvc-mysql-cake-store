<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Đon Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['Ten'] ?></td>
                <td><?= number_format($row['DonGia']) ?> VNĐ</td>
                <td><?= $row['SoLuong'] ?></td>
                <td><?= number_format($row['DonGia'] * $row['SoLuong']) ?> VNĐ</td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>