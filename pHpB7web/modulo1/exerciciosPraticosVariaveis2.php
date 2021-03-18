<?php 

$lista = [
    'nome' => 'Edson',
    'idade' => 52,
    'atributos' => [
        'forca' => 72,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "Nome: ".$lista['nome']."<br>";
echo "Força: ".$lista['atributos']['forca']."<br>";
echo "Vida: ".$lista['vida']."<br>";
?>