<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monal-mag
 */

?>

<?php
                if (get_theme_mod('enable_sidebar_option_single_page', 1) == 0) {
	$hasSidebar = 0;
	$fullwidth = "";
} else {
	$hasSidebar = 1;
	$fullwidth = "grid-cols-1 lg:grid-cols-[70%,1fr]";
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="body_background">
        <div class="body-container mx-auto ">
            <div class="grid <?php echo esc_html($fullwidth, 'monal-mag');?>  gap-5 pt-9 pb-7">
                <div class="single bg-white">
                    <div class="px-6 py-3 bg-white">
                        <div class="flex-wrap flex gap-4 my-1 mb-3 text-sm text-gray-500 font-poppins entry-meta">
                            <div class="flex items-center flex-center">
                                <!-- Calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="mr-2 bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                                <?php echo get_the_date(); ?>,
                            </div>

                            <div class="flex items-center flex-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                    class="mr-2 bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                By <?php the_author(); ?>
                            </div>
                        </div>
                        <?php monal_mag_category_content() ?>
                        <h2 class="text-2xl font-semibold mb-7 font-poppins"><?php the_title(); ?></h2>
                        <?php the_post_thumbnail('full', array('class' => 'object-cover w-96 md:w-96 lg:w-full h-42')); ?>
                        <div class="main-content">
                            <?php the_content(); ?>

                        </div>
                        <div class="flex flex-wrap gap-2 my-4 font-poppins ">
                            <?php
                            $post_tags = get_the_tags();

                            if ($post_tags) {
                                foreach ($post_tags as $single_tag) {
                            ?>
                            <a class="py-1 mb-2 bg-gray-300 text-black rounded btn btn-sm text-xs hover:bg-red-500 hover:text-white px-4 transition"
                                href="<?php esc_attr( get_tag_link( $single_tag->term_id ) )?>">,
                                <?php echo esc_html($single_tag->name, 'monal-mag'); ?></a>
                            <?php

                                }
                            } ?>


                        </div>
                        <?php

                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'monal-mag'),
                            'after'  => '</div>',
                        )
                    );
                    ?>


                </div>

                <?php if ($hasSidebar) : ?>

                <div class="side">
                    <?php get_sidebar() ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </section>
</article>