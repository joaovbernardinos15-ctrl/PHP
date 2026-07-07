<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "formulario";
$porta = "3307";


$formulario = new mysqli($host, $user, $senha, $banco, $porta
);


if ($formulario->connect_error) {
    die("Falha na conexão: " . $formulario->connect_error);
}
echo "Conexão foi um sucesso ao banco de dados com seu formulário...";

?>

