
    <?php 
    include 'conexaoat9.php';

    $numero1 = 5;
    $numero2 = 10;
    $numero3 = 2;
    $resultado = $numero1 - $numero2 - $numero3;
    

//linguagem slq


$sql = "INSERT INTO at8 (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";
 

if ($conexaophp->query($sql) === True) {
    echo " <br> Sua conexão foi realizada com sucesso!";
} else {
    echo "<br> Erro: " . $sql . "<br>" . $conexaophp->error;
}

echo "<br> Resultado: " . $resultado;

    ?>