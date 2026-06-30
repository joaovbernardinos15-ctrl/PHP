<?php 
$aprovados = 0;
$alunos = [

(object)["nome"=> "Kamila" , "Nota" => 100],
(object)["nome"=> "Rafael" , "Nota" => 80],
(object)["nome"=> "Natanael" , "Nota" => 95],
(object)["nome"=> "Lucas" , "Nota" => 85],
(object)["nome"=> "Enzo" , "Nota" => 30],
(object)["nome"=> "Ana" , "Nota" => 50],
];

foreach ($alunos as $alunos) {

      if ($alunos -> Nota >=80) {

    $aprovados++;
        # code...
    }
    # code...
}


echo "O total de aprovados é: $aprovados";




?>