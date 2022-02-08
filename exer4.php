<?php

$variavel = $_REQUEST['variavel'];

$variavel2 = $_REQUEST['variavel2'];

while($variavel > $variavel2){
    for ($variavel = $variavel; $variavel <= $variavel2; --$variavel){
        
        echo $variavel;

    }
}
