<?php 
$aprovados = 0;
$candidatos = [

(object)["nome" => "João", "Nota"=> 90],
(object)["nome"=> "Natanael", "Nota" => 100],
(object)["nome"=> "Mateus" , "Nota" => 30]

];

foreach ($candidatos as $candidatos) {

    if ($candidatos -> Nota >= 70) {

        $aprovados++; 
    }
}



echo "O total de aprovados é: $aprovados";

?>