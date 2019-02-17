<?php
    function test_Prime($number) {
        for($i = 2; $i < $number ; $i++) {
            if($number == 2 || $number == 1) {
                return true;
            }
            else if($number % $i == 0) {
                return false;
            }
            else {
                return true;
            }
        }
    }
    function large_Prime($arr) {
        $largest = 0;
        for($i = 0; $i < count($arr) ; $i++) {
            if(test_Prime($arr[$i]))
            {   
                if($arr[$i] > $largest) {
                    $number = $i;
                    $largest = $arr[$i];
                }
            }
        }
        if($largest != 0) {
            return $number;
        }
        else {
            return -1;
        }
            
    }
    $a=array(4,6,8,10);
    $i=large_Prime($a);
    if($i != -1) {
        echo "gia tri $a[$i] vi tri $i";
    }
    else {
        echo "khong co so nghuyen to lon nhat";
    }
        