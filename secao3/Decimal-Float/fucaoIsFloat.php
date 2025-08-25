<?php

    $decimal = 25.50;
    $nome = "Eduardo";

    if (is_float($decimal)) {
        echo "É um numero decimal<br><br>";
    } else { 
        echo "Não é um numero decimal<br><br>";
    }

    if (is_float($nome)) {
        echo "É um numero decimal<br><br>";
    } else {
        echo "Não é um numero decimal<br><br>";
    }