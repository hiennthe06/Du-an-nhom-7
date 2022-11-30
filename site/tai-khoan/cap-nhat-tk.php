<?php
include_once 'dao/tai-khoan.php';
require_once 'global.php';
    if(isset($_POST['btn-update'])){
        $ten_dn = $_POST['ma_kh'];
        $check_ten_dn = get_khach_hang($ten_dn);

        if($check_ten_dn['ma_kh'] == $ten_dn){
            $ma_kh_moi = $_POST['ten_dn_moi'];
            $check_ten_dn_moi = get_khach_hang_2($ma_kh_moi);

            if($ma_kh_moi == $check_ten_dn_moi['ma_kh']){
                $data['thong_bao'] = "Tên đăng nhập đã được sử dụng";
            }
            else{
                $ho_ten = $_POST['ho_ten'];
                $email = $_POST['email'];

                $target_dir = "content/images/user/";
                $hinh = $_FILES['hinh']['name'];
                save_file('hinh', $target_dir);

                $conn = update_khach_hang($ten_dn, $ma_kh_moi, $ho_ten, $hinh, $email);  
                if($conn){
                    $data['thong_bao'] = "Cập nhật thành công, mời bạn đăng nhập lại";
                }
                else{
                    $data['thong_bao'] = "Cập nhật thất bại";
                }
            }
        }
        else{
            $data['thong_bao'] = "Không tìm thấy thông tin";
        }
        include_once 'cap-nhat-tk-form.php';
    }
    $ten_dn = $_SESSION['username'];
    $check_ten_dn = get_khach_hang($ten_dn);
    include_once 'cap-nhat-tk-form.php';
?>