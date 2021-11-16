<?php
require_once("Models/Detail.php");
class DetailController
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Detail();
    }
    
    function list()
    {

        $data_danhmuc = $this->detail_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        }

        $id = $_GET['id'];

        $data = $this->detail_model->detail_sp($id);

        if($data!=null){
        $data_lq = $this->detail_model->sanpham_danhmuc(1,7,$data['MaDM']);
        //them
        $ten_danh_muc = $this->detail_model->ten_danh_muc($data['MaDM']);
        //
        }
        $count_reviewer = $this->detail_model->count_reviewer($id);
        
        $data_tong = $count_reviewer['tong'];

        $data_comment = $this->detail_model->comment($id);


        require_once('Views/index.php');
    }

    function add_comment()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = date('Y-m-d');
        $data = array(
            'MaND' => $_SESSION['login']['MaND'],
            'CreateAt' => $time,
            'star' => $_POST['star'],
            'MaSP' => $_GET['id'],
            'NoiDung' => $_POST['comment']
        );
        $this->detail_model->add_comment($data);
    }
}