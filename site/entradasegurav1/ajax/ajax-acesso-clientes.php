<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

session_name('magnum');
session_start();

add_action('wp_ajax_'.$_REQUEST['action'], $_REQUEST['action']);
add_action('wp_ajax_nopriv_'.$_REQUEST['action'], $_REQUEST['action']);

function loginMagnum(){
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $error = true;
    $certs = array();
    $cliente = "";

    $args = array( 
        'post_type' => 'cliente', 
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : 
        $loop->the_post();
        global $post;
        $custom = get_post_custom();
        if($custom['_Z_cliente_email'][0] == $email):
            if($custom['_Z_cliente_senha'][0] == $senha):
                $error = false;
                $cliente = $post->post_title;
                $args = array( 
                    'post_type' => 'certificados', 
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );

                $loop2 = new WP_Query( $args );
                while ( $loop2->have_posts() ) : 
                    $loop2->the_post();
                    global $post2;
                    $custom2 = get_post_custom();
                    if($custom2["_Z_certificados_detentor"][0] != $cliente) continue;
                    $arr = array(
                        "curso" => $custom2["_Z_certificados_curso"][0],
                        "certificado" => $custom2["_Z_certificados_certificado"][0],
                        "conferido" => $custom2["_Z_certificados_data"][0],
                        "validade" => $custom2["_Z_certificados_validade"][0],
                    );
                    array_push($certs,$arr);
                endwhile;
            endif;
        endif;
    endwhile;

    if(!$error):
        $_SESSION["cliente"] = $cliente;
        $_SESSION['LAST_ACTIVITY'] = time(); 
    else:
        unset($_SESSION["cliente"]);
    endif;

    $arr = array(
        "error" => $error,
        "cliente" => $cliente,
        "certs" => $certs
    );

    echo json_encode($arr);
    die();
}

function logoffMagnum(){
    session_unset();
    session_destroy(); 

    $arr = array();
    echo json_encode($arr);
    die();
}

function reloadCertsTable(){
    $certs = array();
    $cliente = $_REQUEST['cliente'];

    $args = array( 
        'post_type' => 'certificados', 
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : 
        $loop->the_post();
        global $post;
        $custom = get_post_custom();
        if($custom["_Z_certificados_detentor"][0] != $cliente) continue;
        $arr = array(
            "curso" => $custom["_Z_certificados_curso"][0],
            "certificado" => $custom["_Z_certificados_certificado"][0],
            "conferido" => $custom["_Z_certificados_data"][0],
            "validade" => $custom["_Z_certificados_validade"][0],
        );
        array_push($certs,$arr);
    endwhile;

    $arr = array(
        "cliente" => $cliente,
        "certs" => $certs
    );

    echo json_encode($arr);
    die();
}
?>