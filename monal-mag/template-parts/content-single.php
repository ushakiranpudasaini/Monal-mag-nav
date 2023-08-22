<?php 
    if(get_theme_mod( 'enable_sidebar_option_single_post', 1 ) == 0){
        $gridFull = 'fullwidth';
        $center = 'justify-center';
        $mainMaxWidth = 'main-max-width';
    } else {
        $gridFull = 'mag-two-cols';
        $center = '';
        $mainMaxWidth = '';
    }?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="body_background">
        <div class="body-container mx-auto ">
            <div class="block lg:grid <?php echo esc_attr($gridFull); ?>  gap-5 pt-9 pb-7">
                <div class="single">
                    <div class="px-6 py-3 bg-white">
                        <div class="text-center">

                            <div
                                class="flex-wrap flex gap-4 my-1 mb-3 text-sm text-gray-500 font-poppins <?php echo esc_attr($center); ?> entry-meta">
                                <div class="flex items-center flex-center ">
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

                                <div class="flex items-center flex-center <?php echo esc_attr($center); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                        class="mr-2 bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    <?php esc_html_e( 'By ', 'monal-mag' )?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                        class="text-sm text-red-500 transition hover:text-red-500 ml-1">
                                        <?php the_author(); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="flex <?php echo esc_attr($center); ?>">

                                <?php monal_mag_category_content() ?>
                            </div>
                            <h1
                                class="text-2xl font-semibold mb-7 break-words font-poppins flex <?php echo esc_attr($center); ?>">
                                <?php the_title(); ?></h1>
                        </div>
                        <?php the_post_thumbnail('full', array('class' => 'object-cover w-full h-full')); ?>
                        <div class="<?php echo esc_attr($mainMaxWidth); ?>">
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
                                    href="<?php esc_attr( get_tag_link( $single_tag->term_id ) )?>">
                                    <?php echo esc_html($single_tag->name, 'monal-mag'); ?></a>
                                <?php

                                }
                            } 
                            ?>
                            </div>

                            <?php

                            the_post_navigation();
                            
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                        </div>

                    </div>



                </div>
                <?php if(get_theme_mod( 'enable_sidebar_option_single_post', 1 ) == 1){
                    ?>
                <div class="side ">
                    <?php get_sidebar() ?>
                </div>
                <?php        
                }?>

            </div>
        </div>

    </section>
</article>