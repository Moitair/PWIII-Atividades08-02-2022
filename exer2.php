<?php

$variavel = $_REQUEST['variavel'];


if($variavel % 2 == 0){
    echo "O número $variavel é par!";
}
else{
    echo "O número $variavel é impar!";
}
