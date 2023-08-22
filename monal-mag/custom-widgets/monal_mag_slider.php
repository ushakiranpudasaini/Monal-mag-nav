<?php
// Register and load the widget
function monal_mag_load_slider_widget()
{
    register_widget('monal_mag_slider_widget');
}
add_action('widgets_init', 'monal_mag_load_slider_widget');

class monal_mag_slider_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'monal_mag_slider_widget',
            __('Monal Slider', 'monal-mag'),
            array('description' => __('Custom Slider Widget ', 'monal-mag'))
        );
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {
        $dorecent_category = (!empty($instance['dorecent_category'])) ? $instance['dorecent_category'] : '';
        $wblog_post_toshow = (!empty($instance['wblog_post_toshow'])) ? $instance['wblog_post_toshow'] : esc_html__('4', 'monal-mag');
        $wblog_title = (!empty($instance['wblog_title'])) ? $instance['wblog_title'] : '';
        $wblog_columns = (!empty($instance['wblog_columns'])) ? $instance['wblog_columns'] : esc_html__('4', 'monal-mag');
        $cont = (!empty($instance['cont'])) ? $instance['cont'] : '';
       
        echo $args['before_widget'];
?>

<!-- Title -->
<?php if ($wblog_title) : ?>
<div class="body-container pb-7 mx-auto mb-9">
    <h2 class="pt-6 text-3xl font-semibold text-center capitalize widget-title font-poppins">
        <span class="title"><?php echo esc_html($wblog_title); ?></span>
    </h2>
    <div class="mx-auto border-b-2 mb-3 pb-2 border-red-500 w-28 inset-px "></div>
</div>
<?php endif; ?>

<?php
        $q_args = array(
            'post_type' => 'post',
            'posts_per_page' => esc_attr($wblog_post_toshow),
            'post_status' => 'publish',
            'order_by' => 'date',
            'category_name' => esc_attr($dorecent_category),
        );
        ?>
<?php 

$slide =  esc_html($cont);
if($slide == 'container'){
  $cont_class='body-container mx-auto';
 
}
elseif ($slide == 'without_container'){
  $cont_class='';

}
?>
<div class="<?php echo $cont_class ?> mb-10">
    <div class="splide" data-typeId="<?php echo esc_html($wblog_columns); ?>">
        <div class="splide__track">
            <ul class="splide__list font-poppins">
                <?php
                    $slider = new WP_Query($q_args);
                    if ($slider->have_posts()) {
                        while ($slider->have_posts()) {
                            $slider->the_post();
                    ?>

                <li class="splide__slide">
                    <a href="<?php the_permalink() ?>"
                        class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer block">
                        <?php if(get_the_post_thumbnail()){ ?>

                        <?php the_post_thumbnail('full', array('class' => 'object-cover w-full h-96')) ?>

                        <?php } else {
                        ?>
                        <div class=" w-full h-96 block bg-gray-500">
                        </div>
                        <?php
                    } ?>


                        <div class="absolute bottom-0 left-0 right-0 top-0 px-6 py-4 bg-black bg-opacity-40 flex ">
                            <div class="content-cont flex flex-col justify-end mb-3">
                                <?php
                                $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo "<div class='flex flex-wrap mb-2 font-poppins gap-x-2 gap-y-2 '>";
                                        foreach ($categories as $cat) {
                                            echo "<div class='px-4 py-1 mb-2 mr-2 text-xs text-white transition bg-red-500 border rounded prime-back btn btn-sm prime-border border-1'>" . $cat->name . "</div>";
                                        }
                                        echo "</div>";
                                    }
                                ?>

                                <h2 class="mb-1 text-lg font-semibold tracking-wider text-white"> <?php the_title(); ?>
                                </h2>

                                <div class="flex gap-4 mt-2 text-gray-100">
                                    <div class="text-xs"><?php echo get_the_date('F j, Y'); ?>
                                    </div>
                                    <div class="text-xs"><?php echo get_the_author(); ?></div>
                                </div>
                            </div>

                        </div>
                    </a>
                </li>

                <?php
                        }
                    }
                    ?>


            </ul>
        </div>
    </div>
