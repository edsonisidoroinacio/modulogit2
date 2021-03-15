<?php 

$lista1 = ['Edson', 'Pietro', 'Simone'];
$lista2 = ['Bianca', 'João', 'Luana'];
$lista3 = [...$lista1,  'Arthur', ...$lista2];

print_r($lista3);

?>