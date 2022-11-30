<!-- <h3 class="alert alert-danger">ĐĂNG KÝ THÀNH VIÊN</h3> -->
<!-- <?php
      // if (isset($data['thong_bao'])) {
      //   echo '<h3 class="alert alert-success">' . $data['thong_bao'] . '</h3>';
      // }
      ?>  -->
<!-- <form action="?action=tai-khoan&page=dang-ky" method="POST" enctype="multipart/form-data">

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

  <div class="form-group">
    <label for=""></label>
    <b id="helpId" class="text-muted">Xác nhận mật khẩu</b>
    <input type="password" name="mat_khau1" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for=""></label>
    <b id="helpId" class="text-muted">Họ và tên</b>
    <input type="text" name="ho_ten" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>

  <div class="form-group">
    <label for=""></label>
    <b id="helpId" class="text-muted">Địa chỉ email</b>
    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
    <input type="hidden" name="vai_tro" id="" value="0">
    <input type="hidden" name="kich_hoat" id="" value="0">
  </div>

  <div class="form-group">
    <label for=""></label>
    <b id="helpId" class="text-muted">Hình</b>
    <input type="file" class="form-control-file border" name="hinh">
  </div>

  <button type="submit" class="btn btn-primary" name="btn-signup">Đăng ký</button>
  <a href="?action=tai-khoan&page=dang-ky&btn-login" class="btn btn-primary">Đăng nhập</a>
</form> -->






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="assets/css/user.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Montserrat', sans-serif;
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>

<body>

  <section class="backgrounp">
    <main id="openLog" class="khung">
      <div class="DNDK">
        <p><a href="index.php?action=tai-khoan&page=quen-mk" class="text-animation">Quên mật khẩu</a></p>&emsp;/&emsp;
        <p><a href="index.php?action=dang-nhap" class="text-animation">Đăng nhập</a></p>
      </div>
      <div class="nhap">
        <br>
        <div class="container-text">
                &emsp;ĐĂNG Ký
                </div>
        <?php
        if (isset($data['thong_bao'])) {
          echo '<h3 class="alert alert-success">' . $data['thong_bao'] . '</h3>';
        }
        ?>
        <form action="?action=tai-khoan&page=dang-nhap" method="POST">



          <!-- <label id="helpId" class="form-text text-muted text-animation">Tên đăng nhập</label><br>
          <input type="text" class="form-control" name="ma_kh" id="" aria-describedby="helpId" placeholder=""><br> -->

          <label for=""></label>
          <!-- <b id="helpId" class="text-muted" class="form-text text-muted text-animation">Tên đăng nhập</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Tên đăng nhập</label><br>

          <input type="text" name="ma_kh" id="" class="form-control" placeholder="" aria-describedby="helpId">


          <!-- <label id="helpId" class="form-text text-muted text-animation">Nhập mật khẩu</label><br> -->
          <!-- <input type="password" class="form-control" name="mat_khau" id="" aria-describedby="helpId" placeholder=""><br> -->

          <label for=""></label>
          <!-- <b id="helpId" class="text-muted" class="form-text text-muted text-animation">Mật khẩu</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Nhập mật khẩu</label><br>
          <input type="password" name="mat_khau" id="" class="form-control" placeholder="" aria-describedby="helpId">

          <label for=""></label>
          <!-- <b id="helpId" class="text-muted">Xác nhận mật khẩu</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Xác nhận mật khẩu</label><br>
          <input type="password" name="mat_khau1" id="" class="form-control" placeholder="" aria-describedby="helpId"><br>
          
          <label for=""></label>
          <!-- <b id="helpId" class="text-muted">Họ và tên</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Họ và tên</label><br>
          <input type="text" name="ho_ten" id="" class="form-control" placeholder="" aria-describedby="helpId">

          <label for=""></label>
          <!-- <b id="helpId" class="text-muted">Địa chỉ email</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Địa chỉ email</label><br>
          <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <input type="hidden" name="vai_tro" id="" value="0">
          <input type="hidden" name="kich_hoat" id="" value="0">


          <label for=""></label>
          <!-- <b id="helpId" class="text-muted">Hình</b> -->
          <label id="helpId" class="form-text text-muted text-animation">Hình</label><br>
          <input type="file" class="form-control-file border" name="hinh"> <br>


          
          
          
          <button type="submit" class="btn btn-primary" name="btn-signup">Đăng ký</button>
          <button type="submit" id="button2" class="btn btn-primary" name="btn-signup"><a href="index.php?action=dang-nhap" class="btn btn-primary">ĐĂNG NHẬP TẠI ĐÂY</a></button>
          
          <!-- <button type="submit" class="btn btn-primary" name="btn-login">Đăng nhập</button> -->
        </form>
      </div>
    </main>
  </section>
</body>

</html>