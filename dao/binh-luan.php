<?php
require_once 'pdo.php';
    function thong_ke_binh_luan(){
        $sql = "SELECT hh.ma_hh, hh.ten_hh, COUNT(*) so_luong, 
                MIN(bl.ngay_bl) cu_nhat, Max(bl.ngay_bl) moi_nhat 
                FROM binh_luan bl JOIN hang_hoa hh 
                ON bl.ma_hh = hh.ma_hh GROUP BY hh.ma_hh, hh.ten_hh
                HAVING so_luong > 0";
        return pdo_query($sql);
    }
    function thong_ke_binh_luan_chi_tiet($ma_bl){
        $sql = "SELECT * FROM binh_luan bl JOIN khach_hang kh ON bl.ma_kh = kh.ma_kh  WHERE ma_hh = ?";
        return pdo_query($sql, $ma_bl);
    }
    // 
    function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
        $sql = "INSERT INTO binh_luan(ma_bl, noi_dung, ma_hh, ma_kh, ngay_bl) VALUES(null,'$noi_dung','$ma_hh', '$ma_kh', '$ngay_bl')";
        return pdo_execute($sql);
    }
    function binh_luan_select_by_hang_hoa($ma_hh){
        $sql = "SELECT * FROM binh_luan WHERE ma_hh = ?";
        return pdo_query($sql, $ma_hh);
    }
    function binh_luan_delete_by_id($ma_bl){
        $sql = "DELETE FROM binh_luan WHERE ma_bl = ?";
        return pdo_query($sql, $ma_bl);
    }

?>