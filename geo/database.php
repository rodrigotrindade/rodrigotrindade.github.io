<?php
    try{
        $conn = new PDO("mysql:host=mysql.rodrigotrindade.com;dbname=rodrigotrindad","rodrigotri_add1","q4x7r9t7");
    }catch(PDOException $e){
        echo $e->getMessage();
        return;
    }
?>