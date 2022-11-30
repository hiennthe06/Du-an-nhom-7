<?php
require_once 'dao/liet-ke.php';
$items = [];
    if(isset($_GET['select_loai'])){
        $select_loai = $_GET['select_loai'];
        $items['list_hang'] = hang_hoa_select($select_loai);
    }
    else if(isset($_POST['keyword'])){
        $keyword = $_POST['keyword'];
        $items['list_hang'] = hang_hoa_select_keyword($keyword);
    }
    else{
        $items['list_hang'] = hang_hoa_select_all();
    }
    include 'liet-ke-ui.php';
        
?>