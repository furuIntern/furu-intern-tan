<?php
function del($arr) {
    $result= [];
    $val=$arr[0];
    $result[]=$arr[0];
    for ($i= 1; $i < count($arr) ; $i++) {        
        if ($val != $arr[$i]) {
            $result[] = $arr[$i];
            $val = $arr[$i];
        }
    }
    return $result;
}
$a= array(1,2,3,3,5);
$result=del($a);
var_dump($result);
?>