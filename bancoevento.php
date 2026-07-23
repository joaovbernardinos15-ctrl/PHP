<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "eventos";
$porta = "3307";


$eventos = new mysqli($host, $user, $senha, $banco, $porta
);


if ($eventos->connect_error) {
    die("Falha na conexão: " . $eventos->connect_error);
}

?>