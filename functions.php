<?php

    // Basic Usage
    function echoSong() {
        echo "So take the photographs, and still frames in your mind.\n";
        echo "Hang it on a shelf in good health and good time.\n";
        echo "Tattoos and memories and dead skin on trial.\n";
        echo "For what it's worth, it was worth all the while.\n";
    }
    echoSong();

    // Retturn values
    function getMeaningOfLife() {
        return;
        echo 'This line will never be executed!';
    }

    // Parameters
    function welcome($name) {
        echo "Welcome to PHP Pandas, {$name}!\n";
    }

    // To receive any number of paramters use variadic functions (in PHP 5.6) or func_get_args ()
    function welcome() {

        // Get all function parameters.
        $names = func_get_args();

        // Iterate the names and welcome them.
        foreach ($names as $name) {
            echo "Welcome, {$name}!\n";
        }
     }

    // Type Hinting allowed for Array, CLosure, Class
    function sayHello(array $names) {
        foreach ($names as $name) {
            echo "Hello, {$name}!\n";
        }
     }

    sayHello(['Katie', 'Corissa', 'Lucy']);

    // You can't type-hint scalar values with PHP.
    // What this means, is that you can't type hint string, integer, boolean and float values
 ?>
