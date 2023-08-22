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
            <div class="block lg:grid <?php echo esc_attr($gridFull); ?> gap-5 pt-9 pb-7">
                <div class="single">
                    <div class="py-3 bg-white px-7">
                        <div class="">
                            <div class="flex mt-2 <?php echo esc_attr($center); ?>">

                                <?php monal_mag_category_content() ?>
                            </div>
                            <h1
                                class="text-2xl font-semibold mb-1 font-poppins  text-black leading-10 flex <?php echo esc_attr($center); ?>">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="flex-wrap items-center mb-2 md:flex font-poppins <?php echo esc_attr($center); ?>">

                            <div class="flex flex-col justify-center">
                                <span class="flex items-center text-gray-500 text-sm <?php echo esc_attr($center); ?>">
                                    <?php esc_html_e( 'By ', 'monal-mag' )?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                        class="text-sm text-red-500 transition hover:text-red-500 ml-1">
                                        <?php the_author(); ?>
                                    </a>
                                </span>
                                <span
                                    class="mb-1 text-sm"><?php esc_html_e( 'Published On : ', 'monal-mag' )?><?php echo get_the_date('F j, Y, g:i a') ?>
                                </span>


                            </div>

                        </div>
                        <?php the_post_thumbnail('full', array('class' => 'w-full')) ?>
                        <div class="<?php echo esc_attr($mainMaxWidth); ?>">

                            <div class="main-content">
                                <?php the_content(); ?>
                            </div>

                            <div class="flex flex-wrap gap-2 font-poppins my-4 ">
                                <?php
                            $post_tags = get_the_tags();

                            if ($post_tags) {
                                foreach ($post_tags as $single_tag) {
                            ?>
                                <a class="py-1 mb-2 bg-gray-300 text-black rounded btn btn-sm text-xs hover:bg-red-500 hover:text-white px-4 transition"
                                    href="<?php echo esc_attr( get_tag_link( $single_tag->term_id ) )?>">
                                    <?php echo esc_html($single_tag->name, 'monal-mag'); ?></a>
                                <?php

                                }
                            } 
                            
                            ?>


                            </div>

                            <?php 
                            the_post_navigation();
                        ?>

                            <?php

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