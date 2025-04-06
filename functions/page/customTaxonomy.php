<?php
/**
 * カスタムタクソノミー
 */

register_taxonomy(
  'interview-category',
  array('interviewpage'),
  array(
    'label' => 'インタビューカテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var' => true,
    'show_in_rest' => true,
  )
);

?>