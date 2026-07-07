<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "conexaophp";
$porta = "3307";



$conexaophp = new mysqli($host, $user, $senha, $banco, $porta
);

if ($conexaophp->connect_error) {
    die("Falha na conexão: " . $conexaophp->connect_error);
}

echo "Conexão com sucesso! ao banco de dados!";



?>