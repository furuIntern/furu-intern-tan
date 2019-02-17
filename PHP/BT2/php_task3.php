<?php
    /* test parity */
    $number=$_POST['number'];
    if($number == 0) {
        echo "đây không là số lẻ hay chẳn </br>";
    }
    else if($number % 2 == 0) {
        echo "đây là số chẳn </br>";
    }
    else {
        echo "đây là số lẻ </br>";
    }
    /*test prime number*/ 
    for($i = 2; $i < $number ; $i++) {
        if($number == 2 || $number == 1) {
            echo "đây là số nguyên tố </br>";
        }
        else if($number % $i == 0) {
            echo "đây không là số nguyên tố </br>";
            break;
        }
        else {
            echo "đây là số nguyên tố </br>";
        }
    }
    $factorial = 1;
    for($i = 2 ; $i <= $number ; $i++) {
        $factorial *= $i;
    }
    echo $factorial ;
?>