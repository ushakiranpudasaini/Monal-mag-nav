<?php

/**
 * Template part for displaying posts archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monal-mag
 */

?>
<article id="post-<?php the_ID(); ?>" class="flex gap-6 font-poppins border-b pb-6 p-6 flex-wrap">
    <?php if(get_the_post_thumbnail()){
    ?>
    <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail('full', array('class' => 'object-cover w-full h-full lg:w-80 lg:h-64')) ?>
    </a>
    <?php
}?>


    <div class="flex items-center flex-1">
        <div>
            <div class="inline-block text-xs font-semibold uppercase prime-text md:text-sm ">
                <?php the_category(); ?></div>


            <h2 class="mt-3 mb-3 font-semibold leading-6 text-gray-900 lg:leading-7 font-poppins lg:text-2xl ">
                <a class="text-black transition prime-hover breakword" href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>

            </h2>

            <?php 
                    if (get_theme_mod('show_excerpt_archive', 1) == 1) { 
                        ?>
            <p class="hidden mb-3 text-sm leading-6 text-gray-500 md:block lg:text-md text-clip overflow-hidden ... ">
                <?php echo get_the_excerpt(); ?>
            </p>
            <?php
                    }
                ?>
            <?php 
            if (get_theme_mod('show_author_date_archive', 1) == 1) { 
                monal_mag_author_date_archive();    
            }
            if (get_theme_mod('show_tags_archive', 1) == 1) { 
                monal_mag_tags_archive();    
            }
            ?>
        </div>
    </div>
</article>