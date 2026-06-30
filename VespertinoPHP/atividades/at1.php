<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação</title>
</head>
<body>
    <h1>Resultado da Multiplicação</h1>
    <?php
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];

        $multiplicacao = $number1 * $number2 * $number3;

        echo "<p>A multiplicação de $number1, $number2 e $number3 é: $multiplicacao</p>";
    ?>
</body>
</html>