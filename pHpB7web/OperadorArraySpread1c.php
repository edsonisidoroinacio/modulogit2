<?php 

$bolo1 = [
    'Açucar',
    'farnha de Trigo',
    'Ovo',
    'Leite',
    'Fermento em Pó'
];

$bolo2 = [
    'Vasilha',
    'Água Morna',
    ...$bolo1,
    'Corante'
];

echo $bolo2[0];

?>