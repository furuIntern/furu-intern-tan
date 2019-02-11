<?php
    $mang=array(
        1 => array(
            'name' => 'a',
            'blog' => 'freetus.net',
            'position' => 'admin'
        ),
        2 => array(
            'name' => 'b',
            'blog' => 'freetus.net',
            'position' => 'user'
        ),
        3 => array(
            'name' => 'c',
            'blog' => 'freetus.net',
            'position' => 'user'
        ),
        4 => array(
            'name' => 'd',
            'blog' => 'freetus.net',
            'position' => 'user'
        ),
        5 => array( 
            'name' => 'e',
            'blog' => 'freetus.net',
            'position' => 'user'
        )
    );
    $k= 2;
    $mang[$k]['name'] = '3';
    $mang[$k]['blog'] = '4';
    $mang[$k]['position'] = '5';
    for ($i= 1 ; $i <= $length ; $i++){
        echo $mang[$i]['name'];
        echo '<br/>';
        echo $mang[$i]['blog'];
        echo '<br/>';
        echo $mang[$i]['position'];
        echo '<br/>';
    }
    echo $length;
?>