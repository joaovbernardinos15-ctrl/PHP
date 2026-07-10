<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "biblioteca";
$porta = "3307";


$biblioteca = new mysqli($host, $user, $senha, $banco, $porta
);


if ($biblioteca->connect_error) {
    die("Falha na conexão: " . $biblioteca->connect_error);
}
echo "Conexão foi um sucesso ao banco de dados com seu formulário...";

?>

