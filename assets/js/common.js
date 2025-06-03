// 通常のjs
console.log('common.js');
const mySwiper = new Swiper('#SwiperNewItem', {
    // Optional parameters
    loop: true,
    slidesPerView: 3,
    spaceBetween: 24,
   
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
   
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
   
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // レスポンシブ設定
    // breakpoints: {
    //   // 600px未満の場合
    //   600: {
    //     slidesPerView: 1,
    //     spaceBetween: 16
    //   },
    //   // 900px未満の場合
    //   900: {
    //     slidesPerView: 2,
    //     spaceBetween: 20
    //   }
    // }
});
window.addEventListener('load', () => {
});