<?php

/**
 * My math class
 * 
 */
class MyClass {

    public function power($x, $y)
    {
        return pow($x, $y);
    }

    /**
     * Global common divider
     * @param int $k1 - first number
     * @param int $k2 - second number
     * @return int global common divider of $k1 and $k2
     */
    function gcd($k1, $k2)
    {
        while ( ($k3 = $k1 % $k2) != 0) {
            $k1 = $k2;
            $k2 = $k3;
        }

        return $k2;


    }
}