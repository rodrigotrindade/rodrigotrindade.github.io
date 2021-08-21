<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** NÁO ESQUECER DE SALVAR OS CUSTOM POST TYPES NA FUNÇÃO salvaEvento.php EM config.php */

/** ESTRUTURA CERTIFICADOS */
add_action('init', 'estruturaCertificados');

function estruturaCertificados() {
 
        $labels = array(
                'name' => _x('Certificados', 'nome geral'),
                'singular_name' => _x('Certificado', 'nome singular'),
                'add_new' => _x('Adicionar Novo', 'adicionar item'),
                'add_new_item' => __('Novo Certificado'),
                'edit_item' => __('Editar Certificado'),
                'new_item' => __('Novo Certificado'),
                'view_item' => __('Ver Certificado'),
                'search_items' => __('Encontrar Certificado'),
                'not_found' =>  __('Não há Certificados disponíveis'),
                'not_found_in_trash' => __('Não há Certificados na lixeira'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => get_stylesheet_directory_uri() . '/modules/images/certificados.png',
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','editor')
          );
 
        register_post_type( 'certificados' , $args );
}

/** CADASTRO CERTIFICADOS */
add_action("admin_init", "iniciaCertificados");

function iniciaCertificados(){
  add_meta_box("infocertificado", "Info Certificado", "infocertificado", "certificados", "normal", "low");
}

function infocertificado(){
  global $post;
  $custom = get_post_custom($post->ID);
  $data = $custom["_Z_certificados_data"][0];
  $validade = $custom["_Z_certificados_validade"][0];
  $detentor = $custom["_Z_certificados_detentor"][0];
  $curso = $custom["_Z_certificados_curso"][0];
  $certificado = $custom["_Z_certificados_certificado"][0];

  $args = array( 
    'post_type' => 'cliente', 
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'title', 
    'order' => 'ASC'
    );
  $loop = new WP_Query( $args );
  ?>
  <br />
  <select id="cliente" style="width: 20%;" name="_Z_certificados_detentor" value="<?=$detentor; ?>">
      <?php if(empty($detentor)): ?>
      <option value="">Selecione o Detentor...</option>
      <?php else: ?>
      <option value="<?=$detentor?>"><?=$detentor?></option>
      <?php endif; ?>
  <?php
  while ( $loop->have_posts() ) : 
      $loop->the_post();
      global $post;
      if($detentor != $post->post_title):
  ?>  <option value="<?=$post->post_title?>"><?=$post->post_title?></option> <?php
      endif;
  endwhile;
  ?>
  </select><br /><br />
  <?php
    $args = array( 
      'post_type' => 'curso', 
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'orderby' => 'title', 
      'order' => 'ASC'
      );
    $loop = new WP_Query( $args );
  ?>
  <select id="curso" style="width: 20%;" name="_Z_certificados_curso" value="<?=$curso; ?>">
  <?php if(empty($curso)): ?>
      <option value="">Selecione o Curso...</option>
      <?php else: ?>
      <option value="<?=$curso?>"><?=$curso?></option>
      <?php endif; ?>
  <?php
  while ( $loop->have_posts() ) : 
      $loop->the_post();
      global $post;
      if($curso != $post->post_title):
      ?>  <option value="<?=$post->post_title?>"><?=$post->post_title?></option> <?php
      endif;
  endwhile;
  ?>
  </select><br /><br />
  <label>Certificado <small style="color: #F09;"> (incluir o https://)</small>:</label><br />
  <input type="text" style="width:50%;" name="_Z_certificados_certificado" value="<?php echo $certificado; ?>" /><br /><br />
  <label>Conferido na data de:</label><br />
  <input type="text" style="width:20%;" name="_Z_certificados_data" value="<?php echo $data; ?>" /><br /><br />
  <label>Valido até:</label><br />
  <input type="text" style="width:20%;" name="_Z_certificados_validade" value="<?php echo $validade; ?>" />
  <script>
    document.querySelector("#cliente").addEventListener("change",setTitle);
    document.querySelector("#curso").addEventListener("change",setTitle);
    document.querySelector("#title-prompt-text").innerHTML = "";

    setTimeout(function(){
      setTiny();
      setTimeout(function(){
        setTiny();
        setTimeout(function(){
          setTiny();
        },1500);
      },1500);
    },1500);
    
    function setTiny(){
      try{
        document.querySelector("#mceu_23").style.display = "none";
        document.querySelector("#post-status-info tbody").style.display = "none";
        document.querySelector("#post-status-info").style.borderBottom = "0";
        document.querySelector(".wp-editor-expand").style.borderTop = "0";
        document.querySelector(".wp-editor-tabs").style.display = "none";
        document.querySelector(".wp-editor-tools:after").style.display = "none";
      }catch(e){}
    }

    function setTitle(){
      document.querySelector("#title-prompt-text").innerHTML = "";
      document.querySelector("#title").value = document.querySelector("#cliente").value + " :: " + document.querySelector("#curso").value;
    }
  </script>
  <?php
} 

/** LISTAGEM CERTIFICADOS */
add_action("manage_posts_custom_column",  "certificadosColunas");
add_filter("manage_edit-certificados_columns", "editaColunasCertificados");

function editaColunasCertificados($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Título",
  );
 
  return $columns;
}

function certificadosColunas($column){
  global $post;

  switch ($column):
    case "title":
        echo the_title();
        break;
  endswitch;
}  

/** -------------------------------------------------------------------- */

?>
