<?php 
include 'bancoat10.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM produto WHERE id = $id";

if ($estoque->query($sql))  {
    header("Location: lista_produtos.php");
    exit();
} else {
    echo "Erro ao excluir Produto: " . $estoque->error;
}

?>