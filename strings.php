<?php

    //Sring interpolation
    //It simply means that we can embed values within a string. It's best to wrap interpolated values within { curly braces }
    $val = 'Foo';
    echo nl2br("value is {$val} \n");
    //echo nl2br("foo isn't\n bar");
    echo 'value is $val';
    echo nl2br("\n");

    //Concatenation - In PHP we use the period . character to perform concatenation.
    $initial = 'My name is';
    $name = 'Abdul';
    $fullname = $initial . $name;
    echo $fullname;
 ?>
