<?php 
    $n = 6;

    if ($n >= 4) {
            echo $n, "é maior ou igual a 4";
    }

    $n1 = 10;
    $n2 = 10;

    $result = ($n1 % $n2)%2;

    if ($result ==1){
        echo "<br>", $result, "é impar";
    } else {
        echo "<br>", $result, "é par"; 
    }
?>