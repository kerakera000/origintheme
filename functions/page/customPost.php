<?php
/**
 * カスタム投稿タイプ
 */

function create_post_type() {
  // Post
  /*---------------------------------------------*/
  register_post_type(
    'news',
    array(
      'label' => 'お知らせ',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'show_in_rest' => true,
      'show_ui' => true,
      'supports' => array(
        'title',
        'thumbnail'
      ),
    )
  );


}
add_action( 'init', 'create_post_type' );
?>