
<?php

//Condicioonal funciona só no php versão 7.4 acima.

//

$nome =  'Edson';
$sobrenome = ' Inacio';






$nomeCompleto = $nome ;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;

?>