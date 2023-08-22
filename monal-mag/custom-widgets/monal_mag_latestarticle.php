<?php
function monal_mag_load_article_widget()
{
    register_widget('monal_mag_article_widget');
}
add_action('widgets_init', 'monal_mag_load_article_widget');
class monal_mag_article_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            'monal_mag_article_widget',
            __('Monal Article', 'monal-mag'),
            array('description' => __('Monal article Details', 'monal-mag'))
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {

        $dorecent_category = (!empty($instance['dorecent_category'])) ? $instance['dorecent_category'] : '';
        $dorecent_order = (!empty($instance['dorecent_order'])) ? $instance['dorecent_order'] : esc_html__('DESC', 'monal-mag');
        $title = (!empty($instance['title'])) ? $instance['title'] : '';
        $no_of_posts = (!empty($instance['no_of_posts'])) ? $instance['no_of_posts'] : esc_html__( '4', 'monal-mag' );
        $show_content = (!empty($instance['show_content'])) ? $instance['show_content'] : '';
        echo $args['before_widget'];
?>
<?php if ($title) : ?>
<div class="body-container mx-auto">
    <h2 class="pt-6 text-3xl font-semibold text-center capitalize widget-title home_widget_heading font-poppins">
        <span class="title"><?php echo esc_html($title); ?></span>
    </h2>
    <div class="mx-auto border-b-2 pb-2 border-red-500 w-28 inset-px prime-border"></div>
</div>
<?php endif; ?>

<!--------Latest article-------------->
<div class="magazine-celeb-gridcont">
    <?php
            $q_args = array(
                'post_type' => 'post',
                'post_content' => esc_attr($show_content),
                'post_status' => 'publish',
                'order_by' => 'date',
                'posts_per_page' => esc_attr($no_of_posts),
                'order' => esc_attr($dorecent_order),
                'category_name' => esc_attr($dorecent_category),
            );
            ?>
    <div class="body-container mx-auto font-poppins mb-3">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 pt-9">

            <?php
                    $slider = new WP_Query($q_args);
                    if ($slider->have_posts()) {
                        while ($slider->have_posts()) {
                            $slider->the_post();
                    ?>

            <div class="flex flex-col overflow-hidden rounded">
                <a href="<?php the_permalink() ?>">
                    <div class="relative">
                        <?php if(get_the_post_thumbnail()){ ?>
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('full', array('class' => 'object-cover w-full block h-full lg:h-64')) ?>
                            <div
                                class="absolute top-0 bottom-0 left-0 right-0 transition duration-300 bg-gray-900 opacity-25 hover:bg-transparent">
                            </div>
                        </a>
                        <?php } else {
                        ?>
                        <a class="object-cover w-full h-full lg:h-64 bg-gray-500 block" href="<?php the_permalink() ?>">
                            <div
                                class="absolute top-0 bottom-0 left-0 right-0 transition duration-300 bg-gray-900 opacity-25 hover:bg-transparent">
                            </div>
                        </a>

                        <?php
                    } ?>


                    </div>
                </a>
                <div class="py-2 mb-auto">
                    <div class="inline-block mt-3 text-xs font-semibold text-red-500 uppercase prime-text md:text-sm">
                        <?php the_category(); ?>
                    </div>
                    <a href="<?php the_permalink() ?>"
                        class="block mt-2 mb-3 text-xl font-semibold transition duration-500 ease-in-out font-poppins">
                        <?php the_title(); ?></a>
                    <?php

                                    if ($show_content == "show") {
                                        echo '<p class="mb-3 text-base text-gray-500 font-poppins">                
                                ' . get_the_excerpt() . '   
                                </p>';
                                    } ?>

                </div>
                <div class="flex flex-row items-center justify-between px-3 py-3 bg-gray-100">
                    <span href="#" class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                        <!-- <span class="ml-1"><?php echo get_the_date('F j, Y') ?></span> -->
                        <span class=" text-xs text-gray-500 ">
                            <a class="text-black transition prime-hover hover:text-red-500"
                                href="<?php the_permalink() ?>"><?php echo get_the_date('F j, Y'); ?> </a>
                        </span>

                    </span>

                    <!-- <span href="#" class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular"> -->
                    <span class="text-xs font-semibold text-gray-500 items-center">
                        <span class='font-medium'> <?php esc_html_e('By','monal-mag') ?> </span>
                        <a class="text-black transition prime-hover hover:text-red-500"
                            href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            <?php echo get_the_author(); ?> </a> </span>
                    <!-- <span class="ml-1"><?php the_author(); ?></span></span> -->
                </div>
            </div>


            <?php
                        }
                    }
                    ?>

        </div>
    </div>
</div>
<!---------Follow your best celebraty ends ------------->
<?php
        echo $args['after_widget'];
    }

    // Widget Backend 
    public function form($instance)
    {
        $dorecent_category = (!empty($instance['dorecent_category'])) ? $instance['dorecent_category'] : '';
        $dorecent_order = (!empty($instance['dorecent_order'])) ? $instance['dorecent_order'] : esc_html__('DESC', 'monal-mag');
        $title = (!empty($instance['title'])) ? $instance['title'] : '';
        $no_of_posts = (!empty($instance['no_of_posts'])) ? $instance['no_of_posts'] : esc_html__( '4', 'monal-mag' );
        $show_content = (!empty($instance['show_content'])) ? $instance['show_content'] : esc_html__('show', 'monal-mag');
    ?>

<p>
    <label
        for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('The Title of the Widget', 'monal-mag'); ?></label>

    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('dorecent_order'); ?>"><?php esc_html_e('Ordering: Either Ascending or Desending order', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('dorecent_order'); ?>"
        name="<?php echo $this->get_field_name('dorecent_order'); ?>" value="<?php echo esc_attr($dorecent_order); ?>">
        <option value="ASC" <?php echo ($dorecent_order == 'ASC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Ascending Order', 'monal-mag') ?>
        </option>
        <option value="DESC" <?php echo ($dorecent_order == 'DESC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Descending Order', 'monal-mag') ?>
        </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('show_content'); ?>"><?php esc_html_e('Show Content', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('show_content'); ?>"
        name="<?php echo $this->get_field_name('show_content'); ?>" value="<?php echo esc_attr($show_content); ?>">
        <option value="show" <?php echo ($show_content == 'yes') ? 'selected' : ''; ?>>
            <?php esc_html_e('Show', 'monal-mag') ?>
        </option>
        <option value="hide" <?php echo ($show_content == 'no') ? 'selected' : ''; ?>>
            <?php esc_html_e('Hide', 'monal-mag') ?>
        </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('no_of_posts'); ?>"><?php esc_html_e('No_of_posts', 'monal-mag'); ?></label>

    <input class="widefat" id="<?php echo $this->get_field_id('no_of_posts'); ?>"
        name="<?php echo $this->get_field_name('no_of_posts'); ?>" type="number"
        value="<?php echo esc_attr($no_of_posts); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('dorecent_category'); ?>"><?php esc_html_e('Select the category:', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('dorecent_category'); ?>"
        name="<?php echo $this->get_field_name('dorecent_category'); ?>">
        <option value="" selected>
            <?php esc_html_e('All', 'monal-mag'); ?>
        </option>

        <?php
                $ag = array(
                    'post_type' => 'post',
                );
                $all_categories = get_categories($ag);
                foreach ($all_categories as $cat) {
                ?>
        <option value="<?php echo $cat->slug; ?>" <?php echo ($dorecent_category == $cat->slug) ? 'selected' : ''; ?>>
            <?php echo $cat->name; ?></option>
        <?php
                }

                ?>
    </select>
</p>

<?php
    }
    //  CUSTOM WIDGET ----------------------------------------------------------------------------------------------------------------------------================================================
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['dorecent_category'] = (!empty($new_instance['dorecent_category'])) ? sanitize_text_field($new_instance['dorecent_category']) : '';
        $instance['dorecent_order'] = (!empty($new_instance['dorecent_order'])) ? sanitize_text_field($new_instance['dorecent_order']) : '';
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['no_of_posts'] = (!empty($new_instance['no_of_posts'])) ? absint($new_instance['no_of_posts']) : '4';
        $instance['show_content'] = (!empty($new_instance['show_content'])) ? sanitize_text_field($new_instance['show_content']) : '';
        return $instance;
    }
} // Class monal_widget ends here
?>