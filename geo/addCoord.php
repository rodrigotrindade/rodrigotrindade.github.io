<?php
include_once("database.php");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nome = $_REQUEST["nome"];
$latitude = $_REQUEST["latitude"];
$longitude = $_REQUEST["longitude"];
$foto = $_REQUEST["foto"];
$id = $_REQUEST["id"];
$idCondominio = $_REQUEST["idCondominio"];

$arr = array();

if(empty($id)):
        $sql = "INSERT INTO es_geo (nome,latitude,longitude,foto,idCondominio) VALUES(:nome,:latitude,:longitude,:foto,:idCondominio)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":latitude",$latitude);
        $stmt->bindParam(":longitude",$longitude);
        $stmt->bindParam(":foto",$foto);
        $stmt->bindParam(":idCondominio",$idCondominio);
        $stmt->execute();

        $arr = array(
                "id" => $conn->lastInsertId()
        );
else:
        $sql = "UPDATE es_geo SET nome=:nome, latitude=:latitude, longitude=:longitude, foto=:foto WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":latitude",$latitude);
        $stmt->bindParam(":longitude",$longitude);
        $stmt->bindParam(":foto",$foto);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $arr = array(
                "id" => $id
        );
endif;

echo json_encode($arr);
?>