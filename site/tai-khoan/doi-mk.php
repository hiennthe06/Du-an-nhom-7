<?php
include_once 'dao/tai-khoan.php';
    if(isset($_POST['btn-update-pass'])){
        $ten_dn = $_POST['ten_dn'];
        $mat_khau = $_POST['mat_khau'];
        $mat_khau_moi = $_POST['mat_khau_moi'];
        $mat_khau_moi_check = $_POST['mat_khau_moi1'];

        $check = get_khach_hang($ten_dn);

        if($ten_dn == $check['ma_kh'] && $mat_khau == $check['mat_khau']){
            if($mat_khau_moi == $mat_khau_moi_check){
                $conn = update_mat_khau($mat_khau_moi, $ten_dn);
                if($conn){
                    $data['thong_bao'] = "Cập nhật mật khẩu thành công";
                }
                else{
                    $data['thong_bao'] = "Cập nhật mật khẩu thất bại";
                }
            }
        }
        else{
            $data['thong_bao'] = "Tên đăng nhập hoặc mật khẩu sai!";
        }
        include_once 'doi-mk-form.php';
    }
    else{
        include_once 'doi-mk-form.php';
    }
?>