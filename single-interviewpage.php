<?php
global $wp_path;
global $site_url;

?>
<?php
get_template_part('./template/head');
?>

<?php get_template_part('./template/header');?>

<main class="l-main">
    <div class="p-interview">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="p-interview__single">
                <h1 class="p-interview__title"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="p-interview__thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="p-interview__content">
                    <?php the_content(); ?>
                </div>

                <div class="p-interview__meta">
                    <?php
                    $terms = get_the_terms($post->ID, 'interview-category');
                    if ($terms && !is_wp_error($terms)) : ?>
                        <div class="p-interview__categories">
                            <?php foreach ($terms as $term) : ?>
                                <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
