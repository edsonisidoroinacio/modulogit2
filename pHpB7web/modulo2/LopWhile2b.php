
<?php
/* While significa enquanto.
O loop While execulta o mesmo código  infinitamente conforme
a condição*/

$numero = 0;

/*Essa condição abaixo executa infinitamente, ou acrescentando += 1
modifica tornando finita*/
while($numero < 10) {
    echo "N: ".$numero."<br/>";

    $numero += 1;;
};

?>