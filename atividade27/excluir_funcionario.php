<?php 
include 'banco13.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM funcionarios WHERE id = $id";

if ($dados_funcionarios->query($sql))  {
    header("Location: listar_funcionarios.php");
    exit();
} else {
    echo "Erro ao excluir funcionário: " . $dados_funcionarios->error;
}

?>