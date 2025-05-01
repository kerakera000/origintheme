$(document).ready(function() {
    const $adjustANIM = $('#adjustANIM');
    const $stickeyBOTTOM = $('.stickeyBOTTOM');

    if ($adjustANIM.length === 0 || $stickeyBOTTOM.length === 0) return;

    $(window).on('scroll', function() {
        const adjustANIMOffset = $adjustANIM.offset().top;
        const windowHeight = $(window).height();
        const scrollTop = $(window).scrollTop();
        
        // 要素が画面中央に来たかどうかを判定
        if (adjustANIMOffset - scrollTop < windowHeight / 2) {
            $stickeyBOTTOM.removeClass('stickeyBOTTOM');
        } else {
            $stickeyBOTTOM.addClass('stickeyBOTTOM');
        }
    });
}); 