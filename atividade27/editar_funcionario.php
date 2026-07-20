<?php 
include 'banco13.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID do funcionário não informado ou inválido. URL esperada: editar_funcionario.php?id=1");
}

$id = intval($_GET['id']);

$stmt = $dados_funcionarios->prepare("SELECT * FROM funcionarios WHERE id = ?");

if (!$stmt) {
    die("Erro ao preparar a query (verifique se a tabela 'funcionarios' tem a coluna 'id'): " . $dados_funcionarios->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$funcionario = $resultado->fetch_assoc();

if (!$funcionario) {
    die("Nenhum funcionário encontrado com id = $id.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar funcionário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <form action="./atualizar_funcionario.php" method="POST">
        <h1>Editar Funcionário</h1>

        <input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nome"
                   value="<?php echo htmlspecialchars($funcionario['nome']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo"
                   value="<?php echo htmlspecialchars($funcionario['cargo']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="text" class="form-control" name="departamento"
                   value="<?php echo htmlspecialchars($funcionario['departamento']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Salário</label>
            <input type="number" class="form-control" name="salario"
                   value="<?php echo htmlspecialchars($funcionario['salario']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Data de Admissão</label>
            <input type="date" class="form-control" name="data_de_admissao"
                   value="<?php echo htmlspecialchars($funcionario['data_de_admissao']); ?>">
        </div>

         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Desafio</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="desafio" 
                    value="<?php echo htmlspecialchars($funcionario['desafio']); ?>">
        </div>

        <div class="button-container">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>

</body>
</html>
