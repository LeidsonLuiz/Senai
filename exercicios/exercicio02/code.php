<?php
$a = $_POST["inputA"];
$b = $_POST["inputB"];

if($a < $b){
    echo $a.", ".$b;
}else{
    echo $b.", ".$a;
}
?>
