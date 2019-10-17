<?php


$db = new PDO("mysql:host=localhost;dbname=mimosa;charset=utf8", 'root', '');  
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8"); //Garante UTF em versão < 5.3

    

$stmt = $db->query('select * from vacas_peso');

$vacas = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($vacas);