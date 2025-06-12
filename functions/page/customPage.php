<?php
/**
 * 固定ページ生成
 * 
 * サイトで使用する固定ページを自動生成するための定義
 * 各ページの目的と役割を明確に定義
 */

function create_custom_pages_with_optional_parents() {
  $pages = [
    // 会社概要ページ
    // 企業情報、事業内容、経営理念などを表示
    [
      'title' => 'アバウト',
      'slug' => 'about',
      'parent_slug' => '',
    ],

    // ユーザー登録ページ
    // 新規ユーザー登録フォームを表示
    [
      'title' => 'サインアップ',
      'slug' => 'sign-up',
      'parent_slug' => '',
    ],

    // ログインページ
    // 既存ユーザーのログインフォームを表示
    [
      'title' => 'サインイン',
      'slug' => 'sign-in',
      'parent_slug' => '',
    ],

    // お気に入り一覧ページ
    // ユーザーが保存したフランチャイズ情報の一覧を表示
    [
      'title' => 'お気に入り',
      'slug' => 'favorites',
      'parent_slug' => '',
    ],

    // ユーザー管理ページ
    // ユーザー情報の管理、登録情報の編集、お気に入り管理など
    [
      'title' => 'マイページ',
      'slug' => 'my-page',
      'parent_slug' => '',
    ],

    // フリーワード検索ページ
    // キーワードによるフランチャイズ検索フォームを表示
    [
      'title' => 'フリーワード',
      'slug' => 'free-word',
      'parent_slug' => '',
    ],

    // 資料請求ページ
    // フランチャイズの詳細資料請求フォームを表示
    [
      'title' => '資料請求',
      'slug' => 'request-material',
      'parent_slug' => '',
    ],

    // FC本部登録ページ
    // フランチャイズ本部の登録フォームを表示
    [
      'title' => 'FC本部登録フォーム',
      'slug' => 'branch-registration-form',
      'parent_slug' => '',
    ],

    // 詳細検索ページ
    // 条件を指定してフランチャイズを検索するフォームを表示
    [
      'title' => '検索条件',
      'slug' => 'search-conditions',
      'parent_slug' => '',
    ],

    // 説明会予約ページ
    // フランチャイズ説明会の予約フォームを表示
    [
      'title' => '説明会予約',
      'slug' => 'event-reservation',
      'parent_slug' => '',
    ],

    // お問い合わせページ
    // サイト全体に関するお問い合わせフォームを表示
    [
      'title' => 'お問い合わせ',
      'slug' => 'contact',
      'parent_slug' => '',
    ],

    // テストページ２
    // お役立ちコラムページネイション
    [
      'title' => 'テスト２',
      'slug' => 'test-2',
      'parent_slug' => '',
    ],
  ];

  // foreach ($pages as $page) {
  //   $parent_page_id = 0;
  //   if (!empty($page['parent_slug'])) {
  //     $query = new WP_Query(array(
  //       'name'        => $page['parent_slug'],
  //       'post_type'   => 'page',
  //       'post_status' => 'publish',
  //       'numberposts' => 1
  //     ));

  //     if ($query->have_posts()) {
  //       $query->the_post();
  //       $parent_page_id = get_the_ID();
  //       wp_reset_postdata(); // クエリのリセット
  //     }
  //   }

  //   // スラッグと親ページIDに基づいてページが存在するか確認
  //   $existing_page_query = new WP_Query(array(
  //     'post_type'   => 'page',
  //     'post_status' => 'publish',
  //     'name'        => $page['slug'],
  //     'post_parent' => $parent_page_id,
  //     'numberposts' => 1
  //   ));

  //   if ($existing_page_query->have_posts()) {
  //     // 既にページが存在する場合はスキップ
  //     wp_reset_postdata(); // クエリのリセット
  //     continue;
  //   }

  //   wp_insert_post(array(
  //     'post_title'   => $page['title'],
  //     'post_content' => isset($page['content']) ? $page['content'] : '', // 'content' キーが存在する場合はその値を、存在しない場合は空文字列を使用
  //     'post_status'  => 'publish',
  //     'post_type'    => 'page',
  //     'post_name'    => $page['slug'],
  //     'post_parent'  => $parent_page_id
  //   ));
  // }
}

add_action('after_setup_theme', 'create_custom_pages_with_optional_parents');
?>
