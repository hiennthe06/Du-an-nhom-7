<?php
    require_once 'pdo.php';
    // Thực hiện chức năng của admin
    function set_hang_hoa($ten_hang, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai){
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet,ma_loai) 
        VALUES('$ten_hang', '$don_gia', '$giam_gia', '$hinh', '$ngay_nhap', '$mo_ta', '$dac_biet','$ma_loai')";
        return pdo_execute($sql);
    }
    function get_loai(){
        $sql = "SELECT * FROM loai";
        return pdo_query($sql);
    }
    function get_hang_hoa(){
        $sql = "SELECT * FROM hang_hoa ";
        return pdo_query($sql);
    }
    function get_ma_hang_hoa($ma_hh){
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh = ?";
        return pdo_query_one($sql, $ma_hh);
    }
    function update_hang_hoa($ten_hang, $don_gia1, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai, $ma_hh){
        $sql = "UPDATE hang_hoa SET ten_hh = '$ten_hang',
                                    don_gia = '$don_gia1',
                                    giam_gia = $giam_gia,
                                    hinh = '$hinh',
                                    ngay_nhap = '$ngay_nhap',
                                    mo_ta = '$mo_ta',
                                    ma_loai = '$ma_loai',
                                    dac_biet = '$dac_biet' 
                                    WHERE ma_hh = $ma_hh";
        return pdo_query_one($sql);
    }
    function delete_hang_hoa($ma_hh){
        $sql = "DELETE FROM hang_hoa WHERE ma_hh= ?";
        return pdo_query_one($sql, $ma_hh);
    }
    function thong_ke_hang_hoa(){
        $sql= "SELECT lo.ma_loai, lo.ten_loai, COUNT(*) so_luong,
               MIN(hh.don_gia) gia_min, MAX(hh.don_gia) gia_max,
               AVG(hh.don_gia) gia_avg FROM hang_hoa hh JOIN loai lo
               ON lo.ma_loai = hh.ma_loai GROUP BY lo.ma_loai, lo.ten_loai";
        return pdo_query($sql);
    }
    
?>