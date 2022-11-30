

<?php
require_once 'dao/liet-ke.php';
    if(isset($_GET['ma_hh'])){
            $select = $_GET['ma_hh'];
            $data = chi_tiet_hang_hoa($select);
            add_so_luot_xem($select);
            include_once 'chi-tiet-ui.php';
            
            include_once 'binh-luan.php';
            
	    ///
	    $ma_loai = $_GET['ma_loai'];
            $hang = hang_cung_loai($ma_loai);
        }
   ?>
