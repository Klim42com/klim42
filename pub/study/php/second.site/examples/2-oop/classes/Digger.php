<?php

    class Digger implements CanDig {
        function startDig() {
            echo 'Digger start working<br>';
        }
        function stopDig() {
            echo 'Digger stop working<br>';
        }
    }

?>