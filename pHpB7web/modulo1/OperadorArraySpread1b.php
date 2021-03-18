<?php 

$bolo1 = [
    'Açucar',
    'farnha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em Pó'
];

$bolo2 = [
    ...$bolo1,
    'Corante'
];

echo $bolo2[5];

?>