<?php
    require_once 'pdo.php';
    function hang_hoa_select($select_loai){
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
        return pdo_query($sql, $select_loai);
    }
    function hang_hoa_select_all(){
        $sql = "SELECT * FROM hang_hoa";
        return pdo_query($sql);
    }
    function hang_hoa_select_keyword($keyword){
        $sql = "SELECT * FROM hang_hoa hh JOIN loai lo ON lo.ma_loai=hh.ma_loai
                WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
    }
    function hang_hoa_select_top10(){
        $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
        return pdo_query($sql);    
    }
    function hang_hoa_select_top9(){
        $sql = "SELECT * FROM hang_hoa ORDER BY ngay_nhap DESC LIMIT 0, 9";
        return pdo_query($sql); 
    }
    function add_so_luot_xem($ma_hh){
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1
                WHERE ma_hh = ?";
        return pdo_query($sql, $ma_hh);
    }
    function chi_tiet_hang_hoa($ma_hh){
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh = ?";
        return pdo_query_one($sql, $ma_hh);
    }
    function hang_cung_loai($ma_loai){
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai = ?";
        return pdo_query($sql, $ma_loai);
    }
    function get_hang_hoa_dac_biet(){
        $sql = "SELECT * FROM hang_hoa WHERE dac_biet = 1";
        return pdo_query($sql);
    }
?>