// 通常のjs
console.log('common.js');
const mySwiper = new Swiper('#SwiperNewItem', {
    // Optional parameters
    loop: true,
    slidesPerView: 1.5,
    spaceBetween: 24,
    centeredSlides: true,
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
    breakpoints: {
      // 600px未満の場合
      600: {
        slidesPerView: 3,
        spaceBetween: 24
      },
    }
});
window.addEventListener('load', () => {
});

window.addEventListener('DOMContentLoaded', () => {
  const openSearchModalBtn = document.getElementById('Open-Searh-Modal');
  const searchModalContainer = document.getElementById('Search-Modal');

  if (openSearchModalBtn && searchModalContainer) {
    openSearchModalBtn.addEventListener('click', () => {
      searchModalContainer.classList.add('is-active');
    });
  }

  // 閉じるボタン処理
  document.addEventListener('click', (e) => {
    if (e.target.matches('#close-modal')) {
      searchModalContainer.classList.remove('is-active');
    }
  });

  // Escapeキーで閉じる
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && searchModalContainer.classList.contains('is-active')) {
      searchModalContainer.classList.remove('is-active');
    }
  });
});