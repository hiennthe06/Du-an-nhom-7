$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('header').addClass('sticky');
        }else{
            $('header').removeClass('sticky');
        }
    });
});

document.addEventListener("DOMContentLoaded",function(){
    var nut = document.querySelector('div.icon i');
    var mobile = document.querySelector('ul.menu-sub');
    nut.addEventListener('click',function(){
        mobile.classList.toggle('active');
    })
})