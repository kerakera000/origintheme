(function ($) {
    
})(jQuery)

document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".InterviewSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 3,
            }
        }
    });

    // NEWS-DECORATION-TEXT要素の監視
    const newsDecorationText = document.getElementById('NEWS-DECORATION-TEXT');
    
    // Intersection Observerの設定
    const options = {
        rootMargin: '30px 0px',
        threshold: 0
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, options);
    
    // 監視開始
    if (newsDecorationText) {
        observer.observe(newsDecorationText);
    }
});