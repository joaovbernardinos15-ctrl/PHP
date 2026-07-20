<?php 
include 'banco13.php';

$sql = "SELECT * FROM funcionarios";

$resultado = $dados_funcionarios->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    while ($funcionario = $resultado->fetch_assoc()) {

        echo "<hr>";
        echo "<br> Nome: " . htmlspecialchars($funcionario["nome"]);
        echo "<br> Cargo: " . htmlspecialchars($funcionario["cargo"]);
        echo "<br> Departamento: " . htmlspecialchars($funcionario["departamento"]);
        echo "<br> Salário: " . htmlspecialchars($funcionario["salario"]);
        echo "<br> Data de Admissão: " . htmlspecialchars($funcionario["data_de_admissao"]);
        echo "<br> Data do Desafio: " . htmlspecialchars($funcionario["desafio"]);
        echo '<br><a href="editar_funcionario.php?id=' . $funcionario["id"] . '">Editar</a>';
    }
} else {
    echo "Nenhum funcionário cadastrado ainda.";
}

?>