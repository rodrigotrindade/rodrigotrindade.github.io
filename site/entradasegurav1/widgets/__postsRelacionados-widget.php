<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class Posts_Relacionados_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'posts-relacionados-widget',
            'description' => 'Widget para mostrar os posts relacionados por categorias e tags.'
        );
        
        parent::__construct('posts_relacionados','&nbsp;Posts Relacionados',$widget_ops);
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
            <label for="<?php echo $this->get_field_id('numPosts'); ?>"><?php _e('Número de Posts:'); ?></label>
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
 
        $title = apply_filters('widget_title', $instance['title']);
        $numPosts = $instance['numPosts'];
 
        echo $args['before_widget'];
        
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $tags = wp_get_post_tags($post->ID);
        if ($tags):
           $first_tag = $tags[0]->term_id;
           $args=array(
           'tag__in' => array($first_tag),
           'post__not_in' => array($post->ID),
           'posts_per_page'=>$numPosts,
           'caller_get_posts'=>1
           );
           $my_query = new WP_Query($args);
           if( $my_query->have_posts() ):
              while ($my_query->have_posts()) : $my_query->the_post(); 
                $img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id()), 'post-relacionado' )[0];
                $post_tags = get_the_tags();

            // ---------------------------------------------------------- 
            // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

            $html = '';
            $html .= '    <article class="col-md-4 col-sm-4 col-xs-12">';
            $html .= '          <div class="grid-1">';
            $html .= '             <div class="picture">';
            $html .= '                <div class="category-image">';
            $html .= '                   <a href="' . get_the_permalink() . '">';
            $html .= '                   <img alt="" class="img-responsive" src="' . $img . '">';
            $html .= '                   </a>';

            $html .= '                   <div class="catname">';

            foreach ($post_tags as $term):
                $cor = ($term->description == '') ? 'red' : $term->description;
            
            $html .= '                      <a class="btn btn-' . $cor  . '" href="#">';
            $html .= '                         <div><small>' . $term->name  . '</small></div>';
            $html .= '                      </a>';
            
            endforeach;  

            $html .= '                   </div>';             

            // $html .= '                   <div class="hover-show-div">';
            // $html .= '                      <a href="" class="post-type">';
            // $html .= '                      <i class="ti-star"></i>';
            // $html .= '                      </a>';
            // $html .= '                   </div>';

            $html .= '                </div>';
            $html .= '             </div>';
            $html .= '             <div class="detail">';
            $html .= '                <div class="caption">';
            $html .= '                   <h5>';
            $html .= '                      <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            $html .= '                   </h5>';
            $html .= '                </div>';
            $html .= '                <ul class="post-tools">';
            $html .= '                   <li> por <a href="' . get_the_permalink() . '"> <strong> ' . get_author_name() . '</strong> </a></li>';
            $html .= '                   <li>  ' . get_the_date() . ' </li>';
            $html .= '                </ul>';
            $html .= '             </div>';
            $html .= '          </div>';
            $html .= '        </article>';

            echo $html;

            // ---------------------------------------------------------- 
              endwhile;
           endif;
           wp_reset_query();
        endif;
        
        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
    register_widget('Posts_Relacionados_Widget');
});

 ?>