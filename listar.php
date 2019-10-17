<?php


$db = new PDO("mysql:host=192.185.210.165;dbname=inwor702_mimosa;charset=utf8", 'inwor702_mimosa', 'QCf3vVVk#XjJ');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8"); //Garante UTF em versão < 5.3

    

$stmt = $db->query('select * from vacas_peso');

$vacas = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($vacas);