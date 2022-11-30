
<div class="list-group border">
<h1>Bình luận phòng</h1>
    <!-- <a href="#" class="list-group-item list-group-item-success animation"><h4><b class="text-animation">Bình luận</b></h4></a> -->
<?php
    require 'dao/binh-luan.php'; 
    if(isset($_POST['noi_dung'])){
        $noi_dung = $_POST['noi_dung'];
        $ma_hh = $_GET['ma_hh'];
        $ma_kh = $_SESSION['username'];
        $ngay_bl = date_format(date_create(), "Y-m-d");
        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
    }
    $ma_hh = $_GET['ma_hh'];
    $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
    foreach($binh_luan_list as $bl){
        echo'<a class="list-group-item">'.$bl['ngay_bl'].' | '.$bl['ma_kh'].': '.$bl['noi_dung'].'</a>';
    }
    
    if(!isset($_SESSION['user'])){
        // Bạn cần đăng nhập để bình luận
        echo'
            <div class="form-group list-group-item list-group-item-success animation">
                <form action="" medthod="POST">
                
                    <input type="text" class="form-control" name="noi_dung" id="" aria-describedby="helpId" placeholder="Bạn cần đăng nhập để bình luận" readonly> 
                </form>
            </div>
        </div>';
    }
    else{
?>
        <div class="form-group list-group-item list-group-item-success animation">
            <form action="" method="POST">
                <input type="text" class="form-control" name="noi_dung" id="" aria-describedby="helpId" placeholder="Mời bạn nhập bình luận"> 
            </form>
        </div>
    </div>
    <?php } ?>