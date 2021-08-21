<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Tags_Recentes_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'tags-recentes-widget',
            'description' => 'Widget para mostrar as tags recentes utilizadas no site.'
        );
        
        parent::__construct('tags_recentes','&nbsp;Tags Recentes',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = '' : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
    
    public function widget($args, $instance) {

        global $post;
 
        $title = apply_filters('widget_title', $instance['title']);
        $numPosts = $instance['numPosts'];
 
        echo $args['before_widget'];
        
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $tags = get_tags();

        $html .= "";
        $html = "<div class='tag-list'>";

        foreach ( $tags as $tag ):
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<a href='" . $tag_link . "'>" . $tag->name . "</a>";
        endforeach;

        $html .= "</div>";
        
        echo $html;
        
        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
    register_widget('Tags_Recentes_Widget');
});

 ?>