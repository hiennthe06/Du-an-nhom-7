<?php
require_once 'pdo.php';
    function get_khach_hang($ten_dn){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh = ?";
        return pdo_query_one($sql, $ten_dn);
    }
    function get_khach_hang_2($ma_kh_moi){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh = ?";
        return pdo_query_one($sql, $ma_kh_moi);
    }
    function update_mat_khau($mat_khau_moi, $ten_dn){
        $sql = "UPDATE khach_hang SET mat_khau = ? WHERE ma_kh = ?";
        return pdo_execute($sql,$mat_khau_moi, $ten_dn);
    }
    function update_khach_hang($ten_dn, $ma_kh_moi, $ho_ten, $hinh, $email){
        $sql = "UPDATE khach_hang SET ho_ten = '$ho_ten',
                                      hinh = '$hinh', 
                                      email = '$email', 
                                      ma_kh = '$ma_kh_moi'
                                      WHERE ma_kh = '$ten_dn'";
        return pdo_execute($sql);
    }
?>  