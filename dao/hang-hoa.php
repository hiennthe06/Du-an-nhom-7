<?php
    require_once 'pdo.php';
    // Thực hiện chức năng của admin
    function set_hang_hoa($room_price, $room_discount, $room_image,$room_describe,$type_id){
        $sql = "INSERT INTO room_product(room_price, room_discount, room_image,room_describe,type_id) 
        VALUES('$room_price', '$room_discount', '$room_image', '$room_describe','$type_id')";
        return pdo_execute($sql);
    }
    function get_loai(){
        $sql = "SELECT * FROM room_type";
        return pdo_query($sql);
    }
    function get_hang_hoa(){
        $sql = "SELECT * FROM room_product";
        return pdo_query($sql);
    }
    function get_ma_hang_hoa($room_id){
        $sql = "SELECT * FROM room_product WHERE room_id = ?";
        return pdo_query_one($sql, $room_id);
    }
    function update_hang_hoa($room_price1, $room_discount, $room_image,$room_describe, $type_id, $room_id){
        $sql = "UPDATE room_product SET room_price = '$room_price1',
                                        room_discount = '$room_discount',
                                        room_image = '$room_image',                                 
                                        room_describe = '$room_describe',
                                        type_id = '$type_id'
                                        WHERE room_id = $room_id";
        return pdo_query_one($sql);
    }
    function delete_hang_hoa($room_id){
        $sql = "DELETE FROM room_product WHERE room_id= ?";
        return pdo_query_one($sql, $room_id);
    }
    function thong_ke_hang_hoa(){
        $sql= "SELECT lo.type_id, lo.type_name, COUNT(*) so_luong,
               MIN(hh.room_price) gia_min, MAX(hh.room_price) gia_max,
               AVG(hh.room_price) gia_avg FROM room_product hh JOIN room_type lo
               ON lo.type_id = hh.type_id GROUP BY lo.type_id, lo.type_name";
        return pdo_query($sql);
    }
    
?>