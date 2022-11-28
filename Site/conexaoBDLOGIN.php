<?php

$usuario = 'cl200469';
$senha = 'cl*10082000';
$database = 'cl200469';
$host = '143.106.241.3';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}