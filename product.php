<?php
require_once('sanphamhienthi.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/product.css">
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
            require_once("include/header.php");
        ?>


        <article class="total-content">
            <section class="title-website">
                <h1 class="title-home">Xem phòng</h1>
                <h5 class="best-way">Phòng thường / Phòng VIP</h5>
            </section>
            <article class="content-items">
                <div class="btn-category" id="myDIV">
                    <button class="btn active"><a href="#normal">Phòng thường</a></button>
                    <button class="btn btn-2"><a href="#vip">Phòng VIP</a></button>
                </div>
                <section class="product-items">
                <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "khac_san_MT";
            $connection = mysqli_connect($servername, $username, $password, $database);

            if (!$connection){
                die("Connection failed : " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM room_product";
            $result = $connection->query($sql);
            while ($row = mysqli_fetch_assoc($result)){
                hienthi_phong($row['room_id'],$row['room_price'],$row['room_image']);
            }
            mysqli_close($connection);
        ?>
                    <!--
                    <div class="product-mon" id="nomal">
                        <div class="img-product-2">
                            <div class="zoom-product">
                                <img src="images/sm_large_1434011203470_252_1553159120.jpeg" alt="">
                            </div>
                        </div>
                        <div class="redbrox">
                            <i class="fa fa-user"></i>
                            <p> Mường Thanh</p>
                        </div>
                        <h3 class="title-product-2"><a href="chitiet.html">Deluxe Family Tripl</a></h3>
                        <div class="price-product-2">
                            <b>1,600,000 VNĐ</b>
                        </div>
                        <div class="intro-house">
                            <div class="wiew">
                                <div class="phone"><i class="fa fa-phone"></i></div>
                                <div class="message"><i class="fa-solid fa-message"></i></div>
                                <button class="btn"><a href="property-details.html">Đặt phòng ngây</a></button>
                            </div>
                            <div class="bed"><i class="fa fa-bed"></i>
                                <p> 02</p>
                            </div>
                            <div class="bed"><i class="fa fa-bath"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                <p> 32m</p>
                            </div>
                        </div>
                        <div class="icon-logo"><img src="images/icon-sold-1-20x20.svg" alt=""></div>
                    </div>
                    <div class="product-mon">
                        <div class="img-product-2">
                            <div class="zoom-product">
                                <img src="images/sm_large_suite_1_1639555538.jpeg" alt="">
                            </div>
                        </div>
                        <div class="redbrox">
                            <i class="fa fa-user"></i>
                            <p>Mường Thanh</p>
                        </div>
                        <h3 class="title-product-2"><a href="">Executive Suite</a></h3>
                        <div class="price-product-2">
                            <b>2,200,000 VNĐ</b>
                        </div>
                        <div class="intro-house">
                            <div class="wiew">
                                <div class="phone"><i class="fa fa-phone"></i></div>
                                <div class="message"><i class="fa-solid fa-message"></i></div>
                                <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                            </div>
                            <div class="bed"><i class="fa fa-bed"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-bath"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                <p> 60m</p>
                            </div>
                        </div>
                        <div class="icon-logo"><img src="images/icon-sold-2-20x20.svg" alt=""></div>
                    </div>
                    <div class="product-mon">
                        <div class="img-product-2">
                            <div class="zoom-product">
                                <img src="images/sm_large_1434011244971_259_1553158512.jpeg" alt="">
                            </div>
                        </div>
                        <div class="redbrox">
                            <i class="fa fa-user"></i>
                            <p>Mường Thanh</p>
                        </div>
                        <h3 class="title-product-2"><a href="">Deluxe King</a></h3>
                        <div class="price-product-2">
                            <b>1,700,000 VNĐ</b> 
                        </div>
                        <div class="intro-house">
                            <div class="wiew">
                                <div class="phone"><i class="fa fa-phone"></i></div>
                                <div class="message"><i class="fa-solid fa-message"></i></div>
                                <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                            </div>
                            <div class="bed"><i class="fa fa-bed"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-bath"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                <p> 32m</p>
                            </div>
                        </div>
                        <div class="icon-logo"><img src="images/icon-sold-3-20x20.svg" alt=""></div>
                    </div>
                    <div class="product-mon">
                        <div class="img-product-2">
                            <div class="zoom-product">
                                <img src="images/sm_large_royal_p_1558835966.ngu_1558835966.jpg" alt="">
                            </div>
                        </div>
                        <div class="redbrox">
                            <i class="fa fa-user"></i>
                            <p>Mường Thanh</p>
                        </div>
                        <h3 class="title-product-2"><a href="">Royal Suite</a></h3>
                        <div class="price-product-2">
                            <b>3,000,000 VNĐ</b>
                        </div>
                        <div class="intro-house">
                            <div class="wiew">
                                <div class="phone"><i class="fa fa-phone"></i></div>
                                <div class="message"><i class="fa-solid fa-message"></i></div>
                                <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                            </div>
                            <div class="bed"><i class="fa fa-bed"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-bath"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                <p>300m</p>
                            </div>
                        </div>
                        <div class="icon-logo"><img src="images/icon-sold-4-20x20.svg" alt=""></div>
                    </div>
                    <div class="product-mon">
                        <div class="img-product-2">
                            <div class="zoom-product">
                                <img src="images/Vip1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="redbrox">
                            <i class="fa fa-user"></i>
                            <p> Mường Thanh</p>
                        </div>
                        <h3 class="title-product-2"><a href="">Presidential Suite</a></h3>
                        <div class="price-product-2">
                            <b>3,200,000 VNĐ</b>
                        </div>
                        <div class="intro-house">
                            <div class="wiew">
                                <div class="phone"><i class="fa fa-phone"></i></div>
                                <div class="message"><i class="fa-solid fa-message"></i></div>
                                <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                            </div>
                            <div class="bed"><i class="fa fa-bed"></i>
                                <p> 01 big size</p>
                            </div>
                            <div class="bed"><i class="fa fa-bath"></i>
                                <p> 01</p>
                            </div>
                            <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                <p> 350m</p>
                            </div>
                        </div>
                        <div class="icon-logo"><img src="images/icon-sold-1-20x20.svg" alt=""></div>
                    </div>-->
                </section>

                <section class="top-author" id="vip">
                    <h1 class="title-author">Phòng hạng sang</h1>
                    <section class="product-items">
                        <div class="product-mon">
                            <div class="img-product-2">
                                <div class="zoom-product">
                                    <img src="images/sm_large_royal_p_1558835966.ngu_1558835966.jpg" alt="">
                                </div>
                            </div>
                            <div class="redbrox">
                                <i class="fa fa-user"></i>
                                <p>Mường Thanh</p>
                            </div>
                            <h3 class="title-product-2"><a href="">Royal Suite</a></h3>
                            <div class="price-product-2">
                                <b>3,000,000 VNĐ</b>
                            </div>
                            <div class="intro-house">
                                <div class="wiew">
                                    <div class="phone"><i class="fa fa-phone"></i></div>
                                    <div class="message"><i class="fa-solid fa-message"></i></div>
                                    <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                                </div>
                                <div class="bed"><i class="fa fa-bed"></i>
                                    <p> 01</p>
                                </div>
                                <div class="bed"><i class="fa fa-bath"></i>
                                    <p> 01</p>
                                </div>
                                <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                    <p>300m</p>
                                </div>
                            </div>
                            <div class="icon-logo"><img src="images/icon-sold-4-20x20.svg" alt=""></div>
                        </div>
                        <div class="product-mon">
                            <div class="img-product-2">
                                <div class="zoom-product">
                                    <img src="images/Vip1.jpeg" alt="">
                                </div>
                            </div>
                            <div class="redbrox">
                                <i class="fa fa-user"></i>
                                <p> Mường Thanh</p>
                            </div>
                            <h3 class="title-product-2"><a href="">Presidential Suite</a></h3>
                            <div class="price-product-2">
                                <b>3,200,000 VNĐ</b>
                            </div>
                            <div class="intro-house">
                                <div class="wiew">
                                    <div class="phone"><i class="fa fa-phone"></i></div>
                                    <div class="message"><i class="fa-solid fa-message"></i></div>
                                    <button class="btn"><a href="property-details.html">Đặt ngây</a></button>
                                </div>
                                <div class="bed"><i class="fa fa-bed"></i>
                                    <p> 01 big size</p>
                                </div>
                                <div class="bed"><i class="fa fa-bath"></i>
                                    <p> 01</p>
                                </div>
                                <div class="bed"><i class="fa fa-solid fa-expand"></i>
                                    <p> 350m</p>
                                </div>
                            </div>
                            <div class="icon-logo"><img src="images/icon-sold-1-20x20.svg" alt=""></div>
                        </div>
                        
                    </div>
                </section>
            </article>
        </article>

       <?php
        require_once("include/footer.php")
       ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="assets/js/active-product.js"></script>
        <script src="assets/js/slide-list.js"></script>
       <script src="assets/js/sidebar-new.js"></script>

    </main>
</body>

</html>