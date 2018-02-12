<?php
    //Indexed
    $Names = array('Abdul', 'Ali', 'Bilal', 1);
    var_dump($Names);
    echo nl2br("\n");
    $array = ['Abdul', 'Ali', "Bilal", 1]; // isn't supported in 5.3 or ealrier versions of PHP
    var_dump($array);
    echo nl2br("\n");

    //Associative
    // => called array assignment operator.
    $ascArray = [
            'one' => 1,
            'two' => 2,
            'three' => 3,
            'four' => 4
    ];
    var_dump($ascArray);
    var_dump($ascArray['four']);

    //MutliDimensional
    $numbers = [
        'prime' => [2, 3, 5, 7],
        'fibnocci' => [1, 1, 2, 3, 5],
        'triangular' => [1, 3, 6, 10, 15]

    ];

    var_dump ( $numbers['prime'][3] );

 ?>
