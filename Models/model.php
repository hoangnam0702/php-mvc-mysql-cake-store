<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function All_History($ma)
    {
        $query = "select hd.*, ct.MaSP,  ct.SoLuong, ct.DonGia  from hoadon as hd, sanpham as sp, chitiethoadon as ct where hd.MaND = $ma and hd.MaHD = ct.MaHD and ct.MaSP = sp.MaSP";

        require("result.php");

        return $data;
        
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from danhmuc";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function loaisanpham($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";

        require("result.php");
        
        return $data;
    }
    function banner()
    {
        $query =  "SELECT * from Banner";

        require("result.php");
        
        return $data;
    }
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * from sanpham WHERE TrangThai = 1  and MaDM = $danhmuc ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");
        
        return $data;
    }
    //ham moi
    function getNewProduct()
    {
        $query = "SELECT * FROM sanpham WHERE TrangThai = 1 ORDER BY ThoiGian DESC limit 0,7";

        require("result.php");

        return $data;
    }
    //
}
