<?php
include_once '../../dao/hang-hoa.php';
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'list':
                $list = thong_ke_hang_hoa();
                include 'list.php';
                break;
            case 'chart':
                $items = thong_ke_hang_hoa();
                include 'chart.php';
                break;
            default:
                $list = thong_ke_hang_hoa();
                include 'list.php';
                break;
        }
    }
    else{
        $list = thong_ke_hang_hoa();
        include 'list.php';
    }
?>