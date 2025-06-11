<?php
/**
 * コンテンツヘッダー部分のテンプレート
 */
?>
<div class="content-header-nav">
  <button id="Search-Condition-Button" class="nav-item nav-search">
    <span class="nav-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/search-white.svg" alt="検索">
    </span>
    フランチャイズを探す
  </button>
  <button id="Search-Freeword-Button" class="nav-item nav-search">
    <span class="nav-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/rank.svg" alt="ランキング">
    </span>
    ランキング
  </button>
  <a href="#" class="nav-item nav-new">
    <span class="nav-icon">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header/new.svg" alt="新着">
    </span>
    新着
  </a>
  <a href="#" class="nav-item nav-about">
    このサイト名について
  </a>
</div>

<?php get_template_part('./template/search-condition-modal');?>
<?php get_template_part('./template/search-freeword-modal');?>