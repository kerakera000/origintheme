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
                <div class="signin-mainbox__form border-box">
                    <div class="signin-mainbox__form__innerbox">
                        <p class="inner-text-1">登録いただいたメールアドレスとパスワードを入力してください</p>
                        <form method="post" action="cgi-bin/main.py">
                            <div class="input-text">
                                <p class="inner-black">メールアドレス</p>
                            </div>
                            <div class="input-box">
                                <input type="text" name="id" size="20">
                            </div>
                            
                            <div class="input-text">
                                <p class="inner-black">パスワード</p>
                                <a class="inner-text-2 password-forget">パスワードを忘れた方</a>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" size="20">
                            </div>
                        </form>

                        <div class="common-center-button-box button-signin">
                            <button class="common-button-pink">ログイン</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('./template/banner'); ?>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 