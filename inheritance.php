<?php

    // extends keyword used for inheritance
    // Classes can have a limitless chain of inheritance.
    // First <-- Second <-- Third <-- Fourth
    // you can also pass classes which inherit from the type-hinted class
    class Panda
    {
        // Properties
        var $coat = 'fluffy';
        var $colour;

        // Method
        function getCoat()
        {
            return $this->coat;
        }

        // Method
        function getColour()
        {
            return $this->colour;
        }
    }

    class GiantPanda extends Panda
    {
        // DUN DUN DUUUUUUN!
        // overide properties by redeclaring them
        var $coat = 'less fluffy';

        // can also override methods by redeclaring them
    }

    $giantPanda = new GiantPanda;

    // Get coat type.
    echo $giantPanda->getCoat();


    // Type-hinting classes
    class Sephiroth
    {
        function equipWeapon(Weapon $weapon)
        {
            echo 'Die cloud die!';
        }
    }

    class Weapon
    {

    }

 ?>
