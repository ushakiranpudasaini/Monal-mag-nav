<!-- Nav 1  -->
<div class="    w-full bg-white border-gray-200 dark:border-gray-700  border-b lg:py-0 dark:bg-gray-900 ">
    <div class="nav-container mx-auto">
        <div class="justify-center lg:flex lg:justify-between lg:items-center navbar ss-nav font-poppins">
            <div class="flex items-center justify-center lg:justify-between ">
                <div class="flex items-center">
                    <button class="absolute left-0 lg:hidden block top-2/4 -translate-y-2/4 lg:relative lg:translate-y-0"
                        id="side-open-button">
                        <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path
                                        d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                        id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <?php if (has_custom_logo()) { ?>
                    <div class="ml-4">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php }
                        ?>
                    <?php
                            if (get_theme_mod('display_title_tagline', true)) {
                    ?>
                    <div class="ml-4">
                        <div class="text-lg uppercase">
                            <a href="<?php echo esc_url(home_url()); ?>" class="text-lg font-extrabold uppercase">
                                <?php echo get_bloginfo('name'); ?>
                            </a>
                        </div>
                        <?php
                                $description = get_bloginfo('description', 'display');
                                if ($description || is_customize_preview()) : ?>
                        <p class="text-sm font-light text-gray-600">
                            <?php echo esc_html($description); ?>
                        </p>
                        <?php
                        endif;
                        ?>
                    </div>
                    <?php
                            }
                            ?>
                </div>
            </div>
            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'menu_id'        => 'primary-menu',
                                        'menu_class'        => 'nav-menu',
                                        'container_class' => 'navbar-links ',
                                        'li_class' => "relative block text-sm font-medium text-gray-700 transition duration-300 "
                                    )
                                );
                            } else {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'menu_id'        => 'primary-menu',
                                        'menu_class' => 'navbar-links'
                                    )
                                );
                            }
                ?>

<div class="flex items-center">

<?php if ( 'show' === get_theme_mod( 'heart_button_visibility', 'show' ) ) : ?>
    <div class="heart-button <?php echo 'visible' === get_theme_mod( 'button_visibility_mobile', 'visible' ) ? 'visible-mobile' : ''; ?><?php echo 'visible' === get_theme_mod( 'button_visibility_desktop', 'visible' ) ? 'visible-desktop' : ''; ?>">
    <button class=" heart-button absolute right-0 lg:relative heart-search lg:block hidden top-2/4 -translate-y-2/4 lg:translate-y-0"
               >
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" fill="currentColor" class="w-5 h-5 bi bi-heart" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                        </svg>
                        </button>
    </div>
<?php endif; ?>
<?php if ( 'show' === get_theme_mod( 'ring_button_visibility', 'show' ) ) : ?>
    <div class="ring-button <?php echo 'visible' === get_theme_mod( 'button_visibility_mobile', 'visible' ) ? 'visible-mobile' : ''; ?><?php echo 'visible' === get_theme_mod( 'button_visibility_desktop', 'visible' ) ? 'visible-desktop' : ''; ?>">
    <button class="ml-6 ring-button  heart-search lg:block "
               >
               <span class="relative lg:inline-block   hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-5 h-5 bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                        </svg>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center w-2 h-2 bg-red-600 rounded-full"></span>
                    </span>
                        </button>
    </div>
<?php endif; ?>
<?php if ( 'show' === get_theme_mod( 'search_button_visibility', 'show' ) ) : ?>
    <div class="search-button <?php echo 'visible' === get_theme_mod( 'button_visibility_mobile', 'visible' ) ? 'visible-mobile' : ''; ?><?php echo 'visible' === get_theme_mod( 'button_visibility_desktop', 'visible' ) ? 'visible-desktop' : ''; ?>">
    <button class="ml-6 heart-button absolute right-0 lg:relative edu-search lg:block top-2/4 -translate-y-2/4 lg:translate-y-0"
                id="search-open-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" w-5 h-5 bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
    </div>
<?php endif; ?>
 
      
<button  class=" custom-button  ml-6 topnav-btn lg:flex hidden   text-sm rounded-full px-6 py-3">

<?php 
						   wp_nav_menu(
                                    array(
                                        'theme_location' => 'buttonmenu3',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
						  ?>
						  </button>
                        </div>
            <div class="headsearch-box" id="search-box">
                <form method="get" class="h-full" action="<?php echo esc_url(home_url()); ?>">
                    <label>
                        <span class="screen-reader-text"><?php esc_html_e('Search For: ', 'monal-mag'); ?></span>
                        <input type="search" id="search-input"
                            placeholder="<?php echo esc_attr__('Search Here', 'monal-mag') ?>" value=""
                            name="<?php echo esc_attr__('s', 'monal-mag') ?>">
                    </label>
                </form>
                <button class="cross" id="search-close-button">
                    <svg class="cross-btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z">
                        </path>
                    </svg>
                </button>

            </div>
            <div class="search-glam" id="search-show" tabindex="-1">
                <div class="container">
                    <div class="search-query">
                        <form method="get" class="search-form" action="<?php echo esc_url(home_url()); ?>">
                            <label>
                                <span
                                    class="screen-reader-text"><?php esc_html_e('Search For: ', 'monal-mag'); ?></span>
                                <input type="search" id="search-input" class="search-field"
                                    placeholder="<?php echo esc_attr__('Search Here', 'monal-mag') ?>" value=""
                                    name="<?php echo esc_attr__('s', 'monal-mag') ?>">
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidenavbar font-poppins" id="sidenav">
            <button class="cross-btn" id="side-close-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                    <path fill-rule="evenodd"
                        d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                </svg>

            </button>
            <?php
                    if (has_nav_menu('side')) {
                    wp_nav_menu(
                    array(
                        'theme_location' => 'side',
                        'menu_id'        => 'primary-menu',
                        'container' => ''
                    )
                    );
                    } else {
                        wp_nav_menu(
                        array(
                            'theme_location' => 'side',
                            'menu_class'        => '',
                            'container' => 'ul'
                        )
                        );
                        }
                ?>

        </div>
    </div>
</div>

<!-- Nav 1 end  -->