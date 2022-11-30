<?php
require_once 'pdo.php';
    function set_loai($ten_loai){
        $sql = "INSERT INTO loai(ma_loai, ten_loai) VALUES(null,?)";
        return pdo_execute($sql, $ten_loai);
    }
    function get_loai(){
        $sql = "SELECT * FROM loai";
        return pdo_query($sql);
    }
    function get_ma_loai($ma_loai){
        $sql = "SELECT * FROM loai WHERE ma_loai = ?";
        return pdo_query_one($sql, $ma_loai);
    }
    function update_loai($ten_loai, $ma_loai){
        $sql = "UPDATE loai SET ten_loai = ? WHERE ma_loai = ?";
        return pdo_query_one($sql, $ten_loai, $ma_loai);
    }
    function delete_loai($ma_loai){
        $sql = "DELETE FROM loai WHERE ma_loai= ?";
        return pdo_query_one($sql, $ma_loai);
    }
?>