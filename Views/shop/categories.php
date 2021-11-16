<div class="widget-sidebar">
    <h6 class="widget-title">Danh mục</h6>
    <ul class="widget-content widget-product-categories jq-accordian">
        <!-- lặp để lấy danh mục    -->
        <?php $i = 1; foreach ($data_chitietDM as $row) { ?>
        <li>
            <a><?=$data_danhmuc[$i-1]['TenDM']?></a>
            <ul class="children">
                <?php foreach ($row as $value) { ?>
                    <a href="?act=shop&danhmuc=<?=$value['MaDM']?>&loai=<?=$value['MaLSP'] ?>&tenloai=<?=$value['TenLSP']?>"><?= $value['TenLSP'] ?></a>
                <?php } ?>
            </ul>
        </li>
        <?php $i++;}?>
    </ul>
</div>