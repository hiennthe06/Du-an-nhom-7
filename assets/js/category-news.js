$(function(){
    $('.total-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
});
$(function(){
    $('.total-slider-2').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
});
$(function(){
    $('.total-slider-3').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
});
$(function(){
    $('.total-slider-4').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
});


function search(){
  var search = document.getElementById("addbox");
  addbox.style.left = "0%";
  addbox.classList.add("transfer");
}

function escape(){
  var escape = document.getElementById("addbox");
  addbox.style.left = "-100%";
}