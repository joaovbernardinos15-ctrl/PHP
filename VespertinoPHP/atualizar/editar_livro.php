<?php 
include 'banco12.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID do livro não informado ou inválido. URL esperada: editar_livro.php?id=1");
}

$id = intval($_GET['id']);

$stmt = $biblioteca->prepare("SELECT * FROM livros WHERE id = ?");

if (!$stmt) {
    die("Erro ao preparar a query (verifique se a tabela 'livros' tem a coluna 'id'): " . $biblioteca->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$livro = $resultado->fetch_assoc();

if (!$livro) {
    die("Nenhum livro encontrado com id = $id.");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <form action="./atualizar_livros.php" method="POST">
        <h1>Editar Livro</h1>

        <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Nome do livro</label>
            <input type="text" class="form-control" name="titulo_do_livro"
                   value="<?php echo htmlspecialchars($livro['titulo_do_livro']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor"
                   value="<?php echo htmlspecialchars($livro['autor']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Editora</label>
            <input type="text" class="form-control" name="editora"
                   value="<?php echo htmlspecialchars($livro['editora']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Quantidade de páginas</label>
            <input type="number" class="form-control" name="quantidade_paginas"
                   value="<?php echo htmlspecialchars($livro['quantidade_paginas']); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Data do Desafio</label>
            <input type="date" class="form-control" name="desafio"
                   value="<?php echo htmlspecialchars($livro['desafio']); ?>">
        </div>

        <div class="button-container">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>

</body>
</html>
