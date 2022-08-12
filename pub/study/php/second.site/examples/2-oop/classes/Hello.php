<?php

trait Hello {
    public $stringHello = "<h2 style='color:red'>Hello<h2>";

    function getHello() {
        return $this->stringHello;
    }


}
?>