<?php 
include 'banco.php';

$sql = "Select * FROM form";

$resultado = $formulario->query($sql);

while ($cliente = $resultado->fetch_assoc()) {
    
    echo "<br> Nome: " . $cliente['nome'] . "<br> Idade: " . $cliente['idade'] . "<br> E-mail: " . $cliente['email'] . "<br> Telefone: " . $cliente['telefone'] . "<br> Cidade: " . $cliente['cidade'];

}

?>