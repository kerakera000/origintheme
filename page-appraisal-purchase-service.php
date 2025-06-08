<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main id="pageTop" class="main-layout">
    <div class="appraisal-purchase-page">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="appraisal-purchase-content">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php
get_template_part('./template/footer');
?> 