<?php

/**
 * monal-mag Theme Customizer
 *
 * @package monal-mag
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function monal_mag_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'monal_mag_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'monal_mag_customize_partial_blogdescription',
            )
        );


        // Add "display_title_and_tagline" setting for displaying the site-title & tagline.
        $wp_customize->add_setting(
            'display_title_tagline',
            array(
                'capability'        => 'edit_theme_options',
                'default'           => true,
                'sanitize_callback' => 'monal_mag_sanitize_checkbox',
            )
        );

        // Add control for the "display_title_and_tagline" setting.
        $wp_customize->add_control(
            'display_title_tagline',
            array(
                'type'    => 'checkbox',
                'section' => 'title_tagline',
                'label'   => esc_html__('Display Site Title & Tagline', 'monal-mag'),
            )
        );
    }

    // Footer
    $footer_styles = array(
        'style-default' => __('Default', 'custom-theme'),
        'style-dark' => __('Dark', 'custom-theme'),
        'style-light' => __('Light', 'custom-theme'),
        'style-red' => __('Red', 'custom-theme'),
        'style-blue' => __('Blue', 'custom-theme'),
        // Add more styles as needed
    );

    $wp_customize->add_setting('footer_style', array(
        'default' => 'style-default',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_style', array(
        'label' => __('Select Footer Style', 'custom-theme'),
        'section' => 'footer_style_section',
        'type' => 'select',
        'choices' => $footer_styles,
    ));

}
add_action('customize_register', 'monal_mag_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function monal_mag_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function monal_mag_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function monal_mag_customize_preview_js()
{
    wp_enqueue_script('monal-mag-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), MONAL_MAG_VERSION, true);
}
add_action('customize_preview_init', 'monal_mag_customize_preview_js');

require_once get_template_directory() . '/inc/extra_customizer/sanitize_functions.php';
require_once get_template_directory() . '/inc/custom-controls.php';
function extra_register($wp_customize)
{
    require get_template_directory() . '/inc/extra_customizer/education_theme_options.php';
    require get_template_directory() . '/inc/extra_customizer/education_general_settings.php';
}
add_action('customize_register', 'extra_register');


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function monal_mag_customize_copyright_text()
{
    bloginfo('name');
}


// CSS HOOK 
add_action('wp_head', 'monal_mag_customizer_css');
function monal_mag_customizer_css()
{
    // Colors
    $primary_color = esc_attr(get_theme_mod('primary_color', '#EF4444'));
    $secondary_color = esc_attr(get_theme_mod('secondary_color', '#ffffff'));
//Topbar
    $topbar_background = esc_attr(get_theme_mod('edu_background_color', '#2C2D60'));
	$topbar_textcolor = esc_attr(get_theme_mod('edu_text_color', '#FFFFFF'));
    //Navbar
    $button_text = esc_attr(get_theme_mod('button_text_color', '#FFFFFF'));
    $button_border = esc_attr(get_theme_mod('button_border_color', '#000000'));
    $button_background = esc_attr(get_theme_mod('button_background', '#000000'));
    // $header_background = esc_attr(get_theme_mod('header_background', '#FFFFFF'));
    // $header_text = esc_attr(get_theme_mod('header_text_color', '#000000'));
    $header_textwhite = esc_attr(get_theme_mod('header_text_color', '#ffffff'));
    $header_hover = esc_attr(get_theme_mod('header_hover_color', '#000000'));
    $dropdown_text = esc_attr(get_theme_mod('dropdown_color', '#000000'));
    $dropdown_background = esc_attr(get_theme_mod('dropdown_background', '#d6d6d6'));
    $dropdown_hover = esc_attr(get_theme_mod('dropdown_hover_color', '#e2e2e2'));

    // SideNavbar
    $sidenav_back = esc_attr(get_theme_mod('sidenav_background', '#000000'));
    $sidenav_hover_bg = esc_attr(get_theme_mod('sidenav_hover_bg', '#EF4444'));
    $sidenav_color = esc_attr(get_theme_mod('sidenav_text_color', '#ffffff'));
    $sidenav_submenu = esc_attr(get_theme_mod('sidenav_submenu', '#2C2C2C'));
    $sidenav_submenu_text = esc_attr(get_theme_mod('sidenav_submenu_text', '#FFFFFF'));
    $sidenav_submenu_hover = esc_attr(get_theme_mod('sidenav_submenu_hover', '#5C5C5C'));
    $post_heading_color = esc_attr(get_theme_mod('postheading_color', '#000000'));
    $post_paragraph_color = esc_attr(get_theme_mod('posttext_color', '#585858'));
    $body_background_color = esc_attr(get_theme_mod('body_background_color', '#f3f4f5'));
    $link_color = esc_attr(get_theme_mod('link_color', '#000000'));
    $link_hover_color = esc_attr(get_theme_mod('link_hover_color', '#1787bd'));
    $copyright_text_color = esc_attr(get_theme_mod('copyright_text_color', '#FFFFFF'));
    $copyright_background = esc_attr(get_theme_mod('copyright_background', '#000000'));
    $footer_background = esc_attr(get_theme_mod('footer_background_color', '#2C2D60'));
    $footer_text = esc_attr(get_theme_mod('footer_text_color', '#FFFFFF'));
    $footer_head = esc_attr(get_theme_mod('footer_head_color', '#FFFFFF'));
    $nav_width_container = esc_attr(get_theme_mod('nav_width_container','1280'));
    $body_width_container = esc_attr(get_theme_mod('body_width_container','1280'));
    $home_widget = esc_attr(get_theme_mod('home_widget', '#585858'));
    $logo_width = esc_attr(get_theme_mod('logo_width', '58'));
    $edu_heading_one_size = esc_attr(get_theme_mod('edu_heading_one_size', '30'));
    $edu_heading_two_size = esc_attr(get_theme_mod('edu_heading_two_size', '24'));
    $edu_heading_three_size = esc_attr(get_theme_mod('edu_heading_three_size', '22'));
    $edu_heading_four_size = esc_attr(get_theme_mod('edu_heading_four_size', '20'));
    $edu_heading_five_size = esc_attr(get_theme_mod('edu_heading_five_size', '18'));
    $edu_heading_six_size = esc_attr(get_theme_mod('edu_heading_six_size', '16'));
    $edu_paragraph_size = esc_attr(get_theme_mod('edu_paragraph_size', '15'));
    $edu_widget_title_size = esc_attr(get_theme_mod('edu_widget_title_size', '24'));
    $edu_meta_size = esc_attr(get_theme_mod('edu_meta_size', '14'));
?>
<style>

.custom-buttons {
    background: <?php echo $button_background ?>;
    color:<?php echo $button_text ?>;
    border: <?php echo $button_border ?>;
}

/* Navbar logo Width  */
.custom-logo-link img {
    width: <?php echo $logo_width ?>px;
}

