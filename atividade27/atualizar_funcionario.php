<?php 
include 'banco13.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'])) {
    die("Esta página só pode ser acessada enviando o formulário de edição (editar_funcionario.php). Não abra atualizar_funcionarios.php diretamente.");
}

$id = intval($_POST['id']);
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$data_de_admissao = $_POST['data_de_admissao'];
$desafio = $_POST['desafio'];

$sql = "UPDATE funcionarios
        SET nome = ?, cargo = ?, departamento = ?, salario = ?, data_de_admissao = ?, desafio = ?
        WHERE id = ?";

$stmt = $dados_funcionarios->prepare($sql);

if (!$stmt) {
    die("Erro ao preparar a query: " . $dados_funcionarios->error);
}

$stmt->bind_param("ssssssi", $nome, $cargo, $departamento, $salario, $data_de_admissao, $desafio, $id);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "Funcionário atualizado com sucesso!";
    } else {
        echo "Nenhuma alteração foi feita (id = $id não encontrado, ou os dados são iguais aos anteriores).";
    }
    echo '<br><a href="listar_funcionarios.php">Voltar para a lista</a>';
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

$stmt->close();
$dados_funcionarios->close();

?>