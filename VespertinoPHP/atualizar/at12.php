<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>

    <form action="./Biblioteca.php" method="POST">
        <h1>Cadastro de Livros</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome do livro</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo_do_livro" >
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">autor</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="autor">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">editora</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="editora">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">quantidade de páginas</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="quantidade_paginas">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Data do Desafio</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="desafio">
        </div>
        
        <div class="button-container">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
    
</body>
</html>