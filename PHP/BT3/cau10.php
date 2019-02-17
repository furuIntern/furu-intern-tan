<?php 
    function matran($arr) {
        $result = 0;
        $newarr= [];
        for ($i = 0 ; $i < count($arr) ; $i++) {
            for($j = 0 ; $j < count($arr[$i]) ; $j++) {
                if ($i==0) {
                    $newarr[] = $arr[0][$j];
                    if($arr[0][$j] != 0) {
                        $result+= $arr[0][$j];
                    }
                    
                }
                else{
                    if($arr[$i][$j] != 0 && $newarr[$j] != 0) {
                        $result += $arr[$i][$j];
                    }
                    $newarr[$j] = $arr[$i][$j];
                }
                
            }
        }
        return $result;
    }
$a= array(
        array(0,1,1,2),
        array(0,5,0,0),
        array(2,0,3,3)
    );
var_dump(matran($a));

