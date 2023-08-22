<?php get_header(); ?>

<div class="main-article">
    <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
        get_template_part('template-parts/content', 'page');
  ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php
get_footer();
?>

<!-- page.php -->
<?php
if (is_page('style-1-page')) {
    get_footer('style-1');
} elseif (is_page('style-2-page')) {
    get_footer('style-2');
} elseif (is_page('style-3-page')) {
    get_footer('style-3');
} else {
    get_footer();
}
?>

