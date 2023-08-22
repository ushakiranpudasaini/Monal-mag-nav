<?php
function monal_load_grid_widget() {
    register_widget( 'monal_grid_widget' );
}
add_action( 'widgets_init', 'monal_load_grid_widget' );
// Creating the widget 
class monal_grid_widget extends WP_Widget {
    
    function __construct() { 

    parent::__construct(

    'monal_grid_widget', 
    __('Monal Grid', 'monal-mag'), 
    array( 'description' => __( 'Monal Grid Details', 'monal-mag' ))
    );
}

// Creating widget front-end

public function widget( $args, $instance ) {
    
    $dorecent_category = ( !empty($instance[ 'dorecent_category' ])) ? $instance['dorecent_category'] : '' ;
    $dorecent_order = ( !empty($instance[ 'dorecent_order' ])) ? $instance['dorecent_order'] : esc_html__( 'DESC', 'monal-mag' ) ;
    $no_of_posts = (!empty($instance['no_of_posts'])) ? $instance['no_of_posts'] : esc_html__( '4', 'monal-mag' );
    $title = ( !empty($instance[ 'title' ])) ? $instance['title'] : '' ;
    echo $args['before_widget'];
    ?>
<?php if ($title) :?>
<div class="body-container mx-auto mt-7">
    <h2 class="py-6 text-3xl pb-2 font-semibold text-center capitalize widget-title home_widget_heading font-poppins">
        <span class="title"><?php echo esc_html($title); ?></span>
    </h2>
    <div class="mx-auto border-b-2 border-red-500 w-28 inset-px prime-border"></div>
</div>
<?php endif;?>
<div class="glamour-celeb-gridcont">
    <?php             
    $q_args = array(
        'post_type' => 'post',
        'posts_per_page' => esc_attr($no_of_posts),
        'post_status' => 'publish',
        'order_by' => 'date',
        'order' => esc_attr($dorecent_order),
        'category_name' => esc_attr($dorecent_category),
    );
    ?>
    <div class="body-container mx-auto font-poppins">
        <div class="grid pt-9 lg:grid-cols-3 gap-x-6 gap-y-6">
            <?php 
    $slider = new WP_Query( $q_args );      
    if( $slider->have_posts() ) {
        while( $slider->have_posts() ) {
            $slider->the_post();
    ?>

            <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none ">

                <?php if(get_the_post_thumbnail()){ ?>
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('full', array('class' => 'object-cover w-full block h-64 rounded-t')) ?>
                </a>
                <?php } else {
                        ?>
                <a class="object-cover w-full h-64 pb-2 rounded-t block bg-gray-500" href="<?php the_permalink() ?>">
                </a>
                <?php
                    } ?>
                <div class="inline-block mt-3 text-xs font-semibold text-red-500 uppercase prime-text md:text-sm">
                    <?php the_category(); ?>
                </div>
                <a href="<?php the_permalink() ?>" class="my-1 mb-3 text-xl block font-bold text-gray-900 font-poppins">
                    <?php the_title(); ?>
                </a>
                <p class="mb-2 text-base text-gray-500"><?php echo get_the_excerpt(); ?></p>


            </div>


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
public function form( $instance ) {
    $dorecent_category = ( !empty($instance[ 'dorecent_category' ])) ? $instance[ 'dorecent_category' ] : '' ;
    $dorecent_order = ( !empty($instance[ 'dorecent_order' ])) ? $instance[ 'dorecent_order' ] : esc_html__( 'DESC', 'monal-mag' ) ;
    $title = ( !empty($instance[ 'title' ])) ? $instance[ 'title' ] : '' ;
    $no_of_posts = (!empty($instance['no_of_posts'])) ? $instance['no_of_posts'] : esc_html__( '4', 'monal-mag' );
?>

<p>
    <label
        for="<?php echo $this->get_field_id( 'title' ); ?>"><?php  esc_html_e( 'The Title of the Widget', 'monal-mag' ); ?></label>

    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
        name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id('no_of_posts'); ?>"><?php esc_html_e('Number of Posts', 'monal-mag'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('no_of_posts'); ?>"
        name="<?php echo $this->get_field_name('no_of_posts'); ?>" type="number"
        value="<?php echo esc_attr($no_of_posts); ?>" />
</p>
<p>
    <label
        for="<?php echo $this->get_field_id( 'dorecent_order' ); ?>"><?php  esc_html_e( 'Ordering: Either Ascending or Desending order', 'monal-mag' ); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id( 'dorecent_order' ); ?>"
        name="<?php echo $this->get_field_name( 'dorecent_order' ); ?>"
        value="<?php echo esc_attr( $dorecent_order ); ?>">
        <option value="ASC" <?php echo ($dorecent_order=='ASC')?'selected':''; ?>>
            <?php  esc_html_e( 'Ascending Order', 'monal-mag' ) ?>
        </option>
        <option value="DESC" <?php echo ($dorecent_order=='DESC')?'selected':''; ?>>
            <?php esc_html_e( 'Descending Order', 'monal-mag' ) ?>
        </option>
    </select>
</p>
<p>
    <label
        for="<?php echo $this->get_field_id( 'dorecent_category' ); ?>"><?php esc_html_e( 'Select the category:', 'monal-mag' ); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id( 'dorecent_category' ); ?>"
        name="<?php echo $this->get_field_name( 'dorecent_category' ); ?>">
        <option value="" selected>
            <?php esc_html_e('All', 'monal-mag'); ?>
        </option>
        <?php  
        $ag = array(
            'post_type' => 'post',
        );
        $all_categories = get_categories( $ag );
        foreach ($all_categories as $cat) {    
            ?>
        <option value="<?php echo $cat->slug;?>" <?php echo ($dorecent_category == $cat->slug)?'selected':''; ?>>
            <?php echo $cat->name;?></option>
        <?php
                }
                
?>
    </select>
</p>

<?php 
}
    //  CUSTOM WIDGET ----------------------------------------------------------------------------------------------------------------------------================================================
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['dorecent_category'] = ( ! empty( $new_instance['dorecent_category'] ) ) ? sanitize_text_field( $new_instance['dorecent_category'] ) : '';
$instance['dorecent_order'] = ( ! empty( $new_instance['dorecent_order'] ) ) ? sanitize_text_field( $new_instance['dorecent_order'] ) : '';
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
$instance['no_of_posts'] = (!empty($new_instance['no_of_posts'])) ? absint($new_instance['no_of_posts']) : '4';
return $instance;
}
} // Class monal_widget ends here
?>