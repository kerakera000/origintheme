(function ($) {
    console.log('action.js loaded'); // スクリプト読み込み確認

    // DOMの読み込み完了後に実行
    $(document).ready(function() {
        console.log('DOM ready');
        
        // SPヘッダーボタンのクリックイベント
        console.log('SPheaderButton element:', $('#SPheaderButton').length); // 要素の存在確認
        $('#SPheaderButton').off('click').on('click', function() {
            console.log('SPheaderButton clicked'); // クリックイベント確認
            $('#SPHEADER, #SPheaderButton').toggleClass('open');
        });

        // サイドバー閉じるボタンのクリックイベント
        console.log('SidebarClose element:', $('#SidebarClose').length); // 要素の存在確認
        $('#SidebarClose').off('click').on('click', function(e) {
            console.log('SidebarClose clicked');
            e.stopPropagation();
            $('#SPHEADER, #SPheaderButton').removeClass('open');
        });
    });

    // アコーディオン開閉
    $(document).on('click', '.js-accordion-toggle', function() {
        var $toggle = $(this);
        var $content = $toggle.next('.js-accordion-content');
        $content.slideToggle(200);
        $toggle.toggleClass('is-open');
        // アイコンの向きやaria属性など必要に応じて追加
    });

})(jQuery);
