<?php 
include 'bancoat11.php';

$id = intval($_GET['id']);

$sql = "DELETE FROM aluno WHERE id = $id";

if ($curso_aluno->query($sql))  {
    header("Location: lista_alunos.php");
    exit();
} else {
    echo "Erro ao excluir Aluno: " . $curso_aluno->error;
}

?>