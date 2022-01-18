<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

session_name('aducci');
session_start();

include_once dirname(dirname(__FILE__))."/classes/br.com.rodrigotrindade.mensagens/ListasSessao.php";
include_once dirname(dirname(__FILE__))."/classes/br.com.rodrigotrindade.modelo/Produto.php";

add_action('wp_ajax_'.$_REQUEST['action'], $_REQUEST['action']);
add_action('wp_ajax_nopriv_'.$_REQUEST['action'], $_REQUEST['action']);

function addLista(){
    $nome = $_REQUEST['nome'];
    $vetor = explode(',', $_SESSION[$nome]);
    
    $mn = new ListasSessao($nome);

    if(count($vetor) == 1 && empty($vetor[0])):
        array_pop($vetor);
    endif;
    
    if(!in_array($_REQUEST['item'], $vetor)):
        array_push($vetor, $_REQUEST['item']);
    
        $total = 0;
        $subtotal = 0;
        foreach($vetor as $v):
            $custom = get_post_custom($v);
            $produto = new Produto($custom);
        endforeach;

        
        $arr = array(
            'mensagem' => $mn->getSucessoInclusao(),
            'qtd' => count($vetor),
            'tipo' => 'success'
        );
        $_SESSION['qtd'.$nome] = count($vetor);
        $_SESSION[$nome] = implode(',', $vetor);
        
    else:
        $arr = array(
            'mensagem' => $mn->getInclusaoDuplicada(),
            'qtd' => count($vetor),
            'tipo' => 'warning'
        );
    endif;

    echo json_encode($arr);

    die();
}

function removeLista(){
    $nome = $_REQUEST['nome'];
    $vetor = explode(',', $_SESSION[$nome]);
    
    $mn = new ListasSessao($nome);

    if (($key = array_search($_REQUEST['item'], $vetor)) !== false):
        unset($vetor[$key]);
    
        $total = 0;
        $subtotal = 0;
        foreach($vetor as $v):
            $custom = get_post_custom($v);
            $produto = new Produto($custom);
        endforeach;

        $arr = array(
            'mensagem' => $mn->getSucessoRemocao(),
            'qtd' => count($vetor),
            'tipo' => 'success'
        );
        $_SESSION['qtd'.$nome] = count($vetor);
        $_SESSION[$nome] = implode(',', $vetor);

        echo json_encode($arr);
    endif;    
    
    die();
}

function getTamanhoLista(){
    $nome = $_REQUEST['nome'];
    echo $_SESSION[$nome];
    die();
}
?>