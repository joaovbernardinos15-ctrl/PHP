<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "dados_funcionarios";
$porta = "3307";


$dados_funcionarios = new mysqli($host, $user, $senha, $banco, $porta
);


if ($dados_funcionarios->connect_error) {
    die("Falha na conexão: " . $dados_funcionarios->connect_error);
}
echo "Conexão foi um sucesso ao banco de dados com seu formulário...";

?>

