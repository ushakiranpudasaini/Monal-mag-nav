<?php

/**
 * Template part for displaying posts archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monal-mag
 */

?>
<article id="post-<?php the_ID(); ?>" class="flex-1 overflow-hidden bg-white">
    <div class=" ">
        <div class="flex flex-wrap justify-center no-underline hover:no-underline font-poppins">
            <a href="<?php the_permalink(); ?>" class="w-full">

                <?php 
                if (get_the_post_thumbnail_url()) {
                    the_post_thumbnail('full', array('class' => 'object-cover w-full h-64')) ;
                } else {
                    echo "<div class='w-full h-64 bg-gray-500'></div>";
                }
                
                
                ?>
            </a>
            <div class="flex flex-col justify-center p-4 items-center">
                <div class="pt-2 text-sm font-semibold font-poppins text-red-500 capitalize justify-center">
                    <?php the_category(); ?>
                </div>
                <h2 class="px-3 mt-2 mb-3 text-xl font-semibold text-center text-black font-poppins">
                    <a class="text-black hover:text-red-500 transition breakword"
                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php 
                    if (get_theme_mod('show_excerpt_archive', 1) == 1) { 
                        ?>
                <p
                    class="hidden mb-3 text-sm leading-6 text-gray-500 md:block lg:text-md text-clip overflow-hidden ... text-center ">
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
    </div>
</article>