
<?php

//Condicioonal funciona só no php versão 7.4 acima.

// ?? ''  Condição Null Cao.









$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;

?>