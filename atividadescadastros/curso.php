<?php 
include 'bancoat11.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];
$entrega = $_POST['entrega'];

$sql = "INSERT INTO aluno (nome, idade, curso, cidade, entrega)
VALUES ('$nome' , '$idade' , '$curso' , '$cidade' , '$entrega' )";

if ($curso_aluno->query($sql) ) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $curso_aluno->error;
}

?>