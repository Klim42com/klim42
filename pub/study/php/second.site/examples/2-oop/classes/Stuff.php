<?php

abstract class Stuff extends Person {

    public $salary;

    public function __construct($name, $age, $salary) {
        parent::__construct($name, $age);
        
        $this->salary = $salary;
    }

    public function increaseSalary($procent) {
        $this->salary = $this->salary*(100+$procent)/100;
    }

    public function show() {
        parent::show();

        echo "<h1>$this->salary</h1>";
        $this->hr();
        //echo $this->getAge();
        //echo $this->age;
        //$this->hr();

    }

    public abstract function doWork();
    


}


?>