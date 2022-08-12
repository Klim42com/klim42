<?php

include 'MyClass.php';
include 'vendor/autoload.php';

class MyClassTest extends PHPUnit\Framework\TestCase {
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }

    public function testGcd() {
        $m = new MyClass();
        $this->assertEquals(21, $m->gcd(1071, 462));
        $this->assertEquals(21, $m->gcd(462, 1071));
        
    }
}
?>