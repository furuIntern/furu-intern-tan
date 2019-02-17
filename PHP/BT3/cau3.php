<?php
    function large_number($arr) {
        $largest=0;
        for($i = 0; $i < count($arr) ; $i++) {
            if($arr[$i] > $largest )
            {   
                $number = $i;
                $largest = $arr[$i];
            }
        }
        return $number;
    }
    $a=array(1,2,3,5,7);
    $i=large_number($a);
    echo "gia tri $a[$i] vi tri $i";
?>