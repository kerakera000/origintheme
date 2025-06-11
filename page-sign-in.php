<?php
/**
 * サインインページのテンプレート
 * 
 * 既存ユーザーのログインフォームを表示するページ
 * ユーザー認証とセッション管理を行う重要なページ
 * セキュリティ対策（CSRF対策、ブルートフォース対策など）が必要
 *
 * @package Origintheme
 */

global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="max-content signin-page">
    <?php get_template_part('./template/content-header'); ?>
    <div class="common-container signin-page-content">
        <div class="common-left-content signin-page-content__left">
            <!-- コンテンツをここに追加 -->
            <div class="signin-mainbox">
                <div class="common-sub-titlebox signin-mainbox__title">
                    <h3 class="title">ログイン</h3> 
                </div>

                <form method="post" action="cgi-bin/main.py">
                <p>メールアドレス </p>
                <input type="text" name="id" size="20">
                <p>パスワード</p>
                <input type="password" name="password" size="20">
                <p><input type="submit" value="ログイン"></p>
                </form>

            </div>
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 