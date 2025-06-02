(function ($) {
    // HeroImgのアニメーション
    setTimeout(() => {
        $('#HeroImg').addClass('active');
    }, 1000);

    $(window).on('load', function() {
        // Swiperの初期化
        new Swiper("#swiper1", {
            slidesPerView: 1,
            slideMinWidth: 468,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
            speed: 4000,
            autoplay: {
                delay: 1000,
            },
        });

    });

})(jQuery);


