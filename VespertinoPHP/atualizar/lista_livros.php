<?php 
include 'banco12.php';

$sql = "SELECT * FROM livros";

$resultado = $biblioteca->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    while ($livro = $resultado->fetch_assoc()) {

        echo "<hr>";
        echo "<br> Nome: " . htmlspecialchars($livro["titulo_do_livro"]);
        echo "<br> Autor: " . htmlspecialchars($livro["autor"]);
        echo "<br> Editora: " . htmlspecialchars($livro["editora"]);
        echo "<br> Quantidade de Páginas: " . htmlspecialchars($livro["quantidade_paginas"]);
        echo "<br> Data do Desafio: " . htmlspecialchars($livro["desafio"]);
        echo '<br><a href="editar_livro.php?id=' . $livro["id"] . '">Editar</a>';
    }
} else {
    echo "Nenhum livro cadastrado ainda.";
}

?>