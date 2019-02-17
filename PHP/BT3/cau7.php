<?php
    function test($arr) {
        $j= count($arr) -1 ;
        for($i = 0 ; $i < count($arr) ; $i++) {
                if($arr[$i] != $arr[$j-$i]) {
                    return true;   
                }
                else if($j == $i) { 
                    return false;
                }
        }  
        return true;
    }
    $a=array(1,3,4,2,1);
    $result=test($a);
    if(!$result) {
        echo "mang doi xung";
    }
    else{
        echo "khong doi xung";
    }