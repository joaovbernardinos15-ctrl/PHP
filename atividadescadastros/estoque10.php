<?php 
include 'bancoat10.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produto (nome, preco, quantidade)
VALUES ('$nome' , '$preco' , '$quantidade' )";

if ($estoque->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $estoque->error;
}

?>