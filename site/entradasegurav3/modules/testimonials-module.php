<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** NÁO ESQUECER DE SALVAR OS CUSTOM POST TYPES NA FUNÇÃO salvaEvento.php EM config.php */

/** ESTRUTURA DEPOIMENTOS */
add_action('init', 'estruturaDepoimentos');

function estruturaDepoimentos() {
 
        $labels = array(
                'name' => _x('Depoimentos', 'nome geral'),
                'singular_name' => _x('Depoimento', 'nome singular'),
                'add_new' => _x('Adicionar Novo', 'adicionar item'),
                'add_new_item' => __('Novo Depoimento'),
                'edit_item' => __('Editar Depoimento'),
                'new_item' => __('Novo Depoimento'),
                'view_item' => __('Ver Depoimento'),
                'search_items' => __('Encontrar Depoimento'),
                'not_found' =>  __('Não há depoimentos disponíveis'),
                'not_found_in_trash' => __('Não há depoimentos na lixeira'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => get_stylesheet_directory_uri() . '/modules/images/social.png',
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','editor','excerpt','thumbnail')
          );
 
        register_post_type( 'depoimentos' , $args );
} 

/** CADASTRO DEPOIMENTOS */
add_action("admin_init", "iniciaDepoimentos");

function iniciaDepoimentos(){
  add_meta_box("ordemDepoimentos", "Ordenação", "ordemDepoimentos", "depoimentos", "normal", "low"); 
 
}

function ordemDepoimentos(){
  global $post;
  $custom = get_post_custom($post->ID);
  $ordem = $custom["_Z_ordemDepoimento"][0];
  ?>
  <label>Ordenação:<br />
  <input type="text" style="width:100%;" name="_Z_ordemDepoimento" value="<?php echo $ordem; ?>" />
  <?php
} 

/** LISTAGEM DEPOIMENTOS */
add_action("manage_posts_custom_column",  "depoimentosColunas");
add_filter("manage_edit-depoimentos_columns", "editaColunasDepoimentos");

function editaColunasDepoimentos($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Título",
    "depoimento" => 'Depoimento',
    "autor" => "Autor",
    "ordenacao" => "Ordem"
  );
 
  return $columns;
}

function depoimentosColunas($column){
  global $post;
 
  switch ($column):
    case "title":
        echo the_title();
        break;
    case "autor":
        the_excerpt();
        break;
    case "depoimento":
        the_content();
        break;
    case "ordenacao":
        $custom = get_post_custom();
        echo '<span style="color: #F09; font-weight: bold;">'.$custom["_Z_ordemDepoimento"][0].'</span>';
        break;
  endswitch;
}  

/** -------------------------------------------------------------------- */

?>
