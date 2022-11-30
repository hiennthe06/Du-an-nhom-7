<?php
include '../../dao/loai.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'new':
                if(isset($_POST['btn-add'])){
                    $ten_loai = $_POST['ten_loai'];
                    $conn = set_loai($ten_loai);
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
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    $conn = update_loai($ten_loai, $ma_loai);
                    if(!$conn){
                        $data['thong_bao'] = "Sửa thành công";
                    }
                    else{
                        $data['thong_bao'] = "Sửa thất bại";
                    }
                    $data['sl_list'] = get_ma_loai($ma_loai);
                    include 'edit.php';
                }
                else if(isset($_POST['btn-delete'])){
                    $ma_loai = $_POST['ma_loai'];
                    $conn = delete_loai($ma_loai);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_POST['ten_loai'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_POST['ten_loai'];
                    }
                    $data['sl_list'] = get_ma_loai($ma_loai);
                    include 'edit.php';
                }
                else if(isset($_GET['btn-deleta'])){
                    $ma_loai = $_GET['ma_loai'];
                    $conn = delete_loai($ma_loai);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_GET['ten_loai'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_GET['ten_loai'];
                    }
                    $data['list-loai'] = get_loai();
                    include 'list.php';
                }
                else{
                    $ma_loai = $_GET['ma_loai'];
                    $data['sl_list'] = get_ma_loai($ma_loai);
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