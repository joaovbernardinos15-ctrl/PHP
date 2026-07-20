<?php 
include 'banco13.php';

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$data_de_admissao = $_POST['data_de_admissao'];
$desafio = $_POST['desafio'];

$sql = "INSERT INTO funcionarios (nome, cargo, departamento, salario, data_de_admissao, desafio)
VALUES ('$nome' , '$cargo' , '$departamento' , '$salario' , '$data_de_admissao' , '$desafio' )";

if ($dados_funcionarios->query($sql) ) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $dados_funcionarios->error;
}

?>