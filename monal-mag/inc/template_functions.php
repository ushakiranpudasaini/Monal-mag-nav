<?php
    // Template Functions
    //Excerpt FUnction
function monal_mag_reduce_excerpt($more)
{
	return '<a href="' . get_the_permalink() . '" rel="nofollow"> ..... </a>';
}
add_filter('excerpt_more', 'monal_mag_reduce_excerpt');

function monal_mag_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'monal_mag_excerpt_length', 999);

if (!function_exists('monal_mag_category_content')) :
	function monal_mag_category_content()
	{
		if ('post' === get_post_type()) {

			$categories = get_the_category();
			if (!empty($categories)) {
				echo "<div class='flex flex-wrap font-poppins gap-x-2 gap-y-2 '>";
				foreach ($categories as $cat) {
					echo "<a href='" . esc_url(get_category_link($cat->term_id)) . "' class='px-4 py-1 mb-2 mr-2 text-xs text-white transition bg-red-500 border rounded prime-back btn btn-sm prime-border border-1 hover:bg-white hover:text-red-500'>" . $cat->name . "</a>";
				}
				echo "</div>";
			}
		}
	}
endif;


if (!function_exists('monal_mag_tags_archive')) :
	function monal_mag_tags_archive()
	{
        ?>
<span class="archive-tags flex-wrap gap-x-2 gap-y-2 flex items-center mb-2 text-xs mt-2 text-gray-500">
    <?php
        $home_tags = get_the_tags();
        if ($home_tags) {
        ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-tags-fill"
        viewBox="0 0 16 16">
        <path
            d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
        <path
            d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
    </svg>
    <?php echo esc_html( 'Tags -', 'monal-mag' ) ?>
    <?php
                        foreach ($home_tags as $single_tag) {
                        ?>
    <a class="text-black transition hover:text-red-500 prime-hover"
        href="<?php echo esc_attr( get_tag_link( $single_tag->term_id ) ) ?>">
        <?php echo $single_tag->name; ?>,</a>
    <?php
                        }
                    }
                    ?>
</span>
<?php
}
endif;

// Topbar starts

function monal_mag_topbar()
{
?>
<div class="top-bar py-2 font-poppins">
    <div class="max-w-6xl mx-auto edu-top-hold gap-4 flex justify-between">
        <div class="edu-info  gap-4 flex items-center">
           <div class="flex items-center"> 
            <?php if (get_theme_mod('topbar_phone', '+21-323-435')) {
					echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-1 text-gray-50 bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg><span class="text-sm">' . esc_html(get_theme_mod('topbar_phone', '+21-323-435')) . '</span>';
				} ?>
                </div>

                 <div class="flex items-center">
            <?php if (get_theme_mod('topbar_location', 'Rato Bangla, Kathmandu')) {
					echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-1 text-gray-50 bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg><span  class="text-sm">' . esc_html(get_theme_mod('topbar_location', 'Rato Bangla, Kathmandu')) . '</span>';
				} ?>
                </div>
                <div class="flex items-center">
            <?php if (get_theme_mod('topbar_email', 'john.doe@gmail.com')) {
					echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-1 text-gray-50 bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg><span  class="text-sm">' . esc_html(get_theme_mod('topbar_email', 'john.doe@gmail.com')) . '</span>';
				} ?>
                </div>
        </div>
        <div class="edu-social flex items-center">
            <?php if (get_theme_mod('topbar_facebook', 'https://facebook.com')) {
					echo '<a href="' . esc_url(get_theme_mod('topbar_facebook', 'https://facebook.com')) . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-4 text-gray-50 bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a>';
				} ?>
            <?php if (get_theme_mod('topbar_twiiter', 'https://twitter.com')) {
					echo '<a href="' . esc_url(get_theme_mod('topbar_twitter', 'https://twitter.com')) . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-4 text-gray-50 bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                  </svg></a>';
				} ?>
            <?php if (get_theme_mod('topbar_instagram', 'https://instagram.com')) {
					echo '<a href="' . esc_url(get_theme_mod('topbar_instagram', 'https://instagram.com')) . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" text-gray-50 bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></a>';
				} ?>
        </div>
    </div>
</div>

<?php
}
//Topbar ends

if (!function_exists('monal_mag_author_date_archive')) :
	function monal_mag_author_date_archive()
	{
        ?>
<div class="flex flex-wrap items-center space-x-2 font-poppins">
    <span class="text-xs font-semibold text-gray-500 mb-2">
        <span class='font-medium'> <?php esc_html_e('By','monal-mag') ?> </span>
        <a class="text-black hover:text-red-500 transition"
            href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
            <?php echo get_the_author(); ?> </a> </span>
    <span class="text-xs text-gray-500 mb-2 "> <?php echo esc_html( '|', 'monal-mag' ) ?>&nbsp;
        <a class="text-black hover:text-red-500 transition"
            href="<?php the_permalink() ?>"><?php echo get_the_date('F j, Y'); ?> </a> </span>
</div>
<?php
}
endif;


if (!function_exists('wp_body_open')) :
/**
* Shim for sites older than 5.2.
*
* @link https://core.trac.wordpress.org/ticket/12563
*/
function wp_body_open()
{
do_action('wp_body_open');
}
endif;

?>