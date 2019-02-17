<?php
$arr= [];
$val=$_POST['number'];
function input($val,$arr) {
    array_push($arr,$val);
    return $arr;
}

var_dump(input($val,$arr));
