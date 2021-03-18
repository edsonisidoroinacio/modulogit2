<?php 

$lista = [
    "nome" => "Edson",
    "idade" => 52,
    "atributos" => [
        "força" => 72,
        "agilidade" => 80,
        "destreza" => 50,
        "vida" => 95,
        "mana" => 46
    ]
    
];
echo "NOME: ".$lista["nome"]."<br/>";
echo "FORÇA: ".$lista["atributos"]["força"]."<br/>";
echo "VIDA: ".$lista["atributos"]["vida"];
?>