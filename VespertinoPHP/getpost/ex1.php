<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado da Soma</h1>
    <?php
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        $soma = $number1 + $number2;

        echo "<p>A soma de $number1 e $number2 é: $soma</p>";
    ?>
    
</body>
</html>