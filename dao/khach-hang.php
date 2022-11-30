<?php
    require_once 'pdo.php';
    function set_khach_hang($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $vai_tro, $sdt ){
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, kich_hoat, hinh, sdt, vai_tro) 
        VALUES('$ma_kh', '$mat_khau', '$ho_ten', $kich_hoat, '$hinh', '$sdt', $vai_tro)";
        return pdo_execute($sql);
    }
    function get_khach_hang(){
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
    }
    function get_ma_khach_hang($ma_kh){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh = ?";
        return pdo_query_one($sql, $ma_kh);
    }
    function update_khach_hang($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $vai_tro, $sdt){
        $sql = "UPDATE khach_hang SET mat_khau = '$mat_khau',
                                      ho_ten = '$ho_ten',
                                      kich_hoat = $kich_hoat, 
                                   
                                      sdt = '$sdt', 
                                    
                                      vai_tro = $vai_tro
                                      WHERE ma_kh = '$ma_kh'";

        return pdo_execute($sql);
    }
    function delete_khach_hang($ma_kh){
        $sql = "DELETE FROM khach_hang WHERE ma_kh= ?";
        return pdo_query_one($sql, $ma_kh);
    }
?>