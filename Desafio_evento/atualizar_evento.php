<?php
include 'bancoevento.php';

if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    die("ID do evento não informado ou inválido.");
}

$id = intval($_POST['id']);
$nome_do_evento = $_POST['nome_do_evento'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$stmt = $eventos->prepare("UPDATE evento SET nome_do_evento = ?, data = ?, horario = ?, local = ?, cidade = ?, vagas = ? WHERE id = ?");

if (!$stmt) {
    die("Erro ao preparar a query: " . $eventos->error);
}

$stmt->bind_param("sssssii", $nome_do_evento, $data, $horario, $local, $cidade, $vagas, $id);

if ($stmt->execute()) {
    header("Location: lista_evento.php");
    exit();
} else {
    echo "Erro ao atualizar evento: " . $stmt->error;
}

?>