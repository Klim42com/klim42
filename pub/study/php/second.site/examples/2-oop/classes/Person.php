<?php
class Person {



    const DEFAULT_NAME = "Unknown";

    public string $name = self::DEFAULT_NAME;
    private int $age;

    private static int $counter = 0;

    //public $mother;

    const ADULT_AGE = 18;


    static function showTotal() {
        // $this
        echo "<h1>Total persons: ".Person::$counter."</h1>";
    }

    public function __construct($name, $age = 18/*public $age = 18*/) {
        $this->name = $name;
        //$this->age  = $age;
        $this->setAge($age);
        self::$counter++;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if ($age >= 0 && $age <=120)
            $this->age = $age;
        else
            throw new Exception("Age out of [0, 120]");
    }

    public function show() {
        echo $this->stringHello;
        if ($this->getAge() < self::ADULT_AGE)
            echo "<h2>$this->name - ".$this->getAge()."</h2>";
        else
            echo "<h1>$this->name - ".$this->getAge()."</h1>";
        $this->hr();
    }

    use Hello {
        Hello::getHello as sayHello;
    }


    /*public*/ function hr() {
        //$this
        echo "<hr/>";
    }

    public function __clone() {
        echo "<h3>Person $this->name clone</h3>";

        //$this->mother = clone $this->mother;

    }

    public function __destruct() {
        echo "Object ".__CLASS__." $this->name : $this->age deleted<br/>";
        self::$counter--;
    }
}
