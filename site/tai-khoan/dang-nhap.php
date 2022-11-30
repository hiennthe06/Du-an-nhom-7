<?php
    include_once 'dao/tai-khoan.php';
    $data = [];
    if(isset($_POST['btn-login'])){
        $mat_khau = $_POST['mat_khau'];
        $ten_dn = $_POST['ma_kh'];
        $check = get_khach_hang($ten_dn);
        
        if($check['ma_kh'] == $ten_dn && $check['mat_khau'] == $mat_khau){
            $data['thong_bao'] = "Đăng nhập thành công, chào mừng: ".$check['ho_ten'];
            $_SESSION['user'] = $check['ho_ten'];
            $_SESSION['username'] = $check['ma_kh'];
            $_SESSION['hinh'] = $check['hinh'];
            $_SESSION['vai_tro'] = $check['vai_tro'];
            header("location: ?action=dang-nhap");
        }
        else{
            $data['thong_bao'] = "Đăng nhập thất bại";
            include_once 'dang-nhap-form.php';
        }
    }
    else{
        $data['thong_bao'] = "chả có gì";
        
    }
?>