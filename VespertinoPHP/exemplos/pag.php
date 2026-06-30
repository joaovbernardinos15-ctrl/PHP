<?php 
// incuindo o arquivo de conexão
include 'conexao.php';

$numero1 = 20;
$numero2 = 25;

$resultado = $numero1 + $numero2;


//linguagem slq

$sql = "INSERT INTO calculo (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";
 

if ($conexaophp->query($sql) === True) {
    echo " <br> Sua conexão foi realizada com sucesso!";
} else {
    echo "<br> Erro: " . $sql . "<br>" . $conexaophp->error;
}

?>