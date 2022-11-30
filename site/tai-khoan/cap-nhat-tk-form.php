<h3 class="alert alert-danger">CẬP NHẬT TÀI KHOẢN</h3>
<form action="?action=tai-khoan&page=cap-nhat" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập cũ</b>
      <input type="text" name="ma_kh" id="" class="form-control" placeholder="" value="<?php echo $check_ten_dn['ma_kh'] ?>" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập mới</b>
      <input type="text" name="ten_dn_moi" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Họ và tên</b>
      <input type="text" name="ho_ten" id="" class="form-control" placeholder="" value="<?php echo $check_ten_dn['ho_ten'] ?>" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Địa chỉ email</b>
      <input type="email" name="email" id="" class="form-control" placeholder="" value="<?php echo $check_ten_dn['email'] ?>" aria-describedby="helpId">
    </div>

    <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="text-muted">Hình</b>         
        <input type="file" class="form-control-file border" name="hinh" value="value="<?php echo $check_ten_dn['hinh'] ?>"">     
    </div>

    <button type="submit" class="btn btn-primary" name="btn-update">Cập nhật</button>
    
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 