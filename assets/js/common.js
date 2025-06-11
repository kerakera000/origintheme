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

const frontSwiper = new Swiper('#frontSwiper', {
  // Optional parameters
  loop: true,
  slidesPerView: 1.2,
  spaceBetween: 24,
  centeredSlides: true,
  speed: 1000,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
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
    768: {
      slidesPerView: 1.5,
      spaceBetween: 24
    },
  }
});
window.addEventListener('load', () => {
  // 検索条件モーダルの制御
  const searchConditionButton = document.getElementById('Search-Condition-Button');
  const modalSearchCondition = document.getElementById('Modal-Search-Condition');
  const closeSearchConditionButton = document.getElementById('Close-Search-Condition-Button');

  if (searchConditionButton && modalSearchCondition) {
    searchConditionButton.addEventListener('click', () => {
      modalSearchCondition.classList.toggle('open');
    });

    // 閉じるボタンのクリックイベント
    if (closeSearchConditionButton) {
      closeSearchConditionButton.addEventListener('click', () => {
        modalSearchCondition.classList.remove('open');
      });
    }
  }
});