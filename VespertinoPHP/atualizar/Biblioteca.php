<?php 
include 'banco12.php';

$titulo_do_livro = $_POST['titulo_do_livro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$quantidade_paginas = $_POST['quantidade_paginas'];
$desafio = $_POST['desafio'];

$sql = "INSERT INTO livros (titulo_do_livro, autor, editora, quantidade_paginas, desafio)
VALUES ('$titulo_do_livro' , '$autor' , '$editora' , '$quantidade_paginas' , '$desafio' )";

if ($biblioteca->query($sql) ) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $biblioteca->error;
}

?>