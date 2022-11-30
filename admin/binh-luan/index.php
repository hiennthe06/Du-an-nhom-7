<?php
include_once '../../dao/binh-luan.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'list':
                $data['bl_list'] = thong_ke_binh_luan();
                include 'list.php';
                break;
            case 'detail':
                $ma_bl = $_GET['ma_hh'];
                $data['bl_list_chi_tiet'] = thong_ke_binh_luan_chi_tiet($ma_bl);
                include 'detail.php';
                break;
            case 'delete':
                if(isset($_GET['ma_bl'])){
                    $ma_bl = $_GET['ma_bl'];
                    $data['thong_bao'] = binh_luan_delete_by_id( $ma_bl);
                }
                $ma_bl = $_GET['ma_hh'];
                $data['bl_list_chi_tiet'] = thong_ke_binh_luan_chi_tiet($ma_bl);
                include 'detail.php';
                break;
            default:
                include 'list.php';
                break;
            }
        }
        else{
            $data['bl_list'] = thong_ke_binh_luan();
            include 'list.php';
        }
?>