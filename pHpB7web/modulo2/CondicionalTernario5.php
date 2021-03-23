
<?php

//Condicioonal funciona só no php versão 7.4 acima.

//

$nome =  'Edson';






// Usar o 'isset' nessa condicional para não ocorrer o erro.
// o 'isset' siginifica se existe a condicional.
$nomeCompleto = $nome ;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

echo $nomeCompleto;

?>