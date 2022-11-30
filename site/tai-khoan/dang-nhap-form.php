<h3 class="alert alert-danger">ĐĂNG NHẬP</h3>
<form action="?action=tai-khoan&page=dang-nhap" method="POST">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập</b>
      <input type="text" name="ma_kh" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Mật khẩu</b>
      <input type="password" name="mat_khau" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary" name="btn-login">Đăng nhập</button>
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 