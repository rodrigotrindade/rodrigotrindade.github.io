<?php
include_once("database.php");

$id = $_REQUEST["id"];
$idCondominio = $_REQUEST["idCondominio"];

$qry = $conn->query("select * from es_geo order by id desc",PDO::FETCH_ASSOC);
$arr = array();
foreach($qry as $rs):
        if(!empty($id) && $rs["id"] != $id ) continue;
        if($rs["idCondominio"] != $idCondominio) continue;
        array_push($arr,$rs);
endforeach;

echo json_encode($arr);
?>