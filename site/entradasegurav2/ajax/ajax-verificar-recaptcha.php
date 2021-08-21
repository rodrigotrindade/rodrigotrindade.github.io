<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */
?>
<?php

add_action('wp_ajax_'.$_REQUEST['action'], $_REQUEST['action']);
add_action('wp_ajax_nopriv_'.$_REQUEST['action'], $_REQUEST['action']);

function verificarRecaptcha(){
    $response = $_REQUEST["token"]; 
    $secretKey = "6Lf5vpgUAAAAAG9s4AQ1e5GvSBI0Sk_f4esHK0Pt";

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
            'secret' => $secretKey,
            'response' => $response
        ],
        CURLOPT_RETURNTRANSFER => true
    ]);

    $output = curl_exec($ch);
    curl_close($ch);

    $resp = json_decode($output, true);

    $sucesso = false;
    if($resp["success"]){
        $sucesso = true;
    }

    $arr = array("sucesso" => $sucesso);

    echo json_encode($arr);
    die();
}

?>