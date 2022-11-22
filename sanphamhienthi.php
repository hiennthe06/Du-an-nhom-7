<?php 
    function hienthi_phong($room_id,$room_price, $room_image){
    $phong="
            <div class=\"product-mon\" id=\"nomal\">
            <div class=\"img-product-2\">
                <div class=\"zoom-product\">
                    <img src=\"$room_image\" alt=\"\">
                </div>
            </div>
            <div class=\"redbrox\">
                <i class=\"fa fa-user\"></i>
                <p> Mường Thanh</p>
            </div>
            <h3 class=\"title-product-2\"><a href=\"chitiet.html\">$room_id</a></h3>
            <div class=\"price-product-2\">
                <b>$room_price</b>
            </div>
            <div class=\"intro-house\">
                <div class=\"wiew\">
                    <div class=\"phone\"><i class=\"fa fa-phone\"></i></div>
                    <div class=\"message\"><i class=\"fa-solid fa-message\"></i></div>
                    <button class=\"btn\"><a href=\"property-details.html\">Đặt phòng ngây</a></button>
                </div>
                <div class=\"bed\"><i class=\"fa fa-bed\"></i>
                    <p> 02</p>
                </div>
                <div class=\"bed\"><i class=\"fa fa-bath\"></i>
                    <p> 01</p>
                </div>
                <div class=\"bed\"><i class=\"fa fa-solid fa-expand\"></i>
                    <p> 32m</p>
                </div>
            </div>
            <div class=\"icon-logo\"><img src=\"images/icon-sold-1-20x20.svg\" alt=\"\"></div>
        </div>
    ";
    echo $phong;
    }
        
    ?>
