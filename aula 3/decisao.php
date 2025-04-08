<?php
$x = 8;
$y = 6;
$media = ($x + $y) /2;
// media >= 6,0 = 'aprovado'
// media <= 4,0 = 'reprovado'
//= 'recuperação'



if ($media >= 6.0){
echo 'aluno aprovado';
} else if ($media >= 4.0){
    // se verdade
    echo 'aluno em recuperação';
} else {
    //se falsa
    echo 'aluno reprovado';
}







?>