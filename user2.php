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
        <main id="page-home">
        <?php
            require_once("include/header.php");
        ?>
        </main>
        <main class="khung">
            <div class="DNDK">
                <p><a href="user.php">Đăng ký</a></p>&emsp;/&emsp;
                <p><a href="user2.php">Đăng nhập</a></p>
            </div>
            <div class="nhap">
                <form action="" method="post">
                    <label>Tên đăng nhập</label><br>
                    <input type="text" name="username"><br>
                    <label>Nhập mật khẩu</label><br>
                    <input type="password" name="password"><br>
                    <button><a href="">Đăng nhập</a></button>
                </form>
            </div>
        </main>
    </section>
</body>
</html>