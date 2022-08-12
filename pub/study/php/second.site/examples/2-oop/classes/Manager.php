<?php

    class Manager extends Stuff {
        public $workersUnderControl;

        public function doWork() {
            echo "<h3>Manager $this->name controls workers: $this->workersUnderControl</h3>";
        } 

    }

?>