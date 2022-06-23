<?php
$usuario = "root";
$senha = "c108";
$database = "aulalog";
$host = "localhost";

$mysqli = new mysqli($usuario, $senha, $database, $host);


if($mysqli -> error){
    die("falha ao conectar no banco". $mysqli-> error);
}