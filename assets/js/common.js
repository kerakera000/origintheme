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

window.addEventListener('load', () => {
  // 検索条件モーダルの制御
  const searchConditionButton = document.getElementById('Search-Freeword-Button');
  const modalSearchCondition = document.getElementById('Modal-Search-Freeword');
  const closeSearchConditionButton = document.getElementById('Close-Search-Freeword-Button');

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

// ▼▼▼ アコーディオン選択処理 ▼▼▼
document.addEventListener('DOMContentLoaded', function () {
  const accordionContainers = document.querySelectorAll('.accordion-container');

  accordionContainers.forEach(container => {
    const selectedValue = container.querySelector('.accordion-selected-value');
    const options = container.querySelectorAll('.accordion-option');
    const content = container.querySelector('.accordion-content');

    if (selectedValue && content) {
      selectedValue.addEventListener('click', function () {
        content.classList.toggle('open');
      });

      options.forEach(option => {
        option.addEventListener('click', function () {
          options.forEach(o => o.classList.remove('active'));
          this.classList.add('active');
          selectedValue.textContent = this.textContent;
          content.classList.remove('open');
        });
      });
    }
  });

  // ▼▼▼ アコーディオン開閉・選択肢選択でテキスト変更（.ac-button用） ▼▼▼
  const acButtons = document.querySelectorAll('.ac-button');
  acButtons.forEach(button => {
    button.addEventListener('click', function () {
      const parentButton = this.closest('button');
      const accordion = parentButton?.nextElementSibling;
      if (accordion && accordion.classList.contains('accordion-content')) {
        accordion.classList.toggle('open');
      }
      // オプション選択でテキスト変更
      if (accordion) {
        const options = accordion.querySelectorAll('.accordion-option');
        options.forEach(option => {
          option.addEventListener('click', function () {
            const selectedText = this.textContent || this.innerText;
            const targetText = parentButton.querySelector('.text');
            if (targetText) {
              targetText.textContent = selectedText;
            }
            accordion.classList.remove('open');
          });
        });
      }
    });
  });
});