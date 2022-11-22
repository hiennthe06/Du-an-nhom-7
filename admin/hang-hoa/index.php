<?php
include_once '../../dao/hang-hoa.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'new':
                if(isset($_POST['btn-add'])){

                    $room_price = $_POST['room_price'];
                    $room_discount = $_POST['room_discount'];
                    $target_dir = "../../content/images/product/";
                    $room_image = $_FILES['room_image']['name'];
                    move_uploaded_file('room_image', $target_dir);
                    $room_describe = $_POST['room_describe'];
                    $type_id = $_POST['room_type'];
                    
                    $conn = set_hang_hoa($room_price, $room_discount, $room_image, $room_describe, $type_id);

                    if($conn){
                        $data['thong_bao'] = "Thêm thành công";
                    }
                    else{
                        $data['thong_bao'] = "Thêm thất bại";
                    }
                }
                $data['room_type'] = get_loai();
                include 'new.php';
                break;
                ////
            case 'list':
                $data['list-hang'] = get_hang_hoa();
                include 'list.php';
                break;
                ////
            case 'edit':
                
                if(isset($_POST['btn-update'])){
                    $room_id = $_POST['room_id'];
                    $room_price1 = $_POST['room_price1'];
                    $room_discount = $_POST['room_discount'];
                    // Lưu hình
                    $hinh_id = get_ma_hang_hoa($room_id);
                    $room_image = $_FILES['room_image']['name'];
                    if($room_image == null){
                        $room_image = $hinh_id['room_image'];
                    }
                    else{
                        $target_dir = "../../content/images/product/";
                        $room_image = move_uploaded_file('room_image', $target_dir);
                    }
                    $room_describe= $_POST['room_describe'];
                    $type_id = $_POST['room_type'];

                    
                    $conn = update_hang_hoa($room_price1, $room_discount, $room_image, $room_describe, $type_id, $room_id);
                    if(!$conn){
                        $data['thong_bao'] = "Sửa thành công";
                    }
                    else{
                        $data['thong_bao'] = "Sửa thất bại";
                    }
                    $data['room_type'] = get_loai();
                    $data['hang_list'] = get_ma_hang_hoa($room_id);
                    include 'edit.php';
                }


                else if(isset($_POST['btn-delete'])){
                    $room_id = $_POST['room_id'];
                    $conn = delete_hang_hoa($room_id);
                    if($conn){
                        $data['thong_bao'] = "Xóa thành công phòng: ".$_POST['room_id'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại phòng: ".$_POST['room_id'];
                    }
                    $data['hang_list'] = get_ma_hang_hoa($room_id);
                    include 'edit.php';
                }
                else if(isset($_GET['btn-deleta'])){
                    $room_id = $_GET['room_id'];
                    $conn = delete_hang_hoa($room_id);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công phòng: ".$_GET['room_id'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại phòng: ".$_GET['room_id'];
                    }
                    $data['list-hang'] = get_hang_hoa();
                include 'list.php';
                }
                else{
                    $room_id = $_GET['room_id'];
                    $data['room_type'] = get_loai();
                    $data['hang_list'] = get_ma_hang_hoa($room_id);
                    include 'edit.php';
                }
                break;  
                ///s
            default:
                include 'new.php';
                break;
        }
    }
    else{
        $data['room_type'] = get_loai();
        include 'new.php';
    }
?>