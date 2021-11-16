<?php
require_once("model.php");
class Shop extends Model
{
    
    function loaisp($a,$b)
    {
        $query = "SELECT * FROM loaisanpham WHERE   MaDM = 1 LIMIT $a, $b";

        require("result.php");
        
        return $data;
    }
    function keywork($a)
    {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM sanpham WHERE  TenSP LIKE $a LIMIT 0,9";

        require("result.php");
        
        return $data;
    }
    function dongia($a,$b)
    {
        if($a == 0 ){
            $a = "100000";
        }else{
            $a = $a."000";
        }
        $b = $b."000";
        $query = "SELECT * FROM sanpham WHERE  DonGia > $a AND DonGia < $b  LIMIT 0, 9";

        require("result.php");
    
        return $data;
    }
    
    function chitiet($id,$sp)
    {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = $id and MaDM = $sp";

        require("result.php");
        
        return $data;
    }
    function sanpham_noibat()
    {
        $query = "SELECT * FROM sanpham WHERE MaSP = (SELECT MaSP sp FROM chitiethoadon GROUP BY MaSP ORDER BY COUNT(MaSP) DESC LIMIT 1)";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp()
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm,$ctdm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm And MaLSP = $ctdm";

        return $this->conn->query($query)->fetch_assoc();
    }
    //ham moi

    function count_size($Size)
    {
        $query = "SELECT COUNT(Size) as tong FROM sanpham WHERE Size = $Size";

        return $this->conn->query($query)->fetch_assoc();
    }

    function sanpham_size($Size)
    {
        $query = "SELECT * FROM sanpham WHERE TrangThai = 1 AND Size = '$Size'";

        require("result.php");
        
        return $data;
    }
    function getNumberProductSize($Size)
    {
        $query = "SELECT *  FROM sanpham WHERE TrangThai = 1 AND Size = '$Size'";

        require("result.php");
        
        return $data;
    }
    function chitiet1($id,$sp)
    {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = $id and MaDM = $sp";

        require("result.php");
        
        return $data;
    }
}