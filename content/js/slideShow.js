window.addEventListener ('load', function () {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const sliderMain = $('.slider-main');
    const sliderItem = $$('.slider-item');
    const prevBtn = $('.btn-prev');
    const nextBtn = $('.btn-next');
    const dotItem = $$('.dot-item');
    let index = 0;
    let positionX = 0;

    sliderItemWidth = sliderItem[0].offsetWidth;
    sliderItemLength = sliderItem.length;
    sliderlength = sliderItemLength * sliderItemWidth;

    // Sự kiện click
    nextBtn.onclick = function() {
        nextSlider();
    }
    prevBtn.onclick = function() {
        prevSlider();
    }

    dotItem.forEach(function(e) {
        e.onclick = function() {
            let docAtive = Number(e.dataset.index);
            positionX = -(docAtive * sliderItemWidth) + sliderItemWidth;
            index = docAtive - 1;
            nextSlider();
            console.log(positionX);
        }
    })

    sliderMain.onclick = function() {
        nextBtn.click();
    }

     setInterval(function() {
         nextSlider();
     }, 3000)

    // Các hàm sử lý
    function nextSlider() {
        index++;
        positionX -= sliderItemWidth;
        if(index >= sliderItemLength) {
            index = 0;
            positionX = 0;
        }
        sliderMain.style.transform = `translateX(${positionX}px)`;
        dotActiveSlider();
    }

    function prevSlider() {
        index--;
        positionX += sliderItemWidth;
        if(index < 0) {
            index = sliderItemLength - 1;
            positionX = (sliderItemWidth - sliderlength);
        }
        sliderMain.style.transform = `translateX(${positionX}px)`;
        dotActiveSlider();
    }

    function dotActiveSlider() {
        dotItem.forEach(function(e) {
            let docAtive = Number(e.dataset.index);
            if(index === docAtive) {
                $('.dot-item.active').classList.remove('active');
                e.classList.add('active');
            }
        })
    }


})