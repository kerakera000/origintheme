<?php
/**
 * カスタムタクソノミーの定義
 *
 * @package Origintheme
 */

function create_custom_taxonomies() {
  // フランチャイズカテゴリー
  /*---------------------------------------------*/
  register_taxonomy(
    'franchise_category',
    array('franchise_list'),
    array(
      'label' => 'フランチャイズカテゴリー',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'franchise-category',
        'with_front' => true
      ),
    )
  );

  // コラムカテゴリー
  /*---------------------------------------------*/
  register_taxonomy(
    'column_category',
    array('useful_column'),
    array(
      'label' => 'コラムカテゴリー',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'column-category',
        'with_front' => true
      ),
    )
  );

  // 説明会カテゴリー
  /*---------------------------------------------*/
  register_taxonomy(
    'event_category',
    array('event_list'),
    array(
      'label' => '説明会カテゴリー',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => true,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'event-category',
        'with_front' => true
      ),
    )
  );

  // フランチャイズタグ
  /*---------------------------------------------*/
  register_taxonomy(
    'franchise_tag',
    array('franchise_list'),
    array(
      'label' => 'フランチャイズタグ',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => false,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'franchise-tag',
        'with_front' => true
      ),
    )
  );

  // コラムタグ
  /*---------------------------------------------*/
  register_taxonomy(
    'column_tag',
    array('useful_column'),
    array(
      'label' => 'コラムタグ',
      'public' => true,
      'show_ui' => true,
      'hierarchical' => false,
      'query_var' => true,
      'show_in_rest' => true,
      'rewrite' => array(
        'slug' => 'column-tag',
        'with_front' => true
      ),
    )
  );
}

// カスタムタクソノミーの登録
add_action('init', 'create_custom_taxonomies');
?>