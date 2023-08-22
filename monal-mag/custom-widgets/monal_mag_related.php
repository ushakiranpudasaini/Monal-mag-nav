<?php
function monal_mag_load_related_widget()
{
    register_widget('monal_mag_related_widget');
}
add_action('widgets_init', 'monal_mag_load_related_widget');

class monal_mag_related_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            'monal_mag_related_widget',
            __('Monal Recent Posts', 'monal-mag'),
            array('description' => __('Shows the recent posts', 'monal-mag'))
        );
    }

    public function widget($args, $instance)
    {
        $monal_mag_recent_order = (!empty($instance['monal_mag_recent_order'])) ? $instance['monal_mag_recent_order'] : esc_html__('DESC', 'monal-mag');
        $title = (!empty($instance['title'])) ? $instance['title'] : '';
        echo $args['before_widget'];
?>
<div class="magazine-celeb-gridcont">
    <?php
            $q_args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'order_by' => 'date',
                'order' => esc_attr($monal_mag_recent_order),
            );
            ?>

    <div class="side font-poppins">
        <div class="bg-white ">
            <?php if ($title) : ?>
            <h2 class="pt-4 mx-4 mb-1 text-xl font-bold font-poppins home_widget_heading">
                <?php echo esc_html($title); ?></h2>
            <div class="mx-4 border-b-2 pb-2 border-red-500 w-28 inset-px prime-border"></div>
            <?php endif; ?>
            <?php
                    $slider = new WP_Query($q_args);
                    if ($slider->have_posts()) {
                        while ($slider->have_posts()) {
                            $slider->the_post();
                    ?>


            <a href="<?php the_permalink() ?>" class="flex gap-4 py-4 border-b">

                <?php the_post_thumbnail('thumbnail', array('class' => 'object-cover w-28 h-24')); ?>

                <div class="flex-1 content">
                    <h2 class="font-bold leading-tight text-sm font-poppins"> <?php the_title(); ?></h2>
                    <div class="mt-2 text-xs font-light text-gray-500 font-poppins">
                        <?php echo get_the_date('F j, Y'); ?>
                    </div>
                </div>
            </a>
            <?php
                        }
                    }
                    ?>
        </div>
    </div>

</div>

<?php
        echo $args['after_widget'];
    }

    // Widget Backend 
    public function form($instance)
    {
        $monal_mag_recent_category = (!empty($instance['monal_mag_recent_category'])) ? $instance['monal_mag_recent_category'] : '';
        $monal_mag_recent_order = (!empty($instance['monal_mag_recent_order'])) ? $instance['monal_mag_recent_order'] : esc_html__('DESC', 'monal-mag');
        $title = (!empty($instance['title'])) ? $instance['title'] : '';
    ?>

<p>
    <label
        for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('The Title of the Widget', 'monal-mag'); ?></label>

    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('monal_mag_recent_order'); ?>"><?php esc_html_e('Ordering: Either Ascending or Desending order', 'monal-mag'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('monal_mag_recent_order'); ?>"
        name="<?php echo $this->get_field_name('monal_mag_recent_order'); ?>"
        value="<?php echo esc_attr($monal_mag_recent_order); ?>">
        <option value="ASC" <?php echo ($monal_mag_recent_order == 'ASC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Ascending Order', 'monal-mag') ?>
        </option>
        <option value="DESC" <?php echo ($monal_mag_recent_order == 'DESC') ? 'selected' : ''; ?>>
            <?php esc_html_e('Descending Order', 'monal-mag') ?>
        </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('monal_mag_recent_category'); ?>"><?php esc_html_e('Select the category:', 'monal-mag'); ?></label>
</p>

<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['monal_mag_recent_order'] = (!empty($new_instance['monal_mag_recent_order'])) ? sanitize_text_field($new_instance['monal_mag_recent_order']) : '';
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;
    }
}
?>