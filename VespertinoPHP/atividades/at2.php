<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
    <h1>Resultado da Divisão</h1>
    <?php
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if ($number2 != 0) {
            $divisao = $number1 / $number2;
            echo "<p>A divisão de $number1 por $number2 é: $divisao</p>";
        } else {
            echo "<p>Não é possível dividir por zero.</p>";
        }
    ?>
    
</body>
</html>