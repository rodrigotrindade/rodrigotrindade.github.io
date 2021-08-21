<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

session_name('aducci');
session_start();
$_SESSION = array();
session_destroy();
?>