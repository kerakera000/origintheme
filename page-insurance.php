<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main id="pageTop" class="main-layout">
    <div class="insurance-page">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="insurance-content">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 