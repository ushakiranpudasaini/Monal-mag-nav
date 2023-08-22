<!-- Nav 1  -->


<nav class="   " >  
    <div class="nav-container mx-auto">
        <div class="justify-center lg:flex lg:justify-between lg:items-center navbar ss-nav font-poppins">
            <div class="flex items-center justify-center lg:justify-between ">
                <div class="flex items-center">
                    <button class="absolute left-0 lg:block top-2/4 -translate-y-2/4 lg:relative lg:translate-y-0"
                        id="side-open-button">
                        <svg viewBox="0 0 20 20" class="inline-block w-6 h-6 text-white" version="1.1"
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
                                        'li_class' => "relative block text-sm font-medium text-gray-50 transition duration-300  "
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

            <button class="absolute right-0 lg:relative edu-search lg:block top-2/4 -translate-y-2/4 lg:translate-y-0"
                id="search-open-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-white bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>

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
</nav>

<!-- Nav 1 end  -->