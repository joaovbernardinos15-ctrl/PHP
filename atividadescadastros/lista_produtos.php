<?php 
include 'bancoat10.php';

$sql = "Select * FROM produto";

$resultado = $estoque->query($sql);

while ($cliente = $resultado->fetch_assoc()) {
    
    echo "<br> Nome: " . $cliente["nome"];
    echo  "<br> Preço: " .  $cliente["preco"];
    echo  "<br> Quantidade: " .  $cliente["quantidade"];
}

?>