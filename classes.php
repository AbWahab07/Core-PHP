<?php
    // Basic class
    // object operator ->
    // Define the Book class.
    class Book
    {
        // Declare properties.
        var $title;
        var $author;
        var $publisher;
        var $yearOfPublication;
        var $format = 'Paperback';  // Default Values
        /*
         * You can set your default values to all scalar types including strings, ints, floats and
         * even arrays with multiple values, both associative and indexed.
         * When defining your default values, you can't set them to the results of functions. This is illegal
         * It means following would not be possible.
         * var $bar = strtoupper('foo');
         */

         /*
                 | General       |  Class
                |-------------------------------------------|
                | Variable      | Property / Attribute      |
                | Function      | Method                    |

        */

        // Declare a method.
        function sayHello()
        {
            return 'Hello!';
        }

        // The $this property is a shortcut to reference the current class instance
        // Declare a method.
        function summary()
        {
            echo 'Title: '      . $this->title        . PHP_EOL;
            echo 'Author: '     . $this->author       . PHP_EOL;
            echo 'Publisher: '  . $this->publisher    . PHP_EOL;
        }
    }

    // Create a new book instance.
    $book = new Book;

    // Set properties.
    $book->title                = 'Game of Thrones';
    $book->author               = 'George R R Martin';
    $book->publisher            = 'Voyager Books';
    $book->yearOfPublication    = 1996;


    // Define the Panda class.
    class Panda
    {
        // LOUD NAME PROPERTY
        var $loudName;

        // Contructor method.
        function __construct($name)
        {
            $this->loudName = $this->makeNameLoud($name);
        }

        // NAME LOUDENING METHOD
        function makeNameLoud($name)
        {
            return strtoupper($name);
        }
    }

    $panda = new Panda('name');
    //$panda1 = new Panda();
    //$panda2 = new Panda;

 ?>
