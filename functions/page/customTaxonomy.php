<?php
/**
 * カスタムタクソノミー
 */

register_taxonomy(
  'news-category',
  array('news'),
  array(
    'label' => 'お知らせカテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
  )
);

?>