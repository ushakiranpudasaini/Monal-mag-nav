<!-- Nav 1  -->
<div class="border-b bg-white">
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
                                        'container_class' => 'navbar-links',
                                        'li_class' => "relative block text-sm font-medium text-gray-500 transition duration-300 border-b-2 border-white hover:border-gray-900"
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

           
 <div class="flex">   
            <div class="items-center hidden max-w-xs py-2 pl-4 bg-white rounded-lg dark:text-gray-300 dark:bg-gray-600 lg:flex">
            <button class="  lg:relative edu-search lg:block  "
                id="search-open-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
                        <input type="text" class="edu-search w-full  pl-3 border-0 dark:text-gray-300 dark:bg-gray-600 text-sm" placeholder="Search...">
                        <div class="pr-4">
                            <select name="" id="" class="pl-3 pr-4 border-0 border-l border-gray-400 cursor-pointer dark:bg-gray-600">
                                <option value="">All items</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                        </div>
                    </div>
                        </div>
                        <div class="items-center justify-end hidden lg:flex dark:text-gray-400">
                        <a href="" class="mr-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                </path>
                            </svg>
                        </a>
                        <a href="" class="flex items-center dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                            </svg>
                        </a>
                        <a href="" class="items-center hidden pl-6 text-sm font-semibold lg:flex dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mr-1 bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg>
                        </a>
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