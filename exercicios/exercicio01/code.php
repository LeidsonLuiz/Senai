<?php

$numero = $_POST["numero"];

if($numero > 0){
    echo "Valor positivo!";
}elseif($numero < 0){
    echo "Valor negativo!";
}elseif($numero == 0){
    echo "Valor igual a zero!";
}

?>