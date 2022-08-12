<?php
class Person1 {
    public string $name = 'Unknown';
    public int $age;
    const ADULT_AGE = 18;

    public function __construct ($name, $age = 11)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show () {
        if (self::ADULT_AGE > $this->age){
        echo "<h2>$this->name - $this->age</h2>";
        $this->hr();
        } else {
            echo "<h1>$this->name - $this->age</h1>";
            $this->hr();
        }
    }
    public function hr () {
        echo "<hr/>";
    }
    public function MyMethod () {
        echo "Method - ". __METHOD__;
        $this->hr();
    }
    public function MyClass () {
        echo "Class - ". __CLASS__;
        $this->hr();
    }
    public function __destruct () {
        echo "Object ". __CLASS__ ." $this->name deleted!";
        $this->hr();
    }
}
