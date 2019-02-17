<?php
    function input($string_number) {
            $val=explode(',',$string_number);
            return $val;
    }
    $value=$_POST['number'];
    var_dump(input($value));
?>