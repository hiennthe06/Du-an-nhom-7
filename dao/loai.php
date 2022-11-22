<?php
require_once 'pdo.php';
    function set_loai($type_name){
        $sql = "INSERT INTO room_type(type_id, type_name) VALUES(null,?)";
        return pdo_execute($sql, $type_name);
    }
    function get_loai(){
        $sql = "SELECT * FROM room_type";
        return pdo_query($sql);
    }
    function get_ma_loai($type_id){
        $sql = "SELECT * FROM room_type WHERE type_id = ?";
        return pdo_query_one($sql, $type_id);
    }
    function update_loai($type_name, $type_id){
        $sql = "UPDATE room_type SET type_name = ? WHERE type_id = ?";
        return pdo_query_one($sql, $type_name, $type_id);
    }
    function delete_loai($type_id){
        $sql = "DELETE FROM room_type WHERE type_id= ?";
        return pdo_query_one($sql, $type_id);
    }
?>