</div>
<?php
        echo $args['after_widget'];
    }

    // Widget Backend 
    public function form($instance)
    {
        $wblog_post_toshow = (!empty($instance['wblog_post_toshow'])) ? $instance['wblog_post_toshow'] : esc_html__('4', 'monal-mag');
        $wblog_title = (!empty($instance['wblog_title'])) ? $instance['wblog_title'] : '';
        $wblog_columns = (!empty($instance['wblog_columns'])) ? $instance['wblog_columns'] : esc_html__('4', 'monal-mag');
        $dorecent_category = (!empty($instance['dorecent_category'])) ? $instance['dorecent_category'] : '';
        $cont = (!empty($instance['cont'])) ? $instance['cont'] : '';
    ?>

<p>
    <label
        for="<?php echo $this->get_field_id('wblog_title'); ?>"><?php esc_html_e('The Title of the Widget', 'monal-mag'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('wblog_title'); ?>"
        name="<?php echo $this->get_field_name('wblog_title'); ?>" type="text"
        value="<?php echo esc_attr($wblog_title); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id( 'cont' ); ?>"><?php  esc_html_e( 'Select Container or Without Container', 'monal-mag' ); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id( 'cont' ); ?>"
        name="<?php echo $this->get_field_name( 'cont' ); ?>" value="<?php echo esc_attr( $cont ); ?>">
        <option value="container" <?php echo ($cont=='container')?'selected':''; ?>>
            <?php  esc_html_e( 'Container', 'monal-mag' ) ?>
        </option>
        <option value="without_container" <?php echo ($cont=='without_container')?'selected':''; ?>>
            <?php esc_html_e( 'Without Container', 'monal-mag' ) ?>
        </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('wblog_post_toshow'); ?>"><?php esc_html_e('Number of posts to show', 'monal-mag'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('wblog_post_toshow'); ?>"
        name="<?php echo $this->get_field_name('wblog_post_toshow'); ?>" type="number"
        value="<?php echo esc_attr($wblog_post_toshow); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('wblog_order'); ?>"><?php esc_html_e('Ordering: Either Ascending or Desending order', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('wblog_order'); ?>"
        name="<?php echo $this->get_field_name('wblog_order'); ?>" value="<?php echo esc_attr($wblog_order); ?>">
        <option value="ASC" <?php echo ($wblog_order == 'ASC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Ascending order', 'monal-mag'); ?> </option>
        <option value="DESC" <?php echo ($wblog_order == 'DESC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Descending order', 'monal-mag'); ?> </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('wblog_columns'); ?>"><?php esc_html_e('Number of columns', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('wblog_columns'); ?>"
        name="<?php echo $this->get_field_name('wblog_columns'); ?>" value="<?php echo esc_attr($wblog_columns); ?>">
        <option value="2" <?php echo ($wblog_columns == '2') ? 'selected' : ''; ?>>
            <?php esc_html_e('2', 'monal-mag'); ?> </option>
        <option value="3" <?php echo ($wblog_columns == '3') ? 'selected' : ''; ?>>
            <?php esc_html_e('3', 'monal-mag'); ?> </option>
        <option value="4" <?php echo ($wblog_columns == '4') ? 'selected' : ''; ?>>
            <?php esc_html_e('4', 'monal-mag'); ?> </option>
    </select>
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
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['wblog_post_toshow'] = (!empty($new_instance['wblog_post_toshow'])) ? intval($new_instance['wblog_post_toshow']) : '';
        $instance['wblog_columns'] = (!empty($new_instance['wblog_columns'])) ? absint($new_instance['wblog_columns']) : '';
        $instance['wblog_title'] = (!empty($new_instance['wblog_title'])) ? sanitize_text_field($new_instance['wblog_title']) : '';
        $instance['dorecent_category'] = (!empty($new_instance['dorecent_category'])) ? sanitize_text_field($new_instance['dorecent_category']) : '';
        $instance['cont'] = (!empty($new_instance['cont'])) ? sanitize_text_field($new_instance['cont']) : '';
     
        return $instance;
    }
}
?>