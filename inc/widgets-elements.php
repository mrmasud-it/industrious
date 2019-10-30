<?php

/** This is footer widget */

/**
 * Adds simple_widget widget.
 */
class footer_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'footer', // Base ID
            esc_html__('Footer Widget', 'industrious'), // Name
            array('description' => esc_html__('This is footer widget', 'industrious'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            //echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>
    
        <h4><?php echo $instance['title']; ?></h4>
        <ul class="alt">
            <li><a href="#"><?php echo wp_kses($instance['text_o'],''); ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_tw'],''); ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_th'],''); ?></a></li>
            <li><a href="#"><?php echo wp_kses($instance['text_f'],''); ?></a></li>
        </ul>
    
    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $title = !empty($instance['title']) ? $instance['title'] : esc_html__('Title Name', 'industrious');
            $text_o = !empty($instance['text_o']) ? $instance['text_o'] : esc_html__('Text One', 'industrious');
            $text_tw = !empty($instance['text_tw']) ? $instance['text_tw'] : esc_html__('Text Two', 'industrious');
            $text_th = !empty($instance['text_th']) ? $instance['text_th'] : esc_html__('Text Three', 'industrious');
            $text_f = !empty($instance['text_f']) ? $instance['text_f'] : esc_html__('Text Four', 'industrious');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_o')); ?>"><?php esc_attr_e('Text One:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_o')); ?>" name="<?php echo esc_attr($this->get_field_name('text_o')); ?>" type="text" value="<?php echo esc_attr($text_o); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_tw')); ?>"><?php esc_attr_e('Text Two:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_tw')); ?>" name="<?php echo esc_attr($this->get_field_name('text_tw')); ?>" type="text" value="<?php echo esc_attr($text_tw); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_th')); ?>"><?php esc_attr_e('Text Three:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_th')); ?>" name="<?php echo esc_attr($this->get_field_name('text_th')); ?>" type="text" value="<?php echo esc_attr($text_th); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text_f')); ?>"><?php esc_attr_e('Text Four:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_f')); ?>" name="<?php echo esc_attr($this->get_field_name('text_f')); ?>" type="text" value="<?php echo esc_attr($text_f); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text_o'] = (!empty($new_instance['text_o'])) ? strip_tags($new_instance['text_o']) : '';
        $instance['text_tw'] = (!empty($new_instance['text_tw'])) ? strip_tags($new_instance['text_tw']) : '';
        $instance['text_th'] = (!empty($new_instance['text_th'])) ? strip_tags($new_instance['text_th']) : '';
        $instance['text_f'] = (!empty($new_instance['text_f'])) ? strip_tags($new_instance['text_f']) : '';

        return $instance;
    }
}

function register_footer_widget(){
    register_widget('footer_widget');
}
add_action('widgets_init', 'register_footer_widget');






/** This is social widget */

/**
 * Adds simple_widget widget.
 */
class social_widget extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct(){
        parent::__construct(
            'social', // Base ID
            esc_html__('Social Widget', 'industrious'), // Name
            array('description' => esc_html__('This is social widget', 'industrious'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance){
        echo $args['before_widget'];
        if (!empty($instance['titlee'])) {
            //echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        } ?>

		<h4><?php echo $instance['titlee']; ?></h4>
		<ul class="plain">
			<li><a href="#"><i class="icon <?php echo wp_kses($instance['f_icon_class'],''); ?>">&nbsp;</i><?php echo $instance['f_icon_name']; ?></a></li>
			<li><a href="#"><i class="icon <?php echo wp_kses($instance['s_icon_class'],''); ?>">&nbsp;</i><?php echo $instance['s_icon_name']; ?></a></li>
			<li><a href="#"><i class="icon <?php echo wp_kses($instance['t_icon_class'],''); ?>">&nbsp;</i><?php echo $instance['t_icon_name']; ?></a></li>
		</ul>
   
    <?php
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance){
            $titlee = !empty($instance['titlee']) ? $instance['titlee'] : esc_html__('Title Name', 'industrious');
            $f_icon_name = !empty($instance['f_icon_name']) ? $instance['f_icon_name'] : esc_html__('First Icon Name', 'industrious');
            $f_icon_class = !empty($instance['f_icon_class']) ? $instance['f_icon_class'] : esc_html__('First Icon Class', 'industrious');
            $s_icon_name = !empty($instance['s_icon_name']) ? $instance['s_icon_name'] : esc_html__('Second Icon Name', 'industrious');
            $s_icon_class = !empty($instance['s_icon_class']) ? $instance['s_icon_class'] : esc_html__('Second Icon Class', 'industrious');
            $t_icon_name = !empty($instance['t_icon_name']) ? $instance['t_icon_name'] : esc_html__('Third Icon Name', 'industrious');
            $t_icon_class = !empty($instance['t_icon_class']) ? $instance['t_icon_class'] : esc_html__('Third Icon Class', 'industrious');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('titlee')); ?>"><?php esc_attr_e('Title:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('titlee')); ?>" name="<?php echo esc_attr($this->get_field_name('titlee')); ?>" type="text" value="<?php echo esc_attr($titlee); ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('f_icon_name')); ?>"><?php esc_attr_e('First Icon Name:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('f_icon_name')); ?>" type="text" value="<?php echo esc_attr($f_icon_name); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>"><?php esc_attr_e('First Icon Class:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('f_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('f_icon_class')); ?>" type="text" value="<?php echo esc_attr($f_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('s_icon_name')); ?>"><?php esc_attr_e('Second Icon Name:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('s_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('s_icon_name')); ?>" type="text" value="<?php echo esc_attr($s_icon_name); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('s_icon_class')); ?>"><?php esc_attr_e('Second Icon Class:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('s_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('s_icon_class')); ?>" type="text" value="<?php echo esc_attr($s_icon_class); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('t_icon_name')); ?>"><?php esc_attr_e('Third Icon Name:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_icon_name')); ?>" name="<?php echo esc_attr($this->get_field_name('t_icon_name')); ?>" type="text" value="<?php echo esc_attr($t_icon_name); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>"><?php esc_attr_e('Third Icon Class:', 'industrious'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('t_icon_class')); ?>" name="<?php echo esc_attr($this->get_field_name('t_icon_class')); ?>" type="text" value="<?php echo esc_attr($t_icon_class); ?>">
        </p>
<?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['titlee'] = (!empty($new_instance['titlee'])) ? strip_tags($new_instance['titlee']) : '';
        $instance['f_icon_name'] = (!empty($new_instance['f_icon_name'])) ? strip_tags($new_instance['f_icon_name']) : '';
        $instance['f_icon_class'] = (!empty($new_instance['f_icon_class'])) ? strip_tags($new_instance['f_icon_class']) : '';
        $instance['s_icon_name'] = (!empty($new_instance['s_icon_name'])) ? strip_tags($new_instance['s_icon_name']) : '';
        $instance['s_icon_class'] = (!empty($new_instance['s_icon_class'])) ? strip_tags($new_instance['s_icon_class']) : '';
        $instance['t_icon_name'] = (!empty($new_instance['t_icon_name'])) ? strip_tags($new_instance['t_icon_name']) : '';
        $instance['t_icon_class'] = (!empty($new_instance['t_icon_class'])) ? strip_tags($new_instance['t_icon_class']) : '';

        return $instance;
    }
}

function register_social_widget(){
    register_widget('social_widget');
}
add_action('widgets_init', 'register_social_widget');
