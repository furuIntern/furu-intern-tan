<?php
    $mang=array(
        1 => array(
            'name' => 'Nguyễn Văn Cường',
            'blog' => 'freetus.net',
            'position' => 'admin'
        ),
        2 => array(
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetus.net',
            'position' => 'author'
        ),
        3 => array(
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetus.net',
            'position' => 'author'
        ),
        4 => array(
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetus.net',
            'position' => 'author'
        ),
        5 => array( 
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetus.net',
            'position' => 'author'
        )
    );
    $j=     ;       /* array want delete */
    for ($j  ; $j < count($mang) ; $j++){
        $k = $j + 1;
        $mang[$j] = $mang[$k];
    }
    $length = count($mang) - 1 ;
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