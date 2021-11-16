<?php
require_once("Models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    function list()
    {
        //lấy ra danh sách danh mục = 3
        $data_danhmuc = $this->shop_model->danhmuc();

        $data_loaisp = $this->shop_model->loaisp(0, 8);

        $data_chitietDM = array();

        //get number color product 
        $S = $this->shop_model->getNumberProductSize('S');
        $M = $this->shop_model->getNumberProductSize('M');
        $L = $this->shop_model->getNumberProductSize('L');
        $XL = $this->shop_model->getNumberProductSize('XL');
        // end get 
        
        $data_random = $this->shop_model->random(3);

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->shop_model->chitietdanhmuc($i);
        }
        //trường hợp người dùng nhấn vào loại sản phẩm
        if (isset($_GET['danhmuc']) and isset($_GET['loai'])) {
            $data = $this->shop_model->chitiet($_GET['loai'],$_GET['danhmuc']);
            $data_tong = count($data);
        } else { //trường hợp người dùng nhấn vào danh mục
            if (isset($_GET['sp'])) {
                $data = $this->shop_model->sanpham_danhmuc(0, 9, $_GET['danhmuc']);
                $data_noibat = $this->shop_model->sanpham_noibat();
                $data_count = $this->shop_model->count_sp_dm($_GET['danhmuc']);
                $data_tong = $data_count['tong'];
            } else { //trường hợp người dùng tìm kiếm theo giá
                if (isset($_POST['price_min']) and isset($_POST['price_max'])) {
                    $chuoi = $_POST['price_min'] . '-' . $_POST['price_max'];
                    $arr = explode("-", $chuoi);
                    $data = $this->shop_model->dongia($arr['0'], $arr['1']);
                    $data_tong = count($data);
                } 
                else 
                {
                    //trường hợp người dùng tìm kiếm theo từ khóa
                    if (isset($_POST['keyword'])) 
                    {
                        $data = $this->shop_model->keywork($_POST['keyword']);
                        $data_noibat = $this->shop_model->sanpham_noibat();
                        $data_tong = count($data);
                    }
                    //trường hợp tìm bằng size 
                    else if (isset($_GET['Size']) and $_GET['Size']!=NULL) 
                    {
                        $data = $this->shop_model->sanpham_size($_GET['Size']);
                        $data_tong = count($data);
                    }
                    //trường hợp người dùng nhấn vào cửa hàng
                    else 
                    { 
                        $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
                        $limit = 9;
                        $start = ($id - 1) * $limit;
                        $data = $this->shop_model->limit($start, $limit);
                        $data_noibat = $this->shop_model->sanpham_noibat();
                        //$data_tong = 9;
                        // $data = $this->shop_model->limit(0, 9);
                        // $data_noibat = $this->shop_model->sanpham_noibat();
                        $data_count = $this->shop_model->count_sp();
                        $data_tong = $data_count['tong'];
                        $test = 0;
                    }
                }
            }
        }
        require_once('Views/index.php');
    }
}
