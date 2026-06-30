<?php 
// incuindo o arquivo de conexão
include 'conexaoat5.php';

$numero1 = 20;
$numero2 = 5;
$numero3 = 2;

$resultado = $numero1 / $numero2 / $numero3;


//linguagem slq

$sql = "INSERT INTO at5 (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";
 

if ($conexaophp->query($sql) === True) {
    echo " <br> Sua conexão foi realizada com sucesso!";
} else {
    echo "<br> Erro: " . $sql . "<br>" . $conexaophp->error;
}
?>