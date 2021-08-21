<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Posts_Recentes_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'posts-recentes-widget',
            'description' => 'Widget para mostrar as matérias recentes no rodapé do site.'
        );
        
        parent::__construct('posts_recentes','&nbsp;Matérias Recentes Rodapé',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = '' : null;
 
        isset($instance['numPosts']) ? $numPosts = $instance['numPosts'] : null;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('numPosts'); ?>"><?php _e('Número de Matérias:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('numPosts'); ?>" name="<?php echo $this->get_field_name('numPosts'); ?>" type="text" value="<?php echo esc_attr($numPosts); ?>">
        </p>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['numPosts'] = (!empty($new_instance['numPosts']) ) ? strip_tags($new_instance['numPosts']) : '';
 
        return $instance;
    }
    
    public function widget($args, $instance) {

        global $post;
 
        $title = apply_filters('title', $instance['title']);
        $numPosts = $instance['numPosts'];
 
        echo $args['before_widget'];
    
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];

        $args=array(
            'post__not_in' => array($post->ID),
            'posts_per_page'=>$numPosts,
            'caller_get_posts'=>1,
            'orderby' => 'post_date',
            'order'   => 'DESC',
        );
        
        $my_query = new WP_Query($args);
        
        if( $my_query->have_posts() ):

        /* ---------------------------------------------------------- */
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html = '<ul class="tabs-posts">';

            while ($my_query->have_posts()) : $my_query->the_post(); 

                $img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id()), 'post-recente-rodape' )[0];
                $post_tags = get_the_tags(); 

                $html .= ' <li>';
                $html .= '    <div class="pic"> <a href="' . get_the_permalink() . '"><img alt="" class="img-responsive" src="' . $img . '"></a> </div>';
                $html .= '    <div class="caption"> <a href="' . get_the_permalink() . '">' . get_the_title() . '</a> </div>';
                $html .= '    <ul class="post-tools">';
                $html .= '       <li>  ' . get_the_date() . ' </li>';
                $html .= '    </ul>';
                $html .= ' </li>';

            endwhile;

            $html .= '</ul>';

            echo $html;

        /* ---------------------------------------------------------- */

               wp_reset_query();
        endif;
        
        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
    register_widget('Posts_Recentes_Widget');
});

 ?>