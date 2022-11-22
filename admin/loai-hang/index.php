<?php
include '../../dao/loai.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'new':
                if(isset($_POST['btn-add'])){
                    $type_name = $_POST['type_name'];
                    $conn = set_loai($type_name);
                    if($conn){
                        $data['thong_bao'] = "Thêm thành công";
                    }
                    else{
                        $data['thong_bao'] = "Thêm thất bại";
                    }
                }
                include 'new.php';
                break;
                ////
            case 'list':
                $data['list-loai'] = get_loai();
                include 'list.php';
                break;
                ////
            case 'edit':
                if(isset($_POST['btn-update'])){
                    $type_name = $_POST['type_name'];
                    $type_id = $_POST['type_id'];
                    $conn = update_loai($type_name, $type_id);
                    if(!$conn){
                        $data['thong_bao'] = "Sửa thành công";
                    }
                    else{
                        $data['thong_bao'] = "Sửa thất bại";
                    }
                    $data['sl_list'] = get_ma_loai($type_id);
                    include 'edit.php';
                }
                else if(isset($_POST['btn-delete'])){
                    $type_id = $_POST['type_id'];
                    $conn = delete_loai($type_id);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_POST['type_name'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_POST['type_name'];
                    }
                    $data['sl_list'] = get_ma_loai($type_id);
                    include 'edit.php';
                }
                else if(isset($_GET['btn-deleta'])){
                    $type_id = $_GET['type_id'];
                    $conn = delete_loai($type_id);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_GET['type_name'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_GET['type_name'];
                    }
                    $data['list-loai'] = get_loai();
                    include 'list.php';
                }
                else{
                    $type_id = $_GET['type_id'];
                    $data['sl_list'] = get_ma_loai($type_id);
                    include 'edit.php';
                }
                break; 
                ////
            default:
                include 'new.php';
                break;
        }
    }
    else{
        include 'new.php';
    }
?>