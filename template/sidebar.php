<?php
global $wp_path;
global $site_url;
?>

<div id="Sidebar" class="sidebar">
    <button id="SidebarClose" class="sidebar__close">
        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar/close.svg" alt="">
    </button>
    <a href="https://www.google.com" class="sidebar__content">
        <p class="text">
            広告バナー<br>
            掲載ご希望の方はこちら
        </p>
        <div class="button">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar/arrow.svg" alt="">
        </div>
    </a>
</div>