<?php
include_once("database.php");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_REQUEST["id"];

$sql = "DELETE FROM es_geo WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$arr = array(
        "id" => $id
);

echo json_encode($arr);
?>