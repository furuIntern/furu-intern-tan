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
    $lenght = count($mang);
    for ($i= 1 ; $i <= $lenght; $i++){
        echo $mang[$i]['name'];
        echo '<br/>';
        echo $mang[$i]['blog'];
        echo '<br/>';
        echo $mang[$i]['position'];
        echo '<br/>';
    }
?>