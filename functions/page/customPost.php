<?php
/**
 * カスタム投稿タイプの定義
 *
 * @package Origintheme
 */

function create_post_type() {
  // フランチャイズ一覧
  /*---------------------------------------------*/
  register_post_type(
    'franchise_list',
    array(
      'label' => 'フランチャイズ一覧',
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

  // お役立ちコラム
  /*---------------------------------------------*/
  register_post_type(
    'useful_column',
    array(
      'label' => 'お役立ちコラム',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'show_ui' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'comments'
      ),
    )
  );

  // 説明会一覧
  /*---------------------------------------------*/
  register_post_type(
    'event_list',
    array(
      'label' => '説明会一覧',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'show_in_rest' => true,
      'show_ui' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'comments'
      ),
    )
  );
}

// カスタム投稿タイプの登録
add_action('init', 'create_post_type');
?>