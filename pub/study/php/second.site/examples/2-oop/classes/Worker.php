<?php
    class Worker extends Stuff implements CanDig {
        public $opPerMin;

        public function doWork() {
            echo "<h3>Worker $this->name do operations: $this->opPerMin</h3>";
        }

        public function startDig() {
            echo "Worker $this->name start digging<br>";
        }
        public function stopDig() {
            echo "Worker $this->name stop digging<br>";
        }

        public function __toString() {
            return "Name: ".$this->name." Age: ".$this->getAge();
        }
    }

?>