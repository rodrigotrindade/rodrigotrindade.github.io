<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

session_name('kleinagendas');
session_start();

add_action('wp_ajax_'.$_REQUEST['action'], $_REQUEST['action']);
add_action('wp_ajax_nopriv_'.$_REQUEST['action'], $_REQUEST['action']);

function addNewsletter(){
    $email = $_REQUEST['email'];
    $recaptcha = $_REQUEST['rrr'];

    $arr = array();
    
    if($recaptcha == "true"):
        $_SESSION['cadastrado'] = $email;
        $_SESSION['data'] = time();
        
        global $wpdb;

        $qry = $wpdb->get_results( "select * from " . $wpdb->postmeta . " where meta_key = '_Z_newsletter_email'" );    
        $emailExiste = false;

        foreach($qry as $row)
            if($row->meta_value == $email)
                $emailExiste = true;
        
        if(!$emailExiste):
            $post = array(
                'post_title'  => "",
                'post_status' => 'publish', 
                'post_type'	  => 'newsletter' 
            );

           $postID = wp_insert_post($post);
           update_post_meta($postID, "_Z_newsletter_email", $email);

            $resposta = "Cadastro realizado com sucesso!";
        else:
            $resposta = "E-mail já cadastrado!";
        endif;
        
        $arr = array(
            'sucesso' => true,
            'email' => $email,
            'resposta' => $resposta
        );
    else:
        $arr = array(
            'sucesso' => false,
            'email' => $email,
            'resposta' => "Falha na validação ReCaptcha!"
        );

    endif;

    echo json_encode($arr);

    die();
}

function gerarCSV(){
    
    $args = array( 
            'post_type' => 'newsletter', 
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'meta_value_num', 
            'order' => 'ASC'
            );
    $loop = new WP_Query( $args );
    
    define("SEPARADOR" , ",");
    
    $nomeArquivo = "csv-" . date('Ymdhmi') . ".csv";
    
    $file = fopen("../csv/" . $nomeArquivo,'a');
    
    fwrite($file, "Email" . SEPARADOR . "Data Cadastro" . SEPARADOR . "\n");

    while ( $loop->have_posts() ) : 
        $loop->the_post();
        global $post;
        $custom = get_post_custom(); 
        if($custom["_Z_newsletter_email"][0] == "") continue;
        fwrite($file, $custom["_Z_newsletter_email"][0] . SEPARADOR . get_the_date() . SEPARADOR . "\n");
    endwhile;

    fclose($file);
    
    $retorno = array(
        "nomeArquivo" => $nomeArquivo
    );
    
    echo json_encode($retorno);
    die();
}
?>