<?php
    /* ax^2+bx+c=0*/ 
    $a_float=0;
    $b_float=12;
    $c_float=-12;
    if($a == 0){
        $x=-$c/$b;
        echo 'phuong trinh co nghiem la: ';
        echo $x;
    }
    else
    {
        $denta_float=pow($b_float,2)-4*$a_float*$c_float;
        if($denta_float > 0)
        {
            $x1_float=(-$b_float+sqrt($denta_float))/2*a_float);
            echo 'phuong trinh co nghiem thu 1 la: ';
            echo $x1_float;
            $x2_float=(-$b_float-sqrt($denta_float))/2*a_float);
            echo 'phuong trinh co nghiem thu 2 la: ';
            echo $x2_float;
        }
        else if($denta_float = 0)
        {
            $x_float= -$b_float/2*$a_float;
            echo 'phuong trinh co nghiem la: ';
            echo $x_float;
        }
        else{
            echo 'phuong trinh vo nghiem';
        }
    }
?>
