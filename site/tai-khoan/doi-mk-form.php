<h3 class="alert alert-danger">ĐỔI MẬT KHẨU</h3>
<form action="?action=tai-khoan&page=doi-mk" method="post">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập</b>
      <input type="text" name="ten_dn" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Mật khẩu cũ</b>
      <input type="password" name="mat_khau" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Mật khẩu mới</b>
      <input type="password" name="mat_khau_moi" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Xác nhận mật khẩu mới</b>
      <input type="password" name="mat_khau_moi1" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary" name="btn-update-pass">Đổi mật khẩu</button>
    
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 