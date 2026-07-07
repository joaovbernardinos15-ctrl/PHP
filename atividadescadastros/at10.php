<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action="./estoque10.php" method="POST">
        <h1>Cadastro de Produtos</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Preço</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="preco">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="quantidade">
        </div>
        <div class="button-container">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    
</body>
</html>