<?php 
include 'banco12.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'])) {
    die("Esta página só pode ser acessada enviando o formulário de edição (editar_livro.php). Não abra atualizar_livros.php diretamente.");
}

$id = intval($_POST['id']);
$titulo_do_livro = $_POST['titulo_do_livro'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$quantidade_paginas = $_POST['quantidade_paginas'];
$desafio = $_POST['desafio'];

$sql = "UPDATE livros
        SET titulo_do_livro = ?, autor = ?, editora = ?, quantidade_paginas = ?, desafio = ?
        WHERE id = ?";

$stmt = $biblioteca->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a query: " . $biblioteca->error);
}

$stmt->bind_param("sssssi", $titulo_do_livro, $autor, $editora, $quantidade_paginas, $desafio, $id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Nenhuma alteração foi feita (id = $id não encontrado, ou os dados são iguais aos anteriores).";
    }
    echo '<br><a href="lista_livros.php">Voltar para a lista</a>';
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

$stmt->close();
$biblioteca->close();

?>