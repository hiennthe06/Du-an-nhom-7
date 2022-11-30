<?php
include_once '../../dao/hang-hoa.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'new':
                if(isset($_POST['btn-add'])){
                    $ten_hang = $_POST['ten_hang'];
                    $don_gia = $_POST['don_gia'];
                    $giam_gia = $_POST['giam_gia'];
                    ///
                    $target_dir = "../content/images/product/";
                    $hinh = $_FILES['hinh']['name'];
                    move_uploaded_file('hinh', $target_dir);
                    ///
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $dac_biet = $_POST['dac_biet'];
                    $ma_loai = $_POST['loai'];
                    
                    $conn = set_hang_hoa($ten_hang, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai);
                    if($conn){
                        $data['thong_bao'] = "Thêm thành công";
                    }
                    else{
                        $data['thong_bao'] = "Thêm thất bại";
                    }
                }
                $data['loai'] = get_loai();
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
                    $ma_hh = $_POST['ma_hh'];
                    $ten_hang = $_POST['ten_hang'];
                    $don_gia1 = $_POST['don_gia1'];
                    $giam_gia = $_POST['giam_gia'];
                    // Lưu hình
                    $hinh_id = get_ma_hang_hoa($ma_hh);
                    $hinh = $_FILES['hinh']['name'];
                    if($hinh == null){
                        $hinh = $hinh_id['hinh'];
                    }
                    else{
                        $target_dir = "../content/images/product/";
                        $hinh = move_uploaded_file('hinh', $target_dir);
                    }
                    ///
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $mo_ta = $_POST['mo_ta'];
                    $dac_biet = $_POST['dac_biet'];
                    $ma_loai = $_POST['loai'];
                    $conn = update_hang_hoa($ten_hang, $don_gia1, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $ma_loai, $ma_hh);
                    if(!$conn){
                        $data['thong_bao'] = "Sửa thành công";
                    }
                    else{
                        $data['thong_bao'] = "Sửa thất bại";
                    }
                    $data['loai'] = get_loai();
                    $data['hang_list'] = get_ma_hang_hoa($ma_hh);
                    include 'edit.php';
                }
                else if(isset($_POST['btn-delete'])){
                    $ma_hh = $_POST['ma_hh'];
                    $conn = delete_hang_hoa($ma_hh);
                    if($conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_POST['ten_hang'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_POST['ten_hang'];
                    }
                    $data['hang_list'] = get_ma_hang_hoa($ma_hh);
                    include 'edit.php';
                }
                else if(isset($_GET['btn-deleta'])){
                    $ma_hh = $_GET['ma_hh'];
                    $conn = delete_hang_hoa($ma_hh);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_GET['ten_hh'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_GET['ten_hh'];
                    }
                    $data['list-hang'] = get_hang_hoa();
                include 'list.php';
                }
                else{
                    $ma_hh = $_GET['ma_hh'];
                    $data['loai'] = get_loai();
                    $data['hang_list'] = get_ma_hang_hoa($ma_hh);
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
        $data['loai'] = get_loai();
        include 'new.php';
    }
?>