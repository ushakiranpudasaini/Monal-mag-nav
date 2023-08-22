<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monal-mag
 */

?>

<section class="no-results not-found p-8">
    <header class="page-header">
        <h1 class="page-title font-poppins text-3xl"><?php esc_html_e('Nothing Found', 'monal-mag'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content font-poppins mt-4 mb-4">
        <?php
		if (is_home() && current_user_can('publish_posts')) :

			printf(
				'<p class="mb-4">' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'monal-mag'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);

		elseif (is_search()) :
		?>

        <p class="mb-4">
            <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'monal-mag'); ?>
        </p>
        <?php
			get_search_form();

		else :
		?>

        <p class="mb-4">
            <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'monal-mag'); ?>
        </p>
        <?php
			get_search_form();

		endif;
		?>
    </div><!-- .page-content -->
</section><!-- .no-results -->