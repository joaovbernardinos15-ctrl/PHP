<?php 
include 'bancoevento.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID do evento não informado ou inválido.");
}

$id = intval($_GET['id']);

$stmt = $eventos->prepare("DELETE FROM evento WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: lista_evento.php");
    exit();
} else {
    echo "Erro ao excluir evento: " . $stmt->error;
}

?>