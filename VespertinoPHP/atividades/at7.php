<?php 
// incuindo o arquivo de conexão
include 'conexaoat7.php';

$numero1 = 50;
$numero2 = 90;
$numero3 = 12;

$resultado = $numero1 + $numero2 + $numero3;


//linguagem slq

$sql = "INSERT INTO at7 (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";
 

if ($conexaophp->query($sql) === True) {
    echo " <br> Sua conexão foi realizada com sucesso!";
} else {
    echo "<br> Erro: " . $sql . "<br>" . $conexaophp->error;
}

echo "<br> Resultado: " . $resultado;
?>