<?php

    // Closures are special functions. These types of functions don't have a name (PHP 5.3)
    $cat = function () {
        # code...
        echo 'Meow!';
    };
    $cat();

    // Passing functions to functions...
    // The PHP_EOL is a constant that will be replaced with a newline character
    function math(Closure $type, $first, $second) {
        # code...

        return $type ($first, $second);
    }

    $addition = function ($first, $second) {
        # code...
        return $first + $second;
    };

    $division = function ($first, $second) {
        # code...
        return $first / $second ;
    };

    var_dump(math( $addition, 5, 4));
    echo PHP_EOL;
    var_dump(math( $division, 9, 3));



 ?>
