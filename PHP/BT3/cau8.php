<?php
    function del($index,$arr) {
        $result= [];
        foreach ($arr as $value) {
            if($index != $value) {
                    $result[] = $value;
                }
                
            }
            return $result;
        }
       
    $a= array(1,2,3,4,5,);
    $result=del(3,$a);
    var_dump($result);
    
?>