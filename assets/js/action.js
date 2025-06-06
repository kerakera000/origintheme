(function ($) {
    // Swiperの初期化

    // アコーディオン開閉
    $(document).on('click', '.js-accordion-toggle', function() {
        var $toggle = $(this);
        var $content = $toggle.next('.js-accordion-content');
        $content.slideToggle(200);
        $toggle.toggleClass('is-open');
        // アイコンの向きやaria属性など必要に応じて追加
    });
})(jQuery);
