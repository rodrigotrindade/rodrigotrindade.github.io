<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** NÁO ESQUECER DE SALVAR OS CUSTOM POST TYPES NA FUNÇÃO salvaEvento.php EM config.php */

/** ESTRUTURA CURSOS */
add_action('init', 'estruturaCursos');

function estruturaCursos() {
 
        $labels = array(
                'name' => _x('Cursos', 'nome geral'),
                'singular_name' => _x('Curso', 'nome singular'),
                'add_new' => _x('Adicionar Novo', 'adicionar item'),
                'add_new_item' => __('Novo curso'),
                'edit_item' => __('Editar curso'),
                'new_item' => __('Novo curso'),
                'view_item' => __('Ver curso'),
                'search_items' => __('Encontrar curso'),
                'not_found' =>  __('Não há cursos disponíveis'),
                'not_found_in_trash' => __('Não há cursos na lixeira'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => get_stylesheet_directory_uri() . '/modules/images/curso.png',
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','editor','thumbnail')
          );
 
        register_post_type( 'curso' , $args );
} 

/** CADASTRO PRODUTOS */
add_action("admin_init", "iniciaPortfolio");

function iniciaPortfolio(){
  add_meta_box("detalhes", "Detalhes", "detalhes", "curso", "normal", "low"); 
  add_meta_box("catalogo", "Catálogo", "catalogo", "curso", "normal", "low");
}


function detalhes(){
  global $post;
  $custom = get_post_custom($post->ID);
  $ordem = $custom["_Z_curso_ordem"][0];
  $data = $custom["_Z_curso_data"][0];
  $cargaHoraria = $custom["_Z_curso_carga_horaria"][0];
  $certificado = ($custom["_Z_curso_certificado"][0] == "sim") ? "checked = checked" : ""; 
  
  ?>
  <label>Ordem:<br />
  <input type="text" style="width:100%;" name="_Z_curso_ordem" value="<?php echo $ordem; ?>" /><br >
  <label>Data Próxima Turma <small>(Deixe vazio para não mostrar</small>):<br />
  <input type="text" style="width:100%;" name="_Z_curso_data" value="<?php echo $data; ?>" /><br >
  <label>Carga Horária:<br />
  <input type="text" style="width:100%;" name="_Z_curso_carga_horaria" value="<?php echo $cargaHoraria; ?>" /><br >
  <label>Certificado:<br />
  <input type="checkbox" name="_Z_curso_certificado" value="sim" <?=$certificado?> /><br >
  <?php
}

function catalogo(){
  global $post;
  $custom = get_post_custom($post->ID);
  $catalogoPdf = $custom["_Z_curso_catalogo"][0];
  
  ?>
  <label>Catálogo em PDF:<small style="color:#f09;padding-left:5px;">(com o http://)</small></label><br />
  <input type="text" style="width:100%;" name="_Z_curso_catalogo" value="<?php echo $catalogoPdf; ?>" />
  <?php
} 

/** LISTAGEM CURSOS */ 
add_action("manage_posts_custom_column",  "cursoColunas");
add_filter("manage_edit-curso_columns", "editaColunasCurso");


function editaColunasCurso($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "imagem" => "Imagem",
    "title" => "Título",     
    "ordem" => "Ordem",     
  );
 
  return $columns;
}

function cursoColunas($column){
  global $post;
  $custom = get_post_custom();

  switch ($column):
      
    case "title":
            echo the_title();
	  break;
    case "imagem":  
        echo get_the_post_thumbnail($post->ID);
      break; 
    case "ordem":  
        echo "<div style='text-align: center; vertical-align: middle;color:#F09;'>" . $custom["_Z_curso_ordem"][0] . "</div>";
      break; 
  endswitch;
  
} 

/** -------------------------------------------------------------------- */
?>
