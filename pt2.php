<?php
    $a=0;
    $b=12;
    $c=-12;
    if($a == 0){
        $x=-$c/$b;
        echo 'phuong trinh co nghiem la: ';
        echo $x;
    }
    else
    {
        $denta=pow($b,2)-4*$a*$c;
        if($denta > 0)
        {
            $x1=(-$b+sqrt($denta))/2*a);
            echo 'phuong trinh co nghiem thu 1 la: ';
            echo $x1;
            $x2=(-$b-sqrt($denta))/2*a);
            echo 'phuong trinh co nghiem thu 2 la: ';
            echo $x2;
        }
        else if($denta = 0)
        {
            $x= -$b/2*$a;
            echo 'phuong trinh co nghiem la: ';
            echo $x;
        }
        else{
            echo 'phuong trinh vo nghiem';
        }
    }
?>