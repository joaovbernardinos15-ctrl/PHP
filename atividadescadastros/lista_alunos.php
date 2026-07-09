<?php 
include 'bancoat11.php';

$sql = "Select * FROM aluno";

$resultado = $curso_aluno->query($sql);

while ($cliente = $resultado->fetch_assoc()) {
    
   echo "<br> Nome: " . $cliente["nome"];
   echo  "<br> Idade: " .  $cliente["idade"];
    echo  "<br> Curso: " .  $cliente["curso"];
    echo  "<br> Cidade: " .  $cliente["cidade"];
}

?>