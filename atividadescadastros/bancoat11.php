<?php 
$host = "localhost";
$user = "root";
$senha = "senac";
$banco = "curso_aluno";
$porta = "3307";


$curso_aluno = new mysqli($host, $user, $senha, $banco, $porta
);


if ($curso_aluno->connect_error) {
    die("Falha na conexão: " . $curso_aluno->connect_error);
}
echo "Conexão do Curso foi um sucesso...";

?>

