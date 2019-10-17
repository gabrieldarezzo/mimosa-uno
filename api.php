<?php

$db = new PDO("mysql:host=localhost;dbname=mimosa;charset=utf8", 'root', '');  
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8"); //Garante UTF em versão < 5.3

    
// INSERT INTO vacas_peso (rf_id, peso, dt_cadastro) values (3213131, 81.3, '2019-10-17 19:43:13');
$sql = 'INSERT INTO vacas_peso (rf_id, peso, dt_cadastro) VALUES (:rf_id, :peso, :dt_cadastro)';

$stmt = $db->prepare($sql);                                  


$rf_id = $_POST['rf_id'];
$stmt->bindParam(':rf_id', $rf_id, PDO::PARAM_INT);

$peso = $_POST['peso'];
$stmt->bindParam(':peso', $peso, PDO::PARAM_STR);

$dt_cadastro = $_POST['dt_cadastro'];
$stmt->bindParam(':dt_cadastro', $dt_cadastro, PDO::PARAM_STR);


$isInserted = $stmt->execute();

var_dump($isInserted);

// print json_encode(array('action' => true));