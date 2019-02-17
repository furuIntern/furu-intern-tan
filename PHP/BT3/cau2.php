<?php
    function output($arr) {
        for ($i = 0 ; $i < count($arr) ; $i++) {
            echo "$arr[$i] <br/>";
        }
    }
$arr=array(1,2,3,4);
output($arr);