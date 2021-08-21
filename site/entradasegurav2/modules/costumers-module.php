<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

/** NÁO ESQUECER DE SALVAR OS CUSTOM POST TYPES NA FUNÇÃO salvaEvento.php EM config.php */

/** ESTRUTURA CLIENTES */
add_action('init', 'estruturaClientes');

function estruturaClientes() {
 
        $labels = array(
                'name' => _x('Clientes', 'nome geral'),
                'singular_name' => _x('Clientes', 'nome singular'),
                'add_new' => _x('Adicionar Novo', 'adicionar item'),
                'add_new_item' => __('Novo cliente'),
                'edit_item' => __('Editar cliente'),
                'new_item' => __('Novo cliente'),
                'view_item' => __('Ver cliente'),
                'search_items' => __('Encontrar cliente'),
                'not_found' =>  __('Não há clientes disponíveis'),
                'not_found_in_trash' => __('Não há clientes na lixeira'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => get_stylesheet_directory_uri() . '/modules/images/clientes.png',
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title','thumbnail')
          );
 
        register_post_type( 'cliente' , $args );
} 

/** CADASTRO PRODUTOS */
add_action("admin_init", "iniciaClientes");

function iniciaClientes(){
  add_meta_box("dadosacesso", "Dados Acesso", "dadosacesso", "cliente", "normal", "low"); 
  add_meta_box("dadosgerais", "Dados Gerais", "dadosgerais", "cliente", "normal", "low"); 
  add_meta_box("endereco", "Endereço", "endereco", "cliente", "normal", "low");
}

function dadosacesso(){
  global $post;
  $custom = get_post_custom($post->ID);
  $email = $custom["_Z_cliente_email"][0]; 
  $senha = $custom["_Z_cliente_senha"][0];  
  $logins = $custom["_Z_cliente_logins"][0];  
  ?>
  <label>Número Acessos Plataforma:<br />
  <input type="text" style="width:20%;" name="_Z_cliente_logins" value="<?=$logins?>" disabled /><br >
  <label>E-mail:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_email" value="<?=$email?>" /><br >
  <label>Senha:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_senha" value="<?=$senha?>" /><br >
  <?php
}

function dadosgerais(){
  global $post;
  $custom = get_post_custom($post->ID);
  $cpf = $custom["_Z_cliente_cpf"][0];
  $rg = $custom["_Z_cliente_rg"][0];
  $dataNascimento = $custom["_Z_cliente_data_nascimento"][0];
  $celular = $custom["_Z_cliente_celular"][0]; 
  $fixo = $custom["_Z_cliente_fixo"][0]; 
  $empresa = $custom["_Z_cliente_empresa"][0];  
  $formacao = $custom["_Z_cliente_formacao"][0];  
  $profissao = $custom["_Z_cliente_profissao"][0];  
  $website = $custom["_Z_cliente_website"][0];  
  ?>
  <label>CPF:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_cpf" value="<?php echo $cpf; ?>" /><br >
  <label>RG:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_rg" value="<?php echo $rg; ?>" /><br >
  <label>Data de Nascimento:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_data_nascimento" value="<?php echo $dataNascimento; ?>" /><br >
  <label>Celular:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_celular" value="<?=$celular?>" /><br >
  <label>Fixo:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_fixo" value="<?=$fixo?>" /><br >
  <label>Empresa:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_empresa" value="<?=$empresa?>" /><br >
  <label>Formação:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_formacao" value="<?=$formacao?>" /><br >
  <label>Profissão:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_profissao" value="<?=$profissao?>" /><br >
  <label>Website:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_website" value="<?=$website?>" /><br >
  <?php
}

function endereco(){
  global $post;
  $custom = get_post_custom($post->ID);
  $endereco = $custom["_Z_cliente_endereco"][0];
  $numero = $custom["_Z_cliente_numero"][0];
  $complemento = $custom["_Z_cliente_complemento"][0];
  $bairro = $custom["_Z_cliente_bairro"][0];
  $cidade = $custom["_Z_cliente_cep"][0]; 
  $cep = $custom["_Z_cliente_cidade"][0]; 
  $estado = $custom["_Z_cliente_estado"][0]; 
  ?>
  <label>Endereço:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_endereco" value="<?php echo $endereco; ?>" /><br >
  <label>Número:<br />
  <input type="text" style="width:40%;" name="_Z_cliente_numero" value="<?php echo $numero; ?>" /><br >
  <label>Complemento:<br />
  <input type="text" style="width:40%;" name="_Z_cliente_complemento" value="<?php echo $complemento; ?>" /><br >
  <label>Bairro:<br />
  <input type="text" style="width:40%;" name="_Z_cliente_bairro" value="<?php echo $bairro; ?>" /><br >
  <label>Cidade:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_cidade" value="<?=$cidade?>" /><br >
  <label>CEP:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_cep" value="<?=$cep?>" /><br >
  <label>Estado:<br />
  <input type="text" style="width:100%;" name="_Z_cliente_estado" value="<?=$estado?>" /><br >
  <?php
}

/** LISTAGEM CLIENTES */ 
add_action("manage_posts_custom_column",  "clienteColunas");
add_filter("manage_edit-cliente_columns", "editaColunasClientes");


function editaColunasClientes($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "imagem" => "Imagem",
    "title" => "Cliente",     
    "email" => "E-mail",     
    "cpf" => "CPF",     
  );
 
  return $columns;
}

function clienteColunas($column){
  global $post;
  $custom = get_post_custom();

  switch ($column):
      
    case "title":
            echo the_title();
	  break;
    case "imagem": 
        if(has_post_thumbnail()) 
          get_the_post_thumbnail($post->ID);
        else
          echo "<img src='".get_template_directory_uri()."/images/magnum/user.png' width='75'>";
      break; 
    case "cpf":  
        echo $custom["_Z_cliente_cpf"][0];
      break; 
    case "email":  
        echo "<div style='vertical-align: middle;color:#F09;'>" . $custom["_Z_cliente_email"][0] . "</div>";
      break; 
  endswitch;
  
} 

/** -------------------------------------------------------------------- */
?>