/* body background color  */
.nav-container {
    max-width: <?php echo $nav_width_container ?>px;
    padding: 0 15px;
}

.body-container {
    max-width: <?php echo $body_width_container ?>px;
    padding: 0 15px;
}

.body_background {
    background: <?php echo $body_background_color ?> !important;
}


.nav-main {
    background: <?php echo $header_background ?>;
}

/* .navbar .navbar-links>ul>li:hover {
    background: <?php echo $header_hover ?>;
} */

.navbar .navbar-logo img {
    width: <?php echo $logo_width ?>px;
}

.navbar .navbar-links>ul>li a,
.edu-search,
.site-title-wrapper .site-title a,
.site-title-wrapper .site-description {
    color: <?php echo $header_text ?>;
}

/* dropdown background */
.navbar .navbar-links>ul>li .sub-menu>li {
    background: <?php echo $dropdown_background ?>;
}

/* dropdown text */
.navbar .navbar-links>ul>li .sub-menu>li>a {
    color: <?php echo $dropdown_text ?>;
}

/* dropdown hover */
.navbar .navbar-links>ul>li .sub-menu>li:hover {
    background: <?php echo $dropdown_hover ?>;
}

/* sidenav back  */
.sidenavbar {
    background: <?php echo $sidenav_back ?>;
}

/* sidenav text color  */
.sidenavbar ul li a {
    color: <?php echo $sidenav_color ?>;
}

/* Sidenav hover */
.sidenavbar>ul>li:hover {
    background: <?php echo $sidenav_hover_bg ?>;
}

/* sidenav sub-menu back  */
.sidenavbar ul li .sub-menu>li {
    background: <?php echo $sidenav_submenu ?>;
}

/* sidenav sub-menu text  */
.sidenavbar ul li .sub-menu>li>a {
    color: <?php echo $sidenav_submenu_text ?>;
}

/* // Sub menu HOver  */
.sidenavbar ul li .sub-menu>li:hover {
    background: <?php echo $sidenav_submenu_hover ?>;
}


.prime-border {
    border-color: <?php echo $primary_color ?>;
}

.prime-border:hover {
    border-color: <?php echo $primary_color ?>;
}

.prime-text {
    color: <?php echo $primary_color ?>;
}

.prime-hover:hover {
    color: <?php echo $primary_color ?>;
}

.prime-tag:hover {
    background: <?php echo $primary_color ?>;
}

.prime-back {
    background: <?php echo $primary_color ?>;
}

.pagination .page-numbers {
    background: <?php echo $primary_color ?>;
}

.home_widget_heading {
    color: <?php echo $home_widget ?>;
}

.entry-meta {
    font-size: <?php echo $edu_meta_size ?>px;
}

.main-content p {
    font-size: <?php echo $edu_paragraph_size ?>px;
}

.comment-content h6,
.main-content h6 {
    font-size: <?php echo $edu_heading_six_size ?>px;
}

.comment-content h5,
.main-content h5 {
    font-size: <?php echo $edu_heading_five_size ?>px;
}

.comment-content h4,
.main-content h4 {
    font-size: <?php echo $edu_heading_four_size ?>px;
}

.comment-content h3,
.main-content h3 {
    font-size: <?php echo $edu_heading_three_size ?>px;
}

.comment-content h2,
.main-content h2 {
    font-size: <?php echo $edu_heading_two_size ?>px;
}

.comment-content h1,
.main-content h1 {
    font-size: <?php echo $edu_heading_one_size ?>px;
}

.site-footer .widget_block {
    background: <?php echo $footer_background ?>;
    color: <?php echo $footer_text ?>;
}

.site-footer {
    background: <?php echo $footer_background ?>;
}

.site-footer .widget_block h2 {
    font-size: <?php echo $edu_widget_title_size ?>px;
    color: <?php echo $footer_head ?>;

}


.copyright-background {
    background: <?php echo $copyright_background ?>;
}

.copyright-text {
    color: <?php echo $copyright_text_color ?>;
}

.side .widget a:hover {
    color: <?php echo $primary_color ?>;
}
/* Topbar */
.top-bar {
    background: <?php echo $topbar_background ?>;
}

.top-bar i,
.top-bar span {
    color: <?php echo $topbar_textcolor ?>;
}
.custom-button {
        color: <?php echo get_theme_mod( 'button_text_color', '#ffffff' ); ?>;
        background-color: <?php echo get_theme_mod( 'button_background_color', '#007bff' ); ?>;
        border: 2px solid <?php echo get_theme_mod( 'button_border_color', '#007bff' ); ?>;
        /* Add other button styles here */
    }

    
</style>
<?php
}

