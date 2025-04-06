(function ($) {
    // HeroImgのアニメーション
    setTimeout(() => {
        $('#HeroImg').addClass('active');
    }, 1000);

    $(window).on('load', function() {
        // Swiperの初期化
        var swiper = new Swiper(".InterviewSwiper", {
            slidesPerView: 1,
            spaceBetween: 80,
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
            breakpoints: {
                425: {
                    enabled:false,
                    slidesPerView: 1,
                    slideMinWidth: 468,
                },
                768: {
                    enabled: true,
                    slidesPerView: 2,
                    slideMinWidth: 468,
                },
                1000: {
                    enabled: true,
                    slidesPerView: 3,
                    slideMinWidth: 468,
                }
            },
            enabled: false
        });

        const missionSwiper = new Swiper('.PAmissionSwiper', {
            slidesPerView: 2,
            centeredSlides: false,
            initialSlide: 1,
            spaceBetween: 24,
            autoplay: {
                delay: 3000,
            },
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 3.4,
                    slideMinWidth: 468,
                    spaceBetween: 80,
                    initialSlide: 2,
                },
            },
        });

        // NEWS-DECORATION-TEXT要素の処理
        const $newsDecorationText = $('#NEWS-DECORATION-TEXT');
        const originalText = $newsDecorationText.text();
        const repeatedText = Array(10).fill(`<span>${originalText}</span>`).join('');
        const $newsDecorationTextInner = $('<div>').addClass('news-decoration-text-inner').html(repeatedText);
        $newsDecorationText.empty().append($newsDecorationTextInner);

        // タイトルアニメーション
        setTimeout(() => {
            $('.hero-textbox').addClass('active');
        }, 1400);

        setTimeout(() => {
            $('.title1').addClass('active');
        }, 1400);

        setTimeout(() => {
            $('.title2').addClass('active');
        }, 1600);

        setTimeout(() => {
            $('.title3').addClass('active');
        }, 1800);

        setTimeout(() => {
            $('.subimg').addClass('active');
        }, 2000);

        setTimeout(() => {
            $('#ScrollDown').addClass('active');
        }, 2200);

        // 背景アニメーション
        setTimeout(() => {
            $('.bganim1, .bganim2').addClass('active');
        }, 800);

        // スクロールアニメーション
        $(window).on('scroll', function() {
            const scrollPosition = $(window).scrollTop();
            
            if (scrollPosition > 40) {
                $('.bganim1, .bganim2, #ScrollDown').addClass('scroll-active');
            } else {
                $('.bganim1, .bganim2, #ScrollDown').removeClass('scroll-active');
            }

            // タイトルとサブ画像のスクロールアニメーション
            if (scrollPosition > 890) {
                $('.title1, .title2, .title3, .subimg, .hero-textbox').addClass('scroll-active');
            } else {
                $('.title1, .title2, .title3, .subimg, .hero-textbox').removeClass('scroll-active');
            }

            // ヘッダーのスクロールアニメーション
            if (scrollPosition > 50) {
                $('#HEADER').addClass('active');
            } else {
                $('#HEADER').removeClass('active');
            }
        });
    });

    $(document).ready(function() {
        // SPheaderButtonクリック処理
        $('#SPheaderButton').on('click', function() {
            $('#SPHEADER, #SPheaderButton').toggleClass('open');
        });

        // アコーディオンのクリック処理
        $('.question').on('click', function() {
            const $toggle = $(this).prev('.toggle');
            $toggle.prop('checked', !$toggle.prop('checked'));
        });

        // テーブルセルのサイズ調整
        function adjustTableCells() {
            const $table = $('#PATable');
            if (!$table.length) return;

            const tableWidth = $table.width();
            const cellWidth = Math.floor(tableWidth / 3);
            
            $('.table-cell').css({
                width: cellWidth,
                height: cellWidth
            });
        }

        // 初期化時とリサイズ時に実行
        adjustTableCells();
        $(window).on('resize', adjustTableCells);

        // タイトルのアニメーション
        const CLASSNAME = "visible";
        const TIMEOUT = 500;
        setInterval(() => {
            $('#Ctitle, #Csubtitle').addClass(CLASSNAME);
        }, TIMEOUT * 2);
    });

    $(window).on('scroll', function() {
        $('.rightanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('.leftanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });

    $(window).on('scroll', function() {
        $('.topanim').each(function() {
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var elementHeight = $(this).height();

            // 要素が画面内に入ってきた時
            if (scroll > position - windowHeight + 100 && scroll < position + elementHeight) {
                $(this).addClass('active');
            }
            // 要素が画面上部に隠れた時
            else {
                $(this).removeClass('active');
            }
        });
    });
})(jQuery);