<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <main id="page-home">
        <?php
            include("include/header.php");
        ?>
            
        
        <article class="total-content">
            <?php
                include("page/banner.php");
                include("page/slider.php");
                include("page/product.php");
                include("page/free.php");
            ?>  
                
        <?php
            require_once("include/footer.php");
        ?>
        </article>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/style.js"></script>
        <script src="assets/js/slider.js"></script>
        <script src="assets/js/slide-list.js"></script>
        <script src="assets/js/sidebar-new.js"></script>
       
    </main>
</body>

</html>