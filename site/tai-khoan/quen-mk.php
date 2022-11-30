<?php
include_once 'dao/tai-khoan.php';
    if(isset($_POST['btn-check'])){
        $ten_dn = $_POST['ten_dn'];
        $email = $_POST['email'];
        $check = get_khach_hang($ten_dn);
        if($ten_dn == $check['ma_kh'] && $email == $check['email']){
            $data['thong_bao'] = "Mật khẩu của bạn là: ".$check['mat_khau'];
        }
        else{
            $data['thong_bao'] = "Không tìm thấy thông tin";
        }
    }
    include_once 'quen-mk-form.php';
?>