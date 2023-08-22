<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(' text-gray-900 antialiased'); ?>>
    <?php wp_body_open() ?>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="flex flex-col min-h-screen">

        <?php do_action('tailpress_header'); ?>

        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'monal-mag'); ?></a>
        <header id="masthead" class="site-header <?php echo esc_html($headerStyle) ?>">
            <nav class="nav-main">
                <?php
                if (get_theme_mod('topbar_visibility', 1) == 1) {
                    monal_mag_topbar();
                }            
                ?>
            </nav>
        </header>
        
        <header>
            <div class="relative z-[100] nav-main">                 
              <?php 
$nav = esc_html(get_theme_mod('navbar_choices', '1' ), 'monal-mag');
if($nav == '1'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar1.php';
}
elseif ($nav == '2'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar2.php';
}
elseif ($nav == '3'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar3.php';
}
elseif ($nav == '4'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar4.php';
}
elseif ($nav == '5'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar5.php';
}
elseif ($nav == '6'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar6.php';
}
elseif ($nav == '7'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar7.php';
}
elseif ($nav == '8'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar8.php';
}
elseif ($nav == '9'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar9.php';
}
elseif ($nav == '10'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar10.php';
}
elseif ($nav == '11'){
    require_once dirname(__FILE__) . '/inc/navbar_templates/navbar11.php';
}
?>
 </div>   
                
        </header>
       
        <div id="content" class=" site-content nav-header font-poppins">
         <section class="hero-section relative bg-center bg-cover" style="margin-top:-64px;height:700px;width:100%;object-fit:cover;background-image: url('<?php echo get_theme_mod('hero_image', ''); ?>');">
        <div class="absolute top-0 bottom-0 left-0 right-0 flex items-center bg-gray-900/75">
        <div class="max-w-6xl mx-auto px-4 block  justify-center text-center items-center">
        <div class="hero-text mb-6 ">
            <h1 class="text-4xl font-bold text-gray-50"><?php echo get_theme_mod('hero_text', 'Default Hero Text'); ?></h1>
        </div>
        <div class="hero-content mx-auto mb-10 w-[70%]">
           <p class="text-base text-center text-gray-300"> <?php echo get_theme_mod('hero_content', 'Default Hero content'); ?></p>
        </div>
        <div class="hero-button">
        <a class=" bg-blue-600 text-gray-50 rounded-full px-6 py-3" href="<?php echo get_theme_mod('hero_button_url', '#'); ?>">
            <?php echo get_theme_mod('hero_button_text', 'Learn More'); ?>
        </a></div>
    </div>
</div>
</section> 


            <?php do_action('tailpress_content_start'); ?>

            <main>