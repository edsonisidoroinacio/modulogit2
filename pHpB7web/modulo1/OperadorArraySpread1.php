<?php 

$bolo1 = [
    'Açuçcar',
    'farnha de Trigo',
    'Ovo',
    'Leite',
    'Vermento em Pó'
];

$bolo2 = [
    ...$bolo1,
    'Corante'
];

echo $bolo2[5];

?>