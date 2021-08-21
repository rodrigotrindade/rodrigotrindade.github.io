<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   11-04-2019 00:04:58
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 05-11-2019 21:24:42
 */
?>
<?php

class Slider_Single_Sitelink_Widget extends WP_Widget { 
 
    public function __construct() {
        
        $widget_ops = array(
            'classname' => 'slider-single-sitelink-widget',
            'description' => 'Widget para mostrar sliders no sitelink. É um slider exclusivo para sitelink, onde as fotos são obtidas a partir de uma galeria.'
        );
        
        parent::__construct('slider_single_sitelink','&nbsp;Slider Padrão Sitelink',$widget_ops);
    }

    public function form($instance) {
        
    }
    
    public function update($new_instance, $old_instance) {
        $instance = array();

        return $instance;
    }

    public function widget($args, $instance) {

        global $post;
    
        echo $args['before_widget'];

        $custom = get_post_custom();

        $link = $custom["_Z_sitelinks_link"][0];

        $info = (isset($custom["_Z_advertiser_info"][0])) ? $custom["_Z_advertiser_info"][0] : "";

        $content = get_the_content();

        $arr = array();

        if(!empty($content)):
            $content = str_replace('[gallery ids="','',$content);
            $content = str_replace('"]','',$content);

            $arr = explode(',',$content);
        endif;

        // ---------------------------------------------------------- 
        // LAYOUT PARA APRESENTAÇÃO NA INTERFACE

        $html = '<div class="sitelink-title"><h1>' . get_the_title() . '</h1><h4 class="br w-75">' . $info . '</h4></div>';

        $html .= '<section class="full-with-slider-section full-width-style-2 slider-default-sitelink">';
        $html .= '  <div class="container">';
        $html .= '      <div class="row">';
        $html .= '          <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">';
        $html .= '              <div class="full-with-slider owl-carousel owl-theme">';

        for($i=0;$i<sizeof($arr);$i++):

        $img = wp_get_attachment_image_src( $arr[$i], "slider-sitelink")[0];
        $cap = wp_get_attachment_caption( $arr[$i]);

        // SLIDE

        $html .= '                  <div class="item">';

        if(!empty($cap)):
        $html .= '                      <div class="post-content">';
        if(!empty($link)):
        $html .= '                          <div class="catname">';
        $html .= '                              <a class="btn btn-purple" href="' . $link . '" target="_blank">';
        $html .= '                                  <div>' . $cap. '</div>';
        $html .= '                              </a>';
        $html .= '                          </div>';
        else:
        $html .= '                          <h5>' . $cap. '</h5>';
        endif;

        $html .= '                          <ul class="post-tools">';
        $html .= '                              <li></li>';
        $html .= '                              <li></li>';
        $html .= '                              <li></li>';
        $html .= '                          </ul>';
        $html .= '                      </div>';
        endif;

        $html .= '                      <div class="post-thumb"> ';
        $html .= '                          <img alt="" src="' . $img . '" class="img-responsive">'; 
        $html .= '                      </div>';
        $html .= '                  </div>';

        // FIM SLIDE

        endfor;

        $html .= '              </div>';
        $html .= '          </div>';
        $html .= '      </div>';
        $html .= '  </div>';
        $html .= '</section>';

        // ----------------------------------------------------------

        echo $html;

        echo $args['after_widget'];
    }

}

add_action( 'widgets_init', function(){
register_widget('Slider_Single_Sitelink_Widget');
});

 ?>