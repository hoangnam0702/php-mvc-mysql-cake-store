<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    //them
    function ten_danh_muc($i)
    {
       $query = "SELECT TenDM from danhmuc where MaDM = $i";

       return $this->conn->query($query)->fetch_assoc();
    }
    //
    function count_reviewer($id)
    {
       $query = "SELECT COUNT(*) as tong FROM comment where MaSP = $id";

       return $this->conn->query($query)->fetch_assoc();
    }

    function comment($id)
    {
         $query = "SELECT cmt.*, nd.Ten FROM comment as cmt, nguoidung as nd where cmt.MaSP = $id and cmt.MaND = nd.MaND";

         require("result.php");

         return $data;
    }
    function add_comment($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO comment($f) VALUES ($v);";
        $trangthai = $this->conn->query($query);

        if($trangthai == true)
        {
            setcookie('msg',"Comment success !",time()+2);
            header("Location: ?act=detail&id=".$data['MaSP'].'#dxd');
        }
    }
   
}