<?php

    // Defined Constants
    // Constants used outside of classes (I like to call this the Global scope.) are defined using a special function
    // Convention for programmers is to write constants in uppercase, and use underscores for spaces.
    // THIS_IS_A_CONSTANT.
    define('PI', 3.14159265359);

    // Echo the value of PI.
    echo PI; // don't use $ sign.

    // Class Constants
    class Circle
    {
        /**
         * The value of PI.
         */
        const PI = 3.14159265359;

        /**
         * Calculate the circumference of a circle from diameter.
         *
         * @param  mixed $diameter
         * @return mixed
         */
        public function circumference($diameter)
        {
            return $diameter * self::PI; // you can't use $this to access a class constant
        }
    }

    // you don't even need a class instance to access the constant.
    // The double :: colon operator is actually known as the Scope Resolution Operator, or even the Paamayim Nekudotayim
    echo Circle::PI;
 ?>
