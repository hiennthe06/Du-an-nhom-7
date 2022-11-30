<?php
include_once 'dao/khach-hang.php';
include_once 'global.php';
$data = [];
    if(isset($_POST['btn-signup'])){
        $ma_kh = $_POST['ma_kh'];
        $ma_kh_check = get_ma_khach_hang($_POST['ma_kh']);
        if($ma_kh != $ma_kh_check['ma_kh']){
            if($_POST['mat_khau'] == $_POST['mat_khau1']){
                $ma_kh = $_POST['ma_kh'];
                $mat_khau = $_POST['mat_khau'];
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];
                // Lưu hình
                $target_dir = "content/images/user/";
                $hinh = $_FILES['hinh']['name'];
                if(!isset($hinh)){
                    $hinh = $_FILES['hinh']['name'];
                }
                else{
                    $hinh = "logo.png";
                }
                save_file('hinh', $target_dir);
                //
                $kich_hoat = $_POST['kich_hoat'];
                $vai_tro = $_POST['vai_tro'];
                
                $conn = set_khach_hang($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $vai_tro, $email);
                if($conn){
                    $data['thong_bao'] = "Đăng ký thành công";
                    
                }
                else{
                    $data['thong_bao'] = "Đăng ký thất bại";
                }
                
            }
            else{
                $data['thong_bao'] = "Mật khẩu xác nhận sai!";
            } 
        }
        else{
            $data['thong_bao'] = "Mã này đã được dùng!";
        }
        include 'dang-ky-form.php';
    }
    else if(isset($_GET['btn-login'])){
        include_once 'dang-nhap-form.php';
    }
    else{
        include_once 'dang-ky-form.php';
    }
    
?>