<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   03-09-2019 22:06:44
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 09-01-2020 16:22:37
 */
/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

class SitelinksPremium_Widget extends WP_Widget {
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'sitelinksPremium-widget',
            'description' => 'Widget para mostrar sitelinks premium na barra lateral.'
        );
        
        parent::__construct('sitelinkspremium','<span>&nbsp;Sitelinks Premium</span>',$widget_ops);
    }
    
    public function form($instance) {
        isset($instance['categoria']) ? $categoria = $instance['categoria'] : '';
        isset($instance['badget']) ? $badget = $instance['badget'] : '';
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Patrocinadores Premium' : null;
        isset($instance['max_phone_card']) ? $max_phone_card = $instance['max_phone_card'] : '';
        empty($instance['max_phone_card']) ? $max_phone_card = 4 : null;

        $n = '';
        if($badget == "1") $n = 'checked="checked"'; 
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('categoria'); ?>"><?php _e('Categoria:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('categoria'); ?>" name="<?php echo $this->get_field_name('categoria'); ?>" type="text" value="<?php echo esc_attr($categoria); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('max_phone_card'); ?>"><?php _e('Máx. Telefones Anúncio:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('max_phone_card'); ?>" name="<?php echo $this->get_field_name('max_phone_card'); ?>" type="text" value="<?php echo esc_attr($max_phone_card); ?>">
        </p>
        <p>
            <input class="widefat" id="<?php echo $this->get_field_id('badget'); ?>" name="<?php echo $this->get_field_name('badget'); ?>" type="checkbox" value="<?=$badget?>" <?=$n?>><span style="margin-left: 5px;"><?php _e('Mostrar Selo Premium?'); ?></span>
        </p>
        <p></p>

        <script>
            $("#<?php echo $this->get_field_id('badget'); ?>").unbind("click");
            $("#<?php echo $this->get_field_id('badget'); ?>").click(function(){
                if($(this).is(':checked')){
                    $(this).val("1");
                }else{
                    $(this).val("");
                }
            });
        </script>
 
        <?php
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['categoria'] = (!empty($new_instance['categoria']) ) ? strip_tags($new_instance['categoria']) : '';
        $instance['badget'] = (!empty($new_instance['badget']) ) ? strip_tags($new_instance['badget']) : '';
        $instance['max_phone_card'] = (!empty($new_instance['max_phone_card']) ) ? strip_tags($new_instance['max_phone_card']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {

        global $post;

        $title = $instance['title'];
        $badget = ($instance['badget'] == "1") ? true : false;
        $categoria = $instance['categoria'];
        $max_phone_card = $instance['max_phone_card'];
 
        echo $args['before_widget'];

        $args = array( 
            'post_type' => 'sitelinkspremium', 
            'posts_per_page' => -1,
            'tax_query' => array(
               array(
                 'taxonomy' => 'categoriasitelinkpremium',
                 'field'    => 'slug',
                 'terms'    => $categoria,
               ),
            ),

            'post_status' => 'publish',
            'orderby' => 'rand'

        );
        $loop = new WP_Query( $args );

        $html   = ''; 
        $html  .= '<div class="widget widget-bg ">';
        $html  .= ' <div class="heading">';
        $html  .= '     <h2 class="main-heading">' . $title . '</h2>';
        $html  .= '     <span class="heading-ping"></span>';
        $html  .= ' </div>';
        $html  .= ' <div class="featured-post-slider-single-post owl-carousel owl-theme">';

        $i = 0;
        while ( $loop->have_posts() ) : 
          $loop->the_post();
          global $post;
          $custom = get_post_custom();

          $title = get_the_title();
          $id = $custom['_Z_sitelinkpremium'][0];
          $sitelink = get_the_title($id);
          $permalink = get_the_permalink($id);
          $selo = $custom['_Z_sitelinkpremium_badget'][0];

          $img = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'slider-sitelink')[0];

          $criterio = "";

          if(!empty(get_the_terms($post->ID,"criterio_sitelinkpremium"))):
              foreach(get_the_terms($post->ID,"criterio_sitelinkpremium") as $term):
                 $criterio .= $term->slug . " ";
              endforeach;
          endif;

          $custom = get_post_custom($id);

          $link = $custom["_Z_sitelinks_link"][0];

          $telefones = $custom["_Z_sitelinks_telefones"][0];
          
          if(strpos($telefones,"|") > 0):
            $exp = explode("|",$telefones);

            $telefones = "";
            $j=0;
            foreach($exp as $phone):
              if($j < $max_phone_card):
                if(strpos($phone,"*"))
                  $telefones .= '<li><i class="fa fa-whatsapp fa-sitelink"></i>' . str_replace("*","",$phone) . '</li>';
                else
                  $telefones .= '<li><i class="fa fa-phone fa-sitelink"></i>' . $phone . '</li>';
              endif;
              $j++;
            endforeach;
          else:
            if(strpos($telefones,"*"))
              $telefones = '<li><i class="fa fa-whatsapp fa-sitelink"></i>' . str_replace("*","",$telefones) . '</li>';
            else
              $telefones = '<li><i class="fa fa-phone fa-sitelink"></i>' . $telefones . '</li>';
          endif;

          $tags = '';
          if(sizeof(get_the_terms($id,"sitelink_tag")) > 1):
            foreach(get_the_terms($id,"sitelink_tag") as $term):
              $cor = ($term->description == '') ? 'red' : strtolower($term->description);
              $tags .= '<div class="btn btn-' . $cor . '" style="margin-right: 3px;">' . $term->name . '</div>';
            endforeach;
          endif;

          $html .= '        <div class="stlkp criterioSitelinkPremium ' . $criterio . '">';
          $html .= '         <div class="item">';
          $html .= '             <div class="latest-news-grid grid-1 mb30">';
          $html .= '                <div class="picture">';
          $html .= '                   <div class="category-image">';
          $html .= '                      <a href="'. $permalink . '" target="_blank">';
          $html .= '                      <img alt="" class="img-responsive" src="' . $img . '">';
          $html .= '                      </a>';
          $html .= '                      <div class="catname">';
          $html .= $tags;
          $html .= '                      </div>';
                               if($badget && !empty($selo)):
          $html .= '                      <div class="hover-show-div">';
          $html .= '                        <a href="' . $permalink . '" target="_blank" class="post-type">';
          $html .= '                        <i class="fa fa-' . $selo .' fa-sitelink"></i>';
          $html .= '                        </a>';
          $html .= '                     </div>';
                               endif; 
          $html .= '                  </div>';
          $html .= '               </div>';
          $html .= '               <div class="detail patrocinadores-premium">';
          $html .= '                  <div class="caption">';
          $html .= '                     <h5>';
          $html .= '                        <a href="' . $permalink . '" target="_blank">'. $title . '</a>';
          $html .= '                     </h5>';

                               if($sitelink != $title):
          $html .= '                     <h6>'. $sitelink . '</h6>';
                               endif;

          $html .= '                  </div>';
          $html .= '                  <ul class="post-tools">';
          $html .= $telefones;
                                if(!empty($link)):
          $html .= '                      <li><i class="fa fa-link fa-sitelink"></i>';
          $html .= '                          <a href="'. $link . '" title="Visitar Site" target="_blank">Visite o Site</a>';
          $html .= '                      </li>';
                                endif;
          $html .= '                  </ul>';
          $html .= '               </div>';
          $html .= '            </div>';
          $html .= '         </div>';
          $html .= '       </div>';
 
              wp_reset_query();
        endwhile;

          $html .= '    </div>';
          $html .= '</div>';

        echo $html;

        echo $args['after_widget'];

        wp_add_inline_script( 'script', 'criterioSitelinkPremium();' );
    }

}

add_action( 'widgets_init', function(){
  register_widget('SitelinksPremium_Widget');
});

 ?>