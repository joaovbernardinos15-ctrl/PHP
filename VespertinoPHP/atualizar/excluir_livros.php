<?php 
include 'banco12.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM livros WHERE id = $id";

if ($biblioteca->query($sql))  {
    header("Location: lista_livros.php");
    exit();
} else {
    echo "Erro ao excluir livro: " . $biblioteca->error;
}

?>