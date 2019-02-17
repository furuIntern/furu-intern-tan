<?php
    function tbcong($arr) {
        $sum = 0;
        for($i = 0 ; $i < count($arr) ; $i++) {
            $sum += $arr[$i];
        }
        return $result=$sum/$i;
    }
$a=array(1,2,3,4);
echo $result=tbcong($a);