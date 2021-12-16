<?php
include_once("database.php");
$qry = $conn->query("select * from es_condominio where id=".$idCondominio,PDO::FETCH_ASSOC);
$arr = array();
foreach($qry as $rs)
        $nomeCondominio = $rs["nome"];
?>