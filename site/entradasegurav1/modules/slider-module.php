<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** NÁO ESQUECER DE SALVAR OS CUSTOM POST TYPES NA FUNÇÃO salvaEvento.php EM config.php */

/** ESTRUTURA SLIDER */
add_action('init', 'estruturaSlider');

function estruturaSlider() {
    
    $ref = '900x550';
    $plural = 'Slides';
    $singular = 'Slide';
    $labels = array(
            'name' => _x('Slider', 'nome geral'),
            'singular_name' => _x($singular, 'nome singular'),
            'add_new' => _x('Adicionar Novo', 'adicionar item'),
            'add_new_item' => __('Novo ' . $singular . ' ' . $ref),
            'edit_item' => __('Editar ' . $singular . ' ' . $ref),
            'new_item' => __('Novo ' . $singular . ' ' . $ref),
            'view_item' => __('Ver ' . $singular . ' ' . $ref),
            'search_items' => __('Encontrar ' . $singular . ' ' . $ref),
            'not_found' =>  __('Não há ' . $plural . ' disponíveis'),
            'not_found_in_trash' => __('Não há ' . $plural . ' na lixeira'),
            'parent_item_colon' => ''
    );

    $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'menu_icon' => get_stylesheet_directory_uri() . '/modules/images/slider.png',
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title','thumbnail')
      );

    register_post_type( 'slider' , $args );
} 


/** CADASTRO SLIDER */
add_action("admin_init", "iniciaSlider");

function iniciaSlider(){
  add_meta_box("_Z_slider_ordem", "Organização", "_Z_slider_ordem", "slider", "normal", "low");
  // add_meta_box("_Z_slider_link", "Link da Imagem", "_Z_slider_link", "slider", "normal", "low");
}

function _Z_slider_ordem(){
  global $post;
  $custom = get_post_custom($post->ID);
  $frase1 = $custom["_Z_slider_frase1"][0];
  $frase2 = $custom["_Z_slider_frase2"][0];
  $frase3 = $custom["_Z_slider_frase3"][0];
  $ordem = $custom["_Z_slider_ordem"][0];
  ?>
  <label>Ordem do Slide: </label><br />
  <input type="text" style="width:500px;" name="_Z_slider_ordem" value="<?php echo $ordem; ?>" /><br><br>
  <label>Frase 1: </label><br />
  <input type="text" style="width:500px;" name="_Z_slider_frase1" value="<?php echo $frase1; ?>" /><br><br>
  <label>Frase 2: </label><br />
  <input type="text" style="width:500px;" name="_Z_slider_frase2" value="<?php echo $frase2; ?>" /><br><br>
  <label>Frase 3: </label><br />
  <input type="text" style="width:500px;" name="_Z_slider_frase3" value="<?php echo $frase3; ?>" />
  <?php
}

function _Z_slider_link(){
  global $post;
  $custom = get_post_custom($post->ID);
  $link = $custom["_Z_slider_link"][0];
  ?>
  <label>Link do Slide: <small style="color:#F09;padding-left:5px;">(com o http://)</small></label><br />
  <input type="text" style="width:500px;" name="_Z_slider_link" value="<?php echo $link; ?>" /><br /><br />
  <?php
} 

/** LISTAGEM SLIDER */
add_action("manage_posts_custom_column",  "sliderColunas");
add_filter("manage_edit-slider_columns", "editaColunasSlider");

function editaColunasSlider($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "imagemSlider" => "<div style='text-align: center; vertical-align: middle;'>Imagem</div>",
    "title" => "Título",
    "ordem" => "<div style='text-align: center; vertical-align: middle;'>Ordem</div>",
  );
 
  return $columns;
}

function sliderColunas($column){
  global $post;
  $custom = get_post_custom();
  switch ($column):
    case "title":
        echo the_title();
        break;
    case "imagemSlider":  
        echo "<div style='text-align: center; vertical-align: middle;'>" . get_the_post_thumbnail($post->ID) . "</div>";
        break; 
    case "ordem":
        echo "<div style='text-align: center; vertical-align: middle;color:#F09;'>" . $custom["_Z_slider_ordem"][0] . "</div>";
        break;
  endswitch;
}  

/** -------------------------------------------------------------------- */

?>
