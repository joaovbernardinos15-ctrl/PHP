<?php 
include 'bancoevento.php';

$nome_do_evento = $_POST['nome_do_evento'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$stmt = $eventos->prepare("INSERT INTO evento (nome_do_evento, data, horario, local, cidade, vagas)
VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Erro ao preparar a query: " . $eventos->error);
}

$stmt->bind_param("sssssi", $nome_do_evento, $data, $horario, $local, $cidade, $vagas);

if ($stmt->execute()) {
    header("Location: lista_evento.php");
    exit();
} else {
    echo "Erro ao inserir evento: " . $stmt->error;
}

?>