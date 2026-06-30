<?php 
$aprovados = 0;
$reprovados  = 0;
$candidatos = [

(object)["nome"=> "Kamila" , "Nota" => 100],
(object)["nome"=> "Rafael" , "Nota" => 80],
(object)["nome"=> "Natanael" , "Nota" => 95],
(object)["nome"=> "Lucas" , "Nota" => 85],
(object)["nome"=> "Enzo" , "Nota" => 30],
(object)["nome"=> "Ana" , "Nota" => 50],
];

foreach ($candidatos as $candidato) {

      if ($candidato -> Nota >=80) {

    $aprovados++;
   
  
        
    }  else {

        $reprovados++;

    
    }
    # code...
}

 echo "O total de aprovados e reprovados é: $aprovados e $reprovados";





?>