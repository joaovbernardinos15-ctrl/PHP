<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "estoque";
$porta = "3307";


$estoque = new mysqli($host, $user, $senha, $banco, $porta
);


if ($estoque->connect_error) {
    die("Falha na conexão: " . $estoque->connect_error);
}
echo "Conexão foi um sucesso ao banco de dados com seu formulário...";

?>

