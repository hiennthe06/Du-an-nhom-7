<!-- <h3 class="alert alert-danger">QUÊN MẬT KHẨU</h3>
<form action="?action=tai-khoan&page=quen-mk" method="post">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập</b>
      <input type="text" name="ten_dn" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Địa chỉ email</b>
      <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary" name="btn-check">Tìm lại mật khẩu</button>
    
</form> -->
<?php
  // if(isset($data['thong_bao'])){
  //   echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  // }
?> 



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
                <p><a href="index.php?action=dang-nhap" class="text-animation">Đăng nhập</a></p>&emsp;/&emsp;
                <p><a href="index.php?action=tai-khoan&page=dang-ky" class="text-animation">Đăng ký</a></p>
            </div>
            <div class="nhap">
              <br>
              <div class="container-text">
                &emsp;QUÊN MẬT KHẨU
                </div>


                <form action="?action=tai-khoan&page=dang-nhap" method="POST">
                    <!-- <label id="helpId" class="form-text text-muted text-animation">Tên đăng nhập</label><br> -->
                    <!-- <input type="text" class="form-control" name="ma_kh" id="" aria-describedby="helpId" placeholder=""><br> -->

                    <label for=""></label>
                    <!-- <b id="helpId" class="text-muted">Tên đăng nhập</b> -->
                    <label id="helpId" class="form-text text-muted text-animation">Tên đăng nhập</label><br>
                    <!-- <input type="text" class="form-control" name="ten_dn" id=""  placeholder="" aria-describedby="helpId"> -->
                    <input type="text" class="form-control" name="ten_dn" id="" aria-describedby="helpId" placeholder=""><br>


                    <!-- <label id="helpId" class="form-text text-muted text-animation">Nhập mật khẩu</label><br>
                    <input type="password" class="form-control" name="mat_khau" id="" aria-describedby="helpId" placeholder=""><br> -->
                    
                    <label for=""></label>
                    <!-- <b id="helpId" class="text-muted">Địa chỉ email</b> -->
                    <label id="helpId" class="form-text text-muted text-animation">Địa chỉ email</label><br>
                    <!-- <input type="email" class="form-control" name="email" id="" placeholder="" aria-describedby="helpId"> -->
                    <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""><br>
                    
                    <button type="submit" class="btn btn-primary" name="btn-check">Tìm lại mật khẩu</button>
                    
                </form>
                <?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?>
            </div>
        </main>
    </section>
    </body>
</html>